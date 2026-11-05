# Documentation / Home / Basics / Installation and Setup | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Basics/Installation-and-Setup

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Installation and Setup

[Click here](docs__Home__Server-Requirements.md) to read more about system requirements.

## One Click Installation Option

Many web hosts have Zenbership pre-loaded with a "one click" installation option. Please consult your web hosting control panel to determine if you web host has this option, or alternatively, if they do not, please contact your web host and request that they add it!

## Manual Installation Video

We have put together a comprehensive installation video guide. It goes through the process of uploading the files, creating a MySQL database, setting permissions, running the setup, creating the cron jobs, and more.

  
  

**Video Highlights**

- 0.00: Introduction
- 0.36: Download the files.
- 1.00: Upload the files to your server.
- 3.00: Creating a database.
- 5.26: Setup process & setting file permissions.
- 9.17: Post-setup confirmation steps.
- 9.45: Post-setup steps.
- 11:00: Cron job creation.

## Step-by-Step Guide

- [Download the Zenbership files](http://www.zenbership.com/Download) from the Zenbership website.
- Upload all files within the program's ZIP file to the desired location on your server. Generally this is a sub-domain or sub-folder on your website.
- Make sure that you upload the files in the correct mode. A general rule is: anything you edit in a text editor (example, .php) should be transferred in ASCII mode. Anything that you can't view in a text editor, such as images, ZIP files, and executables should be transferred in binary mode.
- We highly recommend that you use an FTP client like FileZilla (filezilla-project.org) and set the transfer mode to "auto".
- Create a database and database user from your website's control panel (IE: cPanel).
- Access the setup tool in a web browser by going to "http://www.yoursite.com/path/to/zenbership/setup".
- If the paths on the left side are appearing in red, use an FTP client to set [permissions](docs__Basics__Setting-Permissions.md) on those folders to 777.
- Input your desired settings.
- Your database tables should now be successfully created.
- Set [permissions](docs__Basics__Setting-Permissions.md) on all files within the "admin/cp-cron" folder to "755" and proceed to create the cron jobs.
- Set the following folders to 777:
- /admin/sd-system
- **Important:** Be sure to set this back to 755 after completing the setup!
- /admin/sd-system/attachments
- /admin/sd-system/exports
- /custom/sessions
- /custom/qrcodes
- /custom/uploads
- As a general rule, to avoid PHP notices, we recommend that you turn off PHP error reporting on your servers.

## Cron Jobs

A cron job controls "back end" tasks that need to be triggered on a regular basis.

- [Click here](docs__Basics__Cron-Jobs.md) for instructions on setting up the cron job.

## Common Issues With Installations

**500 Internal Error/General Errors**

There are a number of reasons you may receive a 500 internal error. Before proceeding, make sure that error reporting is turned on at the server level and analyze the logs that are generated. Common reasons for 500 errors include:

- Permission have not been set correctly on the files and folders.
- You uploaded your files in the incorrect transfer type. Some files require ASCII, others require binary mode transfers.
- This generally manifests itself as a "T\_CLASS" error.
- We highly recommend using FileZilla set to transfer files in "Auto" mode, allowing FileZilla to determine which files need the binary vs ASCII transfer mode.
- [Server requirement](docs__Home__Server-Requirements.md) incompatibilities:
- Such as a version of PHP or MySQL that is too old for Zenbership's requirements.
- Or more commonly, you are missing one or more of the required PHP modules.

**MySQL Errors**

- Be sure that all of your credentials are correct:
- MySQL server host (not always localhost)
- MySQL database name, username, password (all case sensitive)
- Be sure that the MySQL user has access to the database you are installing Zenbership into, and that the user has all of the required permissions to create, alter, and drop the required tables (grant the user all possible privileges).

**Other Issues**

Please see the following articles for other potential reasons for issues:

- [Reasons for Blank Pages](docs__Home__Reasons-for-Blank-Pages.md)
- [Frequently Asked Questions](docs__FAQ__Frequently-Asked-Questions.md)

### Article Links

- [One Click Installation Option](#One_Click_Installation_Option)
- [Manual Installation Video](#Manual_Installation_Video)
- [Step-by-Step Guide](#Step-by-Step_Guide)
- [Cron Jobs](#Cron_Jobs)
- [Common Issues With Installations](#Common_Issues_With_Installations)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/02/13.  
Last updated on 2017/03/21.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
