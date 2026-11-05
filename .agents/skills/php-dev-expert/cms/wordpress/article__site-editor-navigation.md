# Site Editor navigation – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/site-editor-navigation/

---

# Site Editor navigation

## In this article

Table of Contents

- [Access all your menus](#access-all-your-menus)
- [Rename, duplicate, and delete menus](#rename-duplicate-and-delete-menus)
- [Reorder, delete, and opening menu items](#reorder-delete-and-opening-menu-items)
- [Focus mode and advanced editing](#focus-mode-and-advanced-editing)
- [Saving your changes](#saving-your-changes)
- [Adding a navigation menu to your site](#adding-a-navigation-menu-to-your-site)
  - [1. Add the Navigation Block](#1-add-the-navigation-block)
  - [2. Assign the Navigation Menu](#2-assign-the-navigation-menu)
  - [3. Save and Preview](#3-save-and-preview)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

WordPress version 6.3 introduces the possibility to edit your site’s menus via the Site Editor.

You can view, manage, and modify your menus without having to find them in a specific template in the site editor. If your site has several menus, they will all be listed together and you will be able to edit them from there.

You can learn about the Site Editor in this support article: [Site Editor](article__site-editor.md).

The Site Editor navigation is **only** available when you install and activate a [Block theme](article__block-themes.md) on your site.

You can do the follow actions using the Site Editor Navigation:

## [Access all your menus](#access-all-your-menus)

When you navigate to **Appearance > Editor > Navigation**, you will see all your menus listed there.

[](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-menus-1.mp4)

## [Rename, duplicate, and delete menus](#rename-duplicate-and-delete-menus)

Once you select an individual menu, you will be able to rename, duplicate or delete it by clicking the **Actions** button next to its name.

![The Actions menu, the three vertical dots next to the menu name in the Site Editor Navigation panel, open with the Rename, Duplicate and Delete options.](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-menu-options-1024x594.png)

## [Reorder, delete, and opening menu items](#reorder-delete-and-opening-menu-items)

You can reorder and delete menu items from the Site Editor navigation sidebar by clicking on the **Options for page link** button next to each menu item.

![How to access the Move, Delete and Go to options for individual menu items in the Site Editor Navigation.](https://wordpress.org/documentation/files/2023/08/site-editor-navigation-menu-items-1024x604.png)

You can also reorder items by dragging and dropping items, and even create submenus.

[](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-items-drag-drop.mp4)

You can open any page from the Site Editor navigation section by clicking the **Options for page link** button and select **Go to page**. See the demostration video below.

[](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-go-to-page.mp4)

## [Focus mode and advanced editing](#focus-mode-and-advanced-editing)

The Site Editor navigation sidebar only allows you to do basic changes to individual menu items. If you need to edit menu item details, you can click on the menu itself (on the right) or on the **Edit** button (depicted by a pencil icon in the sidebar) to enter Focus Mode and access all menu settings.

[](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-menu-items-focus-mode-details-1.mp4)

## [Saving your changes](#saving-your-changes)

Please note that you will need to save your changes. You will be asked to save these changes before you exit the Site Editor but you can also save them manually at any point.

[](https://wordpress.org/documentation/files/2023/08/Site-Editor-Navigation-save-changes.mp4)

You can also save them by clicking `cmd+s` in Mac or `ctrl+s` in Windows.

## [Adding a navigation menu to your site](#adding-a-navigation-menu-to-your-site)

Creating a navigation menu in the Site Editor doesn’t automatically make it appear on your site. You need to add a Navigation block to a template part (such as the Header) and link it to the menu you created.

### [1. Add the Navigation Block](#1-add-the-navigation-block)

- Go to the template part where you want the menu to appear (e.g., the Header template part).
- Insert the **Navigation block** into the desired area.

### [2. Assign the Navigation Menu](#2-assign-the-navigation-menu)

- Click on the Navigation block to open its settings in the sidebar.
- Under the menu selector, choose the navigation menu you created earlier.
- If the dropdown is empty, make sure your navigation menu was saved correctly and is available for selection.

### [3. Save and Preview](#3-save-and-preview)

Save your changes and preview the site to confirm the navigation menu appears as expected.

If the Navigation block still appears empty, double-check the following:

- The navigation menu was saved and published.
- The Navigation block is correctly linked to the menu in its settings.
- Clear any caching plugins or browser cache that might be affecting the display.

## [Changelog](#changelog)

- Updated 2026-06-30
  - Added section on assigning a navigation menu to the Navigation block. Props @karthickmurugan
- Updated 2023-11-11
  - Updating capitalisations.
- Updated 2023-08-24
  - Updated formatting
  - Changed the category to Site Editor
- Created 2023-08-08

## Was this article helpful? How could it be improved? [Cancel reply](article__site-editor-navigation.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fsite-editor-navigation%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

August 8, 2023

Last updated

October 10, 2026
