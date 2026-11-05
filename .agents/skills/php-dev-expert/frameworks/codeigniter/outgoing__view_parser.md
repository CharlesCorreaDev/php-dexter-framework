# View Parser — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/outgoing/view_parser.html

---

# View Parser[](#view-parser "Link to this heading")

The View Parser can perform simple text substitution for
pseudo-variables contained within your view files.
It can parse simple variables or variable tag pairs.

Pseudo-variable names or control constructs are enclosed in braces, like this:

```
<html>
<head>
    <title>{blog_title}</title>
</head>
<body>
    <h3>{blog_heading}</h3>

    {blog_entries}
        <h5>{title}</h5>
        <p>{body}</p>
    {/blog_entries}

</body>
</html>
```

These variables are not actual PHP variables, but rather plain text
representations that allow you to eliminate PHP from your templates
(view files).

Note

CodeIgniter does **not** require you to use this class since
using pure PHP in your view pages (for instance using the
[View renderer](outgoing__view_renderer.md) )
lets them run a little faster.
However, some developers prefer to use some form of template engine if
they work with designers who they feel would find some
confusion working with PHP.

## [Using the View Parser Class](#id1)[](#using-the-view-parser-class "Link to this heading")

The simplest method to load the parser class is through its service:

```
<?php

$parser = service('parser');
```

Alternately, if you are not using the `Parser` class as your default renderer, you
can instantiate it directly:

```
<?php

$parser = new \CodeIgniter\View\Parser();
```

Then you can use any of the three standard rendering methods that it provides:
`render()`, `setVar()` and
`setData()`. You will also be able to specify delimiters directly,
through the `setDelimiters()` method.

Important

