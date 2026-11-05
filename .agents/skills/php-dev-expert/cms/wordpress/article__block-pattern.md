# Block Patterns – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/block-pattern/

---

# Block Patterns

## In this article

Table of Contents

- [How to use a Block Pattern](#how-to-use-a-block-pattern)
  - [How to edit content added from a Block Pattern](#how-to-edit-content-added-from-a-block-pattern)
- [How to create a Block Pattern](#how-to-use-a-block-pattern-2)
- [How to manage a Block Pattern](#how-to-customize-a-block-pattern)
  - [How to work with patterns](#how-to-work-with-patterns)
  - [How to edit the content of the pattern](#how-to-edit-the-content-of-the-pattern)
  - [How to customize a Block Pattern](#how-to-customize-a-block-pattern-2)
  - [How to find contextual patterns](#contextual-patterns)
- [How to find more patterns](#how-to-find-more-patterns)
- [Resources](#resources)
- [Frequently asked questions](#frequently-asked-questions)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

Block Patterns are a collection of blocks that you can insert into posts and pages and then customize with your own content. Using a Block Pattern can reduce the time required to create content on your site, as well as being a great way to learn how different blocks can be combined to produce interesting effects.

To find more patterns, you can also [use the Block Pattern Directory](article__block-pattern-directory.md).

- [How to use a Block Pattern](#how-to-use-a-block-pattern)
- [How to customize a block pattern](#how-to-customize-a-block-pattern)
- [How to find contextual patterns](#contextual-patterns)
- [Resources](#resources)
- [Frequently asked questions](#frequently-asked-questions)

Since WordPress 6.3, you can create your own patterns. Patterns work exactly the same as predefined patterns stored in the Patterns Directory. Also, with the “Sync” option enabled, the synced pattern will behave in exactly the same way as a reusable block. Editing the synced pattern will update it anywhere it is used. After creating a synced pattern, you can ‘Detach’ it to a regular block, and edit the block without affecting your already saved synced pattern.

WordPress 6.3 renamed Reusable Blocks to Patterns. A synced pattern will behave in exactly the same way as a reusable block.

## [How to use a Block Pattern](#how-to-use-a-block-pattern)

1. Click the + icon to add a new block from the top toolbar in the [WordPress Block editor](article__wordpress-editor.md).
2. Click on the **Patterns**tab or **Synced Patterns** tab.
3. For the Patterns tab, use the dropdown to choose which category of patterns you want to use, or click **Explore** to open a modal that allows you to have a larger view of each pattern.
4. Either click the pattern you wish to insert or drag and drop it into your content. If you click on the pattern, it will be inserted at the location of your cursor.

[](https://wordpress.org/documentation/files/2021/12/Block-pattern-5.9.mov)

### [How to edit content added from a Block Pattern](#how-to-edit-content-added-from-a-block-pattern)

Once you insert a block pattern onto your page, you can edit its elements using content-only editing. In this mode, editing options are restricted to basic content changes, such as modifying text or swapping images, which prevents accidental changes to the layout.

To unlock full editing capabilities for the individual blocks inside the pattern, select the **Edit pattern** button either by selecting the pattern in the block inspector or by locating the button on the Block Settings sidebar.

## [How to create a Block Pattern](#how-to-use-a-block-pattern-2)

Since WordPress 6.3, you can create your own patterns.

1. Select the block or blocks you want to turn into a pattern.
2. Click on the **three dot** menu that opens up the **additional settings**.
3. Click on “**Create pattern/reusable block**“.
4. Enter the name of the pattern.
5. To synchronize patterns, turn on the **Sync option**. Editing the pattern will update it anywhere it is used.
6. Click Create.

[](https://wordpress.org/documentation/files/2023/08/256239744-52edd86c-a582-4719-97e3-d11159161e46.mp4)

You’ll then be able to locate the created patterns at **Patterns -> My Pattern** or Synced Patterns (overlapping rhombus icon) of Block Inserter.

![Location of "My Patterns" within the block inserter.](https://wordpress.org/documentation/files/2023/08/WP-6-3-create-patterns-1024x579.jpeg)

## [How to manage a Block Pattern](#how-to-customize-a-block-pattern)

You can manage your pattern from the Site Editor.

1. Select **Appearance** -> **Editor** on the Administration Screen.
2. Click **Patterns**.  
   Selecting **Options** -> Manage Patterns in the Block Editor opens the same panel.

### [How to work with patterns](#how-to-work-with-patterns)

You can Rename, Duplicate, Export as JSON, and Delete the pattern from Actions menu (three dot icon) of each pattern.

![Site Editor listing all custom patterns and how to edit them.](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-6-1024x576.png)

### [How to edit the content of the pattern](#how-to-edit-the-content-of-the-pattern)

To modify a pattern, click the pattern, and click Edit (pencil icon).

[](https://wordpress.org/documentation/files/2023/08/2p-6-3-How-to-edit-a-pattern.mp4)

### [How to customize a Block Pattern](#how-to-customize-a-block-pattern-2)

Once you insert a Block Pattern, the blocks can be edited in the same way as any other blocks.

Click on any block in the pattern to edit the content within the block.

![Image of a block pattern showing an arrow pointing to the Replace option for the image in the pattern. ](https://wordpress.org/documentation/files/2021/07/Screen-Shot-2021-07-08-at-5.22.08-PM-1024x440.png)

You can also add more blocks to a Block Pattern and insert more Block Patterns to your page anywhere you want.

For the synced pattern, you’ll see the synced pattern mentioned in the saving flow when you save the post or page itself. Saving will update it anywhere it is used, even in other posts or pages.

![Message confirming that a pattern is about to be saved.](https://wordpress.org/documentation/files/2023/08/wp-6-3-saving-a-pattern-1024x623.jpeg)

### [How to find contextual patterns](#contextual-patterns)

Some blocks such as the [Social Icons](article__social-icons.md) block and [Query Loop](article__query-loop-block.md) block have patterns built into the settings of the block. To find the contextual patterns for the **Social Icons** block, select the **Social Icon** in the **Block toolbar** and navigate to **Patterns** in the drop-down:

![Contextual patterns found in Social Icons block](https://wordpress.org/documentation/files/2020/09/social-icons-contextual-pattern.gif)

Demonstration of contextual pattern within the Social Icons block in Twenty Twenty-Two theme

For the **Query Loop** block, patterns are shown as part of the configuration of the block itself. You can learn more about the [Query Loop block here](article__query-loop-block.md).

## [How to find more patterns](#how-to-find-more-patterns)

If you want more patterns to choose from, you can explore the [Block Pattern Directory](https://wordpress.org/patterns/). This is a new directory that allows you to search and find new patterns to use on your site. After searching and finding a pattern you like, select **Copy,** and it will be saved to your clipboard. From there, return to your page or post and use the **Paste** function to add the pattern to your content.

You can read more about the [Block Pattern Directory here](article__block-pattern-directory.md).

## [Resources](#resources)

- [“Introduction to Block Patterns”](https://learn.wordpress.org/workshop/intro-to-block-patterns/) – a short workshop published by the Training team.
- [“Using Block Patterns”](https://learn.wordpress.org/tutorial/using-block-patterns/)– a tutorial published by the Training team.
- “[Contextual patterns for easier creation](https://make.wordpress.org/core/2021/05/20/core-editor-improvement-contextual-patterns-for-easier-creation/)” – a post on the WordPress Core blog.

## [Frequently asked questions](#frequently-asked-questions)

**Can I use the default images within Block Patterns on my own site?**

Yes! The images provided within Block Patterns are free to use on your site. However, because these images are being referenced from an external source (i.e. they are not added to your site’s Media Library), there is always a chance they could change or be removed.

We recommend replacing these images with your own content, but if you would like to use the ones in the patterns, please consider uploading them to your own Media Library by using the “*Upload external image*” button.

![Screenshot of an image block toolbar displaying the "upload image to media library".](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-7.png)

When you publish a post, the pre-publish check will ask you if you want to upload external images to the media library.

![Pre-publish option for uploading all external images to media library.](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-10-1024x1009.png)

**Will Block Patterns be changed? Will changes to patterns that I use impact my site?**

New Block Patterns will be continuously added, and existing Block Patterns may be changed or removed over time. However, once you add a Block Pattern to your site, there is no link to the original pattern in the Add Block menu, and any subsequent changes would not impact anything on your site’s pages or posts.

## [Changelog](#changelog)

- Updated 2026-08-31 (props @awetz583)
  - Added content-only mode for new blocks in 7.0
- Updated 2024-03-26
  - Update screenshots to 6.4
- Updated 2023-08-08
  - WP 6.3 introduced custom patterns, and Reusable Block was renamed to Synced Pattern.
- Updated 2022-11-28
  - Removed external link in the resources
  - Updated heading levels and some content for 6.1
- 2022-10-19 Added animated `.gif` for contextual patterns. Added link to Learn Tutorial. Sentence casing updates.
- 2021-12-21 Added in an update to include Block Pattern modal
- 2021-07-08 Reference to Block Pattern directory and contextual patterns added, visuals updated
- 2021-02-19 Internal links corrected
- 2020-09-04 Created

## Was this article helpful? How could it be improved? [Cancel reply](article__block-pattern.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fblock-pattern%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

September 4, 2020

Last updated

August 31, 2026
