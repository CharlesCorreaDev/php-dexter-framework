# Including Partials - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/editor/including-partials.html

---

# Including Partials

Extract reusable template fragments into partials

- [Create a Partial](docs__user-guide__quickstart__editor__including-partials.md#create-a-partial)
- [Include It in the Layout](docs__user-guide__quickstart__editor__including-partials.md#include-it-in-the-layout)
- [Passing Variables to Partials](docs__user-guide__quickstart__editor__including-partials.md#passing-variables-to-partials)
- [Partials as UI Components](docs__user-guide__quickstart__editor__including-partials.md#partials-as-ui-components)
- [Create the Button Partial](#create-the-button-partial)
- [Use the Button on a Page](#use-the-button-on-a-page)
- [Why This Matters](#why-this-matters)
- [Next Steps](docs__user-guide__quickstart__editor__including-partials.md#next-steps)

[More...](#)

A **partial** is a reusable template fragment, a piece of HTML and Twig that you write once and include wherever you need it. Partials are ideal for things that appear in multiple places: navigation menus, footers, card layouts, sidebars, call-to-action banners.

The difference from content files: content files hold **editable text** (Markdown or plain HTML), while partials hold **template markup** with full Twig support.

## [#](#create-a-partial) Create a Partial

Let's extract the footer from our layout into a partial so it can be reused.

1. Navigate to **Editor** in the top menu, then click **Partials** in the side panel.
2. Click the **+ Add** button.
3. In the **File Name** field, enter `site-footer`.
4. In the markup editor, enter:

```
<footer class="bg-white border-t mt-16">
    <div class="max-w-4xl mx-auto px-6 py-6 text-center text-sm text-gray-400">
        &copy; ___TWIG0___ My Website
    </div>
</footer>
```

5. Click **Save**.

## [#](#include-it-in-the-layout) Include It in the Layout

1. Open **Editor → Layouts → default**.
2. Find the `<footer>` block and replace it with:

```
___TWIG0___
```

3. Click **Save** and preview the site.

The page looks exactly the same, but now the footer markup lives in its own file. If you ever need to change the footer, you update it in one place and every layout that includes it gets the change.

## [#](#passing-variables-to-partials) Passing Variables to Partials

Partials can accept variables, making them flexible. For example, you could make the site name configurable:

```
___TWIG0___
```

Inside the partial, use the variable:

```
<div class="max-w-4xl mx-auto px-6 py-6 text-center text-sm text-gray-400">
    &copy; ___TWIG0___ ___TWIG1___
</div>
```

This is especially useful for partials like cards, hero sections, or any component where the structure stays the same but the content changes.

## [#](#partials-as-ui-components) Partials as UI Components

Partials can do more than just include a chunk of HTML. They can act as full UI components that accept content inside them. Let's build a reusable styled button.

### [#](#create-the-button-partial) Create the Button Partial

1. Go to **Editor → Partials** and click **+ Add**.
2. Name it `btn`.
3. Enter the following markup:

```
___TWIG0___

___TWIG1___

<a href="___TWIG2___" ___TWIG3___>
    ___TWIG4___
</a>
```

4. Click **Save**.

This partial uses `{% props %}` to declare two parameters: `href` and `style`. Any other attributes you pass (like `class` or `id`) flow into the `attributes` bag and get merged onto the element automatically.

### [#](#use-the-button-on-a-page) Use the Button on a Page

1. Open **Editor → Pages → Home**.
2. Add a couple of buttons to the markup:

```
___TWIG0___
    Get Started
___TWIG1___

___TWIG2___
    Learn More
___TWIG3___
```

3. Click **Save** and preview the page.

You should see two styled buttons, a blue primary button and a grey secondary button. The `body` keyword lets you pass the button label as content inside the partial tag, rather than as a variable.

### [#](#why-this-matters) Why This Matters

You now have a reusable button component. Need a button anywhere on your site? Use `{% partial 'btn' %}` with the right props. Change the styling in one place and every button updates. This pattern works for any UI element: cards, alerts, badges, modals.

For the full reference on partials, including the `{% props %}` tag and `attributes` API, see [Partials](docs__4.x__cms__themes__partials.md) in the developer documentation.

## [#](#next-steps) Next Steps

Continue to [Media Manager](docs__user-guide__quickstart__editor__media-manager.md) to upload an image and display it on your page.

← [Content Files](docs__user-guide__quickstart__editor__content-files.md)[Media Manager](docs__user-guide__quickstart__editor__media-manager.md) →
