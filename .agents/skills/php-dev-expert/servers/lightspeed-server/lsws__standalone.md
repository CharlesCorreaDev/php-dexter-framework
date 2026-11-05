# Standalone | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/standalone/

---

# Standalone Installation[¶](#standalone-installation "Permanent link")

This guide shows you how to install LiteSpeed Web Server in any non-control-panel, Apache-based environment.

Warning

Please do not directly perform these steps on a production server. It is highly recommended to run though a test first.

## LiteSpeed Web Server Installation[¶](#litespeed-web-server-installation "Permanent link")

Depending on your environment, these steps may disable some panel features–most likely the PHP-related features–as this installation will have its own LSPHP.

This guide was made and tested on CentOS 7.X. Please change the commands or values to your system's equivalent.

### Download[¶](#download "Permanent link")

In this example, you will be installing the Linux x86 version of LiteSpeed Web Server v6.3.4. Download the package from [LiteSpeed](https://www.litespeedtech.com/products/litespeed-web-server/download):

```
wget https://www.litespeedtech.com/packages/6.0/lsws-6.3.4-ent-x86_64-linux.tar.gz
```

Unpack it:

```
tar xzvf lsws-6.3.4-ent-x86_64-linux.tar.gz
cd lsws-6.3.4
```

Save your license key, being sure to replace `YOUR_LICENSE_KEY` with the actual key:

```
echo "YOUR_LICENSE_KEY" > serial.no
```

Tip

If this is your first time using LSWS, you can install it with a trial license, if you prefer. Get your trial [here](https://www.litespeedtech.com/products/litespeed-web-server/download/get-a-trial-license) and place the `trial.key` file into the `lsws` directory.

Stop Apache before beginning LSWS installation:

```
systemctl stop httpd
```

### Install LSWS[¶](#install-lsws "Permanent link")

Install LSWS:

```
./install.sh
```

During the installation, there are several options that need to be configured. Most options can be left as the default. Only the following need to be set:

- **Hosting control panel**: `None`
- **User**: `apache`
- **Group**: `apache`
- **HTTP port**: `80`

Tip

**User** and **Group** must be same as the user and group that runs Apache (generally `apache:apache` on CentOS, `www-data:www-data` on Ubuntu).

### Install PHP[¶](#install-php "Permanent link")

Install [the LiteSpeed repository](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:php:configuring-lsws-for-php) for PHP:

```
rpm -Uvh http://rpms.litespeedtech.com/centos/litespeed-repo-1.1-1.el7.noarch.rpm
```

Install your preferred PHP version. PHP 7.0 is used below as an example:

```
yum install lsphp70*
```

### Complete Configuration in WebAdmin Console[¶](#complete-configuration-in-webadmin-console "Permanent link")

You may log into the WebAdmin Console at `https://YOUR_SERVER_IP:7080`. If you are unable to access WebAdmin, please verify that your firewall is not blocking it.

Use the username and password you were asked to set during the install script. If you need to reset these, please run the following command:

```
/usr/local/lsws/admin/misc/admpass.sh
```

[![](../images/standalone01.jpg)](https://docs.litespeedtech.com/lsws/images/standalone01.jpg)

Navigate to **Configuration > Server > Using Apache Configuration File** and set the following:

- **Load Apache Configuration**: `Yes`
- **Auto Reload On Changes**: Use Apache binary wrapper`
- **Apache Binary Path**: Use `which httpd` to locate
- **Apache Configuration Path**: Generally located in `/etc/httpd` or `/etc/apache2`
- **Apache Port Offset**: `0`
- **Apache IP Offset**: `0`
- **PHP suEXEC**: `Yes`
- **PHP suEXEC Max Conn**: Number of concurrent PHP process a single site can have

Note

If **Apache Reload on Changes** is enabled, Apache may be unable to start, due to the Apache binary wrapper. LSWS will be started instead of Apache. To run Apache and LSWS in parallel, please specify an **Apache Port Offset**, and set **Apache Reload on Changes** to `NO`

[![](../images/standalone02.jpg)](https://docs.litespeedtech.com/lsws/images/standalone02.jpg)

Navigate to **Configuration > Server > HT Access** and set the following:

- **Allow Override**: Select every box except `None`
- **Access File Name**: `.htaccess`

Restart LSWS for the configuration to take effect.

### Configure PHP[¶](#configure-php "Permanent link")

Add the following to `.htaccess`, replacing `XX` with the PHP version you installed earlier:

```
<IfModule Litespeed>
AddHandler application/x-httpd-phpXX .php
</IfModule>
```

Access a test page to check the result:

[![](../images/standalone03.jpg)](https://docs.litespeedtech.com/lsws/images/standalone03.jpg)

As you can see from the paths, we are running PHP 7.0. Additionally, note that it shows `Server API LiteSpeed V7.2`.

#### Changing the PHP Version[¶](#changing-the-php-version "Permanent link")

Install the new PHP version you need, for example 7.3:

```
yum install lsphp73*
```

Restart LSWS so it can detect the new PHP versoin, and add following content to `.htaccess`:

```
<IfModule Litespeed>
AddHandler application/x-httpd-php73 .php
</IfModule>
```

Check phpinfo, and you will see from the paths that it's PHP 7.3 now:

[![](../images/standalone04.jpg)](https://docs.litespeedtech.com/lsws/images/standalone04.jpg)

So it is the same for other PHP versions, like 7.2:

[![](../images/standalone05.jpg)](https://docs.litespeedtech.com/lsws/images/standalone05.jpg)

#### Compiling PHP Extensions[¶](#compiling-php-extensions "Permanent link")

Let's say you want compile the PHP extension `timezonedb` for PHP 7.3.

Install dependencies:

```
yum install -y lsphp73-devel make gcc glibc-devel
```

Compile it:

```
/usr/local/lsws/lsphp73/bin/pecl install timezonedb
```

Add it to the configuration file:

```
echo "extension=timezonedb.so" > /usr/local/lsws/lsphp73/etc/php.d/20-timezone.ini
```

[![](../images/standalone06.jpg)](https://docs.litespeedtech.com/lsws/images/standalone06.jpg)

Tip

LiteSpeed Web Server runs PHP in detached mode by default. You may need to kill the current `lsphp` process in order to load the new configuration.

### Switching Back to Apache[¶](#switching-back-to-apache "Permanent link")

Stop LSWS to release 80/443 port:

```
/usr/local/lsws/bin/lswsctrl stop
```

Start Apache again:

```
systemctl start httpd
```

[![](../images/standalone07.jpg)](https://docs.litespeedtech.com/lsws/images/standalone07.jpg)

As the screenshot demonstrates, the Server API has changed to `CGI/FastCGI`.

## Convert Standalone Apache to LiteSpeed[¶](#convert-standalone-apache-to-litespeed "Permanent link")

Now we will show how to set up LSWS on a server that already has a working Apache installation but no control panel.

### Install LiteSpeed Speed Web Server[¶](#install-litespeed-speed-web-server "Permanent link")

#### Download[¶](#download_1 "Permanent link")

Download LSWS tarball from the [LiteSpeed Technologies website](http://www.litespeedtech.com/download/litespeed-web-server-download).

Run the following commands from SSH as root

```
cd /root
wget http://www.litespeedtech.com/packages/5.0/lsws-5.3.8-ent-x86_64-linux.tar.gz
```

Note

Replace the values in the URL to control for your OS and which version of LSWS you wish to download:

- `lsws-5.3.8-ent-x86_64-linux` = LSWS Enterprise 5.3.8 for 64bit Linux
- `lsws-5.3.8-std-i386-linux` = LSWS Standard 5.3.8 for 32bit Linux
- `lsws-5.3.8-ent-x86_64-freebsd6` = LSWS Enterprise 5.3.8 for 64bit FreeBSD 6.x

#### Unpack[¶](#unpack "Permanent link")

```
tar zxfv  lsws-5.3.8-ent-x86_64-linux.tar.gz
```

#### Run the installation script[¶](#run-the-installation-script "Permanent link")

Make sure to put the license file (`trial.key` or paid license `serial.no` file) in the unpacked folder.

```
cd lsws-5.3.8
./install.sh
```

The installer will ask you a number of questions (covered in detail [here](http://www.litespeedtech.com/docs/webserver/install)). Choose the default setting when in doubt, but you have to set the same username and groupname as Apache for the LiteSpeed process to run as (choosing LiteSpeed default setting `nobody:nobody` may create file permission problem):

```
  * LiteSpeed target install directory (/usr/local/lsws).
  * Assign the same username and group as Apache for LSWS to run as (You need to check with Apache configuration or Apache running process. It maybe nobody:nobody, apache:apache or www-data:www-data etc.)
  * Listen port (8088)(8088 is for sample testing site only. LSWS will automatically check Apache configuration for Listening port if "Load Apache Configure" selected as instructed below).
  * Default Web Admin Port:7080
  * Assign a username and password for LSWS web admin console.
  * Your email address as the Administrators email.
```

### Install PHP[¶](#install-php_1 "Permanent link")

Enable the LiteSpeed repository and download LSPHP from our repository. See [instructions](lsws__extapp__php__getting_started.md) here. You may have a default `php.ini` file installed through RPMs and you just need to make some changes to match it to the existing Apache PHP. Check both phpinfo pages for any differences.

### Load Apache Configuration in LSWS[¶](#load-apache-configuration-in-lsws "Permanent link")

Open the LiteSpeed WebAdmin Console and, under **Configuration > Server > General**, change configurations in **Using Apache Configuration File** table, like so:

- **Load Apache Configuration**: `Yes`
- **Auto Reload On Changes**: `Use Apache Binary Wrapper`
- **Apache Configuration File**: `/usr/local/apache/conf/httpd.conf`
- **Apache Port Offset**: `2000` (Try LiteSpeed on port `2080` and `2443` first, change to `0` later, do NOT use `8088` or `8008`)
- **Apache IP Offset**: `0`
- **PHP suEXEC**: `Yes` (Run PHP in suEXEC mode)
- **PHP suEXEC Max Conn**: `5` (The maximum PHP processor each account can have)

Notes

- **PHP suEXEC Max Conn** can be adjusted based on how many sites you are hosting and how big they are. For a server dedicated to a large Wordpress or vBulletin site, you can safely increase it to `10`, `15`, or `20`. Try different values and see what is the best for your situation.
- The default Apache Configuration File location depends on the OS. For example, for CentOS, it is located at `/etc/httpd/conf/httpd.conf`; for WHM/cPanel, it is `/usr/local/apache/conf/httpd.conf`; for Debian Apache2, it is `/etc/apache2/apache2.conf`.
- We set **Apache Port Offset** to `2000` in this example, but most of the time, you cannot test other ports. Applications like WordPress expect the backend port to be 80 or 443. In this case, you should set **Apache Port Offset** to `0` and make sure to stop Apache before starting LSWS for testing. You cannot run both Apache and LiteSpeed at the same time when **Apache Port Offset** is `0` .

You may have environment parameters like these set in your Apache conf file in `/etc/apache2/envvars` or other locations:

```
User ${APACHE_RUN_USER}
Group ${APACHE_RUN_GROUP}
...
```

These must be included in **WebAdmin Console > Apache Environment > Using Apache Configuration File**, like so:

```
APACHE_RUN_USER=www-data
APACHE_RUN_GROUP=www-data
APACHE_PID_FILE=/var/run/apache2.pid
APACHE_RUN_DIR=/var/run/apache2
```

LiteSpeed may run into an "absolute path" problem like this:

```
[/etc/apache2/apache2.conf:250] Failed to get absolute path for [/usr/local/apache/ports.conf]!
2015-07-06 12:37:03.282 ERROR [/etc/apache2/apache2.conf:267] Failed to get absolute path for     [/usr/local/apache/conf.d/]!
2015-07-06 12:37:03.282 ERROR [/etc/apache2/apache2.conf:270] Failed to get absolute path for   [/usr/local/apache/sites-enabled/]!
2015-07-06 12:37:03.582 ERROR HttpListener::start(): Can't listen at address 127.0.0.1:80: Address already in use!
2015-07-06 12:37:03.582 ERROR HttpServer::addListener(127.0.0.1:80) failed to create new listener
2015-07-06 12:37:03.882 ERROR HttpListener::start(): Can't listen at address 63.247.170.35:80: Address already in use!
2015-07-06 12:37:03.883 ERROR HttpServer::addListener(63.247.170.35:80) failed to create new listener
2015-07-06 12:37:03.883 ERROR [:5] Listener for default is not available!
2015-07-06 12:37:16.601 ERROR [ADMIN] authentication failed!
2015-07-06 12:38:12.156 ERROR [ADMIN] authentication failed!
```

This means that your apache2 configuration may have some relative path problems. You can clear the above errors by setting **ServerRoot** in that apache2 configuration, like so:

```
ServerRoot "/etc/apache2"
```

Most of the time, LSWS will load your Apache configuration without any error.

### Test and switch to LiteSpeed[¶](#test-and-switch-to-litespeed "Permanent link")

If your application, such as WordPress or Magento, doesn't allow you to run offset port for LSWS you won't be able to test LiteSpeed with Apache is running at the same time. You will need to stop Apache and start LSWS.

If your application allows it, you can set a port offset such as `2000`. Start LSWS and test your websites on offset port 2080. Test secured sites on port 2443. This way you may run both Apache (port 80 or 443) and LiteSpeed (port 2080 or 2443) at the same time.

If there are any problems, they are probably PHP issues. Check LiteSpeed's error log, stderr log or PHP errors log for details. Server error log and stderr log are set to the following location by default unless you customize them:

```
/usr/local/lsws/logs/error.log
/usr/local/lsws/logs/stderr.log
```

PHP error logs are normally located in the directories where the PHP scripts run. Use the following command from your server's document root to find them:

```
find . -name php_errors.log
```

Check the appropriate `php_errors.log` and try to clear the errors. Sometimes the problem is as simple as an undefined `date.timezone` in `php.ini`.

If all sites work properly, stop Apache, change "Apache Port Offset" to 0, and restart LSWS. All hosted website will be powered by LiteSpeed now.

Tip

Remember to change rc script configuration to remove httpd from the services that get started automatically during a reboot. For example, On CentOS, try this from a root shell:

```
 chkconfig httpd off
```

You may also want to add LSWS to be started automatically during a reboot:

```
 chkconfig lsws on
```

On Debian, try the following:

```
update-rc.d -f apache2  remove
update-rc.d lsws defaults
```

### Monitor[¶](#monitor "Permanent link")

If you have a script that monitors for the web server process, remember to update it to reflect the location of LSWS.
