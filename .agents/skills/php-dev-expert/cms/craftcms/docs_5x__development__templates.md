# Templates | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/development/templates

---

# Templates

- ### On this Page

  - [Template Paths](docs_5x__development__templates.md#template-paths)
  - [Template Localization](docs_5x__development__templates.md#template-localization)
  - [Content Type Inference](docs_5x__development__templates.md#content-type-inference)

In Craft, you define your site’s HTML output with templates.

Templates are files that live within your `templates/` folder. The structure of this directory is completely up to you—but keeping it organized and in agreement with [project config](docs_5x__system__project-config.md) settings is essential.

Craft uses [Twig  (opens new window)](https://twig.symfony.com/) to parse your templates. Twig is elegant, secure, powerful, and blazing fast. If you’re new to Twig, be sure to read the [Twig Fundamentals](docs_5x__development__twig.md) page to familiarize yourself with its syntax and capabilities.

PHP code isn’t allowed in your templates, but Craft provides various ways to [extend Twig](docs_5x__extend__extending-twig.md) to suit your needs.

## [#](#template-paths)Template Paths

There are several times when you’ll need to enter a path to one of your templates:

- When choosing which template [entry](docs_5x__reference__element-types__entries.md) and [category](docs_5x__reference__element-types__categories.md) URLs should load;
- When assigning a template to a [route](docs_5x__system__routing.md#dynamic-routes);
- Within [include  (opens new window)](https://twig.symfony.com/doc/tags/include.html), [extends  (opens new window)](https://twig.symfony.com/doc/tags/extends.html), and [embed  (opens new window)](https://twig.symfony.com/doc/tags/embed.html) template tags;

Craft has a standard template path format that applies to each of these cases: a Unix-style filesystem path to the template file, relative to your `templates/` folder. For example, the following paths are valid for a template located at `templates/recipes/entry.twig`:

- `recipes/entry`
- `recipes/entry.twig`

### [#](#index-templates)Index Templates

If you name a template `index.twig`, you don’t need to specify it in the template path.

For example, if you have a template located at `templates/recipes/ingredients/index.twig`, the following template paths would point to it:

- `recipes/ingredients`
- `recipes/ingredients/index`
- `recipes/ingredients/index.twig`

If you have templates located at both `templates/recipes/ingredients.twig` *and* `templates/recipes/ingredients/index.twig`, the template path `recipes/ingredients` will match `ingredients.twig`.

### [#](#hidden-templates)Hidden Templates

Suppose entries in a *Recipes* section are configured to use a template located at `templates/recipes/entry.twig`. You might view a recipe at a URL like `http://my-project.tld/recipes/gin-tonic`, causing Craft to render that template—but someone could *also* access the template directly at `http://my-project.tld/recipes/entry`. This would likely result in an error, oftentimes a result of the template assuming an `entry` variable is automatically injected. While there is value in exposing *some* templates to Craft’s [routing](docs_5x__system__routing.md) behavior (like a recipes index template at `templates/recipes/index.twig`), this one is better off hidden from public view.

Craft treats templates (and directories) prefixed with an underscore (`_`) as “hidden,” and will not render them unless specifically configured to do so via an element type’s settings or a custom [route](docs_5x__system__routing.md#advanced-routing-with-url-rules). Changing the template’s filename to `_entry.twig` (and updating the *Recipes* section’s configuration to use `recipes/_entry`) will ensure it is only rendered in the context of an entry.

Then, accessing `http://my-project.tld/recipes/entry` returns a 404, instead of trying (and failing) to render the template, out of context.

You can customize the prefix for “private” templates using the [privateTemplateTrigger](docs_5x__reference__config__general.md#privatetemplatetrigger) config setting.

## [#](#template-localization)Template Localization

If you’re running [multiple sites](docs_5x__system__sites.md) with Craft, you can create site-specific subfolders in your `templates/` directory, with templates that will only be available to a specific site.

For example, if you want to create a special template welcoming your German customers (but there’s no need for it on your English site) then you could save it in `templates/de/welcome.twig`. That template would be available from `https://example.de/welcome`, assuming the German site’s base URL is `https://example.de` and its handle is `de`.

Craft will look for localized templates *before* it looks for templates in the normal location, so you can use them to override non-localized templates. See our [Localization Guide](docs_5x__system__sites.md) for more details.

## [#](#content-type-inference)Content Type Inference

In situations when you want to serve non-HTML content, you can use an additional extension in your template’s name.
Suppose your client wanted to provide an easy way to get contact information for sales representatives: rather than creating and uploading a [`.vcf` file  (opens new window)](https://en.wikipedia.org/wiki/VCard) for each representative, you can generate them on-the-fly:

```
{# Template: templates/contact/card.vcf.twig #}
BEGIN:VCARD
VERSION:4.0
FN:Kelsey Kölsch
N:Kölsch;Kelsey;;;
BDAY:--0223
EMAIL;TYPE=work:kelsey.kolsch@happylager.com
TEL;TYPE=cell:(123) 555-5832
TITLE:Sales Representative
END:VCARD
```

When Craft renders this template (`card.vcf.twig`), it also sets the extension-appropriate `Content-Type` header—in this case, `text/x-vcard`.
If a template does not have a secondary extension, it is treated as HTML.
Use the [`{% header %}` tag](docs_5x__reference__twig__tags.md#header) in the event you need to force a specific `Content-Type` in a response.

MIME types are determined using [yii\helpers\BaseFileHelper::getMimeTypeByExtension()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basefilehelper#getMimeTypeByExtension()-detail).

Dynamic vCards

To make the template dynamic, you would need to…

1. Rename the template so it includes the [privateTemplateTrigger](docs_5x__reference__config__general.md#privatetemplatetrigger) (i.e: `templates/contacts/_card.vcf`);
2. Create a [parameterized route](docs_5x__system__routing.md#dynamic-routes) pointed to the template:

   ```
   return [
       'contacts/download/<contactId:\d+>' => ['template' => 'contacts/_card.vcf'],
   ];
   ```
3. [Load](docs_5x__system__routing.md#accessing-named-parameters-in-your-templates) the corresponding entry or user element:

   ```
   {% set contact = craft.entries()
     .section('reps')
     .id(contactId)
     .one() %}

   {% if contact == null %}
     {% exit 404 %}
   {% endif %}

   {# ... #}
   ```
4. [Print](docs_5x__development__twig.md#print-statements) its values:

   ```
   BEGIN:VCARD
   VERSION:4.0
   FN:{{ contact.fullName }}
   N:{{ contact.lastName }};{{ contact.firstName }};;;
   BDAY:--{{ contact.birthDate.format('md') }}
   EMAIL;TYPE=work:{{ contact.emailAddress }}
   TEL;TYPE=cell:{{ contact.telephone }}
   TITLE:{{ contact.professionalTitle }}
   END:VCARD
   ```

It’s worth noting that the vCard spec (and potentially other novel content types) is extremely strict about character encoding and escaping. You may need to escape or encode text entered by authors!

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/development/templates.md)
