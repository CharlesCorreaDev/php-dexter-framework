# Entry Form | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/entry-form

---

Search Knowledge Base

# Entry Form

To add an entry form to the front-end of your website, create a template with a [form](https://craftcms.com/docs/5.x/development/forms.html) that posts to the [entries/save-entry](https://craftcms.com/docs/5.x/reference/controller-actions.html#post-entries-save-entry) controller action. Creating and editing entries requires an active user session, and the corresponding [permissions](https://craftcms.com/docs/5.x/system/user-management.html#permissions) for the target section.

![](https://craftcms.com/dist/images/icon-tip.svg)

You can accept submissions from logged out or “anonymous” users with the [Guest Entries](https://plugins.craftcms.com/guest-entries) plugin. The rest of this guide assumes you have implemented a [login form](kb__front-end-user-accounts.md), and are using the [`{% requireLogin %}` tag](https://craftcms.com/docs/5.x/reference/twig/tags.html#requirelogin) to ensure this part of your site is visible only to logged-in users.

This form contains everything you need to get started:

```
{% macro errorList(errors) %}
  {% if errors %}
    {{ ul(errors, {class: 'errors'}) }}
  {% endif %}
{% endmacro %}

{# Load section + entry type definitions: #}
{% set section = craft.app.entries.getSectionByHandle('classifieds') %}
{% set entryType = craft.app.entries.getEntryTypeByHandle('post') %}

{# If there were any validation errors, an `entry` variable will be 
   passed back to the template, containing the POSTed values, as-is, 
   and validation errors. If that’s *not* present, we stub out a new
   entry object: #}
{% set entry = entry ?? create({
  class: 'craft\\elements\\Entry',
  sectionId: section.id,
  typeId: entryType.id,
}) %}

{# Add `enctype="multipart/form-data"` to `<form>` if you’re uploading files! #}
<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}
  {{ redirectInput('{url}') }}

  {# Output the section + entry type values so they are preserved when data is sent to Craft: #}
  {{ hiddenInput('sectionId', entry.sectionId) }}
  {{ hiddenInput('typeId', entry.typeId) }}
  {{ hiddenInput('enabled', true) }}

  <label for="title">Title</label>
  {{ input('text', 'title', entry.title, {
    id: 'title',
  }) }}
  {{ _self.errorList(entry.getErrors('title')) }}

  <label for="body">Body</label>
  {{ tag('textarea', {
    id: 'body',
    name: 'fields[body]',
    text: entry.body,
  }) }}
  {{ _self.errorList(entry.getErrors('body')) }}

  <button type="submit">Publish</button>
</form>
```

Upon submission, the user will either be [dropped back at the form](https://craftcms.com/docs/5.x/development/forms.html#) to correct errors, or redirected based on the [`redirectInput`](https://craftcms.com/docs/5.x/reference/twig/functions.html#redirectinput) value. In this case, we’ve provided an [object template](https://craftcms.com/docs/5.x/system/object-templates.html) that is evaluated after the entry is created, substituting its final/published URL for the `{url}` placeholder.

If the target section doesn’t have URLs, you can redirect to any static path:

```
{{ redirectInput('thank-you') }}
```

## Tips [#](#tips "Direct link to Tips")

### Section IDs [#](#section-iDs "Direct link to Section IDs")

Be sure and set the `sectionId` input’s value to a valid ID for your project. For clarity and reliability, you can look up a section’s ID by its handle, like this:

```
{% set section = craft.app.entries.getSectionByHandle('classifieds') %}

{{ hiddenInput('sectionId', section.id) }}
```

Note that prior to Craft 5, sections were accessed via a discrete `sections` service: `craft.app.sections.getSectionByHandle('classifieds')`!

![](https://craftcms.com/dist/images/icon-warning.svg)

Because section and entry type IDs [can be different in each environment](https://craftcms.com/docs/5.x/system/project-config.html#ids-uuids-and-handles), using handles helps avoid unpredictable bugs when deploying your form!

### Custom Fields [#](#custom-fields "Direct link to Custom Fields")

Any custom field handles must be provided under a `fields[]` key, like `body` is, above. Keep in mind that some [field types](https://craftcms.com/docs/5.x/system/fields.html#field-types) use different inputs and names—or may require multiple inputs to work correctly. Refer to each field type’s documentation for specifics!

### Multi-Site Projects [#](#multi-site-projects "Direct link to Multi-Site Projects")

If you are working on a multi-site project, you’ll also need to specify a `siteId`—unless you are only targeting the [primary site](https://craftcms.com/docs/5.x/system/sites.html#primary-site).

## Editing Existing Entries [#](#editing-existing-entries "Direct link to Editing Existing Entries")

To save an existing entry, add a hidden `entryId` input to the form. This is omitted for *new* entries to signal that we want to create an entry, rather than update an existing one.

```
{{ hiddenInput('entryId', entry.id) }}
```

This alone is enough to update an existing entry from its native page (where you’ll already have access to the `entry` object)… but things get slightly more complicated if you want to separate editing tools from the viewing experience—say, in an account dashboard.

### Handling Both New and Existing Entries [#](#handling-both-new-and-existing-entries "Direct link to Handling Both New and Existing Entries")

We’ll need two templates to support this:

- One for creating new entries: `templates/_account/new-post.twig`
- One for editing entries: `templates/_account/edit-post.twig`

The underscores mean this entire directory (`_account`) is [hidden from automatic routing](https://craftcms.com/docs/5.x/system/routing.html#dynamic-routes)—but you can grant access to them by adding URL rules to `routes.php`:

```
return [
    'account/my-posts/new' => ['template' => '_account/new-post'],
    'account/my-posts/<postId:\d+>' => ['template' => '_account/edit-post'],
];
```

The keys in this array are paths; the values tell Craft to render a template when they are accessed. `<postId:\d+>` is peculiar, right? This *pattern* will match any series of digits (`\d+`) in a request URL—we’ll use it [in a moment](#the-dynamic-edit-route) to look up an entry, and again when [generating URLs](#listing-a-users-content) to edit forms.

### Extracting the Form [#](#extracting-the-form "Direct link to Extracting the Form")

Both of these routes will need to render a form, so let’s move it into a separate file, `templates/_account/form.twig`:

```
{% macro errorList(errors) %}
  {% if errors %}
    {{ ul(errors, {class: 'errors'}) }}
  {% endif %}
{% endmacro %}

{% set section = craft.app.entries.getSectionByHandle('classifieds') %}
{% set entryType = craft.app.entries.getEntryTypeByHandle('post') %}

{% set entry = entry ?? create({
  class: 'craft\\elements\\Entry',
  sectionId: section.id,
  typeId: entryType.id,
}) %}

<form method="post" accept-charset="UTF-8">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}
  {{ redirectInput(redirect ?? '{url}') }}
  {{ hiddenInput('sectionId', section.id) }}
  {{ hiddenInput('enabled', true) }}

  {{ hiddenInput('entryId', entry.id) }}

  <label for="title">Title</label>
  {{ input('text', 'title', entry.title, {
    id: 'title',
  }) }}
  {{ _self.errorList(entry.getErrors('title')) }}

  <label for="body">Body</label>
  {{ tag('textarea', {
    id: 'body',
    name: 'fields[body]',
    text: entry.body,
  }) }}
  {{ _self.errorList(entry.getErrors('body')) }}

  <button type="submit">{{ action ?? 'Save' }}</button>
</form>
```

Notice that we've parameterized a few things: the `redirect`, the button’s `action` text, and the actual `entry` object.

Now, our `_account/new-post.twig` template can be dramatically simplified:

```
{{ include('_account/form', {
  entry: entry ?? null,
  action: 'Create',
  redirect: 'account/my-posts/{id}',
}) }}
```

This will still pass the `entry` object down when it’s defined in the `new-post.twig` template (say, after a validation error)—otherwise, it will let the form partial instantiate a blank one and assign the section and entry type. We’re also specifying a redirect to the [edit](#the-dynamic-edit-route) route, rather than its public URL.

### The Dynamic Edit Route [#](#the-dynamic-edit-route "Direct link to The Dynamic Edit Route")

Let’s look at how `templates/_account/edit-post.twig` will differ. We need to account for the `entry` object coming from two sources: validation errors (for which Craft passes it back to the template for us); or a lookup based on the URL rule we defined in `routes.php`.

Craft will automatically inject the `postId` variable from our parameterized edit rule into the template. Here’s a barebones example of this pattern in action:

```
{# Check if `entry` is already defined: #}
{% if entry is not defined %}
  {# It isn’t! Let’s look it up based on the `postId` route param: #}
  {% set entry = craft.entries()
    .section('classifieds')
    .id(postId)
    .one() %}
{% endif %}

{# Let’s make sure we actually found something, or bail: #}
{% if not entry %}
  {% exit 404 %}
{% endif %}

{# Ok, we’re good; render the form: #}
{{ include('_account/form', {
  entry: entry,
  action: 'Save',
  redirect: 'account/my-posts/{id}',
}) }}
```

### Listing a User’s Content [#](#listing-a-users-content "Direct link to Listing a User’s Content")

The above edit route does nothing (on its own) to prevent a user from viewing and modifying another user’s content. Craft will enforce any [section permissions](https://craftcms.com/docs/5.x/system/user-management.html#permissions) upon save, but it’s up to you to prevent content from being displayed that they don't have access to. To start, the lookup based on `postId` could also include a constraint for the current user:

```
{% set entry = craft.entries()
  .section('posts')
  .author(currentUser)
  .id(postId)
  .one() %}
```

Similarly, to display a *list* of the user’s content on their dashboard (say, in `templates/account.twig`), you might perform a query like this:

```
{% set entries = craft.entries()
  .section('posts')
  .author(currentUser)
  .all() %}

<h1>My Content</h1>

<ul>
  {% for entry in entries %}
    <li>
      {{ entry.title }}
      <a href="{{ entry.url }}">View</a>

      {# The URL here must match the pattern we defined in `routes.php`, earlier: #}
      <a href="{{ url("account/my-posts/#{entry.id}") }}">Edit</a>
    </li>
  {% endfor %}
</ul>

<a href="{{ url('account/my-posts/new') }}">New Post</a>
```

With that, we’ve built a complete entry management workflow!

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
