# Non-responsive Template for Bootstrap

> **Fonte / Source:** https://getbootstrap.com/docs/3.4/examples/non-responsive/

---

# Non-responsive Bootstrap

Disable the responsiveness of Bootstrap by fixing the width of the container and using the first grid system tier. [Read the documentation](getting-started.md#disable-responsive) for more information.

### What changes

Note the lack of the `<meta name="viewport" content="width=device-width, initial-scale=1">`, which disables the zooming aspect of sites in mobile devices. In addition, we reset our container's width and changed the navbar to prevent collapsing, and are basically good to go.

### Regarding navbars

As a heads up, the navbar component is rather tricky here in that the styles for displaying it are rather specific and detailed. Overrides to ensure desktop styles display are not as performant or sleek as one would like. Just be aware there may be potential gotchas as you build on top of this example when using the navbar.

### Browsers, scrolling, and fixed elements

Non-responsive layouts highlight a key drawback to fixed elements. **Any fixed component, such as a fixed navbar, will not be scrollable when the viewport becomes narrower than the page content.** In other words, given the non-responsive container width of 970px and a viewport of 800px, you'll potentially hide 170px of content.

There is no way around this as it's default browser behavior. The only solution is a responsive layout or using a non-fixed element.

### Non-responsive grid system

One third

One third

One third
