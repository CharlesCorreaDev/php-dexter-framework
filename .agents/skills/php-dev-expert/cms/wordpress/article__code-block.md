# Code block – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/code-block/

---

# Code block

## In this article

Table of Contents

- [Add a Code block](#add-a-code-block)
- [Block toolbar](#block-toolbar)
  - [Transform to](#transform-to)
  - [Moving handles](#moving-handles)
  - [Change alignment](#change-alignment)
  - [Bold](#bold)
  - [Italic](#italic)
  - [Link](#link)
  - [More rich text options](#more-rich-text-options)
  - [More options](#more-options)
- [Block settings](#block-settings)
  - [Color](#color)
  - [Typography](#typography)
  - [Dimensions](#dimensions)
  - [Border](#border)
  - [Advanced](#advanced)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go back to the list of **Blocks**](article__blocks.md)

**Code** block lets you add and display code snippets for others to view.

**Code** block example:

```
if ( condition ) {
    action1();
    action2();
} elseif ( condition2 && condition3 ) {
    action3();
    action4();
} else {
    defaultaction();
}
```

## [Add a Code block](#add-a-code-block)

To add the **Code** block, open the block inserter by clicking the (**+**) icon on the upper left corner of the editor. After that, look for **Code** using the search bar and click it to insert the block into the editor.

[](https://wordpress.org/documentation/files/2024/03/257921530-6fa51096-f087-49c8-841d-231d24914eca.mp4)

A demonstration to add and use code block

Alternatively, you can type `/code` on the editor to insert the **Code** block manually.

![Code block keyboard shortcut](https://wordpress.org/documentation/files/2021/02/Screenshot-454535.png)

[Detailed instructions on adding blocks](article__adding-a-new-block.md)

## [Block toolbar](#block-toolbar)

Most blocks have their own block-specific controls that allow you to manipulate the block right in the editor.

The **Code**Block shows the following buttons:

- Transform to
- Moving handles
- Bold
- Italic
- Link
- More Rich Text controls
- More options

![Code block toolbar](https://wordpress.org/documentation/files/2024/03/257561204-45bc26bb-f192-4fdd-a870-d3834c91c7f8.png)

### [Transform to](#transform-to)

The Transform to button lets you change the **Code** block into a *Paragraph*, *Columns*, *Group*, *Custom HTML* or *Preformatted blocks*.

![Code block toolbar with the transform option highlighted](https://wordpress.org/documentation/files/2024/03/257561888-d7ce127c-9cc4-4396-8a9e-fa443fce8ddf.png)

Transforming the **Code** block into *Group* will give you the ability to change the background color around the code.

![Code block in a group with a colored background](https://wordpress.org/documentation/files/2019/03/Untitled-2676757.png)

### [Moving handles](#moving-handles)

The dotted icons can be used to drag and drop a block to the place of your choosing. The up and down arrow icons can be used to shift a block up and down in your document.

![Code block toolbar with moving handles highlighted](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28.png)

[Get more information about moving a block within the editor.](article__moving-blocks.md)

### [Change alignment](#change-alignment)

![Code block toolbar with the alignment option highlighted](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-5.png)

The *change alignment* tool lets you align the **Code**block within the content. You can choose one of the following alignment options:

**None:** Leaves the block alignment as is.

**Wide width:** Increase the block’s width beyond the content size.

### [Bold](#bold)

![Code block toolbar with bold option highlighted](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-1.png)

You can select the text in the **Code** block and use the *Bold* option or **Ctrl+B** / **Cmd+B** on your keyboard to bold it, which is usually heavier than the surrounding text.

### [Italic](#italic)

![Code block toolbar with italic option highlighted](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-2.png)

You can select the text in the **Code** block and use the *Italic* option or **Ctrl+I** / **Cmd+I** on your keyboard to italicize it, which usually appears slanted to the right.

### [Link](#link)

![Code block toolbar with link option highlighted](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-3.png)

Use the link icon to hyperlink the highlighted text inside the **Code** block.

[Read about more link editing options.](article__link-editing.md)

### [More rich text options](#more-rich-text-options)

The drop-down menu to the left of the [More options menu](article__more-options.md) contains a range of additional rich text editing options such as highlighting, inline code, strikethrough, and more.

[Read about more rich text editing options.](article__more-text-editing-overview.md)

### [More options](#more-options)

The Options menu represented by three vertical dots on the far right of the toolbar gives you more features such as the ability to duplicate or remove the block.

[Read about these and other settings.](article__more-text-editing-overview.md)

## [Block settings](#block-settings)

The block settings panel contains customization options specific to the block. To open it, select the block and click the **Settings** button next to the **Publish** button.

![Block settings panel](https://wordpress.org/documentation/files/2024/03/257561238-782eee25-933c-4f66-95b7-439ae8022e28-4.png)

### [Color](#color)

The **Code** block provides color settings options to change the text and background colors.

For details, refer to this support article: [Color settings overview](https://wordpress.org/support/article/colors-settings-overview/)

### [Typography](#typography)

The **Code** block provides typography settings to change the font family, appearance, line height, letter spacing, decoration, letter case, and font size.

For details, refer to this support article: [Typography settings overview](https://wordpress.org/support/article/typography-settings-overview/)

### [Dimensions](#dimensions)

The **Code** block provides dimension settings options to add padding and margin.

For details, refer to this support article: [Dimension settings overview](https://wordpress.org/support/article/dimension-controls-overview/)

### [Border](#border)

The **Code** block provides border settings options to add border color, width, and radius.

For details, refer to this support article: [Border settings overview](article__border-settings-overview.md)

### [Advanced](#advanced)

The Code block provides the following Advanced settings options: HTML Anchor, Additional CSS Class(es), Additional CSS, and Styles.

[Learn more about advanced settings](article__advanced-settings-overview.md)

## [Changelog](#changelog)

- Updated 2026-05-25 (props to @kjoyner @awetz583)
  - Updated “Advanced” section to refer to new overview page
- Updated 2026-03-01
  - Updated block name from italic to bold (props katmoody, rollybueno)
  - Monospaced when referrencing `/code` block (props katmoody, rollybueno)
  - Add a section heading on how to add a Code block (props katmoody, rollybueno)
- Updated 2025-12-08
  - Changed the capitalization in the title to Code block.
- Updated 2024-03-26
  - Add wide align support
  - Update videos and screenshots for 6.3
- Updated 2023-08-09
  - Replaced the link section with short summary linking to new dedicated page.
- Updated 2023-06-08
  - Replaced “More rich text options” section with short summary linking to new dedicated page for rich text editing options.
- Updated 2023-06-02
  - Screenshots for 6.2
  - Revised formatting
  - Added transform to paragraph support
- Updated 2021-02-27
  - Added Typography option
- Updated 2020-09-13
  - Screenshots and video as per WordPress 5.5
  - Added feature changes in Block Toolbar
  - Added feature changes in Block Settings
- Created 2019-03-07

## Was this article helpful? How could it be improved? [Cancel reply](article__code-block.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fcode-block%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 7, 2019

Last updated

July 23, 2026
