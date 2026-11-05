# Helper Functions — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/helpers.html

---

# Helper Functions[](#helper-functions "Link to this heading")

## [What are Helpers?](#id2)[](#what-are-helpers "Link to this heading")

Helpers, as the name suggests, help you with tasks. Each helper file is simply a
collection of functions in a particular category. There are
[URL Helpers](helpers__url_helper.md),
that assist in creating links, there are [Form Helpers](helpers__form_helper.md)
that help you create form elements, [Test Helpers](helpers__text_helper.md)
perform various text formatting routines, [Cookie Helpers](helpers__cookie_helper.md)
set and read cookies, [Filesystem Helpers](helpers__filesystem_helper.md) help you
deal with files, etc.

Unlike most other systems in CodeIgniter, Helpers are not written in an
Object Oriented format. They are simple, procedural functions. Each
helper function performs one specific task, with no dependence on other
functions.

CodeIgniter does not load Helper Files by default, so the first step in
using a Helper is to load it. Once loaded, it becomes globally available
in your [controller](incoming__controllers.md) and
[views](outgoing__views.md).

Helpers are typically stored in your **system/Helpers**, or
**app/Helpers** directory.

## [Loading Helpers](#id3)[](#loading-helpers "Link to this heading")

Note

The [URL Helper](helpers__url_helper.md) is always loaded so you do not need to load it yourself.

### [Loading a Helper](#id4)[](#loading-a-helper "Link to this heading")

Loading a helper file is quite simple using the following method:

```
<?php

helper('name');
```

The above code loads the **name\_helper.php** file.

Important

CodeIgniter helper file names are all lowercase.
Therefore, `helper('Name')` will not work on case-sensitive file systems
such as Linux.

For example, to load the [Cookie Helper](helpers__cookie_helper.md) file, which is named
**cookie\_helper.php**, you would do this:

```
<?php

helper('cookie');
```

Note

