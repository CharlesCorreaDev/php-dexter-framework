# Customize and download · Bootstrap

> **Fonte / Source:** https://getbootstrap.com/docs/3.4/customize/

---

Have an existing configuration? Upload your `config.json` to import it.

Upload

---

**Don't have one?** That's okay—just start customizing the fields below.

Toggle all

# Less files

Choose which Less files to compile into your custom build of Bootstrap. Not sure which files to use? Read through the [CSS](css.md) and [Components](components.md) pages in the docs.

### Common CSS

Print media styles

Typography

Code

Grid system

Tables

Forms

Buttons

Responsive utilities

### Components

Glyphicons

Button groups

Input groups

Navs

Navbar

Breadcrumbs

Pagination

Pager

Labels

Badges

Jumbotron

Thumbnails

Alerts

Progress bars

Media items

List groups

Panels

Responsive embed

Wells

Close icon

### JavaScript components

Component animations (for JS)  
(includes Collapse)

Dropdown

Tooltip

Popover

Modal

Carousel

Toggle all

# jQuery plugins

Choose which jQuery plugins should be included in your custom JavaScript files. Unsure what to include? Read the [JavaScript](javascript.md) page in the docs.

#### Linked to components

Alert dismissal

Advanced buttons

Carousel functionality

Dropdowns

Modals

Tooltips

Popovers (requires Tooltips)

Togglable tabs

#### Magic

Affix

Collapse

Scrollspy

Transitions (required for any kind of animation)

#### Produces two files

All checked plugins will be compiled into a readable `bootstrap.js` and a minified `bootstrap.min.js`. We recommend you use the minified version in production.

#### jQuery required

All plugins require the latest version of [jQuery](https://jquery.com/) to be included.

Reset to defaults

# Less variables

Customize Less variables to define colors, sizes and more inside your custom CSS stylesheets.

## Colors

Gray and brand colors for use across Bootstrap.

@gray-base

@gray-darker

@gray-dark

@gray

@gray-light

@gray-lighter

@brand-primary

@brand-success

@brand-info

@brand-warning

@brand-danger

## Scaffolding

Settings for some of the most global styles.

@body-bg

Background color for `<body>`.

@text-color

Global text color on `<body>`.

@link-color

Global textual link color.

@link-hover-color

Link hover color set via `darken()` function.

@link-hover-decoration

Link hover decoration.

## Typography

Font, line-height, and color for body text, headings, and more.

@font-family-sans-serif

@font-family-serif

@font-family-monospace

Default monospace fonts for `<code>`, `<kbd>`, and `<pre>`.

@font-family-base

@font-size-base

@font-size-large

@font-size-small

@font-size-h1

@font-size-h2

@font-size-h3

@font-size-h4

@font-size-h5

@font-size-h6

@line-height-base

Unit-less `line-height` for use in components like buttons.

@line-height-computed

Computed "line-height" (`font-size` \* `line-height`) for use with `margin`, `padding`, etc.

@headings-font-family

By default, this inherits from the `<body>`.

@headings-font-weight

@headings-line-height

@headings-color

## Iconography

Specify custom location and filename of the included Glyphicons icon font. Useful for those including Bootstrap via Bower.

@icon-font-path

Load fonts from this directory.

@icon-font-name

File name for all font files.

@icon-font-svg-id

Element ID within SVG icon file.

## Components

Define common padding and border radius sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).

@padding-base-vertical

@padding-base-horizontal

@padding-large-vertical

@padding-large-horizontal

@padding-small-vertical

@padding-small-horizontal

@padding-xs-vertical

@padding-xs-horizontal

@line-height-large

@line-height-small

@border-radius-base

@border-radius-large

@border-radius-small

@component-active-color

Global color for active items (e.g., navs or dropdowns).

@component-active-bg

Global background color for active items (e.g., navs or dropdowns).

@caret-width-base

Width of the `border` for generating carets that indicate dropdowns.

@caret-width-large

Carets increase slightly in size for larger components.

## Tables

Customizes the `.table` component with basic values, each used across all table variations.

@table-cell-padding

Padding for `<th>`s and `<td>`s.

@table-condensed-cell-padding

Padding for cells in `.table-condensed`.

@table-bg

Default background color used for all tables.

@table-bg-accent

