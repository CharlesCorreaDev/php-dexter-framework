# Debugging / Tools | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/support/debugging-tools

---

Version: 6

On this page

Sometimes it's necessary to run some tests or debug specific issues in Blesta. Here are some common things you may need to do, or may be instructed to do by support, when something goes wrong.

## Check PHP CURL, outbound TLS Version[â](#check-php-curl-outbound-tls-version "Direct link to Check PHP CURL, outbound TLS Version")

Blesta integrates with many 3rd party services and it may be necessary to ensure that your server is capable of making a TLS connection with certain minimum requirement. Here's sample code you can place on your server and access in your browser. It will return the most modern version of TLS that your server is capable of negotiating. If it say TLS 1.1 and the service you are connecting to requires TLS 1.2, then it will explain why a connection is not possible.

curl-check.php

```
<?php  
    $ch = curl_init('https://www.howsmyssl.com/a/check');   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
    $data = curl_exec($ch);   
    curl_close($ch);   
    $json = json_decode($data);   
    echo "<pre>TLS version: " . $json->tls_version . "</pre>\n";  
?>
```

Copy the code into a text file named curl-check.php and upload to your Blesta installation directory. Access in your browser and it will display the most modern TLS version supported. e.g.Â TLS version: TLS 1.2

## Enabling Error Reporting & Debugging[â](#enabling-error-reporting--debugging "Direct link to Enabling Error Reporting & Debugging")

To enable error reporting, edit `/config/blesta.php` and change `Configure::errorReporting(0);`Â to `Configure::errorReporting(-1);`Â You may also wish to enable System Debug. To do so, change `Configure::set("System.debug", false);`Â to `Configure::set("System.debug", true);`

Do not leave System.debug or errorReporting enabled

Be sure to change these settings back when you are done. Leaving them enabled can cause other issues and may become responsible for other errors within the system.

## Checking Error Logs[â](#checking-error-logs "Direct link to Checking Error Logs")

Errors are logged to disk by default. To see if your system is logging, check the path under Settings > System > General > Basic Setup for "Log Directory". This should be the full system path to your logs directory, and it should indicate to the right of the field that it is writable.

Then, navigate to this directory on your server. You should see some log files, including:

general-info-DATESTAMP.log  
general-notice-DATESTAMP.log  
general-warning-DATESTAMP.log  
general-alert-DATESTAMP.log  
genera-error-DATESTAMP.log  
general-emergency-DATESTAMP.log

Support staff are mostly interested in theerrorÂ and emergency logs, but depending on the issue the other logs may be important. The error log contains PHP exceptions, and the emergency log contains Blesta errors. Find the files with the most recent date, and open them to find the errors. If the error is reproducible and you have SSH access to the server, you can "tail" the log files while reproducing the error to more easily find what you need. For example: tail -f general-\*.logwill tail all of the log files at once.

## Checking the integrity of your System Key and Encrypted Data[â](#checking-the-integrity-of-your-system-key-and-encrypted-data "Direct link to Checking the integrity of your System Key and Encrypted Data")

Passphrase

If you have a passphrase set for batch processing credit cards, this utility will not work. If possible, first remove the passphrase under Settings > Company > General > Encryption.

The /config/blesta.php file contains a very importantÂ Blesta.system\_key. This key is generated during installation and must match the original database. If the key is changed, all encrypted data will be irrecoverable and your installation will be permanently broken.

To check your system, follow these steps:

1. Download the SystemKeyTest.zip file below.
2. Unzip the file.
3. Upload admin\_keytest.php to ~/app/controllers/
4. Visit /admin/keytest in your browser.
5. Observe the output.

