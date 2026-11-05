# Writing Documentation – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/releasing-your-theme/writing-documentation/

---

# Writing Documentation

Copy page
[View as Markdown](dev_themes__releasing-your-theme__writing-documentation.md)

[Back to top](#wp--skip-link--target)

Documentation is important for themes as it provides a way for users to understand what a theme does and does not support. Likewise, documenting the code of your theme will make it easier for other theme developers to customize your theme, likely with a [child theme](dev_themes__advanced-topics__child-themes.md).

Here’s a list of **requirements** and **recommendations**for your theme’s documentation.

- Themes are **required** to provide end-user documentation of any design limitations or extraordinary installation/setup instructions.
- Themes are **required** to include a [readme.txt file](https://wordpress.org/plugins/about/readme.txt), using the plugin directory’s readme.txt markdown format. New themes need to follow this rule as of October 25th, 2018. Old themes have a 6 months grace time from this date. Since WordPress 5.8 theme [readme files are not parsed for requirements](https://core.trac.wordpress.org/ticket/48520). This means that headers `Requires PHP` and `Requires at least` are going to be parsed from theme’s `style.css` file.

First published

October 23, 2014

Last updated

July 20, 2021

[Previous
Updating Your Theme
Previous: Updating Your Theme](dev_themes__releasing-your-theme__updating-your-theme.md)

[Next
Classic themes
Next: Classic themes](dev_themes__classic-themes.md)
