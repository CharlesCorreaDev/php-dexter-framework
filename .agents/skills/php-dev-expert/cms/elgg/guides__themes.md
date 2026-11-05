# Themes — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/themes.html

---

# Themes[](#themes "Permalink to this heading")

Customize the look and feel of Elgg.

A theme is a type of [plugin](admin__plugins.md) that overrides display aspects of Elgg.

This guide assumes you are familiar with:
:   - [Plugins](admin__plugins.md)
    - [Views](guides__views.md)

Contents

- [Theming Principles and Best Practices](#theming-principles-and-best-practices)
- [Create your plugin](#create-your-plugin)
- [Customize the CSS](#customize-the-css)

  - [CSS variables](#css-variables)
  - [Dark mode](#dark-mode)
  - [View extension](#view-extension)
  - [View overloading](#view-overloading)
  - [Icons](#icons)
- [Tools](#tools)
- [Customizing the front page](#customizing-the-front-page)

## [Theming Principles and Best Practices](#id1)[](#theming-principles-and-best-practices "Permalink to this heading")

**No third-party CSS frameworks**
:   Elgg does not use a CSS framework, because such frameworks lock users into a specific HTML markup, which in the end makes it much harder for plugins to collaborate on the appearance.
    What’s is-primary in one theme, might be something else in the other. Having no framework allows plugins to alter appearance using pure css, without having to overwrite views and
    append framework-specific selectors to HTML markup elements.

```
/* BAD */
<div class="box has-shadow is-inline">
        This is bad, because if the plugin wants to change the styling, it will have to either write really specific css
        clearing all the attached styles, or replace the view entirely just to modify the markup
</div>

/* GOOD */
<div class="box-role">
        This is good, because a plugin can just simply add .box-role rule
</div>
<style>
        .box-role {
         padding: 1rem;
         display: inline-block;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
</style>
```

**8-point grid system**
:   Elgg uses an 8-point grid system <https://builttoadapt.io/intro-to-the-8-point-grid-system-d2573cde8632>, so sizing of elements, their padding, margins etc is done in increments and fractions of 8px.
    Because our default font-size is `16px`, we use fractions of rem, so `0.5rem = 8px`.
    8-point grid system makes it a lot easier for developers to collaborate on styling elements: we no longer have to think if the padding should be `5px` or `6px`.

```
/* BAD */
.menu > li {
        margin: 2px 2px 2px 0;
}

.menu > li > a {
        padding: 3px 5px;
}

/* GOOD */
.menu > li > a {
        padding: 0.25rem 0.5rem;
}
```

**Mobile first**
:   We write mobile-first CSS.
    We use two breakpoints: `50rem` and `80rem` (800px and 1280px at 16px/rem).

```
/* BAD: mobile defined in media blocks, different display types */

.menu > li {
        display: inline-block;
}
@media screen and (max-width: 820px) {
        .menu > li {
                display: block;
                width: 100%;
        }
}

/* GOOD: mobile by default. Media blocks style larger viewports. */

.menu {
        display: flex;
        flex-direction: column;
}
@media screen and (min-width: 50rem) {
        .menu {
                flex-direction: row;
        }
}
```

**Flexbox driven**
:   Flexbox provides simplicity in stacking elements into grids. Flexbox is used for everything from menus to layout elements.

```
/* BAD */
.heading:after {
        visibility: hidden;
        height: 0;
        clear: both;
        content: " ";
}
.heading > h2 {
        float: left;
}
.heading > .controls {
        float: right;
}

/* GOOD */
.heading {
        display: flex;
        justify-content: flex-end;
}
.heading > h2 {
        order: 1;
        margin-right: auto;
}
.heading > .controls {
        order: 2;
}
```

**Simple color transitions**
:   We maintain 4 sets of colors for text, background and border: `soft`, `mild`, `strong` and `highlight`.
    When transitioning to hover or active state, we go one level up, e.g. from `soft` to `mild`, or use `highlight`.
    When transition to inactive or disabled state, we go one level down.

**Increase the click area**
:   When working with nested anchors, we increase the click area of the anchor, rather than the parent

```
/* BAD */
.menu > li {
        margin: 5px;
        padding: 5px 10px;
}

/* GOOD */
.menu > li {
        margin: 0.5rem;
}
.menu > li > a {
        padding: 0.5rem 1rem;
}
```

**No z-index 999999**
:   z-indexes are incremented with a step of 1.

**Wrap HTML siblings**
:   We make sure that there are no orphaned strings within a parent and that siblings are wrapped in a way that they can be targeted by CSS.

```
/* BAD */
<label>
        Orphan
        <span>Sibling</span>
</label>

/* GOOD */
<label>
        <span>Sibling</span>
        <span>Sibling</span>
</label>
```

```
/* BAD */
<div>
        <h3>Title</h3>
        <p>Subtitle</p>
        <div class="right">This goes to the right</div>
</div>

/* GOOD */
<div>
        <div class="left">
         <h3>Title</h3>
         <p>Subtitle</p>
        </div>
        <div class="right">This goes to the right</div>
</div>
```

## [Create your plugin](#id2)[](#create-your-plugin "Permalink to this heading")

Create your plugin as described in the [developer guide](guides__index.md).

- Create a new directory under mod/
- Create a new elgg-plugin.php
- Create a composer.json file describing your theme.

## [Customize the CSS](#id3)[](#customize-the-css "Permalink to this heading")

The css is split into several files based on what
aspects of the site you’re theming. This allows you to tackle them one
at a time, giving you a chance to make real progress without getting
overwhelmed.

Here is a list of the existing CSS views:

> - elements/buttons.css: Provides a way to style all the different kinds of buttons your site will use. There are 5 kinds of buttons that plugins will expect to be available: action, cancel, delete, submit, and special.
> - elements/chrome.css: This file has some miscellaneous look-and-feel classes.
> - elements/components.css: This file contains many “css objects” that are used all over the site: media block, list, gallery, table, owner block, system messages, river, tags, photo, and comments.
> - elements/forms.css: This file determines what your forms and input elements will look like.
> - elements/icons.css: Contains styles for the icons and avatars used on your site.
> - elements/layout.css: Determines what your page layout will look like: sidebars, page wrapper, main body, header, footer, etc.
> - elements/modules.css: Lots of content in Elgg is displayed in boxes with a title and a content body. We called these modules. There are a few kinds: info, aside, featured, dropdown, popup, widget. Widget styles are included in this file too, since they are a subset of modules.
> - elements/navigation.css: This file determines what all your menus will look like.
> - elements/typography.css: This file determines what the content and headings of your site will look like.
> - rtl.css: Custom rules for users viewing your site in a right-to-left language.
> - admin.css: A completely separate theme for the admin area (usually not overridden).
> - elgg.css: Compiles all the core elements/\* files into one file (DO NOT OVERRIDE).
> - elements/reset.css: Contains a reset stylesheet that forces elements to have the same default

### [CSS variables](#id4)[](#css-variables "Permalink to this heading")

Global CSS variables are available in PHP and in CSS. Plugins should, wherever possible, use global CSS variables,
and extend the core theme with their plugin variables, so they can be simply altered by other plugins.

To add or alter variables, use the `theme` section in `elgg-plugin.php`.
Note that you may need to flush the cache to see your changes in action.

For a list of default core variables, see `engine/theme.php`.

### [Dark mode](#id5)[](#dark-mode "Permalink to this heading")

The theme supports different color schemes. In the CSS variables it is separated by a key in the `theme` configuration.
The color scheme `dark` is supported as the dark-mode for the site. If a site administrator enables the user choice for dark-mode
a user is able to decide if the dark-mode (or another available color-scheme) is enabled (or auto-detected) in their personal settings.

### [View extension](#id6)[](#view-extension "Permalink to this heading")

There are two ways you can modify views:

The first way is to add extra stuff to an existing view via the `views_extensions`
section within your elgg-plugin.php definition.

For example, the following configuration will add mytheme/css to Elgg’s core css file:

```
<?php
        return [
                'view_extensions' => [
                        'elgg.css' => [
                                'mytheme/css' => [],
                        ],
                ],
        ];
```

### [View overloading](#id7)[](#view-overloading "Permalink to this heading")

Plugins can have a view hierarchy, any file that exists here will
replace any files in the existing core view hierarchy… so for example,
if my plugin has a file:

`/mod/myplugin/views/default/elements/typography.css`

it will replace:

`/views/default/elements/typography.css`

But only when the plugin is active.

This gives you total control over the way Elgg looks and behaves. It
gives you the option to either slightly modify or totally replace
existing views.

### [Icons](#id8)[](#icons "Permalink to this heading")

As of Elgg 2.0 the default Elgg icons come from the [FontAwesome](http://fontawesome.io/) library.
You can use any of these icons by calling:

`elgg_view_icon('icon-name');`

`icon-name` can be any of the [FontAwesome icons](http://fontawesome.io/icons/) without the `fa-`-prefix.

By default you will get the solid styled variant of the icons. Postfixing the icon name with `-solid`, `-regular` or `-light` allows you to target a specific style.
Be advised; the light styled variant is only available as a FontAwesome Pro licensed icon.

## [Tools](#id9)[](#tools "Permalink to this heading")

We’ve provided you with some development tools to help you
with theming: Turn on the “Developers” plugin and go to the “Theme
Preview” page to start tracking your theme’s progress.

## [Customizing the front page](#id10)[](#customizing-the-front-page "Permalink to this heading")

The main Elgg index page is served via a resource view.

Therefore, you can override it by providing your own resource file in `your_plugin/views/default/resources/index.php`.
