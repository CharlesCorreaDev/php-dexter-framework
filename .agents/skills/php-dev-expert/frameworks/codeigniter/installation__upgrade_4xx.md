# Upgrading from 3.x to 4.x — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_4xx.html

---

# Upgrading from 3.x to 4.x[](#upgrading-from-3-x-to-4-x "Link to this heading")

CodeIgniter 4 is a rewrite of the framework and is not backwards compatible.
It is more appropriate to think of converting your app, rather than upgrading it.
Once you have done that, upgrading from one version of CodeIgniter 4 to the next
will be straightforward.

The “lean, mean and simple” philosophy has been retained, but the
implementation has a lot of differences, compared to CodeIgniter 3.

There is no 12-step checklist for upgrading. Instead, start with a copy
of CodeIgniter 4 in a new project folder,
[however you wish to install and use it](installation__index.md),
and then convert and integrate your app components.
We’ll try to point out the most important considerations here.

To upgrade your project, we figured out two major tasks you have to work on.
First of all, there are some general adjustments which are significant to every
project and have to be handled. The second one are the libraries in which
CodeIgniter is built up and contain some of the most important functions.
These libraries operate separately from each other, so you have to look at
them one by one.

**Do read the user guide** before embarking on a project conversion!

## [General Adjustments](#id2)[](#general-adjustments "Link to this heading")

### [Downloads](#id3)[](#downloads "Link to this heading")

- CI4 is still available as a [ready-to-run zip or tarball](installation__installing_manual.md).
- It can also be installed using [Composer](installation__installing_composer.md).

### [Namespaces](#id4)[](#namespaces "Link to this heading")

- CI4 is built for PHP 8.1+, and everything in the framework is namespaced,
  except for the helper and lang files.

### [Application Structure](#id5)[](#application-structure "Link to this heading")

Important

**index.php** is no longer in the root of the project! It has been moved inside
the **public** folder, for better security and separation of components.

This means that you should configure your web server to “point” to your project’s
**public** folder, and not to the project root.

