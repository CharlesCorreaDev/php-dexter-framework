# Facebook embed – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/facebook-embed/

---

# Facebook embed

## In this article

Table of Contents

- [Block Toolbar](#block-toolbar)
- [Block Settings](#block-settings)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go back to the list of **Blocks**](article__blocks.md)

Due to Facebook’s [decision to close the oEmbed end](https://developers.facebook.com/blog/post/2020/08/04/Introducing-graph-v8-marketing-api-v8) point for embedding Facebook links, the block will not work anymore after October 24, 2020. Publishers who want to embed Facebook links into their sites will require a developer account and an appid, and provide an authentication token with their call to the endpoint. Facebook Documentation: [create an app](https://developers.facebook.com/docs/apps/)

WordPress leadership reached out to Facebook but it seems the policy change is final. Apart from alerting users here and in other places, WordPress contributors can’t do anything about it.

---

*Facebook Embed* block allows you to add Facebook posts to your post or pages. Keep in mind that the post needs to be *public*in order to add it.

![Facebook Embed block](https://wordpress.org/documentation/files/2020/04/image6-1024x467.png)

Besides Facebook Posts, you can also share links to Facebook Photos, Facebook Albums, and Facebook Videos.

Note that you can not embed Facebook pages, Facebook events, and Facebook groups.

Embedding a Facebook post is as simple as following these steps:

1. Copy the preferred link from the Facebook post you want to embed. Make sure it’s a public post.

![Copy the preferred link from a Facebook post
](https://wordpress.org/documentation/files/2020/04/image3-1024x551.png)

2. From the WordPress dashboard, go to your post and click the (+) icon to open the block inserter pop-up window and search for the *Facebook* block. You can also use the keyboard shortcut `/facebook` to quickly insert a *Facebook* block.

![Inserting a Facebook embed block using the keyboard shortcut.
](https://wordpress.org/documentation/files/2020/04/image9.png)

[Detailed instructions on adding blocks](article__adding-a-new-block.md)

3. Paste the link that you’ve copied and click *Embed*.

![Embed the post into the block](https://wordpress.org/documentation/files/2020/04/image7-1024x324.png)

4. In your editor, you see the link and the comment “*Embedded content from facebook.com can’t be previewed in the editor”*.

![The message “Embedded content from facebook.com can’t be previewed in the editor” when you embed a Facebook post.
](https://wordpress.org/documentation/files/2020/04/image1-1024x690.png)

5. Use the *Preview* button to see how the post fits into your post/page

![Preview of the Facebook embed post.](https://wordpress.org/documentation/files/2022/09/Screen-Shot-2022-09-16-at-10.49.15-AM-1024x1004.png)

## [Block Toolbar](#block-toolbar)

![Block toolbar for the Facebook embed block](https://wordpress.org/documentation/files/2022/09/Screen-Shot-2022-09-16-at-10.51.37-AM.png)

The block toolbar contains the tools to customize each block. The *Facebook*  block’s toolbar consists of the following tools:

**Transform to**

![Transform tool in the Facebook embed block toolbar](https://wordpress.org/documentation/files/2020/04/image10.png)

You can transform a *Facebook embed* into a Group. This would give you the ability to change the background color around the *Facebook embed*.

**Block-moving tools**

![Block moving tools in the Facebook embed block toolbar](https://wordpress.org/documentation/files/2020/04/image5.png)

Use the block-moving tools to move the block up and down inside the editor. Use the six dots icon to drag and drop the *Facebook* block and reposition it anywhere on the editor. Alternatively, click on the up and down arrows to move the block up or down the editor.

**Change alignment**

![Change alignment in the Facebook embed block toolbar](https://wordpress.org/documentation/files/2020/04/image8-1024x492.png)

- **Align left** – Make the Facebook post left aligned
- **Align center** – Make the Facebook post alignment centered
- **Align right** – Make the Facebook post align right
- **Wide width** – Increase the width of the post beyond the content size
- **Full width** – Extend the Facebook post to cover the full width of the screen.

**Note:** *“Wide width” and “Full width” alignments need to be enabled by the Theme of your site.*

**More options**

![More options in the Facebook embed block](https://wordpress.org/documentation/files/2022/09/Screen-Shot-2022-09-16-at-10.59.04-AM.png)

These controls give you the option to copy, duplicate, and edit your block as HTML.

[Read about these and other settings.](article__more-options.md)

## [Block Settings](#block-settings)

The block settings panel contains customization options specific to the block. To open it, select the block and click the cog icon next to the Publish button.

![How to show the block settings sidebar](https://wordpress.org/documentation/files/2020/04/image4.png)

Besides the Advanced section, the Facebook embed has only one setting in the “Block Settings” sidebar: Media Settings.

**Media settings**

![Media settings turned off in the Facebook embed block](https://wordpress.org/documentation/files/2020/04/Screen-Shot-2020-04-20-at-9.29.46-AM.png)
![Media settings turned on in the Facebook embed block](https://wordpress.org/documentation/files/2020/04/Screen-Shot-2020-04-20-at-9.29.55-AM.png)

Via the *Media Settings* you can control the behavior of your post embed when viewed from a smaller device, like on a phone screen.

The Toggle switch turns on or off the resize functionality for smaller devices. The default setting is “on” or blue.

**“Off:”** This embed may not preserve its aspect ratio when the browser is resized. In the off position the toggle switch is gray.

**“On:”** This embed will preserve its aspect ratio when the browser is resized. The toggle switch turns blue in the “On” position.

**Advanced settings**

The “Advanced” tab lets you add CSS class(es) to your block. This will allow you to write custom CSS and styles to the block.

![Advanced option in the selected Block](https://lh6.googleusercontent.com/HCaeEAd-xkijY3husAGN8FkRfOokz6h-mLa1vQoT11JIf366WEE4Y3jtoy6CTOJGTpBZELgZPdIewg2ug8pURV5XtFciGwLHJiNwleOvlGte5WnWTug0SYe4p-qBR54_8oR1NwHM)

Advanced option in the selected Block

## [Changelog](#changelog)

- Updated 2024-09-27
  - Updated broken image Screenshots.
  - Fixed inconsistent “Facebook” capitalization issue in the images’ ALT texts.
- Updated 2022-08-16
  - Fixed formatting, updated screenshots, and added new information about block-moving tools functionality.
  - Added ALT tags for the images
- Updated 2020-09-21
  - Announcement of discontinuation of Facebook block in v. 9.0 and WordPress 5.6
- Updated 2020-08-18
  - Replaced “More Options” – new screenshot
  - Added “Move To” and “Copy” section under More Options
- Updated 2020-04-21
  - Add sentence to the Alignment about Theme support for wide width and full width options.
- Created 2020-04-20

## Was this article helpful? How could it be improved? [Cancel reply](article__facebook-embed.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Ffacebook-embed%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

April 20, 2020

Last updated

September 27, 2024
