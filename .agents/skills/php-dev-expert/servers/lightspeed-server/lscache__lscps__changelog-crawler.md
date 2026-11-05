# Changelog | Crawler | LiteSpeed Cache for PrestaShop | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscps/changelog-crawler/

---

# LSCPS Crawler Script Changelog[¶](#lscps-crawler-script-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## Version 1.9.3[¶](#version-193 "Permanent link")

*Released: August 15, 2023*

- [Feature] Add support for the `-e, --escape` option.
- [Feature] Add support for the `-cc, --custom-cookie` option.
- [Improvement] Optimize the response-header filter function.

## Version 1.8.0[¶](#version-180 "Permanent link")

*Released: January 27, 2021*

- [Feature] Add support for the `-w, --webp` option.
- [Improvement] Add the `-g, --general-ua` option for mobile crawling.
- [Improvement] Add support for sitemap links with private SSL certificates.

## Version 1.7.4[¶](#version-174 "Permanent link")

*Released: September 8, 2020*

- [Improvement] Add support for caching the final URL after a `30x` redirect.
- [Improvement] Display the help message more clearly.

## Version 1.7.3[¶](#version-173 "Permanent link")

*Released: October 23, 2019*

- [Feature] Add support for a crawler result report.
- [Feature] The script now automatically aborts after 10 consecutive page errors or no-cache-detected issues.
- [Improvement] Add more status codes to error-code detection.
- [Improvement] Update the blacklist format to match the entire line.

## Version 1.7[¶](#version-17 "Permanent link")

*Released: June 25, 2019*

- [Feature] Add the ability to automatically add invalid pages to the blacklist and bypass them in future crawls.
- [Feature] Add debugging methods for URLs with crawling issues.
- [Improvement] Exclude the Cloudflare cookie from crawl output.
- [Improvement] Improve compatibility with a server behind LSADC and QUIC.cloud.
- [Improvement] Retrieve cookie information for the `-c, --with-cookie` option by using the first valid URL with a random query string.
- [Improvement] The cURL command now includes HTTP response headers in the output.