The `Parser` escapes literal PHP tags in view templates instead of
executing them. However, expressions in `{if ...}` and `{elseif ...}`
tags are evaluated as PHP. Treat template source as trusted code, or
[restrict conditionals](#parser-restricting-conditionals) when less-trusted
users can edit templates.

### [What It Does](#id2)[](#what-it-does "Link to this heading")

The `Parser` class processes templates stored in the application’s view path.
Literal PHP tags are not supported.

Each view parameter (which we refer to as a pseudo-variable) triggers a substitution,
based on the type of value you provided for it. Pseudo-variables are not
extracted into PHP variables; instead their value is accessed through the pseudo-variable
syntax, where its name is referenced inside braces.

The Parser class uses an associative array internally, to accumulate pseudo-variable
settings until you call its `render()`. This means that your pseudo-variable names
need to be unique, or a later parameter setting will over-ride an earlier one.

This also impacts escaping parameter values for different contexts inside your
script. You will have to give each escaped value a unique parameter name.

### [Parser Templates](#id3)[](#parser-templates "Link to this heading")

You can use the `render()` method to parse (or render) simple templates,
like this:

```
<?php

$data = [
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading',
];

return $parser->setData($data)->render('blog_template');
```

View parameters are passed to `setData()` as an associative
array of data to be replaced in the template.

In the above example, the template would contain two variables: `{blog_title}` and `{blog_heading}`

The first parameter to `render()` contains the name of the template, where
`blog_template` is the name of your view template file.

Important

If the file extension is omitted, then the views are expected to end with the .php extension.

### [Parser Configuration Options](#id4)[](#parser-configuration-options "Link to this heading")

Several options can be passed to the `render()` or `renderString()` methods.

- `cache` - the time in seconds, to save a view’s results; ignored for `renderString()`
- `cache_name` - the ID used to save/retrieve a cached view result; defaults to the viewpath;
  ignored for renderString()
- `saveData` - true if the view data parameters should be retained for subsequent calls;
  default is **true**
- `cascadeData` - true if pseudo-variable settings should be passed on to nested
  substitutions; default is **true**
- `restrictConditionals` - true to allow only simple expressions in conditionals;
  see [Restricting Conditionals](#parser-restricting-conditionals). Defaults to the
  `Config\View::$restrictParserConditionals` value (**false**)

```
<?php

return $parser->render('blog_template', [
    'cache'      => HOUR,
    'cache_name' => 'something_unique',
]);
```

## [Substitution Variations](#id5)[](#substitution-variations "Link to this heading")

There are three types of substitution supported: simple, looping, and nested.
Substitutions are performed in the same sequence that pseudo-variables were added.

The **simple substitution** performed by the parser is a one-to-one
replacement of pseudo-variables where the corresponding data parameter
has either a scalar or string value, as in this example:

```
<?php

$template = '<head><title>{blog_title}</title></head>';
$data     = ['blog_title' => 'My ramblings'];

return $parser->setData($data)->renderString($template);
// Result: <head><title>My ramblings</title></head>
```

Substitution values are treated as data, not as template code. Any Parser
syntax within a value is rendered literally and is not processed by later
substitutions. This also applies to values used inside variable pairs -
the pairs themselves must be defined in the template.

The `Parser` takes substitution a lot further with “variable pairs”,
used for nested substitutions or looping, and with some advanced
constructs for conditional substitution.

When the parser executes, it will generally

- handle any conditional substitutions
- handle any nested/looping substitutions
- handle the remaining single substitutions

### [Loop Substitutions](#id6)[](#loop-substitutions "Link to this heading")

A loop substitution happens when the value for a pseudo-variable is
a sequential array of arrays, like an array of row settings.

The above example code allows simple variables to be replaced. What if
you would like an entire block of variables to be repeated, with each
iteration containing new values? Consider the template example we showed
at the top of the page:

```
<html>
<head>
    <title>{blog_title}</title>
</head>
<body>
    <h3>{blog_heading}</h3>

    {blog_entries}
        <h5>{title}</h5>
        <p>{body}</p>
    {/blog_entries}

</body>
</html>
```

In the above code you’ll notice a pair of variables: `{blog_entries}`
data… `{/blog_entries}`. In a case like this, the entire chunk of data
between these pairs would be repeated multiple times, corresponding to
the number of rows in the “blog\_entries” element of the parameters array.

Parsing variable pairs is done using the identical code shown above to
parse single variables, except, you will add a multi-dimensional array
corresponding to your variable pair data. Consider this example:

```
<?php

$data = [
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading',
    'blog_entries' => [
        ['title' => 'Title 1', 'body' => 'Body 1'],
        ['title' => 'Title 2', 'body' => 'Body 2'],
        ['title' => 'Title 3', 'body' => 'Body 3'],
        ['title' => 'Title 4', 'body' => 'Body 4'],
        ['title' => 'Title 5', 'body' => 'Body 5'],
    ],
];

return $parser->setData($data)->render('blog_template');
```

The value for the pseudo-variable `blog_entries` is a sequential
array of associative arrays. The outer level does not have keys associated
with each of the nested “rows”.

If your “pair” data is coming from a database result, which is already a
multi-dimensional array, you can simply use the database `getResultArray()`
method:

```
<?php

$query = $db->query('SELECT * FROM blog');

$data = [
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading',
    'blog_entries' => $query->getResultArray(),
];

return $parser->setData($data)->render('blog_template');
```

If the array you are trying to loop over contains objects instead of arrays,
the parser will first look for an `asArray()` method on the object. If it exists,
that method will be called and the resulting array is then looped over just as
described above. If no `asArray()` method exists, the object will be cast as
an array and its public properties will be made available to the Parser.

This is especially useful with the Entity classes, which has an `asArray()` method
that returns all public and protected properties (minus the \_options property) and
makes them available to the Parser.

### [Nested Substitutions](#id7)[](#nested-substitutions "Link to this heading")

A nested substitution happens when the value for a pseudo-variable is
an associative array of values, like a record from a database:

```
<?php

$data = [
    'blog_title'   => 'My Blog Title',
    'blog_heading' => 'My Blog Heading',
    'blog_entries' => [
        [
            'title' => 'Title 1',
            'body'  => 'Body 1',
        ],
    ],
];

return $parser->setData($data)->render('blog_template');
```

The value for the pseudo-variable `blog_entries` is an associative
array. The key/value pairs defined inside it will be exposed inside
the variable pair loop for that variable.

A **blog\_template.php** that might work for the above:

```
<h1>{blog_title} - {blog_heading}</h1>
{blog_entries}
    <div>
        <h2>{title}</h2>
        <p>{body}</p>
    </div>
{/blog_entries}
```

If you would like the other pseudo-variables accessible inside the `blog_entries`
scope, then make sure that the `cascadeData` option is set to true.

### [Comments](#id8)[](#comments "Link to this heading")

You can place comments in your templates that will be ignored and removed during parsing by wrapping the
comments in a `{#  #}` symbols.

```
{# This comment is removed during parsing. #}
{blog_entry}
    <div>
        <h2>{title}</h2>
        <p>{body}</p>
    </div>
{/blog_entry}
```

### [Cascading Data](#id9)[](#cascading-data "Link to this heading")

With both a nested and a loop substitution, you have the option of cascading
data pairs into the inner substitution.

The following example is not impacted by cascading:

```
<?php

$template = '{name} lives in {locations}{city} on {planet}{/locations}.';

$data = [
    'name'      => 'George',
    'locations' => [
        ['city' => 'Red City', 'planet' => 'Mars'],
    ],
];

return $parser->setData($data)->renderString($template);
// Result: George lives in Red City on Mars.
```

This example gives different results, depending on cascading:

```
<?php

$template = '{locations}{name} lives in {city} on {planet}{/locations}.';

$data = [
    'name'      => 'George',
    'locations' => [
        ['city' => 'Red City', 'planet' => 'Mars'],
    ],
];

return $parser->setData($data)->renderString($template, ['cascadeData' => false]);
// Result: {name} lives in Red City on Mars.

// or

return $parser->setData($data)->renderString($template, ['cascadeData' => true]);
// Result: George lives in Red City on Mars.
```

### [Preventing Parsing](#id10)[](#preventing-parsing "Link to this heading")

You can specify portions of the page to not be parsed with the `{noparse}` `{/noparse}` tag pair. Anything in this
section will stay exactly as it is, with no variable substitution, looping, etc, happening to the markup between the brackets.

```
{noparse}
    <h1>Untouched Code</h1>
{/noparse}
```

### [Conditional Logic](#id11)[](#conditional-logic "Link to this heading")

The Parser class supports some basic conditionals to handle `if`, `else`, and `elseif` syntax. All `if`
blocks must be closed with an `endif` tag:

```
{if $role=='admin'}
    <h1>Welcome, Admin!</h1>
{endif}
```

This simple block is converted to the following during parsing:

```
<?php if ($role === 'admin'): ?>
    <h1>Welcome, Admin!</h1>
<?php endif ?>
```

All variables used within if statements must have been previously set with the same name. Other than that, it is
treated exactly like a standard PHP conditional, and all standard PHP rules would apply here. You can use any
of the comparison operators you would normally, like `==`, `===`, `!==`, `<`, `>`, etc.

```
{if $role=='admin'}
    <h1>Welcome, Admin</h1>
{elseif $role=='moderator'}
    <h1>Welcome, Moderator</h1>
{else}
    <h1>Welcome, User</h1>
{endif}
```

Values passed through `setData()` can control a conditional in a trusted template:

```
<?php

$parser->setData(['role' => $userData['role']]);

echo $parser->renderString('{if $role === "admin"}Admin{endif}');
```

The value of `$role` is checked by the condition; it is not parsed as PHP source.

Warning

Conditionals are evaluated as PHP expressions using `eval()`. Anyone
who can edit template source can execute PHP code through an `{if ...}` or
`{elseif ...}` tag. Escaping literal PHP tags does not make an untrusted
template safe to render. If less-trusted users can edit templates, for example
email templates composed in your application, enable
[restricted conditionals](#parser-restricting-conditionals).

#### Restricting Conditionals[](#restricting-conditionals "Link to this heading")

Added in version 4.7.5.

Conditionals are not restricted by default. Enable restriction whenever
less-trusted users can edit template source. When restricted, a condition may
only contain:

- variables, except `$this`
- string and number literals, and `true`, `false` and `null`
- the arithmetic operators `+`, `-`, `*`, `/`, `%` and `**`, including unary `+` and `-`
- the comparison operators `==`, `!=`, `<>`, `===`, `!==`, `<`, `>`, `<=` and `>=`
- the logical operators `&&`, `||`, `and`, `or` and `!`
- parentheses for grouping

For example, `{if $vip}`, `{if $role == 'admin'}` and
`{if $total > 100 && ($country == 'GB' || !$guest)}` are allowed. Negative numbers
and simple arithmetic, such as `{if $balance < -10}` or `{if $total + 5 >= 100}`,
are also allowed. Anything else,
such as function calls, constants, property or array access, assignment,
concatenation and string interpolation, throws a `ViewException` before the
template is evaluated.

To restrict conditionals for a single call, pass the `restrictConditionals` option:

```
<?php

$html = $parser->setData(['first_name' => $user->first_name])
    ->renderString($emailTemplate, ['restrictConditionals' => true]);
```

To restrict conditionals by default, set `$restrictParserConditionals` to `true`
in **app/Config/View.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    // ...

    public bool $restrictParserConditionals = true;

    // ...
}
```

You can then allow full PHP conditionals for a trusted template:

```
<?php

return $parser->render('dashboard', ['restrictConditionals' => false]);
```

When a plugin or filter renders another template using the same Parser instance,
the nested render inherits any active restriction. It cannot disable the outer
render’s restriction, even with `restrictConditionals` set to `false`. The
restriction is restored to its previous state when the render finishes or throws
an exception, so it does not affect later independent renders.

Note

Restricting conditionals only limits `{if ...}` and `{elseif ...}`
tags. Pseudo-variables in less-trusted templates can still reference any view
data, and `{! !}` tags output data without escaping. Only pass data the template
author is allowed to see.

#### Changing the Conditional Delimiters[](#changing-the-conditional-delimiters "Link to this heading")

If you have JavaScript code like the following in your templates, the Parser raises a syntax error because there are strings that can be interpreted as a conditional:

```
<script type="text/javascript">
    var f = function() {
        if (hasAlert) {
            alert('{message}');
        }
    }
</script>
```

In that case, you can change the delimiters for conditionals with the `setConditionalDelimiters()` method to avoid misinterpretations:

```
<?php

$parser->setConditionalDelimiters('{%', '%}');
```

In this case, you will write code in your template:

```
{% if $role=='admin' %}
    <h1>Welcome, Admin</h1>
{% else %}
    <h1>Welcome, User</h1>
{% endif %}
```

### [Escaping Data](#id12)[](#escaping-data "Link to this heading")

Variable substitutions without filters are escaped by default to help prevent XSS attacks on your pages.
CodeIgniter’s `esc()` method supports several contexts, such as `html`, `attr`, and `css`.
If no context is specified, the Parser uses `html`. You can specify the context with the `esc` filter:

```
{ user_styles | esc(css) }
<a href="{ user_link | esc(attr) }">{ title }</a>
```

When a substitution uses one or more filters, the Parser does not add an `esc` filter automatically.
This also applies when a context is specified with `setData()` or `setVar()`.
Add `esc` explicitly when filtering untrusted data. Filters run from left to right, so its position matters:

```
{ title|capitalize|esc }
{ body|esc|nl2br }
```

In the second example, `esc` escapes the input before `nl2br` adds HTML `<br>` tags.
Escaping after `nl2br` would display those tags as text.
Unknown filter names are ignored, but still prevent automatic escaping; check filter names carefully.

To disable automatic escaping for a substitution without filters, add exclamation marks to its delimiters:

```
{! unescaped_var !}
```

### [Filters](#id13)[](#filters "Link to this heading")

Any single variable substitution can have one or more filters applied to it to modify the way it is presented. These
are not intended to drastically change the output, but provide ways to reuse the same variable data but with different
presentations. The `esc` filter discussed above is one example. Dates are another common use case, where you might
need to format the same data differently in several sections on the same page.

Filters are commands that come after the pseudo-variable name, and are separated by the pipe symbol, `|`:

```
// -55 is displayed as 55
{ value|abs }
```

If the parameter takes any arguments, they must be separated by commas and enclosed in parentheses:

```
{ created_at|date(Y-m-d) }
```

Multiple filters can be applied to the value by piping multiple ones together. They are processed in order, from
left to right:

```
{ created_at|date_modify(+5 days)|date(Y-m-d) }
```

#### Provided Filters[](#provided-filters "Link to this heading")

The following filters are available when using the parser:

| Filter | Arguments | Description | Example |
| --- | --- | --- | --- |
| abs |  | Displays the absolute value of a number. | { v|abs } |
| capitalize |  | Displays the string in sentence case: all lowercase with firstletter capitalized. | { v|capitalize} |
| date | format (Y-m-d) | A PHP **date**-compatible formatting string. | { v|date(Y-m-d) } |
| date\_modify | value to add / subtract | A **strtotime** compatible string to modify the date, like `+5 day` or `-1 week`. | { v|date\_modify(+1 day) } |
| default | default value | Displays the default value if the variable is [empty()](https://www.php.net/manual/en/function.empty.php). | { v|default(just in case) } |
| esc | html, attr, css, js | Specifies the context to escape the data. | { v|esc(attr) } |
| excerpt | phrase, radius | Returns the text within a radius of words from a given phrase. Same as **excerpt** helper function. | { v|excerpt(green giant, 20) } |
| highlight | phrase | Highlights a given phrase within the text using ‘<mark></mark>’ tags. | { v|highlight(view parser) } |
| highlight\_code |  | Highlights code samples with HTML/CSS. | { v|highlight\_code } |
| limit\_chars | limit | Limits the number of characters to $limit. | { v|limit\_chars(100) } |
| limit\_words | limit | Limits the number of words to $limit. | { v|limit\_words(20) } |
| local\_currency | currency, locale, fraction | Displays a localized version of a currency. “currency” valueis any 3-letter ISO 4217 currency code. | { v|local\_currency(EUR,en\_US) } |
| local\_number | type, precision, locale | Displays a localized version of a number. “type” can be one of: decimal, currency, percent, scientific, spellout, ordinal, duration. | { v|local\_number(decimal,2,en\_US) } |
| lower |  | Converts a string to lowercase. | { v|lower } |
| nl2br |  | Replaces all newline characters (n) to an HTML <br/> tag. | { v|nl2br } |
| number\_format | places | Wraps PHP **number\_format** function for use within the parser. | { v|number\_format(3) } |
| prose |  | Takes a body of text and uses the **auto\_typography()** method to turn it into prettier, easier-to-read, prose. | { v|prose } |
| round | places, type | Rounds a number to the specified places. Types of **ceil** and **floor** can be passed to use those functions instead. | { v|round(3) } { v|round(ceil) } |
| strip\_tags | allowed chars | Wraps PHP **strip\_tags**. Can accept a string of allowed tags. | { v|strip\_tags(<br>) } |
| title |  | Displays a “title case” version of the string, with all lowercase, and each word capitalized. | { v|title } |
| upper |  | Displays the string in all uppercase. | { v|upper } |

See [PHP’s NumberFormatter](https://www.php.net/manual/en/numberformatter.create.php) for details relevant to the
“local\_number” filter.

#### Custom Filters[](#custom-filters "Link to this heading")

You can easily create your own filters by editing **app/Config/View.php** and adding new entries to the
`$filters` array. Each key is the name which the filter is called by in the view, and its value is any valid PHP
callable:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    public $filters = [
        'foo'        => '\Some\Class::methodName',
        'str_repeat' => 'str_repeat', // native php function
    ];

    // ...
}
```

Closures are also supported. When configuring a closure in **app/Config/View.php**,
assign it in the constructor.

### [Parser Plugins](#id14)[](#parser-plugins "Link to this heading")

Plugins allow you to extend the parser, adding custom features for each project. They can be any PHP callable, making
them very simple to implement. Within templates, plugins are specified by `{+ +}` tags:

```
{+ foo +} inner content {+ /foo +}
```

This example shows a plugin named **foo**. It can manipulate any of the content between its opening and closing tags.
In this example, it could work with the text “ inner content “. Plugins are processed before any pseudo-variable
replacements happen.

The output of built-in plugins is treated as rendered data. Parser syntax within
that output is not processed by later plugins or variable substitutions.
Custom plugins can still return template code for further processing and must not
introduce untrusted data as Parser syntax.

While plugins will often consist of tag pairs, like shown above, they can also be a single tag, with no closing tag:

```
{+ foo +}
```

Opening tags can also contain parameters that can customize how the plugin works. The parameters are represented as
key/value pairs:

```
{+ foo bar=2 baz="x y" +}
```

Parameters can also be single values:

```
{+ include somefile.php +}
```

#### Provided Plugins[](#provided-plugins "Link to this heading")

The following plugins are available when using the parser:

| Plugin | Arguments | Description | Example |
| --- | --- | --- | --- |
| current\_url |  | Alias for the current\_url helper function. | `{+ current_url +}` |
| previous\_url |  | Alias for the previous\_url helper function. | `{+ previous_url +}` |
| siteURL |  | Alias for the site\_url helper function. | `{+ siteURL "login" +}` |
| mailto | email, title, attributes | Alias for the mailto helper function. | `{+ mailto email=foo@example.com title="Stranger Things" +}` |
| safe\_mailto | email, title, attributes | Alias for the safe\_mailto helper function. | `{+ safe_mailto email=foo@example.com title="Stranger Things" +}` |
| lang | language string | Alias for the lang helper function. | `{+ lang number.terabyteAbbr +}` |
| validation\_errors | fieldname(optional) | Returns either error string for the field (if specified) or all validation errors. | `{+ validation_errors +} , {+ validation_errors field="email" +}` |
| route | route name | Alias for the route\_to helper function. | `{+ route "login" +}` |
| csp\_script\_nonce |  | Alias for the csp\_script\_nonce helper function. | `{+ csp_script_nonce +}` |
| csp\_style\_nonce |  | Alias for the csp\_style\_nonce helper function. | `{+ csp_style_nonce +}` |

#### Registering a Plugin[](#registering-a-plugin "Link to this heading")

At its simplest, all you need to do to register a new plugin and make it ready for use is to add it to the
**app/Config/View.php**, under the `$plugins` array. The key is the name of the plugin that is
used within the template file. The value is any valid PHP callable, including static class methods:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    public $plugins = [
        'foo' => '\Some\Class::methodName',
    ];

    // ...
}
```

You can also use closures, but these can only be defined in the config file’s constructor:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    public $plugins = [];

    public function __construct()
    {
        $this->plugins['bar'] = static fn (array $params = []) => $params[0] ?? '';

        parent::__construct();
    }

    // ...
}
```

If the callable is on its own, it is treated as a single tag, not an open/close one. It will be replaced by
the return value from the plugin:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    public $plugins = [
        'foo' => '\Some\Class::methodName',
    ];

    // ...
}

