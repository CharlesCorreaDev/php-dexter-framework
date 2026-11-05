# Backup · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Backup

---

As FreeScout is very lightweight you can just make a copy of the FreeScout directory (e.g. /var/www/html/ or wherever your installation is - in this folder there are all the config files and also the module files, etc.). In addition, you can make a database export (e.g. via mysql dump). Then you can zip/tar the two parts of FreeScout and transfer them to a location of your choice. ([Example 1](https://github.com/freescout-help-desk/freescout/issues/2653), [Example 2](https://github.com/freescout-help-desk/freescout/issues/2568#issuecomment-1426696192))

Restore can be done the same way, just move/copy the backup files to the location of your "broken" installation and override all the files. Then do a SQL dump in the other direction and FreeScout is up.

When you restore on another server you also have to make sure the requirements such as php are matching and the webserver is configured correctly.
