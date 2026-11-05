# Documentation / Home / Updating Zenbership | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Home/Updating-Zenbership

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Updating Zenbership

We highly recommend that you backup your database and Zenbership directory before proceeding. If you are unsure how to do any of the following tasks, we are happy to offer an update service. [Contact us](https://www.castlamp.com/Contact) for details.

Updating Zenbership is a two part process: first you update your database, then you update the physical files on your server.

# Updating Your Database

- Go to the [castlamp/zenbership\_updates](https://github.com/castlamp/zenbership_updates) repo.
- Download the latest update files. Files are named by version number. You can determine which files to download based on your current version of Zenbership, which is found in the footer of the administrative dashboard.
- Upload all of the update files to the "custom/updates" folder on your server.
- In your web browser, visit http://www.yoursite.com/path/to/zenbership/custom/updates/updater.php
- Your database should now be updated.

# Updating Your Physical Files

- Go to the [castlamp/zenbership](https://github.com/castlamp/zenbership) repo.
- Download the latest files.
- Unzip the files on your local computer.
- Upload all of the unzipped files to your server overwriting the existing ones, **except the following folders**:
- .htaccess
- /custom
- /pp-templates
- The one exception to this is when new templates are added into the program. If that is the case, only upload the files listed on the release post to ensure that you don't overwrite your custom theme!
- /setup
- /admin/sd-system
- After uploading, set [permissions](docs__Basics__Setting-Permissions.md) on all files within the "admin/cp-cron" folder to "755" and proceed to create the cron jobs.
- And set permissions on the following folders to 777:
- /admin/sd-system/attachments
- /admin/sd-system/exports
- /custom/sessions
- /custom/qrcodes
- /custom/uploads

Your update is now be complete.

### Article Links

- [Updating Your Database](#Updating_Your_Database)
- [Updating Your Physical Files](#Updating_Your_Physical_Files)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2016/03/08.  
Last updated on 2017/04/07.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
