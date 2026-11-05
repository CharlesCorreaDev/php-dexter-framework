# Text truncation · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/text-truncation

---

# Text truncation

Truncate long strings of text with an ellipsis.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/text-truncation)

On this page…

##### On this page

For longer content, you can add a `.text-truncate` class to truncate the text with an ellipsis. **Requires `display: inline-block` or `display: block`.**

This text is quite long, and will be truncated once displayed.

This text is quite long, and will be truncated once displayed.

HTML

```
<!-- Block level -->
<div class="row">
  <div class="col-2 text-truncate">
    This text is quite long, and will be truncated once displayed.
  </div>
</div>

<!-- Inline level -->
<span class="d-inline-block text-truncate" style="max-width: 150px;">
  This text is quite long, and will be truncated once displayed.
</span>
```
