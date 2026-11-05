# Appearance Widgets Screen (Classic Editor) – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/appearance-widgets-screen-classic-editor/

---

# Appearance Widgets Screen (Classic Editor)

## In this article

Table of Contents

- [Widgets Management in Customizer](#widgets-management-in-customizer)
- [Configuring Your Widgets](#configuring-your-widgets)
- [Remove a Widget](#remove-a-widget)
- [Moving a Widget](#moving-a-widget)
- [Descriptions of Each Widget](#descriptions-of-each-widget)
- [Adding Multiple Widgets of the Same Kind](#adding-multiple-widgets-of-the-same-kind)
- [No Sidebars Defined](#no-sidebars-defined)

[Back to top](#wp--skip-link--target)

**Note:** This is documentation for the Classic Widgets Screen. The documentation for the [Block-based Widgets editor can be found here.](article__block-based-widgets-editor.md)

Themes usually have at least 1 or 2 sidebars. Each section in the sidebar is known as a “Widget” that you can add or remove, and move up or down. You configure Widgets in your sidebar by via the **Appearance Widgets Screen**. Some themes also are configured to accept widgets in certain parts of the footer and header.

[![](https://i0.wp.com/wordpress.org/documentation/files/2019/01/wigets-screen.png?fit=932%2C606&ssl=1)](https://wordpress.org/support/?attachment_id=11132735)

widgets screen

### [Widgets Management in Customizer](#widgets-management-in-customizer)

You can add, rearrange and remove Widgets just like in Appearance Widgets Screen, but you also get a live preview of your changes. From the Appearance Widgets Screen, click the “Manage in Customizer” link at the top to access the Widgets section of Theme Customizer.

### [Configuring Your Widgets](#configuring-your-widgets)

1. Click on **Appearance > Widgets** from the main navigation menu in your Dashboard.
2. Add new widgets from the Available Widgets section by dragging them
   to the Sidebar you want to customize. (There might be more than one
   sidebar option, depending on your theme.)
3. Preview your site and you should see the content from your new Widget.
4. Return to the Widgets Screen to continue adding Widgets to the Sidebar as needed.
5. To arrange the Widgets within the Sidebar, **click, drag and drop** the widgets in the order you want.
6. To customize the Widget features, click the **down arrow** (or edit link) in the upper right corner to expand the Widget’s interface.
7. To save the Widget’s customization, click **Save**. (If simply moving a widget to the sidebar without making customizations, you do not need to click the Save button.)
8. Preview your site again, and all of your changes should be visible.

### [Remove a Widget](#remove-a-widget)

1. Click on **Appearance > Widgets** from the main navigation menu in your Dashboard.
2. Decide which Sidebar from which you want to remove your widget if there is more than one option.
3. For the Widget that is to be removed, click the **down arrow** (or edit link) in the upper right corner to expand the Widget’s interface
4. Click the **Delete** link in the dialog box.
5. The Widget will now be removed permanently.
6. Preview your site to see your changes.

**Note:** If you would like to remove a widget temporarily and
keep your settings, drag the widget from the Sidebar into the Inactive
Widgets section. When you are ready to return the widget, drag it from
your Inactive Widgets section back to the Sidebar.

### [Moving a Widget](#moving-a-widget)

To move a Widget:

1. The Widget must be located in a Sidebar or other active content area before it can be moved.
2. Click on the Widget Title and hold the mouse button down, then drag
   the Widget bar up or down to the location desired. At that point
   release the mouse button. That process is called drag-and-drop.

### [Descriptions of Each Widget](#descriptions-of-each-widget)

Here’s a description of the various types of widget along with their configuration options:
**Archives** – displays archive links for each month that has posts.

- Title — description that appears over the list of archive links.
- Display as a drop down — if checked, this box causes the archives to be displayed in a drop-down box.
- Show post counts — if checked, this box causes a count of the number of posts for each archive period.

**Calendar** – displays a calendar of the current month. Dates appear as links if there are posts for that day.

- Title — description that appears over the calendar

**Categories** – displays a list of post categories as links to those posts.

- Title — description that appears over the list of categories.
- Display as dropdown — if checked, this box causes the categories to be displayed in a dropdown box.
- Show post counts — if checked, this box causes the count of the number of posts to display with each category.
- Show hierarchy — if checked, shows parent/child relationships in an indented manner.

**Custom Menu** – displays a custom menu.

- Title — description that appears over the menu
- Select Menu — select the desired created menu

**Meta** – displays links to meta functions such as Register, Site Admin, Login/out, Entries RSS, Comments RSS, and WordPress.org.

- Title — description that appears over the list of meta links.

**Pages** – displays a link to each Page.

- Title — description that appears over the list of pages.
- Sort by — select the order to sort the list of pages. Choose Page Title, Page Order, or Page ID from pulldown box
- Exclude (Page IDs, separated by commas) — enter the Page ID(s) to exclude, separating each Page ID with a comma

**Recent Comments** – displays a list of the blog’s most recent approved comments.

- Title — description that appears over the list of recent comments.
- Number of comments to show: (at most 15); enter the number of comments to be displayed.

**Recent Posts** – displays list of the blog’s most recent posts.

- Title — description that appears over the list of recent posts.
- Number of posts to show: (at most 15) — enter the number of posts to display.
- Display post date? — check this to display the date the post was published.

**RSS**  – displays an RSS Feed. Multiple instances of this widget can be added to the Current Widgets list.

- Enter the RSS feed URL here — enter a complete feed URL.
- Give the feed a title (optional) — enter a description that appears over the list of feed items
- How many items would you like to display? — enter the number of items from the feed you want displayed.
- Display item content? — check this to display the content of the feed
- Display item author if available? — check this to display the author of this particular item content
- Display item date? — check this to display the date the item was published

**Search** – displays a Search box to enter text to search your blog. A submit button is also provided.

- Title — description that appears over the Search box.

**Tag Cloud** – displays list of the blog’s top 45 used tags in a tag cloud.

- Title — description that appears over the tag cloud.
- Taxonomy — select the desired registered taxonomy (e.g. Tags, Category).

**Text** – used to enter HTML, JavaScript, or just plain text. Multiple instances of this widget can be added to the Current Widgets list.

- Title area — a description of the text widget
- Text area — use this area to enter text, valid HTML, or even valid JavaScript.
- Automatically add paragraphs — check this to automatically add
  paragraphs to wrap each block of text in an HTML paragraph tag
  (recommended for text).

### [Adding Multiple Widgets of the Same Kind](#adding-multiple-widgets-of-the-same-kind)

To add multiple text widgets, RSS widgets, or any other widgets, just
drag and drop the widget from Available Widgets to your Sidebar as many
times as you need.

### [No Sidebars Defined](#no-sidebars-defined)

If the current active Theme is not widget compatible, meaning the
theme is not coded for widgets, you will see the message, “You are
seeing this message because the theme you are currently using isn’t
widget-aware, meaning that it has no sidebars that you are able to
change. For information on making your theme widget-aware, please [follow these instructions](http://automattic.com/code/widgets/themes/)“.

## Was this article helpful? How could it be improved? [Cancel reply](article__appearance-widgets-screen-classic-editor.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fappearance-widgets-screen-classic-editor%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

January 26, 2019

Last updated

January 11, 2023
