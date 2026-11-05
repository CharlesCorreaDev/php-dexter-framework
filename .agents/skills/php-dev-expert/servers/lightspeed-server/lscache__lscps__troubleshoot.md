# Troubleshooting | LiteSpeed Cache for PrestaShop | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscps/troubleshoot/

---

# Troubleshooting Guide[¶](#troubleshooting-guide "Permanent link")

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache plugins. If you don't see your issue listed here, there are [additional support options](lscache__lscps.md#additional-support) available.

See Also: [General LSCache Troubleshooting](lscache__troubleshoot.md)

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the plugin.

## Logged-in Username Not Showing[¶](#logged-in-username-not-showing "Permanent link")

With LiteSpeed Cache for PrestaShop enabled, a logged-in visitor may see their logged-in usernames on some pages but not on others, like so:

[![!](../images/prestashop-overrides-must-be-enabled-1.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-overrides-must-be-enabled-1.png)

[![!](../images/prestashop-overrides-must-be-enabled-2.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-overrides-must-be-enabled-2.png)

This is caused by incorrect ESI hole-punching.

To fix the problem, enable overrides, like so:

Navigate to **PrestaShop Admin > Advanced Parameters > Debug mode** and set **Disable all overrides** to `NO`. This setting must be `NO`, because PrestaShop relies on overrides to execute ESI hole punching.

Note

For some cases, especially for PrestaShop 1.7, the above solution may not be sufficient. The PrestaShop theme code may need to be analyzed to identify the root cause. This may be a very time-consuming process. If you'd like someone else to do it, you can engage LiteSpeed through paid support. Feel free to ask for a quote if you have such a need.

## PageSpeed Insights Zero Score[¶](#pagespeed-insights-zero-score "Permanent link")

PrestaShop's internal cache may lead to a zero PageSpeed Insights score.

After LiteSpeed Cache for PrestaShop is enabled, you may see a very fast loading speed (464ms) for TTFB through the browser. Also Gtmetrix and Pingdom show good results. However [Google's PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) consistently gives a `0` result.

Google [states](https://developers.google.com/web/tools/lighthouse/v3/scoring):

> Lighthouse returns a Performance score between 0 and 100. 0 is the lowest possible score. A 0 score usually indicates an error in Lighthouse. If you see a 0 score repeatedly, please file a bug on the Lighthouse repo.

Lighthouse seems to be having difficulty with your PrestaShop site.

PrestaShop has an internal cache, Smarty Cache, which may lead to this zero PageSpeed Insights score. It has nothing to do with LiteSpeed Cache for PrestaShop. If you clear PrestaShop's internal cache then everything should be fine.

Navigate to **PrestaShop Admin > Advanced Parameters > Performance** and press the **Clear cache** button.

[![!](../images/prestashop-internal-cache-clear.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-internal-cache-clear.png)

## Messy Layout After Clearing Smarty Cache[¶](#messy-layout-after-clearing-smarty-cache "Permanent link")

There is sometimes confusion, when it comes to PrestaShop caching. Whenever possible, be specific about which cache should be cleared. The phrase "clear the cache" could mean "clear PrestaShop's internal Smarty Cache," or it could mean "flush LiteSpeed Cache." Maybe it means both.

If you make changes to your theme, please remember to clear *both* Smarty Cache and LiteSpeed Cache. Failure to clear both caches may lead to messy layout problems.

[![!](../images/prestshop-litespeed-cache-plugin-flushcache-messy-layout.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestshop-litespeed-cache-plugin-flushcache-messy-layout.png)

### Clearing Smarty Cache[¶](#clearing-smarty-cache "Permanent link")

PrestaShop Smarty Cache can be found on the **Configure > Advanced Parameters > Performance > Smarty** menu. The **Clear cache** button on the top of the page clears Smarty Cache.

When your shop has been modified, especially your theme, you will need to clear Smarty Cache.

[![!](../images/prestashop-smarty-cache.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-smarty-cache.png)

### Clearing LiteSpeed Cache[¶](#clearing-litespeed-cache "Permanent link")

When the LiteSpeed Cache module is installed, it can be found on the **IMPROVE > Module Manager > LiteSpeed Cache Plugin** menu. Click **Configure** to see all of the available LiteSpeed Cache settings.

[![!](../images/prestshop-litespeed-cache-plugin-module.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestshop-litespeed-cache-plugin-module.png)

The **Flush All PrestaShop Pages** button on the top of the page clears LiteSpeed Cache.

[![!](../images/prestshop-litespeed-cache-plugin-flushcache.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestshop-litespeed-cache-plugin-flushcache.png)

## GDPR Cookie Banner Reappearing[¶](#gdpr-cookie-banner-reappearing "Permanent link")

The [Línea Gráfica lgcookieslaw module](https://addons.prestashop.com/es/marco-legal-ley-europea/8734-ley-de-cookies-rgpd-aviso-bloqueador.html), asks visitors to consent to cookies, and then hides the banner once they do.

However, when the cached page is reloaded, the banner reappears. This behavior can be changed by creating a [cache vary](lscache__devguide__advanced.md#cache-varies), so that there are multiple cached copies of the page: one for visitors who have not yet accepted the banner, and one for those who have.

In the Linea Gráfica plugin, this is controlled by the `lgcookieslaw` cookie, so that is what the cache vary should be based on. If you have a similar problem with a different plugin, find out the name of the cookie the plugin is using, and substitute that in the steps below.

Here is how you create the cache vary:

1. Make sure the LiteSpeed Cache module is [installed and enabled](lscache__lscps__installation.md#module-installation).
2. Edit your store's `.htaccess` file. After the line that reads `### LITESPEED_CACHE_END`, and add the following:

   ```
   <IfModule LiteSpeed>
   RewriteRule .* - [E=Cache-Vary:lgcookieslaw]
   </IfModule>
   ```
3. Navigate to **IMPROVE > Module Manager > LiteSpeed Cache Plugin**. Click the **Configure** button, and press the **Flush All PrestaShop Pages** button to clear LiteSpeed Cache.
