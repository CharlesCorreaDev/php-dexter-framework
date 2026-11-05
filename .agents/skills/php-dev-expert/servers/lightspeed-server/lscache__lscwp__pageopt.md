# Page Optimization | Screen-by-Screen | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/pageopt/

---

# Page Optimization[¶](#page-optimization "Permanent link")

Warning

Please test these options thoroughly before enabling them on your production site! Be sure to **Purge All** after changing these settings.

## CSS Settings tab[¶](#css-settings-tab "Permanent link")

[![LSCWP Page Optimization section CSS settings tab](../images/pageopt01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt01.png)

### CSS Minify[¶](#css-minify "Permanent link")

*OFF*

Extra white space characters, newline characters, and comments will be stripped from all included CSS files if this option is enabled.

### CSS Combine[¶](#css-combine "Permanent link")

*OFF*

All individual CSS files will be combined into a single CSS file.

Tip

If you notice your disk space filling up quickly after enabling **CSS Combine**, your theme may be inserting a random string into its CSS. Please [read this](lscache__lscwp__ts-optimize.md#disk-space-filling-fast) for more details.

#### Generate UCSS[¶](#generate-ucss "Permanent link")

*OFF*

**Unique CSS** (UCSS) is a QUIC.cloud service that can be used with the **CSS Combine** setting to create a single streamlined CSS file for each page of your site. This combined file may be unique for each page because it includes only the CSS needed to render that specific page.

Including only the necessary CSS keeps each combined CSS file small and may significantly reduce processing time.

Warning

On sites with many different pages, these unique combined CSS files may require significant storage. Make sure you have enough space to store at least one CSS file for each page on the site. You’ll need space for two CSS files per page if **Cache Mobile** is enabled, and even more if your site uses cache varies that affect what is displayed on the screen.

Note

UCSS is generated the first time a page returns a 404 error. That UCSS file is used for all future 404 errors, even when they occur on different pages. If multiple 404 pages are added to the queue, the QUIC.cloud processor will skip all but the first.

Tip

You can configure UCSS to generate by post type instead of per URL, but this requires using an API filter. See [Generate Single UCSS for Page Type](lscache__lscwp__api.md#generate-single-ucss-for-page-type) for more information.

Tip

You may have noticed the small QUIC.cloud logo in this area. If you're having a problem with your QUIC.cloud services, try clicking the symbol to redetect your closest available service node(s). If your previously available node has gone down, a new node will be selected, and services can continue.

A **Run UCSS Queue Manually** button appears when URLs are waiting in the queue. Gray URLs have not yet been submitted to QUIC.cloud; green URLs have been submitted for processing.

#### UCSS Inline[¶](#ucss-inline "Permanent link")

*OFF*

Enable this setting to store generated UCSS inline with the HTML rather than in a separate CSS file. This reduces additional CSS file loading.

Note

This option is not automatically enabled for **Guest Mode** pages. To use **UCSS Inline** with **Guest Mode**, set it to `ON` here.

Note

If **UCSS Inline** is enabled, the **Load CSS Asynchronously** setting is ignored and treated as `OFF`.

### CSS Combine External and Inline[¶](#css-combine-external-and-inline "Permanent link")

*OFF*

By default, the **CSS Combine** option combines only local CSS files. When this option is enabled, external CSS files and CSS found inline in the HTML are also included in the combined file. Including all possible CSS in this way helps maintain CSS priorities, which should minimize potential errors caused by **CSS Combine**.

### Load CSS Asynchronously[¶](#load-css-asynchronously "Permanent link")

*OFF*

This option defaults to `OFF`. When it is `OFF`, web pages load normally: the browser loads the CSS from the HTML header before displaying the content in the HTML body.

When you turn this option `ON`, CSS and HTML load at the same time. Asynchronous processing can make pages load more quickly, but they may initially appear without formatting. To prevent this, LiteSpeed automatically generates Critical CSS when **Load CSS Asynchronously** is enabled.

Critical CSS is the collection of styles required to display above-the-fold content properly. These styles are inserted inline into the HTML and processed with it, preventing the content from appearing unformatted.

Warning

**Load CSS Asynchronously** uses the QUIC.cloud **Page Optimization** service to generate Critical CSS. You must [enable QUIC.cloud services](lscache__lscwp__general.md#online-services-tab) to use it, and [a fee may apply](https://quic.cloud/online-services-costs/). If you choose not to use QUIC.cloud services, CSS will not load asynchronously, regardless of whether this setting is `ON` or `OFF`.

Tip

You may have noticed the small QUIC.cloud logo in this area. If you're having a problem with your QUIC.cloud services, try clicking the symbol to redetect your closest available service node(s). If your previously available node has gone down, a new node will be selected, and services can continue.

A **Run CCSS Queue Manually** button appears when URLs are waiting in the queue. Gray URLs have not yet been submitted to QUIC.cloud; green URLs have been submitted for processing.

#### CSS Per URL[¶](#css-per-url "Permanent link")

*ON*

Set this option to `OFF` to generate Critical CSS per post type instead of per individual page. This can save significant CCSS quota and disk space; however, it may result in incorrect CSS styling if your site uses a page builder.

#### Inline CSS Async Lib[¶](#inline-css-async-lib "Permanent link")

*ON*

This setting inlines the asynchronous CSS library to avoid render-blocking.

### Font Display Optimization[¶](#font-display-optimization "Permanent link")

*Default*

This setting appends `font-display` to all `@font-face` rules before caching CSS to specify how fonts should be displayed while they are being downloaded.

## JS Settings tab[¶](#js-settings-tab "Permanent link")

[![LSCWP Page Optimization section JS settings tab](../images/pageopt02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt02.png)

### JS Minify[¶](#js-minify "Permanent link")

*OFF*

Extra whitespace characters, newline characters, and comments will be stripped from all JS if this option is enabled.

### JS Combine[¶](#js-combine "Permanent link")

*OFF*

All individual JS files will be combined into a single JS file.

Tip

If you notice your disk space filling up quickly after enabling **JS Combine**, your theme may be inserting a random string into its JavaScript code. Please [read this](lscache__lscwp__ts-optimize.md#disk-space-filling-fast) for more details.

### JS Combine External and Inline[¶](#js-combine-external-and-inline "Permanent link")

*OFF*

Turn this option `ON` to include external and inline JavaScript in the combined file when **JS Combine** is also enabled. This option helps maintain JS execution priorities, which should minimize potential errors caused by **JS Combine**.

### Load JS Deferred[¶](#load-js-deferred "Permanent link")

*OFF*

Both the `Deferred` and `Delayed` options hold JavaScript processing until the HTML has finished loading. The difference is in the timing:

- `Deferred` runs the JS as soon as the HTML finishes loading. This is the classic mode for deferred JavaScript.
- `Delayed` runs the JS only after detecting user activity, such as a key press or mouse movement.

Both options should improve your page speed score, but `Delayed` has greater potential because it can remove JS entirely from the page speed score calculation.

Tip

As always, weigh any improvement in page speed score against the potential impact on user experience. We recommend testing `Delayed` mode on your site before enabling this option.

## HTML Settings tab[¶](#html-settings-tab "Permanent link")

[![LSCWP Page Optimization section HTML settings tab](../images/pageopt03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt03.png)

### HTML Minify[¶](#html-minify "Permanent link")

*OFF*

Extra whitespace characters, newline characters, and comments will be stripped from all HTML if this option is enabled.

### DNS Prefetch[¶](#dns-prefetch "Permanent link")

*Empty List*

With this setting, you can perform DNS resolution for the listed domains before they are requested. Prefetching DNS results can significantly reduce latency for visitors as they click external links, particularly on mobile networks. Enter domains one per line in the format `//www.example.com`.

[Learn more](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-DNS-Prefetch-Control).

### DNS Prefetch Control[¶](#dns-prefetch-control "Permanent link")

*OFF*

Widely enable DNS Prefetch for all URLs in the document, including images, CSS, JavaScript, and so forth. This can improve page loading speed.

### DNS Preconnect[¶](#dns-preconnect "Permanent link")

*Empty List*

This setting is similar to **DNS Prefetch**, but it goes further: whereas **DNS Prefetch** performs only DNS resolution, **DNS Preconnect** also performs the connection handshake with the specified sites.

Enter domains one per line in the format `//www.example.com`.

[Learn more](https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel/preconnect).

Note

Prefetch and Preconnect do not speed up your site itself. They speed up connections to other sites, making those connections feel more responsive when visitors click links.

### HTML Lazy Load Selectors[¶](#html-lazy-load-selectors "Permanent link")

*Empty List*

You can lazy load HTML content by its selector, generally an ID or class. List selectors one per line.

Example

If you have this:

```
<span id="example">
<p>This is content I wish to lazy load.</p>
</span>
```

Enter `#example` in the box, and the paragraph will not load until it scrolls into the viewport.

### HTML Keep Comments[¶](#html-keep-comments "Permanent link")

*Empty List*

HTML comments are discarded when you minify HTML. This setting allows you to keep comments that match patterns in the list. Enter one pattern per line.

Example

To keep comments that mention LiteSpeed, add `LiteSpeed` to the list. This preserves both `<!-- LiteSpeed -->` and `<!-- a comment that mentions LiteSpeed -->`.

### Remove Query Strings[¶](#remove-query-strings "Permanent link")

*OFF*

This setting strips query strings from static resources. Browsers and proxy servers may not cache static resources with query strings. Removing the strings allows the resources to be cached, resulting in faster page loads.

### Load Google Fonts Asynchronously[¶](#load-google-fonts-asynchronously "Permanent link")

*OFF*

You may not want to enable asynchronous loading for all of your CSS, but you may want to enable it for Google Fonts. If enabled, this option loads Google Fonts asynchronously without loading the other CSS that way. It also implements a [preconnect](https://web.dev/uses-rel-preconnect/) to Google.

Tip

Preconnecting does not download the fonts. It establishes the download connection ahead of time to speed up the process.

### Remove Google Fonts[¶](#remove-google-fonts "Permanent link")

*OFF*

This option removes all Google Fonts from your site. Be sure to test it. Unless you have suitable replacement fonts stored locally, your site's style could change dramatically.

### Remove WordPress Emoji[¶](#remove-wordpress-emoji "Permanent link")

*OFF*

If enabled, this setting removes the extra JavaScript file used to add emoji support in older browsers. Visitors using modern browsers with native emoji support will not notice a difference.

### Remove Noscript Tags[¶](#remove-noscript-tags "Permanent link")

*OFF*

When you use [Lazy Load iframes](#lazy-load-iframes), [Lazy Load Images](#lazy-load-images), or [Load CSS Asynchronously](#load-css-asynchronously), LiteSpeed adds `<noscript>` tags. These tags support older browsers that do not support JavaScript and modern browsers where JS is turned off for security reasons. They tell the browser what to do if it cannot run the associated script. However, these tags take up space.

When this option is enabled, LiteSpeed-added `<noscript>` tags are removed, reducing page size but also reducing compatibility with browsers that have no functioning JavaScript. You will need to decide whether the efficiency gains are worth the compatibility trade-off.

Note

This setting does not remove `<noscript>` tags from other sources. It affects only tags added by LiteSpeed.

## Media Settings tab[¶](#media-settings-tab "Permanent link")

[Learn more about Lazy Load on our blog.](https://blog.litespeedtech.com/2017/11/08/wpw-when-its-good-to-be-lazy/)

[![LSCWP Page Optimization section Media tab](../images/pageopt04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt04.png)

### Preload Featured Image[¶](#preload-featured-image "Permanent link")

This feature has been removed. We now automatically preload all Viewport Images as part of our [VPI service](#viewport-images).

### Lazy Load Images[¶](#lazy-load-images "Permanent link")

*OFF*

When enabled, this setting loads images only when they are visible in the viewport. The remaining images load as they scroll into view. When you turn this option `ON`, the WordPress core Lazy Load feature is automatically disabled.

This feature can make images appear suddenly. You can improve the effect with CSS by adding a fade-in or another effect to the loading images.

Example

The following CSS creates a fade-in effect for lazy-loaded images:

```
/* Part 1: Before lazy load */
img[data-lazyloaded] {
    opacity: 0;
}
```

```
/* Part 2: Upon lazy load */
img.litespeed-loaded {
    -webkit-transition: opacity .5s linear 0.2s;
    -moz-transition: opacity .5s linear 0.2s;
    transition: opacity .5s linear 0.2s;
    opacity: 1;
}
```

The key is the `data-lazyloaded` [attribute selector](https://css-tricks.com/attribute-selectors/), which targets elements based on their attributes.

Before an image is lazy loaded, it has the `data="lazyloaded"` attribute, which enables Part 1 of the CSS code.

Once the image is loaded, that attribute goes away, Part 1 no longer applies, and Part 2 takes effect. This CSS example makes the image fade in, but you can replace it with any CSS effect you wish.

Note

The example uses standard CSS transition properties. Vendor-prefixed transition properties are included for compatibility with older browsers.

### Basic Image Placeholder[¶](#basic-image-placeholder "Permanent link")

*empty string*

When **Lazy Load Images** is enabled, a gray box appears as a placeholder until an image loads. If you prefer a more creative placeholder, you can specify your own base64 image. Enter it here or use the `LITESPEED_PLACEHOLDER` constant in your `wp-config.php` file. If both are defined, this setting takes precedence over the `wp-config.php` constant.

### Responsive Placeholder[¶](#responsive-placeholder "Permanent link")

*OFF*

Responsive image placeholders can be used when the images have width and height attributes. Placeholders use the same dimensions as the images, which helps reduce layout shifts.

### Responsive Placeholder SVG[¶](#responsive-placeholder-svg "Permanent link")

```
<svg xmlns="http://www.w3.org/2000/svg" width="{width}" height="{height}" viewBox="0 0 {width} {height}"><rect width="100%" height="100%" fill="{color}"/></svg>
```

If you generate a placeholder locally, you can specify an SVG to use. It will be converted to a base64 placeholder on the fly.

Note

The variables `{width}` and `{height}` are replaced with the corresponding image properties. The variable `{color}` is replaced with the configured background color.

### Responsive Placeholder Color[¶](#responsive-placeholder-color "Permanent link")

*#cfd4db*

Use the color picker to generate responsive placeholders in any color you like.

### LQIP Cloud Generator[¶](#lqip-cloud-generator "Permanent link")

*OFF*

Low Quality Image Placeholder (LQIP) is a QUIC.cloud service that generates a unique placeholder: a blurred, minified version of the original high-quality image.

### LQIP Quality[¶](#lqip-quality "Permanent link")

*4*

Specify the quality of your generated LQIPs. Larger numbers produce higher-resolution, better-quality placeholders, but also larger files that increase page size. Valid values range from `1` to `20`.

### LQIP Minimum Dimensions[¶](#lqip-minimum-dimensions "Permanent link")

*150* x *150*

For relatively small images, generating LQIPs may be unnecessary. Specify the dimensions, in pixels, of the smallest files you want to send for LQIP requests. Images are excluded from LQIP only if both dimensions are smaller than these values. If either dimension exceeds the limit, the image will be sent. Valid dimensions are greater than `10` pixels and less than `800`.

### Generate LQIP In Background[¶](#generate-lqip-in-background "Permanent link")

*ON*

LQIPs must be generated the first time a page is visited. If this setting is `ON`, generation runs in the background via a cron-based queue. The **Responsive Placeholder** settings are used until generation is complete.

If this setting is `OFF`, placeholders are generated while the visitor waits, which may slow down the first visitor's page load.

If images are in the queue, a **Clear LQIP Queue** button appears. You can press it to remove all items from the queue. However, removed items will not be processed by the LQIP service unless they are added back to the queue.

Tip

You may have noticed the small QUIC.cloud logo in this area. If you're having a problem with your QUIC.cloud services, try clicking the symbol to redetect your closest available service node(s). If your previously available node has gone down, a new node will be selected, and services can continue.

### Lazy Load iframes[¶](#lazy-load-iframes "Permanent link")

*OFF*

This setting works like **Lazy Load Images**, but applies to iframes instead of images.

### Add Missing Sizes[¶](#add-missing-sizes "Permanent link")

*OFF*

Setting explicit width and height values for images is good practice. It reduces layout shifts, improving user experience and page scores. When enabled, this option allows LSCache to add missing width and height attributes to local images automatically.

Note

This option works only when **Lazy Load Images** is `ON`.

Tip

To also check remote images to determine their dimensions, use the following filter:

```
add_filter( 'litespeed_media_ignore_remote_missing_sizes', '__return_false' );
```

### WordPress Image Quality Control[¶](#wordpress-image-quality-control "Permanent link")

*82*

Use this option to set WordPress's image compression quality. Any number smaller than `100` is accepted, but lower values produce more noticeable compression.

### Auto Rescale Original Images[¶](#auto-rescale-original-images "Permanent link")

*OFF*

This option helps save disk space and bandwidth by scaling original images down automatically. The default scaled-size threshold is 2560px, but you can adjust it using the WordPress API filter `big_image_size_threshold` described [in the WordPress documentation](https://developer.wordpress.org/reference/hooks/big_image_size_threshold/).

Warning

Because images are scaled upon upload and the original image is resized without a backup, this option is irreversible.

Example

With the option set to `ON` and the default scaled-size threshold, an image uploaded to your Media Library at 3000px × 4000px is resized to 2560px on its longest side and saved with that longest-side dimension.

## VPI tab[¶](#vpi "Permanent link")

VPI stands for “Viewport Images.” This service excludes above-the-fold images from lazy loading. For each post URL submitted to the queue, QUIC.cloud detects which images would be visible in the viewport when the post loads. These are called Viewport Images (or VPI), and LiteSpeed Cache loads them with the page. VPI images are not lazy loaded, but all other below-the-fold images for the URL are.

[![LSCWP Page Optimization section VPI tab](../images/pageopt05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt05.png)

### Viewport Images[¶](#viewport-images "Permanent link")

*OFF*

Turn this setting `ON` to use the QUIC.cloud VPI service. Viewport Images are generated automatically in the background on QUIC.cloud servers, so they do not affect your servers.

Use the [**LiteSpeed Options** metabox](lscache__lscwp__metabox.md) to override detected VPIs for individual posts.

Tip

You must set **Page Optimization > Media Settings > Lazy Load Images** to `ON` for this setting to take effect.

Warning

**VPI** uses the QUIC.cloud **Page Optimization** service to generate Viewport Images. You must [enable QUIC.cloud services](lscache__lscwp__general.md#online-services-tab) to use it, and [a fee may apply](https://quic.cloud/online-services-costs/). If you choose not to use QUIC.cloud services, VPI will not be generated, regardless of whether this setting is `ON` or `OFF`.

Viewport Images are preloaded, giving them priority so they are among the first assets to load during a page's life cycle.

### Viewport Images Cron[¶](#viewport-images-cron "Permanent link")

*OFF*

When **Viewport Images** is enabled and this setting is `ON`, Viewport Images are generated in the background via a cron-based queue. If it is `OFF`, you can manually submit URLs waiting to be processed.

A **Run VPI Queue Manually** button appears when URLs are waiting in the queue. Gray URLs have not yet been submitted to QUIC.cloud; green URLs have been submitted for processing.

## Media Excludes tab[¶](#media-excludes-tab "Permanent link")

[![LSCWP Page Optimization section Media Excludes tab](../images/pageopt06.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt06.png)

### Lazy Load Image Excludes[¶](#lazy-load-image-excludes "Permanent link")

*empty string*

Some images need to load immediately, regardless of where they appear on the screen. You may want to exclude images visible in both the initial mobile and desktop viewports, such as your site logo, to avoid layout shifts. Enter one item per line. You may use a full URI or a partial string. Partial strings are useful when an entire directory of images must load immediately. Do not use wildcards.

### Lazy Load Image Class Name Excludes[¶](#lazy-load-image-class-name-excludes "Permanent link")

*empty string*

Images containing these class names will not be lazy loaded. Enter one full or partial class name per line.

### Lazy Load Image Parent Class Name Excludes[¶](#lazy-load-image-parent-class-name-excludes "Permanent link")

*empty string*

Images whose parents contain these class names will not be lazy loaded. Enter one full or partial class name per line.

### Lazy Load iframe Class Name Excludes[¶](#lazy-load-iframe-class-name-excludes "Permanent link")

*empty string*

iframes containing these class names will not be lazy loaded. Enter one full or partial class name per line.

### Lazy Load iframe Parent Class Name Excludes[¶](#lazy-load-iframe-parent-class-name-excludes "Permanent link")

*empty string*

iframes whose parents contain these class names will not be lazy loaded. Enter one full or partial class name per line.

### Lazy Load URI Excludes[¶](#lazy-load-uri-excludes "Permanent link")

*empty string*

Images and iframes on the pages listed here will not be lazy loaded. Enter one URI per line. Partial strings may be used. URIs are compared with the `REQUEST_URI` server variable. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

String Matching Examples

Assume you have the following URIs:

1. `/recipes/baking/`
2. `/recipes/baking/cakes`
3. `/recipes/baking/brownies`
4. `/popular/recipes/baking/`

The string `/recipes/baking/` will match all four URIs.

The string `/recipes/baking/$` will match #1 because `$` indicates an exact match.

The string `^/recipes/baking` will match #1, #2, and #3 because `^` indicates the beginning of the URI.

### LQIP Excludes[¶](#lqip-excludes "Permanent link")

*empty string*

Images listed here will not be included when generating Low Quality Image Placeholders. Enter images one per line; partial strings are allowed.

If the LQIP service encounters an error while processing an image, that image is automatically added to this list and excluded from future LQIP processing.

## Localization tab[¶](#localization-tab "Permanent link")

[![LSCWP Page Optimization section Localization tab](../images/pageopt07.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt07.png)

### Gravatar Cache[¶](#gravatar-cache "Permanent link")

*OFF*

Gravatars can be cached locally if this setting is `ON`.

#### Gravatar Cache Cron[¶](#gravatar-cache-cron "Permanent link")

*OFF*

Turn this setting `ON` to refresh the Gravatar cache using a cron job.

#### Gravatar Cache TTL[¶](#gravatar-cache-ttl "Permanent link")

*604800*

This setting specifies how long, in seconds, Gravatars are cached. Any value larger than `3600` is acceptable.

### Localize Resources[¶](#localize-resources "Permanent link")

*OFF*

You may want to use this setting if a page-scoring site recommends optimizing JavaScript or other resources hosted on domains such as Google or Facebook. You cannot control or optimize those resources directly. Set **Localize Resources** to `ON` to copy the resources to your local system, where they can be optimized as needed.

Use the **Localization Files** field to specify which resources to localize.

#### Localization Files[¶](#localization-files "Permanent link")

This setting lets you use local copies of external JavaScript resources. Enter a URL to localize it. A list of **Recommended URLs** is provided by default, but you can choose other resources.

If **Localize Resources** is set to `ON`, resources listed here are copied and replaced with a local URL. This works only with HTTPS URLs, not HTTP URLs.

Enter URLs one per line.

Comments are supported. Start a line with `#` to make it a comment.

Example

```
# example sites
https://www.example.com/a.js
https://static.example.com/b.js
https://cdn.example.org/a.js
```

## Tuning tab[¶](#tuning-tab "Permanent link")

[![LSCWP Page Optimization section Tuning tab](../images/pageopt08.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt08.png)

### JS Delayed Includes[¶](#js-delayed-includes "Permanent link")

This setting has been deprecated as of v7.9.2.

If you use this setting to delay selected scripts, you can get the same functionality this way:

1. [Enable the global Delayed mode](#load-js-deferred) (**JS Settings > Load JS Deferred** = `Delayed`).
2. [Use the **JS Deferred/Delayed Excludes** setting](#js-deferreddelayed-excludes) to list any scripts that must run early.

*empty string*

List JavaScript filenames or partial strings for inline JS code, one per line, to ensure the listed JS is always delayed.

Warning

This setting does not work for inline JavaScript when [**Load JS Deferred**](#load-js-deferred) is set to `Deferred`.

### JS Excludes[¶](#js-excludes "Permanent link")

*empty string*

If you enabled minification, combination, or push for JavaScript in the **JS Settings** tab, you can exclude JS here. List any JS files to exclude from optimization, one per line. You may enter full URLs or partial strings. Wildcards are not needed.

### JS Deferred/Delayed Excludes[¶](#js-deferreddelayed-excludes "Permanent link")

*empty list*

If **Load JS Deferred** is enabled in the **JS Settings** tab, you may want to exclude some JavaScript files from being deferred or delayed. List them here, one per line. You may enter a full URI or partial strings to match; do not use wildcards.

### Guest Mode JS Excludes[¶](#guest-mode-js-excludes "Permanent link")

*empty list*

You may want to exclude some JavaScript files or inline JS code from Guest Mode. List them here, one per line. You may enter a full URI or partial strings to match; do not use wildcards.

Tip

Other ways to do the same thing include:

- Using the API filter `litespeed_optm_gm_js_exc`.
- Marking elements in HTML with the `data-no-defer="1"` attribute.

### URI Excludes[¶](#uri-excludes "Permanent link")

*empty string*

To exclude pages from optimization, enter a full path or partial string here.

### Optimize for Guest Only[¶](#optimize-for-guest-only "Permanent link")

*ON*

When set to `ON`, CSS and JavaScript optimizations are performed only for non-logged-in visitors.

When set to `OFF`, optimizations are performed for all visitors. Each user role will have its own set of generated CSS and JavaScript.

### Role Excludes[¶](#role-excludes "Permanent link")

*unchecked*

You may want to exclude some user roles from optimization. For example, if you are an admin testing new functionality, you may want to exclude your `administrator` role until testing is complete.

## Tuning CSS tab[¶](#tuning-css-tab "Permanent link")

[![LSCWP Page Optimization section Tuning CSS tab](../images/pageopt09.png)](https://docs.litespeedtech.com/lscache/lscwp/images/pageopt09.png)

### CSS Excludes[¶](#css-excludes "Permanent link")

*empty string*

If you enabled minification, combination, or push for CSS in the **CSS Settings** tab, you can exclude CSS here. List any CSS files to exclude from optimization, one per line. You may enter full URLs or partial strings. Wildcards are not needed.

### UCSS Inline Excluded Files[¶](#ucss-inline-excluded-files "Permanent link")

(Formerly **UCSS File Excludes and Inline**)

*empty string*

In some cases, you may prefer to exclude a CSS file from the UCSS calculation and instead add its full contents inline with the HTML. List CSS files here, one per line. Full URLs and partial strings are accepted.

### UCSS Selector Allowlist[¶](#ucss-selector-allowlist "Permanent link")

*empty string*

There may be CSS selectors, generally IDs or classes, that you always want included in the calculated [Unique CSS](#generate-ucss). List the selectors here, one per line. They will be combined with our predefined list, available [here on GitHub](https://github.com/litespeedtech/lscache_wp/blob/dev/data/ucss_whitelist.txt). [Inspect the content](lscache__lscwp__ts-optimize.md#use-browser-developer-tools) if you need help identifying the appropriate selectors.

This setting is specifically for selectors that appear in the CSS. Entering parent IDs or classes from the HTML will not work.

Make sure you reference each CSS selector exactly as it appears in the CSS file.

Example

HTML:

```
<div class="parent-class">
    <p class="child-class">I am a child</p>
</div>
```

CSS:

```
.child-class {
    font-size: .75em;
}
```

To allow `.child-class` for that paragraph, enter `.child-class` in the text box. Although `.parent-class .child-class` may be understood in other contexts, it will not work for **UCSS Allowlist** because that selector does not appear in the CSS code.

Be careful with pseudo-classes such as `:hover`, `:active`, and `:visited`. The UCSS engine ignores pseudo-class selectors in CSS content, except for `:not`. To include a pseudo-class selector in the UCSS result, add the main selector to **UCSS Allowlist** without the pseudo-class or colon (`:`).

Example

```
.example-class {
    font-weight: normal;
}
.example-class:hover {
    font-weight: bold;
}
```

The UCSS engine ignores the `.example-class:hover` selector. To include it, add `.example-class` to **UCSS Allowlist**.

Do not add `.example-class:hover`; the `:` will cause an error.

Note

Some CSS selectors are not visible until a user interacts with the page, for example, by scrolling. You can allowlist these selectors, but you may need to investigate to identify them. Interact with the page and use the browser's Inspect tool to find them.

### UCSS URI Excludes[¶](#ucss-uri-excludes "Permanent link")

*empty string*

To exclude pages from UCSS optimization, enter a full path or partial string here.

### Separate CCSS Cache Post Types[¶](#separate-ccss-cache-post-types "Permanent link")

*page*

By default, one set of Critical CSS is saved for each post type: Posts, Pages, and Products (if you have a custom post type called “Product”). If every item in a post type has different formatting, one set of Critical CSS is not enough. Add that post type to the box to generate Critical CSS for each item of that type.

Example

If every Page on the site has different formatting, enter `page` in the box. Separate Critical CSS files will be stored for every individual post of type Page on the site.

### Separate CCSS Cache URIs[¶](#separate-ccss-cache-uris "Permanent link")

*empty string*

If some pages do not follow the same formatting rules as the rest of their post type, enter their URIs or partial URIs here. Separate Critical CSS files will be generated for paths containing these strings. URIs are compared with the `REQUEST_URI` server variable. To indicate the beginning of a URI, add `^` to the beginning of the string. To require an exact match, add `$` to the end of the string.

String Matching Examples

Assume you have the following URIs:

1. `/recipes/baking/`
2. `/recipes/baking/cakes`
3. `/recipes/baking/brownies`
4. `/popular/recipes/baking/`

The string `/recipes/baking/` will match all four URIs.

The string `/recipes/baking/$` will match #1 because `$` indicates an exact match.

The string `^/recipes/baking` will match #1, #2, and #3 because `^` indicates the beginning of the URI.

### CCSS Selector Allowlist[¶](#ccss-selector-allowlist "Permanent link")

*empty string*

There may be CSS selectors, generally IDs or classes, that you always want included in the calculated [Critical CSS](#load-css-asynchronously). List them here, one per line. They will be combined with our predefined list, available [here on GitHub](https://github.com/litespeedtech/lscache_wp/blob/dev/data/ccss_whitelist.txt). [Inspect the content](lscache__lscwp__ts-optimize.md#use-browser-developer-tools) if you need help identifying the appropriate selectors.

This setting is specifically for selectors that appear in the CSS. Entering parent IDs or classes from the HTML will not work.

Make sure you reference each CSS selector exactly as it appears in the CSS file. For examples, see [**UCSS Selector Allowlist**](#ucss-selector-allowlist); they also apply to this setting.

### Critical CSS Rules[¶](#critical-css-rules "Permanent link")

*empty string*

When **Load CSS Asynchronously** is enabled in the **CSS Settings** tab, Critical CSS is generated automatically. You may want to identify additional definitions that must load first to style above-the-fold content properly. Enter those rules here as plain CSS, exactly as they appear in your stylesheet. They will be appended to the generated CSS.
