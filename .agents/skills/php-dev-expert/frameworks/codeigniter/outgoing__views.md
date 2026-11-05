# Views — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/outgoing/views.html

---

# Views[](#views "Link to this heading")

A view is simply a web page, or a page fragment, like a header, footer, sidebar, etc. In fact,
views can flexibly be embedded within other views (within other views, etc.) if you need
this type of hierarchy.

Views are never called directly, they must be loaded by a controller or [view route](incoming__routing.md#view-routes).

Remember that in an MVC framework,
the Controller acts as the traffic cop, so it is responsible for fetching a particular view. If you have
not read the [Controllers](incoming__controllers.md) page, you should do so before continuing.

Using the example controller you created in the controller page, let’s add a view to it.

## [Creating a View](#id3)[](#creating-a-view "Link to this heading")

Using your text editor, create a file called **blog\_view.php** and put this in it:

```
<html>
    <head>
        <title>My Blog</title>
    </head>
    <body>
        <h1>Welcome to my Blog!</h1>
    </body>
</html>
```

Then save the file in your **app/Views** directory.

## [Displaying a View](#id4)[](#displaying-a-view "Link to this heading")

To load and display a particular view file you will use the [`view()`](general__common_functions.md#view "view")
function like following code in your controller:

```
return view('name');
```

Where *name* is the name of your view file.

Important

If the file extension is omitted, then the views are expected to end with the **.php** extension.

Note

The `view()` function uses [View Renderer](outgoing__view_renderer.md) internally.

Now, create a file called **Blog.php** in the **app/Controllers** directory,
and put this in it:

```
<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        return view('blog_view');
    }
}
```

Open the routing file located at **app/Config/Routes.php**, and look for the “Route Definitions”.
Add the following code:

```
use App\Controllers\Blog;

$routes->get('blog', [Blog::class, 'index']);
```

If you visit your site, you should see your new view. The URL was similar to this:

```
example.com/index.php/blog/
```

## [Loading Multiple Views](#id5)[](#loading-multiple-views "Link to this heading")

CodeIgniter will intelligently handle multiple calls to [`view()`](general__common_functions.md#view "view") from
within a controller. If more than one call happens they will be appended together.

For example, you may wish to have a header view, a menu view, a
content view, and a footer view. That might look something like this:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Your title',
        ];

        return view('header')
            . view('menu')
            . view('content', $data)
            . view('footer');
    }
}
```

In the example above, we are using “dynamically added data”, which you will see below.

## [Storing Views within Sub-directories](#id6)[](#storing-views-within-sub-directories "Link to this heading")

Your view files can also be stored within sub-directories if you prefer that type of organization.
When doing so you will need to include the directory name loading the view. Example:

```
return view('directory_name/file_name');
```

## [Namespaced Views](#id7)[](#namespaced-views "Link to this heading")

You can store views under a **Views** directory that is namespaced, and load that view as if it was namespaced. While
PHP does not support loading non-class files from a namespace, CodeIgniter provides this feature to make it possible
to package your views together in a module-like fashion for easy re-use or distribution.

If you have **example/blog** directory that has a PSR-4 mapping set up in the [Autoloader](concepts__autoloader.md) living
under the namespace `Example\Blog`, you could retrieve view files as if they were namespaced also.

Following this
example, you could load the **blog\_view.php** file from **example/blog/Views** by prepending the namespace to the view name
(specifying the end directory `Views` as in `Example\Blog\Views\` is not required):

```
<?php

return view('Example\Blog\blog_view');
```

Note

You must use backslashes (`\`) when referencing namespaced views,
as this is how CodeIgniter distinguishes a namespaced view from a regular
file path. Forward slashes (`/`) are only used for subdirectories within
the standard **app/Views** folder.

## [Overriding Namespaced Views](#id8)[](#overriding-namespaced-views "Link to this heading")

Added in version 4.7.0.

You can override a namespaced view by creating a matching directory structure within your application’s **app/Views** directory.
This allows you to customize the output of modules or packages without modifying their core source code.

### [Configuration](#id9)[](#configuration "Link to this heading")

By default, overrides are looked for in the **app/Views/overrides** directory. You can configure this location via the `$appOverridesFolder` property in **app/Config/View.php**:

```
public string $appOverridesFolder = 'overrides';
```

If you prefer to map namespaces directly to the root of **app/Views** (without a subdirectory), you can set this value to an empty string (`''`).

### [Example](#id10)[](#example "Link to this heading")

Assume you have a module named **Blog** with the namespace `Example\Blog`. The original view file is located at:

```
/modules
└── Example
    └── Blog
        └── Views
            └── blog_view.php
