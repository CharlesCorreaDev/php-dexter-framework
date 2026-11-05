# Playlist block – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/playlist-block/

---

# Playlist block

## In this article

Table of Contents

- [Requirements](#requirements)
- [Add a Playlist block](#add-a-playlist-block)
- [Add tracks to the playlist](#add-tracks-to-the-playlist)
- [Play and pause tracks](#play-and-pause-tracks)
- [The waveform player](#the-waveform-player)
- [Block toolbar](#block-toolbar)
  - [Transform to](#transform-to)
  - [Moving handles](#moving-handles)
  - [More options](#more-options)
- [Block settings](#block-settings)
  - [Settings](#settings)
  - [Color](#color)
  - [Waveform styles](#waveform-styles)
  - [Typography](#typography)
  - [Dimensions](#dimensions)
  - [Advanced](#advanced)
- [Tips](#tips)
- [Frequently asked questions](#frequently-asked-questions)
- [Troubleshooting](#troubleshooting)
- [Demo](#demo)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

[Go back to the list of Blocks](article__blocks.md)

The Playlist block lets you add a collection of audio tracks to your content and play them in a single audio player. Visitors can browse the track list, play tracks in order or on shuffle, and follow the progress of the current track in an interactive waveform visualization. Each track can display and customize its own metadata, such as the title, artist, track number, length, and artwork.

## [Requirements](#requirements)

- WordPress 7.1 or later. The Playlist block is available by default and no longer requires enabling a block experiment.

## [Add a Playlist block](#add-a-playlist-block)

1. Open a post or page in the editor.
2. Place your cursor where you want the playlist to appear.
3. Open the Block Inserter (+) in the top toolbar, search for “Playlist,” and select the Playlist block.

You can also type `/playlist` in the block editor and press Enter.

![](https://wordpress.org/documentation/files/2026/08/image.png)

[Read detailed instructions on adding blocks.](article__adding-a-new-block.md)

## [Add tracks to the playlist](#add-tracks-to-the-playlist)

1. Select the Playlist block.
2. Upload one or more audio files, or choose existing audio files from your Media Library.
3. Each audio file is added to the playlist as a track.

If your audio files include metadata, the block displays details such as the track title, artist, track number, and track length. Tracks can also optionally display artwork: when a track has an image attached, the artwork appears as a thumbnail in the track list and inside the play button of the waveform player while the track is playing.

![View of a selected playlist block with three jazz songs displayed.](https://wordpress.org/documentation/files/2026/08/Screenshot-2026-08-18-at-9.40.00-PM.png)

## [Play and pause tracks](#play-and-pause-tracks)

On the published page, visitors can:

- Select the play button in the waveform player to start or stop playback.
- Select any track in the track list to play it.
- Select the currently playing track a second time to pause it. Pressing Enter or the spacebar on a focused track works the same way: Enter plays the track and the spacebar (or a second Enter) pauses it.

The action label on each track updates between Play and Pause to reflect the current state, so screen reader users always know what selecting the track will do.

## [The waveform player](#the-waveform-player)

The Playlist block replaces the default browser audio controls with a waveform player that works consistently across all browsers. The waveform:

- Shows the shape of the audio and fills in as the track plays, giving a visual indication of progress.
- Supports seeking: click or tap anywhere on the waveform to jump to that position in the track.
- Supports keyboard seeking: with the player focused, use the Left and Right arrow keys to move backward or forward in the track.

When the playlist moves to a different track, the waveform and the artwork in the play button update automatically.

![Playlist block with a song underway, showing a song underway. ](https://wordpress.org/documentation/files/2026/08/Screenshot-2026-08-18-at-9.42.48-PM.png)

## [Block toolbar](#block-toolbar)

Each block toolbar comes with different options that let you customize or modify the block in the editor. To view the Playlist block toolbar, select the block and it will show a list of toolbar options.

The Playlist block has the following options:

- Transform to
- Moving handles
- More options

### [Transform to](#transform-to)

The Transform to tool allows you to convert the Playlist block into other blocks such as Columns and Group.

### [Moving handles](#moving-handles)

To move a Playlist block, select the block in the editor. Use the Move up or Move down arrows in the block toolbar to move it one position at a time.

You can also click and hold the Drag icon, which looks like six dots, to drag the block to a new location.

[Get more information about moving a block within the editor.](article__moving-blocks.md)

### [More options](#more-options)

These controls give you the option to copy, duplicate, remove, lock, and other standard actions.

[Read about these and other settings.](article__more-options.md)

## [Block settings](#block-settings)

In addition to the block toolbar, each block has specific options in the Settings sidebar on the right side of the editor. To view Playlist block settings, select the Playlist block. If the sidebar is closed, click the **Settings button** next to the Save/Publish button in the top toolbar.

Here is a list of the Playlist block settings options:

### [Settings](#settings)

In the Settings tab, you can control how the playlist behaves and what track details are displayed:

- **Play order:** choose whether tracks play in their listed order or whether they are shuffled.
- **Show images:** toggle whether to show track artwork thumbnails in the track list on or off.
- **Show artist:** toggle whether to show the artist name for each track.
- **Show track numbers:** toggle whether to show the track number in the track list.
- **Show track length:** toggle whether to show the duration of each track.

![Visual of the settings available for the Playlist block.](https://wordpress.org/documentation/files/2026/08/image-5.png)

### [Color](#color)

With the Color settings, you can customize the Playlist block by applying text and background colors. All color options are grouped together in one panel, and this includes two options specific to this block:

- **Waveform:** the color of the waveform itself, which also applies to the play button.
- **Waveform background:** the color behind the waveform.

Both the waveform and the waveform background support gradients as well as solid colors, so you can give the player a distinctive look that matches your site. The color selections vary depending on your active theme.

For details, refer to this support article: [Color Settings overview](article__colors-settings-overview.md)

### [Waveform styles](#waveform-styles)

The Styles tab includes a Waveform styles area where you can choose the visual style of the waveform, such as bars, and adjust how the visualization is drawn.

### [Typography](#typography)

The Typography settings enable you to customize the font size of content in the Playlist block, such as track titles and metadata.

For details, refer to this support article: [Typography settings overview](article__typography-settings-overview.md)

### [Dimensions](#dimensions)

The Playlist block provides dimension settings options to add padding and margin to control the space around the block, and the space between the block and its edges.

For details, refer to this support article: [Dimension settings overview](article__dimension-controls-overview.md)

### [Advanced](#advanced)

The Playlist block provides the following Advanced settings options: HTML Anchor, Additional CSS Class(es), Additional CSS, and Styles.

[Learn more about advanced settings](article__advanced-settings-overview.md)

## [Tips](#tips)

- Add descriptive titles and artist information to your audio files in the Media Library before adding them to a playlist, so the track list is informative right away.
- Attach an image to each audio file to show artwork in the track list and in the play button while the track plays. If you don’t want artwork, simply don’t attach an image.
- Use the waveform and waveform background color options, including gradients, to match the player to your site’s design.
- Use the shuffle play order for playlists where the sequence doesn’t matter, such as background music collections.

## [Frequently asked questions](#frequently-asked-questions)

**Can visitors pause a track from the track list?**

Yes. Selecting the currently playing track pauses it, and selecting it again resumes playback. Pressing the spacebar or Enter on a focused track does the same.

**Can I hide the artwork, artist, track numbers, or track lengths?**

Yes. Each of these details has its own toggle in the block settings, so you can show only the information you want.

**Does the waveform work in all browsers?**

Yes. The waveform player renders consistently across browsers, replacing the default audio controls that vary from one browser to another.

**Can I use a gradient for the waveform?**

Yes. Both the waveform and the waveform background accept solid colors and gradients.

## [Troubleshooting](#troubleshooting)

**Track metadata isn’t showing:**

- Check the audio file details in the Media Library. Title, artist, and other details come from the file’s metadata and Media Library fields.
- Make sure the relevant toggles (Show artist, Show track numbers, Show track length) are enabled in the block settings.

**Artwork isn’t appearing:**

- Confirm that an image is attached to the audio file. Tracks without an attached image don’t display artwork.
- Check that the Show images toggle is enabled in the block settings.

**The waveform colors look wrong with my theme:**

- Set explicit waveform and waveform background colors in the block’s Color settings instead of relying on inherited theme colors.

## [Demo](#demo)

Below is a demo of styling a playlist block.

## [Changelog](#changelog)

- Created 2026-08-18

## Was this article helpful? How could it be improved? [Cancel reply](article__playlist-block.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fplaylist-block%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

August 19, 2026

Last updated

August 20, 2026
