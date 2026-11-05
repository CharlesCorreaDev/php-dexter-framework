# Basic Shortcodes – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/shortcodes/basic-shortcodes/

---

# Basic Shortcodes

## In this article

Table of Contents

- [Add a Shortcode](#add-a-shortcode)
- [Remove a Shortcode](#remove-a-shortcode)
- [Check if a Shortcode Exists](#check-if-a-shortcode-exists)

Copy page
[View as Markdown](dev_plugins__shortcodes__basic-shortcodes.md)

[Back to top](#wp--skip-link--target)

## [Add a Shortcode](#add-a-shortcode)

It is possible to add your own shortcodes by using the Shortcode API. The process involves registering a callback `$func` to a shortcode `$tag` using `add_shortcode()`.

```
add_shortcode(
    string $tag,
    callable $func
);
```

`[wporg]` is your new shortcode. The use of the shortcode will trigger the `wporg_shortcode` callback function.

```
add_shortcode('wporg', 'wporg_shortcode');
function wporg_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
    return $content;
}
```

## [Remove a Shortcode](#remove-a-shortcode)

It is possible to remove shortcodes by using the Shortcode API. The process involves removing a registered `$tag` using [remove\_shortcode()](https://developer.wordpress.org/reference/functions/remove_shortcode/) .

```
remove_shortcode(
    string $tag
);
```

Make sure that the shortcode have been registered before attempting to remove. Specify a higher priority number for [add\_action()](https://developer.wordpress.org/reference/functions/add_action/) or hook into an action hook that is run later.

## [Check if a Shortcode Exists](#check-if-a-shortcode-exists)

To check whether a shortcode has been registered use `shortcode_exists()`.

First published

September 18, 2014

Last updated

November 17, 2022

[Previous
Shortcodes
Previous: Shortcodes](dev_plugins__shortcodes.md)

[Next
Enclosing Shortcodes
Next: Enclosing Shortcodes](dev_plugins__shortcodes__enclosing-shortcodes.md)
