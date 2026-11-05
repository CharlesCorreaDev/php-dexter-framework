# Managing your Applications — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/managing_apps.html

---

# Managing your Applications[](#managing-your-applications "Link to this heading")

By default, it is assumed that you only intend to use CodeIgniter to
manage one application, which you will build in your **app**
directory. It is possible, however, to have multiple sets of
applications that share a single CodeIgniter installation, or even to
rename or relocate your application directory.

## [Renaming or Relocating the Application Directory](#id1)[](#renaming-or-relocating-the-application-directory "Link to this heading")

If you would like to rename your application directory or even move
it to a different location on your server, other than your project root, open
your main **app/Config/Paths.php** and set a *full server path* in the
`$appDirectory` variable (at about line 45):

```
<?php

namespace Config;

class Paths
{
    // ...

    public string $appDirectory = '/path/to/your/app';

    // ...
}
```

You will need to modify two additional files in your project root, so that
they can find the **Paths** configuration file:

- **spark** runs command line apps.

  ```
  require FCPATH . '../app/Config/Paths.php';
  // ^^^ Change this line if you move your application folder
  ```
- **public/index.php** is the front controller for your webapp.

  ```
  require FCPATH . '../app/Config/Paths.php';
  // ^^^ Change this line if you move your application folder
  ```

## [Running Multiple Applications with one CodeIgniter Installation](#id2)[](#running-multiple-applications-with-one-codeigniter-installation "Link to this heading")

If you would like to share a common CodeIgniter framework installation, to manage
several different applications, simply put all of the directories located
inside your application directory into their own (sub)-directory.

For example, let’s say you want to create two applications, named **blog**
and **shop**. You could structure your application project directories like this:

```
blog/
    app/
    public/
    tests/
    writable/
    env
    phpunit.dist.xml
    spark
shop/
    app/
    public/
    tests/
    writable/
    env
    phpunit.dist.xml
    spark
vendor/
    autoload.php
    codeigniter4/framework/
composer.json
composer.lock
```

Note

If you install CodeIgniter from the Zip file, the directory structure would be following:

```
blog/
shop/
codeigniter4/system/
```

This would have two apps, **blog** and **shop**, both having standard application directories
and a **public** folder, and sharing a common **codeigniter4/framework**.

The `$systemDirectory` variable in **app/Config/Paths.php** inside each
of those would be set to refer to the shared common **codeigniter4/framework** folder:

```
<?php

namespace Config;

class Paths
{
    // ...

    public $systemDirectory = __DIR__ . '/../../../vendor/codeigniter4/framework/system';

    // ...
}
```

And modify the `COMPOSER_PATH` constant in **app/Config/Constants.php** inside each
of those:

```
<?php

defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . '../vendor/autoload.php');
```

Note

If you install CodeIgniter from the Zip file, the `$systemDirectory` would be `__DIR__ . '/../../../codeigniter4/system'`.
If you don’t use Composer, you don’t have to edit the `COMPOSER_PATH`.

Only when you change the Application Directory, see [Renaming or Relocating the Application Directory](#renaming-app-directory) and modify the paths in the **index.php** and **spark**.

## [Changing the Location of the .env File](#id3)[](#changing-the-location-of-the-env-file "Link to this heading")

If necessary, you can change the location of the `.env` file by adjusting the `$envDirectory`
property in `app/Config/Paths.php`.

By default, the framework loads environment settings from a `.env` file located one level above
the `app/` directory (in the `ROOTPATH`). This is a safe location when your domain is correctly
pointed to the `public/` directory, as recommended.

In practice, however, some applications are served from a subdirectory (e.g., `http://example.com/myapp`)
rather than from the main domain. In such cases, placing the `.env` file within the `ROOTPATH` may expose
sensitive configuration data if `.htaccess` or other protections are misconfigured.

To avoid this risk in such setups, it is recommended that you ensure the `.env` file is located outside any web-accessible directories.

Warning

If you change the location of the `.env` file, make absolutely sure it is not publicly accessible.
Exposure of this file could lead to compromised credentials and access to critical services, such as your
database, mail server, or third-party APIs.
