# Block Error: Unexpected or Invalid Content – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/block-error-unexpected-or-invalid-content/

---

# Block Error: Unexpected or Invalid Content

## In this article

Table of Contents

- [Error overview](#error-overview)
- [Possible reasons a block displays an error](#possible-reasons-a-block-displays-an-error)
  - [The option to edit the block using HTML](#the-option-to-edit-the-block-using-html)
  - [Unexpected HTML formatting](#unexpected-html-formatting)
  - [Plugin or Theme conflict](#plugin-or-theme-conflict)
- [Ways to solve the error](#ways-to-solve-the-error)
  - [Attempt Block Recovery](#attempt-block-recovery)
  - [Resolve](#resolve)
  - [Convert to HTML](#convert-to-html-2)
  - [Convert to Classic Block](#convert-to-classic-block)

[Back to top](#wp--skip-link--target)

## [Error overview](#error-overview)

If you’re encountering this error message in the Block Editor, it typically means that there is a problem with the content you’re trying to insert or edit within a block. Usually, the error is displayed when the affected block contains content that has a formatting problem, this could happen for a number of reasons explained in this article.

![Picture displaying a block error ](https://wordpress.org/documentation/files/2023/06/Screenshot-2023-06-23-at-16.41.16-1024x152.png)

**More Options**

As with other blocks, the affected blocks also include the **More options** menu in the block toolbar. You can access these options by clicking on the ellipses (three dots) in the block toolbar as shown below. The **Copy Block** option allows you to copy the block and its content to the clipboard. You can paste this content elsewhere in the editor or even on a different post/page.

[Read about the More Options settings and how to make use of them](article__more-options.md)

![More options for the affected block ](https://wordpress.org/documentation/files/2023/06/more-options-block-error-1024x823.png)

## [Possible reasons a block displays an error](#possible-reasons-a-block-displays-an-error)

### [The option to edit the block using HTML](#the-option-to-edit-the-block-using-html)

A block’s toolbar provides an option to edit your block’s HTML code.

![Showing the option to edit a block as HTML option](https://wordpress.org/documentation/files/2023/06/edit-as-html-1024x450.png)

In this case, the error can be displayed when there is a syntax error. For example, adding two <p> opening tags before a closing tag </p> on a Paragraph block or using the wrong syntax for adding a link, as shown below.

[](https://wordpress.org/documentation/files/2023/06/edit-visually-video.mov)

### [Unexpected HTML formatting](#unexpected-html-formatting)

This can occur when the block editor detects a mismatch between the expected markup and the actual HTML content within a block. This error typically happens when HTML is manually added or copied into a block, and the block editor doesn’t recognize it as valid content for that specific block type.

For example, adding JavaScript to a block that isn’t the [Custom HTML Block](article__custom-html.md), or, in the case shown below, adding inline CSS to a paragraph block. Style attributes aren’t expected by the block, so it will return an error.

[](https://wordpress.org/documentation/files/2023/06/unexpected-html-formatting.mov)

### [Plugin or Theme conflict](#plugin-or-theme-conflict)

It’s possible that a theme or plugin is interfering with the editor. Maybe your site isn’t up-to-date, you didn’t configure some important settings properly, or there is some code conflicting with the blocks on the page. However, whatever the reason may be, you will need to do some troubleshooting to solve this kind of problem.

## [Ways to solve the error](#ways-to-solve-the-error)

The block will give you several options to fix the error: Attempt Block Recovery and an ellipsis (three-dot) button containing the options Resolve, Convert to HTML, and Convert to Classic Block.

![](https://wordpress.org/documentation/files/2023/06/resolve-the-error-1024x520.png)

You will have to be mindful of why you are receiving the error, in some cases, these options will not be helpful, for example, when you have the wrong Syntax or you try to add JavaScript or PHP code.

### [Attempt Block Recovery](#attempt-block-recovery)

![](https://wordpress.org/documentation/files/2023/06/attempt-block-recovery--1024x361.png)

Attempt Block Recovery button will restore the block as it was before the error appeared. This option will automatically remove the custom code and revert the block back to its previous safe state.

### [Resolve](#resolve)

![](https://wordpress.org/documentation/files/2023/06/Resolve-1024x336.png)

When you click on the ellipsis (three dots) button, you will see more options, the first option is Resolve. When you choose to Resolve the block error, you will be provided with two options each with its own possible outcome.

#### [Convert to HTML](#convert-to-html)

On the left side, you have the option to convert the block to a Custom HTML Block. This will convert the invalid content directly into an HTML block and keep any HTML customization made. You can read more about [the Custom HTML block](article__custom-html.md) in this guide.

#### [Convert to Block](#convert-to-block)

On the right side, you can convert the HTML code to Blocks,  changes that will be made when that is done will be clearly displayed.

In the example below, converting the block to a Custom HTML block will keep the inline CSS added to change the font color to pink, which would normally be stripped off by the Paragraph block.

![](https://wordpress.org/documentation/files/2023/06/resolve-options-1024x251.png)

### [Convert to HTML](#convert-to-html-2)

The third option is to convert to a Custom HTML block, this is the same function as the Convert to HTML option, which is part of the Resolve option above.

![](https://wordpress.org/documentation/files/2023/06/convert-to-html-block.png)[](https://wordpress.org/documentation/files/2023/06/convert-to-html.mov)

### [Convert to Classic Block](#convert-to-classic-block)

![](https://wordpress.org/documentation/files/2023/06/convert-to-classic-block.png)

You can convert the invalid content into a [Classic Block](https://wordpress.org/plugins/classic-editor/). This block contains the same options from the Classic Editor. The changes you would have made will be kept similar to converting the Custom HTML block. You can go over [our Classic Editor guide](article__write-posts-classic-editor.md) for an explanation of each of the options shown for the Classic Block.

[](https://wordpress.org/documentation/files/2023/06/convert-to-classic-block.mov)

## Was this article helpful? How could it be improved? [Cancel reply](article__block-error-unexpected-or-invalid-content.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fblock-error-unexpected-or-invalid-content%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

June 27, 2023

Last updated

June 22, 2026
