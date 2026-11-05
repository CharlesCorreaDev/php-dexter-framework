# Crawler Script | PrestaShop | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscps/crawler/

---

# The LiteSpeed Cache Crawler Script[¶](#the-litespeed-cache-crawler-script "Permanent link")

## Cache Warmup[¶](#cache-warmup "Permanent link")

The crawler travels through your site, refreshing pages that have expired in the cache. This makes it less likely that your visitors will encounter un-cached pages.

### Before You Begin[¶](#before-you-begin "Permanent link")

1. Install and enable [LSCache for PrestaShop](lscache__lscps__installation.md)
2. Crawler Engin: The crawler must be enabled at the server level, or you will see the warning message `Server crawler engine not enabled. Please check....`. If you are using a shared hosting server, please contact your hosting provider, or see [our instructions](lscache__lscwp__admin.md#enabling-and-limiting-the-crawler).
3. SiteMap: Prepare your site's sitemap, e.g. `http://example.com/sitemap.xml`. You can use Google, SiteMap, or do it yourself. It doesn't matter how you generate a sitemap, just as long as it is an XML sitemap.

### How to Generate a Sitemap[¶](#how-to-generate-a-sitemap "Permanent link")

#### Google Sitemap Module[¶](#google-sitemap-module "Permanent link")

Google Sitemap Module is installed by default in both v1.6 and v1.7+.

Navigate to **Modules > Module Manager**, type the keyword `Google sitemap`, and click the **Configure** button. Check `Sitemap` and click the **GENERATE SITEMAP** button. You will see your main SITE-MAP-URL, and it should look something like `xxx/1_index_sitemap.xml`.

#### SiteMap Online Generator[¶](#sitemap-online-generator "Permanent link")

One of the popular sitemap generators is [XML-Sitemaps.com](https://www.xml-sitemaps.com/) After the crawl is finished. Click **DOWNLOAD YOUR XML SITEMAP FILE** and put it where the crawler script can access it.

[![!](../images/prestashop-6.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-6.png)

### How to Use the LSCache Crawler Script[¶](#how-to-use-the-lscache-crawler-script "Permanent link")

[Download from here](https://www.litespeedtech.com/packages/prestashop/cachecrawler.sh)

Change the permissions so that the file is executable: `chmod +x cachecrawler.sh`

To crawl when desktop & mobile share the same theme: `bash cachecrawler.sh SITE-MAP-URL`

TO crawl when desktop & mobile have different themes: `bash cachecrawler.sh SITE-MAP-URL -m`

By default, in the PrestaShop cache plugin, Mobile View is DISABLED. To enable mobile view, navigate to **PrestaShop Admin > LiteSpeed Cache > Configuration** and set **Separate Mobile View** to `Yes` [![!](../images/prestashop-8.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-8.png)

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

Example commands

```
- To get help: `bash cachecrawler.sh -h`
- To change default interval request from 0.1s to custom NUM value: `bash cachecrawler.sh SITE-MAP-URL -i NUM`
- To crawl with cookie set: `bash cachecrawler.sh -c SITE-MAP-URL`
- To store log in `/tmp/crawler.log`: `bash cachecrawler.sh -v SITE-MAP-URL`
- To debug one URL and output on screen: `bash cachecrawler.sh -d SITE-URL`
- To display total count of crawl result: `bash cachecrawler.sh -r SITE-MAP-URL`
```

Tip

```
Using multiple parameters at the same time is allowed
```

### Crawl Interval[¶](#crawl-interval "Permanent link")

How often do you want to re-initiate the crawling process? This depends on how long it takes to crawl your site and what you have set for Public Cache TTL. Default TTL is one day (24 hours). You might consider running the script by cronjob every 12 hours. E.g. This will run twice a day, at 3:30/15:30: `30 3/15 * * * path_to_script/cachecrawler.sh SITE-MAP-URL -m -i 0.2`

Tip

```
You can use an [online crontab tool](https://crontab.guru/) help you to verify time settings.
```

### How to Verify the Crawler is Working[¶](#how-to-verify-the-crawler-is-working "Permanent link")

Use [the browser developer tool](https://developers.google.com/web/tools/chrome-devtools/), to look for the `X-LiteSpeed-Cache: hit` header on the first page view for both desktop and Mobile. If the page has been crawled, it will be a hit.

Desktop view

[![!](../images/prestashop-4.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-4.png)

Mobile view

[![!](../images/prestashop-7.png)](https://docs.litespeedtech.com/lscache/lscps/images/prestashop-7.png)
