# Media Manager - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/editor/media-manager.html

---

# Media Manager

Upload an image and display it on your page

- [Navigate to the Media Tab](docs__user-guide__quickstart__editor__media-manager.md#navigate-to-the-media-tab)
- [Upload an Image](docs__user-guide__quickstart__editor__media-manager.md#upload-an-image)
- [Copy the File Path](docs__user-guide__quickstart__editor__media-manager.md#copy-the-file-path)
- [Display the Image on a Page](docs__user-guide__quickstart__editor__media-manager.md#display-the-image-on-a-page)
- [Adding Media to Content Files](docs__user-guide__quickstart__editor__media-manager.md#adding-media-to-content-files)
- [How the |media Filter Works](docs__user-guide__quickstart__editor__media-manager.md#how-the-media-filter-works)
- [The Editor Section is Complete](docs__user-guide__quickstart__editor__media-manager.md#the-editor-section-is-complete)

[More...](#)

The **Media Manager** is October CMS's built-in file library. It gives you a central place to upload, organize, and browse images, documents, and other files. Any file you upload here is available to use across your entire site.

## [#](#navigate-to-the-media-tab) Navigate to the Media Tab

1. Click **Media** in the top navigation menu.
2. You will see an empty library with a folder tree on the left and the main file area on the right.

This is where all your shared media files live: photos, logos, PDFs, anything your site needs.

## [#](#upload-an-image) Upload an Image

1. Click the **Upload** button in the toolbar (or drag a file from your computer directly into the Media Manager window).
2. Select any image from your computer, such as a photo, a logo, or anything you like.
3. Wait for the upload to complete. The image will appear in the file list.

You can create folders to keep things organized. Click the **New Folder** button and give it a descriptive name like `images` or `blog`. For this tutorial, uploading to the root folder is fine.

## [#](#copy-the-file-path) Copy the File Path

1. Click on the image you just uploaded to select it.
2. Look for the file path displayed in the details panel. It will be something like `my-image.jpg` (or `images/my-image.jpg` if you put it in a folder).
3. Copy this path or remember it. You will need it in the next step.

## [#](#display-the-image-on-a-page) Display the Image on a Page

1. Navigate to **Editor → Pages** and open **About**.
2. Add an image tag using the `|media` filter. Update the markup to include your image:

```
<h1 class="text-3xl font-bold mb-4">About</h1>
<p class="text-lg text-gray-600 mb-6">
    This is another page using the same layout. The header, navigation,
    and footer are identical. Only the content area changed.
</p>

<img
    src="___TWIG0___"
    alt="My uploaded image"
    class="rounded-lg shadow-md max-w-full mt-6"
>

<p class="mt-6">
    Go back to the <a href="___TWIG1___" class="text-blue-600 underline">home page</a>.
</p>
```

3. Replace `my-image.jpg` with the actual file path you copied.
4. Click **Save** and preview the page.

Your image should now appear on the page, styled with rounded corners and a subtle shadow.

## [#](#adding-media-to-content-files) Adding Media to Content Files

You can also insert images directly into content files using the Markdown editor's built-in toolbar.

1. Navigate to **Editor → Content** and open **my-content.md**.
2. Place your cursor where you want the image to appear.
3. Click the **Image** icon in the Markdown toolbar.
4. Select **Browse Media Library**. The Media Manager opens as a popup.
5. Click the image you uploaded earlier and confirm.
6. The image is inserted into your Markdown content automatically.
7. Click **Save** and preview the home page to see the image rendered inside the content block.

This is a quick way to add images without writing any markup. The editor handles the `|media` path for you.

## [#](#how-the-media-filter-works) How the |media Filter Works

The `|media` filter takes a path relative to your media storage root and converts it to a full URL:

```
___TWIG0___
```

This outputs something like `https://yoursite.com/storage/app/media/my-image.jpg`. You should always use this filter instead of hardcoding paths. It ensures your media URLs are correct regardless of your server configuration.

For the full reference on the Media Manager, including image resizing and cloud storage configuration, see the [Media Manager](docs__4.x__cms__media__introduction.md) documentation.

## [#](#the-editor-section-is-complete) The Editor Section is Complete

You now know the fundamentals of the October CMS editor: themes, layouts, pages, content blocks, and the media manager. Everything you build from here will use these concepts.

Continue to [Content Management](docs__user-guide__quickstart__content-management__tailor-introduction.md) to learn how to create structured content types like blog posts and team members using Tailor blueprints.

← [Including Partials](docs__user-guide__quickstart__editor__including-partials.md)[Introduction to Tailor](docs__user-guide__quickstart__content-management__tailor-introduction.md) →
