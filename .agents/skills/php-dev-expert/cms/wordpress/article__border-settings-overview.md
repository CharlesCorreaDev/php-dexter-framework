# Border & Shadow Settings overview – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/border-settings-overview/

---

# Border & Shadow Settings overview

## In this article

Table of Contents

- [How to access border and shadow settings](#how-to-access-border-and-shadow-settings)
- [Type of settings](#type-of-settings)
  - [Width](#width)
  - [Color](#color)
  - [Style](#style)
  - [Radius](#radius)
  - [Shadow](#shadow)
- [Demonstration](#demonstration)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

You can use the border and shadow settings in your [block](article__blocks.md) to set a visible border or shadow on specific blocks. These settings allow you to control the width and radius on each side of the border. Some blocks also have the option to change the border color.

The border and shadow settings are available when you use the [block editor](article__wordpress-editor.md). If you are new to the block editor, [this guide](article__working-with-blocks.md) will show you how to work with blocks. You can read more about the new block editor features and improvements [in this article.](https://make.wordpress.org/core/2022/09/26/core-editor-improvement-catalyst-for-creativity/)

## [How to access border and shadow settings](#how-to-access-border-and-shadow-settings)

The border and shadow settings can be found in the Block Settings sidebar of a [block](article__blocks.md) under the section **Border**.

If you don’t see the **Block Settings** sidebar, select the block you want to customize, then click the **settings** icon that is to the right of the **Publish** or **Update** buttons in the WordPress Editor.

In the **Border & Shadow** section, shadow option may be hidden. Click on the three-dot border options menu (also known as an ellipsis) to explore all the border and shadow settings that are not visible by default.

You can read more about [block settings here.](article__working-with-blocks.md#block-settings)

![Border & Shadow section in the Block Settings sidebar](https://wordpress.org/documentation/files/2022/10/border-shadow-6.7.jpg)

Screenshot

## [Type of settings](#type-of-settings)

Each supported block comes with different border and shadow settings. If you make customizations to these settings and want to revert back to the original settings quickly, you can do so by selecting the three-dot menu icon and clicking **Reset All** as [shown in this article](article__working-with-blocks.md#reset-controls). This resets the settings and removes all of your changes. Note that not every block supports all the border settings.

### [Width](#width)

The width setting allows you to define the width of the border on the four sides. You can type in a value in the text box or use the slider to adjust the value.

![Adding border width to a block](https://wordpress.org/documentation/files/2022/11/Edit-Page-Sample-Page-‹-Coco-Woofs-—-WordPress.png)

You can click on the **Link** icon to unlink the sides and set separate values for the border width for the top, left, right and bottom.

![Setting separate border width values for the four sides.](https://wordpress.org/documentation/files/2022/11/Screenshot-2022-11-16-at-9.40.45-AM.png)

You can choose to set border width using different units. Click the `px` icon to change the unit of measurement for the border thickness or radius. You can choose between `px`, `%`, `em`, `rem`, `vw`, and `vh`.

[Read more about what each of these units means.](article__typography-settings-overview.md#units-explained)

![Changing the unit of measurement ](https://wordpress.org/documentation/files/2022/11/Screenshot-2022-11-16-at-9.38.48-AM.png)

### [Color](#color)

The border color for your block can be set using the style picker next to the border width as seen below. You can the colors from the theme palette or from the default colors in the theme.

![Changing the border width and color](https://wordpress.org/documentation/files/2022/11/Screenshot-2022-11-16-at-9.43.26-AM-1-1024x663.png)

If you make customizations to these settings and want to revert back to the original settings quickly, you can do so by selecting the **Reset to default** button at the bottom of the color picker. This resets the settings and removes all of your changes.

![Reset to default button](https://wordpress.org/documentation/files/2022/11/Screenshot-2022-11-16-at-9.53.01-AM.png)

### [Style](#style)

From the color picker, you can also select one of the three border styles: straight line, dash line, and dotted line.

![Changing the border style](https://wordpress.org/documentation/files/2022/11/Screenshot-2022-11-16-at-10.00.20-AM-1024x776.png)

### [Radius](#radius)

The radius setting will give your block a more rounded border. Setting this to 0 means the block has sharp edges.

You can choose to set a border radius using different units. Click the `px` icon to change the unit of measurement for the radius. You can choose between `px`, `%`, `em`, `rem`, `vw`, and `vh`.

[Read more about what each of these units means.](article__typography-settings-overview.md#units-explained)

You can type in a value in the text box or use the slider to adjust the value.

You can click on the **Link** icon to unlink the radii and set separate values for the four corners. Below is an example of how you can have unlinked values to create a block with uneven round corners.

![How to change the border-radius ](https://wordpress.org/documentation/files/2023/04/border-radius-WP-62-1024x420.png)

Note that when you unlink the radii, hover over the radii text boxes to display a tooltip that shows which corner each of the four text boxes relates to as shown below:

![The border-radius control has labels indicating which corner of the block you are changing: Top left, top right, and so on.](https://wordpress.org/documentation/files/2023/04/border-radius-control-hover-WP-62.png)

### [Shadow](#shadow)

The shadow setting will give your block a shadow effect behind it.

Tips: If you don’t see the shadow option in the Border & Shadow section, click the three vertical dots to the right of the section header and select Shadow option.

Click Drop shadow and select shadow effects.

![Shadow setting](https://wordpress.org/documentation/files/2022/10/shadow.png)

## [Demonstration](#demonstration)

This powerful set of tools allows for some neat ways to decorate everything from individual images to overall columns of content. To see how borders can transform a block, here’s an example showing how a theme author can customize a featured image block to make it stand out even more:

[](https://wordpress.org/documentation/files/2022/10/demonstration-1.mp4)

## [Changelog](#changelog)

- Updated 2025-04-17 (props to [@nikunj8866](https://profiles.wordpress.org/nikunj8866/))
  - Add Shadow reset button
- Updated 2024-11-04
  - Add shadow setting
  - Categorised under the Block Editor from Appearance
- Updated 2023-04-11
  - Updated block styles to emphasize important links
- Updated 2023-04-03
  - Updated screenshots
  - Updated the list of blocks that has border settings
- Updated 2022-11-16
  - Updated info where color settings and style are merged together next to the Border width
  - Added video and info about tooltip for the four corners
- Created 2022-11-01

## Was this article helpful? How could it be improved? [Cancel reply](article__border-settings-overview.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fborder-settings-overview%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

October 6, 2022

Last updated

April 17, 2025
