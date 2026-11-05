# Configuration | LiteSpeed Cache for MediaWiki | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscmw/settings/

---

# Configuration[¶](#configuration "Permanent link")

[![!](../images/mediawikicache2.png)](https://docs.litespeedtech.com/lscache/lscmw/images/mediawikicache2.png)

## LiteSpeed Public Cache Enabled[¶](#litespeed-public-cache-enabled "Permanent link")

Check to turn on the LSCache plugin, uncheck to turn it off.

## Public Cache TTL[¶](#public-cache-ttl "Permanent link")

This value determines the number of seconds the pages on your MediaWiki site can remain in cache before they are considered out-of-date. Default is the equivalent of 24 hours.

## Private Cache Enabled[¶](#private-cache-enabled "Permanent link")

With this option checked, pages may be stored in private cache for logged-in users, which means that you can cache pages with personalized content. This feature is a beta feature. Please [contact the support team](lscache__lscmw.md#additional-support) to report any issues.

## Private Cache TTL[¶](#private-cache-ttl "Permanent link")

This is the same as **Public Cache TTL**, but is for private cache objects. It defaults to two hours.

## Cache Logging Enabled[¶](#cache-logging-enabled "Permanent link")

Keep this setting unchecked most of the time, as constant logging can fill up your disk space. Enable it when you are trying to debug an issue.

## Purge All Cache[¶](#purge-all-cache "Permanent link")

It is not necessary to purge the cache under normal everyday usage. Content can be added and edited in your wiki and LSCache will purge the impacted pages automatically.

If, however, you are upgrading your website, changing the site theme and/or logo, adding a new extension, etc, you will want to purge the whole cache then. Use this button to do so.

## Clear All Log[¶](#clear-all-log "Permanent link")

If you had **Cache Logging Enabled** checked, you will want to delete the log when you are finished with it. Press this button to clear all entries from the cache log.
