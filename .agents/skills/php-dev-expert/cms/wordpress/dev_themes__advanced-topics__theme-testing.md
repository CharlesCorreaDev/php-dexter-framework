# Theme Testing – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/advanced-topics/theme-testing/

---

# Theme Testing

Copy page
[View as Markdown](dev_themes__advanced-topics__theme-testing.md)

[Back to top](#wp--skip-link--target)

The [Theme Unit Test data](https://github.com/WordPress/theme-test-data) is a WordPress import file will fill a WordPress site with enough stub data (posts, media, users) to test a theme.

The Theme Unit Tests are manual tests to walk through to test theme functionality and how the theme responds to the edge-cases of content and settings.

### Theme Unit Test Overview

1. Fix PHP and WordPress errors. Add the following debug setting to your `wp-config.php` file to see deprecated function calls and other WordPress-related errors:   
   `define('WP_DEBUG', true);`  
    See [Deprecated Functions Hook](https://codex.wordpress.org/WordPress_Deprecated_Functions_Hook) for more information.
2. Check template files against [Template File Checklist](dev_themes__template-files-section.md) (see above).
3. Do a run-through using the [Theme Unit Test](https://make.wordpress.org/themes/handbook/review/theme-unit-test/).
4. Validate HTML and CSS. See [Validating a Website](dev_themes__advanced-topics__validating-your-theme.md).
5. Check for JavaScript errors.
6. Test in all your target browsers. For example Safari, Chrome, Opera, Firefox and Microsoft Edge.
7. Clean up any extraneous comments, debug settings or TODO items.
8. See [Theme Review](https://make.wordpress.org/themes/handbook/review/) if you are publicly releasing the Theme by submitting it to the Themes Directory.

First published

October 23, 2014

Last updated

August 7, 2025

[Previous
Publishing Themes
Previous: Publishing Themes](dev_themes__advanced-topics__publishing-themes.md)

[Next
Plugin API Hooks
Next: Plugin API Hooks](dev_themes__advanced-topics__plugin-api-hooks.md)
