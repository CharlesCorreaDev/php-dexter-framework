# Site Editor Pages – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/site-editor-pages/

---

# Site Editor Pages

## In this article

Table of Contents

- [How to access Site Editor Pages](#how-to-access-site-editor-pages)
- [Sidebar features](#sidebar-features)
  - [Page list](#page-list)
  - [Shortcuts](#shortcuts)
  - [Save status](#save-status)
  - [The page details sidebar](#the-page-details-sidebar)
  - [The blog page details sidebar](#the-blog-page-details-sidebar)
- [Create new pages in the Site Editor](#create-new-pages-in-the-site-editor)
- [Edit pages in the Site Editor](#edit-pages-in-the-site-editor)
  - [Locked and editable blocks](#locked-and-editable-blocks)
- [Enable template editing](#enable-template-editing)
- [Resource Links](#resource-links)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

Site Editor Pages is a page editing and page management tool in the Site Editor where you can create, view, edit, and trash pages. It shows your page content as part of the template instead of using placeholder content.

The Site Editor Pages menu is **only** available when you install and activate a [Block theme](article__block-themes.md) on your site. You can learn about the Site Editor in this support article: [Site Editor](article__site-editor.md).

In Site Editor Pages, you can edit both the page content and the template. The template is locked until you enable the template editing option.

Here you will also find the page details like information about the page status (for example, if a page is a draft or published) when the page was last updated, the number of words on the page, and how long it will take to read.

## [How to access Site Editor Pages](#how-to-access-site-editor-pages)

Once you install and activate a Block theme on your site, go to **Appearance** > **Editor**to open the Site Editor. In the sidebar menu, select **Pages**:

![The WordPress Site Editor with a menu on the left and a preview of the website to the right.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-first-menu-1024x534.jpg)

## [Sidebar features](#sidebar-features)

When you select **Pages**, WordPress shows a sidebar with a list of pages, page-related shortcuts, and an option to create new pages.

You will find your site icon or the WordPress logo at the top of the sidebar. Clicking on this image takes you back to the WordPress dashboard.

Next is your site title and a button that opens the [Command Palette](article__site-editor-command-palette.md). You will recognize the Command Palette button by the icon of the magnifying glass. You can select the back button if you want to go back to the main Site Editor menu.

![The page sidebar with a menu with all pages that are published or drafts.](https://wordpress.org/documentation/files/2023/07/63-pages-sidebar-inner.png)

### [Page list](#page-list)

The page list includes all pages on your site that are either published or drafts. Each page in the page list is represented by an icon. Your front page uses an icon of a house. And if your site shows blog posts on a [separate page](article__settings-reading-screen.md), the blog page uses an icon of a feather pen.

Clicking on the page title opens the page and the page details sidebar.

### [Shortcuts](#shortcuts)

At the bottom of the sidebar are links that help you edit your site faster: Links to the 404-page template, the Search Results template, and Manage all pages, which takes you to the [Pages screen](article__create-pages.md#pages-screen) in the WordPress admin.

### [Save status](#save-status)

If you have unsaved changes to the page or the template, the save button at the bottom of the sidebar will be activated and highlighted with a blue background.

If there are unsaved changes to both the template and the page, you can review the changes before you save. Clicking the button opens a save modal where you can select if you want to save all changes:

![The save modal lists unsaved changes together with a checkbox. The checkbox is checked by default.
At the top of the modal is a save button and a cancel button.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-review-changes-1024x534.png)

### [The page details sidebar](#the-page-details-sidebar)

This sidebar displays the name of the chosen page, a preview link for the front of the website, the featured image (if one exists), and a description.

**Page details:**

- Status – Draft or publishing date
- Slug
- Template – The name of the template that the page uses
- Words – The number of words in the content
- Time to read
- Last modified

![The page details sidebar displays information about the page below the page title.](https://wordpress.org/documentation/files/2023/07/63-site-editor-page-details-sidebar.png)

The ellipsis menu next to the page title opens a modal where you can trash the page:

![The "Move to Trash" button.](https://wordpress.org/documentation/files/2023/07/63-site-editor-page-trash-1024x609.png)

The pen icon represents editing: it redirects you to where you can edit the page in the Site Editor.

### [The blog page details sidebar](#the-blog-page-details-sidebar)

Different types of pages show different details in the sidebar. When you select a page that displays the latest posts, you can update settings related to your blog directly in the sidebar. You can:

- Edit the page title
- Select the number of posts per page
- Allow or disallow comments

There are also two shortcuts to editing your site header and site footer.

![The blog page details sidebar](https://wordpress.org/documentation/files/2023/07/63-site-editor-page-blog-details-sidebar.png)

## [Create new pages in the Site Editor](#create-new-pages-in-the-site-editor)

You can click the **plus icon** on the Site Editor Pages sidebar to draft a new page. Selecting this button opens a new modal where you can add an optional page title:

![The modal has an input field for adding a page title, a close button, a cancel button and a button that submits the form, with the text "Create draft".](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-new-draft-title.png)

Selecting the **Create draft** button in the modal creates a new draft and redirects you to the screen where you can edit the new page.

## [Edit pages in the Site Editor](#edit-pages-in-the-site-editor)

To start editing a page in the Site Editor, click anywhere in the preview window or select a page from the Pages menu and click the pen icon.

When you edit pages in the Site Editor, you can see your page content in the template. Depending on the template, you may see your site header, the page content, and your site footer:

![The Site Editor displays a single page. The list view is opened and the blocks have icons that show that they are locked. The settings sidebar shows that the Pages template is used for this page.](https://wordpress.org/documentation/files/2023/07/63-site-editor-page-editing-1024x534.png)

In the top right corner is a save button, a toggle button that opens the settings sidebar, a button that opens the [Styles interface](article__styles-overview.md), and an options menu.

The page settings tab has four panels:

- The page title
- A summary panel with information about the page status and the publishing date.
- The content panel lists the editable blocks, such as the title and post content blocks.
- The template panel shows the name and preview of the current template.

**Status:**

You can use the status option in the summary panel to change the page to a draft, schedule it, or add a password:

![The status option is a modal where you can choose the page's publishing status from a row of radio boxes.
Draft, pending, private, scheduled and published.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-summary-panel-status.png)

**Publish:**

You can use the publish option in the summary panel to change the publishing date of the page. You can enter a date and time using the input fields or select a date from the calendar. You can use the arrow buttons to change the month of the calendar.

![The publish option displays input fields for date and time.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-summary-panel-publish-527x1024.png)

### [Locked and editable blocks](#locked-and-editable-blocks)

Blocks in the **template** are locked and can not be selected without enabling the **Edit template** option. This prevents accidental editing of the template.

The blocks in the **content panel** in the settings sidebar can be edited, but not moved or deleted. These blocks can be selected, but do not have a block toolbar. Clicking on a block in the content panel selects the block in the editor.

In the example image below, the content panel includes a post featured image, the title block, and the post content block.

- Selecting the post featured image block will let you upload or add an image from the media library, but you can not remove the block.
- Selecting the title block will let you change the page title. But you can not change the title’s color or font size.

![Content panel with options for featured image, title, and post content.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-content-panel.png)

The content panel in the settings sidebar

Blocks that are **placed inside the Post Content block** are editable. You can add new blocks, edit, move, and remove blocks. **These are the same blocks that you would see in the block editor when editing the page.**

In this example image, the editable blocks are the paragraph and quote blocks:

![WordPress editor list view showing featured image, title, and post content blocks.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-editing-list-view.png)

The post featured image block, title, and post content blocks are locked in the list view. The blocks nested inside the post content block are unlocked and can be edited.

## [Enable template editing](#enable-template-editing)

When you click on a block in the template, WordPress shows a notification in the bottom left corner that says: Edit your template to edit this block.

![Edit template notification](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-template-blocks.png)

You can also enable template editing by selecting the “Edit template” button in the template panel in the settings sidebar:

![The template panel in the settings sidebar shows the name of the template, a preview, and a "Edit template" button.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-editing-settings-template-panel.png)

Now you are redirected, and you can make changes to the template.

To go back to the page, you can use the back button above the editor:

![The toolbar at the top of the editor.](https://wordpress.org/documentation/files/2023/07/63-site-editor-pages-template-back.png)

Or, you can click on the WordPress logo or site icon in the top left corner to open the Site Editor sidebar.

## [Resource Links](#resource-links)

- [Site Editor](article__site-editor.md)
- [Create Pages](article__create-pages.md)

## [Changelog](#changelog)

- 2025-05-27 (props [@ravigadhiyawp](https://profiles.wordpress.org/ravigadhiyawp/))
  - Update missing ALT texts.
- Updated 2023-08-24
  - Edited some text
  - Changed the category to Site Editor
- Created 2023-08-08

## Was this article helpful? How could it be improved? [Cancel reply](article__site-editor-pages.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fsite-editor-pages%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

August 8, 2023

Last updated

August 25, 2025
