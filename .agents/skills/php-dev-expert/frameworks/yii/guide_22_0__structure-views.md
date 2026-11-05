# Application Structure: Views | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/structure-views

---

0

# Views [¶](#views)

Views are part of the [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) architecture.
They are code responsible for presenting data to end users. In a Web application, views are usually created
in terms of *view templates* which are PHP script files containing mainly HTML code and presentational PHP code.
They are managed by the [view](https://www.yiiframework.com/doc/api/22.0/yii-web-view) [application component](guide_22_0__structure-application-components.md) which provides commonly used methods
to facilitate view composition and rendering. For simplicity, we often call view templates or view template files
as views.

## Creating Views [¶](#creating-views)

As aforementioned, a view is simply a PHP script mixed with HTML and PHP code. The following is the view
that presents a login form. As you can see, PHP code is used to generate the dynamic content, such as the
page title and the form, while HTML code organizes them into a presentable HTML page.

```
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var \yii\web\View $this
 * @var \yii\widgets\ActiveForm $form
 * @var \app\models\LoginForm $model
 */

$this->title = 'Login';
?>
<h1><?= Html::encode($this->title) ?></h1>

<p>Please fill out the following fields to login:</p>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Login') ?>
<?php ActiveForm::end(); ?>
```

Within a view, you can access `$this` which refers to the [view component](https://www.yiiframework.com/doc/api/22.0/yii-web-view) managing
and rendering this view template.

Besides `$this`, there may be other predefined variables in a view, such as `$model` in the above
example. These variables represent the data that are *pushed* into the view by [controllers](guide_22_0__structure-controllers.md)
or other objects which trigger the [view rendering](#rendering-views).

> **Tip:** The predefined variables are listed in a comment block at beginning of a view so that they can
> be recognized by IDEs. It is also a good way of documenting your views.

### Security [¶](#security)

When creating views that generate HTML pages, it is important that you encode and/or filter the data coming
from end users before presenting them. Otherwise, your application may be subject to
[cross-site scripting](https://en.wikipedia.org/wiki/Cross-site_scripting) attacks.

To display a plain text, encode it first by calling [yii\helpers\Html::encode()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#encode()-detail). For example, the following code
encodes the user name before displaying it:

```
<?php
use yii\helpers\Html;
?>

<div class="username">
    <?= Html::encode($user->name) ?>
</div>
```

To display HTML content, use [yii\helpers\HtmlPurifier](https://www.yiiframework.com/doc/api/22.0/yii-helpers-htmlpurifier) to filter the content first. For example, the following
code filters the post content before displaying it:

```
<?php
use yii\helpers\HtmlPurifier;
?>

<div class="post">
    <?= HtmlPurifier::process($post->text) ?>
</div>
```

> **Tip:** While HTMLPurifier does excellent job in making output safe, it is not fast. You should consider
> [caching](guide_22_0__caching-overview.md) the filtering result if your application requires high performance.

### Organizing Views [¶](#organizing-views)

Like [controllers](guide_22_0__structure-controllers.md) and [models](guide_22_0__structure-models.md), there are conventions to organize views.

- For views rendered by a controller, they should be put under the directory `@app/views/ControllerID` by default,
  where `ControllerID` refers to the [controller ID](guide_22_0__structure-controllers.md#routes). For example, if
  the controller class is `PostController`, the directory would be `@app/views/post`; if it is `PostCommentController`,
  the directory would be `@app/views/post-comment`. In case the controller belongs to a module, the directory
  would be `views/ControllerID` under the [module directory](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).
- For views rendered in a [widget](guide_22_0__structure-widgets.md), they should be put under the `WidgetPath/views` directory by
  default, where `WidgetPath` stands for the directory containing the widget class file.
- For views rendered by other objects, it is recommended that you follow the similar convention as that for widgets.

You may customize these default view directories by overriding the [yii\base\ViewContextInterface::getViewPath()](https://www.yiiframework.com/doc/api/22.0/yii-base-viewcontextinterface#getViewPath()-detail)
method of controllers or widgets.

## Rendering Views [¶](#rendering-views)

You can render views in [controllers](guide_22_0__structure-controllers.md), [widgets](guide_22_0__structure-widgets.md), or any
other places by calling view rendering methods. These methods share a similar signature shown as follows,

```
/**
 * @param string $view view name or file path, depending on the actual rendering method
 * @param array $params the data to be passed to the view
 * @return string rendering result
 */
methodName($view, $params = [])
```

### Rendering in Controllers [¶](#rendering-in-controllers)

Within [controllers](guide_22_0__structure-controllers.md), you may call the following controller methods to render views:

- [render()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#render()-detail): renders a [named view](#named-views) and applies a [layout](#layouts)
  to the rendering result.
- [renderPartial()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#renderPartial()-detail): renders a [named view](#named-views) without any layout.
- [renderAjax()](https://www.yiiframework.com/doc/api/22.0/yii-web-controller#renderAjax()-detail): renders a [named view](#named-views) without any layout,
  and injects all registered JS/CSS scripts and files. It is usually used in response to AJAX Web requests.
- [renderFile()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#renderFile()-detail): renders a view specified in terms of a view file path or
  [alias](guide_22_0__concept-aliases.md).
- [renderContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#renderContent()-detail): renders a static string by embedding it into
  the currently applicable [layout](#layouts). This method is available since version 2.0.1.

For example,

```
namespace app\controllers;

use Yii;
use app\models\Post;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PostController extends Controller
{
    public function actionView($id)
    {
        $model = Post::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        // renders a view named "view" and applies a layout to it
        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
```

### Rendering in Widgets [¶](#rendering-in-widgets)

Within [widgets](guide_22_0__structure-widgets.md), you may call the following widget methods to render views.

- [render()](https://www.yiiframework.com/doc/api/22.0/yii-base-widget#render()-detail): renders a [named view](#named-views).
- [renderFile()](https://www.yiiframework.com/doc/api/22.0/yii-base-widget#renderFile()-detail): renders a view specified in terms of a view file path or
  [alias](guide_22_0__concept-aliases.md).

For example,

```
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class ListWidget extends Widget
{
    public $items = [];

    public function run()
    {
        // renders a view named "list"
        return $this->render('list', [
            'items' => $this->items,
        ]);
    }
}
```

### Rendering in Views [¶](#rendering-in-views)

You can render a view within another view by calling one of the following methods provided by the [view component](https://www.yiiframework.com/doc/api/22.0/yii-base-view):

- [render()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#render()-detail): renders a [named view](#named-views).
- [renderAjax()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#renderAjax()-detail): renders a [named view](#named-views) and injects all registered
  JS/CSS scripts and files. It is usually used in response to AJAX Web requests.
- [renderFile()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#renderFile()-detail): renders a view specified in terms of a view file path or
  [alias](guide_22_0__concept-aliases.md).

For example, the following code in a view renders the `_overview.php` view file which is in the same directory
as the view being currently rendered. Remember that `$this` in a view refers to the [view](https://www.yiiframework.com/doc/api/22.0/yii-base-view) component:

```
<?= $this->render('_overview') ?>
```

### Rendering in Other Places [¶](#rendering-in-other-places)

In any place, you can get access to the [view](https://www.yiiframework.com/doc/api/22.0/yii-base-view) application component by the expression
`Yii::$app->view` and then call its aforementioned methods to render a view. For example,

```
// displays the view file "@app/views/site/license.php"
echo \Yii::$app->view->renderFile('@app/views/site/license.php');
```

### Named Views [¶](#named-views)

When you render a view, you can specify the view using either a view name or a view file path/alias. In most cases,
you would use the former because it is more concise and flexible. We call views specified using names as *named views*.

A view name is resolved into the corresponding view file path according to the following rules:

- A view name may omit the file extension name. In this case, `.php` will be used as the extension. For example,
  the view name `about` corresponds to the file name `about.php`.
- If the view name starts with double slashes `//`, the corresponding view file path would be `@app/views/ViewName`.
  That is, the view is looked for under the [application's view path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$viewPath-detail).
  For example, `//site/about` will be resolved into `@app/views/site/about.php`.
- If the view name starts with a single slash `/`, the view file path is formed by prefixing the view name
  with the [view path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$viewPath-detail) of the currently active [module](guide_22_0__structure-modules.md).
  If there is no active module, `@app/views/ViewName` will be used. For example, `/user/create` will be resolved into
  `@app/modules/user/views/user/create.php`, if the currently active module is `user`. If there is no active module,
  the view file path would be `@app/views/user/create.php`.
- If the view is rendered with a [context](https://www.yiiframework.com/doc/api/22.0/yii-base-view#$context-detail) and the context implements [yii\base\ViewContextInterface](https://www.yiiframework.com/doc/api/22.0/yii-base-viewcontextinterface),
  the view file path is formed by prefixing the [view path](https://www.yiiframework.com/doc/api/22.0/yii-base-viewcontextinterface#getViewPath()-detail) of the
  context to the view name. This mainly applies to the views rendered within controllers and widgets. For example,
  `about` will be resolved into `@app/views/site/about.php` if the context is the controller `SiteController`.
- If a view is rendered within another view, the directory containing the other view file will be prefixed to
  the new view name to form the actual view file path. For example, `item` will be resolved into `@app/views/post/item.php`
  if it is being rendered in the view `@app/views/post/index.php`.

According to the above rules, calling `$this->render('view')` in a controller `app\controllers\PostController` will
actually render the view file `@app/views/post/view.php`, while calling `$this->render('_overview')` in that view
will render the view file `@app/views/post/_overview.php`.

### Accessing Data in Views [¶](#accessing-data-in-views)

There are two approaches to access data within a view: push and pull.

By passing the data as the second parameter to the view rendering methods, you are using the push approach.
The data should be represented as an array of name-value pairs. When the view is being rendered, the PHP
`extract()` function will be called on this array so that the array is extracted into variables in the view.
For example, the following view rendering code in a controller will push two variables to the `report` view:
`$foo = 1` and `$bar = 2`.

```
echo $this->render('report', [
    'foo' => 1,
    'bar' => 2,
]);
```

The pull approach actively retrieves data from the [view component](https://www.yiiframework.com/doc/api/22.0/yii-base-view) or other objects accessible
in views (e.g. `Yii::$app`). Using the code below as an example, within the view you can get the controller object
by the expression `$this->context`. And as a result, it is possible for you to access any properties or methods
of the controller in the `report` view, such as the controller ID shown in the following:

```
The controller ID is: <?= $this->context->id ?>
```

The push approach is usually the preferred way of accessing data in views, because it makes views less dependent
on context objects. Its drawback is that you need to manually build the data array all the time, which could
become tedious and error prone if a view is shared and rendered in different places.

### Sharing Data among Views [¶](#sharing-data-among-views)

The [view component](https://www.yiiframework.com/doc/api/22.0/yii-base-view) provides the [params](https://www.yiiframework.com/doc/api/22.0/yii-base-view#$params-detail) property that you can use
to share data among views.

For example, in an `about` view, you can have the following code which specifies the current segment of the
breadcrumbs.

```
$this->params['breadcrumbs'][] = 'About Us';
```

Then, in the [layout](#layouts) file, which is also a view, you can display the breadcrumbs using the data
passed along [params](https://www.yiiframework.com/doc/api/22.0/yii-base-view#$params-detail):

```
<?= yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
```

## Layouts [¶](#layouts)

Layouts are a special type of views that represent the common parts of multiple views. For example, the pages
for most Web applications share the same page header and footer. While you can repeat the same page header and footer
in every view, a better way is to do this once in a layout and embed the rendering result of a content view at
an appropriate place in the layout.

### Creating Layouts [¶](#creating-layouts)

Because layouts are also views, they can be created in the similar way as normal views. By default, layouts
are stored in the directory `@app/views/layouts`. For layouts used within a [module](guide_22_0__structure-modules.md),
they should be stored in the `views/layouts` directory under the [module directory](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).
You may customize the default layout directory by configuring the [yii\base\Module::$layoutPath](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layoutPath-detail) property of
the application or modules.

The following example shows how a layout looks like. Note that for illustrative purpose, we have greatly simplified
the code in the layout. In practice, you may want to add more content to it, such as head tags, main menu, etc.

```
<?php
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header>My Company</header>
    <?= $content ?>
    <footer>&copy; 2014 by My Company</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
```

As you can see, the layout generates the HTML tags that are common to all pages. Within the `<body>` section,
the layout echoes the `$content` variable which represents the rendering result of content views and is pushed
into the layout when [yii\base\Controller::render()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#render()-detail) is called.

Most layouts should call the following methods like shown in the above code. These methods mainly trigger events
about the rendering process so that scripts and tags registered in other places can be properly injected into
the places where these methods are called.

- [beginPage()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginPage()-detail): This method should be called at the very beginning of the layout.
  It triggers the [EVENT\_BEGIN\_PAGE](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_BEGIN_PAGE-detail) event which indicates the beginning of a page.
- [endPage()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endPage()-detail): This method should be called at the end of the layout.
  It triggers the [EVENT\_END\_PAGE](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_END_PAGE-detail) event which indicates the end of a page.
- [head()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#head()-detail): This method should be called within the `<head>` section of an HTML page.
  It generates a placeholder which will be replaced with the registered head HTML code (e.g. link tags, meta tags)
  when a page finishes rendering.
- [beginBody()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#beginBody()-detail): This method should be called at the beginning of the `<body>` section.
  It triggers the [EVENT\_BEGIN\_BODY](https://www.yiiframework.com/doc/api/22.0/yii-web-view#EVENT_BEGIN_BODY-detail) event and generates a placeholder which will
  be replaced by the registered HTML code (e.g. JavaScript) targeted at the body begin position.
- [endBody()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#endBody()-detail): This method should be called at the end of the `<body>` section.
  It triggers the [EVENT\_END\_BODY](https://www.yiiframework.com/doc/api/22.0/yii-web-view#EVENT_END_BODY-detail) event and generates a placeholder which will
  be replaced by the registered HTML code (e.g. JavaScript) targeted at the body end position.

### Accessing Data in Layouts [¶](#accessing-data-in-layouts)

Within a layout, you have access to two predefined variables: `$this` and `$content`. The former refers to
the [view](https://www.yiiframework.com/doc/api/22.0/yii-base-view) component, like in normal views, while the latter contains the rendering result of a content
view which is rendered by calling the [render()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#render()-detail) method in controllers.

If you want to access other data in layouts, you have to use the pull method as described in
the [Accessing Data in Views](#accessing-data-in-views) subsection. If you want to pass data from a content view
to a layout, you may use the method described in the [Sharing Data among Views](#sharing-data-among-views) subsection.

### Using Layouts [¶](#using-layouts)

As described in the [Rendering in Controllers](#rendering-in-controllers) subsection, when you render a view
by calling the [render()](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#render()-detail) method in a controller, a layout will be applied
to the rendering result. By default, the layout `@app/views/layouts/main.php` will be used.

You may use a different layout by configuring either [yii\base\Application::$layout](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$layout-detail) or [yii\base\Controller::$layout](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$layout-detail).
The former governs the layout used by all controllers, while the latter overrides the former for individual controllers.
For example, the following code makes the `post` controller to use `@app/views/layouts/post.php` as the layout
when rendering its views. Other controllers, assuming their `layout` property is untouched, will still use the default
`@app/views/layouts/main.php` as the layout.

```
namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public $layout = 'post';
    
    // ...
}
```

For controllers belonging to a module, you may also configure the module's [layout](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layout-detail) property to
use a particular layout for these controllers.

Because the `layout` property may be configured at different levels (controllers, modules, application),
behind the scene Yii takes two steps to determine what is the actual layout file being used for a particular controller.

In the first step, it determines the layout value and the context module:

- If the [yii\base\Controller::$layout](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$layout-detail) property of the controller is not `null`, use it as the layout value and
  the [module](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$module-detail) of the controller as the context module.
- If the [yii\base\Controller::$layout](https://www.yiiframework.com/doc/api/22.0/yii-base-controller#$layout-detail) property of the controller is `null`, search through all ancestor modules (including the application itself) of the controller and
  find the first module whose [layout](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layout-detail) property is not `null`. Use that module and
  its [layout](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layout-detail) value as the context module and the chosen layout value.
  If such a module cannot be found, it means no layout will be applied.

In the second step, it determines the actual layout file according to the layout value and the context module
determined in the first step. The layout value can be:

- a path alias (e.g. `@app/views/layouts/main`).
- an absolute path (e.g. `/main`): the layout value starts with a slash. The actual layout file will be
  looked for under the application's [layout path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layoutPath-detail) which defaults to
  `@app/views/layouts`.
- a relative path (e.g. `main`): the actual layout file will be looked for under the context module's
  [layout path](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$layoutPath-detail) which defaults to the `views/layouts` directory under the
  [module directory](https://www.yiiframework.com/doc/api/22.0/yii-base-module#$basePath-detail).
- the boolean value `false`: no layout will be applied.

If the layout value does not contain a file extension, it will use the default one `.php`.

### Nested Layouts [¶](#nested-layouts)

Sometimes you may want to nest one layout in another. For example, in different sections of a Web site, you
want to use different layouts, while all these layouts share the same basic layout that generates the overall
HTML5 page structure. You can achieve this goal by calling [beginContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginContent()-detail) and
[endContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endContent()-detail) in the child layouts like the following:

```
<?php $this->beginContent('@app/views/layouts/base.php'); ?>

...child layout content here...

<?php $this->endContent(); ?>
```

As shown above, the child layout content should be enclosed within [beginContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginContent()-detail) and
[endContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endContent()-detail). The parameter passed to [beginContent()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginContent()-detail)
specifies what is the parent layout. It can be either a layout file or alias.

Using the above approach, you can nest layouts in more than one levels.

### Using Blocks [¶](#using-blocks)

Blocks allow you to specify the view content in one place while displaying it in another. They are often used together
with layouts. For example, you can define a block in a content view and display it in the layout.

You call [beginBlock()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginBlock()-detail) and [endBlock()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endBlock()-detail) to define a block.
The block can then be accessed via `$view->blocks[$blockID]`, where `$blockID` stands for a unique ID that you assign
to the block when defining it.

The following example shows how you can use blocks to customize specific parts of a layout in a content view.

First, in a content view, define one or multiple blocks:

```
...

<?php $this->beginBlock('block1'); ?>

...content of block1...

<?php $this->endBlock(); ?>

...

<?php $this->beginBlock('block3'); ?>

...content of block3...

<?php $this->endBlock(); ?>
```

Then, in the layout view, render the blocks if they are available, or display some default content if a block is
not defined.

```
...
<?php if (isset($this->blocks['block1'])): ?>
    <?= $this->blocks['block1'] ?>
<?php else: ?>
    ... default content for block1 ...
<?php endif; ?>

...

<?php if (isset($this->blocks['block2'])): ?>
    <?= $this->blocks['block2'] ?>
<?php else: ?>
    ... default content for block2 ...
<?php endif; ?>

...

<?php if (isset($this->blocks['block3'])): ?>
    <?= $this->blocks['block3'] ?>
<?php else: ?>
    ... default content for block3 ...
<?php endif; ?>
...
```

## Using View Components [¶](#using-view-components)

[View components](https://www.yiiframework.com/doc/api/22.0/yii-base-view) provides many view-related features. While you can get view components
by creating individual instances of [yii\base\View](https://www.yiiframework.com/doc/api/22.0/yii-base-view) or its child class, in most cases you will mainly use
the `view` application component. You can configure this component in [application configurations](guide_22_0__structure-applications.md#application-configurations)
like the following:

```
[
    // ...
    'components' => [
        'view' => [
            'class' => 'app\components\View',
        ],
        // ...
    ],
]
```

View components provide the following useful view-related features, each described in more details in a separate section:

- [theming](guide_22_0__output-theming.md): allows you to develop and change the theme for your Web site.
- [fragment caching](guide_22_0__caching-fragment.md): allows you to cache a fragment within a Web page.
- [client script handling](guide_22_0__output-client-scripts.md): supports CSS and JavaScript registration and rendering.
- [asset bundle handling](guide_22_0__structure-assets.md): supports registering and rendering of [asset bundles](guide_22_0__structure-assets.md).
- [alternative template engines](guide_22_0__tutorial-template-engines.md): allows you to use other template engines, such as
  [Twig](https://twig.symfony.com/), [Smarty](https://www.smarty.net/).

You may also frequently use the following minor yet useful features when you are developing Web pages.

### Setting Page Titles [¶](#setting-page-titles)

Every Web page should have a title. Normally the title tag is being displayed in a [layout](#layouts). However, in practice
the title is often determined in content views rather than layouts. To solve this problem, [yii\web\View](https://www.yiiframework.com/doc/api/22.0/yii-web-view) provides
the [title](https://www.yiiframework.com/doc/api/22.0/yii-web-view#$title-detail) property for you to pass the title information from content views to layouts.

To make use of this feature, in each content view, you can set the page title like the following:

```
<?php
$this->title = 'My page title';
?>
```

Then in the layout, make sure you have the following code in the `<head>` section:

```
<title><?= Html::encode($this->title) ?></title>
```

### Registering Meta Tags [¶](#registering-meta-tags)

Web pages usually need to generate various meta tags needed by different parties. Like page titles, meta tags
appear in the `<head>` section and are usually generated in layouts.

If you want to specify what meta tags to generate in content views, you can call [yii\web\View::registerMetaTag()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerMetaTag()-detail)
in a content view, like the following:

```
<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']);
?>
```

The above code will register a "keywords" meta tag with the view component. The registered meta tag is
rendered after the layout finishes rendering. The following HTML code will be generated and inserted
at the place where you call [yii\web\View::head()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#head()-detail) in the layout:

```
<meta name="keywords" content="yii, framework, php">
```

Note that if you call [yii\web\View::registerMetaTag()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerMetaTag()-detail) multiple times, it will register multiple meta tags,
regardless whether the meta tags are the same or not.

To make sure there is only a single instance of a meta tag type, you can specify a key as a second parameter when calling the method.
For example, the following code registers two "description" meta tags. However, only the second one will be rendered.

```
$this->registerMetaTag(['name' => 'description', 'content' => 'This is my cool website made with Yii!'], 'description');
$this->registerMetaTag(['name' => 'description', 'content' => 'This website is about funny raccoons.'], 'description');
```

### Registering Link Tags [¶](#registering-link-tags)

Like [meta tags](#registering-meta-tags), link tags are useful in many cases, such as customizing favicon, pointing to
RSS feed or delegating OpenID to another server. You can work with link tags in the similar way as meta tags
by using [yii\web\View::registerLinkTag()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerLinkTag()-detail). For example, in a content view, you can register a link tag like follows,

```
$this->registerLinkTag([
    'title' => 'Live News for Yii',
    'rel' => 'alternate',
    'type' => 'application/rss+xml',
    'href' => 'https://www.yiiframework.com/rss.xml/',
]);
```

The code above will result in

```
<link title="Live News for Yii" rel="alternate" type="application/rss+xml" href="https://www.yiiframework.com/rss.xml/">
```

Similar as [registerMetaTag()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerMetaTag()-detail), you can specify a key when calling
[registerLinkTag()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerLinkTag()-detail) to avoid generating repeated link tags.

## View Events [¶](#view-events)

[View components](https://www.yiiframework.com/doc/api/22.0/yii-base-view) trigger several events during the view rendering process. You may respond
to these events to inject content into views or process the rendering results before they are sent to end users.

- [EVENT\_BEFORE\_RENDER](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_BEFORE_RENDER-detail): triggered at the beginning of rendering a file
  in a controller. Handlers of this event may set [yii\base\ViewEvent::$isValid](https://www.yiiframework.com/doc/api/22.0/yii-base-viewevent#$isValid-detail) to be `false` to cancel the rendering process.
- [EVENT\_AFTER\_RENDER](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_AFTER_RENDER-detail): triggered after rendering a file by the call of [yii\base\View::afterRender()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#afterRender()-detail).
  Handlers of this event may obtain the rendering result through [yii\base\ViewEvent::$output](https://www.yiiframework.com/doc/api/22.0/yii-base-viewevent#$output-detail) and may modify
  this property to change the rendering result.
- [EVENT\_BEGIN\_PAGE](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_BEGIN_PAGE-detail): triggered by the call of [yii\base\View::beginPage()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginPage()-detail) in layouts.
- [EVENT\_END\_PAGE](https://www.yiiframework.com/doc/api/22.0/yii-base-view#EVENT_END_PAGE-detail): triggered by the call of [yii\base\View::endPage()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endPage()-detail) in layouts.
- [EVENT\_BEGIN\_BODY](https://www.yiiframework.com/doc/api/22.0/yii-web-view#EVENT_BEGIN_BODY-detail): triggered by the call of [yii\web\View::beginBody()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#beginBody()-detail) in layouts.
- [EVENT\_END\_BODY](https://www.yiiframework.com/doc/api/22.0/yii-web-view#EVENT_END_BODY-detail): triggered by the call of [yii\web\View::endBody()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#endBody()-detail) in layouts.

For example, the following code injects the current date at the end of the page body:

```
\Yii::$app->view->on(View::EVENT_END_BODY, function () {
    echo date('Y-m-d');
});
```

## Rendering Static Pages [¶](#rendering-static-pages)

Static pages refer to those Web pages whose main content are mostly static without the need of accessing
dynamic data pushed from controllers.

You can output static pages by putting their code in the view, and then using the code like the following in a controller:

```
public function actionAbout()
{
    return $this->render('about');
}
```

If a Web site contains many static pages, it would be very tedious repeating the similar code many times.
To solve this problem, you may introduce a [standalone action](guide_22_0__structure-controllers.md#standalone-actions)
called [yii\web\ViewAction](https://www.yiiframework.com/doc/api/22.0/yii-web-viewaction) in a controller. For example,

```
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'page' => [
                'class' => 'yii\web\ViewAction',
            ],
        ];
    }
}
```

Now if you create a view named `about` under the directory `@app/views/site/pages`, you will be able to
display this view by the following URL:

```
http://localhost/index.php?r=site%2Fpage&view=about
```

The `GET` parameter `view` tells [yii\web\ViewAction](https://www.yiiframework.com/doc/api/22.0/yii-web-viewaction) which view is requested. The action will then look
for this view under the directory `@app/views/site/pages`. You may configure [yii\web\ViewAction::$viewPrefix](https://www.yiiframework.com/doc/api/22.0/yii-web-viewaction#$viewPrefix-detail)
to change the directory for searching these views.

## Best Practices [¶](#best-practices)

Views are responsible for presenting models in the format that end users desire. In general, views

- should mainly contain presentational code, such as HTML, and simple PHP code to traverse, format and render data.
- should not contain code that performs DB queries. Such code should be done in models.
- should avoid direct access to request data, such as `$_GET`, `$_POST`. This belongs to controllers.
  If request data is needed, they should be pushed into views by controllers.
- may read model properties, but should not modify them.

To make views more manageable, avoid creating views that are too complex or contain too much redundant code.
You may use the following techniques to achieve this goal:

- use [layouts](#layouts) to represent common presentational sections (e.g. page header, footer).
- divide a complicated view into several smaller ones. The smaller views can be rendered and assembled into a bigger
  one using the rendering methods that we have described.
- create and use [widgets](guide_22_0__structure-widgets.md) as building blocks of views.
- create and use helper classes to transform and format data in views.

[Models](guide_22_0__structure-models.md)

[Go to Top](#top)

[Modules](guide_22_0__structure-modules.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/structure-views.md) !
