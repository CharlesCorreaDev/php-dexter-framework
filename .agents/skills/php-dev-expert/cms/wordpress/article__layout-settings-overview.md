# Layout Settings overview – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/layout-settings-overview/

---

# Layout Settings overview

## In this article

Table of Contents

- [How to access Layout Settings](#how-to-access-layout-settings)
  - [Selecting the parent block](#selecting-the-parent-block)
  - [Navigating through nested blocks](#navigating-through-nested-blocks)
- [Settings](#settings)
  - [Justification](#justification)
  - [Orientation](#orientation)
  - [Allowing child blocks to wrap](#allowing-child-blocks-to-wrap)
  - [Using and customizing layout width](#using-and-customizing-layout-width)
  - [Grid column options](#grid-column-options)
  - [Reset All](#reset-all)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

The layout settings in [blocks](article__blocks.md) allow you to change the justification and orientation of the nested child blocks inside their parent blocks. These settings can be found in the parent blocks within which the child blocks are nested.

## [How to access Layout Settings](#how-to-access-layout-settings)

Click on the [Block Settings sidebar](article__work-with-blocks.md#block-settings) button next to the Save/Publish button int the editor. Then look for the **Layout** section in the settings options of the parent block.

![Block settings sidebar button highlighted with the Layout settings expanded and highlighted](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-1.10.08-PM-1024x291.png)

### [Selecting the parent block](#selecting-the-parent-block)

To access the layout settings in the parent block, click on any of the child blocks. The first icon in the block toolbar of the child block will select the parent block.

![Selecting the parent block either by choosing the block toolbar parent icon or choose the parent in list view](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-1.05.14-PM-1024x298.png)

### [Navigating through nested blocks](#navigating-through-nested-blocks)

In addition to using the block toolbar, the [List View](article__list-view.md) tool can be used to navigate between layers of content and nested blocks. This will make it easy to access the parent and child block. Click on the **Document Overview** button in the top left of the editor to open the **List View** panel.

![Document overview button location](https://wordpress.org/documentation/files/2021/07/Screenshot-2026-09-04-at-3.59.41-PM.png)

[Learn more about List View](article__list-view.md).

## [Settings](#settings)

Each supported block comes with different layout settings.

### [Justification](#justification)

![Justification settings](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-11.52.20-AM.png)

You can set the justification of the child blocks inside the parent block. You can justify the child blocks to the **Left**, **Center**, or **Right**.

Some blocks, like the [Buttons block](article__buttons-block.md), include a **Space between items** setting that distributes child elements horizontally with equal spacing. This feature only applies to horizontal orientation layouts.

### [Orientation](#orientation)

When you first add multiple blocks to a parent block, the child blocks will be displayed next to each other horizontally.

Another option is to display the child blocks vertically, or stacked. When you choose vertical orientation for the button block, you will also see a **Justification** setting for **Stretch items** which will fill the available horizontal space with the button.

### [Allowing child blocks to wrap](#allowing-child-blocks-to-wrap)

The **Allow to wrap to multiple lines** setting is on by default, allowing child blocks to automatically flow onto a new line on smaller screens like mobile devices. If turned off, all child blocks will remain forced onto a single line regardless of screen width.

To find this setting, open the **Layout** panel, click the three-dot menu icon, and select **Wrapping** to reveal the toggle.

![Highlighted three dot icon and Wrapping enabled to show "Allow to wrap multiple lines" toggle. ](https://wordpress.org/documentation/files/2026/09/Screenshot-2026-09-05-at-12.10.03-PM-edited.png)

### [Using and customizing layout width](#using-and-customizing-layout-width)

Some blocks such as the [Query Loop](article__query-loop-block.md) block that has nested inner blocks like [Post Template](article__post-template-block.md) block and [Group block](article__group-block.md) will have the following layout option that lets you choose the layout width for the nested blocks.

![Inner blocks use content width toggle](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-12.37.01-PM.png)

Toggle off **Inner blocks use content width** so that the nested inner blocks fill the width of the parent container. You can also toggle on **Inner blocks use content width** so that the nested inner blocks use content width with options for full and wide widths.

![Layout panel with three dot menu highlighted showing Content width, Wide width, and Justification options active.](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-12.39.13-PM-1.png)

To view **Content width**, **Wide width**, and **Justification** options, click on the three dot icon in the Layout panel and click on the options to view each option.

You can change the values and set the unit in PX, %, EM, REM, VW, or VH for the **Content width** and **Wide width**. You can also change the **Justification** for the nested elements to left, center or right aligned within the parent container.

### [Grid column options](#grid-column-options)

The [Grid block](article__grid-block.md#layout) and Query Loop block in grid mode have layout options for **Max. columns**, **Min. Column width** and **Fill available space**.

![Grid block layout options for Max. columns, Min. column width and Fill available space](https://wordpress.org/documentation/files/2026/09/Screenshot-2026-09-05-at-1.27.26-PM-edited.png)

### [Reset All](#reset-all)

![Layout settings for buttons block with the three dot menu and Reset all options highlighted](https://wordpress.org/documentation/files/2022/11/Screenshot-2026-09-05-at-11.49.09-AM-1024x371.png)

If you make customizations to these settings and want to revert to the original settings quickly, you can do so by selecting the three-dot menu icon and clicking **Reset All**. This resets the settings and removes all of your changes.

[Learn more about the Reset all function.](article__working-with-blocks.md#reset-controls)

## [Changelog](#changelog)

- Updated 2026-09-05 (props @awetz583 @atachibana)
  - Updated screenshots and descriptions for 7.1
- Created 2022-11-01

## Was this article helpful? How could it be improved? [Cancel reply](article__layout-settings-overview.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Flayout-settings-overview%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

November 2, 2022

Last updated

September 15, 2026
