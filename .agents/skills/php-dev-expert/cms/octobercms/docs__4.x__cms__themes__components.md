# Components - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/cms/themes/components.html

---

# Components

Configurable controllers that can be attached to any page, partial or layout.

- [Introduction](docs__4.x__cms__themes__components.md#introduction)
- [Components Aliases](docs__4.x__cms__themes__components.md#components-aliases)
- [Using External Property Values](docs__4.x__cms__themes__components.md#using-external-property-values)
- [Passing Variables to Components](docs__4.x__cms__themes__components.md#passing-variables-to-components)
- [Writing Your Own Markup](docs__4.x__cms__themes__components.md#writing-your-own-markup)
- [Using Default Markup as a Reference](#using-default-markup-as-a-reference)
- [Rendering Default Markup](#rendering-default-markup)
- [Overriding Component Partials](#overriding-component-partials)
- [The "View Bag" Component](docs__4.x__cms__themes__components.md#the-view-bag-component)
- [AJAX Handlers](#ajax-handlers)

[More...](#)

Components are a key feature of building scalable and modern solutions with October CMS. Each component implements some functionality that extends your website. Components can output HTML markup on a page, but it is not necessary - other important features of components are [handling AJAX requests](docs__4.x__ajax__introduction.md), handling form postbacks and handling the page execution cycle, that allows to inject variables to pages or implement the website security.

This article describes the components basics and doesn't explain how to use [components with AJAX](docs__4.x__ajax__handlers.md), [developing components](docs__4.x__extend__cms-components.md) as part of plugins, or the [components included](docs__4.x__cms__components__section.md) with October CMS.

## [#](#introduction) Introduction

Components can be found in the Editor in the admin panel. You can add components to your pages, partials and layouts by clicking the Components toolbar button on any open document. If you use a text editor you can attach a component to a page or layout by adding its name to the configuration section of the template file. The next example demonstrates how to add a demo To-Do component to a page.

```
title = "Components demonstration"
url = "/components"

[demoTodo]
maxItems = 20
```

```
<!-- HTML Content Here -->
```

This initializes the component with the properties that are defined in the component section. Many components have properties, but it is not a requirement. Some properties are required, and some properties have default values. If you are not sure what properties are supported by a component, refer to the documentation provided by the developer, or use the Inspector in the Editor admin panel. The Inspector opens when you click a component in the page or layout component panel.

If two components with the same name are assigned to a page and layout together, the page component will take priority.

When you refer a component, it automatically creates a page variable that matches the component name (`demoTodo` in the previous example). Components provide two things to your page: **variables** (data) and **AJAX handlers** (server-side actions). You write your own markup using these directly.

```
___TWIG0___
    <li>___TWIG1___</li>
___TWIG2___

<button data-request="onAddItem">Add Item</button>
```

Components may also inject variables directly into the page scope. For example, a component might make a `posts` variable available that you can use without referencing the component name.

Using components inside partials has limited functionality, this is described in more detail in the [Dynamic Partials section](docs__4.x__cms__themes__partials.md) of the documentation.

## [#](#components-aliases) Components Aliases

If there are two plugins that register components with the same name, you can attach a component by using its fully qualified class name and assigning it an *alias*.

```
[October\Demo\Components\Todo demoTodoAlias]
maxItems = 20
```

The first parameter in the section is the class name, the second is the component alias name that will be used when attached to the page. If you specified a component alias you should use it everywhere in the page code when you refer to the component. Note that the next example refers to the component alias:

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

The aliases also allow you to define multiple components of the same class on a same page by using the short name first and an alias second. This lets you to use multiple instances of a same component on a page.

```
[demoTodo todoA]
maxItems = 10
[demoTodo todoB]
maxItems = 20
```

## [#](#using-external-property-values) Using External Property Values

By default property values are initialized in the Configuration section where the component is defined, and the property values are static, like this:

```
[demoTodo]
maxItems = 20
==
...
```

However there is a way to initialize properties with values loaded from external parameters - URL parameters or [partial](docs__4.x__cms__themes__partials.md) parameters (for components defined in partials). Use the `{{ paramName }}` syntax for values that should be loaded from partial variables:

```
[demoTodo]
maxItems = {{ maxItems }}
==
...
```

Assuming that in the example above the component **demoTodo** is defined in a partial, it will be initialized with a value loaded from the **maxItems** partial variable:

```
___TWIG0___
```

You may use dot notation to retrieve a deeply nested value from an external parameter:

```
[demoTodo]
maxItems = {{ data.maxItems }}
==
...
```

To load a property value from the URL parameter, use the `{{ :paramName }}` syntax, where the name starts with a colon (`:`), for example.

```
[demoTodo]
maxItems = {{ :maxItems }}
==
...
```

The page that the component belongs to should have a corresponding [URL parameter](docs__4.x__cms__themes__pages.md) defined.

```
url = "/todo/:maxItems"
```

In the October back-end you can use the Inspector tool for assigning external values to component properties. In the Inspector you don't need to use the curly brackets to enter the parameter name. Each field in the Inspector has an icon on the right side, which opens the external parameter name editor. Enter the parameter name as `paramName` for partial variables or `:paramName` for URL parameters.

## [#](#passing-variables-to-components) Passing Variables to Components

When using the `{% component %}` tag to render default markup, you can pass variables that override [component properties](docs__4.x__extend__cms-components.md), similar to [partial variables](docs__4.x__cms__themes__partials.md).

In this example, the **maxItems** property of the component will be set to *7* at the time the component is rendered:

```
___TWIG0___
```

## [#](#writing-your-own-markup) Writing Your Own Markup

When you add a component to a page, it injects variables and provides AJAX handlers. You write your own HTML markup using these directly. There is no need to use a `{% component %}` tag or follow the component's internal partial structure.

For example, if a **blogPosts** component injects a `posts` variable and provides an `onLoadMore` handler, you write your own markup from scratch:

```
url = "/blog"

[blogPosts]
postsPerPage = 10
```

```
<div class="grid gap-6">
    ___TWIG0___
        <article>
            <h2>
                <a href="___TWIG1___">___TWIG2___</a>
            </h2>
            <p>___TWIG3___</p>
        </article>
    ___TWIG4___
</div>

<button data-request="onLoadMore">
    Load More
</button>
```

This is the standard workflow for building themes: components handle the data and logic, you handle the presentation. You are free to structure your markup however you want, use any CSS framework, and organize your templates using [CMS partials](docs__4.x__cms__themes__partials.md).

### [#](#using-default-markup-as-a-reference) Using Default Markup as a Reference

Each component ships with a **default.htm** partial located in the plugin directory (e.g. `plugins/acme/blog/components/blogposts/default.htm`). This is a reference implementation that demonstrates what variables are available and how AJAX handlers are called. You can look at it to understand the component's API, then write your own markup.

Inside default partials you may see references to `__SELF__`, this is a variable that refers to the component object. In your own markup, use the component alias directly (e.g. `blogPosts.property` instead of `__SELF__.property`).

### [#](#rendering-default-markup) Rendering Default Markup

For quick prototyping or to verify a component is working, you can render its default partial using the `{% component %}` tag:

```
___TWIG0___
```

This outputs the boilerplate markup shipped with the plugin. It is useful for testing but not intended for production themes, since the default markup uses generic styling and may not match your design.

### [#](#overriding-component-partials) Overriding Component Partials

In rare cases, you may want to use a component's default markup but customize a specific partial within it. This is possible by creating a file in your theme that matches the component's partial structure.

For example, if a component called **channel** uses a **title.htm** partial internally, you can override just that partial by creating **partials/channel/title.htm** in your theme.

| Segment | Description |
| --- | --- |
| **partials** | the theme partials directory |
| **channel** | the component alias (a partial subdirectory) |
| **title.htm** | the component partial to override |

The partial subdirectory name matches the component alias. If you assign the component a different alias, the override directory changes accordingly.

```
[channel foobar]
```

```
___TWIG0___
```

Now the override path becomes **partials/foobar/title.htm** instead.

This feature is designed for edge cases where a component has a complex internal partial structure that you want to mostly keep but tweak one section. In most cases, writing your own markup directly is simpler and more flexible.

## [#](#the-view-bag-component) The "View Bag" Component

The viewBag component is hidden in the backend panel and is only available for file-based editing. It can also be used by other plugins to store data.

There is a special component included in October CMS called `viewBag` that can be used on any page or layout. It allows ad hoc properties to be defined and accessed inside the markup area easily as variables. A good usage example is defining an active menu item inside a page.

```
title = "About"
url = "/about.html"
layout = "default"

[viewBag]
activeMenu = "about"
```

```
<p>Page content...</p>
```

Any property defined for the component is then made available inside the page, layout, or partial markup using the `viewBag` variable. For example, in this layout the **active** class is added to the list item if the `viewBag.activeMenu` value is set to **about**.

```
description = "Default layout"
```

```
...

<!-- Main navigation -->
<ul>
    <li class="___TWIG0___">About</li>
    ...
</ul>
```

### [#](#ajax-handlers) AJAX Handlers

Components introduce [AJAX handlers](docs__4.x__ajax__introduction.md) that are available globally on the page. You call them using `data-request` in your markup.

```
data-request="onMyComponentHandler"
```

If there is a naming conflict between handlers from different components, the fully qualified name can be used.

```
data-request="componentName::onMyComponentHandler"
```

#### [#](#see-also) See Also

- [CMS Component Development](docs__4.x__extend__cms-components.md)

← [Content Blocks](docs__4.x__cms__themes__content.md)[Snippets](docs__4.x__cms__themes__snippets.md) →
