# Upgrading to Craft 3.5 | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/upgrading-to-craft-3-5

---

Search Knowledge Base

# Upgrading to Craft 3.5

Craft 3.5 introduced a few changes to be aware of.

## Control Panel Base URL [#](#control-panel-base-url "Direct link to Control Panel Base URL")

If you have the [baseCpUrl](https://docs.craftcms.com/v3/config/config-settings.html#basecpurl) config setting set, Craft 3.5 will **only** allow the control panel to be accessed from that URL, so make sure you notify your content managers accordingly.

![](https://craftcms.com/dist/images/icon-tip.svg)

If your [baseCpUrl](https://docs.craftcms.com/v3/config/config-settings.html#basecpurl) config setting is set to a separate domain than your front-end site (or subdomain of it), you no longer need to define a [cpTrigger](https://docs.craftcms.com/v3/config/config-settings.html#cptrigger).

## Check for calls to `getFullPath()` [#](#check-for-calls-to-getFullPath "Direct link to Check for calls to getFullPath()")

Craft 3.5 fixed a bug where [craft\web\Request::getFullPath()](https://docs.craftcms.com/api/v3/craft-web-request.html#method-getfullpath) wasn’t including any URI segments defined by the site’s base URL.

If any of your templates or plugin/module code was calling this method, they may need to be updated to account for that change.

If you want the URI path *relative to the site’s base URL*, you should be calling [craft\web\Request::getPathInfo()](https://docs.craftcms.com/api/v3/craft-web-request.html#method-getpathinfo) instead.

```
{# bad #}
{% set path = craft.app.request.fullPath %}
{% set path = craft.app.request.getFullPath() %}

{# good #}
{% set path = craft.app.request.pathInfo %}
{% set path = craft.app.request.getPathInfo() %}
```

## Control Panel Browser Requirements [#](#control-panel-browser-requirements "Direct link to Control Panel Browser Requirements")

The control panel now requires browsers that support JavaScript modules (Firefox 67+, Chrome 63+, Safari 11.1+, and Edge 79+).

## Project Config Workflow [#](#project-config-workflow "Direct link to Project Config Workflow")

Craft 3.5 introduces a few changes to how the Project Config works, which we think will help improve its usefulness:

- The `useProjectConfigFile` config setting has been deprecated. Craft will now *always* store a copy of the Project Config in a `config/project/` folder for safekeeping, regardless of whether you want to actually keep your database in sync with its changes.
- The Project Config is now stored across multiple files rather than just a single `project.yaml` file. (We did this to eliminate Git merge conflicts that could occur when merging changes from two separate system components.)
- Craft will monitor the `config/project/` folder for changes, provide a diff for review, and prompt you to apply them or ignore them.

Here’s what this means for you:

- Make sure that Craft is able to write to a `config/project/` folder on environments that [allow admin changes](https://docs.craftcms.com/v3/config/config-settings.html#allowadminchanges). (You may need to create the folder manually and assign the same permissions to it that your `storage/` folder currently has.)
- Review your email and asset volume settings to ensure you’re not storing any sensitive info directly in them. If you are, you should start [storing those values as environment variables](https://docs.craftcms.com/v3/config/environments.html#control-panel-settings) instead, so they don’t get tracked into Git along with the rest of your Project Config data.
- If you wish to keep your production environment’s config in sync, make sure your deployment process is running the `project-config/apply` command automatically after deployment, or that something is sending a POST request to `/actions/app/migrate?applyProjectConfigChanges=1`.
- If you have tests that are configured to use [Project Config](https://docs.craftcms.com/v3/testing/framework/config-options.html#projectconfig), you’ll need to change the `file` parameter, that previously pointed to the seed `project.yaml` file to use for tests, to `folder`, and point it to the seed folder. e.g. `config/project`.

We’ve also added a new Project Config utility, which will give you the ability to apply pending Project Config file changes, reapply the whole config, rebuild the config based on what’s in the database, and also view the currently loaded config.

## New Field Layout Features [#](#new-field-layout-features "Direct link to New Field Layout Features")

Field Layouts have become a lot more robust in Craft 3.5:

- They can now include headings, tips, warnings, horizontal rules, and even custom UI elements defined by site templates.
- They can include “standard fields” (like Title) in addition to custom fields.
- Both standard and custom fields have customizable labels and instructions.
- Both standard and custom fields can be set to 25%, 50%, 75%, or 100% width, and Craft will place fields side-by-side when their widths allow it.

If you maintain a plugin that provides its own element type(s), there are a couple changes you’ll need to make in order to unlock these new features.

First, find your template that is including the `_includes/fieldlayoutdesigner` template:

```
{% include "_includes/fieldlayoutdesigner" with {
  fieldLayout: craft.app.fields.getLayoutByType('ns\\prefix\\elements\\MyElementType')
} only %}
```

Replace that include with a call to the `fieldLayoutDesignerField()` macro in the `_includes/forms` template:

```
{% include '_includes/forms' as forms %}

{{ forms.fieldLayoutDesignerField({
  fieldLayout: craft.app.fields.getLayoutByType('ns\\prefix\\elements\\MyElementType')
}) }}
```

That will unlock the new Field Layout Designer features. Next up you’ll need to update your element type’s edit page template so that it can take advantage of these new features. Here’s what that involves:

1. Create a new field layout form model, from your field layout’s `createForm()` method.
2. Set your template’s `tabs` variable to the result of the field layout form’s `getTabMenu()` method.
3. Output the field HTML based on the result of the field layout form’s `render()` method.

Working with the field layout form can be done in either your controller or Twig template. Here’s examples for both:

```
$form = $myElement->getFieldLayout()->createForm($myElement);
$tabs = $form->getTabMenu();
$fieldsHtml = $form->render();

return $this->renderTemplate('my-plugin/element-type/_edit', [
    'myElement' => $myElement,
    'tabs' => $tabs,
    'fieldsHtml' => $fieldsHtml,
]);
```

```
{% set form = myElement.getFieldLayout().createForm(myElement) %}
{% tabs = form.getTabMenu() %}
{% fieldsHtml = form.render() %}
```

The `_layouts/cp` template will show the tab bar based on the `tabs` variable. So all that’s left is for you to output that `fieldsHtml` variable within the `content` block.

```
{% block content %}
  {# ... #}

  <div id="fields">
    {{ fieldsHtml|raw }}
  </div>
{% endblock %}
```

You can safely delete your old controller/template code you were using to generate the `tabs` variable and output fields.

Finally, if you wish to include a Title field (or any other “standard fields”) in your field layout, add this event handler to your plugin’s `init()` method:

```
use craft\events\DefineFieldLayoutFieldsEvent;
use craft\fieldlayoutelements\TitleField;
use craft\models\FieldLayout;
use yii\base\Event;

Event::on(FieldLayout::class, FieldLayout::EVENT_DEFINE_STANDARD_FIELDS, function(DefineFieldLayoutFieldsEvent $event) {
    /** @var FieldLayout $fieldLayout */
    $fieldLayout = $event->sender;

    switch ($fieldLayout->type) {
        case MyElementType::class:
            $event->fields[] = TitleField::class;
            break;
    }
});
```

Then remove the existing Title field from your element type’s edit template. It will start showing up wherever the field layout wants it to be.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
