# Building CMS Components - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/cms-components.html

---

# Building CMS Components

Extending the CMS with custom components.

- [Component Class Definition](docs__4.x__extend__cms-components.md#component-class-definition)
- [Component Registration](#component-registration)
- [Component Properties](docs__4.x__extend__cms-components.md#component-properties)
- [Routing Parameters](docs__4.x__extend__cms-components.md#routing-parameters)
- [Handling the Page Execution Cycle](docs__4.x__extend__cms-components.md#handling-the-page-execution-cycle)
- [Page Execution Life Cycle Handlers](#page-execution-life-cycle-handlers)
- [Component Initialization](#component-initialization)
- [Halting With a Response](#halting-with-a-response)
- [AJAX Handlers](docs__4.x__extend__cms-components.md#ajax-handlers)
- [Default Markup](docs__4.x__extend__cms-components.md#default-markup)
- [Component Partials](docs__4.x__extend__cms-components.md#component-partials)
- [Referencing "self"](#referencing-self)
- [Unique Identifier](#unique-identifier)
- [Rendering Partials from Code](docs__4.x__extend__cms-components.md#rendering-partials-from-code)
- [Injecting Page Assets with Components](docs__4.x__extend__cms-components.md#injecting-page-assets-with-components)

[More...](#)

Components files and directories reside in the **components** subdirectory of a plugin directory. Each component has a PHP file defining the component class and an optional component partials directory. The component partials directory name matches the component class name written in lowercase. An example of a component directory structure:

```
├── plugins
|   └── acme
|       └── blog
|           ├── components
|           |   ├── blogposts  ← Partials Directory
|           |   |   └── default.htm  ← Default Markup (Optional)
|           |   └── BlogPosts.php  ← Component Class
|           └── Plugin.php
```

Components must be [registered in the plugin registration file](docs__4.x__extend__extending.md) with the `registerComponents` method. Components can be configured using properties and their [inspector type definitions](docs__4.x__element__inspector-types.md).

## [#](#component-class-definition) Component Class Definition

The `create:component` command creates a new component class and the default component view. The first argument specifies the author and plugin name. The second argument specifies the component class name.

```
php artisan create:component Acme.Blog BlogPosts
```

The component class file defines the component functionality and component properties. The component class file name should match the component class name. Component classes should extend the `Cms\Classes\ComponentBase` class. The component from the next example should be defined in the **plugins/acme/blog/components/BlogPosts.php** file.

```
namespace Acme\Blog\Components;

class BlogPosts extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Blog Posts',
            'description' => 'Displays a collection of blog posts.',
            'icon' => 'icon-puzzle-piece'
        ];
    }

    /**
     * posts becomes available on the page as {{ component.posts }}
     */
    public function posts()
    {
        return ['First Post', 'Second Post', 'Third Post'];
    }
}
```

The `componentDetails` method is required. The method should return an array with two keys: `name` and `description`. The name and description are display in the CMS back-end user interface.

The array may also include the `ajaxPartial` key set to `true`, which wraps the [`{% component %}` tag](docs__4.x__markup__tag__component.md) output in an [AJAX partial](docs__4.x__markup__tag__ajax-partial.md) so it can be updated in place using `_self`.

When this [component is attached to a page or layout](docs__4.x__cms__themes__components.md), the class properties and methods become available on the page through the component variable, which name matches the component short name or the alias. For example, if the BlogPost component from the previous example was defined on a page with its short name:

```
url = "/blog"

[blogPosts]
==
```

You would be able to access its `posts` method through the `blogPosts` variable. Note that Twig supports the property notation for methods, so that you don't need to use brackets.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

### [#](#component-registration) Component Registration

Components must be registered by overriding the `registerComponents` method inside the [plugin registration file](docs__4.x__extend__extending.md). This tells the CMS about the Component and provides a **short name** for using it. An example of registering a component:

```
public function registerComponents()
{
    return [
        \October\Demo\Components\Todo::class => 'demoTodo'
    ];
}
```

This will register the Todo component class with the default alias name **demoTodo**. More information on using components can be found at the [CMS components article](docs__4.x__cms__themes__components.md).

## [#](#component-properties) Component Properties

When you add a component to a page or layout you can configure it using properties. The properties are defined with the `defineProperties` method of the component class. The next example shows how to define a component property using a **string** inspector type.

```
public function defineProperties()
{
    return [
        'maxItems' => [
            'title' => 'Max items',
            'description' => 'The most amount of todo items allowed',
            'default' => 10,
            'type' => 'string',
            'validation' => [
                'regex' => [
                    'message' => 'The Max Items property can contain only numeric symbols.',
                    'pattern' => '^[0-9]+$'
                ]
            ]
        ]
    ];
}
```

The method should return an array with the property keys as indexes and property parameters as values. The property keys are used for accessing the component property values inside the component class.

The property parameters and available types are described in the [inspector types article](docs__4.x__element__inspector-types.md).

Inside the component you can read the property value with the `property` method:

```
$this->property('maxItems');
```

If the property value is not defined, you can supply the default value as a second parameter of the `property` method:

```
$this->property('maxItems', 6);
```

You can also load all the properties as array:

```
$properties = $this->getProperties();
```

To access the property from the Twig partials for the component, utilize the `__SELF__` variable which refers to the Component object:

```
___TWIG0___
```

## [#](#routing-parameters) Routing Parameters

Components can directly access routing parameter values defined in the [URL of the page](docs__4.x__cms__themes__pages.md).

```
// Returns the URL segment value, eg: /page/:post_id
$postId = $this->param('post_id');
```

In some cases a component property may act as a hard coded value or reference the value from the URL. This hard coded example shows the blog post with an identifier `2` being used:

```
url = "/blog/hard-coded-page"

[blogPost]
id = "2"
```

Alternatively the value can be referenced dynamically from the page URL using an [external property value in a component](docs__4.x__cms__themes__components.md).

```
url = "/blog/:my_custom_parameter"

[blogPost]
id = "{{ :my_custom_parameter }}"
```

In both cases the value can be retrieved by using the `property` method:

```
$this->property('id');
```

If you need to access the routing parameter name:

```
// Returns "my_custom_parameter"
$this->paramName('id');
```

## [#](#handling-the-page-execution-cycle) Handling the Page Execution Cycle

Components can be involved in the Page execution cycle events by overriding the `onRun` method in the component class. The CMS controller executes this method every time when the page or layout loads. Inside the method you can inject variables to the Twig environment through the `page` property:

```
public function onRun()
{
    // This code will be executed when the page or layout is
    // loaded and the component is attached to it.

    $this->page['var'] = 'value'; // Inject some variable to the page
}
```

### [#](#page-execution-life-cycle-handlers) Page Execution Life Cycle Handlers

When a page loads, October executes handler functions that could be defined in the layout and page PHP section and component classes. The sequence the handlers are executed is as follows.

1. Layout `onInit()` function.
2. Page `onInit()` function.
3. Layout `onStart()` function.
4. Layout components `onRun()` method.
5. Layout `onBeforePageStart()` function.
6. Page `onStart()` function.
7. Page components `onRun()` method.
8. Page `onEnd()` function.
9. Layout `onEnd()` function.

### [#](#component-initialization) Component Initialization

Sometimes you may wish to execute code at the time the component class is first instantiated. You may override the `init` method in the component class to handle any initialization logic, this will execute before AJAX handlers and before the page execution life cycle. For example, this method can be used for attaching another component to the page dynamically.

```
public function init()
{
    $this->addComponent(\Acme\Blog\Components\BlogPosts::class, 'blogPosts');
}
```

### [#](#halting-with-a-response) Halting With a Response

Like all methods in the [Layout Execution Life Cycle](docs__4.x__cms__themes__layouts.md), if the `onRun` method in a component returns a value, this will stop the cycle at this point and return the response to the browser. Here we return an access denied message using the `Response` facade:

```
public function onRun()
{
    if (true) {
        return Response::make('Access denied!', 403);
    }
}
```

You can also return a 404 response from the `onRun` method:

```
public function onRun()
{
    if (true) {
        $this->setStatusCode(404);
        return $this->controller->run('404');
    }
}
```

## [#](#ajax-handlers) AJAX Handlers

Components can host AJAX event handlers. They are defined in the component class exactly like they can be defined in the [page or layout code](docs__4.x__ajax__handlers.md). An example AJAX handler method defined in a component class:

```
public function onAddItem()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this->page['result'] = $value1 + $value2;
}
```

If the alias for this component was *demoTodo* this handler can be accessed by `demoTodo::onAddItem`. See the [AJAX handlers article](docs__4.x__ajax__handlers.md) to learn about using AJAX with components.

## [#](#default-markup) Default Markup

All components can come with default markup that is used when including it on a page with the `{% component %}` tag, although this is optional. Default markup is kept inside the **component partials directory**, which has the same name as the component class in lower case.

The default component markup should be placed in a file named **default.htm**. For example, the default markup for the Demo ToDo component is defined in the file **/plugins/october/demo/components/todo/default.htm**. It can then be inserted anywhere on the page by using the `{% component %}` tag:

```
url = "/todo"

[demoTodo]
```

```
___TWIG0___
```

The default markup can also take parameters that override the component properties at the time they are rendered.

```
___TWIG0___
```

These properties will not be available in the `onRun` method since they are established after the page cycle has completed. Instead they can be processed by overriding the `onRender` method in the component class. The CMS controller executes this method before the default markup is rendered.

```
public function onRender()
{
    // This code will be executed before the default component
    // markup is rendered on the page or layout.

    $this->page['var'] = 'Maximum items allowed: ' . $this->property('maxItems');
}
```

## [#](#component-partials) Component Partials

In addition to the default markup, components can also offer additional partials that can be used on the front-end or within the default markup itself. If the Demo ToDo component had a **pagination** partial, it would be located in **/plugins/october/demo/components/todo/pagination.htm** and displayed on the page using:

```
___TWIG0___
```

A relaxed method can be used that is contextual. If called inside a component partial, it will directly refer to itself. If called inside a theme partial, it will scan all components used on the page/layout for a matching partial name and use that.

```
___TWIG0___
```

Multiple components can share partials by placing the partial file in a directory called **components/partials**. The partials found in this directory are used as a fallback when the usual component partial cannot be found. For example, a shared partial located in **/plugins/acme/blog/components/partials/shared.htm** can be displayed on the page by any component using:

```
___TWIG0___
```

### [#](#referencing-self) Referencing "self"

Components can reference themselves inside their partials by using the `__SELF__` variable. By default it will return the [component's short name or alias](docs__4.x__cms__themes__components.md).

```
<form data-request="___TWIG0___::onEventHandler">
    [...]
</form>
```

Components can also reference their own properties.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

If inside a component partial you need to render another component partial concatenate the `__SELF__` variable with the partial name:

```
___TWIG0___
```

### [#](#unique-identifier) Unique Identifier

If an identical component is called twice on the same page, an `id` property can be used to reference each instance.

```
___TWIG0___
```

The ID is unique each time the component is displayed.

```
<!-- ID: demoTodo527c532e9161b -->
___TWIG0___

<!-- ID: demoTodo527c532ec4c33 -->
___TWIG1___
```

## [#](#rendering-partials-from-code) Rendering Partials from Code

You may programmatically render component partials inside the PHP code using the `renderPartial` method. This will check the component for the partial named `component-partial.htm` and return the result as a string. The second parameter is used for passing view variables. The same path resolution logic applies when you render a component partial in PHP as it does with Twig; use the `@` prefix to refer to partials within the component itself.

```
$content = $this->renderPartial('@component-partial.htm');

$content = $this->renderPartial('@component-partial.htm', [
    'name' => 'John Smith'
]);
```

For example, to render a partial as a response to an [AJAX handler](docs__4.x__ajax__handlers.md):

```
function onGetTemplate()
{
    return ['#someDiv' => $this->renderPartial('@component-partial.htm')];
}
```

Another example could be overriding the entire page view response by returning a value from the `onRun` page execution cycle. This code will specifically return an XML response using the `Response` facade:

```
public function onRun()
{
    $content = $this->renderPartial('@default.htm');
    return Response::make($content)->header('Content-Type', 'text/xml');
}
```

## [#](#injecting-page-assets-with-components) Injecting Page Assets with Components

Components can inject assets (CSS and JavaScript files) to pages or layouts they're attached to. Use the controller's `addCss` and `addJs` methods to add assets to the CMS controllers. It could be done in the component's `onRun` method.

```
public function onRun()
{
    $this->addJs('assets/javascript/blog-controls.js');
}
```

If the path specified in the `addCss` and `addJs` method is relative to the component directory. The `addCss` and `addJs` methods provide a second argument that defines the attributes of your injected asset as an array.

```
public function onRun()
{
    $this->addJs('assets/javascript/blog-controls.js', ['defer' => true]);
}
```

If the first argument begins with a slash (`/`) then it will be relative to the website root. Use this if you need to reference an asset outside the context of the component.

```
public function onRun()
{
    $this->addJs('/plugins/acme/blog/assets/javascript/blog-controls.js');
}
```

#### [#](#see-also) See Also

- [Inspector Types](docs__4.x__element__inspector-types.md)

← [Building Tailor Fields](docs__4.x__extend__tailor-fields.md)[Building Console Commands](docs__4.x__extend__console-commands.md) →