/*
 * Tag is replaced by the return value of Some\Class::methodName() static function.
 * {+ foo +}
 */
```

If the callable is wrapped in an array, it is treated as an open/close tag pair that can operate on any of
the content between its tags:

```
<?php

namespace Config;

use CodeIgniter\Config\View as BaseView;

class View extends BaseView
{
    public $plugins = [
        'foo' => ['\Some\Class::methodName'],
    ];

    // ...
}

// {+ foo +} inner content {+ /foo +}
```

## [Usage Notes](#id15)[](#usage-notes "Link to this heading")

If you include substitution parameters that are not referenced in your
template, they are ignored:

```
<?php

$template = 'Hello, {firstname} {lastname}';
$data     = [
    'title'     => 'Mr',
    'firstname' => 'John',
    'lastname'  => 'Doe',
];

return $parser->setData($data)->renderString($template);
// Result: Hello, John Doe
```

If you do not include a substitution parameter that is referenced in your
template, the original pseudo-variable is shown in the result:

```
<?php

$template = 'Hello, {firstname} {initials} {lastname}';
$data     = [
    'title'     => 'Mr',
    'firstname' => 'John',
    'lastname'  => 'Doe',
];

return $parser->setData($data)->renderString($template);
// Result: Hello, John {initials} Doe
```

If you provide a string substitution parameter when an array is expected,
i.e., for a variable pair, the substitution is done for the opening variable
pair tag, but the closing variable pair tag is not rendered properly:

```
<?php

