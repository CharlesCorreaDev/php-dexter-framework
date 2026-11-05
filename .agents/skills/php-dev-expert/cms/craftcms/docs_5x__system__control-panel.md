# Control Panel | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/control-panel

---

# Control Panel

- ### On this Page

  - [Tour](docs_5x__system__control-panel.md#tour)
  - [Tips + Tricks](docs_5x__system__control-panel.md#tips-tricks)
  - [Accessibility](docs_5x__system__control-panel.md#accessibility)

The control panel is one of Craft’s greatest strengths. Developers and content authors appreciate its smart design and powerful feature set:

- Locate and edit content quickly and confidently;
- Design a schema that makes sense for your site or application;
- Customize views into deep and complex data;
- Invite users and work collaboratively;
- Find, install, and configure first- and third-party plugins;

We are working to make these features available to *everyone* as part of our established [accessibility remediation process  (opens new window)](https://craftcms.com/accessibility/accessibility-conformance-report).

my-craft-project.ddev.site/admin

![Craft dashboard](/docs/assets/img/control-panel-dashboard.699bc451.png)

The Craft control panel viewed in a fresh installation.

If this is your first time using Craft, it might feel a little bit empty—don’t worry, that’s by design! Craft doesn’t impose a content model on your site, so you won’t see any default features like posts or pages—instead, you’re given tools to create the features you do need from agnostic [element types](docs_5x__system__elements.md) and other [settings](#settings).

## [#](#tour)Tour

The appearance and organization of the control panel can differ based on what types of content you’ve set up, your permissions, user preferences, and the environment—but the general structure will always be the same.

Craft also has multiple [editions](docs_5x__editions.md), some of which give you access to additional control panel features.

my-craft-project.ddev.site/admin/entries/exhibits/38

![A representative screen from the Craft control panel](/docs/assets/img/control-panel-tour-screen.3849c204.png)

1

2

3

4

5

An entry edit screen in the control panel.

Let’s take a quick spin around a typical control panel screen.

Global sidebar 1
:   Contains the system name and icon, followed by the *primary navigation*.
    Each of the control panel’s [main sections](#main-sections) is linked, when configured (and your user has the related [permission](docs_5x__system__user-management.md#permissions)).
    Pick the **Toggle sidebar** button to collapse it and make more room for the page content.

    Some items in the primary navigation contain nested links.
    Those lists are automatically expanded based on the current screen’s URI, or when you pick the **Open subnavigation** toggle.

Global header 2
:   Contains *breadcrumbs* (when working with nested content or settings), actions for the current screen, and the user menu.

Main container
:   The page’s main region typically contains editable content or settings, as well as secondary navigation and a sidebar.

    - A *header* 3 displays the page’s title and actions for the current screen.
      - On element edit screens, a *recent activity* region holds information about any other users that may be viewing or editing that element.
    - *Secondary navigation* contains links to adjacent pages (like other [utilities](#utilities), element [sources](docs_5x__system__elements.md#sources), or related settings). Like the global menu menu’s content tends to be stable between the linked pages, but it may not be present when viewing more deeply-nested resources.
    - The *content* 4 area’s structure and substance can vary dramatically between areas of the control panel.
      - *Tabs* may split the screen’s content or settings into logical groups (not pictured). The selected tab is appended to the current URL as a hash.
      - When present, the nested *sidebar* 5 is a mix of editable and read-only metadata.

You will see these same page components crop up in other screens—and even in [slideouts](#slideouts)!

The control panel includes [skip links](#skip-links) to a number of landmarks present in the current screen.
Use the **Disable autofocus** [accessibility preference](#user-preferences) to prevent search inputs or other UI from being focused when navigating.

### [#](#main-sections)Main Sections

You may not see (or need) all these sections in your *main navigation*. They’ll appear only when Craft determines that they’ll be useful to the logged-in user—for example, *Categories* is hidden until you’ve configured at least one [Category Group](docs_5x__reference__element-types__categories.md#category-groups).

| Section | Description |
| --- | --- |
| [Dashboard](#dashboard) | Customizable landing page. |
| [Assets](docs_5x__reference__element-types__assets.md) | Create and edit asset elements. |
| [Entries](docs_5x__reference__element-types__entries.md) | Create and edit entry elements. |
| [Categories](docs_5x__reference__element-types__categories.md) | Create and edit category elements. |
| [Globals](docs_5x__reference__element-types__globals.md) | Edit content in global sets. |
| [Users](docs_5x__reference__element-types__users.md) | TeamPro View and moderate users. |
| [GraphQL](docs_5x__development__graphql.md) | Configure GraphQL schemas, create tokens, and access the built-in playground. |
| [Utilities](#utilities) | Get system info and perform a variety of upkeep actions. |
| [Settings](#settings) | Configure Craft’s system settings and content model. |
| [Plugin Store](#plugin-store) | Browse, install, and purchase Craft and plugin licenses from the official Plugin Store. |
| …and more! | Some plugins provide their own control panel screens; others may only have a pane in the [Settings](#settings) section. |

### [#](#announcements)Announcements

Keep an eye on the *global header* for a

Gift icon

gift icon—Craft and any installed plugins may send notifications about new features to all control panel users, when updates are applied.

### [#](#dashboard)Dashboard

After logging in, control panel users are directed to their **dashboard**. Each user manages their own dashboard, which is comprised of *widgets*. Craft comes with a few widgets:

- **Support:** Get official support from the Craft team.
- **Feed:** Scrape an external RSS feed.
- **Drafts:** Viewing your unpublished entry drafts.
- **New Users:** Visualize new registrations.
- **Quick Post:** Provide a simplified [entry](docs_5x__reference__element-types__entries.md) form for publishing new content with one click.
- **Recent Entries:** Display a list of recently-posted entries from one or more sections.
- **Updates:** Keep tabs on Craft and plugin updates.

Widgets can be rearranged, resized, and customized based on the user’s needs, and will be available to them wherever they log in.

Plugins can [register their own widgets](docs_5x__extend__widget-types.md)!

### [#](#utilities)Utilities

Utilities expose bundles of miscellaneous functionality to users with the correct permissions.

All Craft installations will include these utilities:

- **Updates:** View Craft and plugin updates, and apply them (when [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) is on).
- **System Report:** Get information about the Craft installation and server.
- **Project Config:** View the state of [Project Config](docs_5x__system__project-config.md).
- **PHP Info:** Additional information about your server’s PHP installation.
- **System Messages:** Customize email messages that are sent by the system.
- **Asset Indexes:** Rebuild an [asset](docs_5x__reference__element-types__assets.md) volume from its underlying storage medium.
- **Queue Manager:** Audit running and queued background jobs.
- **Caches:** Flush caches for various parts of the Craft application.
- **Deprecation Warnings:** View or clear deprecation warnings generated by templates and plugins.
- **Database Backup:** Capture and download a backup of Craft’s primary database.
- **Find and Replace:** Search for (and replace) a string across all element content.
- **Migrations:** View (and apply) pending migrations, or view a history of all previously-run content migrations.

Plugins can [register utilities](docs_5x__extend__utilities.md), and Craft will give each one a corresponding permission.

Access to utilities should be granted only to trusted users, especially the innocuous *System Messages* pane. Messages can include arbitrary Twig code, which effectively gives the author access to the entire Craft API—including the ability to modify their own permissions.

Keep in mind that any user marked as an “Admin” implicitly has access to *all* utilities.

#### [#](#disabling-utilities)Disabling Utilities

You can disable a utility for all users with the [`disabledUtilities` config setting](docs_5x__reference__config__general.md#disabledutilities).
Refer to each [utility class  (opens new window)](https://github.com/craftcms/cms/tree/5.x/src/utilities)’s `id()` method for their handles (including those provided by plugins), or inspect its URL in the control panel—the handle is the last segment (i.e. `system-messages` in `/admin/utilities/system-messages`).

### [#](#settings)Settings

The **Settings** screen is where you’ll configure the system and design your content model. Settings complement [configuration](docs_5x__configure.md) are typically stored in [Project Config](docs_5x__system__project-config.md) so that you can easily deploy them to other environments.

Don’t see **Settings** in the main navigation? Make sure you have admin privileges, and that [allowAdminChanges](docs_5x__reference__config__general.md#allowadminchanges) is enabled. In Craft 5.6 and later, administrators always have access to settings in [read-only mode](#read-only-mode).

We recommend that this is enabled [only in development environments](docs_5x__deploy.md#admin-changes).

my-craft-project.ddev.site/admin/settings

![Craft settings screen](/docs/assets/img/control-panel-settings.c654f0d8.png)

1

2

3

The settings screen in Craft Pro. Some tiles may only be available in paid editions of Craft.

#### [#](#system)System 1

System settings govern low-level Craft behaviors that often influence how other content and media features are used.

| Group | Description |
| --- | --- |
| **General** | Turn your site on or off, set a timezone, and configure the login page and site icons. |
| **Sites** | Define [Sites and Site Groups](docs_5x__system__sites.md) to organize and localize your content. |
| **Routes** | Manage [dynamic routes](docs_5x__system__routing.md#dynamic-routes). |
| **Users** | Set [registration policies](docs_5x__system__user-management.md#public-registration), define your [permissions structure](docs_5x__system__user-management.md#permissions) with [user groups](docs_5x__system__user-management.md#user-groups), and add [custom fields](docs_5x__system__fields.md) to users. |
| **Addresses** | Set up the field layout used by [address](docs_5x__reference__element-types__addresses.md) elements. |
| **Email** | Configure how Craft sends [email](docs_5x__system__mail.md). |
| **Plugins** | Manage available [plugins](docs_5x__system__plugins.md). |

#### [#](#content)Content 2

Combined with [sites](docs_5x__system__sites.md), the **Content** section is where you design your schema.

| Group | Description |
| --- | --- |
| **Sections** | Manage entry [sections](docs_5x__reference__element-types__entries.md#sections). |
| **Entry types** | Manage entry [types](docs_5x__reference__element-types__entries.md#entry-types), used by sections and Matrix fields. |
| **Fields** | Create and organize [custom fields](docs_5x__system__fields.md) available to your elements. |
| **Globals** | Configure [globals](docs_5x__reference__element-types__globals.md). |
| **Categories** | Define complex taxonomies with [category groups](docs_5x__reference__element-types__categories.md#category-groups). |
| **Tags** | Define simple taxonomies with [tag groups](docs_5x__reference__element-types__tags.md#tag-groups). |

#### [#](#media)Media 3

Decide how you want to store and organize uploaded files.

| Group | Description |
| --- | --- |
| **Assets** | Create volumes for organizing [assets](docs_5x__reference__element-types__assets.md) and attach them to filesystems, and configure [image transforms](docs_5x__reference__element-types__assets.md#image-transforms). |
| **Filesystems** | Set up local or remote storage for an [asset volume](docs_5x__reference__element-types__assets.md#filesystems). |

#### [#](#plugins)Plugins

Additional tiles may appear in a fourth group, after installing [plugins](docs_5x__system__plugins.md). Plugin settings are also accessible via the

1. Settings→
2. Plugins

screen.

#### [#](#read-only-mode)Read-Only Mode [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Read-only settings screens was first available in version 5.6.0 of Craft.")

[Administrators](docs_5x__system__user-management.md#admin-accounts) can always *view* settings. A banner appears at the top of each settings screen, and inputs and controls are simplified or disabled:

my-craft-project.ddev.site/admin/settings

![Craft settings screen in read-only mode](/docs/assets/img/control-panel-settings-read-only.d07bfbc8.png)

The settings screen in read-only mode

### [#](#plugin-store)Plugin Store

The control panel provides an easy way to browse the [Plugin Store](docs_5x__system__plugins.md#the-plugin-store) and try or buy plugins with one click. Plugins can only be installed when [admin changes](docs_5x__reference__config__general.md#allowadminchanges) are allowed.

## [#](#tips-tricks)Tips + Tricks

The control panel has some cool tricks up its sleeve.

### [#](#slideouts)Slideouts

Slideouts are used in a number of situations to simplify or contextualize an editing experience.

Any time you see an [element chip or card](docs_5x__system__elements.md#chips-cards) attached to a [relational field](docs_5x__system__relations.md) (or within a [Matrix](docs_5x__reference__field-types__matrix.md) field), or in an [index](docs_5x__system__elements.md#indexes), you can double-click it to summon a *slideout*.

my-craft-project.ddev.site/admin/entries/habitats/1234-eagle-canyon

![A slideout opened from an attached entry](/docs/assets/img/control-panel-slideouts.9accf35f.png)

Slideouts can also be opened from other slideouts! In this example, double-clicking “Canopy Carnivores” opened the current one; double-clicking “Bald Eagle” would open another; and so on.

Slideouts also work for creating new elements on-the-fly from an [element browser](docs_5x__system__elements.md#modals-contexts).

There is one exception, here: slideouts cannot be opened if the user doesn’t have [permission](docs_5x__system__user-management.md#permissions) to edit the element—even if they were able to select it from a relational field.

While slideouts support most element edit screen features, you may find that it’s more comfortable to open it in a new window—just click the icon in the upper-right corner, or use the [action menu](#action-menus). Features you’d normally find in the sidebar have been tucked into a secondary panel for slideouts; this can be toggled with the button next to the pop-out link.

### [#](#action-menus)Action Menus

Wherever you see a small button with three dots (

Ellipses

) on a chip, card, or page header, it opens an *action menu*. These menus are typically divided into two or more sections, with one dedicated to “destructive” actions like deletion or removal.

![A Matrix block’s action menu](/docs/assets/img/fields-matrix-ui-nested-entry-actions.d2cb0788.png)

Each [element type](docs_5x__system__elements.md#element-types) provides its own set of actions—some of which may be dependent on the current user’s [permissions](docs_5x__system__user-management.md#permissions), or the characteristics of the individual element (like what entry type it is, which section it belongs to, or what asset filesystem it uses).

### [#](#keyboard-shortcuts)Keyboard Shortcuts

#### [#](#saving)Saving

Any time you are on a screen (or slideout) that represents a single editable record or form, `Command`+`S` will save it and keep you on the page. In most places the save shortcut is supported, `Command`+`Shift`+`S` will save the current record and set you up to create another.

Always check “combo-box” menus (the fly-out arrow next to a red button) for more shortcuts!

#### [#](#group-selections)Group Selections

Throughout the control panel, you will find groups of checkboxes or other focusable controls in a list of items. Ticking one checkbox, then holding `Shift` and clicking a second one will tick all the intermediate ones, as well. Element indexes are a great place to try this out—but it will also work on nested entries within [Matrix](docs_5x__reference__field-types__matrix.md) fields.

### [#](#drag-and-drop)Drag-and-Drop

The

Drag-and-drop handle icon

move icon indicates that something can be dragged into a new position—like an element in a [structure](docs_5x__system__elements.md#structures) or relational field, a nested entry in a [Matrix field](docs_5x__reference__field-types__matrix.md), or a [table row](docs_5x__reference__field-types__table.md).

In some situations, dragging can be combined with [group selections](#group-selections)!

### [#](#search)Search

Craft has a powerful [search](docs_5x__system__searching.md) system that complements the [condition builder](docs_5x__system__elements.md#filters-and-columns) on every element index.

## [#](#accessibility)Accessibility

The control panel is designed and built with [accessibility](https://craftcms.com/glossary/accessibility "accessibility in the Glossary")

…

 principles in mind.
We target AA conformance with [WCAG 2.2  (opens new window)](https://www.w3.org/TR/WCAG22/), and publish progress reports our website’s [accessibility portal  (opens new window)](https://craftcms.com/accessibility).

In addition to built-in interfaces, the content tools you configure for authors are backed by components that we [regularly audit  (opens new window)](https://craftcms.com/accessibility/reports) for conformance.

[Accessibility
→

Craft includes all the tools you need to create accessible experiences for authors and front-end users.](docs_5x__development__accessibility.md)

### [#](#navigating-the-control-panel)Navigating the control panel

[Skip links](#skip-links) and [landmarks](#landmarks) have been incorporated throughout the control panel to make navigation via keyboard and screen reader more straightforward.

#### [#](#skip-links)Skip Links

Global skip links are found at the beginning of each control panel screen.

![A link to 'Skip to main section' with a visible focus ring](/docs/assets/img/accessibility-jump-link-example.1c594768.png)

These include:

- **Skip to main section:** Skips to the `main` container. This container includes the page header, which contains the page title and controls for the current screen.
- **Skip to left sidebar:**  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "This feature was first available in version 5.7.0 of Craft.") Skips to the sub-navigation container. For example:
  - On element index pages, this moves keyboard focus to the “Sources” menu.
  - On account pages, this moves keyboard focus to the “Account” navigation.
- **Skip to content:**  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "This feature was first available in version 5.7.0 of Craft.") Skips to the primary content pane on the page.
- **Skip to right sidebar:**  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "This feature was first available in version 5.7.0 of Craft.") Skips to the details container, which includes page metadata.

The accessible names for the “left” and “right” sidebars respect your user’s language setting, and will flip when using a right-to-left script.

Only links that point to a region used in the current screen are exposed in this list.
In addition to global skip links, other parts of the control panel may include local skip links.
For example, element index pages contain a **Skip to footer** link within the content region that jumps to pagination and bulk actions in the “footer” toolbar.

When saving an element, success and failure states are announced via a live region, and an error summary is added to the top of the content region:

![Screenshot of the error summary at the top of an element edit screen, with jump links to each field with problems.](/docs/assets/img/accessibility-validation-errors.c75a99d6.png)

Each of the validation messages link to the field that they apply to.
Jumping to an error may switch to a different tab in the field layout than is currently selected.

#### [#](#landmarks)Landmarks

Special regions of the control panel are designated using [roles  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Reference/Roles/landmark_role). These include:

- **`main`** — This landmark contains the bulk of the page content.
- **`nav`** — Depending on the page, there may be several navigation landmarks, including:
  - **Primary navigation** — Links for the primary sections of the control panel, like **Dashboard**, **Entries**, **Settings**, and so on. Available on most screens.
  - **Breadcrumb navigation** — Links to each parent, owner, and relevant organizational component (like a section or static route). Available only when working with [structures](docs_5x__reference__element-types__entries.md#structures), [nested elements](docs_5x__system__elements.md#nested-elements), or settings.
  - **Secondary navigation** — Located inside the `main` landmark, the secondary navigation’s accessible name will change based on where you are in the control panel and what the links within it represent. For example, in the **My Account** screen, it is called *Account*; on the **Entries** or **Assets** element index it is called *Sources*.
- **`status`** — A live region where [flashes](docs_5x__development__forms.md#flashes) and other dynamic messages are injected.

See the [tour](#tour) section on this page for more information on each of these sections.

Some screens (like the login page, errors, and post-[update](docs_5x__update.md) prompts) have a single, generic content container, and don’t include labeled content or navigation regions.

### [#](#user-preferences)User Preferences

The control panel can be customized to match your needs by visiting

1. My Account→
2. Preferences

.
Settings are split into three groups, and are stored on your user, so your experience will be consistent across all sessions.

Your preferences are *not* applied to the login screen or other off-session pages, but your developer can use the [accessibilityDefaults](docs_5x__reference__config__general.md#accessibilitydefaults) setting to apply defaults.

Display Settings
:   These settings are concerned with the appearance of the control panel UI.

    - **Use shapes to represent statuses:** Statuses are always represented by colorized “badges,” and—in some cases—icons. Enable this setting to use shapes for otherwise indistinguishable states.
    - **Underline links:** This setting adds underlines to all links inside the control panel.

    ![The appearance of statuses in Craft, when the “use shapes to represent statuses” setting is enabled.](/docs/assets/img/accessibility-status-shapes.597627d2.png)

General Settings
:   - **Disable autofocus:** Some inputs inside the control panel use the `autofocus` attribute, so keyboard focus may move unexpectedly; these include search inputs on element index pages, and the first input on Edit screens or inside of slideouts. Enabling this setting will prevent this autofocus behavior.

Notification Settings
:   Both **Duration** and **Position** of notification “toasts” can be configured.

    - **Notification Duration**: By default, toasts are shown for *five seconds* before disappearing. You can shorten this timer to *two seconds*, extend it to *ten seconds*, or have them remain *indefinitely* (allowing the user to close them manually).
    - **Notification Position**: Toasts appear at the bottom-left corner of the screen, by default. This setting allows you to customize which corner of the screen they are placed.

Slideout Position
:   Slideout position can be changed to show on the left- or right-hand side of the screen.

Notification and slideout preferences are stored in a script-agnostic way, so they will behave naturally if you switch between LTR and RTL languages.

### [#](#image-editor)Image editor

The built-in image editor features a number of keyboard-accessible adjustments.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "A keyboard-accessible image editor was first available in version 5.9.0 of Craft.")

From the right sidebar on an [asset](docs_5x__reference__element-types__assets.md)’s edit screen, find the **Edit image** button.
A modal will open, with tabs for [**Rotate**](#rotation) and [**Crop**](#cropping).

If you can’t find the **Edit image** button, the asset may not be transformable on the current system.
This may be due to the file type (i.e. `PDF`), or your [image driver](docs_5x__requirements.md).

#### [#](#rotation)Rotation

Images can be rotated 90° clockwise (**Rotate Right**) or counter-clockwise (**Rotate Left**), flipped vertically and horizontally, or “straightened” in increments of 1° using the **Rotate** slider.

Use the **Focal Point** button to add a position control to the image.
You can nudge the focal point horizontally or vertically; the value is stored as a proportional coordinate pair, with decimal values between `0` and `1`.
The focal point is used to keep subjects within a transformed image—for example, vertical head-shots attached to staff profiles

Some asset filesystem types ([AWS S3  (opens new window)](https://plugins.craftcms.com/aws-s3), in particular) can automatically detect subjects and populate the **Focal Point** attributes.
Combined with [transforms](docs_5x__development__image-transforms.md), this can help keep subjects in-frame, when assets are used in multiple contexts.

### [#](#alternative-text)Alternative Text

Craft provides a native [**Alternative Text** field](docs_5x__reference__element-types__assets.md#alt-text) for [assets](docs_5x__reference__element-types__assets.md).
In addition to simplifying how images are output in your [front-end templates](docs_5x__development__templates.md), this provides a known source for image descriptions, when their thumbnails are displayed in the control panel.

[Handling alt text
→

Learn how to set up sensible alternative text authoring tools.](docs_5x__development__accessibility.md#alt-text)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/control-panel.md)
