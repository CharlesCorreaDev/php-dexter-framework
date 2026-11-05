# Auto Index Script | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/autoindex/

---

# The Auto Index Script[¶](#the-auto-index-script "Permanent link")

LiteSpeed Web Server supports automatic directory indexing when an index file is not present in a directory. It uses an external script to generate the index page on the fly. This provides you with maximum flexibility when creating the look and feel of your auto index page. You can also customize your index page at a global level, for each natively configured virtual host, or Apache vhost in a control panel environment.

## How LSWS Implements Auto Index[¶](#how-lsws-implements-auto-index "Permanent link")

The default script paired with the installation package is a PHP script. However, you can create your own script using any language you like.

When you write your own script, just remember that the path to the directory you’re indexing is passed to the script in a CGI environment variable: `LS_AI_PATH`. In PHP, you can retrieve the value with the command `$_SERVER[‘LS_AI_PATH’]`.

The script can be placed anywhere you like, but if you want to share it among all of your virtual hosts, just place it under the `lsws/share/autoindex/` directory. A **General Context** GUI with the **URI** `/_autoindex/` and **Location** `$SERVER_ROOT/share/autoindex/` is automatically created by LSWS for every virtual host. The default PHP script, located at `lsws/share/autoindex/default.php`, has the same look and feel as Apache’s mod\_autoindex.

## Set/Customize Auto Index Page Globally[¶](#setcustomize-auto-index-page-globally "Permanent link")

To create your own Auto Index Page globally, navigate to **Server > General > Index Files** and set **Auto Index** to `Yes`.

If you leave **Auto Index URI** blank, the default script (`lsws/share/autoindex/default.php`) will be used.

To use your own script, for example, `myindex.php`, you can place it under the same directory: `lsws/share/autoindex/myindex.php`. Do not modify `default.php` directly, as it will be overridden after any upgrades. Your own script and configuration will not be affected by version upgrade. Set **Auto Index URI** to `/_autoindex/myindex.php`

## Custom Auto Index Page for Native Virtual Host[¶](#custom-auto-index-page-for-native-virtual-host "Permanent link")

To customize your Auto Index Page for a particular virtual host if it is natively configured, navigate to **VHost > General > Index Files** and set **Auto Index** to `Yes`. Set **Auto Index URI** to the URI of your script.

If Auto Index is enabled, or when a directory with no index file is accessed, LiteSpeed Web Server will perform an internal redirect to **Auto Index URI**. If the value is not set, the URI will contain the default value `/_autoindex/default.php`.

You cannot customize the index file at the virtual host level if the virtual host is configured through an Apache configuration file. In that case, you can only apply a customized index file at the global level.

## Customize Auto Index Page for Apache Virtual Host in a Control Panel Environment[¶](#customize-auto-index-page-for-apache-virtual-host-in-a-control-panel-environment "Permanent link")

For an Apache vhost in a control panel environment, the **Auto Index Uri** can be set in `.htaccess` with the LiteSpeed-specific directive:

```
<IfModule LiteSpeed>
AutoIndexUri /_autoindex/myindex.php
</IfModule>
```

Be sure to replace `/_autoindex/myindex.php` with the actual path for your index file.
