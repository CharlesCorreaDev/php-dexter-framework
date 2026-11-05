# Activation / Deactivation Hooks – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/plugin-basics/activation-deactivation-hooks/

---

# Activation / Deactivation Hooks

## In this article

Table of Contents

- [Activation](#activation)
- [Deactivation](#deactivation)
- [Example](#example)

Copy page
[View as Markdown](dev_plugins__plugin-basics__activation-deactivation-hooks.md)

[Back to top](#wp--skip-link--target)

Activation and deactivation hooks provide ways to perform actions when plugins are activated or deactivated.

- On *activation*, plugins can run a routine to add rewrite rules, add custom database tables, or set default option values.
- On *deactivation*, plugins can run a routine to remove temporary data such as cache and temp files and directories.

The deactivation hook is sometimes confused with the [uninstall hook](dev_plugins__plugin-basics__uninstall-methods.md). The uninstall hook is best suited to **delete all data permanently** such as deleting plugin options and custom tables, etc.

## [Activation](#activation)

To set up an activation hook, use the [register\_activation\_hook()](https://developer.wordpress.org/reference/functions/register_activation_hook/) function:

```
register_activation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
```

## [Deactivation](#deactivation)

To set up a deactivation hook, use the [register\_deactivation\_hook()](https://developer.wordpress.org/reference/functions/register_deactivation_hook/) function:

```
register_deactivation_hook(
	__FILE__,
	'pluginprefix_function_to_run'
);
```

The first parameter in each of these functions refers to your main plugin file, which is the file in which you have placed the [plugin header comment](dev_plugins__the-basics__header-requirements.md). Usually these two functions will be triggered from within the main plugin file; however, if the functions are placed in any other file, you must update the first parameter to correctly point to the main plugin file.

## [Example](#example)

One of the most common uses for an activation hook is to refresh WordPress permalinks when a plugin registers a custom post type. This gets rid of the nasty 404 errors.

Let’s look at an example of how to do this:

```
/**
 * Register the "book" custom post type
 */
function pluginprefix_setup_post_type() {
	register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );

/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
	// Trigger our function that registers the custom post type plugin.
	pluginprefix_setup_post_type(); 
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
```

If you are unfamiliar with registering custom post types, don’t worry – this will be covered later. This example is used simply because it’s very common.

Using the example from above, the following is how to reverse this process and deactivate a plugin:

```
/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'book' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );
```

For further information regarding activation and deactivation hooks, here are some excellent resources:

- [register\_activation\_hook()](https://developer.wordpress.org/reference/functions/register_activation_hook/) in the WordPress function reference.
- [register\_deactivation\_hook()](https://developer.wordpress.org/reference/functions/register_deactivation_hook/) in the WordPress function reference.

First published

September 16, 2014

Last updated

February 20, 2024

[Previous
Header Requirements
Previous: Header Requirements](dev_plugins__plugin-basics__header-requirements.md)

[Next
Best Practices
Next: Best Practices](dev_plugins__plugin-basics__best-practices.md)