Background color used for `.table-striped`.

@table-bg-hover

Background color used for `.table-hover`.

@table-bg-active

@table-border-color

Border color for table and cell borders.

## Buttons

For each of Bootstrap's buttons, define text, background and border color.

@btn-font-weight

@btn-default-color

@btn-default-bg

@btn-default-border

@btn-primary-color

@btn-primary-bg

@btn-primary-border

@btn-success-color

@btn-success-bg

@btn-success-border

@btn-info-color

@btn-info-bg

@btn-info-border

@btn-warning-color

@btn-warning-bg

@btn-warning-border

@btn-danger-color

@btn-danger-bg

@btn-danger-border

@btn-link-disabled-color

@btn-border-radius-base

@btn-border-radius-large

@btn-border-radius-small

## Forms

@input-bg

`<input>` background color

@input-bg-disabled

`<input disabled>` background color

@input-color

Text color for `<input>`s

@input-border

`<input>` border color

@input-border-radius

Default `.form-control` border radius

@input-border-radius-large

Large `.form-control` border radius

@input-border-radius-small

Small `.form-control` border radius

@input-border-focus

Border color for inputs on focus

@input-color-placeholder

Placeholder text color

@input-height-base

Default `.form-control` height

@input-height-large

Large `.form-control` height

@input-height-small

Small `.form-control` height

@form-group-margin-bottom

`.form-group` margin

@legend-color

@legend-border-color

@input-group-addon-bg

Background color for textual input addons

@input-group-addon-border-color

Border color for textual input addons

@cursor-disabled

Disabled cursor for form controls and buttons.

## Dropdowns

Dropdown menu container and contents.

@dropdown-bg

Background for the dropdown menu.

@dropdown-border

Dropdown menu `border-color`.

@dropdown-fallback-border

Dropdown menu `border-color` **for IE8**.

@dropdown-divider-bg

Divider color for between dropdown items.

@dropdown-link-color

Dropdown link text color.

@dropdown-link-hover-color

Hover color for dropdown links.

@dropdown-link-hover-bg

Hover background for dropdown links.

@dropdown-link-active-color

Active dropdown menu item text color.

@dropdown-link-active-bg

Active dropdown menu item background color.

@dropdown-link-disabled-color

Disabled dropdown menu item background color.

@dropdown-header-color

Text color for headers within dropdown menus.

@dropdown-caret-color

Deprecated `@dropdown-caret-color` as of v3.1.0

## Media queries breakpoints

Define the breakpoints at which your layout will change, adapting to different screen sizes.

@screen-xs

Deprecated `@screen-xs` as of v3.0.1

@screen-xs-min

Deprecated `@screen-xs-min` as of v3.2.0

@screen-phone

Deprecated `@screen-phone` as of v3.0.1

@screen-sm

Deprecated `@screen-sm` as of v3.0.1

@screen-sm-min

@screen-tablet

Deprecated `@screen-tablet` as of v3.0.1

@screen-md

Deprecated `@screen-md` as of v3.0.1

@screen-md-min

@screen-desktop

Deprecated `@screen-desktop` as of v3.0.1

@screen-lg

Deprecated `@screen-lg` as of v3.0.1

@screen-lg-min

@screen-lg-desktop

Deprecated `@screen-lg-desktop` as of v3.0.1

@screen-xs-max

@screen-sm-max

@screen-md-max

## Grid system

Define your custom responsive grid.

@grid-columns

Number of columns in the grid.

@grid-gutter-width

Padding between columns. Gets divided in half for the left and right.

@grid-float-breakpoint

Point at which the navbar becomes uncollapsed.

@grid-float-breakpoint-max

Point at which the navbar begins collapsing.

## Container sizes

Define the maximum width of `.container` for different screen sizes.

@container-tablet

@container-sm

For `@screen-sm-min` and up.

@container-desktop

@container-md

For `@screen-md-min` and up.

@container-large-desktop

@container-lg

For `@screen-lg-min` and up.

## Navbar

@navbar-height

@navbar-margin-bottom

@navbar-border-radius

@navbar-padding-horizontal

@navbar-padding-vertical

@navbar-collapse-max-height

@navbar-default-color

@navbar-default-bg

@navbar-default-border

@navbar-default-link-color

@navbar-default-link-hover-color