The [`helper()`](general__common_functions.md#helper "helper") function does not return a value, so
don’t try to assign it to a variable. Just use it as shown.

#### Auto-Discovery and Composer Packages[](#auto-discovery-and-composer-packages "Link to this heading")

By default, CodeIgniter will search for the helper files in all defined namespaces
by [Auto-Discovery](general__modules.md#auto-discovery).
You can check your defined namespaces by the spark command. See [Confirming Namespaces](concepts__autoloader.md#confirming-namespaces).

If you use many Composer packages, you will have many defined namespaces.
CodeIgniter will scan all namespaces by default.

To avoid wasting time scanning for irrelevant Composer packages, you can manually
specify packages for Auto-Discovery. See [Specify Composer Packages](general__modules.md#modules-specify-composer-packages)
for details.

Or you can [specify a namespace](#helpers-loading-from-specified-namespace)
for a helper that you want to load.

#### Load Order[](#load-order "Link to this heading")

The [`helper()`](general__common_functions.md#helper "helper") function will scan through all defined namespaces and
load in ALL matching helpers of the same name. This allows any module’s helpers
to be loaded, as well as any helpers you’ve created specifically for this application.

The load order is as follows:

1. app/Helpers - Files loaded here are always loaded first.
2. {namespace}/Helpers - All namespaces are looped through in the order they are defined.
3. system/Helpers - The base file is loaded last.

### [Loading Multiple Helpers](#id5)[](#loading-multiple-helpers "Link to this heading")

If you need to load more than one helper at a time, you can pass
an array of file names in and all of them will be loaded:

```
<?php

helper(['cookie', 'date']);
```

### [Loading in a Controller](#id6)[](#loading-in-a-controller "Link to this heading")

A helper can be loaded anywhere within your controller methods (or
even within your View files, although that’s not a good practice), as
long as you load it before you use it.

You can load your helpers in your
controller constructor so that they become available automatically in
any method, or you can load a helper in a specific method that needs
it.

However if you want to load in your controller constructor, you can use the `$helpers`
property in Controller instead. See [Controllers](incoming__controllers.md#controllers-helpers).

### [Loading from Specified Namespace](#id7)[](#loading-from-specified-namespace "Link to this heading")

By default, CodeIgniter will search for the helper files in all defined namespaces
and load all found files.

If you want to load only a helper in a specific namespace, prefix the name of the
helper with the namespace that it can be located in. Within that namespaced directory,
the loader expects it to live within a sub-directory named **Helpers**. An example
will help understand this.

For this example, assume that we have grouped together all of our Blog-related
code into its own namespace, `Example\Blog`. The files exist on our server at
**Modules/Blog/**. So, we would put our Helper files for the blog module in
**Modules/Blog/Helpers/**. A **blog\_helper** file would be at
**Modules/Blog/Helpers/blog\_helper.php**. Within our controller we could
use the following command to load the helper for us:

```
<?php

helper('Example\Blog\blog');
```

You can also use the following way:

```
<?php

helper('Example\Blog\Helpers\blog');
```

Note

The functions within files loaded this way are not truly namespaced.
The namespace is simply used as a convenient way to locate the files.

### [Auto-loading Helpers](#id8)[](#auto-loading-helpers "Link to this heading")

Added in version 4.3.0.

If you find that you need a particular helper globally throughout your application,
you can tell CodeIgniter to auto-load it during system initialization.
This is done by opening the **app/Config/Autoload.php** file
and adding the helper to the `$helpers` property.

## [Using a Helper](#id9)[](#using-a-helper "Link to this heading")

Once you’ve loaded the Helper File containing the function you intend to
use, you’ll call it the way you would a standard PHP function.

For example, to create a link using the [`anchor()`](helpers__url_helper.md#anchor "anchor") function in one of
your view files you would do this:

```
<div>
<?= anchor('blog/comments', 'Click Here') ?>
</div>
```

Where `Click Here` is the name of the link, and `blog/comments` is the
URI to the controller/method you wish to link to.

## [Creating Helpers](#id10)[](#creating-helpers "Link to this heading")

### [Creating Custom Helpers](#id11)[](#creating-custom-helpers "Link to this heading")

The helper filename is the **helper name** and **\_helper.php**.

For example, to create info helper, you’ll create a file named
**app/Helpers/info\_helper.php**, and add a function to the file:

```
<?php

// app/Helpers/info_helper.php
use CodeIgniter\CodeIgniter;

/**
 * Returns CodeIgniter's version.
 */
function ci_version(): string
{
    return CodeIgniter::CI_VERSION;
}
```

You can add as many functions as you like to a single helper file.

### [“Extending” Helpers](#id12)[](#extending-helpers "Link to this heading")

To “extend” Helpers, create a file in your **app/Helpers** folder
with an identical name to the existing Helper.

If all you need to do is add some functionality to an existing helper -
perhaps add a function or two, or change how a particular helper
function operates - then it’s overkill to replace the entire helper with
your version. In this case, it’s better to simply “extend” the Helper.

Note

The term “extend” is used loosely since Helper functions are
procedural and discrete and cannot be extended in the traditional
programmatic sense. Under the hood, this gives you the ability to
add to, or to replace the functions a Helper provides.

For example, to extend the native **Array Helper** you’ll create a file
named **app/Helpers/array\_helper.php**, and add or override
functions:

```
<?php

// any_in_array() is not in the Array Helper, so it defines a new function
function any_in_array($needle, $haystack)
{
    $needle = is_array($needle) ? $needle : [$needle];

    foreach ($needle as $item) {
        if (in_array($item, $haystack, true)) {
            return true;
        }
    }

    return false;
}

// random_element() is included in Array Helper, so it overrides the native function
function random_element($array)
{
    shuffle($array);

    return array_pop($array);
}
```

Important

Do not specify the namespace `App\Helpers`.

See [Load Order](#load-order) for the order in which helper files are loaded.

## [Now What?](#id13)[](#now-what "Link to this heading")

In the Table of Contents, you’ll find a list of all the available [Helpers](helpers__index.md).
Browse each one to see what they do.
