# File block – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/file-block/

---

# File block

## In this article

Table of Contents

- [Add a File block](#add-a-file-block)
  - [User roles and capabilities](#user-roles-and-capabilities)
- [Block toolbar](#block-toolbar)
  - [Replace](#replace)
  - [Copy URL](#copy-url)
  - [Bold & Italic](#bold-italic)
  - [More rich text controls](#more-rich-text-controls)
  - [More options](#more-options)
- [Block settings](#block-settings)
  - [Settings](#settings)
  - [Styles](#styles)
  - [Color](#color)
  - [Dimensions](#dimensions)
  - [Border](#border)
  - [Advanced](#advanced)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go back to the list of Blocks](article__blocks.md)

The File block allows you to add a link to the downloadable files on your website.

[](https://wordpress.org/documentation/files/2019/03/Kapture-2026-03-02-at-21.16.47.mp4)

## [Add a File block](#add-a-file-block)

1. To add a File block**,** use the **Block Inserter** (+), or you can type `/file` in a new paragraph block and press enter.

[![How to add a File block](https://wordpress.org/documentation/files/2020/09/add-file-block.png)](https://wordpress.org/documentation/files/2020/09/add-file-block.png)

[Detailed instructions on adding blocks](article__adding-a-new-block.md)

2. To add a file, you can use the upload button to upload your files directly from your computer, or you can click **Media Library** to add files from your media library.

![How to upload a file ](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-11.40.04-AM-1024x424.png)

After you add a file, you can edit the file name by typing inside the rectangle. You can click **Replace** to replace the file and upload another one. You can click **Copy URL** to copy the URL of the file.

![Block toolbar in the File block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-11.42.32-AM-1.png)

If you try to upload an unsupported file, you will see an error notification at the bottom-left corner of the screen.

![Error message when an unsupported file format is uploaded](https://wordpress.org/documentation/files/2022/11/image4-1.png)

3. Content-Only Editing Support

The **File block** supports **content-only editing**, allowing editors to update the block’s inner content—such as the file name and download button text—without modifying its structure or settings.

[](https://wordpress.org/documentation/files/2019/03/file-content-editing.mp4)

Key Features:

- Available when using **Write mode** in the Site Editor.
- Enables quick updates to file content in locked templates or sections.
- Matches behavior of other media blocks like the Image block.

### [User roles and capabilities](#user-roles-and-capabilities)

Some elements of the File block are only available to certain user roles. By default, only Administrators, Editors and Authors can upload a file using the file block. [Learn more about WordPress user roles and capabilities.](article__roles-and-capabilities.md)

## [Block toolbar](#block-toolbar)

Every block comes with unique toolbar icons and block-specific user controls that allow you to manipulate the block right in the editor.

The File block has seven buttons:

- Transform to
- Drag icon
- Move handles
- Change alignment
- Replace
- Copy URL
- More options

[![Block toolbar in the File block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-11.45.49-AM.png)](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-11.45.49-AM.png)

**Transform to:**

The **Transform** button allows you to convert the File block into other block types while preserving its content.

![Transform tool in the File block](https://wordpress.org/documentation/files/2019/03/file-transform.png)

Transform tool in the File block

- **Image** – Convert the file block into an image block if suitable.
- **Columns** – Place the file within a multi-column layout.
- **Details** – Wrap the file in a collapsible details/summary block.
- **Group** – Group the file with other blocks for shared styling.

**Drag icon**

![Drag icon in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-11.53.48-AM.png)

To drag and drop the block to a new location on the page template, click and hold the rectangle of dots, then drag to the new location. The blue separator line indicates where the block will be placed. Release the left mouse button when you find the new location to place the block.

**Move handles**

![Move handles in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.09.23-PM.png)

The up and down arrow icons can be used to move a block up and down on the page.

[Get more information about moving a block within the editor.](article__moving-blocks.md)

**Change Alignment**

![Change alignment in the File block](https://wordpress.org/documentation/files/2019/03/file-alignment.png)

Change alignment in the File block

Using the alignment drop-down from the toolbar, you can align the file block to the left, make it center-aligned, or align it to the right. You can also make the File block wide width and full width.

### [Replace](#replace)

Using the Replace button, you can replace your file by uploading a new one from your device or adding another one from your media library.

![Replace file in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.14.18-PM.png)

### [Copy URL](#copy-url)

Click Copy URL to copy the URL of the file to your clipboard. You will see a message on the bottom left corner of your browser saying the URL has been copied.

![Copy URL to clipboard message in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.19.10-PM-1.png)

### [Bold & Italic](#bold-italic)

Use the “Bold” option or “Ctrl+B” / “Cmd+B” on your keyboard to bold it, which is usually heavier than the surrounding text.

![Bold option in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.31.33-PM.png)

Use the “Italic” option or “Ctrl+I” / “Cmd+I” on your keyboard to italicize it, which usually appears slanted to the right.

![Italic option in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.32.20-PM-1.png)

### [More rich text controls](#more-rich-text-controls)

![Rich Text controls in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.21.38-PM.png)

The drop-down menu to the right of the italic button contains a range of additional rich text editing options such as highlighting, inline code, strikethrough, and more.

[Read about more rich text editing options.](article__more-text-editing-overview.md)

### [More options](#more-options)

The [More options menu](article__more-options.md) represented by **three vertical dots on the far right of the toolbar** gives you more features such as the ability to duplicate, remove, or edit your block as HTML.

[Read about these and other settings.](article__more-options.md)

## [Block settings](#block-settings)

Every block has specific options in the editor sidebar in addition to the options found in the block toolbar. If you do not see the sidebar, simply click the **cog** icon next to the **Publish** or **Update** button.

![Cog icon in the File Block](https://wordpress.org/documentation/files/2022/06/Screen-Shot-2022-06-21-at-12.39.18-PM.png)

The File block offers the following settings

### [Settings](#settings)

You can choose whether to link to the media file directly or a separate attachment page by using the drop-down menu. If you want the media file/attachment page to open in a new tab, enable the **Open in a new tab** button.

The File block comes with a **Download** button that can be toggled on and off using the **Show download button**.

By toggling it off, the file name will appear as a link.

![Settings Sidebar for the File block](https://wordpress.org/documentation/files/2019/03/file-settings.png)

Settings Sidebar for the File block

If you upload a PDF file, you’ll see a PDF settings section on the block settings.

![PDF settings](https://wordpress.org/documentation/files/2022/11/image2.png)

You can embed PDF on your page or post by enabling the **Show inline embed** option. When it’s enabled, you’ll see the **height in pixels** setting that lets you adjust the PDF display by using the slider or entering a value in pixels.

![PDF settings to adjust the height in pixels for the display](https://wordpress.org/documentation/files/2022/11/image3-1-1-1024x644.png)

### [Styles](#styles)

The Styles tab allows you to customize the appearance of the File block.

![Styles Sidebar for the File block](https://wordpress.org/documentation/files/2019/03/file-styles.png)

Styles Sidebar for the File block

### [Color](#color)

Text and background colors can be set on a per-block basis, allowing you to call attention to important content. Using the Color settings, you can customize the block by adding text, background, and link colors.

[See this guide for more information about changing colors.](article__colors-settings-overview.md)

### [Dimensions](#dimensions)

The File block provides various options to adjust its dimensions, such as width and height, allowing you to customize the text layout to ensure visual consistency.

For details refer to this support article: [Dimension settings overview](article__dimension-controls-overview.md)

### [Border](#border)

The File block provides border settings options to add border color, width, and radius.

For details refer to this support article: [Border settings overview](article__border-settings-overview.md)

### [Advanced](#advanced)

The File block provides the following Advanced settings options: HTML Anchor, Additional CSS Class(es), Additional CSS, and Styles.

[Learn more about advanced settings](article__advanced-settings-overview.md)

## [Changelog](#changelog)

- Updated 2026-05-25 (props to @kjoyner @awetz583)
  - Updated “Advanced” section to refer to new overview page
- 2026-03-02 (props to @markusmai @nith53 @jyolsna @wowashuwow @awetz583)
  - Added user roles and capabilities section
  - Updated more rich text controls
  - Updated video
- 2025-04-29 (props to [@karthickmurugan](https://profiles.wordpress.org/karthickmurugan/))
  - Add Content-only editing support section.
  - Update screenshots to 6.8 version.
  - Update Transform to section.
- Updated 2023-08-13
  - Updated More Options
- Updated 2022-11-16
  - Updating screenshots, video and content for 6.1, added info for PDF settings
- Updated 2022-06-21
  - Updated content and screenshots for 6.0
  - Added ALT Tags for images
- Updated 2022-06-07
  - Add video for 6.0
- Updated 2020-09-19
  - Updated new block toolbar features
  - Updated new block settings features
  - Updated 5.5 screenshots
- Updated 2020-06-18
  - Added ‘Link back to blocks’ to the top of the page
  - Converted the ‘Advance’ reusable block to a regular block
  - Added the ‘Changelog’
- Created 2019-03-07

## Was this article helpful? How could it be improved? [Cancel reply](article__file-block.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Ffile-block%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 7, 2019

Last updated

July 23, 2026
