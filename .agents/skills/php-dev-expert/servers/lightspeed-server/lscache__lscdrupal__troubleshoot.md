# Troubleshooting | LiteSpeed Cache for Drupal | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscdrupal/troubleshoot/

---

# Troubleshooting Guide[¶](#troubleshooting-guide "Permanent link")

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache plugins. If you don't see your issue listed here, there are [additional support options](lscache__lscdrupal.md#additional-support) available.

See Also: [General LSCache Troubleshooting](lscache__troubleshoot.md)

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the plugin.

## 500 Error During Installation[¶](#500-error-during-installation "Permanent link")

You may experience a 500 error during installation if:

- The PHP version is less than 7.1
- PHP module packages are missing

Check your PHP version. If it's lower than PHP 7.1, you will need to upgrade to a newer version.

If you are using acceptable version of PHP, then the problem may be missing PHP modules. Check the server error log. You may see something like the following:

```
    [STDERR] Error: Class 'ZipArchive' not found in /var/www/html/core/lib/Drupal/Core/Archiver/Zip.php on line 30 #0 /var/www/html/core/lib/Drupal/Core/Archiver/ArchiverManager.php(42): Drupal\Core\Archiver\Zip->__construct('/tmp/lscache-dr...')
```

Install the specified package (`php-pecl-zip` in this example), and that should fix the problem.