```

To override this view (using the default configuration), create a file at the matching path within **app/Views/overrides**:

```
/app
└── Views
    └── overrides                 <-- Configured $appOverridesFolder
        └── Example               <-- Matches the first part of namespace
            └── Blog              <-- Matches the second part of namespace
                └── blog_view.php <-- Your custom view
```

Now, when you call `view('Example\Blog\blog_view')`, CodeIgniter will automatically load your custom view from **app/Views/overrides/Example/Blog/blog\_view.php** instead of the original module view file.

Note

The override path must match exactly how you reference the view.
If you load a view as `view('Example\Blog\blog_view')`, the override
path is **app/Views/overrides/Example/Blog/blog\_view.php**. However,
if you explicitly include the `Views` directory in the call, e.g.,
`view('Example\Blog\Views\blog_view')`, the override path must also
include it: **app/Views/overrides/Example/Blog/Views/blog\_view.php**.

## [Caching Views](#id11)[](#caching-views "Link to this heading")

You can cache a view with the [`view()`](general__common_functions.md#view "view") function by passing a `cache`
option with the number of seconds to cache the view for, in the third parameter:

```
// Cache the view for 60 seconds
return view('file_name', $data, ['cache' => 60]);
```

By default, the view will be cached using the same name as the view file itself. You can customize this by passing
along `cache_name` and the cache ID you wish to use:

```
// Cache the view for 60 seconds
return view('file_name', $data, ['cache' => 60, 'cache_name' => 'my_cached_view']);
```

## [Adding Dynamic Data to the View](#id12)[](#adding-dynamic-data-to-the-view "Link to this heading")

Data is passed from the controller to the view by way of an array in the second
parameter of the [`view()`](general__common_functions.md#view "view") function.

Here’s an example:

```
$data = [
    'title'   => 'My title',
    'heading' => 'My Heading',
    'message' => 'My Message',
];

return view('blog_view', $data);
```

Let’s try it with your controller file. Open it and add this code:

```
<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data['title']   = 'My Real Title';
        $data['heading'] = 'My Real Heading';

        return view('blog_view', $data);
    }
}
```

Now open your view file and change the text to variables that correspond to the array keys in your data:

```
<html>
    <head>
        <title><?= esc($title) ?></title>
    </head>
    <body>
        <h1><?= esc($heading) ?></h1>
    </body>
</html>
```

Then load the page at the URL you’ve been using and you should see the variables replaced.

### [The saveData Option](#id13)[](#the-savedata-option "Link to this heading")

The data passed in is retained for subsequent calls to [`view()`](general__common_functions.md#view "view"). If you
call the function multiple times in a single request, you will not have to pass
the desired data to each `view()`.

But this might not keep any data from “bleeding” into
other views, potentially causing issues. If you would prefer to clean the data after one call, you can pass the `saveData` option
into the `$option` array in the third parameter.

```
$data = [
    'title'   => 'My title',
    'heading' => 'My Heading',
    'message' => 'My Message',
];

return view('blog_view', $data, ['saveData' => false]);
```

Additionally, if you would like the default functionality of the `view()` function to be that it does clear the data
between calls, you can set `$saveData` to `false` in **app/Config/Views.php**.

## [Creating Loops](#id14)[](#creating-loops "Link to this heading")

The data array you pass to your view files is not limited to simple variables. You can pass multi dimensional
arrays, which can be looped to generate multiple rows. For example, if you pull data from your database it will
typically be in the form of a multi-dimensional array.

Here’s a simple example. Add this to your controller:

```
<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'todo_list' => ['Clean House', 'Call Mom', 'Run Errands'],
            'title'     => 'My Real Title',
            'heading'   => 'My Real Heading',
        ];

        return view('blog_view', $data);
    }
}
```

Now open your view file and create a loop:

```
<html>
<head>
    <title><?= esc($title) ?></title>
</head>
<body>
    <h1><?= esc($heading) ?></h1>

    <h2>My Todo List</h2>

    <ul>
    <?php foreach ($todo_list as $item): ?>

        <li><?= esc($item) ?></li>

    <?php endforeach ?>
    </ul>

</body>
</html>
```
