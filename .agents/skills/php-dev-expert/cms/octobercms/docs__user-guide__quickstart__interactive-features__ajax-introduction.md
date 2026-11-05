# Meet the AJAX Framework - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/interactive-features/ajax-introduction.html

---

# Meet the AJAX Framework

A lightweight AJAX framework that replaces the need for building API endpoints

- [How It Works](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#how-it-works)
- [Handlers Live on the Page](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#handlers-live-on-the-page)
- [Sending Data](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#sending-data)
- [Updating the Page](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#updating-the-page)
- [What We Already Set Up](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#what-we-already-set-up)
- [Next Steps](docs__user-guide__quickstart__interactive-features__ajax-introduction.md#next-steps)

[More...](#)

October CMS ships with a built-in AJAX framework called **Larajax**. Think of it as `fetch()` in JavaScript, but with extra features built in: DOM patching, form validation, flash messages, and loading indicators. It is designed to be simple enough to learn in minutes, yet powerful enough to grow with your project.

The key idea: instead of building separate API endpoints and writing JavaScript to call them, you define **handlers** directly on your pages. The framework connects your HTML elements to those handlers automatically. It is still an API, but it lives on the page itself, so there is no routing or controller boilerplate.

## [#](#how-it-works) How It Works

The framework revolves around one HTML attribute: `data-request`. Add it to almost any element (a button, a form, a link, a dropdown) and the framework will call the named handler on the server when that element is triggered.

```
<button data-request="onSayHello">Click Me</button>
```

When the visitor clicks this button, the framework sends an AJAX request to the server, which runs the `onSayHello` handler. No JavaScript code needed.

Different elements trigger at different moments:

| Element | Triggers When |
| --- | --- |
| Form | The form is submitted |
| Button, link | The element is clicked |
| Select, checkbox, radio | The selection changes |
| Text input | The text changes (with `data-track-input`) |

## [#](#handlers-live-on-the-page) Handlers Live on the Page

An AJAX handler is a PHP function defined in the **code section** of your page file. The code section sits between `==` separators, above the Twig markup. Handler names always start with `on`.

Here is what a page with a handler looks like in the backend editor:

**Code** tab:

```
function onSayHello()
{
    // This runs on the server when the button is clicked
}
```

**Markup** tab:

```
<button data-request="onSayHello">Click Me</button>
```

That is the entire pattern. The HTML triggers the handler, the handler runs PHP on the server, and the framework takes care of the request/response cycle.

## [#](#sending-data) Sending Data

When `data-request` is used inside a form, all form input values are sent to the server automatically. You can read them with the `input()` helper:

```
function onSayHello()
{
    $name = input('name');
}
```

You can also send data from individual elements using `data-request-data`:

```
<button data-request="onLoadPage" data-request-data="page: 2">
    Next Page
</button>
```

## [#](#updating-the-page) Updating the Page

The framework can update parts of the page after a request completes. There are two directions:

- **Pull**: the browser requests a partial to be rendered and tells the framework where to put it.
- **Push**: the handler decides what to update and sends the HTML back.

We will explore both approaches in detail in [Updating the Page](docs__user-guide__quickstart__interactive-features__flash-messages-and-loaders.md). For now, just know that the framework can surgically patch the DOM without reloading the entire page.

## [#](#what-we-already-set-up) What We Already Set Up

If you have been following along, your layout already includes this line:

```
___TWIG0___
```

This loads the AJAX framework with its **extras**: automatic validation error display, flash message notifications, and a loading progress bar. We added this when we [created the layout](docs__user-guide__quickstart__editor__creating-a-layout.md), so there is nothing else to set up.

## [#](#next-steps) Next Steps

Now that you understand the basics, let's put the framework to work. Continue to [Build a Form](docs__user-guide__quickstart__interactive-features__building-forms.md) to add a contact form to the team profile page.

For the complete AJAX framework reference, see [AJAX Introduction](docs__4.x__cms__ajax__introduction.md) in the developer documentation.

← [Building the Frontend](docs__user-guide__quickstart__content-management__building-the-frontend.md)[Build a Form](docs__user-guide__quickstart__interactive-features__building-forms.md) →
