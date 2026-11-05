# Controllers — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/incoming/controllers.html

---

# Controllers[](#controllers "Link to this heading")

Controllers are the heart of your application, as they determine how HTTP requests should be handled.

## [What is a Controller?](#id1)[](#what-is-a-controller "Link to this heading")

A Controller is simply a class file that handles an HTTP request.
[URI Routing](incoming__routing.md) associates a URI with a controller. It returns a
view string or `Response` object.

Every controller you create should extend `BaseController` class.
This class provides several features that are available to all of your controllers.

## [Constructor](#id2)[](#constructor "Link to this heading")

The CodeIgniter’s Controller has a special constructor `initController()`.
It will be called by the framework after PHP’s constructor `__construct()` execution.

If you want to override the `initController()`, don’t forget to add `parent::initController($request, $response, $logger);` in the method:

```
<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Product extends BaseController
{
    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger,
    ) {
        parent::initController($request, $response, $logger);

        // Add your code here.
    }

    // ...
}
```

Important

You cannot use `return` in the constructor. So `return redirect()->to('route');` does not work.

The `initController()` method sets the following three properties.

## [Included Properties](#id3)[](#included-properties "Link to this heading")

The CodeIgniter’s Controller provides these properties.

### [Request Object](#id4)[](#request-object "Link to this heading")

The application’s main [Request Instance](incoming__incomingrequest.md) is always available
as a class property, `$this->request`.

### [Response Object](#id5)[](#response-object "Link to this heading")

The application’s main [Response Instance](outgoing__response.md) is always available
as a class property, `$this->response`.

### [Logger Object](#id6)[](#logger-object "Link to this heading")

An instance of the [Logger](general__logging.md) class is available as a class property,
`$this->logger`.

### [Helpers](#id7)[](#helpers "Link to this heading")

You can define an array of helper files as a class property. Whenever the controller is loaded
these helper files will be automatically loaded into memory so that you can use their methods anywhere
inside the controller:

```
<?php

namespace App\Controllers;

class MyController extends BaseController
{
    protected $helpers = ['url', 'form'];
}
```

## [forceHTTPS](#id8)[](#forcehttps "Link to this heading")

A convenience method for forcing a method to be accessed via HTTPS is available within all
controllers:

```
<?php

if (! $this->request->isSecure()) {
    $this->forceHTTPS();
}
```

By default, and in modern browsers that support the HTTP Strict Transport Security header, this
call should force the browser to convert non-HTTPS calls to HTTPS calls for one year. You can
modify this by passing the duration (in seconds) as the first parameter:

```
<?php

if (! $this->request->isSecure()) {
    $this->forceHTTPS(31536000); // one year
}
```

Note

A number of [time-based constants](general__common_functions.md) are always available for you to use, including `YEAR`, `MONTH`, and more.

## [Validating Data](#id9)[](#validating-data "Link to this heading")

### [$this->validateData()](#id10)[](#this-validatedata "Link to this heading")

Added in version 4.2.0.

To simplify data checking, the controller also provides the convenience method
`validateData()`.

The method accepts (1) an array of data to validate, (2) an array of rules,
(3) an optional array of custom error messages to display if the items are not valid,
(4) an optional database group to use.

The [Validation Library docs](libraries__validation.md) have details on
rule and message array formats, as well as available rules:

```
<?php

namespace App\Controllers;

class StoreController extends BaseController
{
    public function product(int $id)
    {
        $data = [
            'id'   => $id,
            'name' => $this->request->getPost('name'),
        ];

        $rule = [
            'id'   => 'integer',
            'name' => 'required|max_length[255]',
        ];

        if (! $this->validateData($data, $rule)) {
            return view('store/product', [
                'errors' => $this->validator->getErrors(),
            ]);
        }

        // ...
    }
}
```

### [$this->validate()](#id11)[](#this-validate "Link to this heading")

Important

This method exists only for backward compatibility. Do not use it
in new projects. Even if you are already using it, we recommend that you use
the `validateData()` method instead.

The controller also provides the convenience method `validate()`.

Warning

