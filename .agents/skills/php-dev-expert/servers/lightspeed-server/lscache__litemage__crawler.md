# Crawler Script | Magento 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/litemage/crawler/

---

# The LiteMage Cache Crawler Script[¶](#the-litemage-cache-crawler-script "Permanent link")

## Cache Warmup[¶](#cache-warmup "Permanent link")

The LiteMage 2 cache crawler travels through your site, refreshing pages that have expired in the cache. This makes it less likely that your visitors will encounter un-cached pages.

### Before You Begin[¶](#before-you-begin "Permanent link")

1. Install and enable [LiteMage Cache for Magento2](lscache__litemage__installation.md)
2. Crawler Engine: The crawler must be enabled at the server level, or you will see the warning message `Server crawler engine not enabled. Please check....`. If you are using a shared hosting server, please contact your hosting provider, or see [our instructions](lscache__lscwp__admin.md#enabling-and-limiting-the-crawler).
3. SiteMap: Prepare your site's sitemap, e.g. `http://magento2.com/sitemap.xml`

### How to Use the Crawler Script[¶](#how-to-use-the-crawler-script "Permanent link")

- [Download it from here](https://www.litespeedtech.com/packages/litemage2.0/M2-crawler.sh)
- Change the permissions so that the file is executable: `chmod +x M2-crawler.sh`
- Run the script: `bash M2-crawler.sh SITE-MAP-URL`

#### More Options[¶](#more-options "Permanent link")

- `-h, --help`: Show this message and exit.
- `-m, --with-mobile`: Crawl mobile view in addition to default view.
- `-c, --with-cookie`: Crawl with site's cookies.
- `-cc, --custom-cookie`: Crawl with site's cookies and custom cookie.
- `-w, --webp`: Crawl with webp header
- `-b, --black-list`: Page will be added to blacklist if HTML status error and no cache. Next run will bypass page.
- `-g, --general-ua`: Use general user-agent instead of lscache\_runner for desktop view.
- `-i, --interval`: Change request interval. `-i 0.2` changes from default 0.1 second to 0.2 seconds.
- `-e, --escape`: To escape URL with perl, use this when your URL has special character.
- `-v, --verbose`: Show complete response header under `/tmp/crawler.log`.
- `-d, --debug-url`: Test one URL directly. as in `sh M2-crawler.sh -v -d http://example.com/test.html`.
- `-qs,--crawl-qs`: Crawl sitemap, including URLS with query strings.
- `-r, --report`: Display total count of crawl result.

Example commands:

- To get help: `bash M2-crawler.sh -h`
- To change default interval request from 0.1s to custom NUM value: `bash M2-crawler.sh SITE-MAP-URL -i NUM`
- To crawl with cookie set: `bash M2-crawler.sh -c SITE-MAP-URL`
- To store log in `/tmp/crawler.log`: `bash M2-crawler.sh -v SITE-MAP-URL`
- To debug one URL and output on screen: `bash M2-crawler.sh -d SITE-URL`
- To display total count of crawl result: `bash M2-crawler.sh -r SITE-MAP-URL`

Tip

```
Using multiple parameters at the same time is allowed
```

### How to Generate a Sitemap[¶](#how-to-generate-a-sitemap "Permanent link")

Magento 2 has a built in module for generating a sitemap and it's fast.

#### Enable sitemap[¶](#enable-sitemap "Permanent link")

Navigate to **Magento Admin > Stores > Settings > Configuration > Catalog > XML Sitemap** [![!](../images/m2-4.png)](https://docs.litespeedtech.com/lscache/litemage/images/m2-4.png)

Set **Generation Settings > Enabled** to `Yes` [![!](../images/m2-5.png)](https://docs.litespeedtech.com/lscache/litemage/images/m2-5.png)

#### Configuring a Single Sitemap for All Storefronts[¶](#configuring-a-single-sitemap-for-all-storefronts "Permanent link")

Navigate to **Magento Admin > Marketing > Seo & Search > Sitemap**

1. Click the **Add Sitemap** button
2. Enter values
   - **Filename**: `sitemap.xml`
   - **Path**: `/`
3. Click the **Save & Generate** button

[![!](../images/m2-2.png)](https://docs.litespeedtech.com/lscache/litemage/images/m2-2.png) If all went well, a `sitemap.xml` file will have been generated in your Magento 2 document root.

### Crawl Interval[¶](#crawl-interval "Permanent link")

How often do you want to re-initiate the crawling process? This depends on how long it takes to crawl your site and what you set for Public Cache TTL.

The default TTL is one day(24hr). Maybe, for example, you'd like to run the script by cronjob every 12 hours instead.

Example

```
This will run twice a day, at 3:30am/15:30: `30 3/15 * * * path_to_script/M2-crawler.sh SITE-MAP-URL -m -i 0.2`
```

Tip

```
You can also use an [online crontab tool](https://crontab.guru/) to help you to verify the time settings.
```

### Run Crawler After any Product Update on Magento 2[¶](#run-crawler-after-any-product-update-on-magento-2 "Permanent link")

In Magento 2, by design, all cached are purged upon any product updates. LiteMage doesn't have any control over this behavior. Therefore, you may find pages uncached even if you have set your crawl interval less than the site TTL. It doesn't mean LiteMage 2 doesn't work well or that the Crawler doesn't work well. It is simply a Magento 2 design matter.

To avoid the above situation, we would recommend you schedule a specific window of time to do any product changes through Magento admin. For example, two hours from 6:00pm to 8:00pm off-peak time. Then, run the crawler immediately after the change. With this workflow, the likelihood of users encountering uncached pages is kept to a minimum.

### How to Verify the Crawler is Working[¶](#how-to-verify-the-crawler-is-working "Permanent link")

When using [the browser developer tool](https://developers.google.com/web/tools/chrome-devtools/), load a previously uncached page. You should see `X-LiteSpeed-Cache: hit,litemage` on the first view.

[![!](../images/m2-3.png)](https://docs.litespeedtech.com/lscache/litemage/images/m2-3.png)
