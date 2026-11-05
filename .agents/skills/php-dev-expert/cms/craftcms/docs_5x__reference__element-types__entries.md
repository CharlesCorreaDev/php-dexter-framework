# Entries | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/entries

---

# Entries

- ### On this Page

  - [Entry Types](docs_5x__reference__element-types__entries.md#entry-types)
  - [Sections](docs_5x__reference__element-types__entries.md#sections)
  - [Sources](docs_5x__reference__element-types__entries.md#sources)
  - [Nested Entries](docs_5x__reference__element-types__entries.md#nested-entries)
  - [Editing Entries](docs_5x__reference__element-types__entries.md#editing-entries)
  - [Statuses](docs_5x__reference__element-types__entries.md#statuses)
  - [Querying Entries](docs_5x__reference__element-types__entries.md#querying-entries)

Entries are flexible content containers that—unlike [addresses](docs_5x__reference__element-types__addresses.md), [assets](docs_5x__reference__element-types__assets.md), or [categories](docs_5x__reference__element-types__categories.md)—have no primary or implied function. They are entirely agnostic building blocks, used to model whatever kind of content or data your project needs.

All entries support some key features like **Authors**, a **Post Date** and **Expiration Date**, **Statuses**, and content defined via [field layouts](docs_5x__system__fields.md). Additional features and properties are determined via [entry types](#entry-types), or the [sections](#sections) and [Matrix fields](docs_5x__reference__field-types__matrix.md) they’re used in.

Authors can use the [drafts and revisions](#editing-entries) system to stage different versions of content and preview it before going live.

## [#](#entry-types)Entry Types

Craft uses *entry types* to define atomic units of content, which are then exposed to editors via [sections](#sections) and [Matrix fields](docs_5x__reference__field-types__matrix.md).

Global Entry Types

Entry types became a global resource in Craft 5. This means you can define a content type *once*, then use it in multiple sections, as a [nested](#nested-entries) block in a [Matrix](docs_5x__reference__field-types__matrix.md) field, or some combination of the two. As a result, some settings have moved around!

Most importantly, you’ll manage entry types in the **Settings** → **Entry Types** screen—or create them on-the-fly in a slideout when working on a section or Matrix field.

my-craft-project.ddev.site/admin/settings/entry-types/1

![Screenshot of entry type settings](/docs/assets/img/entry-type-edit.cb4e8001.png)

Editing an entry type in the control panel.

Entry types have the following settings:

- **Name** — Used throughout the control panel as a UI label.
- **Handle** — Uniquely identifies entries of this type in [templates](docs_5x__development__templates.md) and [queries](docs_5x__development__element-queries.md).
- **Description**  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Entry type descriptions was first available in version 5.8.0 of Craft.") — A short explanation of what the entry type is used for. This is displayed in a tooltip when the entry type is selected elsewhere in the control panel.
- **Icon** and **Color** — Choose a symbol and color to subtly distinguish entries of this type throughout the control panel.
- **UI Label Format**  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Entry type UI label formats was first available in version 5.9.0 of Craft.") — Customize this entry type’s labels (used primarily on [element chips and cards](docs_5x__system__elements.md#chips--cards)). Use this to more accurately describe entries in the control panel, without also affecting titles.
- **Title Translation Method** — In multi-site projects, choose how titles are localized.
- **Default Title Format** — Entry titles can be set by the author or [dynamically defined](#dynamic-entry-titles) from other values via an [object template](docs_5x__system__object-templates.md).
- **Allow line breaks in titles** — Display the title field as a multi-line input, and retain newline characters. Newlines are not rendered in the control panel, and must be decorated in the front-end using the `nl2br` filter or other logic.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Line breaks in titles was first available in version 5.9.0 of Craft.")
- **Show the Slug field** — As with titles, slugs can be manually or automatically generated.
  - **Slug Translation Method** — In multi-site projects, choose how slugs are localized.
- **Show the Status field** — Manually set each entry’s status, or allow it to be dictated by its usage.
- **Field Layout** — Add and arrange [custom fields](docs_5x__system__fields.md) to suit your content model.
- **Generated Fields**  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Generated fields was first available in version 5.8.0 of Craft.") — Create additional [virtual attributes](docs_5x__system__elements.md#generated-fields) on entries of this type from short [object templates](docs_5x__system__object-templates.md).
- **Card Attributes** — Select which attributes and fields appear on [cards](docs_5x__system__elements.md#chips-cards) of this type.

When you’re done configuring an entry type, press **Save** or `Ctrl/Command + S` to apply the changes.

Entry types can be duplicated or cloned by using the **Save** menu’s **Save as new entry type** option.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Duplicating entry types was first available in version 5.8.0 of Craft.")

### [#](#aliases)Aliases [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Entry type aliases was first available in version 5.6.0 of Craft.")

When attaching an entry type to a [section](#sections) or [field](docs_5x__reference__field-types__matrix.md), you can configure a local override for its **Name** and **Handle**. This affects labels in the control panel, but does *not* change how you reference them in queries.

As an example, an *Announcement* entry type could be used in a *News* section and a *Content* Matrix or [CKEditor  (opens new window)](https://plugins.craftcms.com/ckeditor) field; in the *Content* field context, the entry type is given a new **Name** (*Banner*) and handle (`banner`). Authors would then see *Banner* when selecting **New entry** in the CKEditor toolbar, but developers would need to continue using the original, global handle to directly query those nested entries:

```
{% set embeddedAnnouncements = craft.entries()
  .field('pageContent')
  .type('announcement')
  .all() %}
```

However, when *accessing* the entry type via those nested entries (or an entry within a section), the aliases are applied automatically:

```
{% set announcements = craft.entries()
  .type('announcement')
  .all() %}

{% for announcement in announcements %}
  <article>
    <h2>{{ announcement.title }}</h2>
    <span class="type">{{ announcement.type.name }}</span>
    {{ announcement.body|md }}
  </article>
{% endfor %}
```

In this example, `announcement.type.name` might resolve to *Critical Release* in one section, but *New Face* in another—even though we queried for them using the original, global handle. To access the global [craft\models\EntryType  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-entrytype.html), use `entry.type.original`.

This can help improve the legibility of templates, wherein the generic `announcement` handle doesn’t describe how the entry type is actually used:

```
{% for contentBlock in entry.myMatrixField %}
  <div class="content-block content-block--type-{{ contentBlock.type.handle }}">
    {% switch contentBlock.type.handle %}
      {% case 'carousel'}
        {# ... #}
      {% case 'recommended'}
        {# ... #}
      {% case 'banner' %}
        {# Perhaps “Banner” made more sense than “Announcement” in this context, when designing! #}
        <h3>{{ contentBlock.title }}</h3>
        {{ contentBlock.message|md }}
      {% default %}
        {{ contentBlock.render() }}
    {% endswitch %}
  </div>
{% endfor %}
```

### [#](#dynamic-entry-titles)Dynamic Entry Titles

The **Default Title Format** field accepts an [object template](docs_5x__system__object-templates.md) (just like the **Entry URI Format** and preview target **URL Format** we looked, above), and is evaluated whenever entries with this type are saved *without an explicitly-set title*. A title format may be rendered multiple times, depending on the selected **Title Translation Method**.

If you want your entries’ titles to *always* be generated from a template (and disallow authors from providing their own titles), remove the **Title** element from the [field layout](docs_5x__system__fields.md#field-layouts).  [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Default title formats and removable titles was first available in version 5.5.0 of Craft.")

Prior to Craft 5.5.0, this behavior was governed by two settings (**Show the Title field** and **Show the Title field?**), with no intermediate “default” option.

You also have control over the labels used to identify your entries in [chips and cards](docs_5x__system__elements.md#chips-cards), with the **UI Label Format** setting.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Entry type UI label formats was first available in version 5.9.0 of Craft.")

### [#](#translation-settings)Translation Settings

Most localization behavior is determined by [section](#sections) and [field](docs_5x__system__fields.md) settings, but the translation of titles and slugs is governed by entry types.

The available translation methods are covered in the [custom fields documentation](docs_5x__system__fields.md#translation-methods).

## [#](#sections)Sections

Sections organize and expose [entry types](#entry-types) for content authors. In each section you can define the following:

- Whether entries in the section have URLs;
- What the entries’ URLs should look like;
- Which template should get loaded if an entry’s URL is requested;
- What preview targets are available to authors;
- What [entry types](#entry-types) are available in the section;
- How many authors can be associated with each entry (or disable authors  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Authorless sections was first available in version 5.7.0 of Craft."));

If your project has multiple [sites](docs_5x__system__sites.md), your section can define these additional settings:

- Which sites entries in the section should target;
- Which sites entries are created in, by default;

To create a new section, go to

1. Settings→
2. Sections

and choose **New Section**.

### [#](#section-types)Section Types

Craft has three different types of sections:

#### [#](#singles)Singles

![Illustration of Entries layout with “Singles” selected, showing “About Us”, “Contact” and “Home” entries](/docs/assets/img/section-types-singles.f9639bdc.png)

Singles are used for one-off pages or content objects that have unique requirements, such as…

- …a website’s homepage;
- …an *About Us* page;
- …a *Contact Us* page;

Unlike the other section types, singles only ever have *one* entry associated with them, meaning their URIs can be static (like `contact-us`) rather than templatized (like `news/{slug}`).

Singles have all the functionality of [globals](docs_5x__reference__element-types__globals.md), and can even be pre-loaded into global Twig variables with the [preloadSingles](docs_5x__reference__config__general.md#preloadsingles) config setting. As such, singles don’t have an editable **Author**, **Post Date**, or **Expiration Date**.

A single’s **Status** controls can be hidden with the **Show the Status field** setting in its selected **Entry Type**.

#### [#](#channels)Channels

![Illustration of Entries layout with a “Press Releases” channel selected, showing three dated news entries](/docs/assets/img/section-types-channels.b3fa59a9.png)

Channels are used for lists or streams of similar content, such as…

- …posts on a blog;
- …articles in a knowledge base;
- …recipes;
- …reviews;

Entries in channels are intended to be queried and displayed ordered by one or more of their attributes or [custom fields](docs_5x__system__fields.md). Channels are also a simple way to maintain a flat taxonomy, standing in for [tags](docs_5x__reference__element-types__tags.md) or [categories](docs_5x__reference__element-types__categories.md).

#### [#](#structures)Structures

Structures are an extension of channels that support explicit, hierarchical organization.

![Illustration of Entries layout with a “Galleries” structure selected, showing nested building and gallery entries with drag-and-drop handles](/docs/assets/img/section-types-structures.4056a35f.png)

Unlike other section types, structure sections expose a **Structure** view option on their [element indexes](docs_5x__system__elements.md#indexes):

![Illustration of an element index’s “View” options with “Structure” selected.](/docs/assets/img/section-types-structure-view-mode.0b691a91.png)

Types of content that might benefit from being defined as a structure include…

- …documentation;
- …a “Services” section, where the order of services matters;
- …a company organization chart with personnel and teams;
- …editable navigation menus;

Just like channels, entries in structures can be assigned [types](#entry-types). Structures offer great flexibility in presentation—in particular, the ability to collect nested content on a parent page, or alter the appearance of pages based on their hierarchical “depth” within a bundle of content.

Structures have the following additional settings:

Max Levels
:   Decide how many levels deep authors can organize entries.

Default Entry Placement
:   Choose where new entries are placed in the structure. This setting applies when that entry has no parent entry (before or after other “root” entries), *and* when a parent is selected (before or after other entries with the same parent), as well as when an entry is [moved](#moving-entries-between-sections) into the section.  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "Moving entries between sections was first available in version 5.3.0 of Craft.")

Structures can also make use of the **Maintain Hierarchy** setting on [entries fields](docs_5x__reference__field-types__entries.md).

Entries belonging to a structure are discrete from [nested entries](#nested-entries) in [Matrix](docs_5x__reference__field-types__matrix.md) fields. Structure entries can be freely moved around in their hierarchy (receiving new “parent” elements in the process), whereas nested entries are always owned by the element they were created within.

### [#](#entry-uri-formats)Entry URI Formats

Channel and structure sections can choose whether their entries should be given URLs in the system by filling in the **Entry URI Format** setting. Singles also have this setting, but it is typically a static path or omitted (if it doesn’t need its own URL, like a [global set](docs_5x__reference__element-types__globals.md)).

The entry URI format is an [object template](docs_5x__system__object-templates.md), which gets evaluated each time an entry in the section is saved. The result is saved as the entry’s **URI** in the system, and is used to generate URLs (i.e. via `entry.url`) and when Craft is determining how to [route](docs_5x__system__routing.md) a request.

When Craft matches a request to an entry, its section’s designated **Template** is rendered. That template is automatically provided an `entry` variable, set to the resolved [craft\elements\Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object, and ready to output any of its attributes or custom field data.

#### [#](#uri-recipes)URI Recipes

Consider these tips for creating special URIs:

- A URI that evaluates to `__home__` (and nothing more) will be available at your site’s base path (this should only be used for [singles](#singles));
- An empty URI means the entry does not get a route and will not have a public URL—unless you define one manually via `routes.php`;
- Any Twig statement can be used to output values in a URI template—including ones that query for other elements, e.g. `{{ craft.entries().section('mySingle').one().slug }}/news` (see note below);
- [Aliases](docs_5x__configure.md#aliases-and-environment-variables) can be evaluated with the [`alias()` function](docs_5x__reference__twig__functions.md#alias): `{{ alias('@basePressUri') }}/news`, `{{ alias('@mySectionUri') }}`.
- The [null-coalescing operator  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#other-operators) (`??`) can silently swallow undefined variable errors (like `parent.uri`, above);

Elements accessed via the current `object` (like authors or [relational fields](docs_5x__system__relations.md#custom-fields)) will be loaded in the appropriate site, but *new* element queries (like the example above that uses `craft.entries()`), must explicitly use `.site()` or `.siteId()` to load elements in the same site. The current element’s site can always be accessed via `object.site` or `object.siteId`, respectively:

```
{craft.entries().section('mySingle').site(object.site).one().slug}
```

If you only have one site, you can omit this for brevity; similarly, if the resolved value tends to be the same as a value you’re already storing in project config, consider hard-coding it.

**Do not** use element IDs directly in URI formats. They are not a [reliable identifier](docs_5x__system__project-config.md#ids-uuids-and-handles) across environments. For example, keeping channel entries’ URLs synchronized with a [single](#singles) using this format…

```
{craft.entries().id(123).one().slug}/{slug}
```

…may load the correct entry in development, but find a different one on your live site. Use a handle (like the example above) for consistency!

#### [#](#hierarchical-uris)Hierarchical URIs

Structure sections may benefit from nested paths, for child entries:

```
{parent.uri}/{slug}
```

Suppose our structure represents geographic regions on Earth. With the above **Entry URI Format**, a top-level “continent” entry URI might be `south-america`; a nested “country” entry’s URI would then be `south-america/chile`.

Structure sections might also want to include a segment before the nested path:

```
{parent.uri ?? 'earth'}/{slug}
```

The above template could also be expressed with this syntax:

```
{% if level == 1 %}earth{% else %}{parent.uri}{% endif %}/{slug}
```

With the above Entry URI Format, a top-level entry’s URI would be `earth/south-america`, with a nested entry having `earth/south-america/chile`.

#### [#](#nested-entry-urls)Nested Entry URLs

[Nested entries](#nested-entries) in [Matrix fields](docs_5x__reference__field-types__matrix.md) can also be configured to have URLs—but the settings are part of the field, not a section. As a result, entries of a given [type](#entry-types) may have URLs in some contexts, and not in others!

In a nested entry’s URI format, you can access the *owner*’s attributes using `{owner.someAttribute}`:

```
{owner.uri}/steps/{slug}
```

### [#](#preview-targets-team-pro)Preview Targets Team Pro

Section can have one or more **Preview Targets**, or URLs where its entries are expected to be visible. This makes it possible for authors to preview entries as they are writing them in the control panel, or share a private URL with colleagues to view changes prior to publishing.

Like entry URI formats, these preview target URLs are simple Twig templates that can contain entry properties and other dynamic values.

Use single curly braces to render attributes on the entry. For example if entries in your section have their own URLs, then you can create a preview target for the entry’s primary URL using the URL template, `{url}`.

Create additional preview targets for any other areas the entry might show up, such as `news`, or `archive/{postDate|date('Y')}`. If the entries show up on the homepage, you can create a preview target with a blank URL (unlike URI formats, a blank URL *is* valid, here).

![A section’s Preview Targets setting.](/docs/assets/img/preview-targets.754577af.png)

Preview target **URL Formats** support slightly different features than for **URI Formats**:

- If you want to include the entry’s ID or UID in a preview target URL, use `{canonicalId}` or `{canonicalUid}` rather than `{id}` or `{uid}`, so the source entry’s ID or UID is used rather than the [draft](#drafts)’s;
- You can use [environment variables and aliases](docs_5x__configure.md#control-panel-settings) in the preview target URL. These *do not* get wrapped in curly braces on their own, as they are not part of the [object template](docs_5x__system__object-templates.md). Aliases may be part of a longer URI (e.g.`@headlessUrl/news/{slug}`), but environment variables can only be used on their own (e.g. `$NEWS_INDEX`);

When an author is editing an entry from a section with custom preview targets, the **View** button will be replaced with a menu that lists the **Primary entry page** (if the section has an Entry URI Format), plus the names of each preview target.

![An entry’s View menu with 3 custom preview targets.](/docs/assets/img/share-with-targets.29e30863.png)

If you share a link from this menu that includes a preview token, it will expire by default after one day. You can customize this with the [defaultTokenDuration](docs_5x__reference__config__general.md#defaulttokenduration) config setting.

The targets will also be available within **Preview**.

#### [#](#previewing-decoupled-front-ends)Previewing Decoupled Front Ends

If your site’s front end lives outside of Craft (e.g. as a Vue or React app), you can still support previewing drafts and revisions with **Preview** or **Share** buttons. To do that, your front end must check for the existence of a `token` query string parameter (or whatever the [tokenParam](docs_5x__reference__config__general.md#tokenparam) setting is). If it’s in the URL, then you will need to pass that same token in the request that loads the page content. This token will cause the API request to respond with the correct content based on what the token was created to preview.

Nuxt Example

Whether you are using the Element API plugin or the built-in [GraphQL](docs_5x__development__graphql.md) API, Craft automatically injects preview elements whenever they match the query being executed.

To illustrate, suppose you were building a [Nuxt  (opens new window)](https://nuxt.com/) application, and you used the [file-based routing scheme  (opens new window)](https://nuxt.com/docs/getting-started/routing) to render blog posts: you would create `pages/blog/[slug].vue`, then define a preview target in Craft with a similar path, like `@nuxt/blog/{slug}`.

```
<script setup>
const route = useRoute();

// Construct a GraphQL fragment using the route param:
const query = `{
  entry(slug: "${route.params.slug}") {
    title
    description
  }
}`;

// Fetch the incoming token:
const token = route.query.token;

// Build the URL, with `query` and `token` params:
const { data: gql } = await useFetch('https://my-project.ddev.site/api', {
  params: { query, token },
});
</script>

<template>
  <article>
    <h1>{{ gql.data.entry.title }}</h1>
    <code>{{ gql.data.entry.uid }}</code>
  </article>
</template>
```

This assumes you have defined a [GraphQL API route](docs_5x__development__graphql.md#setting-up-your-api-endpoint) of `api`, and that the previewed entry will reliably have (at least) a slug set. When the `token` param is omitted, Nuxt ignores it and the GraphQL API will respond as though it were any other request for an entry with the given slug.

You can pass the token via either a query string parameter named after your [tokenParam](docs_5x__reference__config__general.md#tokenparam) config setting, or an `X-Craft-Token` header.

For live preview, you should also consider [enabling iFrame Resizer](docs_5x__reference__config__general.md#useiframeresizer) so that Craft can maintain the page scroll position between page loads.

### [#](#moving-entries-between-sections)Moving Entries Between Sections [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "Transferring entries between sections was first available in version 5.3.0 of Craft.")

Entries in [channel](#channels) and [structure](#structures) sections can be moved to other sections that support the same [entry type](#entry-types). Use the **Move to…** element action from any entry element index, then select the new section. If the action is disabled, the entry has no suitable targets—you may be able to change its entry type *in-situ*, reconcile any custom field changes, then move it to a compatible section.

When moving an entry, it’s important to note these behaviors:

- If the new section is a structure, the entry will be placed at the root, according to its **Default Entry Placement** setting.
- [Drafts and revisions](docs_5x__system__drafts-revisions.md) will be moved along with the entry and remain accessible, but only drafts that use an entry type that is allowed in the new section can be restored—same as if an entry type were *removed* from a section.
- If the new section has a lower **Max authors** setting, author data will remain intact and produce a validation error when saved.
- Authors who don’t have access to the new section will also be removed, the next time the entry is saved. Permissions are still checked based on the section, not authorship.
- Singles will never appear as targets for moving an entry.

You can also [copy and paste](#copying-entries) entries between compatible sections and [Matrix](docs_5x__reference__field-types__matrix.md) fields.

## [#](#sources)Sources

You can supplement the automatic [sources](docs_5x__system__elements.md#sources) presented in the entries [element index](docs_5x__system__elements.md#indexes) with custom *pages*  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Customizing top-level entry source groups was first available in version 5.9.0 of Craft.") and *sources*.

![The source customization modal, introduced in Craft 5.9.0](/docs/assets/img/entries-customize-sources.aaf7ca92.png)

### [#](#pages)Pages [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Customizing top-level entry source groups was first available in version 5.9.0 of Craft.")

By default, all sources are created inside a single **Entries** page.
You may divide those sources into as many pages as necessary, each with their own label and icon.
Each page is then given a top-level navigation menu item.

Sources can be moved from one page to another by dragging-and-dropping, or using the action menu and selecting one of the **Move to …** options.

### [#](#custom-sources)Custom Sources

In addition to the sources created for each section, you can define any number of additional *custom sources*.
Custom sources list all non-nested entries by default, but can define **Entry Criteria** to hone the index, and set **Default Table Columns** that make sense for the content.
Control panel users can add temporary tweaks using [filters and columns](docs_5x__system__elements.md#filters-and-columns) controls on each index.
Conditions provided this way are *additive*, meaning the base criteria cannot be relaxed.

All users are able to access custom sources, but Craft still enforces section-based permissions for viewing and editing.

Built-in sources are differentiated by the presence of a handle, derived from its [section](#sections) (save for the special **All entries** source).

## [#](#nested-entries)Nested Entries

Entries also power the [Matrix](docs_5x__reference__field-types__matrix.md) and [CKEditor  (opens new window)](https://plugins.craftcms.com/ckeditor) fields, which means your [entry types](#entry-types) can represent entire pages, or the building blocks thereof. How you implement your content model and authoring experience is entirely up to you!

Nested entries are an implementation of nested *elements*, a broader category of “owned” elements that includes [addresses](docs_5x__reference__element-types__addresses.md) and powers Commerce’s product and variant architecture. The [Content Block](docs_5x__reference__field-types__content-block.md) field also stores data in a nested entry.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "The Content Block field was first available in version 5.8.0 of Craft.")

## [#](#editing-entries)Editing Entries

If you have at least one section, there will be an **Entries** menu item in the primary control panel navigation. Clicking on it will take you to the entry [index](docs_5x__system__elements.md#indexes). From there, you can navigate to the entry you wish to edit, or create a new one.

Depending on your section’s settings, can perform some or all of the following actions from any entry’s edit screen:

- Choose the entry type (if there is more than one to choose from);
- Edit the entry’s **Title**, **Slug**, and [custom field](docs_5x__system__fields.md) values;
- Choose the entry’s **Authors** Team Pro;
- Choose the entry’s **Parent** (if it’s within a [Structure](#structures) section);
- Set the entry’s **Post Date** (when it will be considered published);
- Set the entry’s **Expiration Date** (optional);
- Choose whether the entry is **Enabled** or not (globally, and/or per-site);
- Save changes to the entry;
- Save a new [draft](#drafts) of the entry;
- View [revisions](#revisions) of the entry;
- Apply changes from a derivative (draft or revision);

If you leave the **Post Date** blank, Craft will automatically set it the first time an entry is saved as enabled.

[Drafts & Revisions
→

Propose and track changes to your content with powerful workflow tools.](docs_5x__system__drafts-revisions.md)

### [#](#entry-creation)Entry Creation

As soon as you click **New entry**, Craft creates an empty entry, and redirects you to its edit screen. This gives the system a place to auto-save your edits—effectively a new entry represented only as a [draft](#drafts). Internally, this is called a “fresh” entry.

Once you add some content to a fresh entry (or explicitly choose **Save draft** from the **Create entry** menu), Craft marks the draft as having been saved, and will expose it in element indexes when using the **All** or **Draft** status options.

Stray drafts (those that were created but never edited or explicitly saved) are automatically [garbage-collected](docs_5x__system__gc.md), respecting the [purgeUnsavedDraftsDuration](docs_5x__reference__config__general.md#purgeunsaveddraftsduration) setting.

The entry editing lifecycle is designed to provide authors clear, actionable information about the state of their content, and to prevent unintended loss. Let’s look more closely at a few supporting features.

### [#](#drafts)Drafts

As soon as you alter a field on an entry, Craft auto-saves the changes as a [provisional draft](docs_5x__system__drafts-revisions.md#provisional-drafts).

![Screenshot of an entry with unsaved changes](/docs/assets/img/entries-edit-provisional.c687e1f4.png)

Subsequent edits are also saved to your provisional draft, and made available any time you view that entry in the control panel. Each user gets their own provisional draft, so your changes are private.

Pressing the **Save** button applies changes from a provisional draft to its *canonical* entry, and creates a *revision* (if its section supports revisions).

If you aren’t ready to publish your changes, you can instead press **Create a Draft** to save your work as a new *draft*. You may have as many regular drafts as you wish—and those drafts can have their own name and notes to help you track what you’re working on. The name of your current draft (if any) is shown at the top of the edit screen in the [revision](#revisions) menu.

Your drafts may be visible to (and editable by) other users! While an auto-saved *provisional* draft is always private, the visibility of *saved* drafts is governed by users’ [permissions for the entry’s section](docs_5x__system__user-management.md#permissions).

While Craft’s auto-saving behavior creates a provisional draft from the canonical entry, edits to an existing, explicitly-saved draft are saved directly to that draft—in other words, Craft doesn’t create drafts for another draft!

When your edits are ready to be published, press **Apply draft** to merge the changes into the canonical entry.

### [#](#revisions)Revisions

Any time you apply a draft (provisional or otherwise) to the canonical entry, Craft creates a *revision*. Revisions track which fields and attributes changed each time the canonical entry is updated, and provide a means to revert to previous versions of an entry. Drafts and revisions both have a `creator` property that stores what user initiated the update separately from the “author.”

The revision menu only displays the ten most recent revisions. Older revisions are available via the **View all revisions →** link at the bottom of the menu.

Any time a revision is created, Craft pushes a job into the [queue](docs_5x__system__queue.md) to ensure the oldest one(s) are pruned (if there are more revisions than allowed by the [maxRevisions](docs_5x__reference__config__general.md#maxrevisions) setting).

#### [#](#querying-for-revisions)Querying for Revisions

You can [find](#querying-entries) drafts and revisions of a specific entry using the [draftOf()](#draftof) and [revisionOf()](#revisionof) query params.

### [#](#trash)Trash

All [elements](docs_5x__system__elements.md) support *soft-deletion*. When you delete an entry, its `dateDeleted` property is set to the current time, and Craft excludes it from results—unless the [`trashed` query param](#trashed) is used. Similarly, when restoring a deleted entry, its `dateDeleted` is set to `null`.

Entries remain in the “trashed” state until they are manually hard-deleted from the control panel or their `dateDeleted` is longer ago than the [softDeleteDuration](docs_5x__reference__config__general.md#softdeleteduration) setting when [garbage collection](docs_5x__system__gc.md) runs.

**The trash should not be used to temporarily remove content from your site.** Restoring trashed entries is only intended as a means to recover inadvertently-deleted content—instead, use the global or site-specific **Enabled** settings. Entries can remain disabled indefinitely.

### [#](#activity)Activity

Craft keeps track of user activity on entries, and will push presence pips and notifications to anyone working with drafts of the same entry.

my-craft-project.ddev.site/admin/entries/blog/247

![Screenshot of the entry edit screen with other active users](/docs/assets/img/entries-edit-activity.58abee9d.png)

Other users editing the same entry will appear in the page header. TJ has corrected the page title in a draft.

Notifications will appear in the bottom-left corner along with other flashes, and prompt you to reload the entry if it has changed since you opened it. This can play out in a couple ways:

- If another user applied a draft to the canonical entry while you were working on a provisional draft, Craft will merge all non-conflicting edits into your provisional draft. In situations where you both made changes to a field, Craft keeps your changes.
- If only the other user made a change, the page simply refreshes to show the new canonical entry content.

Automatic merging of changes from canonical entries is nondestructive, and non-optional. Merging occurs just before an entry’s edit screen is viewed.

### [#](#copying-entries)Copying Entries [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Copying entries was first available in version 5.7.0 of Craft.")

Entries can be copied and pasted between sections and fields that support the given type(s).

[Copying Elements
→

Learn how to copy entries and other elements between contexts.](docs_5x__system__elements.md#copying-elements)

## [#](#statuses)Statuses

In addition to the [base element statuses](docs_5x__system__elements.md#statuses), entries may appear in any of these states:

- **Pending** (`pending`) — The **Post Date** is in the future, or not set.
- **Expired** (`expired`) — The **Expiry Date** is set, and in the past.
- **Live** (`live`) — The **Post Date** is in the past, and the **Expiry Date** is in the future (if set at all). This is the default status used in entry queries.

Status pips and controls may be hidden from element edit screes, indexes, chips, and cards, if an entry’s type has the **Show the Status field** setting *off*.

When [querying entries by status](docs_5x__system__elements.md#querying-by-status), keep in mind that each status identifier in the list above represents multiple conditions. Statuses and their default query conditions help make the appearance or availability of entries consistent between the control panel and front-end; for this reason, params like `.postDate()` and `.expiryDate()` introduce *additional* constraints, rather than replacing Craft’s. If you need full control over the query constraints, call `.status(null)`.

### [#](#static-statuses)Static Statuses [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Static storage of entry statuses was first available in version 5.7.0 of Craft.")

Craft’s powerful [events](docs_5x__extend__events.md) system allows developers to react to element updates, and connect author activity and content to other systems. Statuses, however, can be difficult to pin down—entries rely heavily on their **Post Date** and **Expiry Date** attributes to determine when an entry is returned, and what its “status” is at any given time.

Take this query that fetches blog articles:

```
{% set posts = craft.entries()
  .section('blog')
  .all() %}
```

Suppose we have an article with a **Post Date** five minutes in the future. Loading the page with this query *now* would not display the pending article; if we wait five minutes and refresh the page, the entry *does* show up… without any intervention by the author! This is because each query compares the server’s current time with entries’ stored `postDate` and `expiryDate` columns; depending on when you look at the data, Craft considers it to be in different statuses. Therein lies the issue: nothing *happens* when a pending entry “goes live” (or a live entry “expires”), so Craft can’t emit status-change events.

The [staticStatuses](docs_5x__reference__config__general.md#staticstatuses) config setting alters this behavior: instead of calculating statuses on-the-fly, Craft stores a static representation of an entry’s status at the time it is saved. Entry queries also use simplified conditions, matching against the stored values instead of date-based comparisons. In this mode, however, entries’ statuses only change when they are saved. The accompanying [`update-statuses` console command](docs_5x__reference__cli.md#update-statuses) provides a means of routinely checking and re-saving entries:

```
ddev craft update-statuses
```

If you opt in to static statuses, you must run this command with a tool like [cron  (opens new window)](https://en.wikipedia.org/wiki/Cron) to ensure your content is published and expired in a reasonable amount of time.

In a [private plugin](docs_5x__extend__plugin-guide.md) or [custom module](docs_5x__extend__module-guide.md), you can [listen for save events  (opens new window)](https://craftcms.com/knowledge-base/handling-entry-saves) and check whether an entry received a new status:

```
use craft\base\Event;
use craft\elements\Entry;
use craft\events\ModelEvent;
use craft\helpers\ElementHelper;

Event::on(
    Entry::class,
    Entry::EVENT_AFTER_SAVE,
    function (ModelEvent $event) {
        /** @var Entry $entry */
        $entry = $event->sender;

        // Make sure we’re dealing with a canonical entry, and that there was indeed a status change:
        if (
            !ElementHelper::isDraftOrRevision($entry) &&
            $entry->getStatus() !== $entry->oldStatus
        ) {
            if ($entry->getStatus() === Entry::STATUS_LIVE) {
                // The entry just moved into the "live" status!
            } elseif ($entry->oldStatus === Entry::STATUS_LIVE) {
                // The entry *was* live, but isn’t any more!
            }
        }
    });
```

Depending on your editorial process, you will need to adjust the cases here to handle different transitions. Keep in mind that this handler may also run in response to normal entry saves (during an HTTP request) so it is advisable to offload any time- or resource-intensive operations to a [queue job](docs_5x__extend__queue-jobs.md).

## [#](#querying-entries)Querying Entries

When Craft receives a request matching an entry’s URI, it automatically makes an `entry` variable available. Everywhere else in your front-end (or PHP code), you can fetch entries using **entry queries**.

TwigPHP

```
{# Create a new entry query #}
{% set myEntryQuery = craft.entries() %}
```

```
// Create a new entry query
$myEntryQuery = \craft\elements\Entry::find();
```

Once you’ve created an entry query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](docs_5x__development__element-queries.md#executing-element-queries) by calling `.one()` or `.all()` to return a single [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object or an array of them, respectively.

Nested entries *may* show up unexpectedly in some entry queries—particularly those that don’t filter by `.section()`. If you want to return only entries *without* owners, you can use `.section('*')`.  [5.2.0+](https://github.com/craftcms/cms/blob/5.2.0/CHANGELOG.md "Querying for non-nested entries with the special “section wildcard” was first available in version 5.2.0 of Craft.")

[Introduction to Element Queries
→

Learn more about how element queries work.](docs_5x__development__element-queries.md)

### [#](#example)Example

We can display the 10 most recent entries in a “Blog” section by doing the following:

1. Create an entry query with `craft.entries()`.
2. Set the [section](#section) and [limit](#limit) parameters on it.
3. Fetch the entries with `.all()`.
4. Loop through the entries using a [for  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to output the blog post HTML.

```
{# Create an entry query with the 'section' and 'limit' parameters #}
{% set myEntryQuery = craft.entries()
  .section('blog')
  .limit(10) %}

{# Fetch the entries #}
{% set entries = myEntryQuery.all() %}

{# Display the entries #}
{% for entry in entries %}
  <article>
    <h1><a href="{{ entry.url }}">{{ entry.title }}</a></h1>
    {{ entry.summary }}
    <a href="{{ entry.url }}">Continue reading</a>
  </article>
{% endfor %}
```

### [#](#parameters)Parameters

Entry queries support the following parameters:

| Param | Description |
| --- | --- |
| [after](#after) | Narrows the query results to only entries that were posted on or after a certain date. |
| [allowOwnerDrafts](#allowownerdrafts) | Narrows the query results based on whether the entries’ owners are drafts. |
| [allowOwnerRevisions](#allowownerrevisions) | Narrows the query results based on whether the entries’ owners are revisions. |
| [ancestorDist](#ancestordist) | Narrows the query results to only entries that are up to a certain distance away from the entry specified by [ancestorOf](#ancestorof). |
| [ancestorOf](#ancestorof) | Narrows the query results to only entries that are ancestors of another entry in its structure. |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only entries that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only entries that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching entries eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching entries as arrays of data, rather than [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) objects. |
| [authorGroup](#authorgroup) | Narrows the query results based on the user group the entries’ authors belong to. |
| [authorGroupId](#authorgroupid) | Narrows the query results based on the user group the entries’ authors belong to, per the groups’ IDs. |
| [authorId](#authorid) | Narrows the query results based on the entries’ author ID(s). |
| [before](#before) | Narrows the query results to only entries that were posted before a certain date. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCreated](#datecreated) | Narrows the query results based on the entries’ creation dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the entries’ last-updated dates. |
| [descendantDist](#descendantdist) | Narrows the query results to only entries that are up to a certain distance away from the entry specified by [descendantOf](#descendantof). |
| [descendantOf](#descendantof) | Narrows the query results to only entries that are descendants of another entry in its structure. |
| [draftCreator](#draftcreator) | Narrows the query results to only drafts created by a given user. |
| [draftId](#draftid) | Narrows the query results based on the entries’ draft’s ID (from the `drafts` table). |
| [draftOf](#draftof) | Narrows the query results to only drafts of a given entry. |
| [drafts](#drafts) | Narrows the query results to only drafts entries. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [expiryDate](#expirydate) | Narrows the query results based on the entries’ expiry dates. |
| [field](#field) | Narrows the query results based on the field the entries are contained by. |
| [fieldId](#fieldid) | Narrows the query results based on the field the entries are contained by, per the fields’ IDs. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [hasDescendants](#hasdescendants) | Narrows the query results based on whether the entries have any descendants in their structure. |
| [id](#id) | Narrows the query results based on the entries’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching entries as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only entries that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [language](#language) | Determines which site(s) the entries should be queried in, based on their language. |
| [leaves](#leaves) | Narrows the query results based on whether the entries are “leaves” (entries with no descendants). |
| [level](#level) | Narrows the query results based on the entries’ level within the structure. |
| [limit](#limit) | Determines the number of entries that should be returned. |
| [nextSiblingOf](#nextsiblingof) | Narrows the query results to only the entry that comes immediately after another entry in its structure. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only entries that are not related to certain other elements. |
| [offset](#offset) | Determines how many entries should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the entries should be returned in. (If empty, defaults to `postDate DESC, elements.id`, or the order defined by the section if the [section](#section) or [sectionId](#sectionid) params are set to a single Structure section.) |
| [owner](#owner) | Sets the [ownerId](#ownerid) and [siteId](#siteid) parameters based on a given element. |
| [ownerId](#ownerid) | Narrows the query results based on the owner element of the entries, per the owners’ IDs. |
| [positionedAfter](#positionedafter) | Narrows the query results to only entries that are positioned after another entry in its structure. |
| [positionedBefore](#positionedbefore) | Narrows the query results to only entries that are positioned before another entry in its structure. |
| [postDate](#postdate) | Narrows the query results based on the entries’ post dates. |
| [preferSites](#prefersites) | If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [prevSiblingOf](#prevsiblingof) | Narrows the query results to only the entry that comes immediately before another entry in its structure. |
| [primaryOwner](#primaryowner) | Sets the [primaryOwnerId](#primaryownerid) and [siteId](#siteid) parameters based on a given element. |
| [primaryOwnerId](#primaryownerid) | Narrows the query results based on the primary owner element of the entries, per the owners’ IDs. |
| [provisionalDrafts](#provisionaldrafts) | Narrows the query results to only provisional drafts. |
| [relatedTo](#relatedto) | Narrows the query results to only entries that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [revisionCreator](#revisioncreator) | Narrows the query results to only revisions created by a given user. |
| [revisionId](#revisionid) | Narrows the query results based on the entries’ revision’s ID (from the `revisions` table). |
| [revisionOf](#revisionof) | Narrows the query results to only revisions of a given entry. |
| [revisions](#revisions) | Narrows the query results to only revision entries. |
| [savable](#savable) | Sets the [savable  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-entryquery.html#property-savable) property. |
| [savedDraftsOnly](#saveddraftsonly) | Narrows the query results to only unpublished drafts which have been saved after initial creation. |
| [search](#search) | Narrows the query results to only entries that match a search query. |
| [section](#section) | Narrows the query results based on the sections the entries belong to. |
| [sectionId](#sectionid) | Narrows the query results based on the sections the entries belong to, per the sections’ IDs. |
| [siblingOf](#siblingof) | Narrows the query results to only entries that are siblings of another entry in its structure. |
| [site](#site) | Determines which site(s) the entries should be queried in. |
| [siteId](#siteid) | Determines which site(s) the entries should be queried in, per the site’s ID. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the entries’ IDs in the `elements_sites` table. |
| [slug](#slug) | Narrows the query results based on the entries’ slugs. |
| [status](#status) | Narrows the query results based on the entries’ statuses. |
| [title](#title) | Narrows the query results based on the entries’ titles. |
| [trashed](#trashed) | Narrows the query results to only entries that have been soft-deleted. |
| [type](#type) | Narrows the query results based on the entries’ entry types. |
| [typeId](#typeid) | Narrows the query results based on the entries’ entry types, per the types’ IDs. |
| [uid](#uid) | Narrows the query results based on the entries’ UIDs. |
| [unique](#unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [uri](#uri) | Narrows the query results based on the entries’ URIs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching entries eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#after)`after`

Narrows the query results to only entries that were posted on or after a certain date.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'2018-04-01'` | that were posted on or after 2018-04-01. |
| a [DateTime  (opens new window)](https://php.net/class.datetime) object | that were posted on or after the date represented by the object. |
| `now`/`today`/`tomorrow`/`yesterday` | that were posted on or after midnight of the specified relative date. |

TwigPHP

```
{# Fetch entries posted this month #}
{% set firstDayOfMonth = date('first day of this month') %}

{% set entries = craft.entries()
  .after(firstDayOfMonth)
  .all() %}
```

```
// Fetch entries posted this month
$firstDayOfMonth = new \DateTime('first day of this month');

$entries = \craft\elements\Entry::find()
    ->after($firstDayOfMonth)
    ->all();
```

#### [#](#allowownerdrafts)`allowOwnerDrafts`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-allowownerdrafts)

Narrows the query results based on whether the entries’ owners are drafts.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `true` | which can belong to a draft. |
| `false` | which cannot belong to a draft. |

#### [#](#allowownerrevisions)`allowOwnerRevisions`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-allowownerrevisions)

Narrows the query results based on whether the entries’ owners are revisions.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `true` | which can belong to a revision. |
| `false` | which cannot belong to a revision. |

#### [#](#ancestordist)`ancestorDist`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ancestordist)

Narrows the query results to only entries that are up to a certain distance away from the entry specified by [ancestorOf](#ancestorof).

TwigPHP

```
{# Fetch entries above this one #}
{% set entries = craft.entries()
  .ancestorOf(myEntry)
  .ancestorDist(3)
  .all() %}
```

```
// Fetch entries above this one
$entries = \craft\elements\Entry::find()
    ->ancestorOf($myEntry)
    ->ancestorDist(3)
    ->all();
```

#### [#](#ancestorof)`ancestorOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ancestorof)

Narrows the query results to only entries that are ancestors of another entry in its structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | above the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | above the entry represented by the object. |

TwigPHP

```
{# Fetch entries above this one #}
{% set entries = craft.entries()
  .ancestorOf(myEntry)
  .all() %}
```

```
// Fetch entries above this one
$entries = \craft\elements\Entry::find()
    ->ancestorOf($myEntry)
    ->all();
```

This can be combined with [ancestorDist](#ancestordist) if you want to limit how far away the ancestor entries can be.

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only entries that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all entries that are related to myCategoryA and not myCategoryB #}
{% set entries = craft.entries()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all entries that are related to $myCategoryA and not $myCategoryB
$entries = \craft\elements\Entry::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only entries that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all entries that are related to myCategoryA and myCategoryB #}
{% set entries = craft.entries()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all entries that are related to $myCategoryA and $myCategoryB
$entries = \craft\elements\Entry::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching entries eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching entries as arrays of data, rather than [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) objects.

TwigPHP

```
{# Fetch entries as arrays #}
{% set entries = craft.entries()
  .asArray()
  .all() %}
```

```
// Fetch entries as arrays
$entries = \craft\elements\Entry::find()
    ->asArray()
    ->all();
```

#### [#](#authorgroup)`authorGroup`

Narrows the query results based on the user group the entries’ authors belong to.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | with an author in a group with a handle of `foo`. |
| `'not foo'` | not with an author in a group with a handle of `foo`. |
| `['foo', 'bar']` | with an author in a group with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not with an author in a group with a handle of `foo` or `bar`. |
| a [UserGroup  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-usergroup.html) object | with an author in a group represented by the object. |
| an array of [UserGroup  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-usergroup.html) objects | with an author in a group represented by the objects. |

TwigPHP

```
{# Fetch entries with an author in the Foo user group #}
{% set entries = craft.entries()
  .authorGroup('foo')
  .all() %}
```

```
// Fetch entries with an author in the Foo user group
$entries = \craft\elements\Entry::find()
    ->authorGroup('foo')
    ->all();
```

#### [#](#authorgroupid)`authorGroupId`

Narrows the query results based on the user group the entries’ authors belong to, per the groups’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | with an author in a group with an ID of 1. |
| `'not 1'` | not with an author in a group with an ID of 1. |
| `[1, 2]` | with an author in a group with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an author in a group with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries with an author in a group with an ID of 1 #}
{% set entries = craft.entries()
  .authorGroupId(1)
  .all() %}
```

```
// Fetch entries with an author in a group with an ID of 1
$entries = \craft\elements\Entry::find()
    ->authorGroupId(1)
    ->all();
```

#### [#](#authorid)`authorId`

Narrows the query results based on the entries’ author ID(s).

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | with an author with an ID of 1. |
| `'not 1'` | not with an author with an ID of 1. |
| `[1, 2]` | with an author with an ID of 1 or 2. |
| `['and', 1, 2]` | with authors with IDs of 1 and 2. |
| `['not', 1, 2]` | not with an author with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries with an author with an ID of 1 #}
{% set entries = craft.entries()
  .authorId(1)
  .all() %}
```

```
// Fetch entries with an author with an ID of 1
$entries = \craft\elements\Entry::find()
    ->authorId(1)
    ->all();
```

#### [#](#before)`before`

Narrows the query results to only entries that were posted before a certain date.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'2018-04-01'` | that were posted before 2018-04-01. |
| a [DateTime  (opens new window)](https://php.net/class.datetime) object | that were posted before the date represented by the object. |
| `now`/`today`/`tomorrow`/`yesterday` | that were posted before midnight of specified relative date. |

TwigPHP

```
{# Fetch entries posted before this month #}
{% set firstDayOfMonth = date('first day of this month') %}

{% set entries = craft.entries()
  .before(firstDayOfMonth)
  .all() %}
```

```
// Fetch entries posted before this month
$firstDayOfMonth = new \DateTime('first day of this month');

$entries = \craft\elements\Entry::find()
    ->before($firstDayOfMonth)
    ->all();
```

#### [#](#cache)`cache`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-cache)

Enables query cache for this Query.

#### [#](#canonicalsonly)`canonicalsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-canonicalsonly)

Narrows the query results to only canonical elements, including elements
that reference another canonical element via `canonicalId` so long as they
aren’t a draft.

Unpublished drafts can be included as well if `drafts(null)` and
`draftOf(false)` are also passed.

#### [#](#clearcachedresult)`clearCachedResult`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-clearcachedresult)

Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the entries’ creation dates.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch entries created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set entries = craft.entries()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch entries created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$entries = \craft\elements\Entry::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the entries’ last-updated dates.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch entries updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set entries = craft.entries()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch entries updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$entries = \craft\elements\Entry::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#descendantdist)`descendantDist`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-descendantdist)

Narrows the query results to only entries that are up to a certain distance away from the entry specified by [descendantOf](#descendantof).

TwigPHP

```
{# Fetch entries below this one #}
{% set entries = craft.entries()
  .descendantOf(myEntry)
  .descendantDist(3)
  .all() %}
```

```
// Fetch entries below this one
$entries = \craft\elements\Entry::find()
    ->descendantOf($myEntry)
    ->descendantDist(3)
    ->all();
```

#### [#](#descendantof)`descendantOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-descendantof)

Narrows the query results to only entries that are descendants of another entry in its structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | below the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | below the entry represented by the object. |

TwigPHP

```
{# Fetch entries below this one #}
{% set entries = craft.entries()
  .descendantOf(myEntry)
  .all() %}
```

```
// Fetch entries below this one
$entries = \craft\elements\Entry::find()
    ->descendantOf($myEntry)
    ->all();
```

This can be combined with [descendantDist](#descendantdist) if you want to limit how far away the descendant entries can be.

#### [#](#draftcreator)`draftCreator`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-draftcreator)

Narrows the query results to only drafts created by a given user.

Possible values include:

| Value | Fetches drafts… |
| --- | --- |
| `1` | created by the user with an ID of 1. |
| a [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | created by the user represented by the object. |

TwigPHP

```
{# Fetch drafts by the current user #}
{% set entries = craft.entries()
  .draftCreator(currentUser)
  .all() %}
```

```
// Fetch drafts by the current user
$entries = \craft\elements\Entry::find()
    ->draftCreator(Craft::$app->user->identity)
    ->all();
```

#### [#](#draftid)`draftId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-draftid)

Narrows the query results based on the entries’ draft’s ID (from the `drafts` table).

Possible values include:

| Value | Fetches drafts… |
| --- | --- |
| `1` | for the draft with an ID of 1. |

TwigPHP

```
{# Fetch a draft #}
{% set entries = craft.entries()
  .draftId(10)
  .all() %}
```

```
// Fetch a draft
$entries = \craft\elements\Entry::find()
    ->draftId(10)
    ->all();
```

#### [#](#draftof)`draftOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-draftof)

Narrows the query results to only drafts of a given entry.

Possible values include:

| Value | Fetches drafts… |
| --- | --- |
| `1` | for the entry with an ID of 1. |
| `[1, 2]` | for the entries with an ID of 1 or 2. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | for the entry represented by the object. |
| an array of [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) objects | for the entries represented by the objects. |
| `'*'` | for any entry |
| `false` | that aren’t associated with a published entry |

TwigPHP

```
{# Fetch drafts of the entry #}
{% set entries = craft.entries()
  .draftOf(myEntry)
  .all() %}
```

```
// Fetch drafts of the entry
$entries = \craft\elements\Entry::find()
    ->draftOf($myEntry)
    ->all();
```

#### [#](#drafts-2)`drafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-drafts)

Narrows the query results to only drafts entries.

TwigPHP

```
{# Fetch a draft entry #}
{% set entries = craft.entries()
  .drafts()
  .id(123)
  .one() %}
```

```
// Fetch a draft entry
$entries = \craft\elements\Entry::find()
    ->drafts()
    ->id(123)
    ->one();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#expirydate)`expiryDate`

Narrows the query results based on the entries’ expiry dates.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `':empty:'` | that don’t have an expiry date. |
| `':notempty:'` | that have an expiry date. |
| `'>= 2020-04-01'` | that will expire on or after 2020-04-01. |
| `'< 2020-05-01'` | that will expire before 2020-05-01 |
| `['and', '>= 2020-04-04', '< 2020-05-01']` | that will expire between 2020-04-01 and 2020-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that expire at midnight of the specified relative date. |

TwigPHP

```
{# Fetch entries expiring this month #}
{% set nextMonth = date('first day of next month')|atom %}

{% set entries = craft.entries()
  .expiryDate("< #{nextMonth}")
  .all() %}
```

```
// Fetch entries expiring this month
$nextMonth = (new \DateTime('first day of next month'))->format(\DateTime::ATOM);

$entries = \craft\elements\Entry::find()
    ->expiryDate("< {$nextMonth}")
    ->all();
```

#### [#](#field)`field`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-field)

Narrows the query results based on the field the entries are contained by.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | in a field with a handle of `foo`. |
| `['foo', 'bar']` | in a field with a handle of `foo` or `bar`. |
| a `\craft\elements\db\craft\fields\Matrix` object | in a field represented by the object. |

TwigPHP

```
{# Fetch entries in the Foo field #}
{% set entries = craft.entries()
  .field('foo')
  .all() %}
```

```
// Fetch entries in the Foo field
$entries = \craft\elements\Entry::find()
    ->field('foo')
    ->all();
```

#### [#](#fieldid)`fieldId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-fieldid)

Narrows the query results based on the field the entries are contained by, per the fields’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | in a field with an ID of 1. |
| `'not 1'` | not in a field with an ID of 1. |
| `[1, 2]` | in a field with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a field with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries in the field with an ID of 1 #}
{% set entries = craft.entries()
  .fieldId(1)
  .all() %}
```

```
// Fetch entries in the field with an ID of 1
$entries = \craft\elements\Entry::find()
    ->fieldId(1)
    ->all();
```

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch entries in a specific order #}
{% set entries = craft.entries()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch entries in a specific order
$entries = \craft\elements\Entry::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#hasdescendants)`hasDescendants`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-hasdescendants)

Narrows the query results based on whether the entries have any descendants in their structure.

(This has the opposite effect of calling [leaves](#leaves).)

TwigPHP

```
{# Fetch entries that have descendants #}
{% set entries = craft.entries()
  .hasDescendants()
  .all() %}
```

```
// Fetch entries that have descendants
$entries = \craft\elements\Entry::find()
    ->hasDescendants()
    ->all();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the entries’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the entry by its ID #}
{% set entry = craft.entries()
  .id(1)
  .one() %}
```

```
// Fetch the entry by its ID
$entry = \craft\elements\Entry::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching entries as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only entries that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch entries in reverse #}
{% set entries = craft.entries()
  .inReverse()
  .all() %}
```

```
// Fetch entries in reverse
$entries = \craft\elements\Entry::find()
    ->inReverse()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the entries should be queried in, based on their language.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch entries from English sites #}
{% set entries = craft.entries()
  .language('en')
  .all() %}
```

```
// Fetch entries from English sites
$entries = \craft\elements\Entry::find()
    ->language('en')
    ->all();
```

#### [#](#leaves)`leaves`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-leaves)

Narrows the query results based on whether the entries are “leaves” (entries with no descendants).

(This has the opposite effect of calling [hasDescendants](#hasdescendants).)

TwigPHP

```
{# Fetch entries that have no descendants #}
{% set entries = craft.entries()
  .leaves()
  .all() %}
```

```
// Fetch entries that have no descendants
$entries = \craft\elements\Entry::find()
    ->leaves()
    ->all();
```

#### [#](#level)`level`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-level)

Narrows the query results based on the entries’ level within the structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | with a level of 1. |
| `'not 1'` | not with a level of 1. |
| `'>= 3'` | with a level greater than or equal to 3. |
| `[1, 2]` | with a level of 1 or 2. |
| `[null, 1]` | without a level, or a level of 1. |
| `['not', 1, 2]` | not with level of 1 or 2. |

TwigPHP

```
{# Fetch entries positioned at level 3 or above #}
{% set entries = craft.entries()
  .level('>= 3')
  .all() %}
```

```
// Fetch entries positioned at level 3 or above
$entries = \craft\elements\Entry::find()
    ->level('>= 3')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of entries that should be returned.

TwigPHP

```
{# Fetch up to 10 entries  #}
{% set entries = craft.entries()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 entries
$entries = \craft\elements\Entry::find()
    ->limit(10)
    ->all();
```

#### [#](#nextsiblingof)`nextSiblingOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-nextsiblingof)

Narrows the query results to only the entry that comes immediately after another entry in its structure.

Possible values include:

| Value | Fetches the entry… |
| --- | --- |
| `1` | after the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | after the entry represented by the object. |

TwigPHP

```
{# Fetch the next entry #}
{% set entry = craft.entries()
  .nextSiblingOf(myEntry)
  .one() %}
```

```
// Fetch the next entry
$entry = \craft\elements\Entry::find()
    ->nextSiblingOf($myEntry)
    ->one();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only entries that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all entries that are related to myEntry #}
{% set entries = craft.entries()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all entries that are related to $myEntry
$entries = \craft\elements\Entry::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many entries should be skipped in the results.

TwigPHP

```
{# Fetch all entries except for the first 3 #}
{% set entries = craft.entries()
  .offset(3)
  .all() %}
```

```
// Fetch all entries except for the first 3
$entries = \craft\elements\Entry::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the entries should be returned in. (If empty, defaults to `postDate DESC, elements.id`, or the order defined by the section if the [section](#section) or [sectionId](#sectionid) params are set to a single Structure section.)

TwigPHP

```
{# Fetch all entries in order of date created #}
{% set entries = craft.entries()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all entries in order of date created
$entries = \craft\elements\Entry::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#owner)`owner`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-owner)

Sets the [ownerId](#ownerid) and [siteId](#siteid) parameters based on a given element.

TwigPHP

```
{# Fetch entries created for this entry #}
{% set entries = craft.entries()
  .owner(myEntry)
  .all() %}
```

```
// Fetch entries created for this entry
$entries = \craft\elements\Entry::find()
    ->owner($myEntry)
    ->all();
```

#### [#](#ownerid)`ownerId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-ownerid)

Narrows the query results based on the owner element of the entries, per the owners’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | created for an element with an ID of 1. |
| `[1, 2]` | created for an element with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries created for an element with an ID of 1 #}
{% set entries = craft.entries()
  .ownerId(1)
  .all() %}
```

```
// Fetch entries created for an element with an ID of 1
$entries = \craft\elements\Entry::find()
    ->ownerId(1)
    ->all();
```

#### [#](#positionedafter)`positionedAfter`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-positionedafter)

Narrows the query results to only entries that are positioned after another entry in its structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | after the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | after the entry represented by the object. |

TwigPHP

```
{# Fetch entries after this one #}
{% set entries = craft.entries()
  .positionedAfter(myEntry)
  .all() %}
```

```
// Fetch entries after this one
$entries = \craft\elements\Entry::find()
    ->positionedAfter($myEntry)
    ->all();
```

#### [#](#positionedbefore)`positionedBefore`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-positionedbefore)

Narrows the query results to only entries that are positioned before another entry in its structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | before the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | before the entry represented by the object. |

TwigPHP

```
{# Fetch entries before this one #}
{% set entries = craft.entries()
  .positionedBefore(myEntry)
  .all() %}
```

```
// Fetch entries before this one
$entries = \craft\elements\Entry::find()
    ->positionedBefore($myEntry)
    ->all();
```

#### [#](#postdate)`postDate`

Narrows the query results based on the entries’ post dates.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'>= 2018-04-01'` | that were posted on or after 2018-04-01. |
| `'< 2018-05-01'` | that were posted before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were posted between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were posted at midnight of the specified relative date. |

TwigPHP

```
{# Fetch entries posted last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set entries = craft.entries()
  .postDate(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch entries posted last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$entries = \craft\elements\Entry::find()
    ->postDate(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique entries from Site A, or Site B if they don’t exist in Site A #}
{% set entries = craft.entries()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique entries from Site A, or Site B if they don’t exist in Site A
$entries = \craft\elements\Entry::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#prepforeagerloading)`prepForEagerLoading`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prepforeagerloading)

Prepares the query for lazy eager loading.

#### [#](#preparesubquery)`prepareSubquery`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-preparesubquery)

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#prevsiblingof)`prevSiblingOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prevsiblingof)

Narrows the query results to only the entry that comes immediately before another entry in its structure.

Possible values include:

| Value | Fetches the entry… |
| --- | --- |
| `1` | before the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | before the entry represented by the object. |

TwigPHP

```
{# Fetch the previous entry #}
{% set entry = craft.entries()
  .prevSiblingOf(myEntry)
  .one() %}
```

```
// Fetch the previous entry
$entry = \craft\elements\Entry::find()
    ->prevSiblingOf($myEntry)
    ->one();
```

#### [#](#primaryowner)`primaryOwner`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-primaryowner)

Sets the [primaryOwnerId](#primaryownerid) and [siteId](#siteid) parameters based on a given element.

TwigPHP

```
{# Fetch entries created for this entry #}
{% set entries = craft.entries()
  .primaryOwner(myEntry)
  .all() %}
```

```
// Fetch entries created for this entry
$entries = \craft\elements\Entry::find()
    ->primaryOwner($myEntry)
    ->all();
```

#### [#](#primaryownerid)`primaryOwnerId`

[Defined by `craft\elements\db\NestedElementQueryTrait`](https://docs.craftcms.com/api/v5/craft-elements-db-nestedelementquerytrait.html#method-primaryownerid)

Narrows the query results based on the primary owner element of the entries, per the owners’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | created for an element with an ID of 1. |
| `[1, 2]` | created for an element with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries created for an element with an ID of 1 #}
{% set entries = craft.entries()
  .primaryOwnerId(1)
  .all() %}
```

```
// Fetch entries created for an element with an ID of 1
$entries = \craft\elements\Entry::find()
    ->primaryOwnerId(1)
    ->all();
```

#### [#](#provisionaldrafts)`provisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-provisionaldrafts)

Narrows the query results to only provisional drafts.

TwigPHP

```
{# Fetch provisional drafts created by the current user #}
{% set entries = craft.entries()
  .provisionalDrafts()
  .draftCreator(currentUser)
  .all() %}
```

```
// Fetch provisional drafts created by the current user
$entries = \craft\elements\Entry::find()
    ->provisionalDrafts()
    ->draftCreator(Craft::$app->user->identity)
    ->all();
```

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only entries that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all entries that are related to myCategory #}
{% set entries = craft.entries()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all entries that are related to $myCategory
$entries = \craft\elements\Entry::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#revisioncreator)`revisionCreator`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-revisioncreator)

Narrows the query results to only revisions created by a given user.

Possible values include:

| Value | Fetches revisions… |
| --- | --- |
| `1` | created by the user with an ID of 1. |
| a [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | created by the user represented by the object. |

TwigPHP

```
{# Fetch revisions by the current user #}
{% set entries = craft.entries()
  .revisionCreator(currentUser)
  .all() %}
```

```
// Fetch revisions by the current user
$entries = \craft\elements\Entry::find()
    ->revisionCreator(Craft::$app->user->identity)
    ->all();
```

#### [#](#revisionid)`revisionId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-revisionid)

Narrows the query results based on the entries’ revision’s ID (from the `revisions` table).

Possible values include:

| Value | Fetches revisions… |
| --- | --- |
| `1` | for the revision with an ID of 1. |

TwigPHP

```
{# Fetch a revision #}
{% set entries = craft.entries()
  .revisionId(10)
  .all() %}
```

```
// Fetch a revision
$entries = \craft\elements\Entry::find()
    ->revisionIf(10)
    ->all();
```

#### [#](#revisionof)`revisionOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-revisionof)

Narrows the query results to only revisions of a given entry.

Possible values include:

| Value | Fetches revisions… |
| --- | --- |
| `1` | for the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | for the entry represented by the object. |

TwigPHP

```
{# Fetch revisions of the entry #}
{% set entries = craft.entries()
  .revisionOf(myEntry)
  .all() %}
```

```
// Fetch revisions of the entry
$entries = \craft\elements\Entry::find()
    ->revisionOf($myEntry)
    ->all();
```

#### [#](#revisions-2)`revisions`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-revisions)

Narrows the query results to only revision entries.

TwigPHP

```
{# Fetch a revision entry #}
{% set entries = craft.entries()
  .revisions()
  .id(123)
  .one() %}
```

```
// Fetch a revision entry
$entries = \craft\elements\Entry::find()
    ->revisions()
    ->id(123)
    ->one();
```

#### [#](#savable)`savable`

Sets the [savable  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-entryquery.html#property-savable) property.

#### [#](#saveddraftsonly)`savedDraftsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-saveddraftsonly)

Narrows the query results to only unpublished drafts which have been saved after initial creation.

TwigPHP

```
{# Fetch saved, unpublished draft entries #}
{% set entries = craft.entries()
  .draftOf(false)
  .savedDraftsOnly()
  .all() %}
```

```
// Fetch saved, unpublished draft entries
$entries = \craft\elements\Entry::find()
    ->draftOf(false)
    ->savedDraftsOnly()
    ->all();
```

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only entries that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all entries that match the search query #}
{% set entries = craft.entries()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all entries that match the search query
$entries = \craft\elements\Entry::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#section)`section`

Narrows the query results based on the sections the entries belong to.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | in a section with a handle of `foo`. |
| `'not foo'` | not in a section with a handle of `foo`. |
| `['foo', 'bar']` | in a section with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a section with a handle of `foo` or `bar`. |
| a [Section  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-section.html) object | in a section represented by the object. |
| `'*'` | in any section. |

TwigPHP

```
{# Fetch entries in the Foo section #}
{% set entries = craft.entries()
  .section('foo')
  .all() %}
```

```
// Fetch entries in the Foo section
$entries = \craft\elements\Entry::find()
    ->section('foo')
    ->all();
```

#### [#](#sectionid)`sectionId`

Narrows the query results based on the sections the entries belong to, per the sections’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | in a section with an ID of 1. |
| `'not 1'` | not in a section with an ID of 1. |
| `[1, 2]` | in a section with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a section with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries in the section with an ID of 1 #}
{% set entries = craft.entries()
  .sectionId(1)
  .all() %}
```

```
// Fetch entries in the section with an ID of 1
$entries = \craft\elements\Entry::find()
    ->sectionId(1)
    ->all();
```

#### [#](#siblingof)`siblingOf`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-siblingof)

Narrows the query results to only entries that are siblings of another entry in its structure.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | beside the entry with an ID of 1. |
| a [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | beside the entry represented by the object. |

TwigPHP

```
{# Fetch entries beside this one #}
{% set entries = craft.entries()
  .siblingOf(myEntry)
  .all() %}
```

```
// Fetch entries beside this one
$entries = \craft\elements\Entry::find()
    ->siblingOf($myEntry)
    ->all();
```

#### [#](#site)`site`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-site)

Determines which site(s) the entries should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | from the site with a handle of `foo`. |
| `['foo', 'bar']` | from a site with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a site with a handle of `foo` or `bar`. |
| a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) object | from the site represented by the object. |
| `'*'` | from any site. |

If multiple sites are specified, elements that belong to multiple sites will be returned multiple times. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch entries from the Foo site #}
{% set entries = craft.entries()
  .site('foo')
  .all() %}
```

```
// Fetch entries from the Foo site
$entries = \craft\elements\Entry::find()
    ->site('foo')
    ->all();
```

#### [#](#siteid)`siteId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-siteid)

Determines which site(s) the entries should be queried in, per the site’s ID.

The current site will be used by default.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | from the site with an ID of `1`. |
| `[1, 2]` | from a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not in a site with an ID of `1` or `2`. |
| `'*'` | from any site. |

TwigPHP

```
{# Fetch entries from the site with an ID of 1 #}
{% set entries = craft.entries()
  .siteId(1)
  .all() %}
```

```
// Fetch entries from the site with an ID of 1
$entries = \craft\elements\Entry::find()
    ->siteId(1)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the entries’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the entry by its ID in the elements_sites table #}
{% set entry = craft.entries()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the entry by its ID in the elements_sites table
$entry = \craft\elements\Entry::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#slug)`slug`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-slug)

Narrows the query results based on the entries’ slugs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | with a slug of `foo`. |
| `'foo*'` | with a slug that begins with `foo`. |
| `'*foo'` | with a slug that ends with `foo`. |
| `'*foo*'` | with a slug that contains `foo`. |
| `'not *foo*'` | with a slug that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a slug that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a slug that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested entry slug from the URL #}
{% set requestedSlug = craft.app.request.getSegment(3) %}

{# Fetch the entry with that slug #}
{% set entry = craft.entries()
  .slug(requestedSlug|literal)
  .one() %}
```

```
// Get the requested entry slug from the URL
$requestedSlug = \Craft::$app->request->getSegment(3);

// Fetch the entry with that slug
$entry = \craft\elements\Entry::find()
    ->slug(\craft\helpers\Db::escapeParam($requestedSlug))
    ->one();
```

#### [#](#status)`status`

Narrows the query results based on the entries’ statuses.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'live'` *(default)* | that are live. |
| `'pending'` | that are pending (enabled with a Post Date in the future). |
| `'expired'` | that are expired (enabled with an Expiry Date in the past). |
| `'disabled'` | that are disabled. |
| `['live', 'pending']` | that are live or pending. |
| `['not', 'live', 'pending']` | that are not live or pending. |

TwigPHP

```
{# Fetch disabled entries #}
{% set entries = craft.entries()
  .status('disabled')
  .all() %}
```

```
// Fetch disabled entries
$entries = \craft\elements\Entry::find()
    ->status('disabled')
    ->all();
```

#### [#](#title)`title`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-title)

Narrows the query results based on the entries’ titles.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'Foo'` | with a title of `Foo`. |
| `'Foo*'` | with a title that begins with `Foo`. |
| `'*Foo'` | with a title that ends with `Foo`. |
| `'*Foo*'` | with a title that contains `Foo`. |
| `'not *Foo*'` | with a title that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a title that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a title that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch entries with a title that contains "Foo" #}
{% set entries = craft.entries()
  .title('*Foo*')
  .all() %}
```

```
// Fetch entries with a title that contains "Foo"
$entries = \craft\elements\Entry::find()
    ->title('*Foo*')
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only entries that have been soft-deleted.

TwigPHP

```
{# Fetch trashed entries #}
{% set entries = craft.entries()
  .trashed()
  .all() %}
```

```
// Fetch trashed entries
$entries = \craft\elements\Entry::find()
    ->trashed()
    ->all();
```

#### [#](#type)`type`

Narrows the query results based on the entries’ entry types.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | of a type with a handle of `foo`. |
| `'not foo'` | not of a type with a handle of `foo`. |
| `['foo', 'bar']` | of a type with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not of a type with a handle of `foo` or `bar`. |
| an [EntryType  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-entrytype.html) object | of a type represented by the object. |

TwigPHP

```
{# Fetch entries in the Foo section with a Bar entry type #}
{% set entries = craft.entries()
  .section('foo')
  .type('bar')
  .all() %}
```

```
// Fetch entries in the Foo section with a Bar entry type
$entries = \craft\elements\Entry::find()
    ->section('foo')
    ->type('bar')
    ->all();
```

#### [#](#typeid)`typeId`

Narrows the query results based on the entries’ entry types, per the types’ IDs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `1` | of a type with an ID of 1. |
| `'not 1'` | not of a type with an ID of 1. |
| `[1, 2]` | of a type with an ID of 1 or 2. |
| `['not', 1, 2]` | not of a type with an ID of 1 or 2. |

TwigPHP

```
{# Fetch entries of the entry type with an ID of 1 #}
{% set entries = craft.entries()
  .typeId(1)
  .all() %}
```

```
// Fetch entries of the entry type with an ID of 1
$entries = \craft\elements\Entry::find()
    ->typeId(1)
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the entries’ UIDs.

TwigPHP

```
{# Fetch the entry by its UID #}
{% set entry = craft.entries()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the entry by its UID
$entry = \craft\elements\Entry::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#unique)`unique`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique)

Determines whether only elements with unique IDs should be returned by the query.

This should be used when querying elements from multiple sites at the same time, if “duplicate” results is not
desired.

TwigPHP

```
{# Fetch unique entries across all sites #}
{% set entries = craft.entries()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique entries across all sites
$entries = \craft\elements\Entry::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#uri)`uri`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uri)

Narrows the query results based on the entries’ URIs.

Possible values include:

| Value | Fetches entries… |
| --- | --- |
| `'foo'` | with a URI of `foo`. |
| `'foo*'` | with a URI that begins with `foo`. |
| `'*foo'` | with a URI that ends with `foo`. |
| `'*foo*'` | with a URI that contains `foo`. |
| `'not *foo*'` | with a URI that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a URI that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a URI that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested URI #}
{% set requestedUri = craft.app.request.getPathInfo() %}

{# Fetch the entry with that URI #}
{% set entry = craft.entries()
  .uri(requestedUri|literal)
  .one() %}
```

```
// Get the requested URI
$requestedUri = \Craft::$app->request->getPathInfo();

// Fetch the entry with that URI
$entry = \craft\elements\Entry::find()
    ->uri(\craft\helpers\Db::escapeParam($requestedUri))
    ->one();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching entries eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch entries eager-loaded with the "Related" field’s relations #}
{% set entries = craft.entries()
  .with(['related'])
  .all() %}
```

```
// Fetch entries eager-loaded with the "Related" field’s relations
$entries = \craft\elements\Entry::find()
    ->with(['related'])
    ->all();
```

#### [#](#withcustomfields)`withCustomFields`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withcustomfields)

Sets whether custom fields should be factored into the query.

#### [#](#withprovisionaldrafts)`withProvisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withprovisionaldrafts)

Causes the query to return provisional drafts for the matching elements,
when they exist for the current user.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
