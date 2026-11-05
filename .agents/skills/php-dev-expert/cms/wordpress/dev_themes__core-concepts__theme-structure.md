# Theme Structure – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/core-concepts/theme-structure/

---

# Theme Structure

## In this article

Table of Contents

- [Files and folders](#files-and-folders)
  - [Required files](#required-files)
  - [Optional files](#optional-files)
  - [Standard folders](#standard-folders)
- [Advanced theme structure](#advanced-theme-structure)
  - [Optional folders](#optional-folders)
  - [Optional files](#optional-files-2)
  - [Code editor view](#code-editor-view)

Copy page
[View as Markdown](dev_themes__core-concepts__theme-structure.md)

[Back to top](#wp--skip-link--target)

In the [Getting Started](dev_themes__getting-started.md) chapter, you learned the basics of what a theme is and how to get one up and running without code. A no-code approach is perfectly OK for simple themes, but once you want to add things that are not possible in the user interface, you’ll need to start working directly with code.

The first step of customizing theme code is to open the theme in your preferred file editor. You can use any theme for this, even the one you created from the Getting Started chapter.

It’s a good idea to familiarize yourself with what others are doing, so feel free to look at several [block themes](https://wordpress.org/themes/tags/full-site-editing/) from the WordPress theme directory.

This document will walk you through what the file and folder structure will look like in a typical block theme.

## [Files and folders](#files-and-folders)

WordPress themes are nothing more than a collection of various files that rely on different web technologies, such as HTML, CSS, and PHP. Block themes also follow a standard structure in how many of those files are laid out.

At its most basic, a theme’s structure will look similar to the following. Take note of the files/folders marked **required** because they are necessary for a block theme to work:

- `parts/`
  - `footer.html`
  - `header.html`
- `patterns/`
  - `example.php`
- `styles/`
  - `example.json`
- `templates/`
  - `404.html`
  - `archive.html`
  - `index.html` (required)
  - `singular.html`
- `README.txt`
- `functions.php`
- `screenshot.png`
- `style.css` (required)
- `theme.json`

### [Required files](#required-files)

There are two necessary files for WordPress to recognize your block theme, and you will learn more about these in the coming documentation:

- **`style.css`** ([Main Stylesheet](dev_themes__core-concepts__main-stylesheet.md)): This file is required for configuring theme data, such as its name and description. It can also be used for adding custom CSS.
- **`templates/index.html`** ([Templates](dev_themes__core-concepts__templates.md)): The default/fallback template. This is necessary for WordPress to consider this a block theme.

### [Optional files](#optional-files)

A theme can include any number of custom files other than the required list above. WordPress also looks for a few other files and uses them if they are available:

- **`README.txt`** ([Theme Review: Files](https://make.wordpress.org/themes/handbook/review/required/#9-files)): This is not used directly by the WordPress software. But it is a required file when submitting a theme to the official WordPress theme directory, meant to provide information about the theme to users.
- **`functions.php`** ([Custom Functionality](dev_themes__core-concepts__custom-functionality.md)): A PHP file that WordPress automatically loads after the theme is initialized during the page-loading process. You can use it to run custom PHP.
- **`screenshot.png`**: A 1200×900 screenshot image of your theme. Used for displaying your theme under **Appearance > Themes** in the WordPress admin and in the WordPress theme directory (if submitted there). Both `.png` and `.jpg` are acceptable file formats.
- **`theme.json`** ([Global Settings and Styles](dev_themes__core-concepts__global-settings-and-styles.md)): Used to configure settings and styles for the site, integrating with the user interface.

### [Standard folders](#standard-folders)

In the example above, there were a few folders included. A theme can have many more folders, but WordPress has designated a few of them for specific features. You will learn more about these folders as you read through this chapter:

- **`parts`** ([Template Parts](dev_themes__templates__template-parts.md)): Houses custom template parts for your theme. Parts are smaller sections that you can include within top-level templates. Often, this will include things like headers, footers, and sidebars.
- **`patterns`** ([Block Patterns](dev_themes__features__block-patterns.md)): Reusable patterns made up of one or more blocks that users can insert via the editor interface. WordPress will automatically register files included in this folder.
- **`styles`** ([Style Variations](dev_themes__global-settings-and-styles__style-variations.md)): Variations on the theme’s global settings and styles stored in individual JSON files.
- **`templates`** ([Templates](dev_themes__templates__templates.md)): Files that represent the overall document structure of the front-end. Templates are made up of block markup and are what site visitors see.

## [Advanced theme structure](#advanced-theme-structure)

This section is meant to familiarize you with some of the common files you’ll see in themes but not to cover every possibility in detail. These files are entirely optional and will differ from theme to theme. You may skip this section for now if you are not comfortable with more advanced development methods.

In reality, block themes can contain many more files and folders. The more complex the project becomes, the more complex its structure will be.

Let’s add a few extra files and folders to the original example:

- `assets/`
  - `css/`
    - `core-site-title.css`
  - `images/`
    - `header-background.png`
  - `js/`
    - `navigation.js`
- `inc/`
  - `ClassName.php`
  - `functions-helpers.php`
- `parts/`
  - `footer.html`
  - `header.html`
- `patterns/`
  - `example.php`
- `styles/`
  - `example.jso`n
- `templates/`
  - `404.html`
  - `archive.html`
  - `index.html` (required)
  - `singular.html`
- `.editorconfig`
- `.gitattributes`
- `.gitignore`
- `CHANGELOG.md`
- `LICENSE.md`
- `README.txt`
- `functions.php`
- `package.json`
- `screenshot.png`
- `style.css` (required)
- `theme.json`

### [Optional folders](#optional-folders)

There is no limit on what folders may be included, but the above example added two of the most common use cases you’ll come across in WordPress themes:

- **`assets`** ([Including Assets](dev_themes__core-concepts__including-assets.md)): Many theme authors use this folder to store additional CSS, Images/Media, and JavaScript needed for their theme. This folder may also have other names, such as `resources` or `public`.
- **`inc`** ([Custom Functionality](dev_themes__core-concepts__custom-functionality.md)): Themes will often have custom PHP classes or files stored in this folder for additional functionality. This folder may also be seen named as `includes`, `src`, and more.

### [Optional files](#optional-files-2)

This list is nowhere near exhaustive, but it includes some common files used in theme development. *(Note: most of the following links lead to external, third-party sites and are not affiliated with WordPress.)*

- **`.editorconfig`** ([EditorConfig](https://editorconfig.org/)): Used for configuring formatting, such as line endings and spacing, for code editors.
- **`.gitattributes`** ([Git: Attributes](https://git-scm.com/docs/gitattributes)): Configures attributes with the Git version control system.
- **`.gitignore`** ([Git: Ignore](https://git-scm.com/docs/gitignore)): Defines files to ignore when committing code to a Git repository.
- **`CHANGELOG.md`** ([Keep a Changelog](https://keepachangelog.com/)): A human-readable log of important changes for each release of your theme.
- **`LICENSE.md`** ([Theme Review: Licensing & Copyright](https://make.wordpress.org/themes/handbook/review/required/#1-licensing-copyright)): Defines the license for the theme. Note that all themes submitted to the WordPress theme directory must be licensed under the GPL v2+.
- **`package.json`** ([npm: package.json](https://docs.npmjs.com/files/package.json/)): Often used to define a build process and development dependencies within a Node environment.

Don’t feel discouraged if you do not understand all of these files and their purposes yet. Again, these are entirely optional elements of a developer’s workflow. Feel free to learn more about them at your own pace at a later time.

### [Code editor view](#code-editor-view)

Here is a quick editor view of a real-world theme with an advanced structure:

[![Visual Studio Code editor showing the structure of a theme's files and folders. In the code area, a theme.json file is shown.](https://i0.wp.com/developer.wordpress.org/files/2023/11/theme-file-structure.png?resize=2048%2C1143&ssl=1)](https://i0.wp.com/developer.wordpress.org/files/2023/11/theme-file-structure.png?ssl=1)

This is vastly more complex than the basics that this documentation is introducing. The point is that, even when building block themes following standard practices, you will have a lot of freedom to customize things. You may want to integrate with version control systems, add in a build process, and more.

So, consider this documentation the foundation in which you can build upon. But there is no harm in keeping it simple and sticking with the basics.

First published

November 21, 2023

Last updated

January 5, 2024

[Previous
Core Concepts
Previous: Core Concepts](dev_themes__core-concepts.md)

[Next
Main Stylesheet (style.css)
Next: Main Stylesheet (style.css)](dev_themes__core-concepts__main-stylesheet.md)
