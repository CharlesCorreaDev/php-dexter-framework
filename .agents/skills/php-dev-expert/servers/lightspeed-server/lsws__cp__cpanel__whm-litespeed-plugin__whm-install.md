# Installation | WHM LiteSpeed Plugin | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/whm-litespeed-plugin/whm-install/

---

# Install, Update, and Uninstall[¶](#install-update-and-uninstall "Permanent link")

There are two methods for installing LiteSpeed's WHM Plugin: from within WHM itself, or from the command line.

## Install or update[¶](#install-or-update "Permanent link")

You can use the same method for both installation and updating the plugin.

### In WHM[¶](#in-whm "Permanent link")

In WHM, navigate to **WHM Plugins** and search for `LiteSpeed Web Server Plugin for WHM`. Install the plugin from the search results.

### From the command line[¶](#from-the-command-line "Permanent link")

Run the following command as `root`:

```
wget -O- https://litespeedtech.com/packages/cpanel/lsws_whm_plugin_install.sh | sh
```

## Uninstall[¶](#uninstall "Permanent link")

Run the following command as `root`:

```
/usr/local/cpanel/whostmgr/docroot/cgi/lsws/lsws_whm_plugin_uninstall.sh
```
