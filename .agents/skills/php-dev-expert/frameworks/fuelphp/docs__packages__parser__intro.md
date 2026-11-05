# Introduction - Parser Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/parser/intro.html

---

## Parser package

The Parser package extends the Core View class to be able to use any type of template parser you want.

## Introduction

The Parser package changes nothing about the way you work with Views, but it will allow you to
use any template parser you want instead of PHP. The package comes with many drivers for parsers like
Dwoo, Haml, Jade, Lex, Markdown, Mustache, PHPTal, Smarty and Twig.

Which parser is used is determined by the file extension of your view file. Normal views, parsed by PHP
use the file extension `.php`. This is also the default, if no extension is specified, it is
assumed to have the `.php` extension.

All others have their own specific extension, for example `foo.mustache` will use the Mustache
driver, `foo.tpl` will use the Dwoo driver, `foo.lex` will use the Lex driver, and
so on. The default extension can be changed in config).

### Installation

The Parser package is included in the Fuel download. To use it you must first enable it by adding
it to your config:

```
'always_load' => array(
	'packages' => array(
		'parser',
	),
),
```

To be able to use one of the supported parsers, you need to install them via composer.
Simply add the libraries to your project's `composer.json` then run `php composer.phar install`:

```
{
    "require": {
        "dwoo/dwoo" : "*",
        "mustache/mustache" : "*",
        "smarty/smarty" : "*",
        "twig/twig" : "*",
        "mthaml/mthaml": "*",
		"pyrocms/lex": "*"
    }
}
```

Note that the Markdown parser is installed by default, as it is also used by the FuelPHP core class `Markdown`.

Libraries that can not be installed through composer are expected to be installed in `APPPATH/vendor/lib_name`
(capitalize lib\_name), and you'll have to download them yourself. Don't change the casing or anything, keep it as
much original as possible within the `vendor/lib_name` dir to keep updating easy (also because some come with
their own autoloader).

### Configuration

Parser can be configured in a config/parser.php file and takes the following keys:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| extensions | array | (array with extensions and View class which parses them) | Defines which extensions are valid and what their View driver is.  ex: 'md' => 'View\_Markdown' |

For every View driver supported, the configuration file contains a array entry with
the same name as the driver, which lists the driver specific configuration (limited
to the configuration items supported by the driver. This may be a subset of all
configuration the parser supports).

### Runtime Configuration

All drivers have a `parser()` method that will allow you to access the current
Parser object. This is a convention and not a requirement and might be different on 3rd party
drivers.

```
// Clear the cache for a specific Smarty template
$view = View::forge('example.smarty');
$view->parser()->clearCache('example.smarty');

// Example static usage
View_Smarty::parser()->clearCache('example.smarty');
```

This can also be used when you need to pass custom configuration to the driver.
