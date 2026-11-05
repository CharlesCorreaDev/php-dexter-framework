# 404 Pages – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/classic-themes/functionality/404-pages/

---

# 404 Pages

## In this article

Table of Contents

- [Creating the 404.php file](#creating-the-404-php-file)
- [Add a file header](#add-a-file-header)
- [Adding the body to your 404 Page](#adding-the-body-to-your-404-page)
- [Adding the footer and sidebar.](#adding-the-footer-and-sidebar)

Copy page
[View as Markdown](dev_themes__classic-themes__functionality__404-pages.md)

[Back to top](#wp--skip-link--target)

A 404 page is important to add into your theme in case a user stumbles upon a page that doesn’t exist or hasn’t been created yet. It is also important that your 404 page gives your visitors a way to arrive at the right place.

These next few steps will help you build a useful 404 page for your WordPress theme.

## [Creating the 404.php file](#creating-the-404-php-file)

As the `404.php` file is used on a page not found error, the first step is to create a file named `404.php` and add it to your WordPress theme folder.

Often times a great starting point for your `404.php` is your `index.php`

## [Add a file header](#add-a-file-header)

To use your theme’s `header.php` file, open your `404.php` file. At the top, add a comment describing what the file is and make sure you include your theme’s header.

For example:

```
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();
```

## [Adding the body to your 404 Page](#adding-the-body-to-your-404-page)

To make the 404 page functional you have to add the body content to your template:

Example:

```
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
```

This example is from the Twenty Thirteen theme that comes with WordPress. This adds some text and a search form in the 404 page.

You can to add your own text to make your 404 page look better.

## [Adding the footer and sidebar.](#adding-the-footer-and-sidebar)

The final step when creating a 404 page is to add the footer. You may also add a sidebar if you want.

Example:

```
get_sidebar();
get_footer();
```

Now you have a functional 404 page with a search form and some text in case a user stumbles upon the wrong page. Once you make sure the `404.php` has been uploaded, you can test your 404 page. Just type a URL address for your website that doesn’t exist. You can try something like `http://example.com/fred.php`. This is sure to result in a 404 error unless you actually have a PHP file called `fred.php.`

First published

October 23, 2014

Last updated

October 17, 2015

[Previous
Theme Functionality
Previous: Theme Functionality](dev_themes__classic-themes__functionality.md)

[Next
Accessibility
Next: Accessibility](dev_themes__classic-themes__functionality__accessibility.md)
