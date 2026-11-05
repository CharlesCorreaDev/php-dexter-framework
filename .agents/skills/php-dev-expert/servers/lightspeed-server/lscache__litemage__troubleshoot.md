# Troubleshooting | LiteMage Cache for Magento 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/litemage/troubleshoot/

---

# Troubleshooting Guide[¶](#troubleshooting-guide "Permanent link")

We do our best to document and provide solutions for any situation you may encounter with LiteSpeed Cache plugins. If you don't see your issue listed here, there are [additional support options](lscache__litemage.md#additional-support) available.

See Also: [General LSCache Troubleshooting](lscache__troubleshoot.md)

Tip

Before contacting the support team, please verify that you have upgraded to the most recent version of the plugin.

When troubleshooting, we recommend you enable LiteMage Cache only for certain IPs, such as your own admin IP. To do this, from the Magento Admin Panel, navigate to **System > Configuration** and in the left side menu under **LITEMAGE CACHE** click **LiteMage Configuration**. Under **Developer Testing**, add the desired IPs to the **Enable LiteMage Cache Only for Listed IPs** field.

## Check These First[¶](#check-these-first "Permanent link")

Many LiteMage problems can be explained by one of three issues. Please check these first:

1. Your LiteSpeed license may not have the LiteMage module enabled. While all trial licenses include LiteMage Unlimited, the LiteMage add-on must be added to new and existing licenses. Learn how to [add the Cache Module](https://docs.litespeedtech.com/licenses/how-to/#add-cache-to-an-existing-license).
2. Your Magento installation's .htaccess file may not contain the `LiteMage on` directive:

   ```
   <IfModule Litespeed> 
   LiteMage on 
   </IfModule>
   ```
3. If you are a shared hosting account user, your host may not have enabled the LiteMage feature for your account.

## LiteMage Cache Not Enabled[¶](#litemage-cache-not-enabled "Permanent link")

> Your installation of LiteSpeed Web Server does not have LiteMage Cache enabled. Please make sure your LiteSpeed license includes the LiteMage cache module, and LiteMage is turned on in the .htaccess file in the root directory of your Magento installation.

If you see this error message, please check your license and .htaccess as described [here](#check-these-first).

## LiteMage Option Unavailable[¶](#litemage-option-unavailable "Permanent link")

[![!](../images/litemage2-missing.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-missing.png)

When you attempt to add LiteMage to your Magento installation, and `LiteMage Cache on LiteSpeed Web Server` is not appearing as a Full Page Cache option, please check your license, .htaccess, and hosting provider as described [here](#check-these-first).

## LiteMage Response Header Missing[¶](#litemage-response-header-missing "Permanent link")

If the response header does not contain `X-LiteSpeed-Cache: hit,litemage`, please check your license and .htaccess as described [here](#check-these-first). If those are in order, take a look at the following possible causes.

### Are you Using a LiteSpeed Server?[¶](#are-you-using-a-litespeed-server "Permanent link")

Check the header for `litespeed`, which indicates that a LiteSpeed web server is in use. LiteMage does not work with other servers, such as Apache or nginx. LiteSpeed is required.

### Is the Cache Root Set?[¶](#is-the-cache-root-set "Permanent link")

Cache root must be set at the server level and the virtual host level. Please follow the instructions for your control panel found [here](lscache__litemage__installation.md)

Example

In a cPanel EA4 environment, you can check the cache root with the following command:

```
grep -i -r lscache /etc/apache2/*
```

It should output the following. If it does not, then you know you will need to set them up.

/etc/apache2/conf.d/userdata/lscache\_vhosts.conf:CacheRoot lscache /etc/apache2/conf.d/includes/pre\_main\_global.conf:CacheRoot /home/lscache/

### Is Page Cache Enabled in Magento?[¶](#is-page-cache-enabled-in-magento "Permanent link")

In **System > Cache Management**, refresh the **Configuration** and **Page Cache** cache types. **Page Cache** should be enabled, if not, then LiteMage cannot work.

[![!](../images/litemage-pagecache-enable.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage-pagecache-enable.png)

### Is the Page Cacheable?[¶](#is-the-page-cacheable "Permanent link")

If you've checked all of the above and still do not see the `X-LiteSpeed-Cache: hit,litemage` header for a particular page, it is likely that the page is non-cacheable due to a setting from another plugin.

You can verify this by switching the Magento 2 full page cache setting from LiteMage back to the built-in cache and testing the header again. Most likely you won't see a cache header there either.

To find the plugin that is causing the conflict, navigate to the `/app/` and `/vendor/` diretories.

Tip

Users can install modules under either `/app/` or `/vendor/`, so both locations should be checked.

Execute the following command in each directory:

```
grep -r cacheable * | grep default\.xml | grep false
```

Your output might look something like the following:

```
design/frontend/Sm/market/Magento_Theme/layout/default.xml:                           template="Magento_Theme::html/myaccount-section.phtml" cacheable="false"/>
```

Here, `cacheable="false"` from `default.xml` will prevent Magento from caching no matter which caching method is selected. Any page containing this block will be non-cacheable. If you see that `layout/default.xml` contains `cacheable="false"`, then *all pages on your Magento site will be considered non-cacheable*.

To fix this problem, you must remove `cacheable="false"` from the default layout. Just be aware that `cacheable` was probably set to `false` for a reason, and this method may cause the associated area of your store to stop functioning correctly.

Warning

`default.xml` controls every page, but other layout files (.xml files) may override it for different pages. If you don't find what you are looking for with `default.xml`, you can use the following command, which searches all `xml` files:

```
grep -r cacheable * | grep xml | grep false
```

Your output might look something like the following:

```
code/Mageplaza/SocialLogin/view/frontend/layout/customer_account_create.xml:        <block  class="Mageplaza\SocialLogin\Block\Popup\Authentication\Social" before="-" name="social-login-popup-authentication-social-create" ifconfig="sociallogin/general/is_enabled" template="Mageplaza_SocialLogin::form/social.phtml" cacheable="false"/>
code/Mageplaza/SocialLogin/view/frontend/layout/customer_account_login.xml:        <block class="Mageplaza\SocialLogin\Block\Popup\Authentication\Social" after="customer.new" ifconfig="sociallogin/general/is_enabled" name="social-login-popup-authentication-social-login" template="Mageplaza_SocialLogin::form/social.phtml" cacheable="false"/>
code/Mageplaza/SocialLogin/view/frontend/layout/default.xml:                    <block class="Mageplaza\SocialLogin\Block\Popup\Authentication\Social" name="social-login-popup-authentication-social" as="popup.authentication.social" template="popup/form/authentication/social.phtml" cacheable="false"/>
```

In the example above, `customer_account_create.xml` and `customer_account_login.xml` are other layouts that indicate the pages controlled by them are not cacheable. Fix these layouts in the same manner as the default layout, or if they are related to a plugin, you can disable the associated plugin.

Tip

If you are running the Facebook Plugin, it is commonly known to make Magento stores uncacheable. It should appear in the list with the `grep` command above, if so.

### Do You See Cache Control and Tag Headers?[¶](#do-you-see-cache-control-and-tag-headers "Permanent link")

When you check the header, you may see `x-litespeed-cache-control` and `x-litespeed-tag` headers but no LiteMage miss or hit:

[![!](../images/litemage-cache-tag-no-hit.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage-cache-tag-no-hit.png)

Let's look at these headers more closely.

```
x-litespeed-cache-control:public,max-age=86400
```

This header indicates that the license is ok and the LiteMage plugin has been enabled. If the cache module is working and the page is cacheable, you will always see an `x-litespeed-cache` header, indicating either miss or hit. If you only see `x-litespeed-cache-control` but not `x-litespeed-cache:miss`, that means the cache module is not working properly.

```
x-litespeed-tag:cms.B_porto_homeslider_1,store,cms.B,cms_page_35,cms.B_,cms.B_Willow_custom.B_for_header,P.1207,P,P.3746,P.1229,P.3635,P.3803,P.1162,P.3582,P.3820,P.1188,P.1322,P.1223,P.1133,P.4094,P.3977,P.1153,C.2,cms.B_Willow_footer_top_1_for_1,cms.B_Willow_footer_middle_1_for_1,cms.B_Willow_footer_middle_2_for_1
```

The above `x-litespeed-tag` header should always show up together with an `x-litespeed-cache:miss` header. If not, it means something is wrong with the setup. The common reason is a cache root permission problem. If there is a cache root permission problem, it means the cache file cannot be written or generated correctly.

The `x-litespeed-tag` problem can also be caused by incorrect cache root setup, or a license restriction such as you might have with a starter plan. This can be easily viewed in **Cache Management LiteMage statistics**. If **Cached objects** is `0`, then there is a cache storage issue.

Virtual host cache root is normally set to `/home/$USER/lscache` and it should be owned by `nobody:user`. If somehow you manually created this directory with `user:user` ownership, or you manually changed it to `user:user` ownership, there will be a cache module write permission issue as described above. You may also encounter this issue with some old cache files.

To fix the problem, remove the `/home/$USER/lscache` folder completely and restart the web server. The cache root folder (normally `/home/$USER/lscache`) will be created with correct ownership and permissions during the restart. Test the page again, and you should see the `x-litespeed-cache:hit,litemage` header.

### Advanced Debugging[¶](#advanced-debugging "Permanent link")

LiteMage 2.1.0 and above includes the **X-LiteMage-Debug response headers** feature, designed to make troubleshooting easier.

When you've tried everything listed above, but you still are not seeing an `X-LiteSpeed-Cache: hit,litemage` header, enable this debug feature to collect more information.

Navigate to **Magento Admin > Stores > Advanced > LiteMage Cache > Developer Settings**, and set **Enable Debug** to `Yes and set X-LiteMage-Debug response headers`. You can also add your IP address to the **Log Debug Messages Only for Listed IPs** field to show the debug header to your IP only.

[![!](../images/litemage2-enable-debug-response-headers1.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-enable-debug-response-headers1.png)

Once enabled, you can browse your site, and use the browser's developer tool to check the header: [![!](../images/litemage2-enable-debug-response-headers-2.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-enable-debug-response-headers-2.png)

In this case, the **Headers** show:

```
x-litemage-debug-cc: 
x-litemage-debug-info: Layout has uncacheable blocks mgs_gdpr_login_header, wishlist-link-header, wishlist_header, wishlist_header, 
captcha-header
x-litemage-debug-tag: 
x-litemage-debug-vary:
```

The info `Layout has uncacheable blocks mgs_gdpr_login_header, wishlist-link-header, wishlist_header, wishlist_header, captcha-header` tells you that there are five blocks which are causing the page to be uncacheable. If you want to cache the page, you will either need to disable tthe blocks, or modify the template to make them cacheable.

If you are experiencing unexplained frequent cache purge events, try enabling the **Log Backtrace for Purge Events** option. This will help you to understand what is causing the cache to be purged.

## User's First Visit Always Uncached[¶](#users-first-visit-always-uncached "Permanent link")

Some stores have plugins enabled which use cache vary cookies. A cache vary allows multiple versions of the same URL to be cached. These versions will differ from each other by currency, visitor device type, or whatever information is stored in the vary cookie.

Cache varies can be useful, but they require an additional page load for each user before a cached copy can be served. You will need to weigh the impact of this extra uncached page load against the usefulness of the plugin.

Let's look at an example to see what happens. All of these visits are from a browser in incognito mode:

With the user's first visit, the `_lscache_vary` cookie is set. [![!](../images/litemage2-cache-vary0.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-cache-vary0.png)

Then, in their second visit, you get the `X-LiteSpeed-Cache` header, and it's a miss, since this variation hasn't been cached yet. [![!](../images/litemage2-cache-vary1.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-cache-vary1.png)

Lastly, it's the third visit where a cached version of the page is finally served. [![!](../images/litemage2-cache-vary3.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-cache-vary3.png)

We can then use another browser to simulate a different user and check the same page.

With this user'd first visit, we once again see the vary cookie being set. [![!](../images/litemage2-cache-vary4.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-cache-vary4.png)

The second visit results in a cache hit, since the page has previously been cached. [![!](../images/litemage2-cache-vary5.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage2-cache-vary5.png)

As you can see, each new user's first visit must be uncached while the `_lscache_vary` cookie is being set. After the cookie is set, then the user's visit proceeds as usual, with pages hitting LiteMage Cache as either a `hit` or `miss`. If you want avoid this first uncached visit, you must locate the plugin that causes the cache vary and disable it. This may be an accessibility plugin, a currency switcher plugin, a language plugin or a geolocation plugin, among others.

If the plugin is worthwhile and you want to continue using it, that's an option, too. You could ignore this issue. It only impacts a user's first visit to *one* page (not the first visit to *each* page). For the rest of the user's visits, all pages can be served from cache, presuming they have already been cached by previous visitors.

## LiteMage is Working, but Status is Blank[¶](#litemage-is-working-but-status-is-blank "Permanent link")

You can see from the `X-LiteSpeed-Cache: hit,litemage` header on your Magento pages that LiteMage is working properly. However, the **LiteMage Cache Status** section in Magento Cache Management is telling a different story. It's completely blank.

[![!](../images/litemage-no-stats.png)](https://docs.litespeedtech.com/lscache/litemage/images/litemage-no-stats.png)

This is most likely caused by a server `/etc/hosts` file override to an incorrect Store IP addresss. This could be an IP for a staging server that you forgot to set to production. Or maybe your Admin login and the Magento store are on different servers. Your Admin server might have an override to another IP.

Take a look at the hosts file and compare it to your Magento server IP address. If they are different, there is your problem. Correct it in `/etc/hosts`, and that should resolve the issue. Technically, DNS should be able to locate the correct IP, and there should be no need for an override at all. Removing the line completely is the safest option.

Example

Running `cat /etc/hosts` reveals `192.0.2.0 example.com`. However, your Magento server IP is 192.0.2.1, and that is why there are no stats for your actual domain.

### Cache Management Page Won't Display[¶](#cache-management-page-wont-display "Permanent link")

LiteMage is installed and working, but when you attempt to navigate to **System > Cache Management**, the page doesn't load.

This is because this page displays the LiteMage cache object count, and in order to retrieve the count from LiteSpeed Web Server, a curl request with the domain URL is used. If there is a front end proxy such as Cloudflare, the request may be blocked, and if it fails, the page will not load properly.

To solve this problem, the curl request needs to obtain the domain IP from the local server, and bypass the front end proxy. Map the server IP to the domain in `/etc/hosts` and the problem will be solved.

Tip

If you are using Web ADC, use the ADC IP in `/etc/hosts`.

## Menu Bar is Missing[¶](#menu-bar-is-missing "Permanent link")

After LiteMage is enabled, the menu bar is missing. Other parts of the page show properly, and the `X-LiteSpeed-Cache: hit, litemage` header is visible, indicating that the page has been cached.

The likely cause is an ESI block in the menu bar, and a compatibility issue between ESI and some third party module.

You can solve the problem by removing the ESI block from the layout file, and allowing the block to be publicly cached together with the main page.

Execute the following steps to verify that this is indeed the problem on your page, and then remove the ESI block from the layout.

1. Turn on the [Litemage Debug Log](lscache__litemage__settings.md#developer-settings).
2. Check the log (found in `magento_dir/var/log/litemage.log`), find any ESI injection entries that begin with `replace esi`, and confirm that these are the blocks that are missing from the main page.

   Example

   ```
   [2021-02-04 04:27:09] LiteMage [IP:51685:35114700] replace esi ; &lt;esi:include src="/litemage/block/esi/b/navpro.topnav/h/-%2CLCV%2CLCVTL/" cache-tag="NAVIGATIONPRO_MENU_14" cache-control="public"/&gt;
   [2021-02-04 04:27:09] LiteMage [IP:51685:35114700] replace esi ; &lt;esi:include src="/litemage/block/esi/b/catalog.topnav/h/-%2CLCV%2CLCVTL/" cache-tag="topnav" cache-control="public"/&gt;
   ```
3. Look for the layout files that define these ESI blocks. In the `magento_dir/`, you should check `default.xml` in both `vendor` and `app` directories, like so:

   ```
   grep -r ttl vendor | grep default.xml
   grep -r ttl app | grep default.xml
   ```

   The output should correspond to what you found in the debug log in Step 2.

   Example Output

   ```
   swissup/module-navigationpro/view/frontend/layout/default.xml:            <block class="Swissup\Navigationpro\Block\Menu" name="navpro.topnav" template="Swissup_Navigationpro::menu.phtml" ttl="3600" before="-" ifconfig="navigationpro/top/identifier">
   magento/module-theme/view/frontend/layout/default.xml:                    <block class="Magento\Theme\Block\Html\Topmenu" name="catalog.topnav" template="Magento_Theme::html/topmenu.phtml" ttl="3600" before="-"/>
   ```
4. Update the layout files, and remove the ESI blocks by deleting the `ttl="3600"` string.

   Example

   ```
   swissup/module-navigationpro/view/frontend/layout/default.xml:            <block class="Swissup\Navigationpro\Block\Menu" name="navpro.topnav" template="Swissup_Navigationpro::menu.phtml" before="-" ifconfig="navigationpro/top/identifier">
   magento/module-theme/view/frontend/layout/default.xml:                    <block class="Magento\Theme\Block\Html\Topmenu" name="catalog.topnav" template="Magento_Theme::html/topmenu.phtml" before="-"/>
   ```
5. Navigate to **System > Cache Management** and refresh **Configuration**, **Layout**, and **Page Cache**.
6. Check the frontend page. The menu bar should now display properly.

## Requested store not found[¶](#requested-store-not-found "Permanent link")

When you execute the `bin/magento cache:flush` command in the CLI, or you begin indexing (which triggers a cache purge), you may see an error like the following:

```
In StoreRepository.php line 112:  
The store that was requested wasn't found. Verify the store and try again.
```

This is caused by an unknown store ID.

When LiteMage CLI sends a purge request to a store URL, it needs to know the store ID. Most Magento sites use a default store ID of `1`, and this is what LiteMage assumes, if no other **Frontend Store ID** is specified.

However, if you have created or deleted stores over time, your default store may no longer have an ID of `1`.

To fix this error, you can update your LiteMage configuration to use a different default store ID.

### Find your Store ID[¶](#find-your-store-id "Permanent link")

If you don't know your default store ID, you can locate it by going to any store configuration page. Set the scope to your default store, and check the URL in your browser. You should see something like:

```
https://example.com/admin/system_config/...../store/5/
```

This would indicate that your store ID is `5`.

### Update your Store ID[¶](#update-your-store-id "Permanent link")

Now that you know your store ID, navigate to **LiteMage config > Developer Settings** and set **Frontend Store ID** to the correct value. (That would be `5` in our previous example.)

### Try Purge Again[¶](#try-purge-again "Permanent link")

Now that the default store ID has been corrected, you can execute `bin/magento cache:clean full_page` to purge the cache, and this time the command should be completed successfully:

```
LiteMage purged tags * 
Cleaned cache types:
full_page
```

### Error while upgrading Magento[¶](#error-while-upgrading-magento "Permanent link")

If you are upgrading Magento for a store whose ID is not `1`, `setup:upgrade` will fail when the CLI purge is triggered as part of the update process. The solution is the same as above: update your configuration with the correct **Frontend Store ID**.

If your Magento Admin backend is not accessible due to the failure of the ugrade process, you can enter your correct store ID at `litemage/dev/frontend_store_id` using phpMyAdmin.

Or, you can run the following SQL query:

```
UPDATE `core_config_data` SET `value` = 'X' WHERE `core_config_data`.`path` = ‘litemage/dev/frontend_store_id’;
```

Please remember to replace `X` in the query above with your actual store ID.

After you update this option in the database, run `setup:upgrade` again to complete the process.

## Additional Support[¶](#additional-support "Permanent link")

LiteMage works out of the box with Magento’s typical configuration most of the time.

As Magento allows customizations (such as to themes or plugins, etc.), sometimes these site modifications cause problems when enabling LiteMage.

LiteSpeed Technologies tries to document any issues reported and provide solutions or recommendations for such circumstances, but if the issue you are facing is not addressed in this documentation, you do have other options.

LiteSpeed Technologies offers Professional Premium Paid Support Service, provided by our LiteMage Support Engineers and LiteMage Developers, to help our clients gain the performance benefits that LiteMage can deliver.

LiteMage Support is offered in three tiers:

### Tier 1 Basic[¶](#tier-1-basic "Permanent link")

*$299*

Professional installation of standard LiteMage and web server / LiteMage configuration. Includes:

- Setting up the cache root
- Setting up the cache policy
- Configuring LiteMage
- Identify and Disable conflicting plugins/modules
- Verifying that cache is working

### Tier 2 Medium[¶](#tier-2-medium "Permanent link")

*$599*

Professional installation of LiteMage in Magento Store with desktop/mobile detection or GeoIP detection. Includes:

- Tier 1 Items
- Customized rewrite rules as needed to enable LiteMage for the different views above.

### Tier 3 Advanced:[¶](#tier-3-advanced "Permanent link")

*1199*

Professional installation of LiteMage for complex Magento stores (different customized themes, plugins, modules, etc.). Includes:

- Tier 2 items
- Custom xml, php or other code changes to solve the problem
- Our experienced Magento / LiteMage developer(s) time as needed.

### Worry Free Guarantee[¶](#worry-free-guarantee "Permanent link")

LiteMage Premium support is **fully refundable** if we fail to enable LiteMage cache for your site.

### How to Order[¶](#how-to-order "Permanent link")

Go to the [LiteSpeed store's support section](https://store.litespeedtech.com/store/cart.php?gid=5). Choose **LiteMage Cache Setup**. `Basic`, the $299 option, will be shown. Click **Order Now**, and you will be able to select one of the 3 different tiers: `Basic`, `Medium` and `Advanced`. The prices in the drop-down for `Medium` and `Advanced` are *in addition to* the cost of `Basic`. Select the tier that meets your needs.
