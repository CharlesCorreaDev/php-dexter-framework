# File System Permissions · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/File-System-Permissions

---

Files and directories stored on your server have different permissions that enable users and other programs to read/write/execute the code contained in the files. The following permissions must be in place for OWA to operate correctly.

## Base Directory (/path/to/owa)

The files and directories within OWA's base directory (`/path/to/owa`) require *read*, *write* and *execute* permissions for **your** user account.

On a Unix server the most likely permission mode is **0750**. However, depending on your web server/PHP setup a more permissive mode of **0755** may be required.

If your web server or CGI process runs under a different user account, then *read*, *write*, and *execute* permissions are also required for the group that the web server user account belongs to. Group *write* privileges for the base directory can be revoked once installation is complete — or even before installation if you are willing to create your `owa-config.php` file manually. However, *write* privileges must remain in effect for OWA's data directory (see below).

## Data Directory (/path/to/owa/owa-data)

The files and directories within OWA's data directory (`/path/to/owa/owa-data`) require *read* and *write* permissions for whatever user account your web server or CGI process is running under.

This includes **`owa-data` itself**, not only the `logs` and `caches` sub-directories
the installer checks. Maintenance commands create their own directories underneath
it — `owa-data/ua-parser` for the user-agent patterns, and the Maxmind module's
database directory — and they are created on first run, after installation.

**NOTE:** If your web server or CGI process is not running as your user account then you will need to assign and grant *write* permissions to a group that includes the user account that the web server/CGI runs under.

## Configuration File (owa-config.php)

OWA's configuration file `owa-config.php` must be readable by the user account that your web server/CGI runs under.

**NOTE:** If you are running OWA on a server shared by other users you should change the permissions of your `owa-config.php` file to mode **0750** (or even **0700**) so that it is not readable by other users.

## Command Line Interface (cli.php)

OWA's command line interface script `cli.php` should be *readable* and *executable* **only** by *your* user account. Change the permission mode of this file to **0700** to prevent unauthorized access to the CLI in shared server environments.
