# Installation | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/5/installation

---

Version: 5

On this page

## System Requirements[â](#system-requirements "Direct link to System Requirements")

Blesta is compatible with most web server environments that support PHP and MySQL or MariaDB, and while Blesta is frequently installed on a shared server, for performance and security we recommend installing on a fresh Virtual Machine using our bash installer.

info

Certain extensions, particularly 3rd party extensions and themes, may have their own unique requirements.

|  | Required | Recommended |
| --- | --- | --- |
| PHP Version | PHP 7.2, 7.3, 7.4, 8.1, 8.2, or 8.3 | PHP 8.2 |
| PHP Config | memory\_limit="512M" or greater  max\_input\_vars="10000" disable\_functions="" **none defined** open\_basedir="" **none defined** | â |
| PHP Extensions | **Ioncube Loaders**, PDO, pdo\_mysql, curl (v7.10.5+), openssl (v 1.1.1a+), gmp, imap, json, ldap, libxml, mailparse, iconv, mbstring, simplexml, soap, gd, and zlib | â |
| MySQL / MariaDB | MySQL 5.7.7+ or MariaDB 10.2.2+ **max\_allowed\_packet = 128M** or higher, and **wait\_timeout = 3600** or higher | MariaDB 10.5.27 |

## Installing Blesta[â](#installing-blesta "Direct link to Installing Blesta")

Bash Script for Fresh Min AlmaLinux 9

