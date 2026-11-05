# Special Topics: Shared Hosting Environment | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/tutorial-shared-hosting

---

0

# Shared Hosting Environment [¶](#shared-hosting-environment)

Shared hosting environments are often quite limited about configuration and directory structure. Still in most cases you
can run Yii 2.0 on a shared hosting environment with a few adjustments.

## Deploying a basic project template [¶](#deploying-a-basic-project-template)

Since in a shared hosting environment there's typically only one webroot, use the basic project template if you can.
Refer to the [Installing Yii chapter](guide_22_0__start-installation.md) and install the basic project template locally.
After you have the application working locally, we'll make some adjustments so it can be hosted on your shared hosting
server.

### Renaming webroot [¶](#renaming-webroot)

Connect to your shared host using FTP or by other means. You will probably see something like the following.

```
config
logs
www
```

In the above, `www` is your webserver webroot directory. It could be named differently. Common names are: `www`,
`htdocs`, and `public_html`.

The webroot in our basic project template is named `web`. Before uploading the application to your webserver rename
your local webroot to match your server, i.e., from `web` to `www`, `public_html` or whatever the name of your hosting
webroot.

### FTP root directory is writeable [¶](#ftp-root-directory-is-writeable)

If you can write to the root level directory i.e. where `config`, `logs` and `www` are, then upload `assets`, `commands`
etc. as is to the root level directory.

### Add extras for webserver [¶](#add-extras-for-webserver)

If your webserver is Apache you'll need to add an `.htaccess` file with the following content to `web`
(or `public_html` or whatever) (where the `index.php` file is located):

```
Options +FollowSymLinks
IndexIgnore */*

RewriteEngine on

# if a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

# otherwise forward it to index.php
RewriteRule . index.php
```

In case of nginx you should not need any extra config files.

### Check requirements [¶](#check-requirements)

In order to run Yii, your webserver must meet its requirements. The very minimum requirement is PHP 5.4. In order to
check the requirements copy `requirements.php` from your root directory into the webroot directory and run it via
browser using `https://example.com/requirements.php` URL. Don't forget to delete the file afterwards.

## Deploying an advanced project template [¶](#deploying-an-advanced-project-template)

Deploying an advanced application to shared hosting is a bit trickier than a basic application but it could be achieved.
Follow instructions described in
[advanced project template documentation](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/topic-shared-hosting.md).

[Performance Tuning](guide_22_0__tutorial-performance-tuning.md)

[Go to Top](#top)

[Standalone Actions](guide_22_0__tutorial-standalone-actions.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/tutorial-shared-hosting.md) !
