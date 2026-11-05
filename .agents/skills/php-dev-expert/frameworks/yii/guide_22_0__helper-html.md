# Helpers: Html | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/helper-html

---

0

# Html helper [¶](#html-helper)

Every web application generates lots of HTML markup. If the markup is static, it can be done efficiently by
[mixing PHP and HTML in a single file](https://www.php.net/manual/en/language.basic-syntax.phpmode.php), but when it is
generated dynamically it starts to get tricky to handle it without extra help. Yii provides such help in the form
of an Html helper, which provides a set of static methods for handling commonly used HTML tags, their options, and their content.

> **Note:** If your markup is nearly static, it's better to use HTML directly. There's no need to wrap absolutely everything
> in Html helper calls.

## Basics [¶](#basics)

Since building dynamic HTML by string concatenation can get messy very fast, Yii provides a set of methods to
manipulate tag options and build tags based on these options.

### Generating Tags [¶](#generating-tags)

The code for generating a tag looks like the following:

```
<?= Html::tag('p', Html::encode($user->name), ['class' => 'username']) ?>
```

The first argument is the tag name. The second one is the content to be enclosed between the start and end tags.
Note that we are using `Html::encode` — that's because the content isn't encoded automatically to allow using HTML when needed.
The third one is an array of HTML options, or in other words, tag attributes.
In this array the key is the name of the attribute (such as `class`, `href` or `target`), and the value is its value.

The code above will generate the following HTML:

```
<p class="username">samdark</p>
```

In case you need just an opening or closing tag, you can use the `Html::beginTag()` and `Html::endTag()` methods.

Options are used in many methods of the Html helper and various widgets. In all these cases there is some extra handling to
know about:

- If a value is `null`, the corresponding attribute will not be rendered.
- Attributes whose values are of boolean type will be treated as
  [boolean attributes](https://html.spec.whatwg.org/multipage/common-microsyntaxes.html#boolean-attributess).
- The values of attributes will be HTML-encoded using [Html::encode()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#encode()-detail).
- If the value of an attribute is an array, it will be handled as follows:

  - If the attribute is a data attribute as listed in [yii\helpers\Html::$dataAttributes](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#$dataAttributes-detail), such as `data` or `ng`,
    a list of attributes will be rendered, one for each element in the value array. For example,
    `'data' => ['id' => 1, 'name' => 'yii']` generates `data-id="1" data-name="yii"`; and
    `'data' => ['params' => ['id' => 1, 'name' => 'yii'], 'status' => 'ok']` generates
    `data-params='{"id":1,"name":"yii"}' data-status="ok"`. Note that in the latter example JSON format is used
    to render a sub-array.
  - If the attribute is NOT a data attribute, the value will be JSON-encoded. For example,
    `['params' => ['id' => 1, 'name' => 'yii']` generates `params='{"id":1,"name":"yii"}'`.

### Forming CSS Classes and Styles [¶](#forming-css)

When building options for HTML tags we often start with defaults which we need to modify. In order to add or
remove a CSS class you can use the following:

```
$options = ['class' => 'btn btn-default'];

if ($type === 'success') {
    Html::removeCssClass($options, 'btn-default');
    Html::addCssClass($options, 'btn-success');
}

echo Html::tag('div', 'Pwede na', $options);

// if the value of $type is 'success' it will render
// <div class="btn btn-success">Pwede na</div>
```

You may specify multiple CSS classes using the array style as well:

```
$options = ['class' => ['btn', 'btn-default']];

echo Html::tag('div', 'Save', $options);
// renders '<div class="btn btn-default">Save</div>'
```

You may also use the array style when adding or removing classes:

```
$options = ['class' => 'btn'];

if ($type === 'success') {
    Html::addCssClass($options, ['btn-success', 'btn-lg']);
}

echo Html::tag('div', 'Save', $options);
// renders '<div class="btn btn-success btn-lg">Save</div>'
```

`Html::addCssClass()` prevents duplication, so you don't need to worry about the same class appearing twice:

```
$options = ['class' => 'btn btn-default'];

Html::addCssClass($options, 'btn-default'); // class 'btn-default' is already present

echo Html::tag('div', 'Save', $options);
// renders '<div class="btn btn-default">Save</div>'
```

If the CSS class option is specified using the array style, you may use a named key to mark the logical purpose of the class.
In this case, a class with the same key in the array style will be ignored in `Html::addCssClass()`:

```
$options = [
    'class' => [
        'btn',
        'theme' => 'btn-default',
    ]
];

Html::addCssClass($options, ['theme' => 'btn-success']); // 'theme' key is already taken

echo Html::tag('div', 'Save', $options);
// renders '<div class="btn btn-default">Save</div>'
```

CSS styles can be set up in similar way using the `style` attribute:

```
$options = ['style' => ['width' => '100px', 'height' => '100px']];

// gives style="width: 100px; height: 200px; position: absolute;"
Html::addCssStyle($options, 'height: 200px; position: absolute;');

// gives style="position: absolute;"
Html::removeCssStyle($options, ['width', 'height']);
```

When using [addCssStyle()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#addCssStyle()-detail), you can specify either an array of key-value pairs,
corresponding to CSS property names and values, or a string such as `width: 100px; height: 200px;`. These formats
can be converted from one to the other using [cssStyleFromArray()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#cssStyleFromArray()-detail) and
[cssStyleToArray()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#cssStyleToArray()-detail). The [removeCssStyle()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#removeCssStyle()-detail)
method accepts an array of properties to remove. If it's a single property, it can be specified as a string.

### Encoding and Decoding Content [¶](#encoding-and-decoding-content)

In order for content to be displayed properly and securely in HTML, special characters in the content should be encoded.
In PHP this is done with [htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php) and
[htmlspecialchars\_decode](https://www.php.net/manual/en/function.htmlspecialchars-decode.php). The issue with using
these methods directly is that you have to specify encoding and extra flags all the time. Since these flags are the same
all the time and the encoding should match the one of the application in order to prevent security issues, Yii provides two
compact and simple-to-use methods:

```
$userName = Html::encode($user->name);
echo $userName;

$decodedUserName = Html::decode($userName);
```

## Forms [¶](#forms)

Dealing with form markup is quite repetitive and error prone. Because of that, there is a group of methods to help
dealing with them.

> **Note:** consider using [ActiveForm](https://www.yiiframework.com/doc/api/22.0/yii-widgets-activeform) in case you're dealing with models and need validation.

### Creating Forms [¶](#creating-forms)

Forms can be opened with [beginForm()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#beginForm()-detail) method like the following:

```
<?= Html::beginForm(['order/update', 'id' => $id], 'post', ['enctype' => 'multipart/form-data']) ?>
```

The first argument is the URL the form will be submitted to. It can be specified in the form of a Yii route and parameters accepted by [Url::to()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseurl#to()-detail).
The second one is the method to use. `post` is the default. The third one is an array of options
for the form tag. In this case we're changing the encoding of the form data in the POST request to `multipart/form-data`,
which is required in order to upload files.

Closing the form tag is simple:

```
<?= Html::endForm() ?>
```

### Buttons [¶](#buttons)

In order to generate buttons, you can use the following code:

```
<?= Html::button('Press me!', ['class' => 'teaser']) ?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?= Html::resetButton('Reset', ['class' => 'reset']) ?>
```

The first argument for all three methods is the button title, and the second one is an array of options.
The title isn't encoded, so if you're displaying data from the end user, encode it with [Html::encode()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#encode()-detail).

### Input Fields [¶](#input-fields)

There are two groups of input methods. The ones starting with `active`, which are called active inputs, and the ones not starting with it.
Active inputs take data from the model and attribute specified, while in the case of a regular input, data is specified
directly.

The most generic methods are:

```
type, input name, input value, options
<?= Html::input('text', 'username', $user->name, ['class' => $username]) ?>

type, model, model attribute name, options
<?= Html::activeInput('text', $user, 'name', ['class' => $username]) ?>
```

If you know the input type in advance, it's more convenient to use the shortcut methods:

- [yii\helpers\Html::buttonInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#buttonInput()-detail)
- [yii\helpers\Html::submitInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#submitInput()-detail)
- [yii\helpers\Html::resetInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#resetInput()-detail)
- [yii\helpers\Html::textInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#textInput()-detail), [yii\helpers\Html::activeTextInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#activeTextInput()-detail)
- [yii\helpers\Html::hiddenInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#hiddenInput()-detail), [yii\helpers\Html::activeHiddenInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#activeHiddenInput()-detail)
- [yii\helpers\Html::passwordInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#passwordInput()-detail) / [yii\helpers\Html::activePasswordInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#activePasswordInput()-detail)
- [yii\helpers\Html::fileInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#fileInput()-detail), [yii\helpers\Html::activeFileInput()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#activeFileInput()-detail)
- [yii\helpers\Html::textarea()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#textarea()-detail), [yii\helpers\Html::activeTextarea()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basehtml#activeTextarea()-detail)

Radios and checkboxes are a bit different in terms of method signature:

```
<?= Html::radio('agree', true, ['label' => 'I agree']) ?>
<?= Html::activeRadio($model, 'agree', ['class' => 'agreement']) ?>

<?= Html::checkbox('agree', true, ['label' => 'I agree']) ?>
<?= Html::activeCheckbox($model, 'agree', ['class' => 'agreement']) ?>
```

Dropdown lists and list boxes can be rendered like the following:

```
<?= Html::dropDownList('list', $currentUserId, ArrayHelper::map($userModels, 'id', 'name')) ?>
<?= Html::activeDropDownList($users, 'id', ArrayHelper::map($userModels, 'id', 'name')) ?>

<?= Html::listBox('list', $currentUserId, ArrayHelper::map($userModels, 'id', 'name')) ?>
<?= Html::activeListBox($users, 'id', ArrayHelper::map($userModels, 'id', 'name')) ?>
```

The first argument is the name of the input, the second one is the value that's currently selected, and the third one is an array of key-value pairs, where the array key is the list value and the array value is the list label.

If you want multiple choices to be selectable, you can use a checkbox list:

```
<?= Html::checkboxList('roles', [16, 42], ArrayHelper::map($roleModels, 'id', 'name')) ?>
<?= Html::activeCheckboxList($user, 'role', ArrayHelper::map($roleModels, 'id', 'name')) ?>
```

If not, use radio list:

```
<?= Html::radioList('roles', [16, 42], ArrayHelper::map($roleModels, 'id', 'name')) ?>
<?= Html::activeRadioList($user, 'role', ArrayHelper::map($roleModels, 'id', 'name')) ?>
```

### Labels and Errors [¶](#labels-and-errors)

Same as inputs, there are two methods for generating form labels. Active, which takes data from the model, and non-active, which accepts data directly:

```
<?= Html::label('User name', 'username', ['class' => 'label username']) ?>
<?= Html::activeLabel($user, 'username', ['class' => 'label username']) ?>
```

In order to display form errors from a model or models as a summary, you could use:

```
<?= Html::errorSummary($posts, ['class' => 'errors']) ?>
```

To display an individual error:

```
<?= Html::error($post, 'title', ['class' => 'error']) ?>
```

### Input Names and Values [¶](#input-names-and-values)

There are methods to get names, ids and values for input fields based on the model. These are mainly used internally,
but could be handy sometimes:

```
// Post[title]
echo Html::getInputName($post, 'title');

// post-title
echo Html::getInputId($post, 'title');

// my first post
echo Html::getAttributeValue($post, 'title');

// $post->authors[0]
echo Html::getAttributeValue($post, '[0]authors[0]');
```

In the above, the first argument is the model, while the second one is the attribute expression. In its simplest form the expression is just an attribute name, but it can be an attribute name prefixed and/or suffixed with array indexes, which is mainly used for tabular input:

- `[0]content` is used in tabular data input to represent the `content` attribute for the first model in tabular input;
- `dates[0]` represents the first array element of the `dates` attribute;
- `[0]dates[0]` represents the first array element of the `dates` attribute for the first model in tabular input.

In order to get the attribute name without suffixes or prefixes, one can use the following:

```
// dates
echo Html::getAttributeName('dates[0]');
```

## Styles and Scripts [¶](#styles-and-scripts)

There are two methods to generate tags wrapping embedded styles and scripts:

```
<?= Html::style('.danger { color: #f00; }', ['media' => 'print']) ?>

Gives you

<style media="print">.danger { color: #f00; }</style>

<?= Html::script('alert("Hello!");') ?>

Gives you

<script>alert("Hello!");</script>
```

If you want to use an external style in a CSS file:

```
<?= Html::cssFile('@web/css/ie5.css', ['condition' => 'IE 5']) ?>

generates

<!--[if IE 5]>
    <link href="https://example.com/css/ie5.css" />
<![endif]-->
```

The first argument is the URL. The second one is an array of options. In addition to the regular options, you can specify:

- `condition` to wrap `<link` in conditional comments with the specified condition. Hope you won't need conditional
  comments ever ;)
- `noscript` can be set to `true` to wrap `<link` in a `<noscript>` tag so it will be included only when there's
  either no JavaScript support in the browser or it was disabled by the user.

To link a JavaScript file:

```
<?= Html::jsFile('@web/js/main.js') ?>
```

Same as with CSS, the first argument specifies the URL of the file to be included. Options can be passed as the second argument.
In the options you can specify `condition` in the same way as in the options for `cssFile`.

## Hyperlinks [¶](#hyperlinks)

There's a method to generate hyperlinks conveniently:

```
<?= Html::a('Profile', ['user/view', 'id' => $id], ['class' => 'profile-link']) ?>
```

The first argument is the title. It's not encoded, so if you're using data entered by the user, you need to encode it with
`Html::encode()`. The second argument is what will be in the `href` attribute of the `<a` tag.
See [Url::to()](guide_22_0__helper-url.md) for details on what values it accepts.
The third argument is an array of tag attributes.

If you need to generate `mailto` links, you can use the following code:

```
<?= Html::mailto('Contact us', 'admin@example.com') ?>
```

## Images [¶](#images)

In order to generate an image tag, use the following:

```
<?= Html::img('@web/images/logo.png', ['alt' => 'My logo']) ?>

generates

<img src="https://example.com/images/logo.png" alt="My logo" />
```

Besides [aliases](guide_22_0__concept-aliases.md), the first argument can accept routes, parameters and URLs, in the same way [Url::to()](guide_22_0__helper-url.md) does.

## Lists [¶](#lists)

Unordered list can be generated like the following:

```
<?= Html::ul($posts, ['item' => function($item, $index) {
    return Html::tag(
        'li',
        $this->render('post', ['item' => $item]),
        ['class' => 'post']
    );
}]) ?>
```

In order to get ordered list, use `Html::ol()` instead.

[ArrayHelper](guide_22_0__helper-array.md)

[Go to Top](#top)

[Json](guide_22_0__helper-json.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/helper-html.md) !