$template = 'Hello, {firstname} {lastname} ({degrees}{degree} {/degrees})';
$data     = [
    'degrees'   => 'Mr',
    'firstname' => 'John',
    'lastname'  => 'Doe',
    'titles'    => [
        ['degree' => 'BSc'],
        ['degree' => 'PhD'],
    ],
];

return $parser->setData($data)->renderString($template);
// Result: Hello, John Doe (Mr{degree} {/degrees})
```

### [View Fragments](#id16)[](#view-fragments "Link to this heading")

You do not have to use variable pairs to get the effect of iteration in
your views. It is possible to use a view fragment for what would be inside
a variable pair, and to control the iteration in your controller instead
of in the view.

An example with the iteration controlled in the view:

```
$template = '<ul>{menuitems}
    <li><a href="{link}">{title}</a></li>
{/menuitems}</ul>';

$data = [
    'menuitems' => [
        ['title' => 'First Link', 'link' => '/first'],
        ['title' => 'Second Link', 'link' => '/second'],
    ]
];

return $parser->setData($data)->renderString($template);
```

Result:

```
<ul>
    <li><a href="/first">First Link</a></li>
    <li><a href="/second">Second Link</a></li>
</ul>
```

An example with the iteration controlled in the controller,
using a view fragment:

```
<?php