[SystemKeyTest.zip](https://docs.blesta.com/assets/files/SystemKeyTest-24c5cc6088c185fbf889650bf0f3a3c7.zip)

## Disable Human Verification (CAPTCHA)[â](#disable-human-verification-captcha "Direct link to Disable Human Verification (CAPTCHA)")

If you enable a Human Verification / CAPTCHA's for staff logins, and are then unable to login, you may disable Human Verification for the company using the following query. Please note that this will disable Human Verification / CAPTCHAs for the entire company. If you are using multi-company and the issue affects a company ID other than 1, update the query to replace the company ID with the desired company ID.

```
UPDATE `company_settings` SET `value` = 'a:0:{}' WHERE `company_settings`.`key` = 'captcha_enabled_forms' AND `company_settings`.`company_id` = 1;
```

After running this query, login to Blesta and visit Settings > Company > General > Human Verification. Adjust your settings and re-enable Human Verification / CAPTCHA's for the desired forms.

## Regain Staff Access to Settings[â](#regain-staff-access-to-settings "Direct link to Regain Staff Access to Settings")

If you edit your own staff group and lock yourself out of the staff settings area, you can regain access by adding ACL permissions to edit your staff group back manually by running the following query:

```
UPDATE acl_acl INNER JOIN acl_aco ON acl_aco.id = acl_acl.aco_id SET acl_acl.permission = 'allow' WHERE acl_aco.alias = 'admin_system_staff' AND acl_acl.action = 'editgroup' AND acl_acl.aro_id = 1;
```

Then, access the edit group page at the URL ~/admin/settings/system/staff/editgroup/1/ and you can grant permissions to any others that may have been erroneously removed.

## Forcefully disable auto-debit for clients that do not have active services[â](#forcefully-disable-auto-debit-for-clients-that-do-not-have-active-services "Direct link to Forcefully disable auto-debit for clients that do not have active services")

Clients who have no active services, yet have open invoices with auto-debit enabled will be charged. This query will create a client setting for autodebit and set it to false for any clients that do not have any active services. Backup your database first!

```
INSERT INTO client_settings (client_settings.key, client_settings.client_id, client_settings.value) SELECT 'autodebit', `clients`.`id`, 'true' FROM `clients` LEFT JOIN `services` ON `services`.`client_id` = `clients`.`id` AND `services`.`status` = 'active' LEFT JOIN `client_settings` ON `client_settings`.`client_id` = `clients`.`id` AND `client_settings`.`key` = 'autodebit'  WHERE `services`.`id` IS NULL AND `client_settings`.`key` IS NULL;
```

## How do I prevent a domain or service from being renewed via the module when an invoice is paid?[â](#how-do-i-prevent-a-domain-or-service-from-being-renewed-via-the-module-when-an-invoice-is-paid "Direct link to How do I prevent a domain or service from being renewed via the module when an invoice is paid?")

Sometimes, particularly with domains the domain could be renewed outside of Blesta. We recommend that you let Blesta handle these renewals automatically. If for some reason you need to prevent that from happening you will need to remove the relevant record from the service\_invoices table where invoice\_id=your invoice id, and service\_id=your service id.

## Fetch the Collation of Tables[â](#fetch-the-collation-of-tables "Direct link to Fetch the Collation of Tables")

This query can be useful for fetching the collation of your database tables. Replace DATABASE-NAME with your database name. The query should return each collation found and the tables that use it.

```
SELECT table_collation AS collation,GROUP_CONCAT(table_name) AS tables FROM information_schema.tables WHERE table_schema='DATABASE-NAME' GROUP BY collation;
```

## Manually Resetting Staff Password[â](#manually-resetting-staff-password "Direct link to Manually Resetting Staff Password")

There are a couple ways to reset your staff password, from simplest to most complex. Follow these steps in order until your password has been successfully reset:

1. To reset the staff password visit /admin/login and click the "Reset My Password" link. Enter your username, and click the "Reset Password" button. You should get an email with a password reset link within a few minutes.
2. If you don't get an email, ensure that your username is correct. In phpMyAdmin or other MySQL database utility, look in the users table. Your username should appear in the "username" column, typically where id equals 1, as the primary staff account is the first user to be created. Try using the password reset option above with the correct username.
3. If that still doesn't work, you will need to temporarily enable legacy passwords.
   1. Please see [Encryption](docs__security__encryption.md)Â in the user manual, specifically Blesta.auth\_legacy\_passwords and set it to true.
   2. Then, in the users table for your username, update the password field to: `5f4dcc3b5aa765d61d8327deb882cf99`
   3. Then, try logging in with your username and the password password. Reset your password.
   4. Then, change Blesta.auth\_legacy\_passwords back to false.

## Renaming a Module[â](#renaming-a-module "Direct link to Renaming a Module")

In some rare cases it may be necessary to rename a 3rd party module. For example, if you are using a third party module named TestModule, and we release an official module called TestModule, you may wish to rename third party module so that it is not overwritten by the official module.

Warning

Before proceeding, make sure you really need to rename the module and be sure to back up your files + database. If you encounter any issues, roll back your changes.

The first step is to rename the module directory and primary module file

- /components/modules/testmodule becomes /components/modules/testmoduleold
- Rename /components/modules/testmodule/testmodule.php to /components/modules/testmodule/testmoduleold.php

The second step is toÂ  update the class name in testmoduleold.php from:

```
class Testmodule extends Module
```

to

```
class Testmoduleold extends Module
```

The third step is to update the modules database table.

```
UPDATE `modules` SET `class` = 'testmoduleold' WHERE `class` = 'testmodule';
```

The fourth step is to change view context statements from:

```
$this->view->setDefaultView('components' . DS . 'modules' . DS . 'testmodule' . DS)
```

to

```
$this->view->setDefaultView('components' . DS . 'modules' . DS . 'testmoduleold' . DS)
```

## Testing Outbound SMTP[â](#testing-outbound-smtp "Direct link to Testing Outbound SMTP")

If you can't send mail, you can use curl to see if your server is able to connect. Replace smtp.gmail.com with your SMTP server, and 587 with your SMTP port if different. It should return 250 header information, if it times out, your firewall is probably closed.

```
curl smtps://smtp.gmail.com:587 -v
```

## States and Countries[â](#states-and-countries "Direct link to States and Countries")

Blesta uses the ISO-3166-1 standard for countries and ISO-3166-2 for States / Provinces.

Some resources for internal use:

- <https://en.wikipedia.org/wiki/ISO_3166-1>
- <https://github.com/wooorm/iso-3166>
- <https://en.m.wikipedia.org/wiki/ISO_3166-2>
- <https://www.iso.org/iso-3166-country-codes.html>

## PDF Invoices Blank[â](#pdf-invoices-blank "Direct link to PDF Invoices Blank")

If a PDF invoice, emailed from Blesta appears to be blank, or not contain any text make sure your server's locale is set to UTF-8. In this case, often invoices downloaded from Blesta work fine, but not invoices sent by cron as cron is executed via CLI.

## Payment Account Credit Cards Disabled[â](#payment-account-credit-cards-disabled "Direct link to Payment Account Credit Cards Disabled")

If you've disabled the ability to process credit cards on your order form, then all clients that placed an order with this disabled will have credit cards disabled on their individual account. This can be manually updated under the client's profile > Actions > Payment Accounts, by clicking the Cog/gear icon at the top right of the window. You can search the database for all clients that have this option disabled and optionally update them manually in the database. To find all, run this query on the database:

```
SELECT * FROM `client_settings` WHERE `key`="payments_allowed_cc" AND `value`="false";
```

## Testing IMAP connection for the Support Manager[â](#testing-imap-connection-for-the-support-manager "Direct link to Testing IMAP connection for the Support Manager")

If IMAP email does not work with the Support Manager, try using this tool to debug the issue. Put this file on your Blesta server, then update the hostname, username, and password and then run the PHP file via CLI or in your browser.

Note that if the issue is with your cron failing to connect, you should execute the script via CLI using the same exact path to PHP as is used in your cron command. Your CLI PHP configuration and extensions is very likely not the same as your web server.

**imap\_diagnostics.php**

```
<?php  
  
// Configuration  
$hostname = '{mail.yourdomain.com:993/imap/ssl}'; // Your IMAP server  
$username = 'your_email@yourdomain.com'; // Replace with your email  
$password = 'your_password'; // Replace with your password  
$timeout = 10; // Connection timeout in seconds  
  
// Function to diagnose IMAP connection  
function diagnose_imap_connection($hostname, $username, $password, $timeout) {  
    // Extract host and port from hostname  
    preg_match('/{([^:]+):(\d+)/', $hostname, $matches);  
    $host = $matches[1] ?? 'localhost';  
    $port = $matches[2] ?? 993;  
  
    echo "Starting IMAP diagnostic...\n";  
    echo "Host: $host\n";  
    echo "Port: $port\n";  
    echo "Timeout: $timeout seconds\n\n";  
  
    // Create SSL context  
    $context = stream_context_create([  
        'ssl' => [  
            'verify_peer' => true,  
            'verify_peer_name' => true,  
            'allow_self_signed' => false,  
            'capture_peer_cert' => true,  
        ]  
    ]);  
  
    echo "Attempting TCP connection to $host:$port...\n";  
    $errno = 0;  
    $errstr = '';  
    $socket = @stream_socket_client(  
        "ssl://$host:$port",  
        $errno,  
        $errstr,  
        $timeout,  
        STREAM_CLIENT_CONNECT,  
        $context  
    );  
  
    if ($socket === false) {  
        echo "ERROR: Failed to connect to $host:$port\n";  
        echo "Error number: $errno\n";  
        echo "Error message: $errstr\n";  
        return false;  
    }  
    echo "SUCCESS: TCP connection established\n";  
  
    // Verify SSL/TLS connection  
    $meta = stream_get_meta_data($socket);  
    if (!isset($meta['crypto'])) {  
        echo "WARNING: SSL/TLS metadata not available, but connection may still be secure\n";  
    } else {  
        echo "SUCCESS: SSL/TLS negotiation completed\n";  
        echo "Cipher: " . ($meta['crypto']['cipher_name'] ?? 'Unknown') . "\n";  
        echo "Protocol: " . ($meta['crypto']['protocol'] ?? 'Unknown') . "\n";  
    }  
    echo "\n";  
  
    // Attempt IMAP connection  
    echo "Attempting IMAP connection...\n";  
    $imap = @imap_open($hostname, $username, $password, 0, 1);  
  
    if ($imap === false) {  
        $errors = imap_errors();  
        echo "ERROR: IMAP connection failed\n";  
        echo "IMAP Errors:\n";  
        foreach ($errors as $error) {  
            echo "- $error\n";  
        }  
        fclose($socket);  
        return false;  
    }  
  
    echo "SUCCESS: IMAP connection established\n";  
  
    // Get server information  
    $check = imap_check($imap);  
    if ($check) {  
        echo "\nServer Information:\n";  
        echo "Mailbox: " . $check->Mailbox . "\n";  
        echo "Date: " . $check->Date . "\n";  
        echo "Messages: " . $check->Nmsgs . "\n";  
        echo "Recent: " . $check->Recent . "\n";  
    } else {  
        echo "WARNING: Could not retrieve server information\n";  
    }  
  
    // Check SSL certificate  
    $params = stream_context_get_params($socket);  
    if (isset($params['options']['ssl']['peer_certificate'])) {  
        $cert = openssl_x509_parse($params['options']['ssl']['peer_certificate']);  
        if ($cert) {  
            echo "\nSSL Certificate Information:\n";  
            echo "Issuer: " . ($cert['issuer']['O'] ?? 'Unknown') . "\n";  
            echo "Valid from: " . date('Y-m-d H:i:s', $cert['validFrom_time_t']) . "\n";  
            echo "Valid to: " . date('Y-m-d H:i:s', $cert['validTo_time_t']) . "\n";  
        } else {  
            echo "WARNING: Could not parse SSL certificate\n";  
        }  
    } else {  
        echo "WARNING: Could not retrieve SSL certificate information\n";  
    }  
  
    // Clean up  
    imap_close($imap);  
    fclose($socket);  
    echo "\nDiagnostic completed successfully\n";  
    return true;  
}  
  
// Execute diagnostic  
try {  
    diagnose_imap_connection($hostname, $username, $password, $timeout);  
} catch (Exception $e) {  
    echo "ERROR: Unexpected error occurred\n";  
    echo "Message: " . $e->getMessage() . "\n";  
}  
  
?>
```

It should output something like this if everything is successful:

```
Host: mail.domain.com  
Port: 993  
Timeout: 10 seconds  
  
Attempting TCP connection to mail.domain.com:993...  
SUCCESS: TCP connection established  
SUCCESS: SSL/TLS negotiation completed  
Cipher: ECDHE-RSA-AES128-GCM-SHA256  
Protocol: TLSv1.2  
  
Attempting IMAP connection...  
SUCCESS: IMAP connection established  
  
Server Information:  
Mailbox: {mail.domain.com:993/imap/notls/ssl/user="your_email@domain.com"}INBOX  
Date: Thu, 24 Jul 2025 17:15:21 -0400 (EDT)  
Messages: 5993  
Recent: 0  
  
SSL Certificate Information:  
Issuer: DigiCert Inc  
Valid from: 2025-06-02 00:00:00  
Valid to: 2026-06-01 23:59:59  
  
Diagnostic completed successfully
```
