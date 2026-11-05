# Video – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/classic-themes/functionality/media/video/

---

# Video

## In this article

Table of Contents

- [Video](#video)
  - [Video shortcode](#video-shortcode)
  - [Loop and Autoplay](#loop-and-autoplay)
  - [Initial image and Styling](#initial-image-and-styling)
  - [References](#references)

Copy page
[View as Markdown](dev_themes__classic-themes__functionality__media__video.md)

[Back to top](#wp--skip-link--target)

## [Video](#video)

The WordPress video feature allows you to embed video files and play them back using a simple shortcode **[video]**. Supported file types are mp4, m4v, webm, ogv, wmv and flv.

### [Video shortcode](#video-shortcode)

Following shortcode displays video player that loads pepper.mp4 file:

```
[video src="pepper.mp4"]
```

To use the shortcode in the template file, use the [do\_shortcode()](https://developer.wordpress.org/reference/functions/do_shortcode/) function. If the video file is stored in in your theme directory, get the file url directly using [get\_template\_directory\_uri()](https://developer.wordpress.org/reference/functions/get_template_directory_uri/) or [get\_stylesheet\_uri()](https://developer.wordpress.org/reference/functions/get_stylesheet_uri/) :

```
$video_file = get_template_directory_uri() . "/videos/pepper.mp4";
echo do_shortcode( '[video mp4=' . $video_file . ']' );
```

The following video player will be loaded.

[](https://videos.files.wordpress.com/GbdhpGF3/video-25313e7f01.mp4)

### [Loop and Autoplay](#loop-and-autoplay)

The shortcode video has the same option with audio. Refer to the related section for the [loop and autoplay](#loop-and-autoplay) options.

The following example starts playing the video immediately after the page load and loops:

```
echo do_shortcode( '[video mp4=' . $video_file . ' loop="on" autoplay=1]' );
```

### [Initial image and Styling](#initial-image-and-styling)

The following basic options are supported:

#### [Poster](#poster)

Defines image to show as placeholder before the media plays.  
The following same code takes `album_cover.jpg` stored in `(theme directory)/images` folder as the initial image:

```
echo do_shortcode( '[video mp4=' . $video_file . ' poster=' . get_template_directory_uri() . '/images/album_cover.jpg]' );
```

#### [Height](#height)

Defines height of the media. Value is automatically detected on file upload. When you omit this option, the media file height is used.

#### [Width](#width)

Defines width of the media. Value is automatically detected on file upload. When you omit this option, the media file width is used.

The theme’s content\_width sets the maximum width.

The following example will load the audio player with 320 pixels width and 240 pixels height:

```
echo do_shortcode( '[video mp4=' . $video_file . ' width=320 height=240]' );
```

#### [Styling](#styling)

If you want to change look & feel of video player from stylesheet, you can target the class name of “wp-video-shortcode”. If you want to show the audio player like above in 320 x 240 size, insert following code into your stylesheet:

```
.wp-video-shortcode {
    height: 240px;
    width: 320px;
}
```

#### [Supported Video format](#supported-video-format)

- mp4
- m4v
- webm
- ogv
- flv

### [References](#references)

For more technical details such as internal library that enables this function, refer to

- <https://make.wordpress.org/core/2013/04/08/audio-video-support-in-core/>.
- [Video Shortcode](https://codex.wordpress.org/Video_Shortcode)
- [Function do\_shortcode()](https://developer.wordpress.org/reference/functions/do_shortcode/)

First published

January 13, 2017

Last updated

October 25, 2022

[Previous
Images
Previous: Images](dev_themes__classic-themes__functionality__media__images.md)

[Next
Navigation Menus
Next: Navigation Menus](dev_themes__classic-themes__functionality__navigation-menus.md)
