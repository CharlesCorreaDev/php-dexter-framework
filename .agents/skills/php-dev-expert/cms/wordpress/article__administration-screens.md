# Administration Screens – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/administration-screens/

---

# Administration Screens

## In this article

Table of Contents

- [Common Layout](#common-layout)
- [Toolbar – Keeping It All Together](#toolbar-keeping-it-all-together)
  - [About WordPress](#about-wordpress)
  - [Visit Site link](#visit-site-link)
  - [Howdy, User](#howdy-user)
  - [Screen Options](#screen-options)
  - [Help](#help)
- [Dashboard – Information Central](#dashboard-information-central)
  - [Dashboard](#dashboard)
  - [Updates](#updates)
- [Posts – Make some content](#posts-make-some-content)
  - [All Posts](#all-posts)
  - [Add New Post](#add-new-post)
  - [Categories](#categories)
  - [Tags](#tags)
- [Media – Add pictures and movies to your posts](#media-add-pictures-and-movies-to-your-posts)
  - [Library](#library)
  - [Add New Media](#add-new-media)
  - [Edit Media](#edit-media)
- [Pages – Your Static Content](#pages-your-static-content)
  - [All Pages](#all-pages)
  - [Add New Page](#add-new-page)
- [Comments – Reader Feedback](#comments-reader-feedback)
- [Appearance – Change the Look of your Blog](#appearance-change-the-look-of-your-blog)
  - [Themes](#themes)
  - [Customize](#customize)
  - [Widgets](#widgets)
  - [Menus](#menus)
  - [Header](#header)
- [Plugins – Add Functionality to your Blog](#plugins-add-functionality-to-your-blog)
  - [Installed Plugins](#installed-plugins)
  - [Add New Plugins](#add-new-plugins)
  - [Plugin File Editor](#plugin-file-editor)
- [Users – Your Blogging Family](#users-your-blogging-family)
  - [All Users](#all-users)
  - [Add New User](#add-new-user)
  - [Your Profile](#your-profile)
- [Tools – Managing your Blog](#tools-managing-your-blog)
  - [Available Tools](#available-tools)
  - [Import](#import)
  - [Export](#export)
  - [Site Health](#site-health)
- [Settings – Configuration Settings](#settings-configuration-settings)
  - [General](#general)
  - [Writing](#writing)
  - [Reading](#reading)
  - [Discussion](#discussion)
  - [Media](#media)
  - [Permalinks](#permalinks)

[Back to top](#wp--skip-link--target)

The Administration Screen provides access to the control features of your WordPress installation.

## [Common Layout](#common-layout)

Each Administration Screen is presented in sections: the toolbar (and header), the main navigation, the work area, and the footer.

![](https://wordpress.org/documentation/files/2018/10/administrations_screen_4.9.4_with_note.jpg)

Administration Screen

**Toolbar** has links to various administration functions and is displayed at the top of each Administration Screen. Many Toolbar items expand (flyout) when hovered over to display more information.

The **Main Navigation** menu details each of the administrative functions you can perform. At the bottom of that section is a Collapse menu button that shrinks the menu into a set of icons or expands it to list the major functions. Within each major function, such as Posts, the submenu expands when hovered over and remains open when an item is selected.

In the **work area**, the specific information relating to a particular navigation choice, such as adding a new post, is presented and collected.

The **Footer**, shown at the bottom of each Administration Screen, includes a link to [WordPress.org](https://wordpress.org/) and displays the installed WordPress **version**.

## [Toolbar – Keeping It All Together](#toolbar-keeping-it-all-together)

The Toolbar contains links to information about WordPress, as well as quick-links to create new posts, pages and links, add new plugins and users, review comments, and alerts about available updates to plugins and themes on your site.

**Tips**: To hide the Toolbar, go to Administration Screens > Users > Your Profile, and turn off “Show Toolbar when viewing site” of the Toolbar option.

### [About WordPress](#about-wordpress)

At the left-most side of the Toolbar is a WordPress logo. Hover over the WordPress logo to see links to [About WordPress](https://wordpress.org/about/), [WordPress.org](https://wordpress.org/), [Documentation](https://wordpress.org/support), [Support](https://wordpress.org/support), and [Feedback](https://wordpress.org/support/forum/requests-and-feedback).

![WordPress About Menu](https://wordpress.org/documentation/files/2018/10/WordPress-About-Menu-1-1024x482.jpg)

The top link on that menu is for the ‘About WordPress’ page, which contains tabs for What’s New, Credits, Freedoms and Privacy.

- **What’s New** describes many of the new features in the current version of WordPress.
- **Credits** screen provides some details about the various individuals who contribute to the WordPress code base.
- **Freedoms** screen describes your rights as a user of WordPress as open source software.
- **Privacy** screen describes handling of privacy information in WordPress.

### [Visit Site link](#visit-site-link)

In the Toolbar, to the right of the WordPress logo, your site name is displayed as a link. Hover over the site name to see the View Site link to visit the main page of your site.

### [Howdy, User](#howdy-user)

On the far right of the Toolbar is “Howdy, User”, with an image of your Gravatar. When hovered over, this expands to link you to your Profile Screen as well as a Log Out link.

![](https://wordpress.org/documentation/files/2018/10/howdyuser.jpg)

Howdy, User

When you log in to your blog, WordPress stores a so called *cookie* in your web browser. This cookie allows WordPress to remember who you are; if you leave your blog’s site for a while but come back to it later, WordPress will see the cookie and not require you to log in again.

**Tips**: If you have a WordPress cookie set in your web browser, anyone using your computer can access the Administration Screens of your blog. If you *don’t* want this to happen (perhaps you are using a public computer or a computer which other people use), you can click this **Log Out** link, and WordPress will delete the cookie from your web browser.

### [Screen Options](#screen-options)

Screen Options, displayed as a hanging tab under **the toolbar**, allow the user to decide what fields or modules are presented in the **work area** for a given Administration Screen. Each Screen may have a different set of Screen Options.

Click on the Screen Options tab to expand the options available for a particular Screen, check (or uncheck) the desired options, then click the Screen Options hanging tab to collapse the Screen Options.

![](https://wordpress.org/documentation/files/2018/10/screenoptions.png)

Screen Options

### [Help](#help)

Contextual **Help**, displayed as a hanging tab under **the toolbar**, displays one or more Help items that are related to the Screen that is displayed in the **work area**.

Click on the Help tab to expand the Help available for a particular Screen, then click the Help hanging tab to collapse the Help display.

## [Dashboard – Information Central](#dashboard-information-central)

The Dashboard tells you about recent activity both at your site and in the WordPress community, and update information.

### [Dashboard](#dashboard)

**Welcome –** Shows links for some of the most common tasks when setting up a new site.

**At A Glance –** Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.

**Activity –** Shows the upcoming scheduled posts, recently published posts, and the most recent comments on your posts and allows you to moderate them.

**Quick Draft –** Allows you to create a new post and save it as a draft. Also displays links to the 5 most recent draft posts you’ve started.

**WordPress Events and News** — Latest local events and news from the official WordPress project.

**PHP Info** — Shows the current PHP version your WordPress website is running on and whether the update is needed.

**Site Health Status** — An overview of your website’s current state and if any parts need improvement.

### [Updates](#updates)

You can update to the latest version of WordPress, as well as update your themes, plugins, and translations from the WordPress.org repositories.

If an update is available, you᾿ll see a notification appear in the Toolbar and navigation menu. Keeping your site updated is important for security. It also makes the internet a safer place for you and your readers.

#### [Updating WordPress](#updating-wordpress)

Click on the **Update Now** button when you are notified that a new version is available.

**Tips**: In most cases, WordPress will automatically apply maintenance and security updates in the background for you.

#### [Updating Themes, Plugins and Translations](#updating-themes-plugins-and-translations)

To update individual themes, plugins, or Translations, use the checkboxes to make your selection, then click on the appropriate **Update** button.

To update all of your themes, plugins, or Translations at once, you can check the box at the top of the section to select all before clicking the **update** button.

## [Posts – Make some content](#posts-make-some-content)

[Posts](https://wordpress.org/support/article/glossary/#post) are the principal element (or content) of a blog. The Posts are the writings, compositions, or discussions.

### [All Posts](#all-posts)

Via the [All Posts Screen](https://wordpress.org/support/article/posts-screen/) you can select the Post or Posts you wish to edit, delete, or view. Multiple Posts can be selected for deletion and for editing. A powerful bulk edit feature allows you to change certain fields for a group of Posts. A handy in-line edit tool, called Quick Edit, allows you to update many fields for an individual Post. Various search and filtering options allow you to find the Posts you want to edit or delete.

### [Add New Post](#add-new-post)

[Posts Add New Screen](https://wordpress.org/support/article/writing-posts/) is where you write new Posts. While you are writing those Posts, you can also create new Categories and new Tags. In addition, any Media (pictures, video, recordings, files) can be uploaded and inserted into the Posts.

### [Categories](#categories)

Every Post in WordPress is filed under one or more Categories. Categories allow the classification of your Posts into groups and subgroups, thereby aiding viewers in the navigation and use of your site.

Each Category may be assigned to a Category Parent so that you may set up a hierarchy within the category structure. Using automobiles as an example, a hierarchy might be Car->Ford->Mustang. In creating categories, recognize that each category name must be unique, regardless of hierarchy.

When using the WordPress default theme, all the Categories to which a given post belongs are displayed under that post. When someone viewing your blog clicks on one of those Category links, an archive page with all the Posts belonging to that Category will be displayed.

The [Posts Categories Screen](https://codex.wordpress.org/Posts Categories Screen) allows you to add, edit, and delete Categories, as well as organize your categories hierarchically. Multiple Categories can be selected for deletion. A search option allows you to find the Categories you want to edit or delete. Also remember that Categories can be added in the [Posts Add New Screen](https://wordpress.org/support/article/writing-posts/).

### [Tags](#tags)

Tags are the keywords you might assign to each post. Not to be confused with Categories, Tags have no hierarchy, meaning there’s no relationship from one Tag to another. But like Categories, Tags provide another means to aid your readers in accessing information on your blog.

When using the WordPress default theme, Tags are displayed under each Post those Tags are assigned. Someone viewing your blog can click on one of those Tag links, and an archive page with all the Posts belonging to that Tag will be displayed.

The [Posts Tags Screen](article__posts-tags-screen.md) allows you to add, change, or delete Tags. Multiple Tags can be selected for deletion. A search option allows you to find the Tags you want to edit or delete. Also remember Tags can be added in the [Posts Add New Screen.](https://wordpress.org/support/article/writing-posts/)

## [Media – Add pictures and movies to your posts](#media-add-pictures-and-movies-to-your-posts)

Media refers to the images, videos, recordings, and files you upload and use on your blog. Media is typically uploaded and inserted into the content when writing a Post or Page. Note that the Uploading Files section in the [Settings Media Screen](https://wordpress.org/support/article/settings-media-screen/) describes the location and structure of the upload directory.

### [Library](#library)

The [Media Library Screen](https://wordpress.org/support/article/media-library-screen/) allows you to add, edit, delete, or view Media previously uploaded to your blog. Multiple Media objects can be selected for deletion. Search and filtering ability is also provided to allow you to find the desired Media.

### [Add New Media](#add-new-media)

The [Media Add New Screen](https://codex.wordpress.org/Media Add New Screen) allows you to upload new media to later use with posts and pages. A drag and drop Uploader is provided, and the ability to use a Browser Uploader button is also supplied.

### [Edit Media](#edit-media)

The [Edit Media](https://codex.wordpress.org/Edit Media) page allows you to edit the information (title, caption, alt text, etc.) of media files uploaded to your site. This page does not appear as a link in the main Dashboard navigation, but is reached by clicking on the Edit link in the [Media Library Screen](https://wordpress.org/support/article/media-library-screen/) that appears when you hover over each item, or when uploading media for the first time on the [Media Add New Screen](https://codex.wordpress.org/Media Add New Screen) once your upload has completed.

## [Pages – Your Static Content](#pages-your-static-content)

A [Page](https://wordpress.org/support/article/glossary/#page) is another tool to add content to a WordPress site and is often used to present “static” information about the site; Pages are typically “timeless” in nature. A good example of a Page is the information contained in “About” or “Contact” Pages. A Page should not be confused with the time-oriented objects called Posts, nor should a WordPress Page be confused with the word “page” referring to any web page or HTML document on the Web.

Because Pages live outside of the normal blog chronology, and as such, are not displayed with the rest of your Posts, but are displayed individually.

### [All Pages](#all-pages)

The All Pages Screen provides the necessary tools to edit, delete, or view existing Pages. On this Screen, you can select the Page to edit, delete, or view. Multiple Pages can be selected for deletion and for editing. A powerful bulk edit tool allows certain fields to be edited for a whole group of Pages. A handy in-line edit tool, called Quick Edit, allows you to update many fields for an individual Page. Various search and filtering options allow you to find the Pages you want to edit or delete.

### [Add New Page](#add-new-page)

The [Add New Page Screen](https://wordpress.org/support/article/pages-add-new-screen/) allows you to create new Pages. Also see the [Pages article](https://wordpress.org/support/article/pages/) for an in depth discussion.

## [Comments – Reader Feedback](#comments-reader-feedback)

Comments are a feature of blogs which allow readers to respond to Posts.

In the [Comments Screen](article__comments-screen.md) you can edit and delete as well as mark comments as spam. Comments that are awaiting moderation can be marked as approved, or previously approved comments can be unapproved. Multiple comments can be selected and approved, marked as spam, unapproved, or deleted. A section at the top of the Comments Screen displays the number of comments awaiting moderation and the number of approved comments. A search box allows you to find specific comments

## [Appearance – Change the Look of your Blog](#appearance-change-the-look-of-your-blog)

WordPress allows you to easily style your site by either installing and activating new Themes or customizing existing Themes.

**Tips**: Customize your site’s design, menus, and layout by navigating to Appearance > Customize (for classic themes) or Appearance > Editor (for modern block themes).

### [Themes](#themes)

A Theme is the overall design of a site and encompasses color, graphics, and text. WordPress site-owners have available a long list of Themes to choose from in deciding what to present to their sites’ viewers.

From the [Appearance Themes Screen](https://codex.wordpress.org/Appearance Themes Screen), you can choose which Theme will be presented to users visiting your site. You can also view screenshots of each Theme you have uploaded to your site. In addition, under the Install Themes tab you can find and install new Themes.

### [Customize](#customize)

The [Customize Screen](https://codex.wordpress.org/Appearance Customize Screen) displays the settings that can be customized for a specific theme. For instance, the WordPress default theme provides options that allow the user to set the colors and a background image.

The [Customize Screen](https://codex.wordpress.org/Appearance Customize Screen) page describes the details of this feature.

### [Widgets](#widgets)

Widgets are gadgets or gizmos that allow you to add various pieces of information to your Theme’s sidebar content. Widgets, for example, can be used to add Categories, Archives, Blogroll, Recent Posts, and Recent Comments to your sidebar.

From the [Appearance Widgets Screen](article__appearance-widgets-screen.md) you can add, delete, and configure widgets used in one or more areas of your theme.

### [Menus](#menus)

The Menus feature allows you to create a navigation menu of pages, categories, custom links, tags, etc. that is presented to your visitors. A custom menu WordPress Widget allows display of a custom menu in the sidebar or other widgetized areas in the Theme.

From the [Appearance Menus Screen](https://wordpress.org/support/article/appearance-menus-screen/) you can create and edit navigation menus for visitors use.

### [Header](#header)

The Header feature allows you to manage what image is displayed in a Theme’s header. WordPress default theme allows you to preview, upload, remove, and set as default, the images you want randomly displayed in the header.

The [Appearance Header Screen](https://codex.wordpress.org/Appearance Header Screen) describes the details of this feature.

## [Plugins – Add Functionality to your Blog](#plugins-add-functionality-to-your-blog)

[Plugins](https://wordpress.org/support/article/plugins/) allow you to add new features to your WordPress blog that don’t come standard with the default installation. There are a wide variety of Available Plugins for WordPress, and with the following Screens, plugin installation and management is a snap.

### [Installed Plugins](#installed-plugins)

The [Plugins Installed Screen](https://codex.wordpress.org/Plugins Screen) allows you to view the plugins you’ve downloaded and choose which plugins you want activated on your site. For information on downloading and installing plugins, see [Managing Plugins](https://wordpress.org/support/article/managing-plugins/).

### [Add New Plugins](#add-new-plugins)

The [Plugins Add New Screen](https://codex.wordpress.org/Plugins Add New Screen) allows you to add new plugins. For information on downloading and installing plugins, see [Managing Plugins](https://wordpress.org/support/article/managing-plugins/).

### [Plugin File Editor](#plugin-file-editor)

Using the [Plugin File Editor Screen](article__plugins-editor-screen.md), you can modify the source code of all your plugins.

## [Users – Your Blogging Family](#users-your-blogging-family)

Every blog probably has at least two users: **admin**, the account initially set up by WordPress, and the user account you, as the author/owner of the blog, use to write posts. If you want a person to be able to post to your blog, that person must have access to a user account; typically, every person will have her or his *own* user account.

Via the Users option in the main navigation menu, you can set up all of the user accounts you need, as well as change user information, or delete users. Also, you can specify your and others’ personal information, such as name, e-mail, etc., from these User Administration Screens.

### [All Users](#all-users)

You can manage the accounts of all your site’s users at the [All Users Screen](https://codex.wordpress.org/Users Screen).

### [Add New User](#add-new-user)

You can create new users with the [Users Add New Screen](https://codex.wordpress.org/Users Add New Screen).

### [Your Profile](#your-profile)

The [Users Your Profile Screen](https://wordpress.org/support/article/users-your-profile-screen/) allows you to change any information related to your user account.

## [Tools – Managing your Blog](#tools-managing-your-blog)

WordPress Tools provide you with the ability to speed up WordPress on your local machine, import content from other sources, export your content, or upgrade your WordPress software to a new release.

### [Available Tools](#available-tools)

There is a link to the **Categories and Tag Converter**. The [Available Tools Screen](https://codex.wordpress.org/Tools Screen) describes the function.

### [Import](#import)

WordPress supports importing data from a number of external sources. In many cases, posts, comments, pages, categories, tags, and users can be imported.

See [Importing Content](https://wordpress.org/support/article/importing-content/) for a more extensive list of import options.

### [Export](#export)

WordPress Export will create an XML file for you to save to your computer. The format, which is called a WordPress eXtended RSS or WXR file, will contain your posts, comments, custom fields, categories, and tags.

The [Tools Export Screen](https://codex.wordpress.org/Tools Export Screen) guides you through the easy process of exporting your blog. Exporting is a useful method for backing up your WordPress data.

### [Site Health](#site-health)

The [Site Health Screen](article__site-health-screen.md) offers a diagnosis of your site’s health. It gives you actionable information on how to improve your WordPress site in the form of critical errors and warnings. It also gives you a summary of the technical aspects of your site.

There are two tabs on the site health page:

1. **Status** – The status tab allows you to see critical information about your WordPress configuration, along with anything else that requires your attention.

2. **Info** – The info tab is a granular view of the technical aspects of your WordPress website. You can see detailed information about every aspect of your site such as themes, plugins, and media.  There is also a useful export feature that allows you to copy all of the information about your site to the clipboard.

## [Settings – Configuration Settings](#settings-configuration-settings)

### [General](#general)

In the Settings Administration Screen are all of the settings that define your blog as a whole: settings which determine how your site behaves, how you interact with your site, and how the rest of the world interacts with your site.

The [Settings Administration Screen](https://wordpress.org/support/article/settings-general-screen/) controls some of the most basic configuration settings for your site: your site’s title and location, who may register an account at your blog, and how dates and times are calculated and displayed.

### [Writing](#writing)

Using the [Settings Writing Screen](https://wordpress.org/support/article/settings-writing-screen/), you can control the interface with which you write new posts. These settings control the default [Category](https://codex.wordpress.org/Posts_Categories_Screen), the default [Post Format](https://wordpress.org/support/article/post-formats/), and the optional feature.

### [Reading](#reading)

The Reading settings control whether your front page displays your latest posts or a static [page](article__create-pages.md). You can also control how many posts are displayed and how [syndication feeds](article__wordpress-glossary.md#rss) are handled.

### [Discussion](#discussion)

The [Settings Discussion Screen](article__settings-discussion-screen.md) allows you to control settings concerning incoming and outgoing comments, pingbacks, and trackbacks. You can also control from this Screen the circumstances under which your blog sends you e-mail notifying you about the goings on at your site, and you can decide if your blog should show [Avatars](https://wordpress.org/support/article/glossary/#avatar) and their ratings.

### [Media](#media)

The [Settings Media Screen](https://wordpress.org/support/article/settings-media-screen/) allows you to determine how images, documents, and other media files will be organized when uploaded, and to specify the maximum dimensions in pixels to use when inserting an image into the body of a post.

### [Permalinks](#permalinks)

For a nice introduction to Permalinks, check out the [Pretty Permalinks](https://wordpress.org/support/article/introduction-to-blogging/#pretty-permalinks) section of [Introduction to Blogging](https://wordpress.org/support/article/introduction-to-blogging/). By default, WordPress uses web URLs which have question marks and lots of numbers in them; however, WordPress offers you the ability to create a custom URL structure for your permalinks and archives. This can improve the aesthetics, usability, and forward-compatibility of your links.

The [Settings Permalinks Screen](https://wordpress.org/support/article/settings-permalinks-screen/) controls how that custom URL structure is defined.

## Was this article helpful? How could it be improved? [Cancel reply](article__administration-screens.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fadministration-screens%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

October 20, 2018

Last updated

June 10, 2026
