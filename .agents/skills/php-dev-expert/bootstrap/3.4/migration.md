# Migrating to v3.x · Bootstrap

> **Fonte / Source:** https://getbootstrap.com/docs/3.4/migration/

---

# Migrating from 2.x to 3.0

Bootstrap 3 is not backwards compatible with v2.x. Use this section as a general guide to upgrading from v2.x to v3.0. For a broader overview, see [what's new](https://blog.getbootstrap.com/2013/08/19/bootstrap-3-released/) in the v3.0 release announcement.

## Major class changes

This table shows the style changes between v2.x and v3.0.

| Bootstrap 2.x | Bootstrap 3.0 |
| --- | --- |
| `.row-fluid` | `.row` |
| `.span*` | `.col-md-*` |
| `.offset*` | `.col-md-offset-*` |
| `.brand` | `.navbar-brand` |
| `.navbar .nav` | `.navbar-nav` |
| `.nav-collapse` | `.navbar-collapse` |
| `.nav-toggle` | `.navbar-toggle` |
| `.btn-navbar` | `.navbar-btn` |
| `.hero-unit` | `.jumbotron` |
| `.icon-*` | `.glyphicon .glyphicon-*` |
| `.btn` | `.btn .btn-default` |
| `.btn-mini` | `.btn-xs` |
| `.btn-small` | `.btn-sm` |
| `.btn-large` | `.btn-lg` |
| `.alert` | `.alert .alert-warning` |
| `.alert-error` | `.alert-danger` |
| `.visible-phone` | `.visible-xs` |
| `.visible-tablet` | `.visible-sm` |
| `.visible-desktop` | Split into `.visible-md .visible-lg` |
| `.hidden-phone` | `.hidden-xs` |
| `.hidden-tablet` | `.hidden-sm` |
| `.hidden-desktop` | Split into `.hidden-md .hidden-lg` |
| `.input-block-level` | `.form-control` |
| `.control-group` | `.form-group` |
| `.control-group.warning .control-group.error .control-group.success` | `.form-group.has-*` |
| `.checkbox.inline` `.radio.inline` | `.checkbox-inline` `.radio-inline` |
| `.input-prepend` `.input-append` | `.input-group` |
| `.add-on` | `.input-group-addon` |
| `.img-polaroid` | `.img-thumbnail` |
| `ul.unstyled` | `.list-unstyled` |
| `ul.inline` | `.list-inline` |
| `.muted` | `.text-muted` |
| `.label` | `.label .label-default` |
| `.label-important` | `.label-danger` |
| `.text-error` | `.text-danger` |
| `.table .error` | `.table .danger` |
| `.bar` | `.progress-bar` |
| `.bar-*` | `.progress-bar-*` |
| `.accordion` | `.panel-group` |
| `.accordion-group` | `.panel .panel-default` |
| `.accordion-heading` | `.panel-heading` |
| `.accordion-body` | `.panel-collapse` |
| `.accordion-inner` | `.panel-body` |

## What's new

We've added new elements and changed some existing ones. Here are the new or updated styles.

| Element | Description |
| --- | --- |
| Panels | `.panel .panel-default` `.panel-body` `.panel-title` `.panel-heading` `.panel-footer` `.panel-collapse` |
| List groups | `.list-group` `.list-group-item` `.list-group-item-text` `.list-group-item-heading` |
| Glyphicons | `.glyphicon` |
| Jumbotron | `.jumbotron` |
| Extra small grid (<768px) | `.col-xs-*` |
| Small grid (≥768px) | `.col-sm-*` |
| Medium grid (≥992px) | `.col-md-*` |
| Large grid (≥1200px) | `.col-lg-*` |
| Responsive utility classes (≥1200px) | `.visible-lg` `.hidden-lg` |
| Offsets | `.col-sm-offset-*` `.col-md-offset-*` `.col-lg-offset-*` |
| Push | `.col-sm-push-*` `.col-md-push-*` `.col-lg-push-*` |
| Pull | `.col-sm-pull-*` `.col-md-pull-*` `.col-lg-pull-*` |
| Input height sizes | `.input-sm` `.input-lg` |
| Input groups | `.input-group` `.input-group-addon` `.input-group-btn` |
| Form controls | `.form-control` `.form-group` |
| Button group sizes | `.btn-group-xs` `.btn-group-sm` `.btn-group-lg` |
| Navbar text | `.navbar-text` |
| Navbar header | `.navbar-header` |
| Justified tabs / pills | `.nav-justified` |
| Responsive images | `.img-responsive` |
| Contextual table rows | `.success` `.danger` `.warning` `.active` `.info` |
| Contextual panels | `.panel-success` `.panel-danger` `.panel-warning` `.panel-info` |
| Modal | `.modal-dialog` `.modal-content` |
| Thumbnail image | `.img-thumbnail` |
| Well sizes | `.well-sm` `.well-lg` |
| Alert links | `.alert-link` |

## What's removed

The following elements have been dropped or changed in v3.0.

| Element | Removed from 2.x | 3.0 Equivalent |
| --- | --- | --- |
| Form actions | `.form-actions` | N/A |
| Search form | `.form-search` | N/A |
| Form group with info | `.control-group.info` | N/A |
| Fixed-width input sizes | `.input-mini` `.input-small` `.input-medium` `.input-large` `.input-xlarge` `.input-xxlarge` | Use [`.form-control`](css.md#forms-controls) and [the grid system](css.md#grid) instead. |
| Block level form input | `.input-block-level` | No direct equivalent, but [forms controls](css.md#forms-controls) are similar. |
| Inverse buttons | `.btn-inverse` | N/A |
| Fluid row | `.row-fluid` | `.row` (no more fixed grid) |
| Controls wrapper | `.controls` | N/A |
| Controls row | `.controls-row` | `.row` or `.form-group` |
| Navbar inner | `.navbar-inner` | N/A |
| Navbar vertical dividers | `.navbar .divider-vertical` | N/A |
| Dropdown submenu | `.dropdown-submenu` | N/A |
| Tab alignments | `.tabs-left` `.tabs-right` `.tabs-below` | N/A |
| Pill-based tabbable area | `.pill-content` | `.tab-content` |
| Pill-based tabbable area pane | `.pill-pane` | `.tab-pane` |
| Nav lists | `.nav-list` `.nav-header` | No direct equivalent, but [list groups](components.md#list-group) and [`.panel-group`s](javascript.md#collapse) are similar. |
| Inline help for form controls | `.help-inline` | No exact equivalent, but `.help-block` is similar. |
| Non-bar-level progress colors | `.progress-info` `.progress-success` `.progress-warning` `.progress-danger` | Use `.progress-bar-*` on the `.progress-bar` instead. |

## Additional notes

Other changes in v3.0 are not immediately apparent. Base classes, key styles, and behaviors have been adjusted for flexibility and our *mobile first* approach. Here's a partial list:

- By default, text-based form controls now receive only minimal styling. For focus colors and rounded corners, apply the `.form-control` class on the element to style.
- Text-based form controls with the `.form-control` class applied are now 100% wide by default. Wrap inputs inside `<div class="col-*"></div>` to control input widths.
- `.badge` no longer has contextual (-success,-primary,etc..) classes.
- `.btn` must also use `.btn-default` to get the "default" button.
- `.row` is now fluid.
- Images are no longer responsive by default. Use `.img-responsive` for fluid `<img>` size.
- The icons, now `.glyphicon`, are now font based. Icons also require a base and icon class (e.g. `.glyphicon .glyphicon-asterisk`).
- Typeahead has been dropped, in favor of using [Twitter Typeahead](http://twitter.github.io/typeahead.js/).
- Modal markup has changed significantly. The `.modal-header`, `.modal-body`, and `.modal-footer` sections are now wrapped in `.modal-content` and `.modal-dialog` for better mobile styling and behavior. Also, you should no longer apply `.hide` to `.modal` in your markup.
- As of v3.1.0, the HTML loaded by the `remote` modal option is now injected into the `.modal-content` (from v3.0.0 to v3.0.3, into the `.modal`) instead of into the `.modal-body`. This allows you to also easily vary the header and footer of the modal, not just the modal body.
- The checkbox and radio features of the button.js plugin now both use `data-toggle="buttons"` instead of `data-toggle="buttons-checkbox"` or `data-toggle="buttons-radio"` in their markup.
- JavaScript events are namespaced. For example, to handle the modal "show" event, use `'show.bs.modal'`. For tabs "shown" use `'shown.bs.tab'`, etc.

For more information on upgrading to v3.0, and code snippets from the community, see [Bootply](https://www.bootply.com/).
