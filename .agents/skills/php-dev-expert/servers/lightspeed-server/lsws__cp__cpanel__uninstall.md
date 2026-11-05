# Uninstall | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/uninstall/

---

# Uninstall[¶](#uninstall "Permanent link")

To uninstall LiteSpeed Web Server, perform the following steps:

1. As the root user, convert your server to use the Apache web server with the following command, and make sure that Apache is running:

   ```
   /usr/local/lsws/admin/misc/cp_switch_ws.sh apache
   ```
2. Uninstall the LiteSpeed Web server plugin with the following command line,

   ```
   /usr/local/cpanel/whostmgr/docroot/cgi/lsws/lsws_whm_plugin_uninstall.sh
   ```
3. Remove LiteSpeed Web Server files from your server. The following command removes the LiteSpeed Web Server directory (`lsws`) from the `/usr/local` directory:

   ```
   /usr/local/lsws/admin/misc/uninstall.sh
   ```
4. If you purchased LiteSpeed Web Server through the cPanel Store, create a touch file with the following command:

   ```
   touch /var/cpanel/disable_auto_lsws
   ```
