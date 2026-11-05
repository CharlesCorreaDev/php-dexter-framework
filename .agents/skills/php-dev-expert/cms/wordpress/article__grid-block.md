# Grid block – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/grid-block/

---

# Grid block

## In this article

Table of Contents

- [Add a Grid block](#add-a-grid-block)
- [Block toolbar](#block-toolbar)
  - [Transform to](#transform-to)
  - [Block-moving tools](#block-moving-tools)
  - [Align](#align)
  - [Options](#options)
- [Block settings](#block-settings)
  - [Styles](#styles)
  - [Typography](#typography)
  - [Background](#background)
  - [Layout](#layout)
  - [Dimensions](#dimensions)
  - [Border & Shadow](#border-shadow)
  - [Elements](#elements)
  - [Position](#position)
  - [Advanced](#advanced)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go back to the list of Blocks](article__blocks.md)

Grid block is one of the container blocks that can be used to organize multiple blocks and adjust the height, width, and position of all blocks inside the container. As a container block, it’s possible to transform a Grid block into a Group, Row or Stack block without changing the content of the block.

## [Add a Grid block](#add-a-grid-block)

To add a Grid block, click the **+ Block Inserter** button in the top-left corner of the editor. Search for the Grid block and click on the block to add it to the page

[Get detailed instructions on adding blocks](article__adding-a-new-block.md).

## [Block toolbar](#block-toolbar)

To view the block toolbar, click on the block, and the toolbar will be displayed.

Every block comes with unique toolbar icons. These block-specific controls allow you to manipulate the block right in the editor.

![Grid block Toolbar](https://wordpress.org/documentation/files/2024/08/grid-block-toolbar-6.6-300x77.jpg)

### [Transform to](#transform-to)

Click on the Transform button to convert the Grid block into Group, Row, Stack, Cover, Columns or Details blocks.

![Group block transform options](https://wordpress.org/documentation/files/2024/09/Screenshot-2026-08-31-at-3.59.02-PM.png)
![Grid block Toolbar - Moving handles](https://wordpress.org/documentation/files/2024/08/grid-block-toolbar-movinghandle-6.6-300x77.jpg)

### [Block-moving tools](#block-moving-tools)

Use the block-moving tools to move the Grid block.

The **drag** or **six dots** icon allows you to freely reposition the block anywhere within the editor by holding the icon and dragging it to the new location.

You can also use the **arrow icons** to move the block up or down within the group of nested blocks or when there are multiple blocks.

[Get more information about moving a block within the Editor](article__moving-blocks.md).

### [Align](#align)

![Grid block Toolbar - Align button](https://wordpress.org/documentation/files/2024/08/grid-block-toolbar-align-6.6-300x181.jpg)

Use the change alignment tool to change the width of the Grid block. The following is a list of the block width options:

- **None** – Keep width the same as the content size
- **Wide width** – Increase the width of the block beyond the content size
- **Full width** – Extend the block to cover the full width of the screen

**Wide width** and **Full width** alignment options are only available if they are enabled in your theme.

### [Options](#options)

The Options button on a block toolbar gives you more features to customize the block.

[Read about these and other settings.](article__more-options.md)

## [Block settings](#block-settings)

The block settings panel contains customization options specific to the block. To open it, select the block and click the cog icon next to the Publish button.

![Block settings button location](https://wordpress.org/documentation/files/2024/09/block-settings-button-7-0.png)

Click Group, Row, Stack button in the Block Settings to transform the Grid block to each block.

![Settings icons](https://wordpress.org/documentation/files/2024/08/grid-block-settings-6.6-300x191.jpg)

### [Styles](#styles)

You can modify the Grid block styles by choosing the options under the **Styles** panel. The style options may vary based on your theme.

![Styles options for Twenty Twenty Five theme grid block](https://wordpress.org/documentation/files/2024/09/Screenshot-2026-09-06-at-12.33.44-PM-1024x509.png)

### [Typography](#typography)

The Grid blockprovides typography settings to change the font family, appearance, line height, letter spacing, decoration, letter case, and font size.

[Get more details about changing typography settings.](article__typography-settings-overview.md)

### [Background](#background)

The Background settings allow you to customize the appearance of supported blocks using background images, colors, and gradients.

For details, refer to the [Background Settings Overview](article__background-settings-overview.md).

### [Layout](#layout)

![Grid layout](https://wordpress.org/documentation/files/2024/09/Screenshot-2026-09-05-at-11.09.04-AM.png)

In the Grid block’s **Layout** settings, you can control how many columns appear in each row.

- **Max. columns** – Sets the maximum number of columns the grid can show in one row.
- **Min. column width** – Sets the smallest width each column can be before the grid wraps to fewer columns per row.

Use a combination of these settings to control how the grid scales across various screen sizes.

For example, if you set **Max. columns** to `4` and **Min. column width** to `12rem`, the grid displays up to 4 columns when space permits. On narrower screens, the grid automatically wraps content into 3, 2, or 1 column to fit the screen width.

[](https://wordpress.org/documentation/files/2024/09/grid-block-min-max-layout-settings.mp4)

#### [Fill available space](#fill-available-space)

![Layout option to Fill available space](https://wordpress.org/documentation/files/2024/09/Screenshot-2026-09-05-at-11.10.25-AM-1024x735.png)

Enable the toggle to Fill available space by clicking on the three dot menu at the top right of the **Layout** settings panel. When this is selected, content inside the grid columns will automatically stretch to fill the available space, instead of leaving gaps when there are too few items to fill a row.

[Learn more in the Layout Settings overview.](article__layout-settings-overview.md)

### [Dimensions](#dimensions)

The Gridblock provides dimension settings options to add padding, margin, and block spacing.

For details, refer to this support article: [Dimension settings overview](article__dimension-controls-overview.md).

### [Border & Shadow](#border-shadow)

The Grid block provides border settings options to add border color, width, and radius. You can also add a shadow.

For details refer to this support article: [Border & Shadow settings overview](article__border-settings-overview.md).

### [Elements](#elements)

Use the elements panel to change colors for blocks nested inside the selected block.

[Learn more about changing colors for nested elements.](article__colors-settings-overview.md#elements-panel-for-nested-elements)

### [Position](#position)

The position setting is only available when the Grid block is located at the root-level. The drop-down menu has two options: **Default** and **Sticky**. If the Sticky option is selected, the Grid block will remain at the top of the window when you scroll down the page.

![The position settings for stack block](https://wordpress.org/documentation/files/2023/05/position.png)

### [Advanced](#advanced)

The Grid block provides the following Advanced settings options: HTML Anchor, Additional CSS Class(es), Additional CSS, HTML element, Styles, and Allowed blocks.

[Learn more about advanced settings](article__advanced-settings-overview.md)

## [Changelog](#changelog)

- Updated 2026-09-05 (props to @milana\_cap @awetz583)
  - Updated screenshots and video for 7.1
  - Added Fill available space to Layout
  - Combined Settings and Styles panels
- Updated 2026-05-19 (props to @kjoyner @isabel\_brison, @ramonopoly, @joen)
  - Updated screenshots for WordPress 7.0 release
  - Added video demonstrating min and max column options
  - Removed italics
  - Updated Advanced content section
  - Updated headings to use sentence casing
- Created 2024-08-24

## Was this article helpful? How could it be improved? [Cancel reply](article__grid-block.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fgrid-block%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

September 1, 2024

Last updated

September 6, 2026
