# Site Editor – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/site-editor/

---

# Site Editor

## In this article

Table of Contents

- [How to access the Site editor](#how-to-access-this-feature)
- [Things to do in the Site Editor](#how-to-access-this-feature-2)
- [The Site Editor workspace](#how-to-use-the-site-editor)
- [How to use the Site Editor](#how-to-use-the-site-editor-2)
  - [To edit the site’s styles](#to-edit-the-sites-styles)
  - [To customize the site’s layout](#to-customize-the-sites-layout)
  - [To browse the templates and template parts](#access-the-template-editor-via-the-site-editor)
  - [To manage the site’s templates](#to-manage-the-sites-templates)
  - [To manage the template parts](#to-manage-the-template-parts)
  - [To manage pages](#to-manage-pages)
- [How to return to the Dashboard](#how-to-return-to-the-dashboard)
- [How to export templates and styles](#how-to-export-templates-and-styles)
- [Useful tools when using the Site Editor](#useful-tools-when-using-the-site-editor)
  - [The Command Palette](#the-command-palette)
  - [List View](#list-view)
  - [Block Patterns](#block-patterns)
  - [Copy and paste styles](#copy-and-paste-styles)
  - [Apply style changes globally](#apply-style-changes-globally)
  - [Resize the preview of the Site Editor](#resize-the-preview-of-the-site-editor)
  - [Zoom out mode](#zoom-out-mode)
- [Resource Links](#resource-links)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

The Site editor allows you to design the entire site including the header, footer, and everything in between, with [blocks](article__blocks.md). It gives you greater control over how your site looks.

The Site Editor is **only** available when you install and activate a [Block theme](article__block-themes.md) on your site.

## [How to access the Site editor](#how-to-access-this-feature)

To work with the Site editor, you need to use a[block theme](article__block-themes.md) on your site. A block theme is a theme that uses [blocks](article__blocks.md) for all parts of a site, including navigation menus, header, content, and site footer.

All [blocks](article__blocks.md) that are available in the [WordPress Block editor](article__wordpress-editor.md) can be used in the Site editor. A set of blocks called [Theme blocks](article__blocks.md#theme-blocks) are specifically built for the Site editor.

To find block themes, from the WordPress dashboard, go to **Appearance** > **Themes** and click **Add New**. In the **Add Themes** page, select **Block Themes** to find the growing list of [Block themes](article__block-themes.md) in the [WordPress theme directory](https://wordpress.org/themes/tags/full-site-editing/).

![Appearance > Themes showing block theme options](https://wordpress.org/documentation/files/2022/01/Appearance-Themes-showing-block-themes-1024x517.png)

How to find a block theme

Once you install and activate a Block theme on your site, go to **Appearance** > **Editor** to open the Site Editor.

![Appearance section of the admin interface showing the Themes and Editor entry points after activating a block theme. ](https://wordpress.org/documentation/files/2022/01/Screen-Shot-2023-03-27-at-6.23.05-PM.png)

Appearance menu after activating a block theme

## [Things to do in the Site Editor](#how-to-access-this-feature-2)

Once you enter the Site Editor, you will see five menu items.

![Main menu screen in the Site Editor.](https://wordpress.org/documentation/files/2026/08/site-editor.jpg)

- [Identity](article__site-editor-identity.md): Allows you to set Site Title, Site Tagline, Site Logo, and Site Icon at a high level.
- [Styles](article__styles-overview.md): Provides a direct access to edit your site’s style variations.
- [Pages](article__site-editor-pages.md): Allows you to edit the content of your pages inside the Site Editor itself.
- [Navigation](article__site-editor-navigation.md): Allows you to browse your menus and make basic changes.
- [Patterns](article__site-editor-patterns.md): Your Synced patterns and template parts can be managed here.
- [Templates](article__template-editor.md): Review the different default layouts for the different sections on your site, as well as custom pages (search results, 404, etc).

You will also see an icon of a magnifying glass in the Admin bar. Click on it to access the [Command Palette.](https://wordpress.org/support/article/site-editor-command-palette)

Below is an overview of the different sections in the Site Editor.

[](https://wordpress.org/documentation/files/2023/08/site-editor-overview.mp4)

## [The Site Editor workspace](#how-to-use-the-site-editor)

The Site editor loads the home page of your site (based on what you have set in the [Reading Settings](article__settings-reading-screen.md#reading-settings)) to start editing.

The top menu in the Site editor includes the following options:

![Site editor toolbar with numbers indicating various options to explore. ](https://wordpress.org/documentation/files/2026/08/site-editor-persistent-admin-bar-marked-1-1024x125.jpg)

1. **Back:** Click the left-chevron Back button to leave the current editing view and return to the previous Site Editor screen. The WordPress Toolbar remains visible above the Site Editor and provides access to WordPress and site navigation.

2. **The + Block inserter button**: Add a new [block](article__blocks.md), [block pattern](article__block-pattern.md), Media, or synced pattern (if the site has synched patterns) to the Site editor.

![Block Inserter Panel](https://wordpress.org/documentation/files/2023/08/6-3-inserter-662x1024.png)

Block inserter panel

3. **Undo:**Undo the most recent action taken.
4. **Redo:**Redo an action you reversed using the **Undo** button.
5. [**List View**](article__list-view.md): See a list of all of the blocks that are on the page and easily navigate between the blocks on your page. This is useful for seeing the page’s structure and editing, moving, and removing blocks.
6. **[Command Palette](https://wordpress.org/support/article/site-editor-command-palette):** Click here to access all your site’s content, templates, and patterns quickly, as well as invoking other actions (settings, new page, etc). Command Palette can always be accessed from the admin bar as well, regardless of which screen you are currently on.

7. **Preview**: Preview changes before saving them. Here you can also save changes as a Responsive styles for a specific viewport.

![Screenshot of the Preview dropdown in Site Editor](https://wordpress.org/documentation/files/2026/08/site-editor-preview.jpg)

8. **Settings**: Show or hide the Template and Block Settings sidebar menu.

[](https://wordpress.org/documentation/files/2023/08/site-editor-reset-customizations.mp4)

9. [**Styles**](article__styles-overview.md)**:**Browse style variations available for the theme you have, set the typography, color palettes, and layout for the entire site, or customize the appearance of specific blocks for the whole site.
10. **Save:**Save the changes you made in the Site editor.
    - When you click the **Save**button, you will get a list of all the [synced patterns](article__reusable-blocks.md), [navigation menus](article__site-editor-navigation.md), [templates](article__template-editor.md) and [template parts](article__template-part-block.md) where you have made changes.
    - You can choose to save all or just some of them.
    - Note that some changes (like changes to the Header and Footer templates) will apply to all pages of your site that use those templates, and not just the page you were working on.

[](https://wordpress.org/documentation/files/2023/08/site-editor-save-changes.mp4)

11. **More Options****:** Click the three vertical dots icon to open additional settings and tools.

![Site editor with an arrow pointing to the three dot menu where extra settings can be found. ](https://wordpress.org/documentation/files/2023/08/Site-Editor-More-options-432x1024.png)

12. **Admin bar**: WordPress 7.1 brings a persistent Admin bar into every Site Editor screen. It provides consistent access to WordPress and site navigation while you work in the editor. If a Site Icon is set, it is displayed in the Toolbar. The Toolbar is hidden when Distraction Free mode is enabled.

**View top toolbar**: Display or hide the top toolbar in the editor. When you enable this option, block toolbars are pinned to the top of the WordPress block editor (right under the top toolbar) instead of appearing directly above the block.

![Top toolbar enabled](https://wordpress.org/documentation/files/2026/08/site-editor-view-top-toolbar-1024x249.jpg)

Top toolbar enabled

**Spotlight mode**: All blocks are greyed out except for the one you’re working on so that you can focus on a single block at a time.

![Spotlight mode](https://wordpress.org/documentation/files/2022/05/Screen-Shot-2022-05-12-at-10.01.48-PM-1-1024x722.png)

Spotlight mode

**Distraction Free**: When this options is activated, all non-essential parts of the UI will be hidden to provide a more immersive editing experience. Enabling Distraction Free mode also hides the WordPress Toolbar.

**Editor**: By default, you will be in the **Visual editor**. Switch to the **Code editor** to view the entire page in HTML code editor.

**Plugins**: Here, you can switch between **Settings** and **Styles** in the Site editor Sidebar.

**Tools**: Here, you can download your theme with the updated templates and styles (**Export**), learn [keyboard shortcuts](article__block-editor-keyboard-shortcuts.md), visit the Site Editor welcome guide, copy all blocks, or view additional support articles.

**Preferences**: Use the [Preferences](article__preferences-overview.md) menu to customize the editing experience and change how you interact with blocks.

## [How to use the Site Editor](#how-to-use-the-site-editor-2)

### [To edit the site’s styles](#to-edit-the-sites-styles)

You can use the Site Editor to customize the styles for the entire website and for the blocks. Styles settings are available regardless of what template or template part you are editing.

- Go to **Appearance** > **Editor**.
- Click the Styles menu item or on the icon next to the block settings sidebar.

![](https://wordpress.org/documentation/files/2023/08/site-editor-styles-menu-689x1024.png)
![](https://wordpress.org/documentation/files/2023/08/site-editor-styles-icon-693x1024.png)

In the **Styles** section, you can browse the style variations available for the theme you have, change the color palettes and typography, and layout across the entire site and also change the appearance of blocks which are also applicable across the whole site.

To review your **style revisions or reset the changes** you made completely, click the three-dot menu icon in the right corner and select either option.

[](https://wordpress.org/documentation/files/2023/08/site-editor-styles-overview-revisions-reset-1.mp4)

Learn more about Styles in this support article: [Styles overview](article__styles-overview.md).

### [To customize the site’s layout](#to-customize-the-sites-layout)

You can use the Site Editor to build the structure and layout of your entire site, using blocks. Eg: areas like headers, footers, and the structural appearance of your site’s posts and pages.

All [blocks](article__blocks.md) that are available in the [WordPress Block Editor](article__wordpress-editor.md) can be used in the Site Editor. A set of blocks called [Theme blocks](article__blocks.md#theme-blocks) are specifically built for the Site Editor.

Examples: the [Query Loop Block](article__query-loop-block.md) allows you to customize the look and feel of your post layout, the [Navigation Block](article__navigation-block.md) lets you customize the site’s navigation menu, the [Site Title Block](article__site-title-block.md) helps to customize the Site Title and more.

Check out the full list of [Theme blocks](article__blocks.md#theme-blocks).

#### [Example – How to Customize Twenty Twenty-Three using the Site Editor](#example-how-to-customize-twenty-twenty-three-using-the-site-editor)

[Twenty Twenty-Three](article__twenty-twenty-three.md) supports the Site Editor and can be customized using it. As an example, let’s remove the gap at the top of the home page in Twenty Twenty-Three. To do this, remove the padding at the bottom of the header template part and the padding at the top of the content area.

![Before](https://wordpress.org/documentation/files/2023/08/before-editing-2023-300x190.jpg)

Before

![After](https://wordpress.org/documentation/files/2023/08/after-editing-2023-300x191.jpg)

After

First, remove bottom padding of Header Template Parts.

1. From Administration Screen, Select **Appearance** > **Editor**
2. Select **Patterns** > **Template Parts** > **Header** > **Header**, and click Pencil icon to edit it.
3. Select the **Group** > **Row** block. Use the bottom block navigation.
4. From Block Settings, Click Styles.

![Styles of Header Template Parts](https://wordpress.org/documentation/files/2023/08/header-styles-2023-1024x653.jpg)

Styles of Header Template Parts

5. Scroll down to the Padding > Bottom. Current value is 2.
6. Set it to 0.
7. Save the template parts.

Next, remove top padding of content area.

8. Back to the Site Editor.
9. Select Templates > Home, and click Pencil icon to edit it.
10. Select the top Group block. Use the bottom block navigation.
11. From Block Settings, Click Styles.

![Home Template Styles](https://wordpress.org/documentation/files/2023/08/home-templates-styles-2023-1024x734.jpg)

Home Template Styles

12. Scroll down to the Padding > Top. Current value is 3.
13. Set it to 0.
14. Save the template.

### [To browse the templates and template parts](#access-the-template-editor-via-the-site-editor)

From the Site editor, you can easily browse the [templates](article__template-editor.md) and [templates parts](article__template-part-block.md) available for your site.

- Go to **Appearance** > **Editor** to open the Site editor. This will bring you to a view where you can choose to browse your templates or template parts.
- Click on **Templates** to preview the list of templates available for your site.
- Click on **Patterns** to preview the list of template parts.

[](https://wordpress.org/documentation/files/2022/01/site-editor-template-overview-6.6.mp4)

### [To manage the site’s templates](#to-manage-the-sites-templates)

WordPress uses [templates](article__template-editor.md) to create the layout and structure for specific page types on your site. The Site Editor displays the template choices that you can add to your site and lets you create custom templates using the [Template Editor](article__template-editor.md).

From the **Appearance** > **Editor**, you will be shown a view that includes a sidebar with your list of Templates and Patterns that includes the list of template parts.

[](https://wordpress.org/documentation/files/2022/01/site-editor-templates-6.6.mp4)

Learn more about Templates in this support article: [Template Editor](article__template-editor.md).

### [To manage the template parts](#to-manage-the-template-parts)

A Template part is a block for managing the repeating global areas of the site such as a Header, Footer, Sidebar, etc. They are primarily meant to define the site structure and can be reused. You can also create custom Template Parts that can be reused through the templates.

From the **Appearance** > **Editor**, click the **Patterns** option. From All templates parts, you can access to them.

[](https://wordpress.org/documentation/files/2022/01/site-editor-template-parts-6.6.mp4)

Learn more about Template Parts in this support article: [Template Part](article__template-part-block.md).

### [To manage pages](#to-manage-pages)

Since version 6.3, it is possible to manage, edit and create pages via the Site Editor, under the “Pages” section.

[](https://wordpress.org/documentation/files/2022/01/site-editor-pages-6.6.mp4)

Learn more about managing pages via the Site Editor in this support article: [Site Editor Pages](article__site-editor-pages.md)

## [How to return to the Dashboard](#how-to-return-to-the-dashboard)

Use the **Back button** (the left-chevron icon) in the upper-left area of the Site Editor to return to the previous Site Editor screen.

The WordPress Toolbar remains available above the Site Editor and provides access to your site’s administration screens. If you have unsaved changes when leaving an editing view, WordPress will prompt you to save or review those changes before leaving.

![How to exit the Site Editor by clicking on the Back button.](https://wordpress.org/documentation/files/2026/08/site-editor-return-to-dashboard.jpg)

## [How to export templates and styles](#how-to-export-templates-and-styles)

You can export your theme with the changes you made in the Site Editor including the templates, template parts, and style settings, similar to the [Tools > Export option](article__tools-export-screen.md).

- Open the Site Editor by going to **Appearance** > **Editor**.
- Select the three vertical dots icon next to your **Styles** settings option.
- Under **Tools**, select **Export**. This will begin the export process and you will receive a downloaded zip file of your theme with the templates and template parts included.

![How to find the "Export" option under the three-dot "More Options" menu on the top right part of the screen.](https://wordpress.org/documentation/files/2023/08/Screen-Shot-on-2023-08-05-at-073719-1024x752.png)

## [Useful tools when using the Site Editor](#useful-tools-when-using-the-site-editor)

The following tools are helpful when using the Site Editor.

### [The Command Palette](#the-command-palette)

The Command Palette offers you a quick way to navigate the **content** of your site and to invoke different **actions** such as creating new posts/pages, toggling preferences, and accessing your styles and custom CSS settings.

You can open the Command Palette from the WordPress Admin bar while working in the Site Editor. In Site View, you can also access it from the search control in the Site Editor navigation. You can open it from the keyboard with `Cmd+K` on macOS or `Ctrl+K` on Windows and Linux.

Learn more about the Command Palette in this support article: [Site Editor Command Palette](https://wordpress.org/support/article/site-editor-command-palette).

### [List View](#list-view)

List View helps you navigate complex block layouts and nested block structures. You can select exactly which block you need, and get a quick overview of the block layout on the page you are working on. You can easily select multiple blocks and edit, move or group them.

[](https://wordpress.org/documentation/files/2023/08/site-editor-list-view.mp4)

Learn more about List View in this support article:  [List View](article__list-view.md).

### [Block Patterns](#block-patterns)

Block Patterns are a collection of predefined blocks that you can insert into posts and pages. You can then customize them further. WordPress comes with a set of standard Block Patterns. You can also find Block Patterns bundled with the [block themes](article__block-themes.md).

Learn more about Block Patterns in this support article: [Block Pattern](article__block-pattern.md).

### [Copy and paste styles](#copy-and-paste-styles)

With WordPress 6.2, a new option was added to allow you to copy and paste block styles, making it easy to reuse designs you’ve created. You can find this from the three dot menu in any block and it’s meant to be used to copy and paste between the same type of block:

[](https://wordpress.org/documentation/files/2023/08/site-editor-copy-paste-styles.mp4)

### [Apply style changes globally](#apply-style-changes-globally)

If you’re more comfortable with more advanced options when creating a design or customizing individual blocks, as of WordPress 6.2, you can take changes made to an individual block and apply it to **all blocks of the same type**. For example, you could apply a single design for an individual block to all blocks in your site with a new option under the **Advanced** section of block settings.

![How to apply the current's block style to all styles of that same type across your site by clicking on Block Settings > Advanced > Apply Globally](https://wordpress.org/documentation/files/2023/08/site-editor-apply-styles-globally-1024x593.png)

### [Resize the preview of the Site Editor](#resize-the-preview-of-the-site-editor)

When you’re in the Site Editor, you might want to change the preview of the template or template part you’re viewing. You can do this by selecting the handles of the dark gray sidebar and moving it to your liking.

[](https://wordpress.org/documentation/files/2023/08/site-editor-resize-pattern-preview.mov)

### [Zoom out mode](#zoom-out-mode)

![Zoom out toggle](https://wordpress.org/documentation/files/2021/01/zoom-out-toggle.png)

Zoom Out View provides a condensed visual overview of the entire page structure, enabling users to quickly assess the hierarchy, placement, and design of individual sections without having to scroll through each block in detail.

[Learn more about Zoom out mode.](article__zoom-out-view.md)

## [Resource Links](#resource-links)

- [Additional guide to using Site Editor](article__additional-guide-to-using-the-site-editor.md)
- [Simple Site Design and Site Editing](https://learn.wordpress.org/course/simple-site-design-with-full-site-editing/)
- [Intro into the Site Editor and Template Editor](https://learn.wordpress.org/workshop/intro-to-the-site-editor-and-template-editor/)

## [Changelog](#changelog)

- Updated 2026-09-14 (props @karthickmurugan @awetz583)
  - Added Zoom out
- Updated 2026-08-19
  - Updated content and screenshots for 7.1
- Updated 2024-09-14
  - Updated template and template parts management section with Grid View
- Updated 2023-08-13
  - Added example of Site Editor usage.
- Updated 2023-08-08
  - Replaced “Reusable Blocks” with “Patterns”
  - Updated wording & screenshots to match the new interface.
  - Added a reference to the Command Palette & Site Editor Pages.
- Updated 2023-03-27
  - Updated content and screenshots for 6.2
- Updated 2022-10-17
  - Updated content and screenshots/video for 6.1
- Updated 2022-05-17
  - Reworking the content & updating videos/screenshots for 6.0
- Created 2022-01-05

## Was this article helpful? How could it be improved? [Cancel reply](article__site-editor.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fsite-editor%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

January 5, 2022

Last updated

September 14, 2026
