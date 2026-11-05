# Audio block – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/audio-block/

---

# Audio block

## In this article

Table of Contents

- [Add an Audio block](#add-an-audio-block)
- [Block interface](#block-interface)
  - [Adding files](#adding-files)
  - [Alignment](#alignment)
  - [Replace audio](#edit-audio)
  - [Caption](#caption)
  - [More options](#more-options)
- [Block settings](#sidebar-settings)
  - [Settings tab](#settings-tab)
  - [Styles tab](#styles-tab)
- [Troubleshooting](#troubleshooting)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go to the list of Blocks](article__blocks.md)

Creating an Audio block will allow you to embed a piece of music, podcast, or other sound file right into your page or post.

## [Add an Audio block](#add-an-audio-block)

In order to add an Audio block, click on the inserter icon.

[](https://wordpress.org/documentation/files/2023/03/Audio-block-WP-62.mp4)

You can also type `/audio` and hit enter in a new paragraph block to add one quickly.

![When you type /audio the editor suggest adding an audio block, a SoundCloud, Spotify, Mixcloud or Pocket Casts embed.](https://wordpress.org/documentation/files/2019/03/Screenshot-2026-03-04-at-3.08.40-PM-1.jpg)

[Detailed instructions on adding blocks](article__adding-a-new-block.md)

## [Block interface](#block-interface)

Every block comes with unique toolbar icons and block-specific user controls that allow you to manipulate the block right in the editor.

![The audio block toolbar.](https://wordpress.org/documentation/files/2019/03/Screenshot-2026-03-04-at-3.05.54-PM-1.jpg)

### [Adding files](#adding-files)

When you add an Audio block, you get three options: Upload, Media Library, and Insert from URL.

![The audio block allows you to Upload Media, use media in your Library, or add from a custom URL.](https://wordpress.org/documentation/files/2019/03/Screenshot-2026-03-04-at-3.10.30-PM-1024x273.jpg)

Upload will allow you to upload a new audio file from your computer. Media Library lets you select a file that’s already uploaded to your site’s Media Library. Insert from URL lets you input a URL where the file has already been uploaded, on WordPress.com or elsewhere on the web.

Once you’ve selected your audio file you can start configuring your Audio block!

### [Alignment](#alignment)

When you select your Audio block, a toolbar will appear where you can change block’s alignment. Choosing right or left will allow you to place another block alongside the Audio block.

![Alignment settings for the audio block.](https://wordpress.org/documentation/files/2023/04/audio-block-alignment-WP-62-1024x506.png)

- **None**– Default alignment option.
- **Wide width**– Increase the width of the post beyond the content size.
- **Full width** – Extend the block to cover the full width of the screen.
- **Align left** – Make the block left-aligned.
- **Align center**– Make the block alignment centered.
- **Align right**– Make the block right aligned.

### [Replace audio](#edit-audio)

This is another option in the Audio block’s toolbar. Choosing this will allow you to select a new audio file for your block. Use this if you need to replace the audio file in your Audio block.

![When you select the Replace option in the block toolbar you can choose between opening the media library or uploading a file.
There is also information about the URL to the current media file.](https://wordpress.org/documentation/files/2023/04/audio-block-replace-WP-62-1024x428.png)

### [Caption](#caption)

If your audio file has a caption in the Media Library, it is shown below the audio player:

![The caption is below the audio player.](https://wordpress.org/documentation/files/2023/04/Audio-block-caption-1-WP-62-1024x265.png)

If your file does not have a caption in the Media library, you can add a custom caption by selecting the Add caption option in the toolbar:

![The Add caption option is in the block toolbar next to the alignment options.](https://wordpress.org/documentation/files/2023/04/audio-block-add-caption-WP-62-1024x208.png)

Both the Media Library caption and the placeholder text are editable. Select the caption to edit the text. You can use the caption toolbar to make the text bold or italic, or add a link. Select the arrow icon in the toolbar to access more options:

![The caption has a toolbar with options for making selected text bold or italic, an option to add a link, and a "more options" menu.
More options include highlighting text, inline code, inline image, and more.](https://wordpress.org/documentation/files/2023/04/audio-block-caption-toolbar-WP-62-1024x661.png)

You can remove a caption by selecting the Remove caption button in the toolbar:

![The Remove caption option is in the block toolbar next to the alignment options.](https://wordpress.org/documentation/files/2023/04/audio-block-remove-caption-WP-62-1024x281.png)

### [More options](#more-options)

These controls give you the option to copy, duplicate, and edit your block as HTML.

[Read about these and other settings.](article__more-options.md)

## [Block settings](#sidebar-settings)

Every block has specific options in the editor sidebar in addition to the options found in the block toolbar. If you do not see the sidebar, simply click the ‘settings’ icon next to the Publish button.

![The settings sidebar can be opened using the Settings the button next to the Publish button.](https://wordpress.org/documentation/files/2019/03/Screenshot-2026-03-04-at-3.13.55-PM-1.jpg)

### [Settings tab](#settings-tab)

![The audio settings for the audio block are in the block settings sidebar.](https://wordpress.org/documentation/files/2019/03/Screenshot-2026-03-04-at-3.15.07-PM-1.jpg)

#### [Autoplay & loop](#autoplay-loop)

These options let you set your audio file to autoplay when someone visits the page or post. Looping lets you choose if the audio file repeats after it’s finished.

#### [Preload](#preload)

This option allows you to select how much of the audio file is downloaded when the page or post is loaded. While it may be tempting to go ahead and have the whole file download automatically, keep in mind that this can slow your page’s load speed down.

There are four settings:

**Browser default** – Use settings from site visitor’s browser.

**Auto** – The entire audio file is downloaded, regardless of whether the visitor clicks the Play button or not. This makes the biggest impact on your page or post’s load speed, especially with larger audio files.

**Metadata** – Only basic info about the file will be downloaded automatically. Like the None option, the download of the audio file only begins when someone clicks Play. This setting is also very fast, as the only thing downloaded is text. On a fundamental level, there’s not a big difference between None and Metadata.

**None** – Nothing about the audio file is downloaded automatically. The download of the audio file only begins when your visitor clicks the Play button. This is the fastest setting.

#### [Advanced](#advanced)

The Audio block provides the following Advanced settings options: HTML Anchor, Additional CSS Class(es), Additional CSS, and Styles.

[Learn more about advanced settings](article__advanced-settings-overview.md)

### [Styles tab](#styles-tab)

#### [Dimensions](#dimensions)

Theblock provides dimension settings options to add padding and margin.

For details refer to this support article: [Dimension settings overview](article__dimension-controls-overview.md)

## [Troubleshooting](#troubleshooting)

If you try to upload a file type that is not supported, the editor will display an error message: Sorry, this file type is not supported here.

## [Changelog](#changelog)

- Updated 2026-05-25 (props @kjoyner @awetz583)
  - Updated “Advanced” section to refer to new overview page
- Update 2026-03-04 (props @awetz583)
  - Update missing screenshots and block name formatting
- Update 2025-10-21 (props @sajib1223)
  - Set all headings to sentence case
- Updated 2023-03-29
  - Updated information about the caption option
  - Updated images
- Updated 2022-11-25
  - Added Alt text to a few images
  - Replaces redundant content
- Updated 2022-03-15
  - Update screenshots for 5.9
  - Update alignment and replace sections content
  - Add More options section
- Updated 2022-03-03
  - Update screenshots for 5.9
- Updated 2020-06-18
  - Added ‘Link back to blocks’ to the top of the page
  - Replace the ‘Advanced’ section with the ‘Advanced settings’ reusable block
- Created 2019-03-07

## Was this article helpful? How could it be improved? [Cancel reply](article__audio-block.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Faudio-block%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 7, 2019

Last updated

July 23, 2026
