# Twenty Twenty-Five – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/twenty-twenty-five/

---

# Twenty Twenty-Five

## In this article

Table of Contents

- [Quick specs](#quick-specs)
- [Site editing support](#site-editing-support)
- [A versatile set of template designs](#a-versatile-set-of-template-designs)
  - [How to switch template designs](#how-to-switch-template-designs)
  - [Personal Blog (Default)](#personal-blog-default)
  - [Text-Only Blog](#text-only-blog)
  - [Photo Blog](#photo-blog)
  - [News Blog](#news-blog)
  - [Additional templates](#additional-templates)
- [Edit templates and pages in Zoom Out view](#edit-templates-and-pages-in-zoom-out-view)
- [Style variations and presets](#style-variations-and-presets)
- [Patterns](#patterns)
  - [Full Page Patterns and Landing Pages](#full-page-patterns-and-landing-pages)
- [Section styles](#section-styles)
- [Text styles](#text-styles)
- [Block style variations](#block-style-variations)
- [Post Formats](#post-formats)
  - [How to include Post Formats in Query Loops](#how-to-include-post-formats-in-query-loops)
- [Support and resources](#support-and-resources)

[Back to top](#wp--skip-link--target)

[Twenty Twenty-Five](https://wordpress.org/themes/twentytwentyfive/) is the new default theme for [WordPress Version 6.7.](wordpress-version__version-6-7.md) Twenty Twenty-Five emphasizes simplicity and adaptability. It offers flexible design options, supported by a variety of patterns for different page types, such as services and landing pages, making it ideal for building personal blogs, professional portfolios, online magazines, or business websites.

![Twenty Twenty-Five's screenshot.](https://wordpress.org/documentation/files/2024/10/tt5-template-preview-laptop.jpg)

Its templates cater to various blog styles, from text-focused to image-heavy layouts. Additionally, it supports international typography and diverse color palettes, ensuring accessibility and customization for users worldwide.

## [Quick specs](#quick-specs)

- Requires at least WordPress 6.7.
- Requires at least PHP version 7.2.

## [Site editing support](#site-editing-support)

Twenty Twenty-Five is designed to support site editing features, including:

- [Site Editor](article__site-editor.md): an editor that allows you to edit all parts of your site, navigate between templates, create new pages, and more.
- [Styles](article__styles-overview.md): a feature that allows you to customize your site, including individual blocks, as much as you’d like with different colors, typography, layouts, and more.
- Select from multiple color palettes and font pairs, or download and install your own fonts.
- [Templates](article__template-editor.md): edit, create, and manage templates used by pages, posts, and other content.
- [Patterns](article__block-pattern.md): build your site with the help of pre-made designs, from full-page designs to smaller elements.

## [A versatile set of template designs](#a-versatile-set-of-template-designs)

The theme features a versatile set of templates, site headers and footers.

![Preview of all Twenty Twenty-Five's templates.](https://wordpress.org/documentation/files/2024/10/tt5-templates-preview-scaled.jpg)

### [How to switch template designs](#how-to-switch-template-designs)

To change the design, you must first open the template in the Site Editor and select the design from the sidebar.

1. Open the **Site Editor** from **Appearance > Editor**.
2. Select **Templates**.
3. Chose which template you want to update.
4. In the Site Editor, open the **Settings** sidebar and select the **Template** tab.
5. Open the **Design** panel.
   - In the **Design** panel you will find the previews of the available template patterns. Click on the pattern that you want to use.
6. Save the changes to your template and repeat the process for each template.

[](https://wordpress.org/documentation/files/2024/10/tt5-switch-template.mp4)

How to switch template designs in the site editor.

### [Personal Blog (Default)](#personal-blog-default)

The default blog templates have an incredibly simple, straightforward layout suitable for any post (with or without a title, with or without a featured image, long or short). The templates also show the entire post’s content, not just excerpts.

![Preview of the default templates in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/10/tt5-default-template-preview-scaled.jpg)

### [Text-Only Blog](#text-only-blog)

The theme offers a template option for those who want to keep their blogs text-only, both for the home page, archives, search as well as the post.

![Preview of the Text-only blog templates in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-textonly-templates-preview.jpg)

### [Photo Blog](#photo-blog)

The photo blog templates are tailored primarily for photography or portfolios lean on an image-heavy approach, with interesting layouts that can be used for a variety of purposes.

![Preview of the Photo blog templates in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-photo-templates-preview.jpg)

### [News Blog](#news-blog)

The news blog has three advanced home page designs to choose from. The default news single post template includes a sidebar to the right of the content.

![Preview of the News blog templates in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-news-templates-preview.jpg)

### [Additional templates](#additional-templates)

#### [Vertical header, right-aligned](#vertical-header-right-aligned)

This alternative blog design featured a split layout built with the columns block. There’s a narrow vertical header with the menu and site title are on the left, and all the content is on the right.

![Preview of the "Vertical header, right-aligned" template in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-verticalheader-templates-preview.jpg)

#### [Single post with left-aligned content](#single-post-with-left-aligned-content)

This alternative template features a more opinionated top section displaying a left-aligned post title and post author in the left column, and the featured image on the right column. Below this section is the post date and categories. The post content is also left-aligned, creating an offset layout that works harmoniously.

![Preview of the "Single post with left-aligned content" template in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-newsalt2-templates-preview.jpg)

#### [Single offset post without featured image](#single-offset-post-without-featured-image)

This alternative template displayed a large post title followed by the post categories. A separator divides this top section from the content section below it, which features a two-column layout with the post date on the left and the post content on the right.

![Preview of the "Single offset post without featured image" template in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-newsalt1-templates-preview.jpg)

#### [Page without page title](#page-without-page-title)

This alternative template is most suitable for pages where you only want the content to be visible, not the page title or featured image.

![Preview of the "Page no title" template in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/tt5-pagenotitle-template-preview.jpg)

This template can be useful if you want to create a landing page using one of the full-page patterns available in Twenty Twenty-Five, as shown in the example below:

[![](https://wordpress.org/documentation/files/2024/11/tt5-pagenotitle-video-cover.jpg)](https://wordpress.org/documentation/files/2024/11/tt5-pagenotitle-video-preview.mp4)

## [Edit templates and pages in Zoom Out view](#edit-templates-and-pages-in-zoom-out-view)

With WordPress 6.7’s Zoom Out view, you can get a broader view of the template or page you’re editing. You can add, arrange, shuffle, or remove patterns as you see fit.

[![](https://wordpress.org/documentation/files/2024/10/tt5-zoom-out-view.jpg)](https://wordpress.org/documentation/files/2024/10/tt5-zoom-out-mode.mp4)

How to select the zoom out view.

## [Style variations and presets](#style-variations-and-presets)

Twenty Twenty-Five has **nine style variations** with unique color palettes, font families and typography settings.  
Each color palette and font pair are also available as individual presets, which means that you can combine them in any way you want.

![Preview of the featured style variations in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/10/Style-Variations-scaled.jpg)

Twenty Twenty-Five’s styles: Default, Evening, Noon, Dusk, Afternoon, Twilight, Morning, Sunrise and Midnight.

The default style variationof Twenty Twenty-Five uses the font [Manrope](https://fonts.google.com/specimen/Manrope?query=manrope) for headlines and paragraphs. This style has white with dark grey and accents in yellow, pink and purple.

The alternative fonts shipped with the theme are [Beiruti](https://fonts.google.com/specimen/Beiruti), [Fira Code](https://fonts.google.com/specimen/Fira+Code), [Fira Sans](https://fonts.google.com/specimen/Fira+Sans), [Literata 72pt](https://fonts.google.com/specimen/Literata?query=literata), [Platypi](https://fonts.google.com/specimen/Platypi?query=platypi), [Roboto Slab](https://fonts.google.com/specimen/Roboto+Slab), [Vollkorn](https://fonts.google.com/specimen/Vollkorn) and [Ysabeau Office](https://fonts.google.com/specimen/Ysabeau+Office).

## [Patterns](#patterns)

Twenty Twenty-Five features **more than 70 patterns**, including Section Patterns such as About, Contact, Call to Action, Events, Hero, Services and Testimonials as well as Full-Page Patterns such as Landing and Home Pages.

![Preview of the featured patterns in Twenty Twenty-Five.](https://wordpress.org/documentation/files/2024/11/Patterns.jpg)

### [Full Page Patterns and Landing Pages](#full-page-patterns-and-landing-pages)

The landing page patterns can be inserted when you create a new page. They include:

- Event RSVP
- Business homepage
- Coming Soon
- CV/Bio
- Landing page for book launch
- Landing page for an event
- Landing page for a podcast
- Portfolio homepage
- Shop homepage

## [Section styles](#section-styles)

You can use section styles in your content or templates to create a diverse design and highlight or separate different content types. A section is created by inserting a columns or group block and selecting one of the six section styles. Each section will have a unique accessible color combination based on the current color palette.

[![](https://wordpress.org/documentation/files/2024/10/tt5-section-styles-preview-1.jpg)](https://wordpress.org/documentation/files/2024/10/tt5-section-styles.mp4)

Trying different section styles in a Group block.

## [Text styles](#text-styles)

Text styles can be applied from the Styles section in the Settings sidebar. The heading and paragraph blocks have three custom text styles:

- Display
- Subtitle
- Annotation

[![](https://wordpress.org/documentation/files/2024/11/tt5-text-styles-preview.jpg)](https://wordpress.org/documentation/files/2024/11/tt5-text-styles.mp4)

## [Block style variations](#block-style-variations)

Block style variations can be applied from the Styles section in the Settings sidebar.

List block with checkmark:

![A preview of the custom style for the list block, where the bullets are replaced with checkmarks.](https://wordpress.org/documentation/files/2024/10/checkmark.png)

Pill-shaped tags:

![A preview of the custom style for the tags, where each tag has a light grey border with rounded corners.](https://wordpress.org/documentation/files/2024/10/tags-1-1024x131.png)

## [Post Formats](#post-formats)

The theme registers support for all post formats: aside, audio, chat, gallery, image, link, quote, status, and video. To style your post formats differently from your other posts, you can use section styles and patterns in your content.  
  
The theme includes three patterns for post formats:

- Post format name (Displays a single word, for example “Video”)
- A premade design for the Audio format
- A premade design for the Link format

![Preview of post format patterns.](https://wordpress.org/documentation/files/2024/11/tt5-post-format-preview.jpg)

Available post format patterns.

### [How to include Post Formats in Query Loops](#how-to-include-post-formats-in-query-loops)

You can use the Query Loop block to list posts with a specific format.

1. Insert the **Query Loop** block.
2. In the **Settings** sidebar, select the **Custom** query type.
3. Next open the **Filters** panel at the bottom of the **Settings** sidebar, and enable **Formats**.
4. In the **Format** option, enter the name of one or more formats.
5. Style your query and post template blocks.

## [Support and resources](#support-and-resources)

[Get community help with Twenty Twenty-Five in its support forum](https://wordpress.org/support/theme/twentytwentyfive/?view=all).

Learn how to take full advantage of full site editing with the [Simple Site Design with Full Site Editing course on Learn.WordPress.org](https://learn.wordpress.org/course/simple-site-design-with-full-site-editing/).

Read more about the Twenty Twenty-Five theme in [the introduction post](https://make.wordpress.org/core/2024/08/15/introducing-twenty-twenty-five/).

[Twenty Twenty-Five changelog.](article__twenty-twenty-five-changelog.md)

## Was this article helpful? How could it be improved? [Cancel reply](article__twenty-twenty-five.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Ftwenty-twenty-five%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

November 13, 2024

Last updated
