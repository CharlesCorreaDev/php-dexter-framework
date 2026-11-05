# Use image and file attachments – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/use-image-and-file-attachments/

---

# Use image and file attachments

## In this article

Table of Contents

- [Edit Screen Links](#edit-screen-links)
- [Attachment to a Post](#attachment-to-a-post)
- [Inserting in a Post](#inserting-in-a-post)
- [Usage in Themes](#usage-in-themes)
- [Further reading](#further-reading)

[Back to top](#wp--skip-link--target)

In WordPress you can upload, store, and display a variety of file types (media). The most common file types are image, video and audio files, but other file types such as document files, spreadsheet files, and code samples (amongst others) can also be managed within WordPress.

Media can be uploaded via the [Media Add New Screen](article__media-add-new-screen.md) or [Media Library Screen](article__media-library-screen.md) in the admin area, or via quick links on the edit screen.

In order to upload media, you may need to ensure that the correct [file permissions](https://developer.wordpress.org/advanced-administration/server/file-permissions/) are set for the wp-content directory in your WordPress installation.

## [Edit Screen Links](#edit-screen-links)

By default, above the post editing area is a link to Upload/Insert media in to the post.

## [Attachment to a Post](#attachment-to-a-post)

If a media file is uploaded within the edit screen, it will automatically be attached to the current post being edited. If it is uploaded via the   
 [Media Add New Screen](article__media-add-new-screen.md) or [Media Library Screen](article__media-library-screen.md) it will be unattached, but may become attached to a post when it is inserted into post. There also is an option on the [Media Library Screen](article__media-library-screen.md) to attach unattached media items.

Note that media items are also ‘Posts’ in their own right and can be displayed as such via the WordPress [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/). Themes can make use of this to loop over media items or create galleries.

If the parent post of an attached media item is deleted, the media item will become attached to the deleted post’s parent if it exists or if it doesn’t exist, the media item will become unattached and is open for re-attachment to another post.

## [Inserting in a Post](#inserting-in-a-post)

Once a media file has been uploaded, it may be [inserted in to a post](article__inserting-images-into-posts-and-pages-block-editor.md).

When the media file is inserted you can choose to:

- Link directly to the media file
- Link to the attachment post, in which case the file will be served via the WordPress [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- Not link to the media file (e.g. in the case of images, the image file will still be embedded in the page, but not linked to allow the browser to display the image file by itself)

## [Usage in Themes](#usage-in-themes)

Themes may use various template tags to display post attachments or utilize the [attachment.php](https://developer.wordpress.org/themes/basics/template-hierarchy/) file to customize the display of attachments. A [shortcode](https://developer.wordpress.org/themes/functionality/media/galleries/#gallery-shortcode) tag is also available to display a gallery of images attached to a post.

## [Further reading](#further-reading)

- [Use Images](article__use-images.md)
- [Image Size and Quality](article__image-size-and-quality.md)
- [Settings Media Screen](article__settings-media-screen.md)
- [Media library screen](article__media-library-screen.md)
- [Media Add New Screen](article__media-add-new-screen.md)
- [Edit Media](article__edit-media.md)
- [Inserting Images into Posts and Pages (Block Editor)](article__inserting-images-into-posts-and-pages-block-editor.md)
- [Inserting Images into Posts and Pages (Classic Editor)](article__inserting-images-into-posts-and-pages-classic.md)

## Was this article helpful? How could it be improved? [Cancel reply](article__use-image-and-file-attachments.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fuse-image-and-file-attachments%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 1, 2019

Last updated

April 14, 2023
