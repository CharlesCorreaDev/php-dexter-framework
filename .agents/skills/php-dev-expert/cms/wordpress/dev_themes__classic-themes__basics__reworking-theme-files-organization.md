# Reworking Theme Files & Organization – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/classic-themes/basics/reworking-theme-files-organization/

---

# Reworking Theme Files & Organization

## In this article

Table of Contents

- [Theme folder and file structure](#theme-folder-and-file-structure)
  - [Page templates folder](#page-templates-folder)
  - [Language folder](#language-folder)

Copy page
[View as Markdown](dev_themes__classic-themes__basics__reworking-theme-files-organization.md)

[Back to top](#wp--skip-link--target)

![basics-theme-files-organization-01](https://i0.wp.com/developer.wordpress.org/files/2014/08/basics-theme-files-organization-01.jpg?resize=1024%2C384&ssl=1)

## [Theme folder and file structure](#theme-folder-and-file-structure)

While WordPress themes technically only require two files (`index.php` and `style.css`), they usually are made up of many files and can become quickly disorganized.

In the last section, [Template Files](# "Template Files"), you set up your `header.php, footer.php, page.php, home.php, and single.php` files.

Let’s look at the [Twenty Twelve theme](https://wordpress.org/themes/twentytwelve) default themes as one example of good file structure and organization.  While this may be a bit overwhelming at first, let’s break it down. Can you find the templates you just built?

![basics-theme-files-organization-02](https://i0.wp.com/developer.wordpress.org/files/2014/08/basics-theme-files-organization-02.png?resize=629%2C1500&ssl=1)

While there are still a lot of files, their names help provide a context of what they are. Basically, each file handles a feature of WordPress.  I.e. `comments.php` deals with how the theme will handle comments; `image.php` instructs the theme how to handle images, etc.  Don’t worry about adding these files unless you need them.

You can see that the main theme template files are in the theme’s root directory, while JavaScript, languages, CSS, and page template files are placed within their own folders.

At this time, there are **no required folders within a WordPress theme**. However, WordPress does recognize the following folders by default:

### [Page templates folder](#page-templates-folder)

![basics-theme-files-organization-03](https://i0.wp.com/developer.wordpress.org/files/2014/08/basics-theme-files-organization-03.png?resize=400%2C124&ssl=1)

The [custom page templates](dev_themes__classic-themes__templates__page-template-files.md "Custom Page Templates"), named *page-templates* (since 3.4.0), allow for better organization of template files. Custom page template files placed in this folder are automatically recognized by WordPress.

### [Language folder](#language-folder)

![basics-theme-files-organization-04](https://i0.wp.com/developer.wordpress.org/files/2014/08/basics-theme-files-organization-04.png?resize=400%2C85&ssl=1)

If you wish to [internationalize your theme](dev_themes__functionality__internationalization.md "Internationalization") so it’s usable in other languages, you can create a *languages* folder to contain translations.

First published

December 9, 2014

Last updated

July 21, 2026

[Previous
Post Types
Previous: Post Types](dev_themes__classic-themes__basics__post-types.md)

[Next
Template Files
Next: Template Files](dev_themes__classic-themes__basics__template-files.md)
