# Install Guide | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/install

---

On this page

## Alternative Installation Methods[​](#alternative-installation-methods "Direct link to Alternative Installation Methods")

- Use [Docker](https://github.com/LiveHelperChat/docker-standalone)
- Use [Softaculous](https://softaculous.com/apps/customersupport/live_helper_chat)

## Requirements[​](#requirements "Direct link to Requirements")

If you are running a WordPress site, Live Helper Chat is very likely to work seamlessly.

- Download the latest version as a [zip](https://github.com/LiveHelperChat/livehelperchat/archive/refs/heads/master.zip) or [tgz](https://github.com/LiveHelperChat/livehelperchat/tarball/master) archive.
- Alternatively, download a version with dependencies included from [the releases page](https://github.com/LiveHelperChat/livehelperchat/releases). Look for the newest file named `*.**v-with-dependencies.tgz`.
- PHP version 8.2 or higher is required. For older PHP versions, you will have to install composer dependencies manually.
- MySQL 5.7 or MariaDB 10.2.3 or higher with `json_` functions support.
- Apache or Nginx web server.
- For the Laravel version, see [livehelperchat\_laravel](https://github.com/LiveHelperChat/livehelperchat_laravel).

```
# Optional but Recommended  
php-phpiredis  
php-imap  
php-pecl-redis4  
php-pecl-igbinary  
php-geos  
php-fpm  
php-opcache  
  
# Required  
php-json  
php-cli  
php-gd  
php-xml  
php-common  
php-pdo  
php-pecl-zip  
php-mysqlnd  
php-mbstring  
php  
php-bcmath
```

## Composer Dependencies[​](#composer-dependencies "Direct link to Composer Dependencies")

These steps are not required if you downloaded a version with dependencies included.

If you are using a version with mail support (version 3.30v or newer), run the following command from the `lhc_web` folder:

```
composer.phar install
```

If you encounter an issue such as an incompatible PHP version, try removing the `composer.lock` file and running the installation again:

```
rm composer.lock  
composer.phar install
```

You can download `composer.phar` from <https://getcomposer.org/download/>.

## Folder Permissions[​](#folder-permissions "Direct link to Folder Permissions")

- After granting write permissions to the cache folder, you should see the installation page. If you encounter an error instead, ensure that:
  - Your browser is pointing to the correct URL: `index.php/site_admin/install/install`.
  - You have granted recursive write permissions to the cache folder.

Try changing the owner to the Apache user or the user under which your HTTP server operates:

```
chown apache:apache -R cache/  
chown apache:apache -R var/  
chown apache:apache settings/  
chmod -R 755 cache/
```

After these changes, you should see a screen similar to this:

​![](/assets/images/install-step-1-8123c38d4610806aa7503c2895fe20b0.png)

Next, grant write permissions to the required folders and files:

```
chmod 755 settings/  
chmod -R 755 var/storage  
chmod -R 755 var/userphoto  
chmod -R 755 var/storageform  
chmod -R 755 var/storageadmintheme  
chmod -R 755 var/botphoto  
chmod -R 755 var/bottrphoto  
chmod -R 755 var/storageinvitation  
chmod -R 755 var/storagedocshare  
chmod -R 755 var/storagetheme  
chmod -R 755 var/tmpfiles
```

After this step, all items should be marked in green.

## Database Settings[​](#database-settings "Direct link to Database Settings")

On the next screen, you will see a window where you need to enter your database settings. Ensure that the database has already been created.

​![](/assets/images/database-settings-ddd218b84ad87115f9fa8425612257e6.png)

## Application Initial Settings[​](#application-initial-settings "Direct link to Application Initial Settings")

Fill in these settings according to your requirements.

​![](/assets/images/initial-app-settings-8f17ccf2d6b81eb2906bb06b0c41706d.png)

## Installation Completed[​](#installation-completed "Direct link to Installation Completed")

​![](/assets/images/install-completed-17ec30907f8e85aa4c9e261666654803.png)

## Logging into the Application[​](#logging-into-the-application "Direct link to Logging into the Application")

After clicking `Login here`, you will be redirected to the login window.

​![](/assets/images/login-window-e6494a65369cbbe1eca36d67524bfd7f.png)

The installation URL is always `index.php/site_admin/user/login`.

## Dashboard Page[​](#dashboard-page "Direct link to Dashboard Page")

This is the main application window.

​![](/assets/images/dashboard-installed-d36210ee85d8b0eba6cc805daba20fb8.png)

## Generating Embed Code[​](#generating-embed-code "Direct link to Generating Embed Code")

Click the settings icon ​![](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAbCAYAAAB4Kn/lAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFzSURBVEhL7ZVBSsNQEIZ/xQsUeoZm4wECJT1ABW1KN9qNeIN0YdsTlICYAwhF0CpIaatHaChmK1klFxCLkK26iS/JvCS+9hWLuhD6wXvvnyFvMgwzydbb+0eIP2Cbzl9nEzjl/wVebDd/iHp7QMZ3aKI3bkAhiyNkHMB+WCdoxAD3dkA6Qwg8x8uMZA611cdoPGarD6NMzhzO85xUhrzGZQO9lspEEwdaIfGhAG2/yU4VhmmwXc4OnQLs4nEFSrGCkUYuTqnBMk/kbusRzrmTGALLMz6sQSuS5vgePJKcglbDEWmR5YFvO6jrwzSQd6ezTumgq+sY+uSMukfv4IZMEXmNf0rUx9lyw+vqXli9cnM+Wq4bPom+Fc9LSjGB/UqaU1IWhiCwJ+uWwoF1OYVnm19qHRPX1oTtT3Eh6YgIeY1nFrrxxfxk8clkL25bbJcjfCvYxbMTWEumbxXRZJ6mQ5QgZMwnax3yk5mx+ZmmbAITwCcdsLz4JGc0OgAAAABJRU5ErkJggg==) in the top menu. This will open the settings window.

​![](/assets/images/settings-page-87b18641b8d676ad31fed9552eb3f813.png)

Navigate to:

> Embed code -> Widget embed code (new)

You will then see a window like this:

​![](/assets/images/html-code-0176de91e563e93509f4c8118aea5835.png)

To enable proactive chat, check the option `Check for operator invitation messages`.

The embed code should look similar to this. If you copy this code, remember to change `install.livehelperchat.com/index.php` to your actual installation path:

```
<script>var LHC_API = LHC_API||{};  
LHC_API.args = {mode:'widget',lhc_base_url:'//install.livehelperchat.com/index.php/',wheight:450,wwidth:350,pheight:520,pwidth:500,leaveamessage:true,proactive:true};  
(function() {  
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;  
var date = new Date();po.src = '//install.livehelperchat.com/design/defaulttheme/js/widgetv2/index.js?'+(""+date.getFullYear() + date.getMonth() + date.getDate());  
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);  
})();  
</script>
```

For more information and troubleshooting, refer to the [integration article](docs__docs__integrating.md).

## Proactive Invitation Setup[​](#proactive-invitation-setup "Direct link to Proactive Invitation Setup")

Navigate to:

> System configuration -> Live help configuration -> Proactive chat invitations

Here’s a demo configuration from demo.livehelperchat.com, which includes the following settings:

- A message is sent to the user after 20 seconds on the page or after viewing more than 2 pages.
- A random profile from online operators is shown.
- Delayed messages are available and can be configured in the autoresponder section.
- A long auto-delayed message is set for 40 seconds. If no operator accepts the chat within this time, a message indicates that all operators are busy.

You can view the proactive invitation setup on our demo installation:

​![](/assets/images/proactive-invitation-dd2fe9ad468929c545c496fa675d4116.png)

Here is the instant auto-response message:

​![](/assets/images/autoresponder-e4b1d266e4a4c654d1a0f92fa3468ee4.png)

Here is the automatic auto-response message:

​![](/assets/images/autoresponder-busy-f6bbb3190d64998b49718f3188405bab.png)

## Desktop Client[​](#desktop-client "Direct link to Desktop Client")

The desktop application is available at <https://github.com/LiveHelperChat/electron>. It is based on the Electron framework, functions as a standalone browser, and is significantly faster than Chrome.

## Further Reading[​](#further-reading "Direct link to Further Reading")

- [How to remove index.php from URL?](docs__docs__development__remove-index-php.md)
- [How to set up automatic online/work hours?](docs__docs__online-hours.md)
- [How to automatically change operator status to offline/online?](docs__docs__offline-online-automation.md)
- [How to rebrand it according to your site's style?](docs__docs__theme.md)
- [How to use screen sharing?](docs__docs__co-browsing.md)
- Try the [Windows app](https://livehelperchat.com/demo-12c.html) or the [Chrome extension](https://livehelperchat.com/how-to-use-chrome-extension-245a.html)
- [Why do my users lose chat sessions when they navigate through the site, resulting in duplicate online user records?](docs__docs__online-visitors.md#my-users-loose-chat-session-then-they-navigate-through-the-site-duplicate-online-users-records)

## On Windows IIS, I Get a 404 Error[​](#on-windows-iis-i-get-a-404-error "Direct link to On Windows IIS, I Get a 404 Error")

Refer to [this comment](https://github.com/orgs/LiveHelperChat/discussions/1900#discussioncomment-9767891). This issue might occur due to too many URL segments.

## Chat Does Not Start[​](#chat-does-not-start "Direct link to Chat Does Not Start")

If you are running behind CloudFlare or another proxy that affects the IP address seen by Live Helper Chat, enable it in the settings file:

> <https://github.com/LiveHelperChat/livehelperchat/blob/a60a3b485ed08650b9e081ed827998e050717e37/lhc_web/settings/settings.ini.default.php#L18>

## Widget Content Looks Very Small on My Website[​](#widget-content-looks-very-small-on-my-website "Direct link to Widget Content Looks Very Small on My Website")

Ensure that your website includes a `viewport` tag:

```
<meta name="viewport" content="width=device-width, initial-scale=1">
```

## My Widget Does Not Load[​](#my-widget-does-not-load "Direct link to My Widget Does Not Load")

Try adding the following to your `.htaccess` file in the root folder `lhc_web`. If this folder does not exist, place the `.htaccess` file in the same folder as the `index.php` file. The `.htaccess` file must be placed in the Live Helper Chat folder, not the website folder.

```
AddType application/wasm .wasm  
  
<Files ~ "\.(gif|jpe?g?|png|bmp|swf|css|js|svg|otf|eot|ttf|woff|woff2|swf|mp3|ogg|wasm|map|wav|pdf|ico|txt)$">  
  Header always Set Access-Control-Allow-Origin "*"  
  Header always Set Access-Control-Allow-Methods: "GET, POST, OPTIONS, PUT, DELETE"  
  Header always Set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, API-Key, Authorization"  
</Files>
```

If the above solution does not work, try this configuration without the `always` keyword:

```
AddType application/wasm .wasm  
  
<Files ~ "\.(gif|jpe?g?|png|bmp|swf|css|js|svg|otf|eot|ttf|woff|woff2|swf|mp3|ogg|wasm|map|wav|pdf|ico|txt)$">  
  Header Set Access-Control-Allow-Origin "*"  
  Header Set Access-Control-Allow-Methods: "GET, POST, OPTIONS, PUT, DELETE"  
  Header Set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, API-Key, Authorization"  
</Files>
```

Other possible causes:

- You have modified `Chat configuration -> Misc -> Domains where script can be embedded. E.g example.com, google.com`, but the embedded script's domain is not listed.
- You have enabled `System configuration -> GEO Adjustment` with invalid data.
- You have blocked yourself via `System configuration -> Live help configuration -> Blocking -> Blocked users`.

## How Can I Limit the Widget to a Few Domains and Subdomains?[​](#how-can-i-limit-the-widget-to-a-few-domains-and-subdomains "Direct link to How Can I Limit the Widget to a Few Domains and Subdomains?")

The widget can be embedded on multiple domains.
[More information](docs__docs__integrating.md#what-if-you-have-to-limitate-the-widget-to-few-domain-and-subdomain).

## Chat Was Closed, but When the Visitor Starts a New Chat, an Old Chat Opens[​](#chat-was-closed-but-when-the-visitor-starts-a-new-chat-an-old-chat-opens "Direct link to Chat Was Closed, but When the Visitor Starts a New Chat, an Old Chat Opens")

This is likely because you have enabled `Chat configuration -> Misc -> Reopen chat functionality enabled`.

[More information](docs__docs__chat__configuration.md#reopen-chat-functionality-enabled).

## Install from the Command Line[​](#install-from-the-command-line "Direct link to Install from the Command Line")

You can also install Live Helper Chat from the command line.

Copy the `install-cli.php` script to the root folder (`lhc_web` if you cloned from GitHub):

```
cp cli/install-cli.php install-cli.php
```

Copy the default `example.settings.ini` to `settings.ini` and modify it:

```
cp cli/example.settings.ini cli/settings.ini
```

Install Live Helper Chat:

```
php install-cli.php cli/settings.ini
```

## Installation Under a Subfolder[​](#installation-under-a-subfolder "Direct link to Installation Under a Subfolder")

If you are running a WordPress site with pretty permalinks, you might need to allow access to the Live Helper Chat subfolder. Your `.htaccess` file might look like this:

```
RewriteEngine On  
# Previous rules  
RewriteRule ^lhc_web/.*$ - [L]  
# Afterward rules
```

If you experience logouts after a period of inactivity, it could be because your main website uses the same PHP session cookie name. Change `php_session_cookie_name` in the main settings [file](https://github.com/LiveHelperChat/livehelperchat/blob/da2815e5e5715594ef819a21da211d086061b58a/lhc_web/settings/settings.ini.default.php#L23) to something like `lhc_session_id`.

## I don't get a sound/notification for new chats[​](#i-dont-get-a-soundnotification-for-new-chats "Direct link to I don't get a sound/notification for new chats")

Browser notifications and permission to play sound are shown at the top right in the back office. If you do not see any of those icons, it means the browser has permission to send notifications and play sound.

The Browser title also blinks if there is a new chat.

![](data:image/png;base64,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)

- To enable sound permissions at the browser level:
  - Click anywhere on the page.
  - Navigate to `Site settings` and choose `Allow` for `Sound`.
- Make sure also `Notifications` is set to `Allow`
- As a precaution, you can in the same `Site settings` choose `Background sync` and set it as `Allow` explicitly

![](/assets/images/site-settings-browser-2cc7ba65f632a7c7055bd76837e77d3e.png)

![](data:image/png;base64,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)

Browser notifications can be enabled by clicking the `Ring` icon and allowing the web page to send browser notifications.

### Notifications/Sound requirements[​](#notificationssound-requirements "Direct link to Notifications/Sound requirements")

- Make sure you see `Pending` or `My active and pending chats` widgets in dashboard and your chats limit in them is bigger than the number of chats in the widgets, otherwise you won't get notification.
- You have granted `Browser notifications` and `Sound notification` for the agent. ![](data:image/png;base64,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) Those should NOT be visible for operator.
- Make sure you are `Online` OR in your account have checked `Show notifications if I am offline`
- Test notification in your account by clicking `Test notification` and entering chat ID
- If you have checked in your account `Show notification only if I am an owner pending chat` make sure you are using an auto assignment process.
- In `Synchronization and sound settings` you can set `How many times play sound notification` how many times play sound notification.
- If you have limit of 5 chats set in `Pending` or `My active and pending chats` and new chat comes you will not hear a sound because it would be six which is invisible.
- If you still did not got a sound while opening a dashboard check [connection status widget](docs__docs__chat__connection-status.md)
- Using `System -> Online hours` you can see were you online at that period or not.
- If you have set `Change my online/offline status based on my activity` in your account and you were offline at that moment, you won't receive notification.
- In windows notifications settings `Sound` can be enabled for notification itself. `Play a sound when a notification arrives`. You should review a notification settings for Chrome browser.

Try using <https://github.com/LiveHelperChat/electron/releases> native desktop application.

## How to Log In[​](#how-to-log-in "Direct link to How to Log In")

To log in, navigate to the directory where the application is installed. The URL should look like: `http://<your_domain>/index.php/site_admin/`. `site_admin` is not a folder!!!

Few examples

- `https://example.com/lhc_web/` login URL will be `https://example.com/lhc_web/index.php/site_admin`
- `https://example.com/chat/` (you renamed `lhc_web` to `chat`) login URL will be `https://example.com/chat/index.php/site_admin`
- `https://chat.example.com/` (you put content from `lhc_web` directly as the root directory of the chat app) login URL will be `https://chat.example.com/index.php/site_admin`

If you forget your password and the password reminder does not work, execute the following query to reset the password for the `admin` user (user\_id 1) to `demo`:

```
UPDATE `lh_users` SET password = '$2y$10$IwnZfDcPm7nqvp/BLNmJietHT/TSHCRPXWHKFqheQfojwk4c4znVG' WHERE `id` = 1;
```

If you have modified roles, groups, or functions and cannot access the application, execute the following queries. They will grant all functions to the `admin` user (user\_id 1).

The error you might encounter is:

```
You do not have permission to access the module "front" and use "use" function.
```

Execute these queries to restore the admin group, role, and permissions for the first user in the users list:

```
DELETE FROM `lh_group` WHERE `id` = 1;  
DELETE FROM `lh_role` WHERE `id` = 1;  
DELETE FROM `lh_grouprole` WHERE `id` = 1;  
DELETE FROM `lh_groupuser` WHERE `id` = 1;  
  
INSERT INTO `lh_group` (`id`, `name`, `disabled`, `required`) VALUES (1,'Admin',0,0);  
INSERT INTO `lh_role` (`id`, `name`) VALUES (1,'Admin');  
INSERT INTO `lh_grouprole` (`id`, `group_id`, `role_id`) VALUES (1,1,1);  
INSERT INTO `lh_groupuser` (`id`, `group_id`, `user_id`) (SELECT 1,1,`lh_users`.`id` FROM `lh_users` ORDER BY `lh_users`.`id` ASC LIMIT 1);
```
