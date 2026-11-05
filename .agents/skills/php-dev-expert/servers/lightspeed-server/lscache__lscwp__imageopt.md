# Image Optimization | Screen-by-Screen | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/imageopt/

---

# Image Optimization[¶](#image-optimization "Permanent link")

## Image Optimization Summary Tab[¶](#image-optimization-summary-tab "Permanent link")

Tip

Check out the [Media Troubleshooting](lscache__lscwp__ts-media.md) page for help with some common issues.

LiteSpeed Cache for WordPress can optimize your images, making them smaller and faster to transmit. You may manually press a button to optimize each new batch of images or configure optimization to run automatically.

Warning

Do not use other image optimization plugins at the same time as LSCWP's image optimization. This can cause undesirable behavior, including processing errors that require LiteSpeed staff to clear manually. Choose one image optimizer and stick with it.

[![LSCWP Image Optimization Section Summary Tab](../images/imageopt01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/imageopt01.png)

### Before you begin[¶](#before-you-begin "Permanent link")

#### About QUIC.cloud[¶](#about-quiccloud "Permanent link")

All of LiteSpeed's online services, including Image Optimization, are hosted at our QUIC.cloud site. You don't need to have a QUIC.cloud account if you don't want one, but you do need to [enable QUIC.cloud services](lscache__lscwp__general.md#online-services-tab) in the plugin's **General** section.

Image Optimization happens via one of two queues:

- Standard Queue, which is free for everyone, and usage is unlimited.
- Advanced Queue, which comes with a free monthly quota. If you want to continue to use the Advanced Queue after your free quota runs out, you may purchase more quota. A QUIC.cloud account is required to purchase quota. More details are available [at QUIC.cloud](https://docs.quic.cloud/billing/services/).

#### Media settings[¶](#media-settings "Permanent link")

There are a few settings you may want to adjust before you request image optimization. For instance, by default, only JPG and PNG images are optimized. The plugin does not create next-generation image formats, such as WebP and AVIF, for each image unless you enable that behavior. You may also choose to create only next-generation images and forgo JPG optimization.

See the [**Image Optimization Settings** tab](#image-optimization-settings-tab) for more information.

### Optimization Summary[¶](#optimization-summary "Permanent link")

### Submitting your first request[¶](#submitting-your-first-request "Permanent link")

Press the **Send Optimization Request** button to start your first round of Image Optimization. Only one image is sent the first time. We want to make sure everything is working well between your server and ours, so we start small. You don't need to wait on this page; you can go away and do something else.

Once your first image has finished optimizing and has been pulled back to your system—automatically through cron or manually by pressing the **Pull Images** button—LiteSpeed will start sending in batches of up to 200 images. Press **Send Optimization Request** again to send the second batch.

You'll see status messages below showing how many images were requested, how many were pulled, and whether there were any errors.

When images are ready to pull, press the **Pull Images** button to start the process manually.

To automate the process, make sure your system cron is working. Then, switch to the **Image Optimization Settings** tab, set **Auto Request Cron** to `ON`, and set **Auto Pull Cron** to `ON`. Save your settings, and then your site's images will optimize and pull in the background.

Tip

You may have noticed the small QUIC.cloud logo in this area. If you're having a problem with your QUIC.cloud services, try clicking the symbol to redetect your closest available service node(s). If your previously available node has gone down, a new node will be selected, and services can continue.

### Optimization Status[¶](#optimization-status "Permanent link")

#### Clean up unfinished data[¶](#clean-up-unfinished-data "Permanent link")

If you encounter errors during optimization and can no longer continue, press this button. It wipes all data related to optimization requests that did not complete from the database, allowing you to continue optimizing. Any images that were in progress will be treated as new the next time you request optimization.

Tip

If you do not find and address the underlying cause of the errors, they are likely to continue occurring and clog up your optimization feed again.

### Storage Optimization[¶](#storage-optimization "Permanent link")

After you've optimized your images, there may be three copies of each image stored on disk: the newly optimized version, a next-generation format, and a backup of the original, unoptimized version.

#### Calculate backup disk space[¶](#calculate-backup-disk-space "Permanent link")

This button calculates the total disk space used by the original, unoptimized images.

#### Remove original image backups[¶](#remove-original-image-backups "Permanent link")

Click this link to delete all backups of the original images.

Danger

This is irreversible. You will be unable to [revert optimization](#use-original-files) once the backups are deleted, so be certain before proceeding.

### Optimization Tools[¶](#optimization-tools "Permanent link")

#### Use original files[¶](#use-original-files "Permanent link")

If you decide that you no longer want optimized images on your site, you can use the **Use Original Files** link to restore the original files, as long as you have not previously used the **Remove Original Image Backups** function.

#### Use optimized files[¶](#use-optimized-files "Permanent link")

If you change your mind again and decide that you want the optimized images, you don't need to send a new request. Click the **Use Optimized Files** link to restore the optimized versions.

You can use the two links above as often as you like. As long as both versions are on your server, you can switch between them at will.

#### Soft reset optimization counter[¶](#soft-reset-optimization-counter "Permanent link")

If you have already optimized some of your images but something changes in your settings—for example, you switch your next-generation image format from WebP to AVIF—you can use this button to reset the counter.

Resetting the counter means that Image Optimization will start again at the beginning of your media library, but it won't regenerate optimized original images or next-generation formats if they already exist.

#### Destroy all optimization data[¶](#destroy-all-optimization-data "Permanent link")

Sometimes you may want to start over from scratch. This link gives you a clean slate. It deletes the image optimization information from the database and reverts all completed optimizations.

Danger

There is no way to undo this process, so press **Destroy All Optimization Data** only if you are absolutely sure.

### How image optimization works[¶](#how-image-optimization-works "Permanent link")

You may wonder what happens behind the scenes when images are optimized. There are two parts: the process followed when you submit a request and the actual optimization steps performed on your images.

### What is an image group?[¶](#what-is-an-image-group "Permanent link")

In Image Optimization, we refer to both “images” and “image groups.” What do we mean by that?

When you upload an image to your Media Library, a collection of differently sized versions of that image is created. These versions make up an **image group**.

Example

[![Uploaded image in WordPress](../images/imageopt02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/imageopt02.png)

You upload an image called `770.jpg`.

WordPress creates a collection of new images from that one:

```
770-1024x701.jpg
770-150x150.jpg
770-300x205.jpg
770-348x445.jpg
770-568x725.jpg
770-768x525.jpg
770-78x99.jpg
```

These new images, plus the original, make an “image group.” The sizes in this example may vary from those created by your WordPress installation, depending on your media configuration.

[![Image group after optimization](../images/imageopt03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/imageopt03.png)

### Changing your mind image by image[¶](#changing-your-mind-image-by-image "Permanent link")

If you want to revert all your images to their originals, use the Revert Optimization buttons described above. If you decide to revert just one image, you can restore its pre-optimization version from within the Media Library.

[![Image optimization options in the Media Library](../images/imageopt04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/imageopt04.png)

From the WordPress Dashboard, navigate to **Media > Library**. If optimized versions of the image exist, notes in the **LiteSpeed Optimization** column show how much space optimization saved. If the optimized files are in use, there will be an `optm` link. If the original files are in use, the link will say `non-optm`. Click the link to toggle between the optimized and unoptimized versions.

Note

The **WebP** or **AVIF** indicator next to a Media Library image indicates that next-generation images were generated for at least one of the image sizes in that group. Some image sizes may not have corresponding WebP or AVIF versions. This usually happens because the next-generation image was not smaller than the JPG or PNG. If a next-generation image does not provide any savings for a particular image size, it is discarded.

### Troubleshooting[¶](#troubleshooting "Permanent link")

You may see several warning or error messages after sending an image optimization request. See our [Media Troubleshooting Guide](lscache__lscwp__ts-media.md#image-optimization) to learn what you can do about them.

### Server list[¶](#server-list "Permanent link")

You may need to allowlist our QUIC.cloud servers so that they can communicate with your server to transfer images. See the [QUIC.cloud docs](https://docs.quic.cloud/onboarding/allowlist/) for more information.

## Image Optimization Settings Tab[¶](#image-optimization-settings-tab "Permanent link")

[![LSCWP Image Optimization Section Settings Tab](../images/imageopt05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/imageopt05.png)

### Auto Request Cron[¶](#auto-request-cron "Permanent link")

*OFF*

When this option is `ON`, image optimization requests are sent automatically via cron for new Media Library uploads.

### Auto Pull Cron[¶](#auto-pull-cron "Permanent link")

This setting has been deprecated in LSCWP v7. **Auto Pull Cron** is now enabled by default. To disable it, add the following line to your `wp-config.php` file:

```
define('LITESPEED_IMG_OPTM_PULL_CRON', false);
```

If you disable this setting, you will need to fetch newly optimized images manually with the **Pull Images** button in the **Image Optimization Summary** tab.

### Optimize Original Images[¶](#optimize-original-images "Permanent link")

*ON*

When Image Optimization runs, JPG and PNG images are optimized, and backups are saved. For example, if the image `image.jpg` can be optimized, a copy is saved as `image.bk.jpg`. The newly optimized version is then saved as `image.jpg`. Set this option to `OFF` if you do not want JPG and PNG files to be optimized.

### Remove Original Backups[¶](#remove-original-backups "Permanent link")

*OFF*

Danger

Be careful: this action is irreversible.

When this option is `ON`, Image Optimization automatically deletes your original images after fetching the optimized versions. You will be unable to **Revert Optimization** if the backups are deleted.

### Optimize Losslessly[¶](#optimize-losslessly "Permanent link")

*OFF*

When JPG and PNG images are optimized, lossy compression is used by default. Set this option to `ON` to use lossless compression. This can improve image quality, but may result in larger images than lossy compression.

### Optimize Image Sizes[¶](#optimize-image-sizes "Permanent link")

*All Sizes Selected*

By default, the Image Optimization service processes all of your site's image sizes. If there are sizes you prefer not to optimize, you can deselect them here. Those sizes will no longer be sent to QUIC.cloud for optimization or conversion to next-generation image formats (`WebP`/`AVIF`).

The uploaded image and all other selected sizes will be optimized and/or converted to next-generation image formats as usual.
