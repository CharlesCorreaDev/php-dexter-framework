# Configuration | LiteSpeed Cache for PrestaShop | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscps/settings/

---

# Settings[¶](#settings "Permanent link")

## LiteSpeed Cache Configuration[¶](#litespeed-cache-configuration "Permanent link")

Navigate to **LiteSpeed Cache > Configuration**.

### General[¶](#general "Permanent link")

[![!](../images/lscps-config-general.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-config-general.png)

- **Enable LiteSpeed Cache**: Must be set to `YES` to use LiteSpeed Cache.
- **Enable LiteSpeed ESI**: Must be set to `YES` if you wish to create [ESI](lscache__lscps__basics.md#esi-edge-side-includes) blocks.
- **Default Public Cache TTL**: Default timeout for publicly cached pages. Recommended value is `86400`.
- **Default Private Cache TTL**: Default timeout for private cache ESI blocks. Suggested value is `1800`. Must be less than `7200`.
- **Home Page TTL**: Default timeout for the home page. If you have random displayed items, you can have shorter TTL to make it refresh more often.
- **404 Pages TTL**: Default timeout for all 404 (Not found) pages. `0` will disable caching for 404 pages.
- **Product Comments TTL**: Cache timeout for product comments. There is no automatic purge when comments are added, so if you'd like new comments to appear more quickly, set a shorter TTL. Set to `0` to disable caching for product comments entirely.
- **Separate Mobile View**: Enable this if you have a separate mobile theme.
- **Separate Cache Copy per Customer Group**: This setting determines how many cache copies are saved per page, and it has four options:
  - `No - Everyone shares the same view`: Results in one cache copy for every visitor, whether logged in or logged out
  - `Yes - Each group has its own view`: Results in multiple cache copies, with each logged-in group sharing its own copy
  - `Two views - One for all logged-in users and another for logged-out users`: Results in two cache copies, one for all logged-in users to share, and one for all logged-out users to share
  - `One view - Only cache logged-out view`: Results in one cache copy for all logged-out users to share. Logged-in users do not get served cached content.
- **Flush All Pages When Cache Cleared**: If this is set to `NO`, then all pages will not be flushed when the cache is cleared, and you will have to do it manually.
- **Flush Product and Categories When Order Placed**: Determines how changes in product quantity and stock status affect product pages and their associated category pages.
- **Flush Home Page When Order Placed**: Determines how changes in product quantity and stock status affect the home page. If your home page doesn't display products, then there is no need to flush.
- **Specify Product IDs for Home Page Flush**: If you have enabled the previous setting, you can specify a comma-separated or space-separated list of product IDs that will trigger a flush. Leave this field blank to trigger a home page flush for every product update.
- **Enable Guest Mode**: This will speed up the first page view for new visitors by serving the default view. Robots will get an instant response without hitting the backend. If you have different views based on GeoIP, select `First Page Only` to make sure the second page will have the correct view.

### User-Defined Cache Rules[¶](#user-defined-cache-rules "Permanent link")

[![!](../images/lscps-config-user.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-config-user.png)

You only need to set a page as NOT-CACHEABLE if it is being cached by default.

- **Do-Not-Cache GET Parameters**: Comma-separated list of GET variables that prevents caching URLs within Cacheable Routes.
- **URL Blacklist**: List of relative URLs contained in Cacheable Routes to be excluded from caching. They start with `/` and don’t include the domain name. Partial matches can be performed by adding an `*` to the end of a URL. Enter one relative URL per line. Any URLs that do not start with a `/` will be treated as REGEX rules.
- **Context Vary Bypass** - If certain context changes are global and cacheable, you can list their names in a comma-delimeted string to avoid duplicate cache copies and allow the first visit to have a cache hit. Supported values are: `ctry`(if all countried have the same view), `curr`(if different currency pages will not share the same URL), and `lang` (if different language pages will always have different URLs).

Note

Cache varies based on contexts such as ctry, curr, and lang, allow multiple versions of the same URL to be cached. Cache varies are useful if your site requires them, but they require an additional page load for each user before a cached copy can be served. So, if a particular context doesn't require multiple copies for your site, it's best to use **Context Vary Bypass** to avoid it.

#### Verify a Page is Not Being Cached[¶](#verify-a-page-is-not-being-cached "Permanent link")

If you have configured LSCache to exclude certain content, you can use this method to verify that it works as expected:

1. From a non-logged-in browser, navigate to the page, open the **Network** tab in the developer tools, refresh the page, and click the first listed resource. This should be the URI of the page, as described above.
2. Look for the `X-LiteSpeed-Cache-Control: no-cache` header. If you find it, then the page has successfully *not* been served via LSCache.

It's also a good idea to make sure that the browser is not caching the page. For that to be true, you need to look for two headings: - `cache-control: no-cache, must-revalidate, max-age=0` - `expires: Wed, 11 Jan 1984 05:00:00 GMT`

Tip

The date in the `expires` header can be any date that is *prior to* the current date.

If either of those headers is not present, or has a different value, the browser is likely caching your page. This can lead to serving outdated or stale content. Typically, browser caching is accidentally enabled via bad optimization rules that add the cache control header to dynamic requests. Check your `.htaccess` file to fix this.

### Developer Testing[¶](#developer-testing "Permanent link")

[![!](../images/lscps-config-developer.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-config-developer.png)

- **Enable Cache Only for Listed IPs**: Limit LiteSpeed Cache to specified IPs. (Space or comma separated.) Allows cache testing on a live site. If empty, cache will be served to everyone.
- **Enable Debug Headers**: Show debug information through response headers. Turn off for production use.
- **Enable Debug Log**: Prints additional information to `lscache.log`. Turn off for production use.
- **Log Only for Listed IPs**: Only log activities from specified IPs. (Space or comma separated.) If empty, all activities will be logged. Only effective when debug log is enabled.
- **Debug Level**: Specifies log level ranging from `1` to `10`. The higher the value, the more detailed the output.

## LiteSpeed Cache Customization[¶](#litespeed-cache-customization "Permanent link")

Navigate to **LiteSpeed Cache > Configuration**.

### Convert Widget to ESI Block[¶](#convert-widget-to-esi-block "Permanent link")

[![!](../images/lscps-customize-esi.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-customize-esi.png)

This section allows you to treat a widget as an [ESI](lscache__lscps__basics.md#esi-edge-side-includes) block, which is helpful if you want to widget to have its own TTL, purge events, or privacy settings.

- **Module**: Select the module that you wish to turn into an ESI block.
- **Disable this ESI block**: Set this to `Yes` if you don't want the module to be used as an ESI block
- **Is Private**: If a block is private, then a cached copy is saved for each user that accesses it. Set to `No` if you want the block to be Public, which means there is one cached copy that is shared by everyone.
- **TTL**: You can set a custom TTL in seconds for this block, or leave it blank to use your site's default TTL.
- **Cache Tag**: By default, the cache tag will be set to the name of the widget. You can specify a custom cache tag here, which can be the shared by other widgets, meaning all of those widgets could be linked to a single purge event.
- **Purge Events**: Specify a comma-separated list of events that will trigger a purge of this block.
- **Purge Controllers**: Specify a comma-separated list of controller class names with optional parameters (written like `className?param1&param2`) that will trigger a purge of this block.
- **Hooked Methods**: Specify a comma-separated list of hooked methods that will trigger ESI injection. To exclude a hook, preface it with a `!`. To disable injection via the CallHook method, leave this setting blank.
- **Hooked Method Parameters**: Specify a comma-separated list of parameters used by the Hooked Methods
- **Widget Render Hooks**: Specify a comma-separated list of hooks that are allowed to render widgets. Use `*` for all hooks, and leave blank to disable renderWidget injection. Preface a widget with `!` to exclude it.
- **As Variable**: If the rendered content is used as a variable or it is less than 256 bytes, you can set it as a variable.
- **Ignore if Empty**: Set to `Yes` to avoid punching an ESI hole for a block where the content is rendered empty.
- **Only Cache When Empty**: Set to `Yes` to only cache this ESI block when the content is rendered empty. Non-empty blocks will not be cached. This is a good option for popup notices or message blocks.

## Customization for PrestaShop 1.6[¶](#customization-for-prestashop-16 "Permanent link")

The following widgets and features require further customization before they can be used with LSCPS:

- Viewed Products Block
- Compare Products Feature
- Blockcart Template

### Viewed Products Block[¶](#viewed-products-block "Permanent link")

The use of the **Viewed Products Block** module is not recommended as it is not cache friendly. Disable it in the **Modules List** area.

[![!](../images/capture_viewedproducts.png)](https://docs.litespeedtech.com/lscache/lscps/images/capture_viewedproducts.png)

### Compare Product Feature[¶](#compare-product-feature "Permanent link")

If you are using the **Compare Product** feature, you will need to define an ESI block around it in order for it to work properly with LSCPS.

Open the appropriate template file in an editor. The default template is located at `themes/default-bootstrap/product-compare.tpl` but if you have a custom theme, it will be under that theme's folder.

Locate the following text: `{count($compared_products)}`.

Anywhere this text appears, surround it with LiteSpeed ESI hooks like so:

```
{hook h="litespeedEsiBegin" m="lsc_compareproduct" field="comparedcount"}{count($compared_products)}{hook h="litespeedEsiEnd"}
```

Warning

Be careful not to add extra spaces or line breaks in between!

This is the default template after the substitutions have been made. Your template should look similar:

```
{if $comparator_max_item}
    <form method="post" action="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" class="compare-form">
        <button type="submit" class="btn btn-default button button-medium bt_compare bt_compare{if isset($paginationId)}_{$paginationId}{/if}" disabled="disabled">
<span>{l s='Compare'} (<strong class="total-compare-val">{hook h="litespeedEsiBegin" m="lsc_compareproduct" field="comparedcount"}{count($compared_products)}{hook h="litespeedEsiEnd"}</strong>)<i class="icon-chevron-right right"></i></span>
        </button>
        <input type="hidden" name="compare_product_count" class="compare_product_count"
               value="{hook h="litespeedEsiBegin" m="lsc_compareproduct" field="comparedcount"}{count($compared_products)}{hook h="litespeedEsiEnd"}" />
        <input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
    </form>
    {if !isset($paginationId) || $paginationId == ''}
        {addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
        {addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
        {addJsDef comparator_max_item=$comparator_max_item}
        {addJsDef comparedProductsIds=$compared_products}
    {/if}
{/if}
{addJsDef comparedProductsIds=$compared_products}
```

You'll notice that `{count($compared_products)}` appeared twice, and was surrounded with the ESI hooks both times.

### Blockcart Template[¶](#blockcart-template "Permanent link")

A pop-up overlay appears when an item is added to the cart, if the request hits the backend. If the request is served from cache, the overlay does not appear, though the cart is updated properly. This occurs in the default-bootstrap theme and others.

[![!](../images/lscps-customization-01.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-customization-01.png)

This is caused by the smarty template `active_overlay` counter. When the content is served from an ESI block as a separate request, the counter value becomes `2`. So if you want this overlay to always show, you need to modify your theme's smarty template.

Modify `your_active_theme/modules/blockcart/blockcart.tpl`

Locate the following lines:

```
{if !$PS_CATALOG_MODE && $active_overlay == 1}
<div id="layer_cart">
```

Change the first line to this:

```
{if !$PS_CATALOG_MODE && $active_overlay}
```

Now the pop-up overlay will always appear. Please remember if you ever update your theme, you will need to apply these changes again.

## Customization for PrestaShop 1.7[¶](#customization-for-prestashop-17 "Permanent link")

PrestaShop v1.7 [introduces](http://developers.prestashop.com/themes/smarty/helpers.html#widgets) `{widget}` and `{widget_block}` elements that can be used in Smarty templates directly.

To ensure a hole is punched for a widget, you must define it as an ESI block. Currently, this can be automated in widgets, but not in widget blocks. You will have to manually place LSCache hooks to mark the beginning and the end of each ESI block in the template. LSCache relies on these hooks to trigger the ESI injection.

Note

As of this writing, the cart (`ps_shoppingcart`) and login (`ps_customersignin`) blocks are the only blocks we know of that are impacted by the issue.

Both cart and login blocks already have hooks defined in the default “classic” template so there is no need to change template files for those particular blocks in that particular template. However, if `ps_shoppingcart` and `ps_customersignin` are *not* triggered through hooks or through `{widget}`, but through `{widget_block}`, you *will* have to manually update the template file.

### Templates With Multiple Variants[¶](#templates-with-multiple-variants "Permanent link")

Sometimes `header.tpl` may use multiple variants, like so:

```
  {if $iqitTheme.h_layout == 1}
      {include file='_partials/_variants/header-1.tpl'}
  {elseif $iqitTheme.h_layout == 2}
      {include file='_partials/_variants/header-2.tpl'}
  {elseif $iqitTheme.h_layout == 3}
      {include file='_partials/_variants/header-3.tpl'}
  {elseif $iqitTheme.h_layout == 4}
      {include file='_partials/_variants/header-4.tpl'}
  {elseif $iqitTheme.h_layout == 5}
      {include file='_partials/_variants/header-5.tpl'}
  {elseif $iqitTheme.h_layout == 6}
      {include file='_partials/_variants/header-6.tpl'}
  {elseif $iqitTheme.h_layout == 7}
      {include file='_partials/_variants/header-7.tpl'}
  {/if}
```

In this case, you will need to back up all seven header files, and make changes to these templates from `header-1.tpl` to `header-7.tpl`, the same way as shown above.

## Customize EU Cookie Law Plugin[¶](#customize-eu-cookie-law-plugin "Permanent link")

The PrestaShop Module [Prestashop European Union Cookie Law](https://mypresta.eu/modules/front-office-features/european-union-cookie-law.html) can work with LSCache, but you will need to adjust a few settings in the LSCache Module.

Navigate to the **Customization** tab of the **LiteSpeed Cache** screen. Click **Add New ESI Block** at the top of the page.

[![!](../images/lscps-configure-eucookiemodule.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-configure-eucookiemodule.png)

Adjust the following settings:

- **Module** = `uecookie` (select from dropdown)
- **Is Private** = `Yes`
- **TTL** = `1800` seconds
- **Cache Tag** = `uecookie`
- **Hooked Methods** = `hookFooter` if the cookie notice displays in the footer, and `hookHeader` if it displays in the header.
- **As Variable** = `Yes`
- **Ignore if Empty** = `No`
- **Only Cache When Empty** = `Yes`

## PrestaShop CLI[¶](#prestashop-cli "Permanent link")

PrestaShop's command-line interface commands are executed from the website host's server via the `bin/console` command, like so:

```
bin/console <command> <parameters>
```

The following LiteSpeed commands are currently available:

| Command | Purpose |
| --- | --- |
| [litespeedcache:warmup](#litespeedcachewarmup) | To warm up the cache |

### litespeedcache:warmup[¶](#litespeedcachewarmup "Permanent link")

```
bin/console litespeedcache:warmup <sitemap> [useragent]
```

Warm up the cache.

| Parameter | Description |
| --- | --- |
| `<sitemap>` | Link to the sitemap that contains the pages to warm up |
| `[useragent]` | Optional mobile user agent, used to warm up a mobile view |

Add a `[useragent]` to warm up a website where **Separate Mobile View** is enabled and you want to warm up both desktop and mobile views.

Examples

To warm up a website with a single view:

```
bin/console litespeedcache:warmup https://example.com/sitemap.xml
```

To warm up a website with separate desktop and mobile views:

```
bin/console litespeedcache:warmup https://example.com/sitemap.xml iphone
```

## Translating the LSCache Module[¶](#translating-the-lscache-module "Permanent link")

LSCPS is written in United States English, and so we rely our our international users to help us translate the plugin for worldwide use. If you are fluent in a language other than English (US), and you have a few minutes to contribute to our plugin, we would appreciate it! Even if you don't want to share your localization efforts with the larger community, you can use these instructions to create a personalized translation for your own use.

### Is Your Language Needed?[¶](#is-your-language-needed "Permanent link")

If we have a translation available in your language, it will come packaged with LSCPS. If you are still seeing the plugin interface in English, or, if the translation into your language is incomplete or incorrect in some way, we can definitely use your expertise.

### How to Create a Translation[¶](#how-to-create-a-translation "Permanent link")

From the PrestaShop Admin, navigate to **International > Translations**.

[![!](../images/lscps-translate-01.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-translate-01.png)

For **Type of translation**, select `Installed modules translations`. A **Select your module** box will appear. Click on that and look for `LiteSpeed Cache`. You can type it in the search box, if you have a lot of modules to scroll through.

Choose your language from the **Select your language** drop-down box. You can only do a translation for languages that you have already installed in PrestaShop. In our example, we have English and Spanish installed, and we are selecting `Español (Spanish)`.

Click the **Modify** button.

[![!](../images/lscps-translate-02.png)](https://docs.litespeedtech.com/lscache/lscps/images/lscps-translate-02.png)

Begin translating! Once a section has been completed and saved, the pink boxes turn pale gray, and the **EXPRESSIONS** count is decreased accordingly. In our example, we've translated and saved the **LITESPEEDCACHE** section, but we've only just started working on the **ADMINLITESPEEDCACHECONFIGCONTROLLER** section.

Enter the translations for as many expressions as you know, and then press the **Save** button.

### Now What?[¶](#now-what "Permanent link")

Your string translations are stored in `modules/litespeedcache/translations/<language>.php`, where "" is the two-character code (for example, `es.php` for Spanish). If you are satisfied with your translation and you'd like to share it with the PrestaShop community, it's as simple as sharing the PHP file with LiteSpeed. Get in touch with us via [email](lscache__lscps__settings__info_litespeedtech.com.md) or [slack](https://www.litespeedtech.com/slack), and let us know you have a new language to share.

Thank you for helping us make LSCPS accessible for a global audience!
