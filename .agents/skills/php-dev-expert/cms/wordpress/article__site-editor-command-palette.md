# Command Palette – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/site-editor-command-palette/

---

# Command Palette

## In this article

Table of Contents

- [How to access the Command Palette](#how-to-access-the-command-palette)
- [List of available commands](#list-of-available-commands)
- [Demo](#demo)
- [Registering custom commands](#registering-custom-commands)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

The **Command Palette** offers you a way to quickly navigate and manage your entire site with the ability to invoke different actions such as:

- Navigate to a different part of your dashboard, from the Media Library to creating a new post.
- Search for individual posts or pages and create new ones.
- Search through templates, template parts and patterns.
- Add custom CSS.
- Access Styles and style revisions.
- Transform and manipulate blocks.
- Toggle settings and preferences.
- Reset customisations.

It exists in any admin screen, the Site Editor, and the Post/Page editor. It is not available when you view the front end of your site.

## [How to access the Command Palette](#how-to-access-the-command-palette)

To access the Command Palette, use the keyboard shortcut `Cmd+k` on Mac or `Ctrl+k` on Windows anywhere in your site. Once the command line opens, you can start typing to search for the action or content you want. Please note that the [keyboard shortcut is not available in some environments](https://github.com/WordPress/gutenberg/issues/51737) at the moment.

You can also invoke it specifically when you’re in the Site Editor and click on the title, at the top center of the editor.

WordPress 7.1 brings the Command Palette everywhere. It now shows in the admin bar, making it easier to find. Command Palette now be reach via the Search + Cmd+K icons for Mac and the Search + Ctrl+K icons for Windows and Linux in the WordPress admin bar.

![Admin bar on Mac](https://wordpress.org/documentation/files/2023/08/admin_bar-7.1-mac.jpg)

Admin bar on Mac

![Admin bar on Windows](https://wordpress.org/documentation/files/2023/08/admin_bar-7.1-windows.jpg)

Admin bar on Windows

[](https://wordpress.org/documentation/files/2023/08/First-Video.mp4)

You will also find it available when in the Site View in the sidebar by clicking on the search icon.

[](https://wordpress.org/documentation/files/2023/08/Second-Video.mp4)

## [List of available commands](#list-of-available-commands)

Here are some of the available commands:

- *Edit Template* when editing a page.
- *Back to page* to return to editing a page from a template.
- *Reset template*
- *Reset template part*
- *Reset styles to default*
- *Delete template*
- *Delete template part*
- *Toggle settings sidebar*
- *Toggle block inspector*
- *Toggle spotlight mode*
- *Toggle distraction free*
- *Toggle top toolbar*
- *Open code editor*
- *Exit code editor*
- *Toggle list view*
- *Toggle fullscreen mode*
- *Editor preferences*
- *Keyboard shortcuts*
- *Show/Hide block breadcrumbs*
- *Customize CSS*
- *Style revisions*
- *Open styles*
- *Learn about styles* to trigger the welcome guide for Styles
- *Reset styles*
- *View site*
- *View templates*
- *View template parts*
- *Open Navigation Menus*
- *Rename Pattern*
- *Duplicate Pattern*
- *Manage all custom patterns*
- *Go to Site Editor*
- *Add new page*
- View site
- *Individual Pages (searchable by title)*
- *Individual Posts (searchable by title)*
- *Individual Templates (searchable by title)*
- *Individual Template Parts (searchable by title)*
- *Go to: Dashboard*
- *Go to: Posts*
- *Go to: Posts> All posts*
- *Go to: Posts> Add post*
- *Go to: Posts> Tags*
- *Go to: Posts> Categories*
- *Go to: Media > Library*
- *Go to: Media > Add media file*
- *Go to: Pages*
- *Go to: Pages > All pages*
- *Go to: Pages > Add page*
- *Go to: Comments*
- *Go to: Appearance*
- *Go to: Plugins*
- *Go to: Plugins > Add plugin*
- *Go to: Plugins > Installed plugin*s
- *Go to: Users*
- *Go to: Users > All Users*
- *Go to: Users > Add User*
- *Go to: Users > Profile*
- *Go to: Tools*
- *Go to: Tools* > *Available Tools*
- *Go to: Tools* > *Import*
- *Go to: Tools* > *Export*
- *Go to: Tools* > *Site Health*
- *Go to: Tools > Export Personal Data*
- *Go to: Tools > Erase Personal Data*
- *Go to: Tools* > *Theme File Editor*
- *Go to: Tools* > *Plugin File Editor*
- *Go to: Settings*
- *Go to: Settings > General*
- *Go to: Settings > Writing*
- *Go to: Settings > Reading*
- *Go to: Settings > Discussion*
- *Go to: Settings > Media*
- *Go to: Settings > Permalinks*
- *Go to: Settings > Privacy*

An up-to-date list of all the available commands can be found [here](https://github.com/WordPress/gutenberg/tree/trunk/packages/edit-site/src/hooks/commands).

## [Demo](#demo)

Please watch the demo below for more details.

[](https://wordpress.org/documentation/files/2023/08/6-9-command-palette-anywhere-i3.mp4)

## [Registering custom commands](#registering-custom-commands)

It is possible to extend the Command Palette by registering your own commands. You can read more details on how to register your own commands [here](https://make.wordpress.org/core/2023/07/17/introducing-the-wordpress-command-palette-api/).

## [Changelog](#changelog)

- Update 2026-08-19 (props to @estelaris and @milana\_cap)
  - Added images to show persistent access to the command palette via the admin bar.
- Update 2025-11-27 (props @annezazu)
  - Updated doc in light of command palette everywhere work for 6.9
- Update 2025-11-10 (props @karthickmurugan)
  - Add new commands for 6.8: Go to Site Editor and Add new page
- Updated 2023-11-27
  - Changed wording to refer to Site *and* Post Editor
  - Updated list of Commands
- Updated 2023-08-24
  - Updated headings formatting
  - Added category and subcategory
- Created 2023-08-08

## Was this article helpful? How could it be improved? [Cancel reply](article__site-editor-command-palette.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fsite-editor-command-palette%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

August 8, 2023

Last updated

August 23, 2026
