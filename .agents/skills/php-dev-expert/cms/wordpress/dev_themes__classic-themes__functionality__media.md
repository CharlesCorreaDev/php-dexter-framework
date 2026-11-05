# Media – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/classic-themes/functionality/media/

---

# Media

## In this article

Table of Contents

- [General](#general)
  - [Retrieving attachment ID or image ID](#retrieving-attachment-id-or-image-id)
- [Special considerations](#special-considerations)
  - [Compatible media formats](#compatible-media-formats)
  - [Troubleshooting:](#troubleshooting)

Copy page
[View as Markdown](dev_themes__classic-themes__functionality__media.md)

[Back to top](#wp--skip-link--target)

WordPress enables theme developers to customize the look, feel, and functionality of the platform’s core media capabilities.

## [General](#general)

In WordPress you can upload, store, and display a variety of media such as image, video and audio files. Media can be uploaded via the **Media > Add New** in the [Administration Screen](https://codex.wordpress.org/Administration_Screens), or Add Media button on the Post/Page Editor.

If a media file is uploaded within the edit screen, it will be automatically attached to the current post being created or edited. If it is uploaded via the Media’s Add New Screen or the Media Library Screen, it will be unattached, but may become attached to a post when it is inserted into a post later on.

### [Retrieving attachment ID or image ID](#retrieving-attachment-id-or-image-id)

To retrieve the attachment ID, use `get_posts()` or `get_children()` function. This example retrieves the all attachments of the current post and getting all metadata of attachment by specifying the ID.

```
// Insert into the Loop
$args = array(
    'post_parent'    => get_the_ID(),
    'post_type'      => 'attachment',
);
$attachments = get_posts( $args );
if ( $attachments ) {
    foreach ( $attachments as $attachment ) {
        $meta_data = wp_get_attachment_metadata( $attachment->ID, false );
    }
}
```

If you want to retrieve images from the post ID only, specify post\_mime\_type as image.

```
$args = array(
    'post_parent'    => get_the_ID(),
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
);
```

#### [References](#references)

- `get_posts()`
- `get_children()`
- `wp_get_attachment_metadata()`

## [Special considerations](#special-considerations)

### [Compatible media formats](#compatible-media-formats)

In the Media Library, you can upload any file (with the network administrator’s unfiltered\_upload) and not just images or videos but text files, office documents or even binary files. Single site administrators do not have the unfiltered\_upload capability by default and requires that definition to be set for the capability to kick in. Audio and Video files are processed by the internal library `MediaElement.js`.

- [Supported Audio format](https://developer.wordpress.org/?post_type=theme-handbook&p=25145#supported-audio-format)
- [Supported Video format](dev_themes__functionality__media__video.md#supported-video-format)

### [Troubleshooting:](#troubleshooting)

#### [Cannot retrieve attachment](#cannot-retrieve-attachment)

When you cannot get your attached media by `get_posts()` or `get_children()` function, confirm your media is really attached to the post.  
From the [Administration Screen](https://codex.wordpress.org/Administration_Screens), Click **Media > Library** to open the Media Library and confirm the value in “Uploaded to” column of the media.

First published

October 23, 2014

Last updated

January 15, 2017

[Previous
Localization
Previous: Localization](dev_themes__classic-themes__functionality__localization.md)

[Next
Audio
Next: Audio](dev_themes__classic-themes__functionality__media__audio.md)
