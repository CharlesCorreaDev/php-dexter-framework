# Displaying Data: Working with Client Scripts | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-client-scripts

---

0

# Working with Client Scripts [¶](#working-with-client-scripts)

Modern web applications, additionally to static HTML pages that are
rendered and sent to the browser, contain JavaScript that is used
to modify the page in the browser by manipulating existing elements or
loading new content via AJAX.
This section describes methods provided by Yii for adding JavaScript and CSS to a website as well as dynamically adjusting these.

## Registering scripts [¶](#register-scripts)

When working with the [yii\web\View](https://www.yiiframework.com/doc/api/22.0/yii-web-view) object you can dynamically register frontend scripts.
There are two dedicated methods for this:

- [registerJs()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerJs()-detail) for inline scripts
- [registerJsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerJsFile()-detail) for external scripts

### Registering inline scripts [¶](#inline-scripts)

Inline scripts are useful for configuration, dynamically generated code and small snippets created by reusable frontend code contained in [widgets](guide_22_0__structure-widgets.md).
The [registerJs()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerJs()-detail) method for adding these can be used as follows:

```
$this->registerJs(
    "$('#myButton').on('click', function() { alert('Button clicked!'); });",
    View::POS_READY,
    'my-button-handler'
);
```

The first argument is the actual JS code we want to insert into the page.
It will be wrapped into a `<script>` tag. The second argument
determines at which position the script should be inserted into the page. Possible values are:

- [View::POS\_HEAD](https://www.yiiframework.com/doc/api/22.0/yii-web-view#POS_HEAD-detail) for head section.
- [View::POS\_BEGIN](https://www.yiiframework.com/doc/api/22.0/yii-web-view#POS_BEGIN-detail) for right after opening `<body>`.
- [View::POS\_END](https://www.yiiframework.com/doc/api/22.0/yii-web-view#POS_END-detail) for right before closing `</body>`.
- [View::POS\_READY](https://www.yiiframework.com/doc/api/22.0/yii-web-view#POS_READY-detail) for executing code on the [document `ready` event](https://learn.jquery.com/using-jquery-core/document-ready/).
  This will automatically register [jQuery](https://www.yiiframework.com/doc/api/22.0/yii-web-jqueryasset) and wrap the code into the appropriate jQuery code. This is the default position.
- [View::POS\_LOAD](https://www.yiiframework.com/doc/api/22.0/yii-web-view#POS_LOAD-detail) for executing code on the
  [document `load` event](https://learn.jquery.com/using-jquery-core/document-ready/). Same as the above, this will also register [jQuery](https://www.yiiframework.com/doc/api/22.0/yii-web-jqueryasset) automatically.

The last argument is a unique script ID that is used to identify the script code block and replace an existing one with the same ID
instead of adding a new one. If you don't provide it, the JS code itself will be used as the ID. It is used to avoid registration of the same code multiple times.

### Registering script files [¶](#script-files)

The arguments for [registerJsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerJsFile()-detail) are similar to those for
[registerCssFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerCssFile()-detail). In the following example,
we register the `main.js` file with the dependency on the [yii\web\JqueryAsset](https://www.yiiframework.com/doc/api/22.0/yii-web-jqueryasset). It means that the `main.js` file
will be added AFTER `jquery.js`. Without such dependency specification, the relative order between
`main.js` and `jquery.js` would be undefined and the code would not work.

An external script can be added like the following:

```
$this->registerJsFile(
    '@web/js/main.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
```

This will add a tag for the `/js/main.js` script located under the application [base URL](guide_22_0__concept-aliases.md#predefined-aliases).

It is highly recommended to use [asset bundles](guide_22_0__structure-assets.md) to register external JS files rather than [registerJsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerJsFile()-detail) because these allow better flexibility and more granular dependency configuration. Also using asset bundles allows you to combine and compress
multiple JS files, which is desirable for high traffic websites.

## Registering CSS [¶](#register-css)

Similar to JavaScript, you can register CSS using
[registerCss()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerCss()-detail) or
[registerCssFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerCssFile()-detail).
The former registers a block of CSS code while the latter registers an external CSS file.

### Registering inline CSS [¶](#inline-css)

```
$this->registerCss("body { background: #f00; }");
```

The code above will result in adding the following to the `<head>` section of the page:

```
<style>
body { background: #f00; }
</style>
```

If you want to specify additional properties of the style tag, pass an array of name-values to the second argument.
The last argument is a unique ID that is used to identify the style block and make sure it is only added once in case the same style is registered from different places in the code.

### Registering CSS files [¶](#css-files)

A CSS file can be registered using the following:

```
$this->registerCssFile("@web/css/themes/black-and-white.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::class],
    'media' => 'print',
], 'css-print-theme');
```

The above code will add a link to the `/css/themes/black-and-white.css` CSS file to the `<head>` section of the page.

- The first argument specifies the CSS file to be registered.
  The `@web` in this example is an [alias for the applications base URL](guide_22_0__concept-aliases.md#predefined-aliases).
- The second argument specifies the HTML attributes for the resulting `<link>` tag. The option `depends`
  is specially handled. It specifies which asset bundles this CSS file depends on. In this case, the dependent
  asset bundle is yii\bootstrap\BootstrapAsset. This means the CSS file will be added
  *after* the CSS files from yii\bootstrap\BootstrapAsset.
- The last argument specifies an ID identifying this CSS file. If it is not provided, the URL of the CSS file will be
  used instead.

It is highly recommended to use [asset bundles](guide_22_0__structure-assets.md) to register external CSS files rather than
[registerCssFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-view#registerCssFile()-detail). Using asset bundles allows you to combine and compress
multiple CSS files, which is desirable for high traffic websites.
It also provides more flexibility as all asset dependencies of your application are configured in one place.

## Registering asset bundles [¶](#asset-bundles)

As was mentioned earlier it's recommended to use asset bundles instead of registering CSS and JavaScript files directly.
You can get details on how to define asset bundles in the
["Assets" section](guide_22_0__structure-assets.md).
As for using already defined asset bundles, it's very straightforward:

```
\frontend\assets\AppAsset::register($this);
```

In the above code, in the context of a view file, the `AppAsset` bundle is registered on the current view (represented by `$this`).
When registering asset bundles from within a widget, you would pass the
[$view](https://www.yiiframework.com/doc/api/22.0/yii-base-widget#$view-detail) of the widget instead (`$this->view`).

## Generating Dynamic Javascript [¶](#dynamic-js)

In view files often the HTML code is not written out directly but generated
by some PHP code dependent on the variables of the view.
In order for the generated HTML to be manipulated with Javascript, the JS code has to contain dynamic parts too, for example the IDs of the jQuery selectors.

To insert PHP variables into JS code, their values have to be
escaped properly. Especially when the JS code is inserted into
HTML instead of residing in a dedicated JS file.
Yii provides the [htmlEncode()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basejson#htmlEncode()-detail) method of the [Json](https://www.yiiframework.com/doc/api/22.0/yii-helpers-json) helper for this purpose. Its usage will be shown in the following examples.

### Registering a global JavaScript configuration [¶](#js-configuration)

In this example we use an array to pass global configuration parameters from
the PHP part of the application to the JS frontend code.

```
$options = [
    'appName' => Yii::$app->name,
    'baseUrl' => Yii::$app->request->baseUrl,
    'language' => Yii::$app->language,
    // ...
];
$this->registerJs(
    "var yiiOptions = ".\yii\helpers\Json::htmlEncode($options).";",
    View::POS_HEAD,
    'yiiOptions'
);
```

The above code will register a `<script>`-tag containing the JavaScript
variable definition, e.g.:

```
var yiiOptions = {"appName":"My Yii Application","baseUrl":"/basic/web","language":"en"};
```

In your JavaScript code you can now access these like `yiiOptions.baseUrl` or `yiiOptions.language`.

### Passing translated messages [¶](#translated-messages)

You may encounter a case where your JavaScript needs to print a message reacting to some event. In an application that works with multiple languages this string has to be translated to the current application language.
One way to achieve this is to use the
[message translation feature](guide_22_0__tutorial-i18n.md#message-translation) provided by Yii and passing the result to the JavaScript code.

```
$message = \yii\helpers\Json::htmlEncode(
    \Yii::t('app', 'Button clicked!')
);
$this->registerJs(<<<JS
    $('#myButton').on('click', function() { alert( $message ); });
JS
);
```

The above example code uses PHP
[Heredoc syntax](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc) for better readability. This also enables better syntax highlighting in most IDEs so it is the
preferred way of writing inline JavaScript, especially useful for code that is longer than a single line. The variable `$message` is created in PHP and
thanks to [Json::htmlEncode](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basejson#htmlEncode()-detail) it contains the
string in valid JS syntax, which can be inserted into the JavaScript code to place the dynamic string in the function call to `alert()`.

> **Note:** When using Heredoc, be careful with variable naming in JS code
> as variables beginning with `$` may be interpreted as PHP variables which
> will be replaced by their content.
> The jQuery function in form of `$(` or `$.` is not interpreted
> as a PHP variable and can safely be used.

## The `yii.js` script [¶](#yii.js)

> **Note:** This section has not been written yet. It should contain explanation of the functionality provided by `yii.js`:
>
> - Yii JavaScript Modules
> - CSRF param handling
> - `data-confirm` handler
> - `data-method` handler
> - script filtering
> - redirect handling

[Data Widgets](guide_22_0__output-data-widgets.md)

[Go to Top](#top)

[Theming](guide_22_0__output-theming.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-client-scripts.md) !
