# Plugin API Hooks – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/advanced-topics/plugin-api-hooks/

---

# Plugin API Hooks

Copy page
[View as Markdown](dev_themes__advanced-topics__plugin-api-hooks.md)

[Back to top](#wp--skip-link--target)

A theme should work well with WordPress plugins. Plugins add functionality by using actions and filters, which are collectively called hooks (see [Plugin API](https://codex.wordpress.org/Plugin_API "Plugin API") for more information).

Most hooks are executed internally by WordPress, so your theme does not need special tags for them to work. However, a few hooks need to be included in your theme templates. These hooks are fired by special Template Tags:

[wp\_head()](https://developer.wordpress.org/reference/functions/wp_head/ "Function Reference/wp head")
:   Goes at the end of the <head> element of a theme’s *header.php* template file.

[wp\_body\_open()](https://developer.wordpress.org/reference/functions/wp_body_open/ "Function Reference/wp head")
:   Goes at the begining of the <body> element of a theme’s *header.php* template file.

[wp\_footer()](https://developer.wordpress.org/reference/functions/wp_footer/ "Function Reference/wp footer")
:   Goes in *footer.php*, just before the closing </body> tag.

[wp\_meta()](https://developer.wordpress.org/reference/functions/wp_meta/ "Function Reference/wp meta")
:   Typically goes in the <li>Meta</li> section of a Theme’s menu or sidebar.

[comment\_form()](https://developer.wordpress.org/reference/functions/comment_form/ "Function Reference/comment form")
:   Goes in *comments.php* directly before the file’s closing tag (</div>).

Take a look at a core theme’s templates for examples of how these hooks are used.

First published

October 23, 2014

Last updated

January 26, 2024

[Previous
Theme Testing
Previous: Theme Testing](dev_themes__advanced-topics__theme-testing.md)

[Next
UI Best Practices
Next: UI Best Practices](dev_themes__advanced-topics__ui-best-practices.md)
