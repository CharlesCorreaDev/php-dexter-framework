# Key web server settings after installing a fresh Yii 2 basic or advanced app | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/696/key-web-server-settings-after-installing-a-fresh-yii-2-basic-or-advanced-app

---

## [Key web server settings after installing a fresh Yii 2 basic or advanced app](wiki__696__key-web-server-settings-after-installing-a-fresh-yii-2-basic-or-advanced-app.md)

3    0

46

Viewed: 36 862 times

Version: 2.0

Category: [Tips](wiki__index.md)

- [.htaccess](wiki__index.md)
- [access](wiki__index.md)
- [advanced](wiki__index.md)
- [apache](wiki__index.md)
- [app](wiki__index.md)
- [basic](wiki__index.md)
- [directory](wiki__index.md)
- [folder](wiki__index.md)
- [install](wiki__index.md)
- [prettyurl](wiki__index.md)
- [prevent](wiki__index.md)
- [security](wiki__index.md)
- [web](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Updated by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Created: May 23, 2014

Updated: 12 years ago

1. [1. Pretty URL](#1-pretty-url)
2. [2. Prevent Viewing Folders / Index of Directories](#2-prevent-viewing-folders-index-of-directories)
3. [3. Block Accesses to Hidden Directories](#3-block-accesses-to-hidden-directories)
4. [4. Block Accesses to Backup/Source files](#4-block-accesses-to-backupsource-files)
5. [5. Increase cookie security](#5-increase-cookie-security)
6. [Wiki Translations](#wiki-translations)

So, you have installed a brand new Yii 2 app (basic) or (advanced). Here are a few tips for Apache web server users to get things running more secure and better with your yii2 app.

> **Note:** If you are using one of these templates [yii2-app-practical](http://demos.krajee.com/app-practical), [yii2-app-practical-a](http://demos.krajee.com/app-practical-a), or [yii2-app-practical-b](http://demos.krajee.com/app-practical-b) to install your app, then whatever is discussed here is already pre-configured.

#### 1. Pretty URL [¶](#1-pretty-url)

The default install displays URL on address bar in the GET format. You may want to set it to pretty urls in a format more understandable by search engines (and also by many users).

**Step 1a:** Set the following in your yii configuration file:

```
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        // your url config rules
    ]
]
```

**Step 1b:** Next, configure the `.htaccess` file in your app root to set index.php rewrite.

```
# if a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# otherwise forward it to index.php
RewriteRule . index.php
```

#### 2. Prevent Viewing Folders / Index of Directories [¶](#2-prevent-viewing-folders-index-of-directories)

This is more a security you would like to enable with your fresh yii 2 app. You do not want users browsing directories on your app. Set the "-Indexes" which will make Apache block users from browsing folders without a default document. This will prevent allowing anybody to surf through every folder on your server. Just set this in your `.htaccess` file:

```
<IfModule mod_autoindex.c>
  Options -Indexes
</IfModule>
```

#### 3. Block Accesses to Hidden Directories [¶](#3-block-accesses-to-hidden-directories)

Block access to "hidden" directories whose names begin with a period. This includes directories used by version control systems such as Subversion or Git. Just set this in your `.htaccess` file:

```
<IfModule mod_rewrite.c>
  RewriteCond %{SCRIPT_FILENAME} -d
  RewriteCond %{SCRIPT_FILENAME} -f
  RewriteRule "(^|/)\." - [F]
</IfModule>
```

#### 4. Block Accesses to Backup/Source files [¶](#4-block-accesses-to-backupsource-files)

Block access to backup and source files, which may be left by some text/html editors and
pose a great security danger, when someone can access them. Just set this in your `.htaccess` file:

```
<FilesMatch "(\.(bak|config|sql|fla|psd|ini|log|sh|inc|swp|dist)|~)$">
  Order allow,deny
  Deny from all
  Satisfy All
</FilesMatch>
```

#### 5. Increase cookie security [¶](#5-increase-cookie-security)

Just set this in your `.htaccess` file:
~~~
php\_value session.cookie\_httponly true
~~~

#### Wiki Translations [¶](#wiki-translations)

- [中文 / Chinese](http://www.yiiwiki.com/post/63)
