# Block theme accessibility – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/classic-themes/functionality/block-theme-accessibility/

---

# Block theme accessibility

## In this article

Table of Contents

- [Landmark](#landmark)
- [Skip to content](#skip-to-content)
- [Accessible navigation menu](#accessible-navigation-menu)
- [Additional resources](#additional-resources)

Copy page
[View as Markdown](dev_themes__classic-themes__functionality__block-theme-accessibility.md)

[Back to top](#wp--skip-link--target)

Block themes support accessibility and simplify the process for adding accessibility.

## [Landmark](#landmark)

Group, Template part, and Query blocks can become a landmark. There are two ways to create landmark.

**Using block markup**  
`”tagName":"header”` creates header landmark.

```
<!-- wp:group {"tagName":"header","layout":{"type":"constrained"}} -->
<header class="wp-block-group"><!-- wp:site-title /--></header>
<!-- /wp:group -->
```

**Using site editor**  
HTML element under Advanced section in the Block panel provides the following landmark options.

HTML element under Advanced section in the Block panel provides the following landmark options.  
`<header>` `<main>` `<section>` `<article>` `<aside>` `<footer>`.

## [Skip to content](#skip-to-content)

By selecting `<main>` landmark on Group, Template part, or Query block generates the Skip to Content link. Learn more about the [skip to content link here](https://make.wordpress.org/themes/handbook/review/required/#3-accessibility).

```
<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:heading -->
<h2 id="hello-world">Hello World</h2>
<p>Welcome to WordPress. This is your first post. </p>
<!-- /wp:heading -->
```

## [Accessible navigation menu](#accessible-navigation-menu)

Navigation block enables the following accessibility without additional code.

- Support responsive view
- Support keyboard navigation
- Insert `<nav>` landmark role
- Insert ARIA attributes `aria-label` `aria-hidden`

## [Additional resources](#additional-resources)

- [Accessibility](https://make.wordpress.org/themes/handbook/review/accessibility/)

Changelog:

- **Updated** 2023-03-08 Updated code examples to reflect WordPress 6.1 block markup.
- **Created** 2022-01-25

First published

January 25, 2022

Last updated

August 29, 2023

[Previous
Administration Menus
Previous: Administration Menus](dev_themes__classic-themes__functionality__administration-menus.md)

[Next
Core-Supported Features
Next: Core-Supported Features](dev_themes__classic-themes__functionality__core-supported.md)
