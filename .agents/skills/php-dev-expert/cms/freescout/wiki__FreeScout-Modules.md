# FreeScout Modules · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/FreeScout-Modules

---

Modules allow to extend FreeScout functionality. All modules are open source (AGPL-3.0 license). Official modules source code is downloaded to your server upon installation.

Official modules are developed and maintained by FreeScout Team. Third party modules can be developed by anyone.

1. [Modules](#modules)
2. [Installing Official Modules](#2-installing-official-modules)
3. [Installing Custom Modules](#3-installing-custom-modules)
4. [Troubleshooting](#4-troubleshooting)
5. [Modifying Modules](#5-modifying-modules)
6. [Translating Modules](#6-translating-modules)
7. [Developing Modules](#7-developing-modules)
8. [FAQ](#7-faq)

## 1. Modules

- [Official Modules](https://freescout.net/modules/)
- [Modules Marketplace](https://freescout.net/marketplace/)
- [Community Modules](wiki__Community-Modules.md)

## 2. Installing Official Modules

To install a module:

1. Open your FreeScout and go to `Maganage > Modules`
2. Choose a module and enter [Lincense Key](https://freescout.net/modules/).

![2019-08-20_08-42-15](https://user-images.githubusercontent.com/40499291/63321267-df103400-c328-11e9-80b1-03d70c631d5f.png)

3. Click "Install Module" button.

![2019-08-20_09-00-45](https://user-images.githubusercontent.com/40499291/63321324-0d8e0f00-c329-11e9-8ef7-386706ed0591.png)

4. Click "Activate" button.

![2019-08-20_09-03-02](https://user-images.githubusercontent.com/40499291/63321447-6f4e7900-c329-11e9-95b4-644d2a375c8d.png)

Official modules are not send as ZIP archive by request - they are downloaded via FreeScout instance and when needed updated same way.

## 3. Installing Custom Modules

Instructions on developing custom modules can be found [here](wiki__Modules-Development.md).

In order to install a custom module:

1. Unpack module into `/Modules` folder.
2. Go to `Manage » Modules` and activate the module.

If you are using **Docker**:

```
docker cp ./CustomModule freescout-app:/www/html/Modules/CustomModule
docker exec freescout-app php /www/html/artisan freescout:clear-cache
```

## 4. Troubleshooting

#### — One of official modules does not work properly or just stopped working

1. Try to deactivate all non-official modules.
2. Check errors in "Manage » System » Logs » App Logs".
3. Check errors in [browser console](https://screenful.com/how-to-open-the-browser-console). If there are some JavaScript errors - uninstall and install problematic module again.
4. Manually remove all files from `/bootstrap/cache` folder.

#### — FreeScout or module is not working after installing a module

1. Check application logs in "Manage » System » Logs".
2. Try to run "Migrate DB" in "Manage » System » Tools" or run console command: `php artisan migrate`.
3. [Clear app cache](wiki__Clearing-the-Cache.md) (use method 4) if others do not work).
4. Try to remove and install the module again.
5. Rename the module (`/Modules/Test` into `/Modules/Test2` for example), open <https://your-freescout.com/modules/list> two times, now the module will be deactivated. Rename module back and try to activate. [Clear app cache](wiki__Clearing-the-Cache.md). Try to reinstall the module.
6. If the application is not functioning at all, remove the module from /Modules folder. Edit the `modules` table in DB and remove the module from there. If you are using a docker - recreate the docker container. Re-install the module.

#### — 'File /modules/modulename/js/laroute.js does not exist' or 'File /modules/modulename/css/module.css does not exist'

#### — Error occurred creating [...] symlink: symlink(): No such file or directory

In `/public/modules` folder during installation each module creates a symlink. DO NOT create manually folders instead of symlinks in this directory - it will lead to unexpected problems (like [this one](https://github.com/freescout-help-desk/freescout/issues/1134)).

Make sure that you don't have a [Permissions issue](wiki__Installation-Guide.md#-permissions-issue).

#### — "Error occurred downloading/activating the module".

1. Make sure that everything is ok in "Manage » System » Status", especially file permissions.
2. Check errors in Manage >> Logs >> App Logs.
3. Make sure you have PHP `curl` extension enabled.
4. Make sure that /Modules folder is writable by the web server user.
5. Make sure file [permissions are correct](wiki__Installation-Guide.md#-permissions-issue)
6. Try to install/activate the module again.

#### — "open\_basedir restriction in effect" error when trying to update FreeScout or activate some module

See [this issue](https://github.com/freescout-help-desk/freescout/issues/1606) and try this [solution](https://stackoverflow.com/a/34980645).

#### — Base table or view not found

By some reason DB table migration did not work during module activation on your FreeScout installation:

1. Try to reactivate the module.
2. Try to run "Migrate DB" in "Manage » System » Tools" or run console command: `php artisan migrate`.
3. If still no luck, find a developer who can find out why migration does not work on your FreeScout installation.

#### — "Failed to create folder" error when updating/installing a module

It means you have an [issue with permissions](wiki__Installation-Guide.md#-permissions-issue) in Modules folder ([example](https://github.com/freescout-help-desk/freescout/issues/2709#issuecomment-1429158732)). Or there is [some issue](https://github.com/freescout-help-desk/freescout/issues/2709#issuecomment-1431254355) with module's `Public` folder.

#### — License for the module has been activated but the module has not been downloaded into /www/html/Modules/

Try to deactivate the license for the module and activate again, it will start downloading process again.

#### — I'm activating (deactivating) a module but it stays inactive (active).

It means that in `/storage/framework/cache/data/` there are files created by a user different from www-data, and www-data user can not completely clear the cache ([read more](wiki__Installation-Guide.md#6-configuring-web-server)). Run the following command to make www-data user an owner of all the FreeScout files:

```
sudo chown -R www-data:www-data /var/www/html
```

#### — After updating to the new version the module does not work properly

Modules require a symlink in `/public/modules/`. If somehow instead of a symlink you've manually created a folder there, this will cause problems ([example](https://github.com/freescout-help-desk/freescout/issues/1134)).

To fix this do the following (during this process no data is lost):

1. Deactivate problematic modules
2. Delete problematic modules
3. Install and activate modules one by one
4. Login via SSH and check the `/public/modules/` folder to see if the new install has created symlinks
5. Check if modules are working properly

#### — Modules page is empty. I can't download modules

If your server is located in a local network and access to external URLs is blocked in your local network, you can install FreeScout on some other server, download modules there and copy them from there (from `/Modules` folder).

If you are receiving `cURL error 28: Connection timed out after 10000 milliseconds` error in Manage > Logs > App Logs - it means your PHP can't connect to `https://freescout.net`. Contact your hosting provider to figure out why. Your PHP must be able to connect to `https://freescout.net`, without it it's impossible to download modules.

#### — "Invalid or missing modules symlinks" error

When you are viewing Modules or System Status page in FreeScout, it tries to detect and automatically fix invalid or missing modules symlinks. But there can be situations when symlinks can't be fixed automatically. In this case go to `/public/modules` folder in FreeScout on your server and make sure that symlinks for active modules are valid. There should be no folders in `/public/modules`, only symlinks.

If some simlink is missing, incorrect or you see a folder instead of symlink just remove it, deactivate corresponding module and activate the module again and correct symlink should be created automatically. If it does not help create the symlink manually.

If `Public` folder is missing in some module directory just create an empty `Public` folder manually. If you have a symlink instead of `Public` folder - just remove it and create an empty Public folder manually.

## 5. Modifying Modules

You can change official modules code according to your needs. If you add some awesome features to modules or fix some bugs feel free to send us updated module at [support@freescout.net](mailto:support@freescout.net). We will revise your additions and maybe update the module in the Modules Directory. **Before making updates** in modules make sure to install the latest version of the module first.

## 6. Translating Modules

See instruction [here](https://freescout.net/modules-faq/#translate-modules).

## 7. Developing Modules

[FreeScout Modules Development Guide](wiki__Modules-Development.md)

## 7. FAQ

[Modules FAQ](https://freescout.net/modules-faq/?cc=1)