There are several ways to install Blesta, but the best way is to install Blesta on a **fresh minimal Almalinux 8, 9 or 10 VM** using our beta [bash script](https://github.com/blesta/install-blesta). You should install or configure your own firewall after installation. We recommend 20GB disk, 4GB RAM, and 2 CPU cores as a suggestion to start.

### Install using the BASH installer[â](#install-using-the-bash-installer "Direct link to Install using the BASH installer")

*Only* run this as root on a fresh minimal AlmaLinux 8, 9, or 10 VM with nothing else on it. Fresh server only. The script will install all the dependencies (Apache, MariaDB, PHP, Certbot SSL cert) and Blesta. There are some questions you'll need to answer during installation. Your hostname should resolve to your VM's IP before running the installer. The installer does *not* configure any firewall at this time.

```
dnf install curl -y  
curl -o install-blesta.sh https://raw.githubusercontent.com/blesta/install-blesta/main/install-blesta.sh  
chmod +x install-blesta.sh  
./install-blesta.sh
```

You're done

If you installed with the bash installer, you're done, congratulations!

### Install using an Auto-Installer[â](#install-using-an-auto-installer "Direct link to Install using an Auto-Installer")

Blesta is available to install on shared hosting servers through [Softaculous](http://softaculous.com/) and [Installatron](https://installatron.com/)

### Install Manually[â](#install-manually "Direct link to Install Manually")

This video may help, specific steps outlined below the video.

#### 1. Download Blesta[â](#1-download-blesta "Direct link to 1. Download Blesta")

Download Blesta from [blesta.com](https://www.blesta.com) or visit the [download area](https://account.blesta.com/client/plugin/download_manager/client_main/). The latest version of Blesta is also available at [blesta.com/latest.zip](https://www.blesta.com/latest.zip).

Via SSH

```
wget https://www.blesta.com/latest.zip
```

#### 2. Unzip the Archive[â](#2-unzip-the-archive "Direct link to 2. Unzip the Archive")

Unzip the Blesta archive (.zip file) using your favorite compression utility. On Windows, right click and select "Extract All". If the zip is uploaded to or downloaded directly to a Linux server, run the following in your terminal (replace latest.zip with the filename if you downloaded a specific version like blesta-x.x.x.zip):

Via SSH

```
unzip latest.zip
```

#### 3. Upload Files & Launch Installer[â](#3-upload-files--launch-installer "Direct link to 3. Upload Files & Launch Installer")

Upload the contents of the /blesta/ directory to your server where you will be accessing Blesta. Before you continue any further, ensure you've created a database that Blesta can be installed into. You'll need your database host (usually localhost), database name, database user, and database user password to continue with installation.

If you unzip the distribution on your server, move the *contents* of the "blesta" directory to your docroot. Move the "uploads" directory a level above your docroot.

Blesta may be installed in one of two ways, either via the web through your browser, of via command line (CLI over SSH).

#### Web Installation[â](#web-installation "Direct link to Web Installation")

Follow these steps to install Blesta via the web.

1. Point your web browser to the location where you uploaded the contents of blesta (e.g. <https://yourdomain.com/path_to_blesta/>).
2. Follow the on screen instructions to complete installation.
3. Once installation completes, you'll be prompted to create your administrator user and enter your license key or start a free trial.

For advanced users and developers who may need to script multiple installations, a web-installer CURL script can be used to automate installations.

Show example Web Installer Curl Script

Example Web Installer CURL Script

```
<?php  
#  
# This makes a POST request to the Blesta installer  
#  
  
$post = [  
    'agree' => 'yes',  
    'host' => 'localhost',  
    'port' => '3306',  
    'database' => 'blesta',  
    'user' => 'user',  
    'password' => 'password',  
];  
  
$ch = curl_init();  
  
curl_setopt($ch, CURLOPT_URL, 'myblestadomain.com/install/process');  
curl_setopt($ch, CURLOPT_POST, true);  
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  
$response = curl_exec($ch);  
$errors = curl_error($ch);  
curl_close($ch);  
  
echo "RESPONSE: ";  
print_r($response);  
  
echo "ERRORS: ";  
var_dump($errors);
```

warning

If your web server is not Apache, or is missing mod\_rewrite, the CURL URL must be pre-pended with index.php, e.g. myblestadomain.com/index.php/install/process

#### Command Line (CLI) Installation[â](#command-line-cli-installation "Direct link to Command Line (CLI) Installation")

1. In an SSH shell/terminal, cd to the directory you uploaded Blesta to.
2. The CLI installer can be run in interactive mode, or non-interactive mode by bypassing parameters.

##### Interactive Mode[â](#interactive-mode "Direct link to Interactive Mode")

For interactive mode, run the following command. It may be necessary to include the full path to PHP.

Via SSH

```
php ./index.php install
```

You will be prompted for details during installation.

##### Non-Interactive Mode[â](#non-interactive-mode "Direct link to Non-Interactive Mode")

For installation that does not include admin account creation or license activation, run (update values):

Via SSH

```
php ./index.php install -dbhost DATABASE_HOST -dbport DATABASE_PORT -dbname DATABASE_NAME -dbuser DATABASE_USER -dbpass DATABASE_PASS -hostname WEBSITE_HOSTNAME -docroot DOCUMENT_ROOT_PATH
```

For installation that includes admin account creation and license activation, run (update values):

Via SSH

```
php ./index.php install -dbhost DATABASE_HOST -dbport DATABASE_PORT -dbname DATABASE_NAME -dbuser DATABASE_USER -dbpass DATABASE_PASS -hostname WEBSITE_HOSTNAME -docroot DOCUMENT_ROOT_PATH -domain DOMAIN -licensekey LICENSE_KEY -firstname FIRST_NAME -lastname LAST_NAME -email EMAIL -username USERNAME -password PASSWORD
```

Below is a list of accepted parameters.

| Parameter | Description | Version Added |
| --- | --- | --- |
| -dbhost | The database hostname (usually localhost) | 3.0 |
| -dbport | The database port (usually 3306) | 3.0 |
| -dbname | The database name | 3.0 |
| -dbuser | The database user | 3.0 |
| -dbpass | The database password | 3.0 |
| -hostname | The website hostname. For example, billing.domain.com. The is the hostname where Blesta will be accessed from. If not set, will attempt to detect the hostname from server configuration, which in many cases will not be accurate. | 3.0 |
| -docroot | The full absolute path to the web server's document root (e.g. /var/www/html/). This should not be set to Blesta's installed directory unless Blesta is installed in document root. If this value is not set, it will be set based on your current working directory, which will not be accurate unless the current working directory is the document root. This value can be changed from within Blesta, after installation, under Settings > System > General > "Root Web Directory". | 4.6 |
| -domain | (Optional) The domain to be used in template email addresses. This value is used to determine email addresses for templates and can be changed under Settings > Company > Emails. | 5.10 |
| -licensekey | (Optional) The license key for Blesta. If none is provided, a trial license will befetched. | 5.10 |
| -firstname | The First Name of the first Staff user. | 5.10 |
| -lastname | The Last Name of the first Staff user. | 5.10 |
| -email | The email address for the first Staff user. | 5.10 |
| -username | The username for the first Staff user. | 5.10 |
| -password | The password for the first Staff user. | 5.10 |

3. Once installation completes, direct your web browser to <https://yourdomain.com/path_to_blesta/admin> to create your administrator user and enter your license key or start a free trial if you did not install with non-interactive mode, otherwise login with the credentials provided.

Free Trial

If you do not have a license key, and have not already had a free trial you will be able to activate a free trial during the installation process directly. Please note that free trials cannot be activated for "localhost". If you need to purchase a license, you can do so at [blesta.com](https://www.blesta.com/pricing/).

4. Set up a Cron Job

Once installation is complete, a cron job must be created to automate tasks within Blesta. Go to [Settings] > [System] > Automation, and copy the "Cron Command", for use in creating a cron job on your server. Most hosting control panels provide an easy way to create cron jobs, follow the documentation for your control panel to complete this important step. The cron job should run every minute. Once the cron has been configured, verify that the status icon turns green and displays the last time run on the System Automation page within Blesta.

Running the cron via the web

Using CLI is always recommended, but the cron may be run by accessing <https://www.yourdomain.com/blesta/install/path/cron/?cron_key=CRONKEY> where CRONKEY is your cron key as displayed under "Update Cron Key". This key is not set by default

**wget method**

/usr/bin/wget -O /dev/null -q <https://www.yourdomain.com/blesta/cron/?cron_key=CRONKEY>

If you do not have mod\_rewrite, the URL will need to include index.php, for example: <https://www.yourdomain.com/blesta/install/path/index.php/cron/?cron_key=CRONKEY> where CRONKEY is your cron key as displayed under "Updated Cron Key".

## Advanced Options[â](#advanced-options "Direct link to Advanced Options")

### System Configuration[â](#system-configuration "Direct link to System Configuration")

There are a number of configuration settings that may be set before or after installation.

#### Requiring index.php in URLs[â](#requiring-indexphp-in-urls "Direct link to Requiring index.php in URLs")

By default Blesta does not include index.php as part of any URL request, thanks to the use of .htaccess mod\_rewrite rules. If your server does not support mod\_rewrite Blesta requires index.php to be included in all URLs. To force Blesta to include index.php in all URLs simply rename or delete the .htaccess file included with Blesta in your root web directory.

#### Changing the path to the Admin area[â](#changing-the-path-to-the-admin-area "Direct link to Changing the path to the Admin area")

By default the path to the Admin area begins with /admin/. To change this locate routes.php in /installpath/config/routes.php and modify the value of the "Route.admin" configuration. For example, to change the path of the admin area to /staff/ set the following:

routes.php

```
Configure::set("Route.admin", "staff");
```

#### Changing the path to the Client area[â](#changing-the-path-to-the-client-area "Direct link to Changing the path to the Client area")

By default the path to the Client area begins with /client/. To change this locate routes.php in /installpath/config/routes.php and modify the value of the "Route.client" configuration. For example, to change the path of the client area to /customers/ set the following:

routes.php

```
Configure::set("Route.client", "customers");
```

#### Forcing HTTPS[â](#forcing-https "Direct link to Forcing HTTPS")

If your server supports mod\_rewrite, you can enable HTTPS redirects by uncommenting the following lines (remove the '#' symbols) from the .htaccess file included with Blesta like the following:

.htaccess

```
RewriteCond %{HTTPS} !=on  
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [R=307,NE,L]
```

### NGINX Users[â](#nginx-users "Direct link to NGINX Users")

warning

Nginx should be used by experienced or advanced users only and is not suitable for beginners. If you are not familiar with Nginx, consider using Apache

1. For pretty URL's (without /index.php/ in every URI) you will need to add a custom Nginx configuration. For a community provided example configuration, please see [this thread](https://www.blesta.com/forums/index.php?/topic/9320-nginx-config/) or use the following example configuration as a basis for your own:

Show example Nginx config

```
server {  
    listen      80 default_server;  
    listen [::]:80 default_server;  
    server_name _;  
  
    access_log  /path/to/.logs/access.log main;  
    error_log   /path/to/.logs/errors.log warn;  
  
    root /path/to/site/public;  
    index index.php index.html;  
  
    location / { try_files $uri $uri/ /index.php?q=$uri&$args; }  
  
    error_page 500 502 503 504 /50x.html;  
    location = /50x.html { root /var/lib/nginx/html; }  
  
    location ~ \.php$ {  
        try_files $uri =404;  
        fastcgi_split_path_info ^(.+\.php)(/.+)$;  
        fastcgi_pass 127.0.0.1:9000;  
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;  
        fastcgi_param SCRIPT_NAME $fastcgi_script_name;  
        fastcgi_index index.php;  
        include fastcgi_params;  
    }  
  
    location ~* \.(jpg|jpeg|gif|png|css|js|ico|xml)$ { expires 5d; }  
  
    if ($scheme != https) { return 307 https://domain.tld$request_uri; }  
}  
  
server {  
    listen      443 ssl;  
    listen [::]:443 ssl;  
    server_name _;  
  
    access_log  /path/to/.logs/access.log main;  
    error_log   /path/to/.logs/errors.log warn;  
  
    root /path/to/site/public;  
    index index.php index.html;  
  
    location / { try_files $uri $uri/ /index.php?q=$uri&$args; }  
  
    error_page 500 502 503 504 /50x.html;  
    location = /50x.html { root /var/lib/nginx/html; }  
  
    location ~ \.php$ {  
        try_files $uri =404;  
        fastcgi_split_path_info ^(.+\.php)(/.+)$;  
        fastcgi_pass 127.0.0.1:9000;  
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;  
        fastcgi_param SCRIPT_NAME $fastcgi_script_name;  
        fastcgi_index index.php;  
        include fastcgi_params;  
    }  
  
    location ~* \.(jpg|jpeg|gif|png|css|js|ico|xml)$ { expires 5d; }  
  
    ssl_certificate     /etc/letsencrypt/live/domain.tld/fullchain.pem;  
    ssl_certificate_key /etc/letsencrypt/live/domain.tld/privkey.pem;  
    ssl_dhparam         /etc/letsencrypt/dhparam.pem;  
  
    ssl_buffer_size 8k;  
  
    ssl_protocols TLSv1.2 TLSv1.3;  
    ssl_ciphers ECDH+AESGCM:ECDH+AES256:ECDH+AES128:DH+3DES:!ADH:!AECDH:!MD5;  
    ssl_prefer_server_ciphers on;  
  
    ssl_ecdh_curve secp384r1;  
    ssl_session_tickets off;  
  
    ssl_stapling on;  
    ssl_stapling_verify on;  
    resolver 8.8.8.8;  
  
    add_header Strict-Transport-Security 'max-age=31536000; includeSubDomains; preload';  
  
    if ($host != domain.tld) { return 307 https://domain.tld$request_uri; }  
}
```

2. Next, update /core/ServiceProviders/MinphpBridge.php and make the following change:

```
// $htaccess = file_exists($rootWebDir . '.htaccess');  
$htaccess = true;
```

## Selective Automation Task Execution[â](#selective-automation-task-execution "Direct link to Selective Automation Task Execution")

### Overview[â](#overview "Direct link to Overview")

By default, the Blesta cron command runs all automation tasks sequentially and this is fine for most users. In large databases, some tasks can take a long time to complete, which may delay other important tasks from running. As of version 5.13 you can specify which tasks to run or exclude using JSON parameters in the cron command.

This allows you to:

- Run long-running tasks separately from quick tasks
- Create multiple cron jobs that focus on different automation tasks
- Prevent task bottlenecks and ensure timely execution of critical operations

### Basic Usage[â](#basic-usage "Direct link to Basic Usage")

The filter is passed via the `--tasks=` flag, and the `index` action must be specified explicitly so the cron run is dispatched:

#### Include Specific Tasks[â](#include-specific-tasks "Direct link to Include Specific Tasks")

Run only the tasks you specify:

```
php index.php cron index --tasks='{"include":["autodebit","payment_reminders"]}'
```

#### Exclude Specific Tasks[â](#exclude-specific-tasks "Direct link to Exclude Specific Tasks")

Run all tasks except those you specify:

```
php index.php cron index --tasks='{"exclude":["create_invoice","deliver_invoices"]}'
```

#### Default Behavior[â](#default-behavior "Direct link to Default Behavior")

Run all tasks (same as before):

```
php index.php cron
```

> **Note:** The filter JSON must be passed via the `--tasks=` flag. A bare positional JSON argument (e.g. `php index.php cron '{"include":["autodebit"]}'`) will not work â the router splits URI segments on `:`, which corrupts the JSON before the controller can parse it. The `index` action segment is also required when supplying `--tasks=`, otherwise the dispatcher will not invoke the cron run.

### Common Task Identifiers[â](#common-task-identifiers "Direct link to Common Task Identifiers")

Here are the most commonly filtered tasks:

| Task Identifier | Description |
| --- | --- |
| `create_invoice` | Creates recurring invoices and invoices for renewing services |
| `autodebit` | Processes auto-debit payment accounts |
| `payment_reminders` | Sends payment reminders and late notices |
| `deliver_invoices` | Sends invoices scheduled for delivery |
| `suspend_services` | Suspends past due services |
| `unsuspend_services` | Unsuspends paid suspended services |
| `provision_pending_services` | Provisions paid pending services |
| `backups_amazons3` | Performs Amazon S3 backups |
| `backups_sftp` | Performs SFTP backups |

For a complete list of available task identifiers, see the [Task Reference](#task-reference) below.

### Practical Examples[â](#practical-examples "Direct link to Practical Examples")

#### Example 1: Separate Long-Running Tasks[â](#example-1-separate-long-running-tasks "Direct link to Example 1: Separate Long-Running Tasks")

If backup tasks are taking too long and blocking other tasks:

```
# Run all tasks except backups every hour  
0 * * * * php /path/to/blesta/index.php cron index --tasks='{"exclude":["backups_amazons3","backups_sftp"]}' > /dev/null 2>&1  
  
# Run only backup tasks once daily at 2 AM  
0 2 * * * php /path/to/blesta/index.php cron index --tasks='{"include":["backups_amazons3","backups_sftp"]}' > /dev/null 2>&1
```

#### Example 2: Isolate Invoice Creation[â](#example-2-isolate-invoice-creation "Direct link to Example 2: Isolate Invoice Creation")

If invoice creation is slow during peak hours:

```
# Run all tasks except invoice creation every minute  
* * * * * php /path/to/blesta/index.php cron index --tasks='{"exclude":["create_invoice"]}' > /dev/null 2>&1  
  
# Run only invoice creation at 10 AM  
0 10 * * * php /path/to/blesta/index.php cron index --tasks='{"include":["create_invoice"]}' > /dev/null 2>&1
```

### Task Reference[â](#task-reference "Direct link to Task Reference")

### System Tasks (Company-Specific)[â](#system-tasks-company-specific "Direct link to System Tasks (Company-Specific)")

These tasks run for each company in your Blesta installation:

| Task Identifier | Task Name |
| --- | --- |
| `create_invoice` | Create Invoice |
| `apply_invoice_late_fees` | Apply Invoice Late Fees |
| `autodebit` | Auto Debit |
| `payment_reminders` | Payment Reminders |
| `apply_payments` | Apply Payments to Open Invoices |
| `process_service_changes` | Process Service Changes |
| `process_renewing_services` | Process Service Renewals |
| `provision_pending_services` | Provision Paid Pending Services |
| `cancel_scheduled_services` | Cancel Scheduled Services |
| `card_expiration_reminders` | Card Expiration Reminders |
| `deliver_invoices` | Deliver Invoices |
| `deliver_reports` | Deliver Reports |
| `suspend_services` | Suspend Services |
| `unsuspend_services` | Unsuspend Services |
| `exchange_rates` | Exchange Rate Updates |
| `transition_quotations` | Transition Quotations |
| `cleanup_logs` | Clean up Logs |

#### System Tasks (Global)[â](#system-tasks-global "Direct link to System Tasks (Global)")

These tasks run once per cron execution, not per company:

| Task Identifier | Task Name |
| --- | --- |
| `backups_amazons3` | Amazon S3 Backups |
| `backups_sftp` | SFTP Backups |

#### Plugin and Module Tasks[â](#plugin-and-module-tasks "Direct link to Plugin and Module Tasks")

Plugin tasks use the format: `plugin.{directory}.{task_key}`

Module tasks use the format: `module.{directory}.{task_key}`

To find available plugin and module task identifiers, check your database:

```
-- List all plugin tasks  
SELECT CONCAT('plugin.', dir, '.', `key`) AS task_identifier, name  
FROM cron_tasks  
WHERE task_type = 'plugin';  
  
-- List all module tasks  
SELECT CONCAT('module.', dir, '.', `key`) AS task_identifier, name  
FROM cron_tasks  
WHERE task_type = 'module';
```

### Advanced Usage[â](#advanced-usage "Direct link to Advanced Usage")

#### Using Both Include and Exclude[â](#using-both-include-and-exclude "Direct link to Using Both Include and Exclude")

You can use both `include` and `exclude` together. The `exclude` parameter takes precedence:

```
# Run autodebit and payment_reminders, but not autodebit if it's in both  
php index.php cron index --tasks='{"include":["autodebit","payment_reminders"],"exclude":["autodebit"]}'  
# Result: Only payment_reminders runs
```

#### Alternative Command Formats[â](#alternative-command-formats "Direct link to Alternative Command Formats")

Both of the following flag formats are supported:

```
# Format 1: --tasks= (recommended for cron jobs)  
php index.php cron index --tasks='{"include":["autodebit"]}'  
  
# Format 2: --tasks flag with space  
php index.php cron index --tasks '{"include":["autodebit"]}'
```

A bare positional JSON argument is **not** supported. The router splits URI segments on `:`, which corrupts the JSON before the controller can read it, and any task filter is silently ignored (all tasks run).

### Error Handling[â](#error-handling "Direct link to Error Handling")

If you provide invalid JSON or an incorrect format, Blesta will:

1. Display an error message
2. Continue running **all** tasks (default behavior)

This ensures your cron jobs continue to function even if there's a syntax error in your filter.

### Important Notes[â](#important-notes "Direct link to Important Notes")

- Task filtering is available in Blesta 5.13.0 and later
- Task identifiers are case-sensitive
- If a task identifier doesn't exist, it's silently ignored
- Using `include` with an empty array will run no tasks
- Using `exclude` with an empty array will run all tasks
- The default cron command (without filters) continues to work as before

### Migration Guide[â](#migration-guide "Direct link to Migration Guide")

If you're currently using a single cron job:

```
# Old setup (still works)  
* * * * * php /path/to/blesta/index.php cron > /dev/null 2>&1
```

You can migrate to multiple targeted cron jobs:

```
# New setup - separate fast and slow tasks (Can run minutely as Blesta will handle scheduling)  
* * * * * php /path/to/blesta/index.php cron index --tasks='{"exclude":["create_invoice","backups_amazons3","backups_sftp"]}' > /dev/null 2>&1  
* * * * * php /path/to/blesta/index.php cron index --tasks='{"include":["create_invoice"]}' > /dev/null 2>&1  
* * * * * php /path/to/blesta/index.php cron index --tasks='{"include":["backups_amazons3","backups_sftp"]}' > /dev/null 2>&1
```

### Troubleshooting[â](#troubleshooting "Direct link to Troubleshooting")

**Problem:** Tasks aren't being filtered as expected

**Solution:**

- Verify your JSON syntax is valid (use a JSON validator)
- Check that task identifiers are spelled correctly and match the reference list
- Review the cron output for error messages (remove `> /dev/null 2>&1` temporarily)

**Problem:** Not sure which tasks are taking too long

**Solution:**

- Check the `log_cron` database table for task execution times
- Run the cron manually with verbose output to see which tasks are slow
- Monitor the cron execution log in your Blesta admin panel

**Problem:** Want to discover all available task identifiers

**Solution:**
Query your database:

```
SELECT  
    CASE  
        WHEN task_type = 'system' THEN `key`  
        ELSE CONCAT(task_type, '.', dir, '.', `key`)  
    END AS task_identifier,  
    name  
FROM cron_tasks  
ORDER BY task_type, dir, `key`;
```

## Common Installation Issues[â](#common-installation-issues "Direct link to Common Installation Issues")

- I get an error about open\_basedir restriction: realpath(): open\_basedir restriction in effect
  - We recommend disabling open\_basedir. For Plesk, see <https://support.plesk.com/hc/en-us/articles/213919825-How-to-change-PHP-parameter-for-all-domains-> and set open\_basedir to "none". For cPanel see <https://documentation.cpanel.net/display/76Docs/PHP+open_basedir+Tweak> The alternative is to add additional paths to open\_basedir to satisfy Blesta, including /dev/urandom, /tmp, and your users home directory (i.e. /home/username/)
- I get an "Undefined index: total" or "Error while sending QUERY packet" or "PDOStatement::execute(): send of 113 bytes failed with errorno=32 Broken pipe"
  - It's possible max\_allowed\_packets and/or wait\_timeout values are too low in your MySQL config. Edit /etc/my.cnf (default location) and set max\_allowed\_packets to a value of 128M or higher, and wait\_timeout to a value of 3600 or higher.
- After I install, when I try to login it automatically logs me out. I may see a flash of the Dashboard before I'm redirected.
  - Make sure the PHP extension Suhosin is disabled.
- I get an error about open\_basedir restriction: realpath(): open\_basedir restriction in effect
  - We recommend disabling open\_basedir. For Plesk, see <https://support.plesk.com/hc/en-us/articles/213919825-How-to-change-PHP-parameter-for-all-domains-> and set open\_basedir to "none". For cPanel see <https://documentation.cpanel.net/display/76Docs/PHP+open_basedir+Tweak>
  - The alternative is to add additional paths to open\_basedir to satisfy Blesta, including /dev/urandom, /tmp, and your users home directory (i.e. /home/username/)

## License Validation Issues[â](#license-validation-issues "Direct link to License Validation Issues")

- License does not seem to validate. I've confirmed that port 443 egress is open at my firewall at Curl SSL is installed.
  - Make sure mbstring.func\_overload is off in your php.ini. Overloading single byte functions with mbstring multibyte functions will prevent encryption from working properly and your license will not validate.
  - Make sure that System.debug and errorReporting are both disabled in your ~/config/blesta.php config file. Both should look like the following toward the top of your config file:

    ~/config/blesta.php

    ```
    // WARNING: Enabling these can cause issues. Check ../logs_blesta/ logs instead  
    Configure::errorReporting(0);  
    // Override minPHP's debugging setting. true to enable debugging, false to disable it  
    Configure::set('System.debug', false);
    ```
