# Guides: Performance | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/performance

---

Search Knowledge Base

# Performance Articles

- [Choosing a Cache Duration for Assets

  When configuring your asset storage in Craft, many remote filesystems provide a Cache Duration setting. By remote, we’re referring to adapters that push files to a different host, like Amazon S3 or Digital Ocean Spaces.](kb__choosing-a-cache-duration-for-assets.md "Choosing a Cache Duration for Assets")
- [Query Batching with Db::batch() + Db::each()

  When you need to work with a large data set, you run the risk of running into memory limit errors if you fetch all the data at once.
  To mitigate that risk, you can use query batching, which divides the data into batches, in theory limiting the amount of memory PHP is consuming.
  Yii provides two methods for executing a query in batches: yii\db\Query::batch() and yii\db\Query::each().
  However, MySQL connections are buffered by default, so they’ll still return all the data to PHP at once, mostly eliminating any benefit you’d expect from batching the query.](kb__query-batching-batch-each.md "Query Batching with Db::batch() + Db::each()")
- [How Much Content Can a Craft Site Have?

  People often ask how much content Craft CMS or Craft Commerce can handle with specific numbers in mind for entries, users, orders, assets, and other element types.
  Craft’s license doesn’t put any limitations on your content, but the number of elements it can support depends on how your site is built, optimized, and hosted.
  Craft CMS and Craft Commerce sites are in the wild, running smoothly with tens of millions of elements, and we’ve seen smaller sites struggle to keep up with modest amounts of traffic. The answer is usually “Yes, Craft can handle that,” but you should take care with a few things that maximize your site’s ability to handle a growing body of content:
  Mind your site count
  Every site you add to an installation is generally a multiplier for the number of queries that need to be executed. A site with complex information architecture may trigger 200 queries for a single site but could generate 800 queries for a four-site installation. Consider your content modeling and propagation along with however many sites you plan to use.
  Craft’s multi-site implementation is meant for a single Craft installation where each site shares some common content (entries, users, templates, etc.) with each other. It is not designed to manage completely independent sites with no relationship to each other under a single Craft installation.
  Craft’s multi-site implementation is not meant to be infinitely scalable. Craft 5 has a soft-limit of 100 sites in a multi-site installation. You probably shouldn’t get anywhere close to that, much less go over it.
  If you want to use Craft’s multi-site capabilities to sell “sites” to multiple clients, you’re probably using the wrong tool for the job.
  Infrastructure and resources
  Make sure you’ve got adequate infrastructure with enough resources for PHP, the database, Redis, and your traffic patterns.
  Utilize smart caching strategies
  The fastest requests are the ones where PHP and a database never get involved. If you can return cached content to a user, you should. Your caching strategies should balance how the site is built and deployed with how it needs to be used by each visitor.
  Tune database indexes
  Tune them specifically for your site’s needs and queries. Craft provides a reasonable set of indexes for the most common types of queries a site might use. On modestly sized sites, any missed opportunities for index tailoring will probably go unnoticed. Those same issues, however, will gradually be amplified as the size of the database grows.
  Be cautious with information architecture
  Content modeling complexity comes with more database queries. These queries may need more time to execute and closer attention to measure and optimize. A Plain Text field, for example, will be vastly more efficient than a Neo field inside a Super Table field in a Matrix field. Your site’s intended scale and resources should factor into content modeling design decisions.
  Eager load your data
  Eager load your data wherever possible to maximize database query efficiency.](kb__how-much-content-can-a-craft-site-have.md "How Much Content Can a Craft Site Have?")
- [Troubleshooting Performance Issues

  Website performance is influenced by many factors, including your environment, how you’ve built your site, and the type of traffic it receives.
  Craft is a web app; fine-tuning it is similar to any PHP-based, database-backed application. This article covers the main areas to investigate and points to further resources on modern web application performance.
  The Templates
  Craft is a flexible CMS that doesn’t put many constraints on your content architecture. Site developers have complete control over front-end HTML output. Because of this, Craft will do whatever your templates tell it to, which can be a common performance bottleneck.
  For example, if you’re executing a million queries or displaying a million entries simultaneously, you’ll need significant resources to handle the request. Similarly, generating many simultaneous image transforms will take time and resources.
  Frequently using the {{ svg() }} template function without caching its output could slow template rendering, especially if SVG files are loaded from remote Asset Volumes or URLs.
  You might want to start with common template performance “gotchas” to avoid with Craft:
  https://craftcms.stackexchange.com/questions/59/what-are-the-most-common-template-performance-gotchas-to-avoid
  If you’re running into the dreaded N+1 SQL database query problem in your templates, you should be taking advantage of Craft’s eager loading support.
  Craft’s {% cache %} template tag is another tool in your quest to tame the performance dragon.
  It’s also good to know when to use the cache tag and when not to: https://craftcms.com/docs/5.x/reference/twig/tags.html#when-to-use-cache-tags
  This article goes into depth about how the cache tag operates: https://nystudio107.com/blog/the-craft-cache-tag-in-depth
  To keep the cache tag happy, ensure you don’t have any failed queue jobs, either! https://craftcms.com/knowledge-base/resolving-failed-queue-jobs
  The Database
  In a poorly configured database server, database queries aren’t going to execute as fast as they could in an optimized environment. If your database is configured correctly but doesn’t have enough resources assigned to handle the load of your site (common in shared hosting environments), you can run into the same execution-time issues. If a web request generates a few hundred queries, the excess execution time slows the overall request.
  Your database server must be properly tuned and have the necessary resources to handle the SQL queries it receives.
  Enabling devMode will output a plethora of profiling and debugging information into Craft’s storage/logs folder. You can also use the Debug Toolbar to display additional browser debugging information.
  For example, you’ll see database profiling output for the request, including the number of queries executed, their execution times, and the SQL for those queries. These are sorted in ascending order, with the slowest-performing ones at the top.
  Try running one of Craft’s queries directly with a database client. If the response is still slow after bypassing Craft/PHP, you’ve narrowed the issue to database performance.
  Often, particularly with MySQL, you’ll want to ensure your character\_set and collation values are consistent across the database since you may have first installed Craft in an environment whose encoding defaults differ from production. Mismatched encodings and missing indexes, especially in larger tables, can be a significant contributor to slower database performance as the record count grows.](kb__troubleshooting-performance-issues.md "Troubleshooting Performance Issues")

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