If you would use Shared Hosting, see [Deployment to Shared Hosting Services](installation__deployment.md#deployment-to-shared-hosting-services).

- The **application** folder is renamed as **app** and the framework still has **system** folders,
  with the same interpretation as before.
- The framework now provides for a **public** folder, intended as the document root for your app.
- The `defined('BASEPATH') OR exit('No direct script access allowed');` line is not necessary
  because files outside the **public** folder are not accessible in the standard configuration.
  And CI4 no longer defines the constant `BASEPATH`, so remove the line in all files.
- There is also a **writable** folder, to hold cache data, logs, and session data.
- The **app** folder looks very similar to **application** for CI3, with some
  name changes, and some subfolders moved to the **writable** folder.
- There is no longer a nested **application/core** folder, as we have
  a different mechanism for extending framework components (see below).

### [Routing](#id6)[](#routing "Link to this heading")

- The Auto Routing is disabled by default. You need to [define all routes](incoming__routing.md#defined-route-routing) by default.
- If you want to use the Auto Routing in the same way as CI3, you need to enable
  [Auto Routing (Legacy)](incoming__routing.md#auto-routing-legacy).
- CI4 also has an optional new more secure [Auto Routing (Improved)](incoming__auto_routing_improved.md#auto-routing-improved).

### [Model, View and Controller](#id7)[](#model-view-and-controller "Link to this heading")

- CodeIgniter is based on the MVC concept. Thus, the changes on the Model, View and Controller
  are one of the most important things you have to handle.
- In CodeIgniter 4, models are now located in **app/Models** and you have to add the lines
  `namespace App\Models;` along with `use CodeIgniter\Model;` right after the opening php tag.
  The last step is to replace `extends CI_Model` with `extends Model`.
- The views of CodeIgniter 4 have been moved to **app/Views**. Furthermore, you have to change
  the syntax of loading views from `$this->load->view('directory_name/file_name')` to
  `echo view('directory_name/file_name');`.
- Controllers of CodeIgniter 4 have to be moved to **app/Controllers**. After that,
  add `namespace App\Controllers;` after the opening php tag.
  Lastly, replace `extends CI_Controller` with `extends BaseController`.
- For more information we recommend you the following upgrade guides, which will give
  you some step-by-step instructions to convert the MVC classes in CodeIgniter4:

- [Upgrade Models](installation__upgrade_models.md)
- [Upgrade Views](installation__upgrade_views.md)
- [Upgrade Controllers](installation__upgrade_controllers.md)

### [Core Class Changes](#id8)[](#core-class-changes "Link to this heading")

- Input
  :   - CI3’s [Input](https://codeigniter.com/userguide3/libraries/input.html)
        corresponds to CI4’s [IncomingRequest](incoming__incomingrequest.md).
      - For historical reasons, CI3 and CI4 used incorrect HTTP method names like
        “get”, “post”. Since v4.5.0, CI4 uses the correct HTTP method names like
        “GET”, “POST”.
- Output
  :   - CI3’s [Output](https://codeigniter.com/userguide3/libraries/output.html)
        corresponds to CI4’s [Responses](outgoing__response.md).

### [Class Loading](#id9)[](#class-loading "Link to this heading")

- There is no longer a CodeIgniter “superobject”, with framework component
  references magically injected as properties of your controller.
- Classes are instantiated where needed, and framework components are managed
  by [Services](concepts__services.md).
- The [Autoloader](concepts__autoloader.md) automatically handles PSR-4 style class locating,
  within the `App` (**app** folder) and `CodeIgniter` (i.e., **system** folder) top level
  namespaces; with Composer autoloading support.
- You can configure the class loading to support whatever application structure
  you are most comfortable with, including the “HMVC” style.
- CI4 provides [Factories](concepts__factories.md) that can load a class and share the
  instance like `$this->load` in CI3.

### [Libraries](#id10)[](#libraries "Link to this heading")

- Your app classes can still go inside **app/Libraries**, but they don’t have to.
- Instead of CI3’s `$this->load->library('x');` you can now use
  `$this->x = new \App\Libraries\X();`, following namespaced conventions for
  your component. Alternatively, you can use [Factories](concepts__factories.md):
  `$this->x = \CodeIgniter\Config\Factories::libraries('X');`.

### [Helpers](#id11)[](#helpers "Link to this heading")

- [Helpers](general__helpers.md) are pretty much the same as before, though some have been simplified.
- Since v4.3.0, you can autoload helpers by **app/Config/Autoload.php** as well as CI3.
- Some helpers from CodeIgniter 3 no longer exists in Version 4. For all these
  helpers, you have to find a new way to implement your functions. These
  helpers are [CAPTCHA Helper](https://www.codeigniter.com/userguide3/helpers/captcha_helper.html),
  [Email Helper](https://www.codeigniter.com/userguide3/helpers/email_helper.html).
  [Path Helper](https://www.codeigniter.com/userguide3/helpers/path_helper.html).
  and [Smiley Helper](https://www.codeigniter.com/userguide3/helpers/smiley_helper.html).
- [Download Helper](https://www.codeigniter.com/userguide3/helpers/download_helper.html)
  in CI3 was removed. You need to use Response object where you are using `force_download()`.
  See [Force File Download](outgoing__response.md#force-file-download).
- [Language Helper](https://www.codeigniter.com/userguide3/helpers/language_helper.html)
  in CI3 was removed. But `lang()` is always available in CI4. See [`lang()`](general__common_functions.md#lang "lang").
- [Typography Helper](https://www.codeigniter.com/userguide3/helpers/typography_helper.html)
  in CI3 wll be [Typography Library](libraries__typography.md) in CI4.
- [Directory Helper](https://www.codeigniter.com/userguide3/helpers/directory_helper.html)
  and [File Helper](https://www.codeigniter.com/userguide3/helpers/file_helper.html) in CI3
  will be [Filesystem Helper](helpers__filesystem_helper.md) in CI4.
- [String Helper](https://www.codeigniter.com/userguide3/helpers/string_helper.html) functions
  in CI3 are included in [Text Helper](helpers__text_helper.md) in CI4.
- In CI4, `redirect()` is completely changed from CI3’s.
  :   - [redirect() Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/helpers/url_helper.html#redirect)
      - [redirect() Documentation CodeIgniter 4.x](general__common_functions.md#redirect)
      - In CI4, [`redirect()`](general__common_functions.md#redirect "redirect") returns a `RedirectResponse` instance instead of
        redirecting and terminating script execution. You must return it from Controllers
        or Controller Filters.
      - Cookies and Headers you set before calling `redirect()` are not automatically
        carried over to a `RedirectResponse`. You need to call `withCookies()`
        or `withHeaders()` manually if you want to send them.
      - You need to change CI3’s `redirect('login/form')` to `return redirect()->to('login/form')`.

### [Hooks](#id12)[](#hooks "Link to this heading")

- [Hooks](https://www.codeigniter.com/userguide3/general/hooks.html) have been
  replaced by [Events](extending__events.md).
- Instead of CI3’s `$hook['post_controller_constructor']` you now use
  `Events::on('post_controller_constructor', ['MyClass', 'MyFunction']);`, with the namespace `CodeIgniter\Events\Events;`.
- Events are always enabled, and are available globally.
- The hook point `pre_controller` and `post_controller` have been removed.
  Use [Controller Filters](incoming__filters.md) instead.
- The hook point `display_override` and `cache_override` have been removed.
  Because the base methods have been removed.
- The hook point `post_system` has moved just before sending the final rendered
  page.

### [Error Handling](#id13)[](#error-handling "Link to this heading")

- The behavior in CI4 has been slightly changed.

  - In CI3 the behavior is set in the **index.php** file:

    > - errors with the error level set by `error_reporting()` are logged (but
    >   depending on the `log_threshold` setting, they may not be written to
    >   the log file).
    > - errors with an error level of
    >   `E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR | E_USER_ERROR`
    >   stopped framework processing, regardless of the error level set in
    >   `error_reporting()`.
  - In CI4, the behavior is set in the **app/Config/Boot/{environment}.php** file:

    > - errors with the error level set by `error_reporting()` are logged (but
    >   depending on the `Config\Logger::$threshold` setting, they may not be
    >   written to the log file).
    > - all errors that are not ignored by `error_reporting()` will stop the
    >   framework processing.

### [Extending the Framework](#id14)[](#extending-the-framework "Link to this heading")

- You don’t need a **core** folder to hold `MY_...` framework
  component extensions or replacements.
- You don’t need `MY_X` classes inside your libraries folder
  to extend or replace CI4 pieces.
- Make any such classes where you like, and add appropriate
  service methods in **app/Config/Services.php** to load
  your components instead of the default ones.
- See [Creating Core System Classes](extending__core_classes.md) for details.

## [Upgrading Libraries](#id15)[](#upgrading-libraries "Link to this heading")

- Your app classes can still go inside **app/Libraries**, but they don’t have to.
- Instead of CI3’s `$this->load->library('x');` you can now use
  `$this->x = new \App\Libraries\X();`, following namespaced conventions for
  your component. Alternatively, you can use [Factories](concepts__factories.md):
  `$this->x = \CodeIgniter\Config\Factories::libraries('X');`.
- Some libraries from CodeIgniter 3 no longer exists in Version 4. For all these
  libraries, you have to find a new way to implement your functions. These
  libraries are [Calendaring](https://codeigniter.com/userguide3/libraries/calendar.html),
  [FTP](https://codeigniter.com/userguide3/libraries/ftp.html),
  [Javascript](https://codeigniter.com/userguide3/libraries/javascript.html),
  [Shopping Cart](https://codeigniter.com/userguide3/libraries/cart.html),
  [Trackback](https://codeigniter.com/userguide3/libraries/trackback.html),
  [XML-RPC /-Server](https://codeigniter.com/userguide3/libraries/xmlrpc.html),
  and [Zip Encoding](https://codeigniter.com/userguide3/libraries/zip.html).
- All the other libraries, which exist in both CodeIgniter versions, can be upgraded with some adjustments.
  The most important and mostly used libraries received an Upgrade Guide, which will help you with simple
  steps and examples to adjust your code.

- [Upgrade Configuration](installation__upgrade_configuration.md)
- [Upgrade Database](installation__upgrade_database.md)
- [Upgrade Emails](installation__upgrade_emails.md)
- [Upgrade Encryption](installation__upgrade_encryption.md)
- [Upgrade Working with Uploaded Files](installation__upgrade_file_upload.md)
- [Upgrade HTML Tables](installation__upgrade_html_tables.md)
- [Upgrade Image Manipulation Class](installation__upgrade_images.md)
- [Upgrade Localization](installation__upgrade_localization.md)
- [Upgrade Migrations](installation__upgrade_migrations.md)
- [Upgrade Output Class](installation__upgrade_responses.md)
- [Upgrade Pagination](installation__upgrade_pagination.md)
- [Upgrade Routing](installation__upgrade_routing.md)
- [Upgrade Security](installation__upgrade_security.md)
- [Upgrade Sessions](installation__upgrade_sessions.md)
- [Upgrade Validations](installation__upgrade_validations.md)
- [Upgrade View Parser](installation__upgrade_view_parser.md)
