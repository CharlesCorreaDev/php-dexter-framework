# Config Schema - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/dev-config-schema.html

---

# Config Schema

Filed under Development

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

HTML Purifier has a fairly complex system for configuration. Users
interact with a `HTMLPurifier_Config` object to
set configuration directives. The values they set are validated according
to a configuration schema, `HTMLPurifier_ConfigSchema`.

The schema is mostly transparent to end-users, but if you're doing development
work for HTML Purifier and need to define a new configuration directive,
you'll need to interact with it. We'll also talk about how to define
userspace configuration directives at the very end.

## Write a directive file

Directive files define configuration directives to be used by
HTML Purifier. They are placed in `library/HTMLPurifier/ConfigSchema/schema/`
in the form `Namespace.Directive.txt` (I
couldn't think of a more descriptive file extension.)
Directive files are actually what we call `StringHash`es,
i.e. associative arrays represented in a string form reminiscent of
[PHPT](http://qa.php.net/write-test.php) tests. Here's a
sample directive file, `Test.Sample.txt`:

```
Test.Sample
TYPE: string/null
DEFAULT: NULL
ALLOWED: 'foo', 'bar'
VALUE-ALIASES: 'baz' => 'bar'
VERSION: 3.1.0
--DESCRIPTION--
This is a sample configuration directive for the purposes of the
<code>dev-config-schema.html<code> documentation.
--ALIASES--
Test.Example
```

Each of these segments has a specific meaning:

| Key | Example | Description |
| --- | --- | --- |
| ID | Test.Sample | The name of the directive, in the form Namespace.Directive (implicitly the first line) |
| TYPE | string/null | The type of variable this directive accepts. See below for details. You can also add `/null` to the end of any basic type to allow null values too. |
| DEFAULT | NULL | A parseable PHP expression of the default value. |
| DESCRIPTION | This is a... | An HTML description of what this directive does. |
| VERSION | 3.1.0 | *Recommended*. The version of HTML Purifier this directive was added. Directives that have been around since 1.0.0 don't have this, but any new ones should. |
| ALIASES | Test.Example | *Optional*. A comma separated list of aliases for this directive. This is most useful for backwards compatibility and should not be used otherwise. |
| ALLOWED | 'foo', 'bar' | *Optional*. Set of allowed value for a directive, a comma separated list of parseable PHP expressions. This is only allowed string, istring, text and itext TYPEs. |
| VALUE-ALIASES | 'baz' => 'bar' | *Optional*. Mapping of one value to another, and should be a comma separated list of keypair duples. This is only allowed string, istring, text and itext TYPEs. |
| DEPRECATED-VERSION | 3.1.0 | *Not shown*. Indicates that the directive was deprecated this version. |
| DEPRECATED-USE | Test.NewDirective | *Not shown*. Indicates what new directive should be used instead. Note that the directives will functionally be different, although they should offer the same functionality. If they are identical, use an alias instead. |
| EXTERNAL | CSSTidy | *Not shown*. Indicates if there is an external library the user will need to download and install to use this configuration directive. As of right now, this is merely a Google-able name; future versions may also provide links and instructions. |

Some notes on format and style:

- Each of these keys can be expressed in the short format
  (`KEY: Value`) or the long format
  (`--KEY--` with value beneath). You must use the
  long format if multiple lines are needed, or if a long format
  has been used already (that's why `ALIASES` in our
  example is in the long format); otherwise, it's user preference.
- The HTML descriptions should be wrapped at about 80 columns; do
  not rely on editor word-wrapping.

Also, as promised, here is the set of possible types:

| Type | Example | Description |
| --- | --- | --- |
| string | 'Foo' | [String](http://docs.php.net/manual/en/language.types.string.php) without newlines |
| istring | 'foo' | Case insensitive ASCII string without newlines |
| text | "A*\n*b" | String with newlines |
| itext | "a*\n*b" | Case insensitive ASCII string without newlines |
| int | 23 | Integer |
| float | 3.0 | Floating point number |
| bool | true | Boolean |
| lookup | array('key' => true) | Lookup array, used with `isset($var[$key])` |
| list | array('f', 'b') | List array, with ordered numerical indexes |
| hash | array('key' => 'val') | Associative array of keys to values |
| mixed | new stdclass | Any PHP variable is fine |

The examples represent what will be returned out of the configuration
object; users have a little bit of leeway when setting configuration
values (for example, a lookup value can be specified as a list;
HTML Purifier will flip it as necessary.) These types are defined
in [library/HTMLPurifier/VarParser.php](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/VarParser.php).

For more information on what values are allowed, and how they are parsed,
consult [library/HTMLPurifier/ConfigSchema/InterchangeBuilder.php](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/ConfigSchema/InterchangeBuilder.php), as well
as [library/HTMLPurifier/ConfigSchema/Interchange/Directive.php](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/ConfigSchema/Interchange/Directive.php) for
the semantics of the parsed values.

## Refreshing the cache

You may have noticed that your directive file isn't doing anything
yet. That's because it hasn't been added to the runtime
`HTMLPurifier_ConfigSchema` instance. Run
`maintenance/generate-schema-cache.php` to fix this.
If there were no errors, you're good to go! Don't forget to add
some unit tests for your functionality!

If you ever make changes to your configuration directives, you
will need to run this script again.

## Adding in-house schema definitions

Placing stuff directly in HTML Purifier's source tree is generally not a
good idea, so HTML Purifier 4.0.0+ has some facilities in place to make your
life easier.

The first is to pass an extra parameter to `maintenance/generate-schema-cache.php`
with the location of your directory (relative or absolute path will do). For example,
if I'm storing my custom definitions in */var/htmlpurifier/myschema*, run:
`php maintenance/generate-schema-cache.php /var/htmlpurifier/myschema`.

Alternatively, you can create a small loader PHP file in the HTML Purifier base
directory named `config-schema.php` (this is the same directory
you would place a `test-settings.php` file). In this file, add
the following line for each directory you want to load:

```
$builder->buildDir($interchange, '/var/htmlpurifier/myschema');
```

You can even load a single file using:

```
$builder->buildFile($interchange, '/var/htmlpurifier/myschema/MyApp.Directive.txt');
```

Storing custom definitions that you don't plan on sending back upstream in
a separate directory is *definitely* a good idea! Additionally, picking
a good namespace can go a long way to saving you grief if you want to use
someone else's change, but they picked the same name, or if HTML Purifier
decides to add support for a configuration directive that has the same name.

## Errors

All directive files go through a rigorous validation process
through [library/HTMLPurifier/ConfigSchema/Validator.php](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/ConfigSchema/Validator.php), as well
as some basic checks during building. While
listing every error out here is out-of-scope for this document, we
can give some general tips for interpreting error messages.
There are two types of errors: builder errors and validation errors.

### Builder errors

> **Exception:** Expected type string, got
> integer in DEFAULT in directive hash 'Ns.Dir'

You can identify a builder error by the keyword "directive hash."
These are the easiest to deal with, because they directly correspond
with your directive file. Find the offending directive file (which
is the directive hash plus the .txt extension), find the
offending index ("in DEFAULT" means the DEFAULT key) and fix the error.
This particular error would occur if your default value is not the same
type as TYPE.

### Validation errors

> **Exception:** Alias 3 in valueAliases in directive
> 'Ns.Dir' must be a string

These are a little trickier, because we're not actually validating
your directive file, or even the direct string hash representation.
We're validating an Interchange object, and the error messages do
not mention any string hash keys.

Nevertheless, it's not difficult to figure out what went wrong.
Read the "context" statements in reverse:

in directive 'Ns.Dir'
:   This means we need to look at the directive file `Ns.Dir.txt`

in valueAliases
:   There's no key actually called this, but there's one that's close:
    VALUE-ALIASES. Indeed, that's where to look.

Alias 3
:   The value alias that is equal to 3 is the culprit.

In this particular case, you're not allowed to alias integers values to
strings values.

The most difficult part is translating the Interchange member variable (valueAliases)
into a directive file key (VALUE-ALIASES), but there's a one-to-one
correspondence currently. If the two formats diverge, any discrepancies
will be described in [library/HTMLPurifier/ConfigSchema/InterchangeBuilder.php](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/ConfigSchema/InterchangeBuilder.php).

## Internals

Much of the configuration schema framework's codebase deals with
shuffling data from one format to another, and doing validation on this
data.
The keystone of all of this is the `HTMLPurifier_ConfigSchema_Interchange`
class, which represents the purest, parsed representation of the schema.

Hand-writing this data is unwieldy, however, so we write directive files.
These directive files are parsed by `HTMLPurifier_StringHashParser`
into `HTMLPurifier_StringHash`es, which then
are run through `HTMLPurifier_ConfigSchema_InterchangeBuilder`
to construct the interchange object.

From the interchange object, the data can be siphoned into other forms
using `HTMLPurifier_ConfigSchema_Builder` subclasses.
For example, `HTMLPurifier_ConfigSchema_Builder_ConfigSchema`
generates a runtime `HTMLPurifier_ConfigSchema` object,
which `HTMLPurifier_Config` uses to validate its incoming
data. There is also an XML serializer, which is used to build documentation.
