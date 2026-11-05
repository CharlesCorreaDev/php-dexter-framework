# Installation | LiteMage Cache for Magento 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/litemage/installation/

---

# Installation[¶](#installation "Permanent link")

Before installing and activating the LSCache plugin, deactivate all other full-page cache plugins.

Tip

You can still use other types of cache (like object cache, or browser cache), but only one full-page cache should be used at a time.

## Prerequisites[¶](#prerequisites "Permanent link")

Note

Please see the [Overview](lscache__litemage.md#server-level-prerequisites) for the server-level requirements before attempting to install this extension.

### PHP Prerequisites[¶](#php-prerequisites "Permanent link")

If you are using a control panel, simply choose the appropriate PHP version in the panel.

If you are using LiteSpeed Web Server Native Mode, execute the following steps from the command line:

```
php -v
```

This command returns the PHP version used by the command line interface. This version may be different than the one used by LiteSpeed. If the version number does not match the version used by LiteSpeed, you run the risk of compatibility issues.

```
which php
```

This command returns the location of the command line PHP binary, probably `/usr/local/bin/php`. Enter the returned directory (if the `which` command did't return anything, we recommend trying `/usr/local/bin/` or `/usr/bin/`), like so:

```
cd /usr/local/bin
```

Change the current PHP binary name to something different as a backup using the `mv` command and create a symbolic link to the LiteSpeed PHP binary (or copy the binary itself into the current directory).

Example

Using PHP 7 with `which php` returning `/usr/bin/php`:

```
mv /usr/bin/php /usr/bin/php-orig
ln -s /usr/local/lsws/lsphp70/bin/php /usr/bin/php
```

If the steps were done correctly, running the `php -v` command should now return a version number matching LiteSpeed's PHP version.

## Extension Installation[¶](#extension-installation "Permanent link")

Assuming that the Prerequisites mentioned above have been met, you are ready to begin installation.

### Log In[¶](#log-in "Permanent link")

Access a terminal as the Magento directory owner (e.g. `user1`) and cd into the Magento 2 root directory. If logged in as `root`, run the `su user1` command first to become the Magento directory owner.

### Set Deploy Mode[¶](#set-deploy-mode "Permanent link")

If the current deploy mode is set to `default`, you can install LiteMage 2 without changing it. If the current deploy mode is set to `production`, you will have to set the deploy mode to `developer` before installation, and change it back to `production` once installation is complete, like so:

`php bin/magento deploy:mode:set developer`

### Get LiteMage Package[¶](#get-litemage-package "Permanent link")

There are two ways to get the LiteMage 2 package: composer and direct download.

#### Composer[¶](#composer "Permanent link")

Use composer to get the latest LiteMage 2 package, like so:

`composer require litespeed/module-litemage`

To get a specific version, add the version number. For example:

`composer require litespeed/module-litemage:2.0.4`

This will download the LiteMage 2 package from [packagist.org](https://packagist.org/packages/litespeed/module-litemage), and install it into the `vendor/litespeed` directory.

You will need to provide your username(public key) and password(private key) authentication for `repo.magento.com`. If you have not done so already, [Get your authentication keys](http://devdocs.magento.com/guides/v2.0/install-gde/prereq/connect-auth.html).

#### Direct Download[¶](#direct-download "Permanent link")

[Download the package file from GitHub](https://github.com/litespeedtech/magento2-LiteSpeed_LiteMage/archive/master.zip), and unzip the source package, like so:

`unzip magento2-LiteSpeed_LiteMage-master.zip`

In the Magento 2 root directory, create the required LiteMage directory with the following command:

`mkdir -p app/code/Litespeed/Litemage`

Move the previously downloaded files into the newly created LiteMage directory, like so:

`mv /path/to/magento2-LiteSpeed_LiteMage-master/* app/code/Litespeed/Litemage/`

### Confirm File Ownership[¶](#confirm-file-ownership "Permanent link")

Confirm that the owner of the files is consistent with the other Magento store files.

### Enable LiteMage[¶](#enable-litemage "Permanent link")

Enable LiteMage 2 in Magento with the following command:

```
php bin/magento module:enable Litespeed_Litemage
```

### Upgrade Magento's Setup[¶](#upgrade-magentos-setup "Permanent link")

Upgrade Magento's setup, like so:

`php bin/magento setup:upgrade`

### Recompile[¶](#recompile "Permanent link")

Recompile using the single-tenant or multi-tenant compiler. The single-tenant compiler has some [known issues](http://devdocs.magento.com/guides/v2.0/config-guide/cli/config-cli-subcommands-compiler.html#config-cli-subcommands-single) in earlier versions of Magento. If you are running Magento 2.0.6 or later **AND** have one Magento store, please use the following command:

`php bin/magento setup:di:compile`

If you are running Magento 2.0.5 or earlier, please use this command instead:

`php bin/magento setup:di:compile-multi-tenant`

### Reset Deploy Mode[¶](#reset-deploy-mode "Permanent link")

If desired, You may now switch your deploy mode back to `production` with the following command:

`php bin/magento deploy:mode:set production`

Tip

The previous step may need to be repeated after switching deploy modes.

Warning

PHP 7.0.x users running a version below 7.0.6 may run into a [PHP fatal error bug](https://github.com/magento/magento2/issues/4070). A workaround for this is to delete the `var/di/relations.ser` file with the following command:

`rm var/di/relations.ser`

## Enable LiteMage[¶](#enable-litemage_1 "Permanent link")

1. Add the following lines to the top of your Magento 2 root directory .htaccess file:

   ```
   <IfModule LiteSpeed>
   LiteMage on
   </IfModule>
   ```
2. Log into the Magento admin page.
3. In **Store > Configuration > Advanced > System**, make sure LiteMage is enabled and selected under the **Full Page Cache** setting.
4. In **System > Cache Management**, refresh the **Configuration** and **Page Cache** cache types. **Page Cache** should be enabled. If it isn't, then LiteMage cannot work and LiteMage Cache Management statistics won't show up.

Warning

If your .htaccess file is ever overwritten you must re-add this code for LiteMage to work.

Warning

If LiteSpeed is running off of Apache configuration, then you need to verify that .htaccess files have been enabled.

Check your Apache configuration file for the related "Virtual Host" section and make sure the following is set:

```
<Directory /path/to/your/magento_store_installation>
  AllowOverride All
</Directory>
```

If it is set to "AllowOverride None", .htaccess files will be disabled. Therefore, LiteMage will not be enabled even if you place `LiteMage on` in .htaccess.

For cPanel users, the auto-generated main configuration file in `/usr/local/apache/conf/httpd.conf` may include other files like `/usr/local/apache/conf/userdata/std/2/test123/test123.com/*.conf`. You need to check all included files to ensure that .htaccess is enabled.

Alternatively, the enable code can be placed in the virtual host conf section instead of in .htaccess.

Tip

For dedicated/VPS servers, although not required, it is possible to improve LiteMage performance by setting **Check Public Cache** to `Yes` under **Server > Cache > Cache Policy**.

## Update LiteMage[¶](#update-litemage "Permanent link")

The steps involved in updating LiteMage 2 to a newer version in the future, should be almost identical to the steps performed during installation. The only difference occurs when downloading a new package. At this point, if you installed LiteMage 2 using the GitHub method, you must remove the old package files and download the new package files through GitHub. (Composer update steps are identical to installation)

Warning

Please be consistent when installing and upgrading LiteMage 2. Whether you installed LiteMage 2 using GitHub files or through Composer, always use the same method when updating to a newer version. If you do not do this, you will generate a duplicate copy of LiteMage 2 and run into the following error: `Autoload error: 'Litespeed_Litemage' component already exist`

## Verify Your Site is Being Cached[¶](#verify-your-site-is-being-cached "Permanent link")

You can verify a page is being served from LiteMage Cache through the following steps:

1. From a non-logged-in browser, open the developer tools and navigate to your site. Open the **Network** tab.
2. Refresh the page.
3. Click the first resource. This should be an HTML file. For example, if your page is `http://example.com/magento/`, your first resource should either be something like `example.com/magento/` or `magento/`.
4. If you see headings similar to

   ```
   X-LiteSpeed-Cache: miss, litemage
   X-LiteSpeed-Cache-Control:public,max-age=1800
   X-LiteSpeed-Tag:B1_F,B1_
   ```

   (for example), this means the page had not yet been cached, but that LiteSpeed has now stored it for future use.
5. Reload the page and you should see `X-LiteSpeed-Cache: hit, litemage` in the response header. This means the page is being served by LSCache and is configured correctly.
6. If you don't see `X-LiteSpeed-Cache: hit, litemage` or `X-LiteSpeed-Cache: miss, litemage`, then there is a problem with the LSCache configuration.

Tip

We suggest testing LiteMage 2 in a pre-production environment. If you have to test on a live site, be sure to only [enable LiteMage Cache for your admin IP address](lscache__litemage__troubleshoot.md#enable-litemage-for-certain-ips-only). This way, you can test caching on your own IP, while other IPs are served normally.
