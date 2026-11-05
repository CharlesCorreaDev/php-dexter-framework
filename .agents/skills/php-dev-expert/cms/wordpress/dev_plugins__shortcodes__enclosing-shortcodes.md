# Enclosing Shortcodes – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/shortcodes/enclosing-shortcodes/

---

# Enclosing Shortcodes

## In this article

Table of Contents

- [Enclosing Content](#enclosing-content)
- [Processing Enclosed Content](#processing-enclosed-content)
- [Shortcode-ception](#shortcode-ception)
- [Limitations](#limitations)

Copy page
[View as Markdown](dev_plugins__shortcodes__enclosing-shortcodes.md)

[Back to top](#wp--skip-link--target)

The are two scenarios for using shortcodes:

- The shortcode is a self-closing tag like we seen in the [Basic Shortcodes](dev_plugins__shortcodes__basic-shortcodes.md) section.
- The shortcode is enclosing content.

## [Enclosing Content](#enclosing-content)

Enclosing content with a shortcode allows manipulations on the enclosed content.

```
[wporg]content to manipulate[/wporg]
```

As seen above, all you need to do in order to enclose a section of content is add a beginning `[$tag]` and an end `[/$tag]`, similar to HTML.

## [Processing Enclosed Content](#processing-enclosed-content)

Lets get back to our original [wporg] shortcode code:

```
function wporg_shortcode( $atts = array(), $content = null ) {
    // do something to $content
    // always return
    return $content;
}
add_shortcode( 'wporg', 'wporg_shortcode' );
```

Looking at the callback function we see that we chose to accept two parameters, `$atts` and `$content`. The `$content` parameter is going to hold our enclosed content. We will talk about `$atts` later.

The default value of `$content` is set to `null` so we can differentiate between a self-closing tag and enclosing tags by using PHP function [is\_null()](http://php.net/is_null).

The shortcode `[$tag]`, including its content and the end `[/$tag]` will be replaced with the **return value** of the handler function.

It is the responsibility of the handler function to [secure the output](dev_plugins__security__securing-output.md).

## [Shortcode-ception](#shortcode-ception)

The shortcode parser performs a **single pass** on the content of the post.

This means that if the `$content` parameter of a shortcode handler contains another shortcode, it won’t be parsed. In this example, `[shortcode]` will not be processed:

```
[wporg]another [shortcode] is included[/wporg]
```

Using shortcodes inside other shortcodes is possible by calling `do_shortcode()` on the **final return value** of the handler function.

```
```
function wporg_shortcode( $atts = array(), $content = null ) {
	// do something to $content
	// run shortcode parser recursively
	$content = do_shortcode( $content );
	// always return
	return $content;
}
add_shortcode( 'wporg', 'wporg_shortcode' );
```
```

## [Limitations](#limitations)

The shortcode parser is unable to handle mixing of enclosing and non-enclosing forms of the same `[$tag]`.

```
[wporg] non-enclosed content [wporg]enclosed content[/wporg]
```

Instead of being treated as two shortcodes separated by the text “`non-enclosed content`“, the parser treats this as a single shortcode enclosing “`non-enclosed content [wporg]enclosed content`“.

First published

September 18, 2014

Last updated

November 17, 2022

[Previous
Basic Shortcodes
Previous: Basic Shortcodes](dev_plugins__shortcodes__basic-shortcodes.md)

[Next
Shortcodes with Parameters
Next: Shortcodes with Parameters](dev_plugins__shortcodes__shortcodes-with-parameters.md)
