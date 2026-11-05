# Required Theme Files – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/releasing-your-theme/required-theme-files/

---

# Required Theme Files

Copy page
[View as Markdown](dev_themes__releasing-your-theme__required-theme-files.md)

[Back to top](#wp--skip-link--target)

**Block theme:** See [Create a Block Theme](https://learn.wordpress.org/course/develop-your-first-low-code-block-theme/) for building a block theme

Classic themes must include the [required theme files](https://make.wordpress.org/themes/handbook/review/required/#9-files). These files must follow template file standards set by the themes team. For Classic themes, additional standard template files are recommended to use. Learn more about the [Organizing Theme Files](dev_themes__basics__organizing-theme-files.md).

## Classic Themes Required Theme Files

1. **style.css**Your theme’s main [stylesheet](dev_themes__basics__including-css-javascript.md) file. This file will also include information about your theme, such as author name, version number, and plugin URL, in its header.
2. **index.php**The main [template](dev_themes__basics__template-files.md) file for your theme. This will be the template for the homepage on your site unless a static front page is specified. If you *only* include this template file, it must include all functionality of your theme. However, you can use as many relevant template files as you want in your theme.
3. ****comments.php****The comment template which is included wherever comments are allowed. This file should provide support for threaded comments and trackbacks, and should style author comments differently than user comments. See the [Comments](dev_themes__functionality__comments.md) page for more information.
4. **screenshot**In the WordPress.org theme directory, the screenshot acts as a visual indicator of what your theme looks like. It is visible both in the web view and in the admin dashboard. The screenshot must not be bigger than 1200 x 900px.

While these files are the only files required by the theme review team for acceptance into the WordPress.org theme directory, you may use other template files. Of course, any file mentioned in the tutorial in this handbook may be used in your theme.

First published

October 23, 2014

Last updated

June 24, 2026

[Previous
Releasing Your Theme
Previous: Releasing Your Theme](dev_themes__releasing-your-theme.md)

[Next
Submitting Your Theme to WordPress.org
Next: Submitting Your Theme to WordPress.org](dev_themes__releasing-your-theme__submitting-your-theme-to-wordpress-org.md)
