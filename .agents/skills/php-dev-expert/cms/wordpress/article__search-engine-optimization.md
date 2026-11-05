# Search Engine Optimization – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/search-engine-optimization/

---

# Search Engine Optimization

## In this article

Table of Contents

- [Get the Blog Indexed in Google Search](#get-the-blog-indexed-in-google-search)
- [Search Engine Site Submissions](#search-engine-site-submissions)
- [Search Engine Optimization Resources](#search-engine-optimization-resources)
  - [Meta Tags](#meta-tags)
  - [Robots.txt Optimization](#robots-txt-optimization)
  - [Feed Submissions](#feed-submissions)
  - [Permalinks](#permalinks)
  - [Sitemaps](#sitemaps)
  - [Google Sitemaps](#google-sitemaps)
  - [Link Relationships](#link-relationships)

[Back to top](#wp--skip-link--target)

WordPress, straight out of the box, comes ready to embrace search engines. Its features and functions guide a search engine through the posts, pages, and categories to help the search engine crawl your site and gather the information it needs to include your site within its database.

WordPress comes with several built in search optimization tools, including the ability to use [.htaccess](https://wordpress.org/support/article/glossary#htaccess) to create apparently static [URLs](https://wordpress.org/support/article/glossary/#url) called [permalinks](https://wordpress.org/support/article/using-permalinks/), [blogrolling](https://wordpress.org/support/article/glossary/#blogroll), and [pinging](https://wordpress.org/support/article/glossary/#pingback). There are also a number of third party [plugins](https://wordpress.org/support/article/plugins/) and hacks which can be used for search engine optimization (SEO).

However, once you start using various [WordPress Themes](https://wordpress.org/support/article/using-themes/) and [customizing WordPress](https://codex.wordpress.org/Blog_Design_and_Layout) to meet your own needs, you may break some of those useful search engine friendly features. To maintain your WordPress site’s optimal friendliness towards search engine spiders and crawlers, here are a few tips:

**Good, Clean Code**

Make sure your site’s code [validates](https://codex.wordpress.org/Validating_a_Website). Errors in your code may prevent a search engine from moving through the site successfully.

**Content Talks**

Search engines can’t “see” a site. They can only “read” a site. Looks do not talk to a search engine. What “talks” to a search engine are the words, the content, the material in your site that explains, shares, informs, educates, and babbles. Make sure you have quality **word** content for a search engine to examine and compare with all the parts and pieces to give you a good “score”.

**Write Your Content with Searchers in Mind**

How do you find information on the Internet? If you are writing something that you want to be “found” on the Internet, think about the words and phrases someone would use to find your information. Use them more than once as you write, but not in every sentence. Learn how search engines scan your content, evaluate it, and categorize it so you can help yourself get in good favor with search engines.

**Content First**

A search engine enters your site and, for the most part, ignores the styles and [CSS](https://codex.wordpress.org/CSS). It just plows through the site gathering content and information. Most WordPress Themes are designed with the content as close to the top of the unstyled page as possible, keeping sidebars and footers towards the bottom. Few search engines scan more than the first third of the page before moving on. Make sure your Theme puts the content near the top.

**Keywords, Links, and Titles Meet Content**

Search engines do not evaluate your site on how pretty it is, but they do evaluate the words and put them through a sifter, giving credit to certain words and combinations of words. Words found within your document are compared to words found within your links and titles. The more that match, the better your “score.”

**Content in Links and Images**

Your site may not have much text, mostly photographs and links, but you have places in which to add textual content. Search engines look for `alt` and `title` in link and image tags. While these have a bigger purpose of making your site more accessible, having good descriptions and words in these attributes helps provide more content for search engines to digest.

**Link Popularity**

It is not how good your site is, it is how good the sites are that link to you. This still holds weight with search engine favoritism. It’s about who links to you. [Blogrolls](https://wordpress.org/support/article/glossary/#blogroll), [pingbacks](https://wordpress.org/support/article/glossary/#pingback), and [trackbacks](https://wordpress.org/support/article/glossary/#trackback) are all built into WordPress. These help you link to other people, which gives them credit, but it also helps them link to you, connecting the “links.” The number of incoming links your site has that have been recognized by Google can be checked by typing `link:www.yoursite.com` into Google (other search engines have similar functions). Other ways to generate incoming links to your site include:

- Add your site’s url to your signature on forum posts on other sites.
- Submit your site to directories (see below).
- Note: Leaving comments on blogs will not help with this, since all modern blogging tools use the [rel=”nofollow”](https://codex.wordpress.org/Nofollow) attribute. Don’t be a [comment spammer](article__understand-comment-spam.md).

**Good Navigation Links**

A search engine crawls through your site, moving from page to page. [Good navigational links](https://codex.wordpress.org/Good_Navigation_Links) to the categories, archives, and various pages on your site will invite a search engine to move gracefully from one page to another, following the connecting links and visiting most of your site.

## [Get the Blog Indexed in Google Search](#get-the-blog-indexed-in-google-search)

Before getting to the details on how you can get Google to recognize you, we need to first understand these three terms:

- The Googlebot: This is the software used to search that is used by Google to gather new information that has been uploaded online so that it can be fed on Google pages. Once information that you had uploaded is picked up by this software, then it can be found on Google pages.
- Crawling: This is the process where the above named software, Googlebot, roams from site to site detecting any new information to be uploaded on Google. This software works by going through new links that have been uploaded recently and which are generating a lot of traffic.
- Indexing: Once the information has been gathered by the Googlebot through the process called crawling, it is processed through another process called indexing. It is through this process that the quality of content is determined so that they can be placed appropriately on Google pages. The question now is, how exactly does Googlebot find this information? Firstly, it starts by siting the web pages that it had cited in the previous search. It then detects new pages associated with those old ones or just new ones all together. More details on the same would be found on Search Console help for those who are interested in the same. Any new information is cited with the help of sitemaps and links that lead to those articles.

## [Search Engine Site Submissions](#search-engine-site-submissions)

There are many resources that will “help” you submit your site to search engines. Some are free, some for a fee. Or you can manually submit your site to search engines yourself. Whatever method you choose to use, once your site has been [checked for errors](https://codex.wordpress.org/Validating_a_Website) and is ready to go, search engines will welcome your WordPress site.

Here are some tips for successful site submissions:

- Make sure you have content for search engines to scan. In general, have more than 10 posts on your site to give the search engines something to examine and evaluate.
- Do not submit your site to the same search engine more than once a month or longer, depending upon their criteria, not your anxiousness to be listed.
- Have ready to type, or copy and paste, the title of the site, and the categories your site may belong to in a search engine directory.
- Have a list of your website’s various “addresses/URLs” ready. You can submit your root directory as well as specific categories and feeds to search engines, expanding your search engine coverage.
- Keep a list of the various search engines and directories you submit to so you do not accidentally resubmit too soon, and you can keep track of how they include you among their pages and results.

**Directory Sites**

It is also useful for traffic generation and search optimization purposes to submit your site to directories. Both comprehensive directory sites and those specific to the subject or localisation of your site can be used.

## [Search Engine Optimization Resources](#search-engine-optimization-resources)

While WordPress comes ready for search engines, the following are more resources and information you may want to know about preparing and maintaining your site for search engines’ robots and crawlers.

### [Meta Tags](#meta-tags)

[Meta Tags](https://codex.wordpress.org/Meta_Tags_in_WordPress) contain information that describes your site’s purpose, description, and keywords used within your site. The meta tags are stored within the `head` of your `header.php` template file. By default, they are not included in WordPress, but you can manually include them and the article on [Meta Tags in WordPress](https://codex.wordpress.org/Meta_Tags_in_WordPress) takes you through the process of adding meta tags to your WordPress site.

The WordPress [Custom Fields](article__assign-custom-fields.md) option can also be used to include keywords and descriptions for [posts](article__write-posts-classic-editor.md) and [Pages](article__create-pages.md). There are also several WordPress Plugins that can also help you to add meta tags and keyword descriptions to your site found within the [Official WordPress Plugin Directory](https://wordpress.org/plugins/).

### [Robots.txt Optimization](#robots-txt-optimization)

Search Engines read a file at `yourdomain.com/robots.txt` to get information on what they should and shouldn’t check.

Adding entries to robots.txt to help SEO is popular misconception. Google says you are welcome to use robots.txt to block parts of your site but these days prefers you don’t. Use page-level noindex tags instead, to tackle low-quality parts of your site. Since 2009, Google has been evermore vocal in its advice to avoid blocking JS & CSS files, and Google’s Search Quality Team has been evermore active in promoting a policy of transparency by webmasters, to help Google verify we’re not “cloaking” or linking to unsightly spam on blocked pages. Therefore the ideal robots file disallows nothing whatsoever, and may link to an XML Sitemap if an accurate one has been constructed (which itself is rare though!).

WordPress by default only blocks a couple of JS files but is nearly compliant with Google’s guidance here.

#### [See also:](#see-also)

- [How Google Crawls My Site](https://developers.google.com/search/docs/fundamentals/how-search-works)
- [How do I use a robots.txt file to control access to my site?](https://developers.google.com/search/docs/crawling-indexing/robots/intro)
- [WordPress Robots.txt example and explanation from Yoast](https://yoast.com/wordpress-robots-txt-example/)
- [Using robots.txt for SEO](https://www.askapache.com/seo/seo-with-robotstxt/)
- [Removing duplicate search engine content using robots.txt](https://www.markwilson.co.uk/blog/2007/04/removing-duplicate-search-engine-content-using-robotstxt.htm)
- [wikipedia – Robots.txt](https://en.wikipedia.org/wiki/Robots.txt)

### [Feed Submissions](#feed-submissions)

WordPress comes built-in with various [feeds](https://developer.wordpress.org/advanced-administration/wordpress/feeds/), allowing your site to be viewed by various feed readers. Many search engines are now accepting feed submissions, and there are many site which specialize in directories of feeds and feed services.

To submit your site’s feeds, you need to know the link to the various feeds your site provides. The article [WordPress Feeds](https://developer.wordpress.org/advanced-administration/wordpress/feeds/) lists the various links of the feeds that come built into WordPress.

For information on customizing these links, see the article on [Customizing Feeds](https://codex.wordpress.org/Customizing_Feeds).

### [Permalinks](#permalinks)

[Permalinks](article__customize-permalinks.md) are enhancements to your existing URLs, which can improve search engine optimization by presenting your post, page, and archive URLs as something like `<nowiki>http://example.com/2003/05/23/my-cheese-sandwich/</nowiki>` rather than `<nowiki>http://example.com/index.php?p=423</nowiki>`. See [Using Permalinks](article__customize-permalinks.md) for more information.

As search engines use links and the `title` as part of their information gathering, links to posts and articles within your site gain importance with Permalinks.

### [Sitemaps](#sitemaps)

A *sitemap* or “site map” is a single page listing of all the posts on your website. It is intended for your visitors to get a good overview on what your site is about and to find a blog post quickly but it also has great benefits in the search engines as a good link is always pointing to all your blog posts. By having a link to your sitemap on all your sites pages both visitors and search engines will easily get to it and find all your posts.

### [Google Sitemaps](#google-sitemaps)

As of June 2005, Google is now accepting **sitemaps** of your site as part of their website submissions. Google needs to have this sitemap formatted in a special way using XML. You can find more information about [Google’s Sitemap Submissions](https://search.google.com/search-console/welcome) from Google, and the discussion on the [WordPress Forum](https://wordpress.org/support/forums) about [WordPress and Google Site maps](https://wordpress.org/support/topic/google-sitemap/).

Some utilities have been created to help the WordPress user to create a Google site map of their site for submission to Google. For more information on these and Google sitemaps:

- [Inside Google Sitemaps (Official Google Blog)](https://developers.googleblog.com/en/google-sitemaps-launches/)

### [Link Relationships](#link-relationships)

There is some debate over whether listing the link relations actually effect search engine ranking however it is simple to implement.

- [World Wide Web Consortium (W3C)](https://www.w3.org/TR/REC-html40/struct/links.html#h-12.1.2)

## Was this article helpful? How could it be improved? [Cancel reply](article__search-engine-optimization.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fsearch-engine-optimization%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

November 2, 2018

Last updated

May 12, 2026