@navbar-default-link-hover-bg

@navbar-default-link-active-color

@navbar-default-link-active-bg

@navbar-default-link-disabled-color

@navbar-default-link-disabled-bg

@navbar-default-brand-color

@navbar-default-brand-hover-color

@navbar-default-brand-hover-bg

@navbar-default-toggle-hover-bg

@navbar-default-toggle-icon-bar-bg

@navbar-default-toggle-border-color

### Inverted navbar

@navbar-inverse-color

@navbar-inverse-bg

@navbar-inverse-border

@navbar-inverse-link-color

@navbar-inverse-link-hover-color

@navbar-inverse-link-hover-bg

@navbar-inverse-link-active-color

@navbar-inverse-link-active-bg

@navbar-inverse-link-disabled-color

@navbar-inverse-link-disabled-bg

@navbar-inverse-brand-color

@navbar-inverse-brand-hover-color

@navbar-inverse-brand-hover-bg

@navbar-inverse-toggle-hover-bg

@navbar-inverse-toggle-icon-bar-bg

@navbar-inverse-toggle-border-color

## Navs

### Shared nav styles

@nav-link-padding

@nav-link-hover-bg

@nav-disabled-link-color

@nav-disabled-link-hover-color

## Tabs

@nav-tabs-border-color

@nav-tabs-link-hover-border-color

@nav-tabs-active-link-hover-bg

@nav-tabs-active-link-hover-color

@nav-tabs-active-link-hover-border-color

@nav-tabs-justified-link-border-color

@nav-tabs-justified-active-link-border-color

## Pills

@nav-pills-border-radius

@nav-pills-active-link-hover-bg

@nav-pills-active-link-hover-color

## Pagination

@pagination-color

@pagination-bg

@pagination-border

@pagination-hover-color

@pagination-hover-bg

@pagination-hover-border

@pagination-active-color

@pagination-active-bg

@pagination-active-border

@pagination-disabled-color

@pagination-disabled-bg

@pagination-disabled-border

## Pager

@pager-bg

@pager-border

@pager-border-radius

@pager-hover-bg

@pager-active-bg

@pager-active-color

@pager-disabled-color

## Jumbotron

@jumbotron-padding

@jumbotron-color

@jumbotron-bg

@jumbotron-heading-color

@jumbotron-font-size

@jumbotron-heading-font-size

## Form states and alerts

Define colors for form feedback states and, by default, alerts.

@state-success-text

@state-success-bg

@state-success-border

@state-info-text

@state-info-bg

@state-info-border

@state-warning-text

@state-warning-bg

@state-warning-border

@state-danger-text

@state-danger-bg

@state-danger-border

## Tooltips

@tooltip-max-width

Tooltip max width

@tooltip-color

Tooltip text color

@tooltip-bg

Tooltip background color

@tooltip-opacity

@tooltip-arrow-width

Tooltip arrow width

@tooltip-arrow-color

Tooltip arrow color

## Popovers

@popover-bg

Popover body background color

@popover-max-width

Popover maximum width

@popover-border-color

Popover border color

@popover-fallback-border-color

Popover fallback border color

@popover-title-bg

Popover title background color

@popover-arrow-width

Popover arrow width

@popover-arrow-color

Popover arrow color

@popover-arrow-outer-width

Popover outer arrow width

@popover-arrow-outer-color

Popover outer arrow color

@popover-arrow-outer-fallback-color

Popover outer arrow fallback color

## Labels

@label-default-bg

Default label background color

@label-primary-bg

Primary label background color

@label-success-bg

Success label background color

@label-info-bg

Info label background color

@label-warning-bg

Warning label background color

@label-danger-bg

Danger label background color

@label-color

Default label text color

@label-link-hover-color

Default text color of a linked label

## Modals

@modal-inner-padding

Padding applied to the modal body

@modal-title-padding

Padding applied to the modal title

@modal-title-line-height

Modal title line-height

@modal-content-bg

Background color of modal content area

@modal-content-border-color

Modal content border color

@modal-content-fallback-border-color

Modal content border color **for IE8**

@modal-backdrop-bg

Modal backdrop background color

@modal-backdrop-opacity

Modal backdrop opacity

@modal-header-border-color

Modal header border color

@modal-footer-border-color

Modal footer border color

@modal-lg

