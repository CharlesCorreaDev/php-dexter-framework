# GeoLocation Support in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/geoip/

---

# GeoLocation Support[¶](#geolocation-support "Permanent link")

LiteSpeed Web Server supports GeoLocation databases, including MaxMind GeoIP2, MaxMind GeoIP Legacy, and IP2Location. MaxMind discontinued their Legacy databases On January 2, 2019, hence we recommend you no longer use it.

As of LSWS v5.3, LSWS supports the [MaxMind GeoIP2 format database](https://www.maxmind.com/en/geoip2-databases), `.mmdb`. The database path configuration is in the same location as the legacy DB (**Configuration > Server > General > General settings > IP to GeoLocation DB**). Set the database path to either `.dat` or `.mmdb`.

There are two sections in the LSWS WEB Admin Console settings: **IP to GeoLocation DB** and **IP2Location DB**. Use **IP to GeoLocation DB** for both the MaxMind Legacy DB and MaxMind GeoIP2 DB. Use **IP2Location DB** for the [IP2Location database](https://www.ip2location.com/). You should only use one location database at a time.

[![!GeoIP Settings](../images/geoip01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip01.png)

To set up and enable GeoIP or IP2Location on LSWS, you will need to choose one database, download and install the database to a directory, setup the database path in LSWS Admin, enable GeoIP or IP2Location through the Apache configuration, and finally run some tests.

## Enable MaxMind GeoIP2[¶](#enable-maxmind-geoip2 "Permanent link")

### Download GeoIP2 Database[¶](#download-geoip2-database "Permanent link")

Let's assume that you will store the DB in `/usr/share/GeoIP/`.

Starting December 30, 2019, you cannot `wget` the GeoLite2 database anymore. Instead, you will need to register for a MaxMind account and obtain a license key in order to [download GeoLite2 databases](https://blog.maxmind.com/2019/12/18/significant-changes-to-accessing-and-using-geolite2-databases/).

After download, you can unzip it:

```
tar -zxvf GeoLite2-Country_20200114.tar.gz
```

Then, move the file `GeoLite2-Country.mmdb` to

```
/usr/share/GeoIP/GeoLite2-Country.mmdb
```

### Configure the Database[¶](#configure-the-database "Permanent link")

In LSWS WebAdmin, configure the database location and name(Both **DB File Path** and **DB Name** are mandatory and can not be empty). Your choice of DB name is important: you must use `COUNTRY_DB` for a country database, and `CITY_DB` for a city database. Navigate to **Configuration > Server > General > General settings** and set **[IP to GeoLocation DB](https://www.litespeedtech.com/docs/webserver/config/general#geolocationDB)** to the database path. Then set **DB Name** to `COUNTRY_DB` or `CITY_DB`. **Environment Variables** and **Notes** are optional.

[![!GeoIP Enable](../images/geoip02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip02.png)

[![!GeoIP Enable](../images/geoip03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip03.png)

Alternately, you can edit the LSWS configuration file directly:  `vi /usr/local/lsws/conf/httpd_config.xml`

And add the following before `<tuning>`:

```
<ipToGeo>
   <geoipDB>
     <geoipDBFile>/usr/share/GeoIP/GeoLite2-Country.mmdb</geoipDBFile>
     <geoipDBName>COUNTRY_DB</geoipDBName>
   </geoipDB>
</ipToGeo>
```

### GeoIP2 Environment Variables[¶](#geoip2-environment-variables "Permanent link")

The full power of GeoIP2 requires the use of environment variables in the LiteSpeed configuration. The format used is designed to be as similar as possible to the Apache `mod_maxminddb` environment described [here](https://github.com/maxmind/mod_maxminddb), specifically for the `MaxMindDBEnv` variable. Each environment variable is specified in the environment text box as one line:

- The name of the environment variable that will be exported, for example `GEOIP_COUNTRY_NAME`
- A space
- The logical name of the environment variable, which consists of:
  - The name of the database as specified in the **DB Name** field as the prefix. For example, `COUNTRY_DB`
  - A forward slash `/`
  - The name of the field as displayed in `mmdblookup`. For example: `country/names/en`

Thus the default generates:

```
GEOIP_COUNTRY_NAME COUNTRY_DB/country/names/en
```

If you wanted the country code to be displayed in Spanish, you would enter the environment variable:

```
GEOIP_COUNTRY_NAME COUNTRY_DB/country/names/es
```

Note that if a variable is used by multiple databases (for example, the default `GEOIP_COUNTRY_NAME`), you need to override the value in the last database specified (or all databases in case they get reordered, just to be safe).

The default environment variables vary by database and are designed to be as similar to the legacy GeoIP environment variables as possible.

Our default list is:

```
"GEOIP_COUNTRY_CODE", "/country/iso_code"
"GEOIP_CONTINENT_CODE", "/continent/code"
"GEOIP_REGION", "/subdivisions/0/iso_code"
"GEOIP_METRO_CODE", "/location/metro_code"
"GEOIP_LATITUDE", "/location/latitude"
"GEOIP_LONGITUDE", "/location/longitude"
"GEOIP_POSTAL_CODE", "/postal/code"
"GEOIP_CITY", "/city/names/en"
```

You can customize the configuration to add any additional variables you wish. In WebAdmin Console, enter additional variables in the **Configuration > Server > General > General settings > IP to GeoLocation DB Configuration > Environment Variables** setting.

Tip

By design, you must use the `GEOIP_` prefix for environment variables when using them in rewrite rules. This allows the rewrite engine to perform a GEOIP lookup. Customized environment variables that begin with another prefix, such as `HTTP_` for example, only work with PHP code. They do *not* work with rewrite rules.

##### Example 1[¶](#example-1 "Permanent link")

You can add the following:

```
GEOIP_REGION_NAME CITY_DB/subdivisions/0/names/en
```

Note

`subdivisions` is an array and must be referenced by index (usually `0` or `1`).

Please make sure the correct entry name is used. For example, the following is incorrect: `name` should be `names`.

```
GEOIP_REGION_NAME CITY_DB/subdivisions/0/name/en
```

##### Example 2[¶](#example-2 "Permanent link")

You can customize a name as `MyTest_COUNTRY_CODE`, like so:

```
MyTest_COUNTRY_CODE CITY_DB/country/iso_code
```

[![!GeoIP Variables](../images/geoip04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip04.png)

It will show on the `phpinfo.php` page as:

```
 _SERVER["MyTest_COUNTRY_CODE"]  US
```

`US` will be replaced by the country code you are visiting from, such as `SG` or others.

##### Example 3[¶](#example-3 "Permanent link")

You can customize a name as `MyTest2_COUNTRY_CODE` by using a defined COUNTRY DB name `COUNTRY_DB_20190402` with a country database.

```
MyTest2_COUNTRY_CODE COUNTRY_DB_20190402/country/iso_code
```

[![!GeoIp Variables](../images/geoip05.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip05.png)

It will show on the `phpinfo.php` page as:

```
_SERVER["MyTest2_COUNTRY_CODE"] US
```

##### Example 4[¶](#example-4 "Permanent link")

You can customize all of the following:

```
HTTP_GEOIP_CITY CITY_DB/city/names/en
HTTP_GEOIP_POSTAL_CODE CITY_DB/postal/code
HTTP_GEOIP_CITY_CONTINENT_CODE CITY_DB/continent/code
HTTP_GEOIP_CITY_COUNTRY_CODE CITY_DB/country/iso_code
HTTP_GEOIP_CITY_COUNTRY_NAME CITY_DB/country/names/en
HTTP_GEOIP_REGION CITY_DB/subdivisions/0/iso_code
HTTP_GEOIP_LATITUDE CITY_DB/location/latitude
HTTP_GEOIP_LONGITUDE CITY_DB/location/longitude
```

[![!GeoIP Variables](../images/geoip06.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip06.png)

It will show on the `phpinfo.php` page as:

```
_SERVER["HTTP_GEOIP_CITY"]    Montville
_SERVER["HTTP_GEOIP_POSTAL_CODE"] 07045
_SERVER["HTTP_GEOIP_CITY_CONTINENT_CODE"] NA
_SERVER["HTTP_GEOIP_CITY_COUNTRY_CODE"]   US
_SERVER["HTTP_GEOIP_CITY_COUNTRY_NAME"]   United States
_SERVER["HTTP_GEOIP_REGION"]  NJ
_SERVER["HTTP_GEOIP_LATITUDE"]    40.90490
_SERVER["HTTP_GEOIP_LONGITUDE"]   -74.36460
```

[![!GeoIP Variables](../images/geoip07.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip07.png)

### Set "GeoIPEnable On"[¶](#set-geoipenable-on "Permanent link")

Enable GeoIP in Apache Config Navigate to **WHM > Service Configuration > Apache Configuration > Include Editor > Pre Main Include**, and select `All Versions` in the dropdown box. Add the following to the text box:

```
<IfModule LiteSpeed>
    GeoIPEnable On
</IfModule>
```

Alternately, you can add the above directly to **pre\_main\_global.conf** through the command line.

### Use GeoIP for Cache Varies[¶](#use-geoip-for-cache-varies "Permanent link")

If your website content varies depending on visitor location, you can use GeoLocation together with LiteSpeed Cache to create [Cache Varies](https://docs.litespeedtech.com/lscache/devguide/advanced/#cache-varies) based on any of the GeoIP variables listed earlier.

For example, to vary on the visitor's country, you can add the following rewrite rules to your `.htaccess` file:

```
<IfModule LiteSpeed>
  RewriteEngine on
  RewriteRule .* - [E=Cache-Control:vary=%{ENV:GEOIP_COUNTRY_CODE}]
</IfModule>
```

This set of rules will cache a copy of a page for users in Spain (for example), a different copy for users in Canada, and yet another copy for users in India.

You can use any GeoLocation variable for cache varies. For example, if your content doesn't vary by country, but it does vary by continent, you could use the same rules, but substitute `GEOIP_CONTINENT_CODE` for `GEOIP_COUNTRY_CODE`.

### Testing[¶](#testing "Permanent link")

On cPanel/WHM, you can add the following rewrite rules to your `.htaccess` file to control the redirect there.

#### Example 1: Block wp-login.php from certain countries[¶](#example-1-block-wp-loginphp-from-certain-countries "Permanent link")

To block WordPress `wp-login.php` or `xmlrpc.php` access from countries not in (GB|DK|US|IN):

```
<IfModule mod_geoip.c>
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} !^(GB|DK|US|IN)$
RewriteRule (wp-login|xmlrpc).php$ - [F,L]
</IfModule>
```

When you access `yourdomain.com/wp-login.php` from AU or any other non GB|DK|US|IN country, you should see a 403 error.

#### Example 2: Redirecting a client based on country[¶](#example-2-redirecting-a-client-based-on-country "Permanent link")

This example shows you how to redirect a client based on the country code that GeoIP sets.

```
GeoIPEnable On
# Redirect one country
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^CA$
RewriteRule ^(.*)$ http://www.canada.com$1 [R,L]

# Redirect multiple countries to a single page
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^(CA|US|MX)$
RewriteRule ^(.*)$ http://www.northamerica.com$1 [R,L]
```

Refer to [Maxmind](http://dev.maxmind.com/geoip/legacy/mod_geoip2/#Redirecting_a_client_based_on_country) for more rewrite examples.

### Troubleshooting[¶](#troubleshooting "Permanent link")

#### `GeoIPDBFile` directive is for Apache, not LSWS[¶](#geoipdbfile-directive-is-for-apache-not-lsws "Permanent link")

In Apache, you can use `GeoIPDBFile` directive to define the database, however it cannot be used for LiteSpeed. You should follow the beginning steps in this guide to define the database path from LSWS Web Admin Console or the LSWS configuration file directly.

#### GeoIP Rewrite Rules Infinite Loop[¶](#geoip-rewrite-rules-infinite-loop "Permanent link")

A user would like to set up GeoIP rules to direct traffic to the main domain's subfolder based on IP. The following rules have been set in .htaccess, however, it seems to cause a redirect loop.

```
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^US$
RewriteRule ^(.*)$ https://www.example.com/us/$1 [R,L]
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^SG$
RewriteRule ^(.*)$ https://www.example.com/sg/$1 [R,L]
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^MY$
RewriteRule ^(.*)$ https://www.example.com/my/$1 [R,L]
```

The redirect loop actually indicates the the GeoIP module is working.

The redirect error happens because the rules are evaluated again *after* the redirect is performed. So, if you access `/`, and it gets redirected to e.g. `/us`, then on `/us`, it will be asked to redirect *again* to `/us` - and you end up with a loop. The fix is to add an additional condition to prevent this, such as `RewriteCond %{REQUEST_URI} !^/us[NC]`. This way, you only redirect to `/us` if the country code from GeoIP matches US *and* the request URI doesn't already start with `/us`.

The final rules should be:

```
RewriteEngine on
RewriteCond %{REQUEST_URI} !^/us [NC]
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^US$
RewriteRule ^(.*)$ https://www.example.com/us/$1 [R,L]
RewriteCond %{REQUEST_URI} !^/sg [NC]
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^SG$
RewriteRule ^(.*)$ https://www.example.com/sg/$1 [R,L]
RewriteCond %{REQUEST_URI} !^/my [NC]
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^MY$
RewriteRule ^(.*)$ https://www.example.com/my/$1 [R,L]
```

#### Be more specific than "GeoIP not working"[¶](#be-more-specific-than-geoip-not-working "Permanent link")

Quite often we receive a report claiming that "GeoIP is not working". This is too vague. Is the GeoIP module note working? Or are the GeoIP rewrite rules not working as expected? It's best to clarify before logging any ticket.

Whether the GeoIP module is working can be easily verified through the following (change the country code `US` to your country code accordingly):

```
<IfModule mod_geoip.c>
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^US$
RewriteRule ^(.*)$ - [F,L]
</IfModule>
```

If it returns `403 forbidden`, then it means the GeoIP module is actually working.

GeoIP rewrite rules that do not work as expected may be more complicated. You will need to check the rules to look for issues such as a redirect loop. When needed, you can log a ticket with us. Let us know the rules set is not working as expected, and provide a more detailed test example for us to take a further look.

#### IP Does Not Return Certain SubDivision Information[¶](#ip-does-not-return-certain-subdivision-information "Permanent link")

Sometimes subdivision information is not returned. For example, country may be shown, but city or region is not.

The most likely explanation is that the database itself is missing that information. It is probably not a LiteSpeed issue.

You can access [mmdbinspect](https://github.com/maxmind/mmdbinspect#installing-on-redhat-or-centos-via-the-rpm) directly to verify the database information.

```
[root@test lsws]# mmdbinspect -db /usr/local/lsws/GeoLite2_City.mmdb 173.255.xxx.xxx
[
    {
        "Database": "/usr/local/lsws/GeoLite2_City.mmdb",
        "Records": [
            {
                "Network": "173.255.xxx.xxx/30",
                "Record": {
                    "city": {
                        "geoname_id": 5391959,
                        "names": {
                            "de": "San Francisco",
                            "en": "San Francisco",
                            "es": "San Francisco",
                            "fr": "San Francisco",
                            "ja": "サンフランシスコ",
                            "pt-BR": "São Francisco",
                            "ru": "Сан-Франциско",
                            "zh-CN": "旧金山"
                        }
                    },
                    "continent": {
                        "code": "NA",
                        "geoname_id": 6255149,
                        "names": {
                            "de": "Nordamerika",
                            "en": "North America",
                            "es": "Norteamérica",
                            "fr": "Amérique du Nord",
                            "ja": "北アメリカ",
                            "pt-BR": "América do Norte",
                            "ru": "Северная Америка",
                            "zh-CN": "北美洲"
                        }
                    },
                    "country": {
                        "geoname_id": 6252001,
                        "iso_code": "US",
                        "names": {
                            "de": "USA",
                            "en": "United States",
                            "es": "Estados Unidos",
                            "fr": "États-Unis",
                            "ja": "アメリカ合衆国",
                            "pt-BR": "Estados Unidos",
                            "ru": "США",
                            "zh-CN": "美国"
                        }
                    },
                    "location": {
                        "accuracy_radius": 200,
                        "latitude": 37.7751,
                        "longitude": -122.4193,
                        "metro_code": 807,
                        "time_zone": "America/Los_Angeles"
                    },
                    "postal": {
                        "code": "94141"
                    },
                    "registered_country": {
                        "geoname_id": 6252001,
                        "iso_code": "US",
                        "names": {
                            "de": "USA",
                            "en": "United States",
                            "es": "Estados Unidos",
                            "fr": "États-Unis",
                            "ja": "アメリカ合衆国",
                            "pt-BR": "Estados Unidos",
                            "ru": "США",
                            "zh-CN": "美国"
                        }
                    },
                    "subdivisions": [
                        {
                            "geoname_id": 5332921,
                            "iso_code": "CA",
                            "names": {
                                "de": "Kalifornien",
                                "en": "California",
                                "es": "California",
                                "fr": "Californie",
                                "ja": "カリフォルニア州",
                                "pt-BR": "Califórnia",
                                "ru": "Калифорния",
                                "zh-CN": "加利福尼亚州"
                            }
                        }
                    ]
                }
            }
        ],
        "Lookup": "173.255.xxx.xxx"
    }
]
[root@test lsws]# mmdbinspect -db /usr/local/lsws/GeoLite2_City.mmdb 204.197.xxx.xxx
[
    {
        "Database": "/usr/local/lsws/GeoLite2_City.mmdb",
        "Records": [
            {
                "Network": "204.197.xxx.xxx/20",
                "Record": {
                    "continent": {
                        "code": "NA",
                        "geoname_id": 6255149,
                        "names": {
                            "de": "Nordamerika",
                            "en": "North America",
                            "es": "Norteamérica",
                            "fr": "Amérique du Nord",
                            "ja": "北アメリカ",
                            "pt-BR": "América do Norte",
                            "ru": "Северная Америка",
                            "zh-CN": "北美洲"
                        }
                    },
                    "country": {
                        "geoname_id": 6252001,
                        "iso_code": "US",
                        "names": {
                            "de": "USA",
                            "en": "United States",
                            "es": "Estados Unidos",
                            "fr": "États-Unis",
                            "ja": "アメリカ合衆国",
                            "pt-BR": "Estados Unidos",
                            "ru": "США",
                            "zh-CN": "美国"
                        }
                    },
                    "location": {
                        "accuracy_radius": 1000,
                        "latitude": 37.751,
                        "longitude": -97.822,
                        "time_zone": "America/Chicago"
                    },
                    "registered_country": {
                        "geoname_id": 6252001,
                        "iso_code": "US",
                        "names": {
                            "de": "USA",
                            "en": "United States",
                            "es": "Estados Unidos",
                            "fr": "États-Unis",
                            "ja": "アメリカ合衆国",
                            "pt-BR": "Estados Unidos",
                            "ru": "США",
                            "zh-CN": "美国"
                        }
                    }
                }
            }
        ],
        "Lookup": "204.197.xxx.xxx"
    }
]
```

You'll notice the first IP returns subdivision information and second IP doesn't.

#### IP Not Blocked Due to Out-of-date Database[¶](#ip-not-blocked-due-to-out-of-date-database "Permanent link")

Assuming we have the following at `/etc/apache2/conf.d/userdata/geoip.conf`:

```
<IfModule mod_geoip.c>
RewriteEngine on
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} !^(GB|DK|US|IN)$
RewriteRule (wp-login|xmlrpc).php$ - [F,L]
</IfModule>
```

Testing from an IP in NG/Nigeria/- `192.0.2.0`, it should be blocked but it is not.

Further analysis shows the IP belongs to North Carolina, US in the downloaded MaxMind database. It looks like the record on that old database is incorrrect. If the database is not kept up to date, it will result in incorrect information.

You can keep the database up to date from time to time manually by doing a direct download, or you can use the [GeoIP Update tool](https://dev.maxmind.com/geoip/geoipupdate/), so your system automatically keeps the file up to date whenever MaxMind publishes an update.

#### MaxMind database update[¶](#maxmind-database-update "Permanent link")

Be careful when trying to overwrite the existing MaxMind database during upgrade. Overwriting a memory-mapped file will cause the mapped file to crash. When you update the database file, be sure to remove the old file first, copy the new file, and restart LSWS. Do no simply overwrite the existing file.

## IP2Location[¶](#ip2location "Permanent link")

IP2Location is a non-intrusive GeoIP solution to help you to identify visitor's geographical location, providing information such as country, region, city, latitude & longitude of city, ZIP code, time zone, connection speed, ISP, domain name, IDD country code, area code, weather station code and name, mobile carrier, elevation and usage type information. IP2Location uses a proprietary IP address lookup database and technology that doesn't invade the Internet user's privacy.

### Download IP2Location Database[¶](#download-ip2location-database "Permanent link")

Navigate to LiteSpeed Web Server directory:

`cd /usr/local/lsws`

Download [any sample database from IP2location](https://www.ip2location.com/developers#sample_ip2location_databases_bin) and save to this directory.

### Setup IP2Location database[¶](#setup-ip2location-database "Permanent link")

In LSWS WebAdmin, configure the database location. Navigate to **Configuration > Server > General > General settings > [IP2Location DB](https://www.litespeedtech.com/docs/webserver/config/general#ip2locDBFile)**, and enter **DB File Path**:

```
/usr/local/lsws/IP-COUNTRY-SAMPLE.BIN
```

Set **DB Cache Type** to `MemoryCache` [![!IP2Location](../images/geoip08.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip08.png)

Navigate to **Web Admin > Configurations > Your Virtual Hosts > Rewrite** to add rewrite rules that will control the redirect:

```
<IfModule LiteSpeed>
  RewriteEngine On
  RewriteCond %{ENV:IP2LOCATION_COUNTRY_SHORT} ^DE$
  RewriteRule ^(.*)$ http://www.google.co.uk [L]
</IfModule>
```

Refer to [Ip2location](https://www.ip2location.com/free/visitor-redirection#source-codes) for more rewrite examples.

### Verify IP2Location[¶](#verify-ip2location "Permanent link")

#### Change Your Source IP by Proxy[¶](#change-your-source-ip-by-proxy "Permanent link")

###### Method 1:[¶](#method-1 "Permanent link")

From [this site](https://hide.me/en/proxy), we can simply put in a web IP and choose a country from three(USA, Germany, Netherlands). If you want more than three countries, then you need to register for a paid plan. [![!Hide.me](../images/geoip09.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip09.png)

##### Method 2:[¶](#method-2 "Permanent link")

You can choose a free proxy server from online free resources, e.g. [Free\_Proxy](https://free-proxy-list.net/)

[![!Free Proxy](../images/geoip10.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/geoip10.png)

Set up the proxy IP with your browser. Here are the steps for Chrome:

1. Click **Settings**.
2. Click **Show advanced settings**
3. Scroll further down the list until you see **System**
4. Click **Open proxy settings**
5. Click the **LAN settings** button.
6. On the **Internet Properties** window, click the **LAN settings** button.
7. Uncheck the box that says **Automatically detect settings**.
8. In the **Proxy Server** section, click the checkbox to enable `Use a proxy server for your LAN...`
9. In the **Address** field, enter the IP Address and Port Number of your Proxy Server.
10. Press the **OK** button and then press **OK** again to save your settings.
11. Now when you surf the web, you will be surfing by using the Proxy Server.

#### Set Rewrite Rules[¶](#set-rewrite-rules "Permanent link")

Add the following rules to your domain's document root .htaccess:

```
# Redirect two specific countries
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^(DE)$
RewriteRule ^(.*)$ https://en.wikipedia.org/wiki/Germany [R,L]
```

#### Log[¶](#log "Permanent link")

`tail -f /PATH_TO_LSWS/log/error.log`

When you are using the Germany IP:

```
[REWRITE] Rule: Match '/' with pattern '^(.*)$', result: 2
[REWRITE] Cond: Match 'DE' with pattern '^(DE)$', result: 2
[REWRITE] Source URI: '/' => Result URI: 'https://en.wikipedia.org/wiki/Germany'
```

When you are using the Netherlands IP:

```
[REWRITE] Rule: Match '/' with pattern '^(.*)$', result: 2
[REWRITE] Cond: Match 'NL' with pattern '^(DE)$', result: -1
```

Note: `2` is a match, `-1` is not a match

##### Troubleshooting IP2Location[¶](#troubleshooting-ip2location "Permanent link")

- If the module is not working, make sure that the httpd user (e.g. `nobody`) has read access to the IP2Location database file(s) you are using.
- If the IP2Location variables do not show up please make sure that the client IP address is not on a private network such as `10.0.0.0/8`, `172.16.0.0/12` or `192.168.0.0/16`. IP2Location can only look up public IP addresses.

##### More Information[¶](#more-information "Permanent link")

- [IP Country Codes List:](https://www.ip2location.com/free/country-information)

## Map MaxMind GeoIP2 Variables to IP2Location[¶](#map-maxmind-geoip2-variables-to-ip2location "Permanent link")

If you have switched from the MaxMind GeoIP2 service to an IP2location database on your shared hosting server, many of your PHP scripts may still make use of the `GEOIP_*` environment variables `$SERVER['GEOIP_COUTRY_CODE']` and `$SERVER['GEOIP_ADDR']`. Because of the nature of shared hosting servers, it is impossible to remove these environment variables or get all customers to rename them in their scripts.

Luckily, LiteSpeed Web Server handles this scenario for you.

Starting from LSWS 5.4.4, `GEOIP_COUNTRY_CODE` is automatically mapped to `IP2LOCATION_COUNTRY_SHORT` and `GEOIP_ADDR` is automatically mapped to `IP2LOCATION_ADDR`.
