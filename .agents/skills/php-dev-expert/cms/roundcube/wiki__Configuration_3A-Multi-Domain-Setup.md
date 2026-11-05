# Configuration: Multi Domain Setup · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Configuration%3A-Multi-Domain-Setup

---

# Configure one Roundcube installation to serve multiple domains

In case you have one installation of Roundcube to serve multiple domains hosted on one server you can create host-specific config files. These files have to be named like `<hostname>.inc.php` and are saved in Roundcube's `config` directory.

Roundcube does not read them by default so you need to set the `'include_host_config'` option to true in the main config file.

If enabled, Roundcube will additionally load the file that matches the host name used to access Roundcube and merged the options configured there over the main config file. This means that they only need to contain the parameters that differ from the main configuration. Most common configurations on host-specific files are these:

```
<?php

$config['imap_host'] = '<imap-host-for-this-domain>';
$config['username_domain'] = '<the-domain-name>';
```

Setting `'username_domain'` will make Roundcube append the correct domain part if a user only logs in with its user name (e.g. `user` instead of `user@domain1.com`).

## Host-name mapping

Instead of setting `'include_host_config'` simply to true, you can specify a hash array assigning host names (key) to config file names (values) like the following example

```
$config['include_host_config'] = array(
    'mail.roundcube.net' => 'net_config.inc.php',
    'mail.roundcube.com' => 'com_config.inc.php',
);
```
