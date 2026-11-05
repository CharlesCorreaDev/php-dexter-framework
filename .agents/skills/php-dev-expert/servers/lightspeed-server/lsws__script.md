# One-Click Script | Installation | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/script/

---

# Install from One-Click Script[¶](#install-from-one-click-script "Permanent link")

Our One-Click script comes with several options and can be used with [any supported operating system](lsws__index.md#operating-system). Using this script, you can quickly and easily install LiteSpeed with it’s default settings.

The script includes a 15-day trial license by default. After the trial period, you can apply your own license or enter your serial number using the `--license [LICENSE_NO]` parameter during installation. [Licenses start at $0](https://www.litespeedtech.com/products/litespeed-web-server/lsws-pricing).

## Common uses[¶](#common-uses "Permanent link")

Here are two ways that `lsws1clk` is commonly used.

Install only:

- LiteSpeed Web Server
- LSPHP

```
bash <( curl -sk https://raw.githubusercontent.com/litespeedtech/lsws1clk/master/lsws1clk.sh )
```

Install the following:

- LiteSpeed Web Server
- LSPHP
- MariaDB
- WordPress
- LiteSpeed Cache plugin

```
bash <( curl -sk https://raw.githubusercontent.com/litespeedtech/lsws1clk/master/lsws1clk.sh ) -w
```

WordPress Tips

- A `-W` parameter will install WordPress as shown above, but it must still be configured through the browser.
- By default, a MariaDB database will be set up using this script. You can also specify another DB if needed, using the `--with-mysql` or `--with-percona` flags.
- If you already have a WordPress installation running on another server, it can be imported into LiteSpeed with no hassle using the `--wordpresspath` parameter.
- To completely install WordPress with your LiteSpeed installation, skipping the need for the browser installation process, use `--wordpressplus [SITEDOMAIN]`. The `--wpuser`, `--wppassword`, `--wplang`, and `--sitetitle` flags allow you to further customize the settings.

## Options[¶](#options "Permanent link")

### Essential Options[¶](#essential-options "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
| `-L` | `--license` | To use specified LSWS serial number. |
|  | `--adminuser [USERNAME]` | To set the WebAdmin username for LiteSpeed instead of admin. |
| `-A` | `--adminpassword [PASSWORD]` | To set the WebAdmin password for LiteSpeed instead of using a random one. |
|  | `--adminport [PORTNUMBER]` | To set the WebAdmin console port number instead of 7080. |
| `-E` | `--email [EMAIL]` | To set the administrator email. |

### PHP Configuration[¶](#php-configuration "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
|  | `--lsphp [VERSION]` | To set the LSPHP version, such as 84. We currently support versions '74, 81~85'. |

### DataBase Options[¶](#database-options "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
|  | `--mariadbver [VERSION]` | To set MariaDB version. We currently support versions up to 11.8. |
| `-R` | `--dbrootpassword [PASSWORD]` | To set the database root password. |
|  | `--dbname [DATABASENAME]` | To set the database name to be used by WordPress. |
|  | `--dbuser [DBUSERNAME]` | To set the WordPress username in the database. |
|  | `--dbpassword [PASSWORD]` | To set the WordPress table password in MySQL. |
|  | `--prefix [PREFIXNAME]` | To set the WordPress table prefix. |
|  | `--pure-mariadb` | To install LiteSpeed and MariaDB. |
|  | `--pure-mysql` | To install LiteSpeed and MySQL. |
|  | `--pure-percona` | To install LiteSpeed and Percona. |
|  | `--with-mysql` | To install LiteSpeed/App with MySQL. |
|  | `--with-percona` | To install LiteSpeed/App with Percona. |

### Application Options[¶](#application-options "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
| `-W` | `--wordpress` | To install WordPress. You will still need to complete the WordPress setup by browser |
|  | `--wordpressplus [SITEDOMAIN]` | To install, set up, and configure WordPress, also LSCache will be enabled |
|  | `--wordpresspath [WP_PATH]` | To specify a location for the WordPress installation or use for an existing WordPress. |
|  | `--wpuser [WP_USER]` | To set the WordPress admin user for WordPress dashboard login. |
|  | `--wppassword [PASSWORD]` | To set the WordPress admin user password for WordPress dashboard login. |
|  | `--wplang [WP_LANGUAGE]` | To set the WordPress language. Default value is "en\_US" for English. |
|  | `--sitetitle [WP_TITLE]` | To set the WordPress site title. Default value is mySite. |

### System Configuration[¶](#system-configuration "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
|  | `--listenport [PORT]` | To set the HTTP server listener port, default is 80. |
|  | `--ssllistenport [PORT]` | To set the HTTPS server listener port, default is 443. |
|  | `--proxy-r` | To set a proxy with rewrite type. |
|  | `--proxy-c` | To set a proxy with config type. |

### Security Configuration[¶](#security-configuration "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
|  | `--owasp-enable` | To enable mod\_security with OWASP rules. If LSWS is installed, then enable the owasp directly |
|  | `--owasp-disable` | To disable mod\_security with OWASP rules. |
|  | `--fail2ban-enable` | To enable fail2ban for webadmin and wordpress login pages. |

### Control[¶](#control "Permanent link")

| Opt | Options | Description |
| --- | --- | --- |
| `-U` | `--uninstall` | To uninstall LiteSpeed and remove installation directory. |
| `-P` | `--purgeall` | To uninstall LiteSpeed, remove installation directory, and purge all data in MySQL. |
| `-Q` | `--quiet` | To use quiet mode, won't prompt to input anything. |
| `-V` | `--version` | To display the script version information. |
| `-v` | `--verbose` | To display more messages during the installation. |
|  | `--update` | To update lsws1clk from github. |
| `-H` | `--help` | To display help messages. |

## Usage Examples[¶](#usage-examples "Permanent link")

### Web Server with PHP[¶](#web-server-with-php "Permanent link")

```
# To install LiteSpeed with default PHP Version.
./lsws1clk.sh
```

### WordPress with PHP[¶](#wordpress-with-php "Permanent link")

```
# To install LiteSpeed with WordPress and MariaDB"
./lsws1clk.sh -W
```

### WordPress with Mysql[¶](#wordpress-with-mysql "Permanent link")

```
# To install LiteSpeed with WordPress and Mysql"
./lsws1clk.sh -W --with-mysql
```

### OWASP[¶](#owasp "Permanent link")

```
# To enable OWASP feature for LSWS. This single option can be used even if the web server is already installed. 
./lsws1clk.sh --owasp-enable
```

## FAQ[¶](#faq "Permanent link")

### How do I create additional Virtual Hosts from the console?[¶](#how-do-i-create-additional-virtual-hosts-from-the-console "Permanent link")

Run the following command to create an additional virtual host in a few seconds. The example document root will be `/var/www/www.example.com`. Be sure to substitute your own domain.

```
/bin/bash <( curl -sk https://raw.githubusercontent.com/litespeedtech/ls-cloud-image/master/Setup/vhsetup.sh ) -d www.example.com
```

### How do I create additional Virtual Hosts with WordPress from the console?[¶](#how-do-i-create-additional-virtual-hosts-with-wordpress-from-the-console "Permanent link")

The first time you create an additional Virtual Host for WordPress the script will need to get your database root password from `/usr/local/lsws/password`. If you have a custom value, please update `/usr/local/lsws/password` or echo the password to the specified location: `/root/.db_password`.

```
echo 'root_mysql_pass="DB_ROOT_PASSWORD"' > /root/.db_password
```

Then run the following command to create an additional virtual host with WordPress.

```
/bin/bash <( curl -sk https://raw.githubusercontent.com/litespeedtech/ls-cloud-image/master/Setup/vhsetup.sh ) -d www.example.com -w
```

### How to I create additional Virtual Hosts and LE certificates from the console?[¶](#how-to-i-create-additional-virtual-hosts-and-le-certificates-from-the-console "Permanent link")

Please be sure that your domain is already pointing to the server.

Then run the following command to create an additional virtual host with a Let's Encrypt certificate applied. Be sure to substitute your own domain and your email address.

```
/bin/bash <( curl -sk https://raw.githubusercontent.com/litespeedtech/ls-cloud-image/master/Setup/vhsetup.sh ) -d www.example.com -le admin@example.com -f
```

Note: The `-f` option is to force HTTPS redirection