Instead of `validate()`, use `validateData()` to validate POST
data only. `validate()` uses `$request->getVar()` which returns
`$_GET`, `$_POST` or `$_COOKIE` data in that order (depending on php.ini
[request-order](https://www.php.net/manual/en/ini.core.php#ini.request-order)).
Newer values override older values. POST values may be overridden by the
cookies if they have the same name.

The method accepts an array of rules in the first parameter,
and in the optional second parameter, an array of custom error messages to display
if the items are not valid.

Internally, this uses the controller’s
`$this->request` instance to get the data to be validated.

The [Validation Library docs](libraries__validation.md) have details on
rule and message array formats, as well as available rules:

```
<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function updateUser(int $userID)
    {
        if (! $this->validate([
            'email' => "required|is_unique[users.email,id,{$userID}]",
            'name'  => 'required|alpha_numeric_spaces',
        ])) {
            // The validation failed.
            return view('users/update', [
                'errors' => $this->validator->getErrors(),
            ]);
        }

        // The validation was successful.

        // Get the validated data.
        $validData = $this->validator->getValidated();

        // ...
    }
}
```

Warning

When you use the `validate()` method, you should use the
[getValidated()](libraries__validation.md#validation-getting-validated-data) method to get the
validated data. Because the `validate()` method uses the
[Validation::withRequest()](libraries__validation.md#validation-withrequest) method internally,
and it validates data from
[$request->getJSON()](incoming__incomingrequest.md#incomingrequest-getting-json-data)
or [$request->getRawInput()](incoming__incomingrequest.md#incomingrequest-retrieving-raw-data)
or [$request->getVar()](incoming__incomingrequest.md#incomingrequest-getting-data), and an attacker
could change what data is validated.

Note

The [$this->validator->getValidated()](libraries__validation.md#validation-getting-validated-data)
method can be used since v4.4.0.

If you find it simpler to keep the rules in the configuration file, you can replace
the `$rules` array with the name of the group as defined in **app/Config/Validation.php**:

```
<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function updateUser(int $userID)
    {
        if (! $this->validate('userRules')) {
            // The validation failed.
            return view('users/update', [
                'errors' => $this->validator->getErrors(),
            ]);
        }

        // The validation was successful.

        // Get the validated data.
        $validData = $this->validator->getValidated();

        // ...
    }
}
```

Note

Validation can also be handled automatically in the model, but sometimes it’s easier to do it in the controller. Where is up to you.

## [Protecting Methods](#id12)[](#protecting-methods "Link to this heading")

In some cases, you may want certain methods hidden from public access.
To achieve this, simply declare the method as `private` or `protected`.
That will prevent it from being served by a URL request.

For example, if you were to define a method like this for the `Helloworld` controller:

```
<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    protected function utility()
    {
        // some code
    }
}
```

and to define a route (`helloworld/utitilty`) for the method. Then trying to access it using the following URL will not work:

```
example.com/index.php/helloworld/utility
```

Auto-routing also will not work.

## [Auto Routing (Improved)](#id13)[](#auto-routing-improved "Link to this heading")

Added in version 4.2.0.

Auto Routing (Improved) is a new, more secure automatic routing system.

See [Auto Routing (Improved)](incoming__auto_routing_improved.md) for details.

## [Auto Routing (Legacy)](#id14)[](#auto-routing-legacy "Link to this heading")

Important

This feature exists only for backward compatibility. Do not use it
in new projects. Even if you are already using it, we recommend that you use
the [Auto Routing (Improved)](incoming__auto_routing_improved.md#auto-routing-improved) instead.

This section describes the functionality of Auto Routing (Legacy) that is a routing system from CodeIgniter 3.
It automatically routes an HTTP request, and executes the corresponding controller method
without route definitions. The auto-routing is disabled by default.

Warning

To prevent misconfiguration and miscoding, we recommend that you do not use
Auto Routing (Legacy). It is easy to create vulnerable apps where controller filters
or CSRF protection are bypassed.

Important

Auto Routing (Legacy) routes an HTTP request with **any** HTTP method to a controller method.

Important

Since v4.5.0, if Auto Routing (Legacy) doesn’t find the controller,
it will throw `PageNotFoundException` exception before the Controller Filters
execute.

Consider this URI:

```
example.com/index.php/helloworld/
```

In the above example, CodeIgniter would attempt to find a controller named **Helloworld.php** and load it.

Note

When a controller’s short name matches the first segment of a URI, it will be loaded.

### [Let’s try it: Hello World! (Legacy)](#id15)[](#let-s-try-it-hello-world-legacy "Link to this heading")

Let’s create a simple controller so you can see it in action. Using your text editor, create a file called **Helloworld.php**,
and put the following code in it. You will notice that the `Helloworld` Controller is extending the `BaseController`. you can
also extend the `CodeIgniter\Controller` if you do not need the functionality of the BaseController.

The BaseController provides a convenient place for loading components and performing functions that are needed by all your
controllers. You can extend this class in any new controller.

For security reasons be sure to declare any new utility methods as `protected` or `private`:

```
<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        return 'Hello World!';
    }
}
```

Then save the file to your **app/Controllers** directory.

Important

The file must be called **Helloworld.php**, with a capital `H`. When you use Auto Routing, Controller class names MUST start with an uppercase letter and ONLY the first character can be uppercase.

Now visit your site using a URL similar to this:

```
example.com/index.php/helloworld
```

If you did it right you should see:

```
Hello World!
```

This is valid:

```
<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    // ...
}
```

This is **not** valid:

```
<?php

namespace App\Controllers;

class helloworld extends BaseController
{
    // ...
}
```

This is **not** valid:

```
<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    // ...
}
```

Also, always make sure your controller extends the parent controller
class so that it can inherit all its methods.

Note

The system will attempt to match the URI against Controllers by matching each segment against
directories/files in **app/Controllers**, when a match wasn’t found against defined routes.
That’s why your directories/files MUST start with a capital letter and the rest MUST be lowercase.

If you want another naming convention you need to manually define it using the
[Defined Route Routing](incoming__routing.md#defined-route-routing).
Here is an example based on PSR-4 Autoloader:

```
<?php

/*
 * Folder and file structure:
 * \<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
 */

$routes->get('helloworld', '\App\Controllers\HelloWorld::index');
```

### [Methods (Legacy)](#id16)[](#methods-legacy "Link to this heading")

In the above example, the method name is `index()`. The `index()` method
is always loaded by default if the **second segment** of the URI is
empty. Another way to show your “Hello World” message would be this:

```
example.com/index.php/helloworld/index/
```

**The second segment of the URI determines which method in the
controller gets called.**

Let’s try it. Add a new method to your controller:

```
<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        return 'Hello World!';
    }

    public function comment()
    {
        return 'I am not flat!';
    }
}
```

Now load the following URL to see the comment method:

```
example.com/index.php/helloworld/comment/
```

You should see your new message.

### [Passing URI Segments to Your Methods (Legacy)](#id17)[](#passing-uri-segments-to-your-methods-legacy "Link to this heading")

If your URI contains more than two segments they will be passed to your
method as parameters.

For example, let’s say you have a URI like this:

```
example.com/index.php/products/shoes/sandals/123
```

Your method will be passed URI segments 3 and 4 (`'sandals'` and `'123'`):

```
<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function shoes($sandals, $id)
    {
        return $sandals . $id;
    }
}
```

### [Default Controller (Legacy)](#id18)[](#default-controller-legacy "Link to this heading")

The Default Controller is a special controller that is used when a URI end with
a directory name or when a URI is not present, as will be the case when only your
site root URL is requested.

#### Defining a Default Controller (Legacy)[](#defining-a-default-controller-legacy "Link to this heading")

Let’s try it with the `Helloworld` controller.

To specify a default controller open your **app/Config/Routing.php**
file and set this property:

```
public string $defaultController = 'Helloworld';
```

Where `Helloworld` is the name of the controller class you want to be used.

And comment out the line in **app/Config/Routes.php**:

```
$routes->get('/', 'Home::index');
```

If you now browse to your site without specifying any URI segments you’ll
see the “Hello World” message.

Note

The line `$routes->get('/', 'Home::index');` is an optimization that you will want to use in a “real-world” app. But for demonstration purposes we don’t want to use that feature. `$routes->get()` is explained in [URI Routing](incoming__routing.md)

For more information, please refer to the the
[Configuration Options (Legacy)](incoming__routing.md#routing-auto-routing-legacy-configuration-options) documentation.

### [Organizing Your Controllers into Sub-directories (Legacy)](#id19)[](#organizing-your-controllers-into-sub-directories-legacy "Link to this heading")

If you are building a large application you might want to hierarchically
organize or structure your controllers into sub-directories. CodeIgniter
permits you to do this.

Simply create sub-directories under the main **app/Controllers**,
and place your controller classes within them.

Important

Directory names MUST start with an uppercase letter and ONLY the first character can be uppercase.

When using this feature the first segment of your URI must
specify the directory. For example, let’s say you have a controller located here:

```
app/Controllers/Products/Shoes.php
```

To call the above controller your URI will look something like this:

```
example.com/index.php/products/shoes/show/123
```

Note

You cannot have directories with the same name in **app/Controllers** and **public/**.
This is because if there is a directory, the web server will search for it and
it will not be routed to CodeIgniter.

Each of your sub-directories may contain a default controller which will be
called if the URL contains *only* the sub-directory. Simply put a controller
in there that matches the name of your default controller as specified in
your **app/Config/Routing.php** file.

CodeIgniter also permits you to map your URIs using its [Defined Route Routing](incoming__routing.md#defined-route-routing)..

## [Remapping Method Calls](#id20)[](#remapping-method-calls "Link to this heading")

Note

**Auto Routing (Improved)** does not support this feature intentionally.

As noted above, the second segment of the URI typically determines which
method in the controller gets called. CodeIgniter permits you to override
this behavior through the use of the `_remap()` method:

```
<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function _remap()
    {
        // Some code here...
    }
}
```

Important

If your controller contains a method named `_remap()`,
it will **always** get called regardless of what your URI contains. It
overrides the normal behavior in which the URI determines which method
is called, allowing you to define your own method routing rules.

The overridden method call (typically the second segment of the URI) will
be passed as a parameter to the `_remap()` method:

```
<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function _remap($method)
    {
        if ($method === 'some_method') {
            return $this->{$method}();
        }

        return $this->default_method();
    }
}
```

Any extra segments after the method name are passed into `_remap()`. These parameters can be passed to the method
to emulate CodeIgniter’s default behavior.

Example:

```
<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function _remap($method, ...$params)
    {
        $method = 'process_' . $method;

        if (method_exists($this, $method)) {
            return $this->{$method}(...$params);
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
```

## [Extending the Controller](#id21)[](#extending-the-controller "Link to this heading")

If you want to extend the controller, see [Extending the Controller](extending__basecontroller.md).

## [That’s it!](#id22)[](#that-s-it "Link to this heading")

That, in a nutshell, is all there is to know about controllers.
