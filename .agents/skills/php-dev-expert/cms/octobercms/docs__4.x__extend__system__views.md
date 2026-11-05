# Rendering Views - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/system/views.html

---

# Rendering Views

Learn where page content is stored and rendered.

- [Partials](docs__4.x__extend__system__views.md#partials)
- [Hint Partials](#hint-partials)
- [Checking if Hints are Hidden](#checking-if-hints-are-hidden)
- [Layouts and Child Layouts](docs__4.x__extend__system__views.md#layouts-and-child-layouts)
- [Form with Sidebar](#form-with-sidebar)
- [Extending the Layout](docs__4.x__extend__system__views.md#extending-the-layout)

[More...](#)

Views reside in a directory that shares the same name as the controller.

```
├── plugins
|   └── acme
|       └── blog
|           ├── controllers
|           |   ├── users  ← View Directory
|           |   |   ├── _partial.php  ← Partial File
|           |   |   └── index.php  ← View File
|           |   └── Users.php  ← Controller Class
|           └── Plugin.php
```

## [#](#partials) Partials

Backend partials are files with the extension **php** that reside in the [controller's view](docs__4.x__extend__system__controllers.md) directory. The partial file names should start with the underscore: **\_partial.php**. Partials can be rendered from a backend page or another partial. Use the controller's `makePartial` method to render a partial. The method takes two parameters - the partial name and the optional array of variables to pass to the partial. Example:

```
<?= $this->makePartial('sidebar', ['showHeader' => true]) ?>
```

### [#](#hint-partials) Hint Partials

You can render informative panels in the backend, called hints, that the user can hide. The first parameter should be a unique key for the purposes of remembering if the hint has been hidden or not. The second parameter is a reference to a partial view. The third parameter can be some extra view variables to pass to the partial, in addition to some hint properties.

```
<?= $this->makeHintPartial('my_hint_key', 'my_hint_partial', ['foo' => 'bar']) ?>
```

You can also disable the ability to hide a hint by setting the key value to a null value. This hint will always be displayed:

```
<?= $this->makeHintPartial(null, 'my_hint_partial') ?>
```

The following properties are available:

| Property | Description |
| --- | --- |
| **type** | Sets the color of the hint, supported types: danger, info, success, warning. Default: info. |
| **title** | Adds a title section to the hint. |
| **subtitle** | In addition to the title, adds a second line to the title section. |
| **icon** | In addition to the title, adds an icon to the title section. |

### [#](#checking-if-hints-are-hidden) Checking if Hints are Hidden

If you're using hints, you may find it useful to check if the user has hidden them. This is easily done using the `isBackendHintHidden` method. It takes a single parameter, and that's the unique key you specified in the original call to `makeHintPartial`. The method will return true if the hint was hidden, false otherwise:

```
<?php if ($this->isBackendHintHidden('my_hint_key')): ?>
    <!-- Do something when the hint is hidden -->
<?php endif ?>
```

## [#](#layouts-and-child-layouts) Layouts and Child Layouts

Backend layouts reside in an optional **layouts/** directory of a plugin. A custom layout is set with the `$layout` property of the controller object. It defaults to the system layout called `default`.

```
/**
 * @var string layout to use for the view.
 */
public $layout = 'mycustomlayout';
```

Layouts also provide the option to attach custom CSS classes to the BODY tag. This can be set with the `$bodyClass` property of the controller.

```
/**
 * @var string bodyClass (CSS) to add to the layout.
 */
public $bodyClass = 'compact-container';
```

These body classes are available for the default layout:

- **compact-container** - uses no padding on all sides.
- **slim-container** - uses no padding left and right.
- **breadcrumb-flush** - tells the page breadcrumb to sit flush against the element below.

### [#](#form-with-sidebar) Form with Sidebar

Layouts can also be used in the same way as partials, acting more like a global partial. The system provides an example of this called `form-with-sidebar` and demonstrates a novel way to implement a child layout structure.

Before using this layout style, ensure that your controller uses the body class `compact-container` by setting it in your controller's action method or constructor.

```
$this->bodyClass = 'compact-container';
```

This layout uses two placeholders, a primary content area called **form-contents** and a complimentary sidebar called **form-sidebar**. Here is an example:

```
<!-- Primary content -->
<?php Block::put('form-contents') ?>
    Main content
<?php Block::endPut() ?>

<!-- Complimentary sidebar -->
<?php Block::put('form-sidebar') ?>
    Side content
<?php Block::endPut() ?>

<!-- Layout execution -->
<?php Block::put('body') ?>
    <?= Form::open(['class'=>'layout stretch']) ?>
        <?= $this->makeLayout('form-with-sidebar') ?>
    <?= Form::close() ?>
<?php Block::endPut() ?>
```

The layout is executed in the final section by overriding the **body** placeholder used by every backend layout. It wraps everything with a `<form />` HTML tag and renders the child layout called **form-with-sidebar**. This file is located in **modules/backend/layouts/form-with-sidebar.php**.

## [#](#extending-the-layout) Extending the Layout

The `fireViewEvent` is used in several areas to [extend the backend area](docs__4.x__extend__extending.md). The `backend.layout.extendHead` event can be used to extend the head element of the layout. The return value should contain the markup to include. The following adds a JavaScript file to every backend page.

```
Event::listen('backend.layout.extendHead', function ($controller) {
    return '<script src="/app/assets/js/myscript.js"></script>';
});
```

The controller is available (first argument) to the event, this can be used to target specific controllers. The following adds specific CSS styles to the tailor entries controller only.

```
Event::listen('backend.layout.extendHead', function ($controller) {
    if ($controller instanceof \Tailor\Controllers\Entries) {
        return '<styles> /* ... */ </styles>';
    }
});
```

← [Controllers](docs__4.x__extend__system__controllers.md)[Behaviors](docs__4.x__extend__system__behaviors.md) →
