# Shortcodes – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/shortcodes/

---

# Shortcodes

## In this article

Table of Contents

- [Why Shortcodes?](#why-shortcodes)
- [Built-in Shortcodes](#built-in-shortcodes)
- [Shortcode Best Practices](#shortcode-best-practices)
- [Quick Reference](#quick-reference)
- [External Resources](#external-resources)

Copy page
[View as Markdown](dev_plugins__shortcodes.md)

[Back to top](#wp--skip-link--target)

As a security precaution, running PHP inside WordPress content is forbidden; to allow dynamic interactions with the content, Shortcodes were presented in WordPress version 2.5.

Shortcodes are macros that can be used to perform dynamic interactions with the content. i.e creating a gallery from images attached to the post or rendering a video.

## [Why Shortcodes?](#why-shortcodes)

Shortcodes are a valuable way of keeping content clean and semantic while allowing end users some ability to programmatically alter the presentation of their content.

When the end user adds a photo gallery to their post using a shortcode, they’re using the least data possible to indicate how the gallery should be presented.

Advantages:

- No markup is added to the post content, which means that markup and styling can easily be manipulated on the fly or at a later state.
- Shortcodes can also accept parameters, allowing users to modify how the shortcode behaves on an instance by instance basis.

## [Built-in Shortcodes](#built-in-shortcodes)

By default, WordPress includes the following shortcodes:

- `[caption]` – allows you to wrap captions around content
- `[gallery]` – allows you to show image galleries
- `[audio]` – allows you to embed and play audio files
- `[video]` – allows you to embed and play video files
- `[playlist]` – allows you to display collection of audio or video files
- `[embed]` – allows you to wrap embedded items

## [Shortcode Best Practices](#shortcode-best-practices)

Best practices for developing shortcodes include the [plugin development best practices](dev_plugins__the-basics__best-practices.md) and the list below:

- **Always return!**  
  Shortcodes are essentially filters, so creating “[side effects](https://en.wikipedia.org/wiki/Side_effect_(computer_science))” will lead to unexpected bugs.
- Prefix your shortcode names to avoid collisions with other plugins.
- Sanitize the input and escape the output.
- Provide users with clear documentation on all shortcode attributes.

## [Quick Reference](#quick-reference)

See the complete example of using a [basic shortcode structure, taking care of self-closing and enclosing scenarios, shortcodes within shortcodes and securing output](dev_plugins__shortcodes__shortcodes-with-parameters.md#complete-example).

## [External Resources](#external-resources)

- [WordPress Shortcodes Generator](http://generatewp.com/shortcodes/)

First published

September 18, 2014

Last updated

December 14, 2023

[Previous
Top-Level Menus
Previous: Top-Level Menus](dev_plugins__administration-menus__top-level-menus.md)

[Next
Basic Shortcodes
Next: Basic Shortcodes](dev_plugins__shortcodes__basic-shortcodes.md)