$temp      = '';
$template1 = '<li><a href="{link}">{title}</a></li>';
$data1     = [
    ['title' => 'First Link', 'link' => '/first'],
    ['title' => 'Second Link', 'link' => '/second'],
];

foreach ($data1 as $menuItem) {
    $temp .= $parser->setData($menuItem)->renderString($template1);
}

$template2 = '<ul>{menuitems}</ul>';
$data      = [
    'menuitems' => $temp,
];

return $parser->setData($data)->renderString($template2);
```

Result:

```
<ul>
    <li><a href="/first">First Link</a></li>
    <li><a href="/second">Second Link</a></li>
</ul>
```

## [Class Reference](#id17)[](#class-reference "Link to this heading")

*class* CodeIgniter\View\Parser[](#CodeIgniter\View\Parser "Link to this definition")
:   render(*$view*[, *$options*[, *$saveData*]])[](#CodeIgniter\View\Parser::render "Link to this definition")
    :   Parameters:
        :   - **$view** (`string`) – File name of the view source
            - **$options** (`array`) – Array of options, as key/value pairs
            - **$saveData** (`boolean`) – If true, will save data for use with any other calls, if false, will clean the data after rendering the view.

        Returns:
        :   The rendered text for the chosen view

        Return type:
        :   `string`

        Builds the output based upon a file name and any data that has already been set:

        ```
        <?php

        return $parser->render('myview');
        ```

        Options supported:

        > - `cache` - the time in seconds, to save a view’s results
        > - `cache_name` - the ID used to save/retrieve a cached view result; defaults to the viewpath
        > - `cascadeData` - true if the data pairs in effect when a nested or loop substitution occurs should be propagated
        > - `saveData` - true if the view data parameter should be retained for subsequent calls

        Any conditional substitutions are performed first, then remaining
        substitutions are performed for each data pair.

    renderString(*$template*[, *$options*[, *$saveData*]])[](#CodeIgniter\View\Parser::renderString "Link to this definition")
    :   Parameters:
        :   - **$template** (`string`) – Trusted view source provided as a string
            - **$options** (`array`) – Array of options, as key/value pairs
            - **$saveData** (`boolean`) – If true, will save data for use with any other calls, if false, will clean the data after rendering the view.

        Returns:
        :   The rendered text for the chosen view

        Return type:
        :   `string`

        Builds the output based upon a provided template source and any data that has already been set:

        ```
        <?php

        return $parser->renderString('<ul><li>Item 1</li><li>Item 2</li></ul>');
        ```

        Never build the template source from user-provided content. Pass it as
        data through `setData()` instead, or
        [restrict conditionals](#parser-restricting-conditionals) if users are
        meant to edit the template:

        ```
        <?php

        // Unsafe: $name becomes part of the template source.
        echo $parser->renderString('Hello ' . $name);

        // Safe: $name is passed as data.
        echo $parser->setData(['name' => $name])->renderString('Hello {name}');
        ```

        Options supported, and behavior, as above.

    setData([*$data*[, *$context = null*]])[](#CodeIgniter\View\Parser::setData "Link to this definition")
    :   Parameters:
        :   - **$data** (`array`) – Array of view data strings, as key/value pairs
            - **$context** (`string`) – The context to use for data escaping.

        Returns:
        :   The Renderer, for method chaining

        Return type:
        :   `CodeIgniter\View\RendererInterface.`

        Sets several pieces of view data at once:

        ```
        <?php

        $parser->setData(['name' => 'George', 'position' => 'Boss']);
        ```

        Supported escape contexts: html, css, js, url, or attr or raw.
        If ‘raw’, no escaping will happen.

    setVar(*$name*[, *$value = null*[, *$context = null*]])[](#CodeIgniter\View\Parser::setVar "Link to this definition")
    :   Parameters:
        :   - **$name** (`string`) – Name of the view data variable
            - **$value** (`mixed`) – The value of this view data
            - **$context** (`string`) – The context to use for data escaping.

        Returns:
        :   The Renderer, for method chaining

        Return type:
        :   `CodeIgniter\View\RendererInterface.`

        Sets a single piece of view data:

        ```
        <?php

        $parser->setVar('name', 'Joe', 'html');
        ```

        Supported escape contexts: html, css, js, url, attr or raw.
        If ‘raw’, no escaping will happen.

    setDelimiters(*$leftDelimiter = '{'*, *$rightDelimiter = '}'*)[](#CodeIgniter\View\Parser::setDelimiters "Link to this definition")
    :   Parameters:
        :   - **$leftDelimiter** (`string`) – Left delimiter for substitution fields
            - **$rightDelimiter** (`string`) – right delimiter for substitution fields

        Returns:
        :   The Renderer, for method chaining

        Return type:
        :   `CodeIgniter\View\RendererInterface.`

        Override the substitution field delimiters:

        ```
        <?php

        $parser->setDelimiters('[', ']');
        ```

    setConditionalDelimiters(*$leftDelimiter = '{'*, *$rightDelimiter = '}'*)[](#CodeIgniter\View\Parser::setConditionalDelimiters "Link to this definition")
    :   Parameters:
        :   - **$leftDelimiter** (`string`) – Left delimiter for conditionals
            - **$rightDelimiter** (`string`) – right delimiter for conditionals

        Returns:
        :   The Renderer, for method chaining

        Return type:
        :   `CodeIgniter\View\RendererInterface.`

        Override the conditional delimiters:

        ```
        <?php

        $parser->setConditionalDelimiters('{%', '%}');
        ```