@modal-md

@modal-sm

## Alerts

Define alert colors, border radius, and padding.

@alert-padding

@alert-border-radius

@alert-link-font-weight

@alert-success-bg

@alert-success-text

@alert-success-border

@alert-info-bg

@alert-info-text

@alert-info-border

@alert-warning-bg

@alert-warning-text

@alert-warning-border

@alert-danger-bg

@alert-danger-text

@alert-danger-border

## Progress bars

@progress-bg

Background color of the whole progress component

@progress-bar-color

Progress bar text color

@progress-border-radius

Variable for setting rounded corners on progress bar.

@progress-bar-bg

Default progress bar color

@progress-bar-success-bg

Success progress bar color

@progress-bar-warning-bg

Warning progress bar color

@progress-bar-danger-bg

Danger progress bar color

@progress-bar-info-bg

Info progress bar color

## List group

@list-group-bg

Background color on `.list-group-item`

@list-group-border

`.list-group-item` border color

@list-group-border-radius

List group border radius

@list-group-hover-bg

Background color of single list items on hover

@list-group-active-color

Text color of active list items

@list-group-active-bg

Background color of active list items

@list-group-active-border

Border color of active list elements

@list-group-active-text-color

Text color for content within active list items

@list-group-disabled-color

Text color of disabled list items

@list-group-disabled-bg

Background color of disabled list items

@list-group-disabled-text-color

Text color for content within disabled list items

@list-group-link-color

@list-group-link-hover-color

@list-group-link-heading-color

## Panels

@panel-bg

@panel-body-padding

@panel-heading-padding

@panel-footer-padding

@panel-border-radius

@panel-inner-border

Border color for elements within panels

@panel-footer-bg

@panel-default-text

@panel-default-border

@panel-default-heading-bg

@panel-primary-text

@panel-primary-border

@panel-primary-heading-bg

@panel-success-text

@panel-success-border

@panel-success-heading-bg

@panel-info-text

@panel-info-border

@panel-info-heading-bg

@panel-warning-text

@panel-warning-border

@panel-warning-heading-bg

@panel-danger-text

@panel-danger-border

@panel-danger-heading-bg

## Thumbnails

@thumbnail-padding

Padding around the thumbnail image

@thumbnail-bg

Thumbnail background color

@thumbnail-border

Thumbnail border color

@thumbnail-border-radius

Thumbnail border radius

@thumbnail-caption-color

Custom text color for thumbnail captions

@thumbnail-caption-padding

Padding around the thumbnail caption

## Wells

@well-bg

@well-border

## Badges

@badge-color

@badge-link-hover-color

Linked badge text color on hover

@badge-bg

@badge-active-color

Badge text color in active nav link

@badge-active-bg

Badge background color in active nav link

@badge-font-weight

@badge-line-height

@badge-border-radius

@breadcrumb-padding-vertical

@breadcrumb-padding-horizontal

@breadcrumb-bg

Breadcrumb background color

@breadcrumb-color

Breadcrumb text color

@breadcrumb-active-color

Text color of current page in the breadcrumb

@breadcrumb-separator

Textual separator for between breadcrumb elements

## Carousel

@carousel-text-shadow

@carousel-control-color

@carousel-control-width

@carousel-control-opacity

@carousel-control-font-size

@carousel-indicator-active-bg

@carousel-indicator-border-color

@carousel-caption-color

## Close

@close-font-weight

@close-color

@close-text-shadow

## Code

@code-color

@code-bg

@kbd-color

@kbd-bg

@pre-bg

@pre-color

@pre-border-color

@pre-scrollable-max-height

## Type

@component-offset-horizontal

Horizontal offset for forms and lists.

@text-muted

Text muted color

@abbr-border-color

Abbreviations and acronyms border color

@headings-small-color

Headings small color

@blockquote-small-color

Blockquote small color

@blockquote-font-size

Blockquote font size

@blockquote-border-color

Blockquote border color

@page-header-border-color

Page header border color

@dl-horizontal-offset

Width of horizontal description list titles

@dl-horizontal-breakpoint

Point at which .dl-horizontal becomes horizontal

@hr-border

Horizontal line color.

# Download

Hooray! Your custom version of Bootstrap is now ready to be compiled. Just click the button below to finish the process.

Compile and Download
