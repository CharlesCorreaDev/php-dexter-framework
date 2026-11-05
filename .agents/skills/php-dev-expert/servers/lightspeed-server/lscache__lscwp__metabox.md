# LiteSpeed Options Metabox | Screen-by-Screen | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/metabox/

---

# LiteSpeed Options Metabox[¶](#litespeed-options-metabox "Permanent link")

[![LiteSpeed Options Metabox](../images/metabox01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/metabox01.png)

The **LiteSpeed Options** metabox was introduced in LSCWP v5.0 as a convenient way to adjust cache and optimization settings on a per-post basis. It appears in the post editor for new and existing posts of any type, including `Post`, `Page`, and `Product` for WooCommerce.

Tip

Want to hide the metabox from the post editing screen? In the Classic Editor, select **Screen Options**, and then uncheck **LiteSpeed Options**. In the Block Editor, navigate to **three-dot menu > Preferences > Panels**, and disable **LiteSpeed Options**.

## Disable Cache[¶](#disable-cache "Permanent link")

This switch is an alternative to the [**Do Not Cache URIs** setting](lscache__lscwp__cache.md#do-not-cache-uris). It is off by default (gray, with the circle to the left), which means the page you are editing *will* be cached unless it is excluded by another setting in the [**Cache > Excludes** tab](lscache__lscwp__cache.md#excludes-tab).

Turn the switch on (blue, with the circle to the right) to exclude this post from cache.

## Disable Image Lazyload[¶](#disable-image-lazyload "Permanent link")

This switch is an alternative to the [**Lazy Load URI Excludes** setting](lscache__lscwp__pageopt.md#lazy-load-uri-excludes). It is off by default (gray, with the circle to the left), which means the images on the page you are editing *will* be lazy loaded unless they are excluded by another setting in the [**Page Optimization > Media Excludes** tab](lscache__lscwp__pageopt.md#media-excludes-tab).

Turn the switch on (blue, with the circle to the right) to exclude the images in this post from lazy loading.

## Viewport Images[¶](#viewport-images "Permanent link")

Tip

You must have **Page Optimization > Media Settings > Lazy Load Images** set to `ON` and **Page Optimization > VPI > Viewport Images** set to `ON` for this setting to take effect.

If you have the QUIC.cloud [**VPI** service](lscache__lscwp__pageopt.md#vpi) enabled, this box displays any Viewport Images already detected by the service. For a new post, this setting is empty. After the post is published, it is added to the VPI queue, and Viewport Images are calculated. If you already know which images you want to exclude from lazy loading, you can enter their paths here. The post will then not be sent to the VPI service for calculation.

If you are editing an existing post and the VPI service has already detected above-the-fold images that should be excluded from lazy loading, they are listed here. You can delete the contents of this box to have Viewport Images recalculated by QUIC.cloud. You can also add or remove images manually.

List images without a domain name, for example, `/path/image.jpg`, one per line.

## Viewport Images - Mobile[¶](#viewport-images-mobile "Permanent link")

This setting is the same as **Viewport Images**, except that it applies only to a mobile viewport. The image list may differ when different images are visible on mobile and desktop. **Cache > Cache > Cache Mobile** should be set to `ON`. If you do not have **Cache Mobile** enabled, this setting is ignored.
