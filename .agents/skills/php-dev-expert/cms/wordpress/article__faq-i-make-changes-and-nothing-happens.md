# FAQ I make changes and nothing happens – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/faq-i-make-changes-and-nothing-happens/

---

# FAQ I make changes and nothing happens

## In this article

Table of Contents

- [The Browser Cache](#the-browser-cache)
  - [Clearing the Browser Cache](#clearing-the-browser-cache)
- [Server-side Caching](#server-side-caching)
- [A WordPress Cache Plugin](#a-wordpress-cache-plugin)
- [Check Your Source](#check-your-source)
  - [Check the Address](#check-the-address)
  - [Check the Template](#check-the-template)
  - [Check Your Upload](#check-your-upload)
  - [Test Yourself](#test-yourself)

[Back to top](#wp--skip-link--target)

**Important:** Please note that this is not a support page. If you seek help with your specific problem, please refer to the [Support forums](https://wordpress.org/support/welcome/).

After you make a few changes in your WordPress content or your design, you may notice that nothing has changed.

A number of common factors can cause this behavior, such as: browser caching, server-side caching, caching plugins, and making changes in the incorrect location in the file system.

## [The Browser Cache](#the-browser-cache)

Sometimes when you first visit a web page, it takes a while to load. But then the next page you visit within that site doesn’t take quite so long. This is because – in an effort to be helpful – your web browser stores the web page information on your computer. In the future, the web browser reloads the web page data from your computer, not from the actual site. The place where this web page data is stored is called the **cache**. The cache is an essential way to optimize your web browsing experience.

Sometimes a problem can arise when you make a small change to your site, and the browser doesn’t recognize it as a significant change. Since the browser hasn’t registered your adjustment as an actual change, it opts to reload the exact same page that you previously looked at. The solution in this case is to clear or empty your **browser’s cache**.

### [Clearing the Browser Cache](#clearing-the-browser-cache)

Normally, to see the changes on your page, you click the **Refresh** button on the browser toolbar or press the F5 key on your keyboard. In many cases, this simply reloads the page without clearing the browser’s cache. Here are some techniques to wipe clean the browser’s cache, so that you will see the changes when your page reloads.

The way you clear the browser cache depends on the particular browser you are using. Here is how you clear the cache on a few common browsers:

- **Chrome** – [How to delete your Chrome cache, history, and other browser data](https://support.google.com/chrome/answer/95582?hl=en)
- **Safari** – [Clear your browsing history in Safari on Mac](https://support.apple.com/guide/safari/clear-your-browsing-history-sfri47acf5d6/12.0/mac/10.14)
- **Firefox** – [How to clear the F](https://support.mozilla.org/en-US/kb/how-clear-firefox-cache)i[refox cache](https://support.mozilla.org/en-US/kb/how-clear-firefox-cache)
- **Internet Explorer** – [How to delete the contents of the Temporary Internet Files folder](https://support.microsoft.com/en-us/help/260897/how-to-delete-the-contents-of-the-temporary-internet-files-folder)
- **Microsoft Edge** – [View and delete browser history in Microsoft Edge](https://support.microsoft.com/en-us/microsoft-edge/view-and-delete-browser-history-in-microsoft-edge-00cf7943-a9e1-975a-a33d-ac10ce454ca4)
- **Opera** – [How to clear the Opera cache](http://help.opera.com/Windows/12.10/en/cache.html)

In addition to clearing the cache, each browser may have a way of stopping or minimizing the caching of web pages. Using this technique will definitely slow down your web page viewing, and it isn’t a perfect solution, because some caching may still occur. However, in a small way it does still help. Check your internet browser’s help files for specifics on how to turn off the cache feature.

## [Server-side Caching](#server-side-caching)

Be aware that some web hosting services use caching plugins on the backend without letting the user know explicitly. You may be able to turn this off via your webhost’s configuration panel. Just to be sure, you can ask a webhost support member if any caching plugins are used, and request to have them turned off if needed.

This situation may also occur if you are using a managed WordPress hosting plan. Many managed WordPress hosting plans use server-side caching. If you are using a managed WordPress service from your hosting provider and you are seeing this issue, you may want to see if they have an option to manually flush the cache. In many cases, your changes will immediately show up after flushing the cache.

If you are using a caching HTTP reverse proxy such as Varnish on your web server, edits to your files may not appear right away. Edits may become visible after some length of time when the cached version expires. You many need to tune your caching system in order to eliminate this issue.

## [A WordPress Cache Plugin](#a-wordpress-cache-plugin)

Some WordPress plugins also add cache functionality to your WordPress site. This helps your site load faster, because WordPress can retrieve the pages of your blog from the cache instead of generating them all over again.

Any good cache plugin will clear the cache when a post, page, or comment is published. However, if you make other changes (e.g. to your theme), the cache may not be cleared and the old version will still appear. In this case, check the plugin’s instructions to find out how to clear its cache.

Note that WordPress does *not* come with a cache by default, so the above would only apply if you installed a cache plugin yourself.

## [Check Your Source](#check-your-source)

Sometimes even the very best web page designers, developers, and programmers make a mistake. It’s the little details that can mess things up. Let’s look at some of the most commonly overlooked details that happen when you aren’t paying attention.

### [Check the Address](#check-the-address)

Is the name and folder for the file you “fixed” the same as the one you are viewing? Look at the following two addresses (URLs).

- wordpress/wp-content/themes/yourtheme/style.css
- test/wordpress/wp-content/themes/yourtheme/style.css

In this case, you can probably see the difference, but when viewed in an address bar or in a text editor, you might miss the word test that specifies a specific folder location.

Pay very close attention to the difference between style1.css and stylel.css if you are using different style names, too. The first filename is style followed by the digit one, while the second filename is style followed by a lowercase L. If you are working with different but similar files, make sure you give them distinctive names like style-red.css and style-800.css so you can clearly see the difference.

### [Check the Template](#check-the-template)

If you’re editing a template, are you sure that the page you’re viewing is being generated from that template? Remember that many templates contain very similar text. For example, a post header may appear on a single post page, an index page, a search page, or an archive page, to name a few.

See [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/) if you’re having trouble figuring out which template is in use.

### [Check Your Upload](#check-your-upload)

When you make a change to a file, it is often on your computer’s hard drive, and you have to upload the file to your host server in order to view it on the internet. Did you actually upload it? Did you put it in the right folder? Is it really there? When overwriting the exact same file, it doesn’t always do a complete overwrite, so consider deleting the original from the host server and then uploading a new version, to make sure that the correct file is there in its entirety.

### [Test Yourself](#test-yourself)

Let’s say that:   
a) You’re working with the correct file, and   
b) It’s in the right place with the right name, but you still can’t see the changes you’ve made.

At this point, it’s time to complete the following steps:

1. Make a backup of the file you are working on and check that the backup is in a safe place.
2. Make a big change (such as setting the background in your style.css as #ff0000 or even red).
3. View the changed web page in your browser. Make sure you clear the cache, to be sure you have the new version.
4. If nothing changes, delete the file (and only that file) from the server and try to view the file again. If nothing continues to change, you and WordPress are looking at completely different files. It’s time to get out your detective hat and start figuring out what is happening and where your files went.
5. Check your URL settings in your options panel and also in the database. If this issue still continues to be unsolvable, make a post about it on the [WordPress Forum](https://wordpress.org/support/forums/), and let the experts step in to help.

## Was this article helpful? How could it be improved? [Cancel reply](article__faq-i-make-changes-and-nothing-happens.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Ffaq-i-make-changes-and-nothing-happens%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

March 11, 2019

Last updated

August 7, 2024
