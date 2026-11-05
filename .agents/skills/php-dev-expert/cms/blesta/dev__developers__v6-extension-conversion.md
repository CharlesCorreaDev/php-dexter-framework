# v6 Extension Conversion Guide | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/v6-extension-conversion

---

Version: 6

On this page

> **Audience:** Plugin and module developers porting an extension from Blesta 5.x to Blesta 6.
>
> **Purpose:** A single, exhaustive reference of the changes a v5 extension's admin views need in order to render natively under Paradigm. Sections are independently consumable: tables, before/after snippets, and rules â no narrative.
>
> **Source:** Distilled from a side-by-side comparison of the Blesta 5.13 and Blesta 6 codebases for `support_manager`, `order`, `cms`, `feed_reader`, `system_overview`, and the core module base classes.

Download as AI context

This entire guide is also available as a single Markdown file you can drop into Claude, ChatGPT, Cursor, or any other AI assistant to perform a one-shot extension conversion: [v6-extension-conversion.md](dev__v6-extension-conversion.md). [Â§17](#17-using-ai-to-convert-your-extension) shows a working prompt to paste alongside it.

Extension Development Kit

For a broader, per-extension-type reference, see the [Blesta Extension Development Kit](https://github.com/blesta/extension-dev-kit) on GitHub. Where this page focuses on the view/UI conversion rules, the dev kit covers the full PHP contract for each extension type and three workflows:

- **Author a new Blesta 6 extension** â modules (hosting and registrar), plugins, and payment gateways (merchant and nonmerchant).
- **Convert a 5.x extension to 6.0** â porting guides per extension type, plus the shared UI conversion reference.
- **Convert a WHMCS extension to Blesta** â provisioning/registrar modules, addon modules, and gateways, with a shared WHMCSâBlesta conventions guide.

The kit is plain Markdown, designed to be used two ways: drop the relevant reference file into any AI tool (Claude, ChatGPT, Cursor, Copilot) as context, or install the folder as a [Claude Code](https://claude.com/claude-code) skill so the right reference is loaded automatically.

- [1. What changed at a glance](#1-what-changed-at-a-glance)
- [2. Conversion checklist (TL;DR)](#2-conversion-checklist-tldr)
- [3. Admin theme: `default` â `paradigm`](#3-admin-theme-default--paradigm)
- [4. Bootstrap 4 â Bootstrap 5 class changes](#4-bootstrap-4--bootstrap-5-class-changes)
- [5. Icons: FontAwesome â Bootstrap Icons](#5-icons-fontawesome--bootstrap-icons)
- [6. JavaScript: jQuery â vanilla JS](#6-javascript-jquery--vanilla-js)
- [7. HTML / markup structural changes](#7-html--markup-structural-changes)
- [8. Form helper usage](#8-form-helper-usage)
- [9. Widget helper changes](#9-widget-helper-changes)
- [10. The new sidebar pattern (Paradigm)](#10-the-new-sidebar-pattern-paradigm)
- [11. CSS, SASS, and theme variables](#11-css-sass-and-theme-variables)
- [12. AJAX patterns](#12-ajax-patterns)
- [13. Module-specific changes (PHP base classes)](#13-module-specific-changes-php-base-classes)
- [14. Composer / PHP / dependency notes](#14-composer--php--dependency-notes)
- [15. Common gotchas](#15-common-gotchas)
- [16. Canonical reference files](#16-canonical-reference-files)
- [17. Using AI to convert your extension](#17-using-ai-to-convert-your-extension)
- [Appendix A â Summary "before vs after" for a typical admin form](#appendix-a--summary-before-vs-after-for-a-typical-admin-form)
- [Appendix B â Quick-reference search/replace table](#appendix-b--quick-reference-searchreplace-table)

---

## 1. What changed at a glance[â](#1-what-changed-at-a-glance "Direct link to 1. What changed at a glance")

| Layer | Blesta 5.x (`default` admin theme) | Blesta 6 (`paradigm` admin theme) |
| --- | --- | --- |
| CSS framework | Bootstrap 4 | **Bootstrap 5** |
| Icon set | FontAwesome 5 (`fas fa-â¦`) | **Bootstrap Icons** (`bi bi-â¦`) |
| JavaScript | jQuery + custom plugins | **Vanilla JS** (no jQuery) |
| Theme switching | None | **Light / Dark mode** via `data-bs-theme` |
| Tooltips | `data-toggle="tooltip"` (auto-init) | `data-bs-toggle="tooltip"` (manual init) |
| Modal confirms | `$.fn.blestaModalConfirm` | `blestaModalConfirm()` global + declarative `.modal-confirm-delete` class |
| Sortable | jQuery UI (`blestaSortable`) | **Sortable.js** |
| AJAX widget swap target | `.common_box_content` | **`.card-content`** |
| Default PHP version | â¥ 7.2 | **â¥ 8.2** |
| Forms inside cards | `<div class="inner">` + `<ul><li>` | `<div class="card-body">` + `<div class="mb-3">` |

**The legacy `default` admin theme has been removed in Blesta 6** â Paradigm is the only admin template, and the `app/views/admin/default/` view tree no longer contains any `.pdt` files. Paradigm does ship a SCSS compatibility shim (`assets/sass/admin/paradigm/_backwards.scss`) that re-styles many legacy v5 class names (`common_box`, `inner`, `pad`, `title_row`, `pull-right`, etc.) onto Bootstrap 5 â so a v5 plugin's `.pdt` files will still render acceptably under Paradigm without conversion. They will look out of place, however; convert your views per the rules below for a native experience.

**Modules in v6 core ship UNCONVERTED** (still BS4 + FA + jQuery markup, leaning on the SCSS shim). Don't model your conversion on the shipped core modules â model it on `app/views/admin/paradigm/admin_clients.pdt` or any of the converted plugins (`order`, `support_manager`, `cms`, `feed_reader`, `system_overview`).

---

## 2. Conversion checklist (TL;DR)[â](#2-conversion-checklist-tldr "Direct link to 2. Conversion checklist (TL;DR)")

Apply these in order:

1. **Bootstrap data attributes**: every `data-toggle`, `data-target`, `data-dismiss`, `data-parent`, `data-placement`, `data-html`, `data-container`, `data-auto-close` gets a `-bs-` infix â `data-bs-toggle`, `data-bs-target`, etc.
2. **Float/margin/text utilities**: `pull-right`/`float-right` â `float-end`; `pull-left`/`float-left` â `float-start`; `ml-N`/`mr-N` â `ms-N`/`me-N`; `pl-N`/`pr-N` â `ps-N`/`pe-N`; `text-left`/`text-right` â `text-start`/`text-end`; `font-weight-bold` â `fw-bold`; `sr-only` â `visually-hidden`.
3. **Buttons**: `btn-default` â `btn-secondary` (or `btn-outline-secondary` for icon-only row actions); `btn-block` â `w-100` (or wrap in `d-grid`).
4. **Badges**: `badge badge-{color}` â `badge bg-{color}`. Yellow needs dark text: `badge bg-warning text-dark`.
5. **Form controls**: pass `'class' => 'form-control'` to text/textarea/file, `'class' => 'form-select'` to selects, `'class' => 'form-check-input'` to checkboxes/radios. Replace `form-group` with `mb-3`. Replace `<ul><li>` form rows with `<div class="mb-3">` blocks. Replace `custom-control` family with `form-check` family.
6. **Form labels**: pass `'class' => 'form-label'` to top-block labels, `'class' => 'form-check-label'` to checkbox/radio labels. Replace `<label class="inline">` with `<label class="form-check-label">`.
7. **Cards**: replace `<div class="inner">` / `<div class="pad">` / `<div class="title_row">` / `<div class="button_row">` with BS5 card sections (see Â§7.2).
8. **Tables**: wrap in `<div class="table-responsive">`; use `<table class="table table-hover mb-0">`; add proper `<thead>`/`<tbody>`; drop `class="heading_row"`, `class="last"`, manual `odd_row` zebra striping.
9. **Modal close**: `<button class="close" data-dismiss="modal"><span>&times;</span></button>` â `<button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>`.
10. **Icons**: replace every `<i class="fas|far|fa fa-â¦">` with `<i class="bi bi-â¦">` (see Â§5 for the mapping table).
11. **JavaScript**: replace every `$(document).ready(...)`, jQuery selector, jQuery event, `$.fn.blestaXxx`, `blestaRequest({dataType:'json'})` with vanilla JS equivalents (see Â§6).
12. **Widget icon registrations**: in `setLinkButtons`, `setLinks`, `setWidgetButton`, and any `'icon' => 'fas fa-â¦'` keys in PHP, change values to `bi bi-â¦`.
13. **Widget renamed buttons**: `setWidgetButton('full_screen')` â `setWidgetButton('full-screen')` (hyphen, not underscore). Optionally add `setWidgetButton('widget-width')` for dashboard widgets.
14. **AJAX swap target**: if your code emits an AJAX widget that replaces `.common_box_content`, change the target to `.card-content`.
15. **Module config.json**: optionally add `"icon": "bi bi-â¦"` so Paradigm renders a nice icon for your module.
16. **Module PHP base class**: rename `arrayToModuleFields()` overrides to `arrayToInputFields()` (old name still works as a deprecated alias).
17. **Test in both light and dark mode** by toggling `<html data-bs-theme="dark">`/`"light"` in DevTools.

---

## 3. Admin theme: `default` â `paradigm`[â](#3-admin-theme-default--paradigm "Direct link to 3-admin-theme-default--paradigm")

### 3.1 Paradigm is the only admin theme[â](#31-paradigm-is-the-only-admin-theme "Direct link to 3.1 Paradigm is the only admin theme")

The legacy default-template view tree (`public_html/app/views/admin/default/*.pdt`) has been **removed** in Blesta 6. Some legacy CSS, JS, and font assets remain at that path (`admin/default/css/`, `admin/default/javascript/`, `admin/default/webfonts/`), but no view code is loaded from them â they are orphaned files retained only to avoid breaking any plugin that hardcoded an asset URL during the transition.

|  | v5 (`default`) | v6 (`paradigm`) |
| --- | --- | --- |
| Views | `public_html/app/views/admin/default/` | `public_html/app/views/admin/paradigm/` |
| SCSS | `assets/sass/admin/default/` | `assets/sass/admin/paradigm/` |
| JS | `assets/scripts/admin/default/` | `assets/scripts/admin/paradigm/` |
| Compiled CSS | `â¦/css/application.min.css` (gitignored, generated) | `â¦/css/application.min.css` (gitignored, generated) |
| Compiled JS | `â¦/javascript/app.min.js` | `â¦/javascript/app.min.js` |
| Theme manifest | n/a | `â¦/paradigm/config.json` declares assets to load |

The active layout is set in `public_html/app/app_controller.php` (`paradigm` for admin, with a `template_dir` company-level override). Do not assume `default` is the active admin theme.

A SCSS backwards-compatibility shim (`assets/sass/admin/paradigm/_backwards.scss`) re-styles many legacy v5 class names (`common_box`, `inner`, `pad`, `title_row`, `button_row`, `pull-right`, etc.) onto Bootstrap 5 so unconverted plugin and module `.pdt` files still render acceptably inside Paradigm. See [Â§11.5](#115-scss-backwards-compat-shims) for the full list.

### 3.2 Plugin `structure.pdt`[â](#32-plugin-structurepdt "Direct link to 32-plugin-structurepdt")

Plugin `views/default/structure.pdt` is unchanged â it remains a pass-through `<?php echo $content ?? null;?>`. Plugins delegate chrome to the host theme. **All your conversion work is in your action `.pdt` files.**

### 3.3 New partials directory[â](#33-new-partials-directory "Direct link to 3.3 New partials directory")

Paradigm extracts shared chrome into `app/views/admin/paradigm/partials/`:

- `sidebar.pdt`, `notifications.pdt`, `admin_query_logger.pdt`
- `main_sidebar.pdt`, `admin_clients_sidebar.pdt`, `admin_settings_sidebar.pdt`, `admin_chatbot_sidebar.pdt`, **`plugin_sidebar.pdt`**

`plugin_sidebar.pdt` is the slot your plugin renders into when registering a side panel â see [Â§10](#10-the-new-sidebar-pattern-paradigm).

---

## 4. Bootstrap 4 â Bootstrap 5 class changes[â](#4-bootstrap-4--bootstrap-5-class-changes "Direct link to 4. Bootstrap 4 â Bootstrap 5 class changes")

### 4.1 Float / spacing / text utilities[â](#41-float--spacing--text-utilities "Direct link to 4.1 Float / spacing / text utilities")

| BS4 | BS5 |
| --- | --- |
| `pull-right`, `float-right` | `float-end` |
| `pull-left`, `float-left` | `float-start` |
| `ml-N` (1â5) | `ms-N` |
| `mr-N` | `me-N` |
| `pl-N` | `ps-N` |
| `pr-N` | `pe-N` |
| `text-left` | `text-start` |
| `text-right` | `text-end` |
| `font-weight-bold` | `fw-bold` |
| `font-weight-normal` | `fw-normal` |
| `font-weight-light` | `fw-light` |
| `sr-only` | `visually-hidden` |
| `sr-only-focusable` | `visually-hidden-focusable` |
| `text-monospace` | `font-monospace` |

`mt-N`, `mb-N`, `pt-N`, `pb-N`, `m-N`, `p-N` are unchanged.

### 4.2 Buttons[â](#42-buttons "Direct link to 4.2 Buttons")

| BS4 | BS5 |
| --- | --- |
| `btn-default` | `btn-secondary` (or `btn-outline-secondary` for icon-only) |
| `btn-block` | `w-100` (or wrap parent in `d-grid`) |

```
- <a class="btn btn-default float-right btn-sm" href="#">Cancel</a>  
+ <a class="btn btn-outline-secondary float-end btn-sm" href="#">Cancel</a>  
  
- <button class="btn btn-block btn-info">Action</button>  
+ <button class="btn w-100 btn-info">Action</button>
```

Row action buttons are now icon-only outline buttons:

```
<a href="<?php echo $edit_url;?>" class="btn btn-sm btn-outline-secondary" title="Edit">  
    <i class="bi bi-pencil"></i>  
</a>  
<button type="button" class="btn btn-sm btn-outline-danger modal-confirm-delete"  
        data-confirm-message="<?php echo $this->Html->safe($confirm_msg);?>"  
        title="Delete">  
    <i class="bi bi-trash"></i>  
</button>
```

### 4.3 Badges[â](#43-badges "Direct link to 4.3 Badges")

```
- <span class="badge badge-secondary">5</span>  
- <span class="badge badge-info">Info</span>  
- <span class="badge badge-warning">Warn</span>  
+ <span class="badge bg-secondary">5</span>  
+ <span class="badge bg-info text-dark">Info</span>  
+ <span class="badge bg-warning text-dark">Warn</span>
```

The yellow palette (`bg-warning`, `bg-info`, `bg-light`) needs `text-dark` for contrast in BS5.

Tab counters become real badges:

```
- 'name' => $label . ' <span>(' . $count . ')</span>'  
+ 'name' => $label . ' <span class="badge bg-secondary ms-2">' . $count . '</span>'
```

A typical priority/status mapping helper:

```
$priority_classes = [  
    'emergency' => 'bg-danger',  
    'critical'  => 'bg-warning text-dark',  
    'high'      => 'bg-info text-dark',  
    'medium'    => 'bg-primary',  
    'low'       => 'bg-secondary'  
];  
$badge_class = $priority_classes[$ticket->priority] ?? 'bg-secondary';  
?>  
<span class="badge <?php echo $badge_class;?>"><?php echo $priorities[$ticket->priority];?></span>
```

### 4.4 Bootstrap data attributes (the `-bs-` infix)[â](#44-bootstrap-data-attributes-the--bs--infix "Direct link to 44-bootstrap-data-attributes-the--bs--infix")

Every Bootstrap-controlled `data-*` attribute gets a `bs-` prefix:

| BS4 | BS5 |
| --- | --- |
| `data-toggle="tab"` | `data-bs-toggle="tab"` |
| `data-toggle="collapse"` | `data-bs-toggle="collapse"` |
| `data-toggle="tooltip"` | `data-bs-toggle="tooltip"` |
| `data-toggle="modal"` | `data-bs-toggle="modal"` |
| `data-toggle="dropdown"` | `data-bs-toggle="dropdown"` |
| `data-target="#x"` | `data-bs-target="#x"` |
| `data-dismiss="modal"` | `data-bs-dismiss="modal"` |
| `data-dismiss="alert"` | `data-bs-dismiss="alert"` |
| `data-parent="#x"` | `data-bs-parent="#x"` |
| `data-placement="top"` | `data-bs-placement="top"` |
| `data-html="true"` | `data-bs-html="true"` |
| `data-container="body"` | `data-bs-container="body"` |
| `data-auto-close="outside"` | `data-bs-auto-close="outside"` |

### 4.5 Forms â controls, groups, checks[â](#45-forms--controls-groups-checks "Direct link to 4.5 Forms â controls, groups, checks")

| BS4 | BS5 |
| --- | --- |
| `<div class="form-group">` | `<div class="mb-3">` |
| `<div class="form-row">` | `<div class="row g-3">` |
| `<input class="form-control">` | unchanged |
| `<select class="form-control">` | `<select class="form-select">` |
| `<div class="custom-control custom-checkbox">` | `<div class="form-check">` |
| `<input class="custom-control-input">` | `<input class="form-check-input">` |
| `<label class="custom-control-label">` | `<label class="form-check-label">` |
| `<select class="custom-select">` | `<select class="form-select">` |
| `<input type="file" class="custom-file">` | `<input type="file" class="form-control">` |

The Blesta `Form` helper does **not** auto-inject BS5 classes. You must pass them on every call:

```
- $this->Form->fieldText('name', $val, ['id' => 'name']);  
- $this->Form->fieldSelect('priority', $opts, $val, ['id' => 'priority']);  
- $this->Form->fieldCheckbox('clients_only', '1', $checked, ['id' => 'clients_only']);  
- $this->Form->label('Name', 'name');  
+ $this->Form->fieldText('name', $val, ['id' => 'name', 'class' => 'form-control']);  
+ $this->Form->fieldSelect('priority', $opts, $val, ['id' => 'priority', 'class' => 'form-select']);  
+ $this->Form->fieldCheckbox('clients_only', '1', $checked, ['id' => 'clients_only', 'class' => 'form-check-input']);  
+ $this->Form->label('Name', 'name', ['class' => 'form-label']);
```

### 4.6 Form layout: `<ul><li>` â `<div class="mb-3">`[â](#46-form-layout-ulli--div-classmb-3 "Direct link to 46-form-layout-ulli--div-classmb-3")

The single largest pattern change. The legacy "list of fields" wrapper is gone:

```
- <div class="pad">  
-     <ul>  
-         <li>  
-             <?php $this->Form->label('Name', 'name'); ?>  
-             <?php $this->Form->fieldText('name', null, ['id' => 'name']); ?>  
-         </li>  
-         <li>  
-             <?php $this->Form->fieldCheckbox('enabled', '1', $checked, ['id' => 'enabled']); ?>  
-             <?php $this->Form->label('Enabled', 'enabled', ['class' => 'inline']); ?>  
-         </li>  
-     </ul>  
- </div>  
+ <div class="mb-3">  
+     <?php $this->Form->label('Name', 'name', ['class' => 'form-label']); ?>  
+     <?php $this->Form->fieldText('name', null, ['id' => 'name', 'class' => 'form-control']); ?>  
+ </div>  
+ <div class="mb-3">  
+     <div class="form-check">  
+         <?php $this->Form->fieldCheckbox('enabled', '1', $checked, ['id' => 'enabled', 'class' => 'form-check-input']); ?>  
+         <?php $this->Form->label('Enabled', 'enabled', ['class' => 'form-check-label']); ?>  
+     </div>  
+ </div>
```

Inline checkbox/radio groups use `form-check-inline`:

```
<div class="form-check form-check-inline">  
    <?php $this->Form->fieldCheckbox('opt[a]', '1', $checked, [  
        'id' => 'opt_a', 'class' => 'form-check-input'  
    ]); ?>  
    <label class="form-check-label" for="opt_a">Option A</label>  
</div>
```

Toggle switches:

```
<div class="form-check form-switch">  
    <?php $this->Form->fieldCheckbox('feature_enabled', 'true', $vars->feature_enabled === 'true', [  
        'id' => 'feature_enabled', 'class' => 'form-check-input'  
    ]); ?>  
    <label class="form-check-label" for="feature_enabled">Enable feature</label>  
</div>
```

Bracketed names need underscore IDs (because `<label for="">` requires a valid HTML id):

```
- 'id' => 'settings[email][' . $key . ']'  
- $this->Form->label($label, 'settings[email][' . $key . ']', ['class' => 'inline']);  
+ 'id' => 'settings_email_' . $key  
+ <label class="form-check-label" for="settings_email_<?php echo $key;?>"><?php echo $label;?></label>
```

### 4.7 Sized form controls[â](#47-sized-form-controls "Direct link to 4.7 Sized form controls")

```
<input class="form-control form-control-sm">  
<select class="form-select form-select-sm">  
<button class="btn btn-sm btn-primary">
```

### 4.8 Modal close button[â](#48-modal-close-button "Direct link to 4.8 Modal close button")

```
- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>  
+ <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
```

`.close` is removed in BS5. The new `.btn-close` is an icon-only square button â no text content.

### 4.9 Tabs[â](#49-tabs "Direct link to 4.9 Tabs")

Native BS5 tabs. The legacy Blesta `tab_content` / `tabs` / `current` markup (driven by jQuery `blestaTabbedContent`) is replaced:

```
- <div class="tab_content">  
-     <ul class="tabs">  
-         <li class="current"><a href="#">Reply</a></li>  
-         <li><a href="#">Note</a></li>  
-     </ul>  
-     <div class="inner_content">  
-         <div>...</div>  
-         <div>...</div>  
-     </div>  
- </div>  
+ <ul class="nav nav-tabs-connected" role="tablist">  
+     <li class="nav-item" role="presentation">  
+         <button class="nav-link active" id="tab-reply-btn" type="button" role="tab"  
+                 data-bs-toggle="tab" data-bs-target="#tab-reply">Reply</button>  
+     </li>  
+     <li class="nav-item" role="presentation">  
+         <button class="nav-link" id="tab-note-btn" type="button" role="tab"  
+                 data-bs-toggle="tab" data-bs-target="#tab-note">Note</button>  
+     </li>  
+ </ul>  
+ <div class="tab-content tab-content-connected mb-3">  
+     <div class="tab-pane fade show active" id="tab-reply" role="tabpanel">...</div>  
+     <div class="tab-pane fade" id="tab-note" role="tabpanel">...</div>  
+ </div>
```

`nav-tabs-connected` and `tab-content-connected` are **Paradigm-specific** classes that flush-mount tabs against a card edge. Stock BS5 `nav-tabs` works too.

### 4.10 Tooltips[â](#410-tooltips "Direct link to 4.10 Tooltips")

```
- <a data-toggle="tooltip" title="Help text">  
-     <i class="fas fa-question-circle"></i>  
- </a>  
+ <i class="bi bi-info-circle ms-1"  
+    data-bs-toggle="tooltip" data-bs-placement="top"  
+    title="<?php echo $this->Html->safe($help_text);?>"></i>
```

Tooltips are no longer auto-initialized. After page load (and after AJAX swaps), explicitly init:

```
document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {  
    new bootstrap.Tooltip(el);  
});
```

For HTML content add `data-bs-html="true"`. For tooltips that escape `overflow:hidden` parents add `data-bs-container="body"`.

### 4.11 Backgrounds / theme-aware colors[â](#411-backgrounds--theme-aware-colors "Direct link to 4.11 Backgrounds / theme-aware colors")

```
- <div class="bg-light p-3">  
+ <div class="bg-body-secondary p-3">  
  
- <pre class="bg-light"><code>...</code></pre>  
+ <pre class="bg-body-secondary"><code>...</code></pre>
```

`bg-body-secondary` is BS 5.3+ and is theme-aware (works in light and dark mode). `bg-light` is hard-coded light gray and looks broken in dark mode.

### 4.12 Column / grid[â](#412-column--grid "Direct link to 4.12 Column / grid")

| BS4 | BS5 |
| --- | --- |
| `col-xs-N` | `col-N` (bare `col-` is now the smallest breakpoint) |
| `row.equal` (custom equal-height) | `row` + `g-N` gutter / Bootstrap's flex utilities |

```
- <div class="col-md-2 col-xs-4">  
- <div class="row equal">  
+ <div class="col-md-2 col-4">  
+ <div class="row g-2">
```

### 4.13 Spinners[â](#413-spinners "Direct link to 4.13 Spinners")

```
<div class="spinner-border spinner-border-sm text-secondary" role="status">  
    <span class="visually-hidden">Loading...</span>  
</div>
```

### 4.14 Empty states[â](#414-empty-states "Direct link to 4.14 Empty states")

```
- <div class="empty_section">  
-     <div class="empty_box">No results.</div>  
- </div>  
+ <div class="card-body text-center text-muted py-5">  
+     <i class="bi bi-inbox" style="font-size: 3rem; opacity: 0.3;"></i>  
+     <p class="mt-3 mb-0">No results.</p>  
+ </div>
```

Pick a contextual icon: `bi-inbox` (tickets, lists), `bi-cart` (orders), `bi-cash-stack` (invoices/payouts), `bi-people` (clients/staff), `bi-box` (products), `bi-search` (search), `bi-file-earmark-text` (articles), `bi-building` (departments), `bi-input-cursor-text` (custom fields), `bi-calendar-week` (schedules).

### 4.15 Pagination[â](#415-pagination "Direct link to 4.15 Pagination")

```
- <?php $this->Pagination->build();?>  
+ <?php if (isset($this->Pagination) && $this->Pagination->hasPages()) { ?>  
+ <div class="card-footer">  
+     <?php $this->Pagination->build();?>  
+ </div>  
+ <?php } ?>
```

Wrap in a card-footer and guard with `hasPages()` so empty paginators don't render.

### 4.16 Bulk actions bar[â](#416-bulk-actions-bar "Direct link to 4.16 Bulk actions bar")

```
<div class="bulk-actions-bar" id="ticket_actions" style="display:none;">  
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">  
        <span class="selected-count">0 items selected</span>  
        <div class="d-flex gap-2 align-items-center flex-wrap">  
            <?php $this->Form->fieldSelect('action', $actions, '', [  
                'id' => 'ticket_action',  
                'class' => 'form-select form-select-sm',  
                'style' => 'width: auto;'  
            ]); ?>  
            <?php $this->Form->fieldSubmit('save', 'Update', ['class' => 'btn btn-sm btn-primary']); ?>  
        </div>  
    </div>  
</div>
```

`.bulk-actions-bar` and `.selected-count` are Paradigm helper classes.

### 4.17 Misc[â](#417-misc "Direct link to 4.17 Misc")

| Old | New |
| --- | --- |
| `<div class="clear"></div>` | (drop â flex/grid replaces clearfix needs) |
| `<div class="accent_box">` | `<div class="alert alert-info">` |
| `<div class="title_row [first]"><h3>â¦</h3></div>` | `<h6 class="form-section-header">â¦</h6>` |
| `<div class="thumbnail">` | `<div class="template-preview-card">` (Paradigm class) |
| `class="quiet"` | drop |
| `class="block"`, `class="inline"`, `class="stretch"` | drop or replace with utility (`d-block`, `d-inline`, `flex-grow-1`) |

---

## 5. Icons: FontAwesome â Bootstrap Icons[â](#5-icons-fontawesome--bootstrap-icons "Direct link to 5. Icons: FontAwesome â Bootstrap Icons")

Every `<i class="fas|far|fa fa-â¦">` must become `<i class="bi bi-â¦">`. Drop `fa-fw` (no equivalent).

### 5.1 Comprehensive mapping[â](#51-comprehensive-mapping "Direct link to 5.1 Comprehensive mapping")

| FontAwesome 5/6 | Bootstrap Icons | Notes |
| --- | --- | --- |
| `fas fa-plus` / `fa-plus fa-fw` | `bi bi-plus-lg` | "Add" buttons |
| `fas fa-plus-circle` | `bi bi-plus-circle` | Add row/option |
| `fas fa-minus` | `bi bi-dash-lg` |  |
| `fas fa-times` | `bi bi-x-lg` | Close |
| `fas fa-times-circle` | `bi bi-x-circle` | Clear filter |
| `fas fa-check` | `bi bi-check-lg` |  |
| `fas fa-check-circle` | `bi bi-check-circle` (or `bi-check-circle-fill text-success`) |  |
| `fas fa-pencil-alt` / `fa-pencil` | `bi bi-pencil` | Edit |
| `fas fa-trash` / `fa-trash-alt` | `bi bi-trash` | Delete |
| `fas fa-cog` / `fa-gear` / `fa-cogs` | `bi bi-gear` (or `bi-gear-wide-connected`) | Settings |
| `fas fa-eye` | `bi bi-eye` | Visible |
| `fas fa-eye-slash` | `bi bi-eye-slash` | Hidden |
| `fas fa-info-circle` | `bi bi-info-circle` | Info / tooltip |
| `fas fa-exclamation-triangle` | `bi bi-exclamation-triangle` | Warning |
| `fas fa-question-circle` | `bi bi-question-circle` | Help tooltip |
| `fas fa-shield` / `fa-shield-alt` | `bi bi-shield-exclamation` | Security/CSRF warning |
| `fas fa-ban` | `bi bi-ban` (or `bi-x-circle`) |  |
| `fas fa-arrow-up` | `bi bi-arrow-up` |  |
| `fas fa-arrow-down` | `bi bi-arrow-down` |  |
| `fas fa-arrow-left` | `bi bi-arrow-left` | Back |
| `fas fa-arrow-right` | `bi bi-arrow-right` | Forward |
| `fas fa-arrow-circle-left` | `bi bi-arrow-left-circle` |  |
| `fas fa-arrow-circle-right` | `bi bi-arrow-right-circle` |  |
| `fas fa-angle-left` / `fa-chevron-left` | `bi bi-chevron-left` |  |
| `fas fa-angle-right` / `fa-chevron-right` | `bi bi-chevron-right` |  |
| `fas fa-chevron-up` | `bi bi-chevron-up` |  |
| `fas fa-chevron-down` | `bi bi-chevron-down` |  |
| `fas fa-caret-down` | `bi bi-chevron-down` | Collapse caret |
| `fas fa-caret-up` | `bi bi-chevron-up` |  |
| `fas fa-arrows-alt` | `bi bi-grip-vertical` | Drag handle (use `bi-grip-vertical` for sortable) |
| `fas fa-grip-vertical` | `bi bi-grip-vertical` |  |
| `fas fa-arrows-fullscreen` | `bi bi-arrows-fullscreen` |  |
| `fas fa-arrows-angle-contract` | `bi bi-arrows-angle-contract` |  |
| `fas fa-arrows-angle-expand` | `bi bi-arrows-angle-expand` |  |
| `fas fa-fullscreen-exit` | `bi bi-fullscreen-exit` |  |
| `fas fa-level-up-alt fa-rotate-90` | `bi bi-arrow-90deg-up` | "Service info" header arrow |
| `fas fa-level-down-alt fa-rotate-180` | `bi bi-arrow-return-left` |  |
| `fas fa-share fa-flip-vertical` | `bi bi-reply-fill` (or `bi-arrow-return-left`) | "Service info" client arrow |
| `fas fa-reply` | `bi bi-reply` |  |
| `fas fa-redo-alt` / `fa-sync-alt` | `bi bi-arrow-clockwise` | Refresh / regenerate |
| `fas fa-exchange-alt` | `bi bi-arrow-left-right` |  |
| `fas fa-link` | `bi bi-link-45deg` |  |
| `fas fa-unlink` | `bi bi-link-45deg` (no exact unlink â combine with overlay) |  |
| `fas fa-external-link-alt` | `bi bi-box-arrow-up-right` | External link |
| `fas fa-sign-in-alt` | `bi bi-box-arrow-in-right` | Login as client |
| `fas fa-sign-out-alt` | `bi bi-box-arrow-right` |  |
| `fas fa-power-off` | `bi bi-power` |  |
| `fas fa-play` | `bi bi-play-fill` |  |
| `fas fa-stop` | `bi bi-stop-fill` |  |
| `fas fa-lock` | `bi bi-lock` |  |
| `fas fa-key` | `bi bi-key` |  |
| `fas fa-envelope` / `fa-envelope-open-text` | `bi bi-envelope` |  |
| `fas fa-calendar` | `bi bi-calendar3` |  |
| `fas fa-calendar-x` | `bi bi-calendar-x` |  |
| `fas fa-calendar-week` | `bi bi-calendar-week` |  |
| `fas fa-clock` | `bi bi-clock` |  |
| `fas fa-history` / `fa-clock-history` | `bi bi-clock-history` |  |
| `fas fa-user` | `bi bi-person` |  |
| `fas fa-users` | `bi bi-people` |  |
| `fas fa-user-circle` | `bi bi-person-circle` |  |
| `fas fa-tag` | `bi bi-tag` |  |
| `fas fa-tags` | `bi bi-tags` |  |
| `fas fa-folder` | `bi bi-folder2` (or `bi-folder-fill` for solid) |  |
| `fas fa-folder-open` | `bi bi-folder2-open` |  |
| `fas fa-folder-plus` | `bi bi-folder-plus` |  |
| `fas fa-file` / `fa-file-alt` | `bi bi-file-text` (or `bi-file-earmark-text`) |  |
| `fas fa-paperclip` | `bi bi-paperclip` | Attachments |
| `fas fa-image` | `bi bi-image` |  |
| `fas fa-cloud-upload-alt` | `bi bi-cloud-upload` | File drop zone |
| `fas fa-upload` | `bi bi-upload` |  |
| `fas fa-download` | `bi bi-download` |  |
| `fas fa-clone` / `fa-copy` | `bi bi-files` (or `bi-clipboard`) |  |
| `fas fa-clipboard` | `bi bi-clipboard` |  |
| `fas fa-clipboard-check` | `bi bi-clipboard-check` |  |
| `fas fa-search` | `bi bi-search` |  |
| `fas fa-filter` | `bi bi-funnel` (or `bi-funnel-fill`) |  |
| `fas fa-bars` | `bi bi-list` |  |
| `fas fa-list` | `bi bi-list-ul` |  |
| `fas fa-money-bill-wave` | `bi bi-cash-stack` |  |
| `fas fa-dollar-sign` | `bi bi-currency-dollar` |  |
| `fas fa-chart-bar` | `bi bi-bar-chart` | Stats |
| `fas fa-chart-line` | `bi bi-graph-up` |  |
| `fas fa-chart-pie` | `bi bi-pie-chart` |  |
| `fas fa-database` | `bi bi-database` |  |
| `fas fa-server` | `bi bi-hdd-rack` |  |
| `fas fa-hdd` | `bi bi-hdd` |  |
| `fas fa-microchip` | `bi bi-cpu` |  |
| `fas fa-ethernet` | `bi bi-ethernet` (or `bi-hdd-network`) |  |
| `fas fa-globe` / `fa-globe-americas` | `bi bi-globe-americas` |  |
| `fas fa-sitemap` | `bi bi-diagram-3` |  |
| `fas fa-terminal` | `bi bi-terminal` |  |
| `fas fa-music` | `bi bi-music-note` |  |
| `fas fa-moon` | `bi bi-moon` | Dark mode toggle |
| `fas fa-sun` | `bi bi-sun` | Light mode toggle |
| `fas fa-bell` | `bi bi-bell` |  |
| `fas fa-star` (filled) | `bi bi-star-fill` |  |
| `far fa-star` (empty) | `bi bi-star` |  |
| `fas fa-stars` | `bi bi-stars` | AI feature indicator |
| `fas fa-stickynote` / `fa-sticky-note` | `bi bi-sticky` | Internal notes |
| `fas fa-chat-square-text` | `bi bi-chat-square-text` | Predefined responses |
| `fas fa-chat-left-quote` | `bi bi-chat-left-quote` | Customer comment |
| `fas fa-comment` | `bi bi-chat` |  |
| `fas fa-lightbulb` | `bi bi-lightbulb` |  |
| `fas fa-certificate` | `bi bi-patch-check` (or `bi-award`) |  |
| `fas fa-hand-point-right` | `bi bi-hand-index` |  |
| `fas fa-shield-exclamation` | `bi bi-shield-exclamation` |  |
| `fas fa-inbox` | `bi bi-inbox` |  |
| `fas fa-building` | `bi bi-building` |  |

### 5.2 Icon classes in PHP[â](#52-icon-classes-in-php "Direct link to 5.2 Icon classes in PHP")

The framework's `setLinkButtons`, `setLinks`, `setWidgetButton`, and module `getAdminTabs`/`getClientTabs` arrays all carry an `'icon'` key:

```
  $link_buttons[] = [  
      'name' => $this->_('AdminMain.btn_add', true),  
      'attributes' => ['href' => $url],  
-     'icon' => 'fas fa-plus'  
+     'icon' => 'bi bi-plus-lg'  
  ];  
  
  // Module PHP file (e.g. cpanel.php)  
- 'tabClientActions' => ['name' => Language::_('Cpanel.tab_client_actions', true), 'icon' => 'fas fa-cog'],  
- 'tabClientLogin'   => ['name' => Language::_('Cpanel.tab_client_login',   true), 'icon' => 'fas fa-sign-in-alt'],  
+ 'tabClientActions' => ['name' => Language::_('Cpanel.tab_client_actions', true), 'icon' => 'bi bi-gear'],  
+ 'tabClientLogin'   => ['name' => Language::_('Cpanel.tab_client_login',   true), 'icon' => 'bi bi-box-arrow-in-right'],
```

### 5.3 Status icons with semantic colors[â](#53-status-icons-with-semantic-colors "Direct link to 5.3 Status icons with semantic colors")

```
- <i class="fas fa-check-circle"></i>  <!-- CSS-styled green -->  
- <i class="fas fa-times-circle"></i>  <!-- CSS-styled red -->  
+ <i class="bi bi-check-circle text-success"></i>  
+ <i class="bi bi-x-circle text-danger"></i>
```

For services:

- Active service: `bi bi-check-circle-fill text-success`
- Scheduled cancellation: `bi bi-calendar-x text-warning`
- Pending change (client): `bi bi-clock-history text-warning`
- Pending change (billing): `bi bi-clock text-info`

### 5.4 Empty state icons[â](#54-empty-state-icons "Direct link to 5.4 Empty state icons")

`<i class="bi bi-inbox" style="font-size: 3rem; opacity: 0.3;"></i>` or `class="bi bi-inbox fs-1 mb-3 d-block opacity-50"`. Pick by context (see Â§4.14).

---

## 6. JavaScript: jQuery â vanilla JS[â](#6-javascript-jquery--vanilla-js "Direct link to 6. JavaScript: jQuery â vanilla JS")

Paradigm bundles **no jQuery**. Every script in your converted views must be vanilla JS.

### 6.1 DOM ready[â](#61-dom-ready "Direct link to 6.1 DOM ready")

```
- $(document).ready(function() { ... });  
+ document.addEventListener('DOMContentLoaded', function() { ... });
```

For widget/AJAX-loaded scripts that may run after DOMContentLoaded has already fired, use the IIFE pattern:

```
(function() {  
    'use strict';  
    function init() { /* ... */ }  
    if (document.readyState === 'loading') {  
        document.addEventListener('DOMContentLoaded', init);  
    } else {  
        init();  
    }  
    document.addEventListener('blestaAjaxComplete', init);   // re-bind after AJAX swaps  
})();
```

### 6.2 Selector / event idiom replacements[â](#62-selector--event-idiom-replacements "Direct link to 6.2 Selector / event idiom replacements")

| jQuery | Vanilla JS |
| --- | --- |
| `$('#x')` | `document.getElementById('x')` |
| `$('.x')` | `document.querySelectorAll('.x')` |
| `$(el).find('.x')` | `el.querySelectorAll('.x')` |
| `$(el).closest('.x')` | `el.closest('.x')` |
| `$(el).val()` / `.val(v)` | `el.value` / `el.value = v` |
| `$(el).text(s)` | `el.textContent = s` |
| `$(el).html(s)` | `el.innerHTML = s` |
| `$(el).attr('href', x)` | `el.setAttribute('href', x)` (or `el.href = x`) |
| `$(el).prop('checked', true)` | `el.checked = true` |
| `$(el).prop('disabled', true)` | `el.disabled = true` |
| `$(el).addClass('x')` / `.removeClass('x')` / `.toggleClass('x')` | `el.classList.add/remove/toggle('x')` |
| `$(el).show()` / `.hide()` | `el.style.display = 'block'` / `'none'` (or `el.classList.toggle('d-none')`) |
| `$(el).next()` | `el.nextElementSibling` |
| `$(el).parents('ul').first()` | `el.closest('ul')` |
| `$(el).each(fn)` | `Array.from(els).forEach(fn)` or `els.forEach(fn)` (for NodeList) |
| `$('#x').click(fn)` | `document.getElementById('x').addEventListener('click', fn)` |
| `$(document).on('click', '.x', fn)` | document-level delegation (see Â§6.3) |
| `$.param(obj)` | `new URLSearchParams(obj).toString()` |
| `$('form').serialize()` | `new URLSearchParams(new FormData(form)).toString()` |
| `$('form').serializeArray()` | `Object.fromEntries(new FormData(form))` |

### 6.3 Document-level delegation[â](#63-document-level-delegation "Direct link to 6.3 Document-level delegation")

Replace `$(document).on('click', '.foo', fn)` with:

```
document.addEventListener('click', function(e) {  
    var btn = e.target.closest('.foo');  
    if (!btn) return;  
    e.preventDefault();  
    // ...  
});
```

This survives AJAX content swaps automatically.

### 6.4 Bootstrap 5 component access[â](#64-bootstrap-5-component-access "Direct link to 6.4 Bootstrap 5 component access")

```
// Tooltips  
document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {  
    new bootstrap.Tooltip(el);  
});  
  
// Modals  
var modalEl = document.getElementById('myModal');  
var modal = bootstrap.Modal.getOrCreateInstance(modalEl);  
modal.show();   // .hide() / .toggle()  
  
// Dropdowns  
var ddEl = document.getElementById('myDropdownBtn');  
var dd = bootstrap.Dropdown.getOrCreateInstance(ddEl);  
dd.toggle();  
  
// Collapse  
var cEl = document.getElementById('myCollapse');  
var collapse = bootstrap.Collapse.getOrCreateInstance(cEl, { toggle: false });  
collapse.show();   // .hide() / .toggle()  
  
// Tabs  
var tabEl = document.querySelector('button[data-bs-target="#tab-reply"]');  
var tab = bootstrap.Tab.getOrCreateInstance(tabEl);  
tab.show();
```

### 6.5 Paradigm global helpers (replacing jQuery plugin form)[â](#65-paradigm-global-helpers-replacing-jquery-plugin-form "Direct link to 6.5 Paradigm global helpers (replacing jQuery plugin form)")

`assets/scripts/admin/paradigm/application.js` exposes these globals on `window`. They replace the jQuery plugin form (`$.fn.blestaXxx`):

| v5 (jQuery plugin) | v6 (vanilla global) |
| --- | --- |
| `$('a').blestaModal({â¦})` | `blestaModal(element, {â¦})` |
| `$('a').blestaModalConfirm({â¦})` | `blestaModalConfirm(element, {â¦})` (or declarative `.modal-confirm-delete` class) |
| `$('.col').blestaLoadWidgets({â¦})` | `blestaLoadWidgets('.col', {â¦})` |
| `$.blestaRequest(method, uri, data, â¦)` | `blestaRequest(method, uri, data, â¦)` |
| `$('input').blestaBindToolTips()` | `blestaBindToolTips(container)` |
| `$('textarea').blestaBindWysiwygEditor({â¦})` | `blestaBindWysiwygEditor(selector, {â¦})` |
| (legacy markdown editor) | `blestaBindMarkdownEditor(container)` (Toast UI) |
| `$('.drag').blestaSortable(handle, {â¦})` | `blestaSortable(element, handle, {â¦})` (Sortable.js wrapper) |
| `$('table').blestaUpdateRow(uri, '.x')` | `blestaUpdateRow(element, uri, container)` |
| `$('a').blestaTabbedContent()` | use native BS5 tabs (`data-bs-toggle="tab"`) |
| `$('.area').blestaBindToggleEvent(â¦)` | use BS5 Collapse (`data-bs-toggle="collapse"`) |
| `$('input').blestaBindPasswordGenerator()` | `blestaBindPasswordGenerator(container)` |

Other useful globals: `blestaBindGuiEvents(container, options)` (master init), `blestaBindGlobalGuiEvents(container, options)`, `blestaBindDatePicker(container)`, `blestaBindDropZone(container)`, `blestaSubmitOnClick(element, formId)`, `blestaScrollDom`, `blestaSetInvTotals`, `blestaPushState`, `blestaSlideToggle`, `blestaBindCloseMessage`, `blestaBindPreventDoubleSubmission`, `blestaDisableFormSubmission`, `blestaEnableFormSubmission`.

### 6.6 The `blestaAjaxComplete` event[â](#66-the-blestaajaxcomplete-event "Direct link to 66-the-blestaajaxcomplete-event")

After AJAX-swapping content into the DOM, dispatch this event so global initializers (expandable rows, quick-jump menu, tooltips, modal-confirm bindings) re-attach:

```
document.dispatchEvent(new Event('blestaAjaxComplete'));
```

Listeners include `expandable-rows.js`, the quick-jump dropdown, and various view-level widgets. **You must dispatch this** when you replace a chunk of DOM with `innerHTML = â¦`.

### 6.7 Modal confirm pattern (declarative)[â](#67-modal-confirm-pattern-declarative "Direct link to 6.7 Modal confirm pattern (declarative)")

Replaces `$.fn.blestaModalConfirm`:

```
<button type="button" class="btn btn-sm btn-outline-danger modal-confirm-delete"  
        data-confirm-message="<?php echo $this->Html->safe($confirm_msg);?>"  
        title="Delete">  
    <i class="bi bi-trash"></i>  
</button>
```

Three button classes set color/icon: `.modal-confirm` (neutral), `.modal-confirm-success` (green), `.modal-confirm-delete` (red). They are auto-bound by Paradigm globals. After AJAX swaps, re-bind explicitly:

```
function initModalConfirms() {  
    if (typeof blestaModalConfirm === 'function') {  
        blestaModalConfirm('.modal-confirm');  
        blestaModalConfirm('.modal-confirm-delete');  
        blestaModalConfirm('.modal-confirm-success');  
    }  
}  
document.addEventListener('blestaAjaxComplete', initModalConfirms);
```

When the trigger is inside a `<form>` (delete is a real form submit, not just a confirm dialog) wrap in `Form->create([...], ['class' => 'd-inline'])` so the form sits inline.

### 6.8 Sortable (`Sortable.js`)[â](#68-sortable-sortablejs "Direct link to 68-sortable-sortablejs")

```
// jQuery UI sortable (legacy)  
$('table.fields_table tbody').blestaSortable(false, {  
    cancel: 'tr.expand_details,input,textarea',  
    start: function() { ... },  
    stop: function() { ... }  
});  
  
// Sortable.js (Paradigm)  
var tbody = document.querySelector('table.fields_table tbody');  
if (tbody && typeof Sortable !== 'undefined') {  
    Sortable.create(tbody, {  
        animation: 150,  
        handle: '.sortable-drag-handle',     // or .movable  
        draggable: 'tr[data-field-id]',  
        ghostClass: 'sortable-ghost',  
        onEnd: function(evt) {  
            // POST new order to server with CSRF token  
        }  
    });  
}
```

### 6.9 Toast UI Editor access[â](#69-toast-ui-editor-access "Direct link to 6.9 Toast UI Editor access")

```
// Get the editor instance from a textarea with data-markdown-editor  
var textarea = document.getElementById('reply_details');  
var editorDiv = textarea ? textarea.nextElementSibling : null;  
while (editorDiv && !editorDiv._editor) {  
    editorDiv = editorDiv.nextElementSibling;  
}  
if (editorDiv && editorDiv._editor) {  
    var editor = editorDiv._editor;  
    editor.changeMode('wysiwyg');           // or 'markdown'  
    editor.changePreviewStyle('vertical');  // or 'tab'  
    editor.insertText('text\n');  
    editor.setMarkdown(currentContent);  
    editor.focus();  
}
```

The editor is bound by the global `blestaBindMarkdownEditor()` which scans for `textarea[data-markdown-editor]` on DOMContentLoaded. To get inline image upload support, set `data-image-upload-url`:

```
$this->Form->fieldTextarea('details', $val, [  
    'id' => 'reply_details',  
    'rows' => 21,  
    'data-markdown-editor' => '',  
    'data-image-upload-url' => $this->Html->safe($this->base_uri . 'plugin/your_plugin/yourcontroller/uploadimage/')  
]);
```

### 6.10 Submit-button FormData gotcha[â](#610-submit-button-formdata-gotcha "Direct link to 6.10 Submit-button FormData gotcha")

`new FormData(form)` does NOT include the value of the submit button that was clicked. If your code submits programmatically and you need the submit button name/value, append manually:

```
var formData = new FormData(form);  
formData.append(submitBtn.name, submitBtn.value);
```

### 6.11 CSRF tokens[â](#611-csrf-tokens "Direct link to 6.11 CSRF tokens")

Every AJAX POST needs `_csrf_token`. Get it from `Form->getCsrfToken()` (no args) and emit it from PHP into the script, or read it from a hidden input:

```
var csrfInput = document.querySelector('input[name="_csrf_token"]');  
var csrfToken = csrfInput ? csrfInput.value : '<?php echo $this->Form->getCsrfToken();?>';  
  
var formData = new FormData();  
formData.append('_csrf_token', csrfToken);  
formData.append('foo', 'bar');  
  
fetch(url, {  
    method: 'POST',  
    body: formData,  
    headers: { 'X-Requested-With': 'XMLHttpRequest' }  
})  
.then(r => r.json())  
.then(data => { /* â¦ */ });
```

### 6.12 Locale-safe interpolation in JS strings[â](#612-locale-safe-interpolation-in-js-strings "Direct link to 6.12 Locale-safe interpolation in JS strings")

When a translated string is placed inside a JS string literal, run it through `Html->safe` to escape quotes:

```
- var text = '<?php echo $this->_('Foo.text', true);?>';  
+ var text = '<?php echo $this->Html->safe($this->_('Foo.text', true));?>';
```

### 6.13 Including plugin JS files[â](#613-including-plugin-js-files "Direct link to 6.13 Including plugin JS files")

For ad-hoc plugin JS (non-Gulp-compiled), include via direct `<script>` tag â **not** `Javascript->setFile()`:

```
<script src="<?php echo $this->view_dir;?>js/your-plugin.js"></script>
```

`Javascript->setFile()` prepends a `default_path` that double-prefixes the already-complete `$this->view_dir` and produces broken URLs.

A plugin's `views/default/js/` directory is **not Gulp-compiled** â it's served as-is from the plugin views directory.

---

## 7. HTML / markup structural changes[â](#7-html--markup-structural-changes "Direct link to 7. HTML / markup structural changes")

### 7.1 Form + Widget ordering reversed[â](#71-form--widget-ordering-reversed "Direct link to 7.1 Form + Widget ordering reversed")

In v5, Widget opens before Form. In v6, **Form opens first, Widget closes first**. This lets the submit button live in the card-footer while still belonging to the form.

```
- $this->Widget->create($title);  
- $this->Form->create($url);  
-     <!-- content + submit -->  
- $this->Form->end();  
- $this->Widget->end();  
+ $this->Form->create($url);  
+ $this->Widget->create($title);  
+     <!-- content -->  
+     $this->Widget->footer();  
+     <!-- submit buttons in card-footer -->  
+ $this->Widget->end();  
+ $this->Form->end();
```

### 7.2 Card body / content / footer[â](#72-card-body--content--footer "Direct link to 7.2 Card body / content / footer")

`<div class="inner">`, `<div class="pad">`, `<div class="title_row">`, `<div class="button_row">` are all gone. Replace with BS5 card sections:

```
- $this->Widget->create('Title');  
- ?>  
- <div class="inner">  
-     <div class="title_row first"><h3>Section Heading</h3></div>  
-     <div class="pad">  
-         <ul>  
-             <li>... fields ...</li>  
-         </ul>  
-     </div>  
-     <div class="button_row">  
-         <?php $this->Form->fieldSubmit('save', 'Save', ['class' => 'btn btn-primary float-right']);?>  
-     </div>  
- </div>  
- <?php $this->Widget->end(); ?>  
  
+ <?php $this->Form->create(null, ['class' => 'disable-on-submit']); ?>  
+ <?php $this->Widget->setBodyWrapper(false);   // listing pages only â see Â§9 ?>  
+ <?php $this->Widget->create('Title'); ?>  
+     <h6 class="form-section-header">Section Heading</h6>  
+     <div class="mb-3"> ... fields ... </div>  
+     <?php $this->Widget->footer(); ?>  
+     <div class="d-flex justify-content-end gap-2">  
+         <a href="<?php echo $cancel_url;?>" class="btn btn-outline-secondary">Cancel</a>  
+         <?php $this->Form->fieldSubmit('save', 'Save', ['class' => 'btn btn-primary']);?>  
+     </div>  
+ <?php $this->Widget->end(); ?>  
+ <?php $this->Form->end(); ?>
```

If you suppress the body wrapper with `setBodyWrapper(false)`, you provide your own `<div class="card-body">` (or run flush â useful for tables).

### 7.3 Tables[â](#73-tables "Direct link to 7.3 Tables")

```
- <table class="table" id="ticket_list">  
-     <tr class="heading_row">  
-         <td>Heading</td>  
-         <td class="last">Last</td>  
-     </tr>  
-     <?php foreach ($items as $i => $item) { ?>  
-     <tr class="<?php echo ($i%2==1) ? 'odd_row' : '';?>">  
-         <td>...</td>  
-         <td class="last">...</td>  
-     </tr>  
-     <?php } ?>  
- </table>  
+ <div class="table-responsive">  
+ <table class="table table-hover mb-0" id="ticket_list">  
+     <thead>  
+         <tr>  
+             <th>Heading</th>  
+             <th>Last</th>  
+         </tr>  
+     </thead>  
+     <tbody>  
+         <?php foreach ($items as $item) { ?>  
+         <tr>  
+             <td>...</td>  
+             <td>...</td>  
+         </tr>  
+         <?php } ?>  
+     </tbody>  
+ </table>  
+ </div>
```

Drop manual zebra striping (`odd_row`) â `.table-hover` and `.table-striped` handle row backgrounds.

### 7.4 Sortable column headers[â](#74-sortable-column-headers "Direct link to 7.4 Sortable column headers")

```
- <td><span><a href="?sort=code" class="ajax<?php echo $sort=='code' ? ' '.$order : '';?>">Code</a></span></td>  
+ <th>  
+     <a href="?sort=code" class="ajax text-decoration-none">  
+         Code  
+         <?php if ($sort == 'code') { ?>  
+             <i class="bi bi-chevron-<?php echo $order == 'asc' ? 'up' : 'down';?>"></i>  
+         <?php } ?>  
+     </a>  
+ </th>
```

### 7.5 Expandable rows (Paradigm pattern)[â](#75-expandable-rows-paradigm-pattern "Direct link to 7.5 Expandable rows (Paradigm pattern)")

Replace v5's `<tr class="expand_details" id="orders_123"><td class="subtable">` lazy-load pattern with `data-collapse-row` on a trigger row + `<tr class="collapse">` sibling:

```
<tr class="order-row" data-collapse-row data-order-id="123" aria-expanded="false" style="cursor: pointer;">  
    <td>...</td>  
</tr>  
<tr class="collapse">  
    <td colspan="7" class="order-details-cell" style="padding: 0; background-color: var(--bg-secondary);">  
        <div class="order-details-content p-3" data-order-id="123">  
            <div class="text-center py-3">  
                <div class="spinner-border spinner-border-sm" role="status">  
                    <span class="visually-hidden">Loading...</span>  
                </div>  
            </div>  
        </div>  
    </td>  
</tr>
```

Auto-wired by `assets/scripts/admin/paradigm/expandable-rows.js`. Lazy-load on `show.bs.collapse`:

```
document.addEventListener('show.bs.collapse', function(e) {  
    if (!e.target.classList.contains('collapse')) return;  
    var container = e.target.querySelector('.order-details-content');  
    if (!container || container.hasAttribute('data-loaded')) return;  
    var orderId = container.getAttribute('data-order-id');  
    fetch('<?php echo $this->base_uri;?>plugin/order/admin_main/orderdetails/' + orderId, {  
        headers: { 'X-Requested-With': 'XMLHttpRequest' }  
    })  
    .then(r => r.text())  
    .then(html => {  
        container.innerHTML = html;  
        container.setAttribute('data-loaded', 'true');  
        document.dispatchEvent(new Event('blestaAjaxComplete'));  
    });  
});
```

Interactive children (`a`, `button`, `input`, `select`, `textarea`, `label`) are auto-excluded from the row's click handler â clicking a link inside the row won't toggle the collapse.

### 7.6 Dropdowns[â](#76-dropdowns "Direct link to 7.6 Dropdowns")

```
- <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>  
- <ul class="dropdown-menu"><li><a>Item</a></li></ul>  
+ <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle"  
+         data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">  
+     Menu  
+ </button>  
+ <ul class="dropdown-menu">  
+     <li><a class="dropdown-item" href="#">Item</a></li>  
+ </ul>
```

`<a class="dropdown-item">` is required for menu items (BS5 styles target this class). For dropdowns containing a search box, use `data-bs-auto-close="outside"` so clicking the input doesn't close the menu.

### 7.7 Accordions[â](#77-accordions "Direct link to 7.7 Accordions")

```
<div class="accordion accordion-flush" id="myAccordion">  
    <div class="accordion-item border-0 bg-transparent">  
        <h2 class="accordion-header">  
            <button class="accordion-button bg-transparent px-0 py-1<?php echo $expanded ? '' : ' collapsed';?>"  
                    type="button" data-bs-toggle="collapse" data-bs-target="#myCollapse"  
                    aria-expanded="<?php echo $expanded ? 'true' : 'false';?>">  
                Title  
            </button>  
        </h2>  
        <div id="myCollapse" class="accordion-collapse collapse<?php echo $expanded ? ' show' : '';?>"  
             data-bs-parent="#myAccordion">  
            <div class="accordion-body p-0 pt-2">...</div>  
        </div>  
    </div>  
</div>
```

### 7.8 Alert boxes[â](#78-alert-boxes "Direct link to 7.8 Alert boxes")

```
- <div class="accent_box">  
-     <code>{tag1}</code> <code>{tag2}</code>  
- </div>  
+ <div class="alert alert-info">  
+     <h6 class="alert-heading mb-2"><i class="bi bi-tags me-2"></i>Tags</h6>  
+     <div class="d-flex flex-wrap gap-2">  
+         <code>{tag1}</code>  
+         <code>{tag2}</code>  
+     </div>  
+ </div>
```

For alerts with icons:

```
<div class="alert alert-warning d-flex align-items-start" role="alert">  
    <i class="bi bi-shield-exclamation me-2 mt-1"></i>  
    <div class="flex-grow-1">  
        <strong>Heads up!</strong>  
        <pre class="small mt-2 mb-0 p-2 bg-body-secondary rounded"><code>example</code></pre>  
    </div>  
</div>
```

### 7.9 File upload zone[â](#79-file-upload-zone "Direct link to 7.9 File upload zone")

```
<div class="file-upload-compact mb-3" id="fileDropZone">  
    <?php $this->Form->fieldFile('attachment[]', [  
        'id' => 'fileInput',  
        'class' => 'drag-drop',  
        'rel' => $this->_('AppController.dropzone.text', true),  
        'style' => 'display:none;',  
        'multiple' => 'multiple'  
    ]);?>  
    <div class="d-flex align-items-center gap-3">  
        <i class="bi bi-cloud-upload upload-icon"></i>  
        <div class="flex-grow-1"><div class="upload-text">Drop files here</div></div>  
        <button type="button" class="btn btn-outline-primary btn-sm"  
                onclick="document.getElementById('fileInput').click()">Browse</button>  
    </div>  
</div>  
<div id="fileList" class="mb-3"></div>
```

### 7.10 Dual-select / drag-and-drop list[â](#710-dual-select--drag-and-drop-list "Direct link to 7.10 Dual-select / drag-and-drop list")

Replaces the v5 multi-select pair. Uses HTML5 drag-and-drop with a hidden `<select multiple>` so the form still submits the same field name.

```
<div class="dual-select-container mb-4">  
    <div class="dual-select-panel">  
        <label class="form-label">Assigned</label>  
        <div class="dual-select-dropzone">  
            <div class="drag-list" id="assigned_departments">  
                <div class="drag-item" data-value="1" draggable="true">Sales</div>  
            </div>  
        </div>  
        <?php $this->Form->fieldMultiSelect('departments[]', [], [], [  
            'id' => 'assigned', 'style' => 'display:none;'  
        ]);?>  
    </div>  
    <div class="dual-select-controls">  
        <button type="button" class="btn btn-sm btn-outline-primary dual-select-btn move_left">  
            <i class="bi bi-arrow-left"></i>  
        </button>  
        <button type="button" class="btn btn-sm btn-outline-primary dual-select-btn move_right">  
            <i class="bi bi-arrow-right"></i>  
        </button>  
    </div>  
    <div class="dual-select-panel">  
        <label class="form-label">Available</label>  
        <div class="dual-select-dropzone">  
            <div class="drag-list" id="available_departments">...</div>  
        </div>  
    </div>  
</div>
```

### 7.11 Card grids (folders / responses)[â](#711-card-grids-folders--responses "Direct link to 7.11 Card grids (folders / responses)")

```
<div class="row g-3">  
    <div class="col-12 col-sm-6 col-md-4 col-xl-3">  
        <div class="response-folder-card" role="link" tabindex="0" data-href="<?php echo $url;?>">  
            <div class="response-folder-icon"><i class="bi bi-folder-fill"></i></div>  
            <div class="response-folder-name"><?php echo $cat->name;?></div>  
            <span class="response-folder-count badge bg-secondary"><?php echo $cat->item_count;?></span>  
            <div class="response-folder-actions">  
                <a href="<?php echo $edit_url;?>" class="response-folder-action-btn"><i class="bi bi-pencil"></i></a>  
                <button type="button" class="response-folder-action-btn modal-confirm-delete"  
                        data-confirm-message="<?php echo $this->Html->safe($confirm);?>">  
                    <i class="bi bi-trash"></i>  
                </button>  
            </div>  
        </div>  
    </div>  
</div>
```

JS makes the card behave as a link via `data-href` + `click`/`Enter` keydown.

### 7.12 No more `is_ajax` wrappers[â](#712-no-more-is_ajax-wrappers "Direct link to 712-no-more-is_ajax-wrappers")

Remove the legacy `<?php if (!$is_ajax) { ?> <div id="right_outer"><section id="right_container"> <?php } ?>` scaffolding and matching close. The two-column layout is owned by Paradigm's structure now (see Â§10). Plugin views emit content only.

---

## 8. Form helper usage[â](#8-form-helper-usage "Direct link to 8. Form helper usage")

### 8.1 Required class injection[â](#81-required-class-injection "Direct link to 8.1 Required class injection")

The `Form` helper does NOT auto-inject BS5 classes. On every call, pass:

| Helper | Required class |
| --- | --- |
| `fieldText`, `fieldPassword`, `fieldFile`, `fieldTextarea` (non-markdown), `fieldHidden` (no class needed), `fieldUrl`, `fieldEmail`, `fieldTel`, `fieldNumber`, `fieldDate` | `'class' => 'form-control'` |
| `fieldSelect`, `fieldMultiSelect` | `'class' => 'form-select'` |
| `fieldCheckbox`, `fieldRadio` | `'class' => 'form-check-input'` |
| `Form->label` (block) | `'class' => 'form-label'` |
| `Form->label` (next to checkbox/radio) | `'class' => 'form-check-label'` |
| `fieldSubmit` | `'class' => 'btn btn-primary'` (or appropriate) |

### 8.2 ID conventions for bracketed names[â](#82-id-conventions-for-bracketed-names "Direct link to 8.2 ID conventions for bracketed names")

Replace `[]` with `_` in IDs because `<label for="">` requires a valid HTML id:

```
- 'id' => 'settings[ticket_emails][' . $priority . ']'  
+ 'id' => 'ticket_emails_' . $priority
```

The form field `name` keeps the brackets â only the `id` changes.

### 8.3 The `form` attribute (sidebar inputs)[â](#83-the-form-attribute-sidebar-inputs "Direct link to 83-the-form-attribute-sidebar-inputs")

When form inputs live in a separately-rendered sidebar partial (not inside the `<form>`), each must reference the form by id:

```
$this->Form->fieldSelect('department_id', $departments, $val, [  
    'id' => 'department_id',  
    'class' => 'form-select form-select-sm',  
    'form' => 'create_ticket'   // ties this input to <form id="create_ticket">  
]);
```

### 8.4 Inline forms[â](#84-inline-forms "Direct link to 8.4 Inline forms")

Wrap delete-button forms with `'class' => 'd-inline'` so they sit inline with adjacent buttons:

```
- $this->Form->create($delete_url);  
+ $this->Form->create($delete_url, ['class' => 'd-inline']);
```

### 8.5 Section headers[â](#85-section-headers "Direct link to 8.5 Section headers")

```
- <div class="title_row first"><h3>Section</h3></div>  
+ <h6 class="form-section-header">Section</h6>
```

`form-section-header` is a Paradigm helper class.

### 8.6 Hint text below fields[â](#86-hint-text-below-fields "Direct link to 8.6 Hint text below fields")

```
<div class="form-text">  
    <i class="bi bi-info-circle"></i> Helpful description of the field.  
</div>
```

### 8.7 Tooltip indicator[â](#87-tooltip-indicator "Direct link to 8.7 Tooltip indicator")

```
<i class="bi bi-info-circle ms-1"  
   data-bs-toggle="tooltip" data-bs-placement="top"  
   title="<?php echo $this->Html->safe($this->_('Foo.tooltip.text', true));?>"></i>
```

The tooltip text moves from a `<div>` body of the legacy `<span class="tooltip">â¦</span>` into the `title` attribute.

### 8.8 Cancel/save button row[â](#88-cancelsave-button-row "Direct link to 8.8 Cancel/save button row")

```
<div class="d-flex justify-content-end gap-2">  
    <a href="<?php echo $cancel_url;?>" class="btn btn-outline-secondary">Cancel</a>  
    <?php $this->Form->fieldSubmit('save', 'Save', ['class' => 'btn btn-primary']); ?>  
</div>
```

Drop `pull-right`/`float-end` from the submit class â the wrapper handles alignment.

### 8.9 Radio button groups (BS5 button-group style)[â](#89-radio-button-groups-bs5-button-group-style "Direct link to 8.9 Radio button groups (BS5 button-group style)")

```
<div class="btn-group" role="group" aria-label="Status">  
    <input type="radio" class="btn-check" name="status" id="status_active" value="active" checked>  
    <label class="btn btn-outline-success" for="status_active">  
        <i class="bi bi-check-circle me-1"></i>Active  
    </label>  
    <input type="radio" class="btn-check" name="status" id="status_inactive" value="inactive">  
    <label class="btn btn-outline-danger" for="status_inactive">  
        <i class="bi bi-x-circle me-1"></i>Inactive  
    </label>  
</div>
```

---

## 9. Widget helper changes[â](#9-widget-helper-changes "Direct link to 9. Widget helper changes")

### 9.1 New methods[â](#91-new-methods "Direct link to 9.1 New methods")

| Method | Purpose |
| --- | --- |
| `setBodyWrapper(bool $wrap)` | Suppress the default `<div class="card-body">` wrapper. Use for tables that should run flush. |
| `setNavStyle(string $style)` | Override default `nav-tabs-box`. Common: `nav-tabs-custom`. |
| `footer()` | Close the card-body and open a `<div class="card-footer">` for buttons / pagination. |

### 9.2 `setWidgetButton` keyword changes[â](#92-setwidgetbutton-keyword-changes "Direct link to 92-setwidgetbutton-keyword-changes")

| v5 keyword | v6 keyword | Icon |
| --- | --- | --- |
| `arrow` | `arrow` | `bi bi-arrows-collapse` / `bi bi-arrows-expand` |
| `setting` | `setting` | `bi bi-gear-fill` |
| `filter-toggle` | `filter-toggle` | `bi bi-funnel` / `bi bi-funnel-fill` |
| `full_screen` | **`full-screen`** (renamed: underscore â hyphen) | `bi bi-arrows-angle-contract` / `bi bi-arrows-angle-expand` |
| (none) | **`widget-width`** (NEW) | `bi bi-arrows-angle-contract` / `bi bi-arrows-angle-expand` |

`widget-width` toggles a dashboard widget between column width and full-width (`<section class="card" data-width="full">`).

```
- $this->Widget->setWidgetButton('full_screen');  
+ $this->Widget->setWidgetButton('full-screen');  
  
  // Optional: add expandable-width to dashboard widgets  
+ $this->Widget->setWidgetButton('widget-width');  
+ $this->Widget->setWidgetButton('arrow');
```

### 9.3 Icon keys in arrays[â](#93-icon-keys-in-arrays "Direct link to 9.3 Icon keys in arrays")

```
  $this->Widget->setLinkButtons([  
      [  
          'name' => 'Add',  
          'attributes' => ['href' => $url],  
-         'icon' => 'fas fa-plus'  
+         'icon' => 'bi bi-plus-lg'  
      ],  
      [  
          'name' => 'Back',  
          'attributes' => ['href' => $back_url],  
-         'icon' => 'fas fa-arrow-left'  
+         'icon' => 'bi bi-arrow-left me-1'  
      ]  
  ]);
```

### 9.4 Tab attribute keys[â](#94-tab-attribute-keys "Direct link to 9.4 Tab attribute keys")

When using `setLinks` for tabs, switch to `data-bs-` attributes:

```
  $this->Widget->setLinks([  
      [  
          'name' => 'Basic',  
          'attributes' => [  
              'id' => 'tab-basic',  
-             'data-toggle' => 'tab',  
-             'data-target' => '#tab_basic',  
+             'data-bs-toggle' => 'tab',  
+             'data-bs-target' => '#tab_basic',  
              'href' => '#'  
          ]  
      ]  
  ]);
```

Wrap tab panes:

```
<div class="tab-content">  
    <div class="tab-pane fade show active" id="tab_basic" role="tabpanel">â¦</div>  
    <div class="tab-pane fade" id="tab_advanced" role="tabpanel">â¦</div>  
</div>
```

### 9.5 Widget HTML output (so AJAX swap targets are right)[â](#95-widget-html-output-so-ajax-swap-targets-are-right "Direct link to 9.5 Widget HTML output (so AJAX swap targets are right)")

V6 emits:

```
<section class="card" id="..." data-width="full">  
  <div class="card-header d-flex justify-content-between align-items-center">â¦</div>  
  <div class="card-content">  
    {nav}  
    {filters}  
    <div class="card-body">â¦contentâ¦</div>  
    [optional <div class="card-footer">â¦</div>]  
  </div>  
</section>
```

**The AJAX replacer is now `.card-content`** (was `.common_box_content` for admin in v5). If your code emits `{replacer: '.common_box_content', content: 'â¦'}`, change it to `{replacer: '.card-content', content: 'â¦'}`.

### 9.6 Widget pagination placement[â](#96-widget-pagination-placement "Direct link to 9.6 Widget pagination placement")

```
- $this->Pagination->build();  
- $this->Widget->end();  
  
+ if (isset($this->Pagination) && $this->Pagination->hasPages()) {  
+     $this->Widget->footer();  
+     $this->Pagination->build();  
+ }  
+ $this->Widget->end();
```

### 9.7 setStyleSheet with a Paradigm-specific stylesheet[â](#97-setstylesheet-with-a-paradigm-specific-stylesheet "Direct link to 9.7 setStyleSheet with a Paradigm-specific stylesheet")

When you maintain both a v5-compatible CSS and a v6 Paradigm CSS, use a separate file for each:

```
// Old (kept for legacy default theme)  
$this->Widget->setStyleSheet($this->view_dir . 'css/styles.css', ['id' => 'plugin_styles']);  
  
// New (Paradigm)  
$this->Widget->setStyleSheet($this->view_dir . 'css/paradigm.css', ['id' => 'plugin_styles']);
```

Related reference

For the broader Widget helper API â including `setBodyWrapper`, `setNavStyle`, `card-filter-bar` auto-routing for `setLinkButtons`, and the `data-collapse-row` expandable-rows pattern â see [Widgets](dev__developers__plugins__widgets.md). This section focuses on the changes specific to converting a v5 extension; the linked page is the canonical reference for the helper itself.

---

## 10. The new sidebar pattern (Paradigm)[â](#10-the-new-sidebar-pattern-paradigm "Direct link to 10. The new sidebar pattern (Paradigm)")

Paradigm renders a two-column shell when the controller publishes a side panel. Use this for ticket detail forms, package settings, etc., that benefit from a sidebar of meta fields.

### 10.1 Controller side[â](#101-controller-side "Direct link to 10.1 Controller side")

```
// In your action method:  
$sidebar_html = $this->partial('admin_yourcontroller_sidebar', [  
    'vars'        => $vars,  
    'options'     => $options,  
    // ... whatever the partial needs  
]);  
  
$this->structure->set('side_bar_content', $sidebar_html);  
$this->structure->set('side_bar', ['partials/plugin_sidebar', null, 'side-content-mobile-visible']);
```

The third element of `side_bar` is an optional layout class.

### 10.2 Partial shell (already in core)[â](#102-partial-shell-already-in-core "Direct link to 10.2 Partial shell (already in core)")

`app/views/admin/paradigm/partials/plugin_sidebar.pdt`:

```
<?php /** @var View $this **/ ?>  
<?php echo $side_bar_content ?? '';?>
```

A thin pass-through.

### 10.3 Plugin sidebar partial conventions[â](#103-plugin-sidebar-partial-conventions "Direct link to 10.3 Plugin sidebar partial conventions")

```
<?php /** @var View $this **/ ?>  
<div class="side-content-section">  
    <h6 class="side-content-title">  
        <i class="bi bi-info-circle"></i>  
        <?php $this->_('AdminYour.heading_details');?>  
    </h6>  
  
    <div class="mb-3">  
        <label class="form-label small text-secondary mb-1">Department</label>  
        <?php $this->Form->fieldSelect('department_id', $departments, $vars->department_id ?? null, [  
            'id' => 'department_id',  
            'class' => 'form-select form-select-sm',  
            'form' => 'create_ticket'   // tied to main form by id  
        ]);?>  
    </div>  
  
    <div class="d-grid gap-2">  
        <button type="submit" class="btn btn-primary btn-sm" form="create_ticket">Save</button>  
    </div>  
</div>
```

Conventions:

- Each grouped block: `<div class="side-content-section">`
- Section title: `<h6 class="side-content-title">` with leading `<i class="bi bi-â¦">`
- Field labels: `<label class="form-label small text-secondary mb-1">`
- Inputs use `-sm` size variants
- Inputs that should submit with a form elsewhere on the page: add `'form' => 'main_form_id'`
- Full-width stacked buttons: `<div class="d-grid gap-2">`

### 10.4 Sidebar JS communication[â](#104-sidebar-js-communication "Direct link to 10.4 Sidebar JS communication")

For sidebar inputs that submit a separate filter form, use document-level event delegation:

```
document.addEventListener('submit', function(e) {  
    if (e.target.id === 'ticket_filters') {  
        e.preventDefault();  
        applyTicketFilters();  
    }  
});
```

Inputs added by your sidebar partial appear in the parent form's submission automatically because of the `form` attribute.

---

## 11. CSS, SASS, and theme variables[â](#11-css-sass-and-theme-variables "Direct link to 11. CSS, SASS, and theme variables")

### 11.1 Plugin CSS location[â](#111-plugin-css-location "Direct link to 11.1 Plugin CSS location")

Same as v5: `plugins/{plugin}/views/default/css/styles.css`. Register via Widget:

```
$this->Widget->setStyleSheet($this->view_dir . 'css/styles.css', ['id' => 'your_plugin_styles']);
```

Plugin CSS is **not Gulp-compiled** â it's served as-is.

### 11.2 CSS variables (theme tokens)[â](#112-css-variables-theme-tokens "Direct link to 11.2 CSS variables (theme tokens)")

Paradigm exposes its own CSS custom properties. **Use these â do NOT hard-code colors** so your styles work in light AND dark mode.

```
/* Paradigm tokens (NOT Bootstrap's --bs-* â those exist too but Paradigm prefers these) */  
var(--bg-primary)  
var(--bg-secondary)        /* common for striped / inset backgrounds */  
var(--bg-tertiary)  
var(--bg-card)  
var(--border-color)         /* common for dividers */  
var(--text-primary)  
var(--text-secondary)  
var(--text-muted)  
var(--accent-color)  
var(--link-color)  
var(--success-color)  
var(--warning-color)  
var(--danger-color)  
  
/* Some --bs-* overrides set by Paradigm (use these too) */  
var(--bs-modal-bg)  
var(--bs-modal-color)  
var(--bs-modal-border-color)  
var(--bs-body-bg)  
var(--bs-border-color-translucent)
```

Active theme is set via `<html data-bs-theme="dark|light">` (also `data-theme`). Test both modes.

```
/* Good */  
.your-element {  
    background-color: var(--bg-secondary);  
    color: var(--text-primary);  
    border: 1px solid var(--border-color);  
}  
  
/* Bad â breaks in dark mode */  
.your-element {  
    background-color: #f8f9fa;  
    color: #212529;  
    border: 1px solid #dee2e6;  
}
```

### 11.3 Theme-aware Bootstrap utilities[â](#113-theme-aware-bootstrap-utilities "Direct link to 11.3 Theme-aware Bootstrap utilities")

Prefer these over hard-coded BS classes:

| Replace | With |
| --- | --- |
| `bg-light` | `bg-body-secondary` |
| `bg-white` | `bg-body` |
| `text-dark` (when meaning "default body color") | `text-body` |
| `text-secondary` | `text-secondary` (works) |
| `border` (default border color) | works (uses `--bs-border-color`) |

### 11.4 Code editors that respond to theme[â](#114-code-editors-that-respond-to-theme "Direct link to 11.4 Code editors that respond to theme")

For embedded code editors (Ace, Monaco, etc.), watch for theme changes:

```
function getAceTheme() {  
    return document.documentElement.getAttribute('data-bs-theme') === 'dark'  
        ? 'ace/theme/tomorrow_night'  
        : 'ace/theme/tomorrow';  
}  
new MutationObserver(function() {  
    var theme = getAceTheme();  
    Object.values(editors).forEach(function(e) { e.setTheme(theme); });  
}).observe(document.documentElement, {  
    attributes: true, attributeFilter: ['data-bs-theme']  
});
```

### 11.5 SCSS backwards-compat shims[â](#115-scss-backwards-compat-shims "Direct link to 11.5 SCSS backwards-compat shims")

Paradigm's `_backwards.scss` re-styles many v5 class names (`pull-left`, `pull-right`, `common_box`, `inner`, `pad`, `title_row`, `button_row`, etc.) on top of BS5 so unconverted plugins look acceptable. **Don't rely on these for new code** â they exist only to soften the migration.

---

## 12. AJAX patterns[â](#12-ajax-patterns "Direct link to 12. AJAX patterns")

### 12.1 Replace `blestaRequest` with `fetch`[â](#121-replace-blestarequest-with-fetch "Direct link to 121-replace-blestarequest-with-fetch")

```
- $(document).blestaRequest('POST', url,  
-     { _csrf_token: token, foo: 'bar' },  
-     function(data) { /* success */ },  
-     null,  
-     { dataType: 'json' }  
- );  
  
+ var formData = new FormData();  
+ formData.append('_csrf_token', token);  
+ formData.append('foo', 'bar');  
+  
+ fetch(url, {  
+     method: 'POST',  
+     body: formData,  
+     headers: { 'X-Requested-With': 'XMLHttpRequest' }  
+ })  
+ .then(r => r.json())  
+ .then(data => { /* success */ })  
+ .catch(err => console.error(err));
```

The global `blestaRequest()` (vanilla version) still exists if you prefer it.

### 12.2 The `X-Requested-With` header[â](#122-the-x-requested-with-header "Direct link to 122-the-x-requested-with-header")

It's required to trigger the controller's `renderAjaxWidgetIfAsync()` JSON-envelope wrapping. jQuery added it automatically; with `fetch` you must add it manually.

### 12.3 The JSON envelope[â](#123-the-json-envelope "Direct link to 12.3 The JSON envelope")

When the controller wraps a widget response, you get:

```
{ "replacer": ".card-content", "content": "<div>â¦</div>" }
```

Handle both cases (replacer null = full content swap):

```
fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' }})  
.then(r => r.json())  
.then(data => {  
    var widget = document.getElementById('admin_tickets');  
    if (data.replacer == null) {  
        widget.innerHTML = data.content;  
    } else {  
        var target = widget.querySelector(data.replacer);  
        if (target) target.innerHTML = data.content;  
    }  
    document.dispatchEvent(new Event('blestaAjaxComplete'));  
});
```

### 12.4 New AJAX endpoints in plugin controllers[â](#124-new-ajax-endpoints-in-plugin-controllers "Direct link to 12.4 New AJAX endpoints in plugin controllers")

Plugin controllers ARE directly routable (unlike main app controllers). Adding `public function myAjaxEndpoint()` to a plugin controller exposes it at `/plugin/your_plugin/your_controller/myajaxendpoint/`. No `index()` switching needed.

### 12.5 `outputAsJson` for custom JSON responses[â](#125-outputasjson-for-custom-json-responses "Direct link to 125-outputasjson-for-custom-json-responses")

```
public function myAjaxEndpoint()  
{  
    $result = ['ok' => true, 'data' => [...]];  
    $this->outputAsJson($result);  
    return false;  
}
```

### 12.6 Lazy-load on collapse[â](#126-lazy-load-on-collapse "Direct link to 12.6 Lazy-load on collapse")

```
document.addEventListener('show.bs.collapse', function(e) {  
    if (!e.target.classList.contains('collapse')) return;  
    var container = e.target.querySelector('.your-content-container');  
    if (!container || container.hasAttribute('data-loaded')) return;  
    var id = container.getAttribute('data-record-id');  
    fetch(url + id, { headers: { 'X-Requested-With': 'XMLHttpRequest' }})  
        .then(r => r.text())  
        .then(html => {  
            container.innerHTML = html;  
            container.setAttribute('data-loaded', 'true');  
            document.dispatchEvent(new Event('blestaAjaxComplete'));  
        });  
});
```

---

## 13. Module-specific changes (PHP base classes)[â](#13-module-specific-changes-php-base-classes "Direct link to 13. Module-specific changes (PHP base classes)")

### 13.1 Files removed[â](#131-files-removed "Direct link to 13.1 Files removed")

These v5 files are deleted in v6:

- `components/modules/module_field.php`
- `components/modules/module_fields.php`

The global short names `ModuleField` and `ModuleFields` are kept as **runtime class aliases** in `config/aliases.php`:

```
'ModuleFields' => Blesta\Core\Util\Input\Fields\InputFields::class,  
'ModuleField'  => Blesta\Core\Util\Input\Fields\InputField::class,
```

**No source change required** â `new ModuleFields()` and `new ModuleField(...)` still work. The canonical class is `Blesta\Core\Util\Input\Fields\InputFields`.

### 13.2 `Module` base class additions[â](#132-module-base-class-additions "Direct link to 132-module-base-class-additions")

#### New: `getIcon()`[â](#new-geticon "Direct link to new-geticon")

Modules can declare a Bootstrap icon for Paradigm-native rendering by adding `"icon": "bi bi-â¦"` to their `config.json`:

```
{  
    "version": "2.20.0",  
    "name": "Cpanel.name",  
    "description": "Cpanel.description",  
    "icon": "bi bi-server",  
    "authors": [ /* ... */ ],  
    "module": { /* ... */ }  
}
```

The base `Module::getIcon()` reads `$this->config->icon` and returns it (or `null`). Paradigm uses this in its module list / overview screens.

Related reference

The `icon` field is documented for each extension type alongside the rest of the `config.json` definition: [Plugin configuration](dev__developers__plugins__plugin-configuration.md), [Module configuration](dev__developers__modules__module-configuration.md), [Gateway configuration](dev__developers__gateways__gateway-configuration.md), [Messenger configuration](dev__developers__messengers__messenger-configuration.md).

#### Renamed: `arrayToModuleFields()` â `arrayToInputFields()`[â](#renamed-arraytomodulefields--arraytoinputfields "Direct link to renamed-arraytomodulefields--arraytoinputfields")

```
- protected function arrayToModuleFields($arr, ModuleFields $fields = null, $vars = null)  
+ protected function arrayToInputFields($arr, InputFields $fields = null, $vars = null)  
  {  
      if (!$fields) {  
-         $fields = new ModuleFields();  
+         $fields = new InputFields();  
      }  
      // body unchanged  
  }  
  
  // Backwards-compatible alias kept (deprecated):  
  protected function arrayToModuleFields($arr, InputFields $fields = null, $vars = null)  
  {  
      return $this->arrayToInputFields($arr, $fields, $vars);  
  }
```

If your module overrides this, prefer `arrayToInputFields`. Old name still works.

The `@return` docblocks on `getPackageFields()`, `getAdminAddFields()`, `getClientAddFields()`, `getAdminEditFields()` updated `@return ModuleFields` â `@return InputFields` (runtime types are equivalent due to alias).

### 13.3 `RegistrarModule` base class[â](#133-registrarmodule-base-class "Direct link to 133-registrarmodule-base-class")

**Unchanged.** All public methods (`supportsDnsManagement`, `checkAvailability`, `getDomainContacts`, `setDomainNameservers`, `getTldPricing`, `getFilteredTldPricing`, `registerDomain`, `transferDomain`, `renewDomain`, `restoreDomain`, etc.) have identical signatures.

### 13.4 Module field rendering / form patterns[â](#134-module-field-rendering--form-patterns "Direct link to 13.4 Module field rendering / form patterns")

Field-rendering helpers (`getPackageFields`, `getAdminAddFields`, `getClientAddFields`, `getAdminEditFields`) remain unchanged. They return `Blesta\Core\Util\Input\Fields\InputFields` and the framework iterates and renders.

The shared `service_fields*.pdt` views still use `<div class="form-group">` and `class="inline"` checkbox labels â these need the BS5 conversion (Â§4.5â4.6).

### 13.5 Module `manage.pdt` shape[â](#135-module-managepdt-shape "Direct link to 135-module-managepdt-shape")

The legacy widget chrome (`title_row`, `pad`, `inner`, `heading_row`, `odd_row`, `empty_section`, `<a class="manage rel="...">`) survives in shipped core modules but should be converted in your own modules using Â§4 / Â§7 rules.

### 13.6 Tab icon strings in module PHP[â](#136-tab-icon-strings-in-module-php "Direct link to 13.6 Tab icon strings in module PHP")

Module `getAdminTabs()`/`getClientTabs()` arrays carry `'icon' => 'fas fa-â¦'`. Convert to Bootstrap Icons:

```
  public function getAdminTabs($package)  
  {  
      return [  
-         'tabActions' => ['name' => Language::_('Mod.tab_actions', true), 'icon' => 'fas fa-cog'],  
+         'tabActions' => ['name' => Language::_('Mod.tab_actions', true), 'icon' => 'bi bi-gear'],  
      ];  
  }
```

### 13.7 Blesta-specific theme classes (KEEP these)[â](#137-blesta-specific-theme-classes-keep-these "Direct link to 13.7 Blesta-specific theme classes (KEEP these)")

These are Blesta theme classes, **not Bootstrap classes**, and are styled by Paradigm SCSS â leave them alone:

`title_row`, `pad`, `inner`, `heading_row`, `odd_row`, `empty_section`, `empty_box`, `tab_content`, `tabs`, `inline`, `stretch`, `red_txt`, `buff`, `running`, `stopped`, `accent_box`, `manage`, `last`, `border_left`, `border_none`, `fixed_small`, `center`, `field_row`.

That said, prefer BS5 utility classes when writing new code â those Paradigm-styled legacy classes exist for backward compat.

---

## 14. Composer / PHP / dependency notes[â](#14-composer--php--dependency-notes "Direct link to 14. Composer / PHP / dependency notes")

### 14.1 PHP requirement[â](#141-php-requirement "Direct link to 14.1 PHP requirement")

```
  "require": {  
-     "php": ">=7.2.0",  
+     "php": ">=8.2.0",  
      ...  
  }
```

Use modern PHP idioms in new code:

- Null coalescing: `$foo ?? null` (not `isset($foo) ? $foo : null`)
- Null safe: `$foo?->bar`
- Match expressions, named args, readonly props, enums, first-class callable syntax â all available

### 14.2 New top-level deps available to plugins[â](#142-new-top-level-deps-available-to-plugins "Direct link to 14.2 New top-level deps available to plugins")

- **Illuminate (Laravel) Support, Collections, Str, Arr** â usable directly
- **HTMLPurifier** (`ezyang/htmlpurifier`)
- **Carbon** (via Illuminate)

Example:

```
use Illuminate\Support\Str;  
  
echo Str::of($description)->stripTags()->squish()->limit(140);
```

### 14.3 Your plugin's `config.json`[â](#143-your-plugins-configjson "Direct link to 143-your-plugins-configjson")

Bump `require.blesta` to `>=6.0.0` and your plugin version (typically a major bump). For modules, optionally add the `icon` key:

```
{  
    "version": "3.0.0",  
    "name": "YourPlugin.name",  
    "description": "YourPlugin.description",  
    "icon": "bi bi-puzzle",  
    "require": { "blesta": ">=6.0.0" },  
    "authors": [ ... ]  
}
```

### 14.4 Your `composer.json`[â](#144-your-composerjson "Direct link to 144-your-composerjson")

Standard skeleton remains:

```
{  
    "name": "your/plugin",  
    "type": "blesta-plugin",  
    "require": {  
        "blesta/composer-installer": "~1.0"  
    }  
}
```

The `blesta/composer-installer` `type` keys (`blesta-plugin`, `blesta-module`, `blesta-gateway`, `blesta-invoice-format`) are unchanged.

Related reference

For broader Composer guidance â Composer 2 requirements, the new policy of committing `composer.lock`, the `type` â install-path mapping for the four extension kinds, and full extension `composer.json` examples â see [Composer](dev__developers__composer.md).

---

## 15. Common gotchas[â](#15-common-gotchas "Direct link to 15. Common gotchas")

### 15.1 `new FormData(form)` omits submit button values[â](#151-new-formdataform-omits-submit-button-values "Direct link to 151-new-formdataform-omits-submit-button-values")

Manually append:

```
formData.append(submitBtn.name, submitBtn.value);
```

### 15.2 PHPIDS scans every POST[â](#152-phpids-scans-every-post "Direct link to 15.2 PHPIDS scans every POST")

Don't put base64-encoded binary data in form POST fields â PHPIDS's regex chokes on large strings and burns memory. Use file uploads or dedicated endpoints.

### 15.3 Plugin AJAX endpoints[â](#153-plugin-ajax-endpoints "Direct link to 15.3 Plugin AJAX endpoints")

Plugin controllers ARE directly routable: `public function myAjax()` on your plugin controller is reachable at `/plugin/your_plugin/your_controller/myajax/`. No `index()` switch needed. (Main-app controllers are different â there, custom action methods aren't routable and you must dispatch via a POST parameter inside `index()`.)

### 15.4 `setFile()` double-prefix bug[â](#154-setfile-double-prefix-bug "Direct link to 154-setfile-double-prefix-bug")

Don't use `$this->Javascript->setFile($this->view_dir . 'js/foo.js')`. The helper prepends a `default_path` that double-prefixes. Use a direct `<script>` tag:

```
<script src="<?php echo $this->view_dir;?>js/foo.js"></script>
```

### 15.5 Tooltips don't auto-init[â](#155-tooltips-dont-auto-init "Direct link to 15.5 Tooltips don't auto-init")

After page load and after every AJAX swap, run:

```
document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {  
    new bootstrap.Tooltip(el);  
});
```

Or rely on Paradigm's `blestaBindToolTips(container)` global.

### 15.6 Forgetting the `-bs-` infix[â](#156-forgetting-the--bs--infix "Direct link to 156-forgetting-the--bs--infix")

Easy to miss. Search-and-replace cycle:

```
data-toggle      â data-bs-toggle  
data-target      â data-bs-target  
data-dismiss     â data-bs-dismiss  
data-parent      â data-bs-parent  
data-placement   â data-bs-placement  
data-html        â data-bs-html  
data-container   â data-bs-container  
data-auto-close  â data-bs-auto-close
```

### 15.7 `<select class="form-control">` looks wrong[â](#157-select-classform-control-looks-wrong "Direct link to 157-select-classform-control-looks-wrong")

In BS5 selects need `class="form-select"` to get the chevron caret styling. `form-control` still works mechanically but looks broken.

### 15.8 `<label class="inline">` next to checkboxes[â](#158-label-classinline-next-to-checkboxes "Direct link to 158-label-classinline-next-to-checkboxes")

Replace with `<label class="form-check-label">` and wrap both in `<div class="form-check">`.

### 15.9 Hard-coded colors break dark mode[â](#159-hard-coded-colors-break-dark-mode "Direct link to 15.9 Hard-coded colors break dark mode")

Always use CSS variables (`var(--border-color)`, `var(--bg-secondary)`) or theme-aware utility classes (`bg-body-secondary`, not `bg-light`). Test in both light AND dark mode.

### 15.10 Deleting AJAX-bound content silently breaks event handlers[â](#1510-deleting-ajax-bound-content-silently-breaks-event-handlers "Direct link to 15.10 Deleting AJAX-bound content silently breaks event handlers")

When you `innerHTML = â¦` a region of DOM, any event listeners attached to the replaced elements are gone. Either:

- Use document-level delegation (`document.addEventListener('click', e => { var btn = e.target.closest('.foo'); â¦ })`)
- Re-bind after AJAX by listening to / dispatching `blestaAjaxComplete`

### 15.11 The `Pagination->build()` empty card-footer[â](#1511-the-pagination-build-empty-card-footer "Direct link to 1511-the-pagination-build-empty-card-footer")

Wrap pagination output in `if ($this->Pagination->hasPages()) { â¦ }` so single-page lists don't render an empty card-footer with just a page-of-1 indicator.

### 15.12 Widget AJAX swap target changed[â](#1512-widget-ajax-swap-target-changed "Direct link to 15.12 Widget AJAX swap target changed")

Existing v5 plugin endpoints that emitted `{replacer: '.common_box_content', content: 'â¦'}` need to switch to `{replacer: '.card-content', content: 'â¦'}` for admin. (Client portal already used `.card-content`.)

---

## 16. Canonical reference files[â](#16-canonical-reference-files "Direct link to 16. Canonical reference files")

Use these v6 files as references when porting your own:

| Pattern | Reference file |
| --- | --- |
| List view with sortable headers, action buttons, pagination, modal-confirm-delete | `plugins/order/views/default/admin_forms.pdt` |
| Multi-tab settings form, BS5 button-radio groups, tooltip icons, template chooser, dual-select | `plugins/order/views/default/admin_forms_add.pdt` |
| Widget with category tabs (badges), expandable rows via Bootstrap Collapse, lazy-load on `show.bs.collapse`, bulk-actions bar | `plugins/order/views/default/admin_main.pdt` |
| Simple settings form with `card-body` + `card-footer` + cancel/save | `plugins/order/views/default/admin_settings.pdt` |
| Connected language-tab form with CKEditor 5 lazy-init per tab | `plugins/cms/views/default/admin_main_manage.pdt` |
| Status-conditional action buttons on rows | `plugins/order/views/default/admin_payouts.pdt` |
| Embed-codes alert + Ace editor theme-aware integration | `plugins/order/views/default/admin_forms_embed_codes.pdt` |
| Paradigm sidebar (collapsible groups) | `plugins/order/views/default/partials/admin_affiliates_sidebar.pdt` |
| Tooltip-wrapped row content using `data-bs-toggle="tooltip" data-bs-html="true"` | `plugins/order/views/default/admin_main_search.pdt` |
| Sidebar pattern (ticket meta in side panel) | `plugins/support_manager/views/default/admin_tickets_reply_sidebar.pdt` |
| Toast UI editor / ticket reply / inline image upload | `plugins/support_manager/views/default/admin_tickets_reply.pdt` |
| Ticket replies card pattern | `plugins/support_manager/views/default/admin_tickets_replies.pdt` |
| File upload zone + preview | `plugins/support_manager/views/default/admin_staff_edit.pdt` |
| Card grid (folders) | `plugins/support_manager/views/default/admin_responses_response_list.pdt` |
| Dual-select drag-drop list | `plugins/support_manager/views/default/admin_staff_add.pdt` |
| Modal confirm pattern (declarative) | `plugins/support_manager/views/default/admin_departments.pdt` |
| Widget feed with pagination | `plugins/feed_reader/views/default/admin_main.pdt` |
| Dashboard widget (`widget-width` button, ApexCharts, theme-aware filters) | `plugins/system_overview/views/default/admin_main.pdt` |

Core paradigm references:

|  |  |
| --- | --- |
| Main structure shell | `app/views/admin/paradigm/structure.pdt` |
| Sidebar partials | `app/views/admin/paradigm/partials/sidebar.pdt`, `â¦/plugin_sidebar.pdt`, `â¦/main_sidebar.pdt` |
| Theme manifest | `app/views/admin/paradigm/config.json` |
| Helper library JS (globals) | `assets/scripts/admin/paradigm/application.js` |
| Theme variables SCSS | `assets/sass/admin/paradigm/base/_variables.scss` |
| Backwards-compat shims | `assets/sass/admin/paradigm/_backwards.scss` |
| Expandable rows JS | `assets/scripts/admin/paradigm/expandable-rows.js` |
| Widget helper PHP | `public_html/helpers/widget/widget.php` |
| AbstractWidget base | `public_html/core/Util/Widgets/AbstractWidget.php` |
| AppController (asset/AJAX/CSRF) | `public_html/app/app_controller.php` |
| Module base class | `public_html/components/modules/module.php` |
| Class aliases (`ModuleFields`, etc.) | `public_html/config/aliases.php` |
| Gulp asset build | `gulpfile.js` |

---

## 17. Using AI to convert your extension[â](#17-using-ai-to-convert-your-extension "Direct link to 17. Using AI to convert your extension")

Save a copy of this guide alongside your extension's source â the [downloadable Markdown file](dev__v6-extension-conversion.md) at the top of this page is the same content in raw form, suitable for dropping into Claude, ChatGPT, Cursor, or another AI assistant as conversion context. The prompt below applies the rules above exhaustively to every `.pdt` file and inline `<script>` in your extension.

```
You are converting a Blesta 5.x plugin (or module) to be compatible with the  
Blesta 6 Paradigm admin theme (Bootstrap 5 + vanilla JS + Bootstrap Icons).  
  
Apply the rules in BLESTA-6-EXTENSION-CONVERSION-GUIDE.md exhaustively to  
every .pdt file and inline <script> in the extension. Specifically:  
  
1. Apply Â§2 conversion checklist line by line.  
2. Apply Â§4 Bootstrap 4â5 class changes (data-bs- infix, float-end, ms/me,  
   form-select, form-check, form-label, btn-secondary, badge bg-â¦, etc.).  
3. Apply Â§5 icon mapping (every fas/far/fa fa-â¦ becomes bi bi-â¦), including  
   icon strings inside PHP arrays (setLinkButtons, setLinks, setWidgetButton,  
   getAdminTabs, getClientTabs, config.json).  
4. Apply Â§6 jQuery â vanilla JS conversion (no jQuery anywhere). Replace  
   $(document).ready, all selectors, all events, all $.fn.blestaXxx calls,  
   blestaRequest, jQuery UI sortable, CKEditor binding. Use `fetch()` with  
   X-Requested-With header for AJAX.  
5. Apply Â§7 markup changes (card-body/card-content/card-footer, table-responsive,  
   table-hover, expandable rows via data-collapse-row, modal-confirm-delete buttons).  
6. Apply Â§8 Form helper class injection (form-control, form-select, form-check-input,  
   form-label, form-check-label) â every Form helper call must pass the right class.  
7. Apply Â§9 Widget API changes (setBodyWrapper, footer(), full_screen â full-screen,  
   widget-width, icon class strings in arrays).  
8. Apply Â§11 theme variables â never hard-code colors. Use var(--border-color),  
   var(--bg-secondary), bg-body-secondary, etc.  
9. For modules, also apply Â§13: optional config.json icon key, and rename  
   arrayToModuleFields overrides to arrayToInputFields.  
10. Test mentally in both light AND dark mode. Flag any hard-coded colors.  
  
After each file, tell me what you changed. Don't add features or refactor  
anything beyond what the guide requires.
```

Replace the file name in the first paragraph (`BLESTA-6-EXTENSION-CONVERSION-GUIDE.md`) with whatever you saved the file as. Some assistants accept the file as an attachment instead of inline context â either works.

---

## Appendix A â Summary "before vs after" for a typical admin form[â](#appendix-a--summary-before-vs-after-for-a-typical-admin-form "Direct link to Appendix A â Summary \"before vs after\" for a typical admin form")

**Before (Blesta 5):**

```
<?php  
$this->Widget->create($this->_('AdminFoo.add.boxtitle', true));  
?>  
<div class="inner">  
    <div class="title_row first"><h3><?php $this->_('AdminFoo.add.section');?></h3></div>  
    <?php $this->Form->create($this->base_uri . 'plugin/your_plugin/admin_foo/add/'); ?>  
    <div class="pad">  
        <ul>  
            <li>  
                <?php  
                $this->Form->label($this->_('AdminFoo.add.field_name', true), 'name');  
                $this->Form->fieldText('name', $vars->name, ['id' => 'name']);  
                ?>  
            </li>  
            <li>  
                <?php  
                $this->Form->label($this->_('AdminFoo.add.field_status', true), 'status');  
                $this->Form->fieldSelect('status', $statuses, $vars->status, ['id' => 'status']);  
                ?>  
            </li>  
            <li>  
                <?php  
                $this->Form->fieldCheckbox('enabled', '1', $vars->enabled == '1', ['id' => 'enabled']);  
                $this->Form->label($this->_('AdminFoo.add.field_enabled', true), 'enabled', ['class' => 'inline']);  
                ?>  
            </li>  
        </ul>  
    </div>  
    <div class="button_row">  
        <a class="btn btn-default pull-right ajax" href="<?php echo $this->base_uri . 'plugin/your_plugin/admin_foo/';?>">  
            <i class="fas fa-times"></i> <?php $this->_('AdminFoo.add.field_cancel');?>  
        </a>  
        <?php $this->Form->fieldSubmit('save', $this->_('AdminFoo.add.field_save', true),  
            ['class' => 'btn btn-primary pull-right']); ?>  
    </div>  
    <?php $this->Form->end(); ?>  
</div>  
<?php $this->Widget->end(); ?>  
  
<script type="text/javascript">  
$(document).ready(function() {  
    $('[data-toggle="tooltip"]').tooltip();  
    $('#enabled').change(function() {  
        $('.dependent-section').toggle(this.checked);  
    });  
});  
</script>
```

**After (Blesta 6):**

```
<?php /** @var View $this */ ?>  
<?php $this->Form->create($this->base_uri . 'plugin/your_plugin/admin_foo/add/'); ?>  
<?php $this->Widget->create($this->_('AdminFoo.add.boxtitle', true)); ?>  
    <h6 class="form-section-header"><?php $this->_('AdminFoo.add.section');?></h6>  
  
    <div class="mb-3">  
        <?php  
        $this->Form->label($this->_('AdminFoo.add.field_name', true), 'name', ['class' => 'form-label']);  
        $this->Form->fieldText('name', $vars->name ?? '', ['id' => 'name', 'class' => 'form-control']);  
        ?>  
    </div>  
  
    <div class="mb-3">  
        <?php  
        $this->Form->label($this->_('AdminFoo.add.field_status', true), 'status', ['class' => 'form-label']);  
        $this->Form->fieldSelect('status', $statuses, $vars->status ?? null, ['id' => 'status', 'class' => 'form-select']);  
        ?>  
    </div>  
  
    <div class="mb-3">  
        <div class="form-check">  
            <?php  
            $this->Form->fieldCheckbox('enabled', '1', ($vars->enabled ?? '') == '1',  
                ['id' => 'enabled', 'class' => 'form-check-input']);  
            $this->Form->label($this->_('AdminFoo.add.field_enabled', true), 'enabled', ['class' => 'form-check-label']);  
            ?>  
        </div>  
    </div>  
  
    <?php $this->Widget->footer(); ?>  
    <div class="d-flex justify-content-end gap-2">  
        <a class="btn btn-outline-secondary ajax" href="<?php echo $this->base_uri . 'plugin/your_plugin/admin_foo/';?>">  
            <?php $this->_('AdminFoo.add.field_cancel');?>  
        </a>  
        <?php $this->Form->fieldSubmit('save', $this->_('AdminFoo.add.field_save', true),  
            ['class' => 'btn btn-primary']); ?>  
    </div>  
<?php $this->Widget->end(); ?>  
<?php $this->Form->end(); ?>  
  
<script type="text/javascript">  
document.addEventListener('DOMContentLoaded', function() {  
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el) {  
        new bootstrap.Tooltip(el);  
    });  
  
    var enabled = document.getElementById('enabled');  
    if (enabled) {  
        var sections = document.querySelectorAll('.dependent-section');  
        var toggle = function() {  
            sections.forEach(function(s) {  
                s.style.display = enabled.checked ? '' : 'none';  
            });  
        };  
        enabled.addEventListener('change', toggle);  
        toggle();  
    }  
});  
</script>
```

---

## Appendix B â Quick-reference search/replace table[â](#appendix-b--quick-reference-searchreplace-table "Direct link to Appendix B â Quick-reference search/replace table")

Suitable for a regex-aware editor. Apply in this order, eyeballing each match:

| Find | Replace |
| --- | --- |
| `data-toggle=` | `data-bs-toggle=` |
| `data-target=` | `data-bs-target=` |
| `data-dismiss=` | `data-bs-dismiss=` |
| `data-parent=` | `data-bs-parent=` |
| `data-placement=` | `data-bs-placement=` |
| `data-html=` | `data-bs-html=` |
| `data-container=` | `data-bs-container=` |
| `\bpull-right\b` | `float-end` |
| `\bpull-left\b` | `float-start` |
| `\bfloat-right\b` | `float-end` |
| `\bfloat-left\b` | `float-start` |
| `\bml-(\d)\b` | `ms-$1` |
| `\bmr-(\d)\b` | `me-$1` |
| `\bpl-(\d)\b` | `ps-$1` |
| `\bpr-(\d)\b` | `pe-$1` |
| `\btext-left\b` | `text-start` |
| `\btext-right\b` | `text-end` |
| `\bfont-weight-bold\b` | `fw-bold` |
| `\bfont-weight-normal\b` | `fw-normal` |
| `\bsr-only\b` | `visually-hidden` |
| `\bbtn-default\b` | `btn-secondary` |
| `\bbtn-block\b` | `w-100` |
| `\bbadge-(primary|secondary|success|danger|warning|info|light|dark)\b` | `bg-$1` |
| `\bform-group\b` | `mb-3` |
| `\bcustom-control custom-checkbox\b` | `form-check` |
| `\bcustom-control custom-radio\b` | `form-check` |
| `\bcustom-control-input\b` | `form-check-input` |
| `\bcustom-control-label\b` | `form-check-label` |
| `\bcustom-select\b` | `form-select` |
| `\bbg-light\b` | `bg-body-secondary` |
| `class="close"` | `class="btn-close"` |
| `<i class="fas fa-plus(\s|")` | `<i class="bi bi-plus-lg$1` |
| `<i class="fas fa-pencil-alt(\s|")` | `<i class="bi bi-pencil$1` |
| `<i class="fas fa-trash(\s|")` | `<i class="bi bi-trash$1` |
| `<i class="fas fa-cog(\s|")` | `<i class="bi bi-gear$1` |
| `<i class="fas fa-times(\s|")` | `<i class="bi bi-x-lg$1` |
| `<i class="fas fa-eye(\s|")` | `<i class="bi bi-eye$1` |
| `<i class="fas fa-question-circle(\s|")` | `<i class="bi bi-question-circle$1` |
| `<i class="fas fa-info-circle(\s|")` | `<i class="bi bi-info-circle$1` |
| `<i class="fas fa-power-off(\s|")` | `<i class="bi bi-power$1` |
| `<i class="fas fa-sync-alt(\s|")` | `<i class="bi bi-arrow-clockwise$1` |
| `<i class="fas fa-sign-in-alt(\s|")` | `<i class="bi bi-box-arrow-in-right$1` |
| `<i class="fas fa-(\w[\w-]*)(\s|")` | `<i class="bi bi-$1$2` (then verify each) |
| `\$\(document\)\.ready\(` | `document.addEventListener('DOMContentLoaded',` |
| `\.blestaRequest\(` | (rewrite manually as `fetch`) |
| `'icon' => 'fas fa-(\w[\w-]*)'` | `'icon' => 'bi bi-$1'` |
| `setWidgetButton\('full_screen'\)` | `setWidgetButton('full-screen')` |

After bulk replacements, manually verify icon mappings against Â§5.1 (some FA names don't have a 1:1 BS Icons equivalent and need a different name).
