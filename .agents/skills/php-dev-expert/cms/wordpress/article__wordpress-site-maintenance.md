# WordPress site maintenance – Documentation

> **Fonte / Source:** https://wordpress.org/documentation/article/wordpress-site-maintenance/

---

# WordPress site maintenance

## In this article

Table of Contents

- [Getting a WordPress Tune Up](#getting-a-wordpress-tune-up)
- [Update WordPress](#update-wordpress)
- [Check for Dead Links](#check-for-dead-links)
- [Check In With WordPress](#check-in-with-wordpress)
- [Delete Spam Comments](#delete-spam-comments)
- [Back It Up](#back-it-up)
- [Update Your Site](#update-your-site)
- [Validate Again](#validate-again)
- [Other Maintenance Tasks](#other-maintenance-tasks)
  - [Site Maintenance Calendar](#site-maintenance-calendar)

[Back to top](#wp--skip-link--target)

**Important:** Please note that this is not a support page. If you seek help with your specific problem, please refer to the [Support forums](https://wordpress.org/support/welcome/).

## [Getting a WordPress Tune Up](#getting-a-wordpress-tune-up)

To keep WordPress working healthy, there is some site maintenance we recommend you do frequently.

Begin by creating a calendar of WordPress Maintenance procedures to remind yourself to get a maintenance job on your WordPress site on a regular basis.

In the article on [WordPress Housekeeping](https://wordpress.org/support/article/wordpress-housekeeping/), tips and resources are given to clean house in WordPress. These include cleaning out old plugins, upgrading WordPress, and other helpful tips for cleaning up and optimizing your WordPress Site.

To ensure you keep your WordPress site up-to-date and working in prime condition, consider adding these Housekeeping steps to your calendar, typically every three to six months.

## [Update WordPress](#update-wordpress)

WordPress is quickly growing and expanding as more features and functions are included and perfected. It is recommended that you check in with WordPress for updates and upgrades at least every three months, six months at the most. Check [WordPress org](https://wordpress.org/) and [Download WordPress](https://wordpress.org/download/) for information on the latest version available.

**Note:** For WordPress 3.7+, minor and security updates are automatically applied in the background process.

## [Check for Dead Links](#check-for-dead-links)

One of the most complained about aspect of using the Internet is the *dead link*. This is a link on a page or search engine that goes nowhere. It results in the 4**04 Page Error – Page Not Found**. These can come from links to external sites that have changed their address or closed, or it can come from internal links. When you [link between posts](https://codex.wordpress.org/Linking_Posts_Pages_and_Categories) in your post articles, you might have misspelled a [permalink address](https://wordpress.org/support/article/using-permalinks/) or put in the wrong post-ID, resulting in a **page not found** on your site. If you’ve recently made a change in your permalink structure, you might have some **404 page errors** that might need cleaning up.

Add to your WordPress maintenance list regularly scheduled visits to your site’s statistic logs to check on reports of **404 errors** on your site, and take time to run a links check on your external, and internal, links to make sure everything is still connected. Dependent upon the site and number of links on your site, you should check your site for dead links every six months to a year.

- [W3C free check link free utility](http://validator.w3.org/checklink)
- [AnyBrowser’s Link Checker](http://www.anybrowser.com/linkchecker.html)
- [HTMLHelp Valet Link Checker](http://www.htmlhelp.com/tools/valet/)
- [Squarefree’s Bookmarklets – javascripts for checking links](http://www.squarefree.com/bookmarklets/pagelinks.html)
- [KeepNI’s link check (14 day evaluation, $299.00 US)](http://tools.keepni.com/)

## [Check In With WordPress](#check-in-with-wordpress)

The WordPress [Dashboard](https://wordpress.org/support/article/administration-screens/#dashboard-information-central), part of the [Administration Screens](https://wordpress.org/support/article/administration-screens/), help to keep you up-to-date on the WordPress Community and activities, but check the [WordPress](https://wordpress.org/) website to find out if there have been any upgrades, news, events, or information you may need to know as a WordPress user.

If you aren’t an active participant in the [WordPress Forums](https://wordpress.org/support/forums), check in once in a while to see what is going on and what topics are being discussed. There might be a topic that might interest you or news you should know.

Also visit the [WordPress Documentation](https://wordpress.org/support) here to find out if there is new documentation, events, information, or resources that will help you better run and manage your WordPress site.

## [Delete Spam Comments](#delete-spam-comments)

If you are using one of the many different Comment Spam WordPress Plugins with your WordPress blog, spam can collect in your database. Comment spam is stored in the database as a “just in case” so you can restore a comment incorrectly marked at comment spam. It also serves as a resource to track down recurrent comment spammers, if you need to.

In general, while some plugins will delete comment spam from your database after a specific period of time, not all do. These entries are dead-weight and unnecessary, and they can accumulate. To delete all current comment spam entries run this query on your WordPress database with [phpMyAdmin](https://wordpress.org/support/article/phpmyadmin/) in the SQL page:

```
DELETE FROM wp_comments WHERE comment_approved = 'spam'
```

## [Back It Up](#back-it-up)

Make it a part of your regularly scheduled maintenance to backup your WordPress site, both on the website host server and on your computer. For detailed information see [WordPress Backups](https://wordpress.org/support/article/wordpress-backups/). Consider scheduling this, depending upon the volume of new posts or articles you add to your site, three to twelve times a year.

[Backing Up Your Database](https://wordpress.org/support/article/backing-up-your-database/) describes how to save a backup copy of your database tables that contain all your blog data, and [Restoring Your Database From Backup](https://wordpress.org/support/article/restoring-your-database-from-backup/) guides you through the process of restoring data using one of your backups should you ever have to do so.

## [Update Your Site](#update-your-site)

If you haven’t been adding posts or articles lately, make a schedule to remind you to add new material on a regular basis. If you have, then take a look at what you’ve posted in the past and maybe do a little checking for proper grammar, bad spelling, information that needs updating, rewriting and editing a little, checking for any adjustments that should be made to make the information you’ve released to the public better.

Website looks change with time and maybe you are tired of your old look. It might need a little tweaking to improve its presentation and performance, or maybe it’s time for a new [WordPress Theme](https://wordpress.org/support/article/using-themes/).

Schedule site updates, depending upon how frequently you post new posts and articles, about every six months so your site will stay fresh and alive.

## [Validate Again](#validate-again)

Make it a website maintenance policy to [validate your site](https://codex.wordpress.org/Validation) after making any code or style sheet changes. This way, you can keep on top of guaranteeing users won’t run into problems and trouble that might be brewing under the surface.

You can also regularly schedule validation tests on your site to keep it in top working condition and keep up with any changes or deprecations of the [CSS](https://codex.wordpress.org/CSS) and HTML standards. Typically, this should be done about once a year or when you make significant modifications to your site.

## [Other Maintenance Tasks](#other-maintenance-tasks)

For the serious blogger or website administrator, there are some site maintenance tasks you should do to keep up with your site based on site statistics data so that it improves hit ratio from search engine. Here are some suggestions to keep your site in top shape.

- Check Your Website Statistics : Who is visiting, where they are visiting from, which pages are the most visited…check in regularly with your website statistics to find out where the action is on your site, where the dead links are, and where users are coming from. This information can help you better fine tune your site to meet the needs of your users and increase your web visibility. You should check site statistics at least monthly if you have an active site.
- Check Your Linkability : There are many *link popularity* tools on the Internet that will check to see who is linking to you. This is part of the puzzle that search engines use to rank your site. Dependent upon your site’s activity and need to grow in search engine rankings, this should be done monthly, or at least three times a year.
- Site Submissions : If you have a desire to make your site rise in search engine rankings, regularly schedule activity surrounding your site’s submissions to search engines and attracting new users. Take care to limit your submissions to the same search engine too frequently, as that can penalize you, but check in with your site submissions once or twice a year at a minimum.
- Update Advertising : If you have included advertising in your site, check with your advertisers on a regular basis to make sure they haven’t changed their techniques, pricing, and process. Dependent upon site activity, this could be as often as once a month or several times a year.

### [Site Maintenance Calendar](#site-maintenance-calendar)

We’ve put together a sample calendar for your site maintenance to help you schedule time to keep your WordPress site tuned up and running smoothly.

|  |  |
| --- | --- |
| January | Upgrade or Update WordPress Check in with WordPress Add New Content |
| February | Add New Content Check for new Plugins Clean out Plugins Backup Database and Site Check Site Statistics Check Site’s Link Popularity and Search Engine Ranking |
| March | Clean up and/or Try New Theme Check in with WordPress Add New Content |
| April | Clean Out Graphics and Photographs Add New Content Backup Database and Site Check Site Statistics Submit Site to Search Engines |
| May | Check for Dead Links Check in with WordPress Add New Content |
| June | Backup Database and Site Add New Content Check Site Statistics Check Site’s Link Popularity and Search Engine Ranking Check Advertising |
| July | Upgrade or Update WordPress Check in with WordPress Add New Content |
| August | Check for New Plugins Clean Out Old Plugins Backup Database and Site Add New Content Check Site Statistics |
| September | Clean or Renew Themes Check in with WordPress Add New Content Submit Site to Search Engines Check Advertising |
| October | Backup Database and Site Validate Web Pages and CSS Optimize Web Pages and CSS Add New Content Check Site Statistics |
| November | Check in with WordPress Add New Content Check Site’s Link Popularity and Search Engine Ranking |
| December | Backup Database and Site Check Site Statistics Add New Content Check Advertising |

**Important:** Please note that this is not a support page. If you seek help with your specific problem, please refer to the [Support forums](https://wordpress.org/support/welcome/).

## Was this article helpful? How could it be improved? [Cancel reply](article__wordpress-site-maintenance.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fwordpress-site-maintenance%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 17, 2019

Last updated

June 9, 2024
