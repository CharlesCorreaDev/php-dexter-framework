# FAQ · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/FAQ

---

# Frequently Asked Questions

## How to export multiple email messages at once?

It is possible with `zipdownload` plugin. With the plugin enabled and its `zipdownload_selection` option configured, you will be able to download multiple selected messages in one archive file. A new More > Download menu will contain three new options. Note that maximum size of the archive can be specified in configuration (from version 1.4-beta).

### Configuring the `zipdownload` plugin

The plugin is already shipped with the Roundcube packages but not enabled by default because it adds some requirements to the webserver Roundcube is installed on.

1. Make sure your PHP installation includes the [Zip](http://php.net/manual/en/book.zip.php) extension.
2. [Enable the plugin](wiki__Plugin-API.md#installing-and-activating-plugins) by adding "zipdownload" to the list of plugins in Roundcube's `config/config.inc.php` file.
3. Enable the `zipdownload_selection` option by setting up the plugin config:
   1. Copy the plugin config file `plugins/zipdownload/config.inc.php.dist` into `config/zipdownload.inc.php`
   2. Edit the copied file and set `$config['zipdownload_selection'] = true;`

## How to add a logo to my signature

Edit your sender identity as follows:

1. Open `Settings > Identities` and select an entry from the list
2. In the section `Signature` check the `HTML signature` box
3. Enter your signature text and insert an image using the image icon in the editor toolbar
4. For `Source` either enter a URL to the desired image or upload an image file via the `Add image` button
5. Save the sender identity

## There's no option to change my password

Password changing is highly dependent on the email server used behind Roundcube. Roundcube itself doesn't store passwords but authenticates at the email server upon each login. Therefore, Roundcube doesn't provide that function with the default setup. It does, however, provide a plugin with a variety of drivers for commonly used email storage systems.

### Enable and configure the `password` plugin

The plugin is already shipped with the Roundcube packages but not enabled by default because it requires manual configuration.

1. [Enable the plugin](wiki__Plugin-API.md#installing-and-activating-plugins) by adding "password" to the list of plugins in Roundcube's `config/config.inc.php` file.
2. Copy the file `config.inc.php.dist` to `config.inc.php` inside the `plugins/password` directory.
3. Read the plugin's [README](https://github.com/roundcube/roundcubemail/tree/master/plugins/password) file and configure the plugin according to your email server environment and capabilities.

> If you don't understand the above instructions, please contact your email hosting provider who runs your Roundcube webmail and ask them to enable the password plugin.

## Importing Contacts from CSV

Roundcube allows importing contacts either from a [VCard](https://en.wikipedia.org/wiki/VCard) file or by uploading a [CSV](https://en.wikipedia.org/wiki/Comma-separated_values) file. When using the CSV file format, it's important to have a header line with column titles that can be mapped to contact properties. The column titles supported by Roundcube are [listed here](https://github.com/roundcube/roundcubemail/blob/master/program/localization/en_US/csv2vcard.inc) (use the part after the = without the quotes).

## "server certificate verification failed" on Composer install

This error can appear when installing Roundcube's dependencies via Composer, including the `kolab/Net_LDAP3` package from git.kolab.org.

The certificate on git.kolab.org is issued by the intermediate CA COMODO RSA Domain Validation Secure Server CA. This CA has to be among the installed CA certificates on the server issuing the request to git.kolab.org. While this is already the case for most systems, some distributions might not have that CA certificate installed by default. When it is not, connection fails. The following command adds the missing certificate:

Do as root:

```
echo -n | openssl s_client -connect git.kolab.org:443 | sed -ne '/-BEGIN CERTIFICATE-/,/-END CERTIFICATE-/p'| tee '/usr/local/share/ca-certificates/git_kolab_org.crt'
```

followed by

```
update-ca-certificates
```

## Problems connecting IMAP/SMTP server via SSL/TLS

Since PHP 5.6 certificate verification has been enabled by default. If you are using a self-signed (or any kind) certificate who's CA is not in your default CA bundle then you must take additional steps to enable connection to your IMAP/SMTP server(s).

Symptoms of a problem with certificate verification include the message `Connection to storage server failed.` in the Roundcube interface and the message:

`IMAP Error: Login failed for <user> from 111.222.333.444. Could not connect to ssl://<imap_server>:993: Unknown reason...`

in your Roundcube error log.

Note: The <imap\_server> name you specify in `$config['default_host']` should match the Common Name (CN) of your certificate. Peer name verification is also performed by default.

If you are using a self-signed certificate then you should complete the `imap_conn_options` and/or `smtp_conn_options` configuration options in your Roundcube config. Both options work in the same way.

```
$config['smtp_conn_options'] = array(
  'ssl' => array(
    'verify_peer'  => true,
    'verify_depth' => 3,
    'cafile'       => '/etc/openssl/certs/ca.crt',
  ),
);
```

More details on these settings can be found in the [PHP manual](https://php.net/manual/en/context.ssl.php)

Setting `verify_peer` to `false` will disable certificate verification. Alternatively you can use `cafile` to define location of Certificate Authority file on local file system which should be used to authenticate your server certificate. The PHP user must be able to read this file.
