# Snippets - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/cms/themes/snippets.html

---

# Snippets

Bridge the gap between developers and publishers.

- [Creating Snippets from Partials](docs__4.x__cms__themes__snippets.md#creating-snippets-from-partials)
- [Defining Options](#defining-options)
- [Creating Snippets from Components](docs__4.x__cms__themes__snippets.md#creating-snippets-from-components)
- [Inline Snippets](docs__4.x__cms__themes__snippets.md#inline-snippets)
- [Usage Examples](docs__4.x__cms__themes__snippets.md#usage-examples)
- [Viewing a Tailor Record](#viewing-a-tailor-record)
- [Embedding a YouTube Video](#embedding-a-youtube-video)
- [Basic Contact Form](#basic-contact-form)

[More...](#)

Snippets are blocks inserted into the [rich editor](docs__4.x__element__form__widget-richeditor.md) or [markdown editor](docs__4.x__element__form__widget-markdown.md), and configured with the [inspector tool](docs__4.x__element__inspector-types.md). When the feature is available, an insert snippets button is shown in toolbar, and selecting a snippet will insert it into the editor. Snippets are inserted as blocks by default, or as [inline snippets](#inline-snippets) that sit within a line of text.

Snippets can be defined as [partials](docs__4.x__cms__themes__partials.md) or [components](docs__4.x__cms__themes__components.md), allowing developers to define reusable and configurable pieces of content. There are many possible applications and examples of using snippets:

- Embedded videos - output a configured YouTube video or Twitch streams.
- Google Maps snippet - outputs a map centered on specific coordinates with predefined zoom factor. That snippet would be great for pages that explain directions.
- Universal commenting system - allows visitors to post comments to any page.
- Third-party integrations - for example with Yelp or TripAdvisor for displaying extra information on a page.

When including snippets in your page content, the [`|content` Twig filter](docs__4.x__markup__tag__content.md) is needed to process and render the snippets as part of the output.

```
___TWIG0___
```

## [#](#creating-snippets-from-partials) Creating Snippets from Partials

Partial-based snippets provide simpler functionality and usually are just containers for HTML markup, or markup generated with Twig in a snippet.

To create snippet from a partial, open a partial in the Editor and click the **Snippet** button. From here, you can enter the snippet code, name and description in the partial form.

The snippet properties are optional and can be defined with the grid control on the partial settings form. The table has the following columns.

| Column | Description |
| --- | --- |
| Property Title | specifies the property title, visible to the end user in the snippet inspector popup window. |
| Code | specifies the property code, used for accessing the property values in the partial markup. |
| Type | the property type, available types are `string`, `dropdown` and `checkbox`. |
| Default | the default property value, for checkbox properties use `0` and `1` values. |
| Options | the option list for the dropdown properties (see below). |

Any property defined in the property list can be accessed within the partial markdown as a usual variable, for example:

```
The country name is ___TWIG0___
```

In addition, properties can be passed to the partial components using [external property values](docs__4.x__cms__themes__components.md).

### [#](#defining-options) Defining Options

When defining **options**, list should have the following format: `key:Value | key2:Value`. The keys represent the internal option value, and values represent the string that users see in the drop-down list. The pipe character separates individual options, for example: `us:US | ca:Canada`.

The key is optional, if it's omitted (`US | Canada`), the internal option value will be zero-based integer (`0`, `1`, ...). It's recommended to always use explicit option keys. The keys can contain only Latin letters, digits and characters `-` and `_`.

Alternatively, the **options** property can also be defined as a reference to a static PHP class method (`Class::method`).

## [#](#creating-snippets-from-components) Creating Snippets from Components

Any [CMS component](docs__4.x__cms__themes__components.md) can be registered as a snippet using the `registerPageSnippets` method in your plugin class in the [registration file](docs__4.x__extend__system__plugins.md). The API for registering a snippet is similar to the one for [registering components](docs__4.x__extend__cms-components.md). The method should return an array with class names in keys and aliases in values.

```
public function registerPageSnippets()
{
    return [
        \RainLab\Weather\Components\Weather::class => 'weather'
    ];
}
```

The same component can be registered with `registerPageSnippets` and `registerComponents` to be used in CMS pages and content editors.

To enable the use of AJAX handlers, snippets can be rendered using an [AJAX partial](docs__4.x__markup__tag__ajax-partial.md). You may enable this by setting `snippetAjax` to `true` in the [component class definition](docs__4.x__extend__cms-components.md).

```
public function componentDetails()
{
    return [
        // ...
        'snippetAjax' => true
    ];
}
```

## [#](#inline-snippets) Inline Snippets

By default a snippet is inserted as a block that occupies its own line. An inline snippet is inserted within a line of text instead, which is useful for small pieces of content such as a phone number, a price or a formatted value.

For a partial snippet, open the partial in the Editor, click the **Snippet** button, and check the **Inline Snippet** option.

For a component snippet, set `snippetInline` to `true` in the [component class definition](docs__4.x__extend__cms-components.md).

```
public function componentDetails()
{
    return [
        // ...
        'snippetInline' => true
    ];
}
```

An inline snippet should render an inline element, such as a `<span>`, so it sits correctly within the surrounding text.

```
<span class="price">___TWIG0___</span>
```

## [#](#usage-examples) Usage Examples

These are some practical examples of how snippets can be used.

### [#](#viewing-a-tailor-record) Viewing a Tailor Record

The following snippet displays a blog post summary from a tailor entry record. It includes a [section component](docs__4.x__cms__components__section.md) and sets the lookup `value` from the `post_id` snippet property using external property values.

The publisher sets the **Blog Post ID** for the blog post, and it outputs a link to the blog post as a card element.

```
## partials/snippets/blog-post-reference.htm

[viewBag]
snippetCode = "blogPostReference"
snippetName = "Blog Post Reference"
snippetDescription = "Display a reference to a blog post"
snippetProperties[post_id][title] = "Blog Post ID"
snippetProperties[post_id][type] = "string"

[section post]
handle = "Blog\Post"
identifier = "id"
value = "{{ post_id }}"
```

```
___TWIG0___
    <div class="card shadow-sm">
        <div class="card-body">
            <h4>___TWIG1___</h4>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between align-items-center">
                <a href="___TWIG2___" class="stretched-link">
                    ___TWIG3___
                </a>
                <small class="text-muted">___TWIG4___</small>
            </div>
        </div>
    </div>
___TWIG5___
    <!-- Post Missing: Unable to Find an Entry -->
___TWIG6___
```

### [#](#embedding-a-youtube-video) Embedding a YouTube Video

The following snippet implements a YouTube embed video as a [CMS partial](docs__4.x__cms__themes__partials.md). It includes a method for extracting the YouTube code from a browser URL and converting a time string to seconds.

The publisher sets the **Video URL** and **Start At** snippet values, and it outputs a standard YouTube embed code using an inline frame element.

```
## partials/snippets/youtube-video.htm

[viewBag]
snippetCode = "youtubeVideo"
snippetName = "YouTube Video"
snippetDescription = "Embed a Youtube Video on the page"
snippetProperties[url][title] = "Video URL"
snippetProperties[url][type] = "string"
snippetProperties[start_at][title] = "Start At"
snippetProperties[start_at][type] = "string"
```

```
// Converts https://www.youtube.com/watch?v=k_H2zJ7UZfs to k_H2zJ7UZfs
function urlToCode($link = '')
{
    $parts = parse_url($link);
    if (isset($parts['query'])) {
        parse_str($parts['query'], $qs);
        if (isset($qs['v'])){
            return $qs['v'];
        }
        elseif (isset($qs['vi'])){
            return $qs['vi'];
        }
    }
    if (isset($parts['path'])){
        $path = explode('/', trim($parts['path'], '/'));
        return $path[count($path)-1];
    }
    return null;
}

// Converts 15:00 to 900
function timeToSeconds($time = '')
{
    $parts = explode(':', $time);
    if (count($parts) === 3) {
        return $parts[0] * 3600 + $parts[1] * 60 + $parts[2];
    }
    elseif (count($parts) === 2) {
        return $parts[0] * 60 + $parts[1];
    }
    return $time ?: 0;
}
```

```
___TWIG0___
    <iframe
        width="560"
        height="315"
        src="https://www.youtube.com/embed/___TWIG1___?start=___TWIG2___"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
___TWIG3___
    <!-- Video URL Missing -->
___TWIG4___
```

### [#](#basic-contact-form) Basic Contact Form

The next snippet displays a basic contact form and provides a way to handle the submission logic, it does not include code for [validating the form](docs__4.x__ajax__features__validation.md) and [sending the email](docs__4.x__extend__system__sending-mail.md).

The snippet has no properties, the publisher only needs to include the widget on the page, and it outputs a contact form with a success message. The `snippetAjax` attribute is set to `1` to enable the use of AJAX handlers.

```
## partials/snippets/contact-form.htm

[viewBag]
snippetCode = "contactForm"
snippetName = "Contact Form"
snippetDescription = "Display a contact form"
snippetAjax = 1
```

```
function onSubmitContact()
{
    $this['submitted'] = true;
}
```

```
___TWIG0___
    <h3>Tell us what you think!</h3>
    <form data-request="onSubmitContact" data-request-update="{ _self: true }">
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control">
                    <label>Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control">
                    <label>Email Address</label>
                </div>
            </div>
        </div>
        <div class="mb-3 form-floating">
            <textarea class="form-control h-100"></textarea>
            <label>Message</label>
        </div>
        <div class="form-buttons d-flex pt-2">
            <div>
                <button type="submit" class="btn btn-primary btn-pill">Submit</button>
            </div>
        </div>
    </form>
___TWIG1___
    <div class="alert alert-success">
        Thanks for contacting us!
    </div>
___TWIG2___
```

#### [#](#see-also) See Also

- [CMS Partials](docs__4.x__cms__themes__partials.md)
- [Developing Components](docs__4.x__extend__cms-components.md)

← [Components](docs__4.x__cms__themes__components.md)[Introduction](docs__4.x__cms__ajax__introduction.md) →
