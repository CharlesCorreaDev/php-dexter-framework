# Contents · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/getting-started/contents/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/getting-started/contents.md "View and edit this file on GitHub")

# Contents

Discover what’s included in Bootstrap, including our precompiled and source code flavors. Remember, Bootstrap’s JavaScript plugins require jQuery.

## Precompiled Bootstrap

Once downloaded, unzip the compressed folder and you’ll see something like this:

```
bootstrap/
├── css/
│   ├── bootstrap-grid.css
│   ├── bootstrap-grid.css.map
│   ├── bootstrap-grid.min.css
│   ├── bootstrap-grid.min.css.map
│   ├── bootstrap-reboot.css
│   ├── bootstrap-reboot.css.map
│   ├── bootstrap-reboot.min.css
│   ├── bootstrap-reboot.min.css.map
│   ├── bootstrap.css
│   ├── bootstrap.css.map
│   ├── bootstrap.min.css
│   └── bootstrap.min.css.map
└── js/
    ├── bootstrap.bundle.js
    ├── bootstrap.bundle.js.map
    ├── bootstrap.bundle.min.js
    ├── bootstrap.bundle.min.js.map
    ├── bootstrap.js
    ├── bootstrap.js.map
    ├── bootstrap.min.js
    └── bootstrap.min.js.map
```

This is the most basic form of Bootstrap: precompiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (`bootstrap.*`), as well as compiled and minified CSS and JS (`bootstrap.min.*`). [Source maps](https://developers.google.com/web/tools/chrome-devtools/javascript/source-maps) (`bootstrap.*.map`) are available for use with certain browsers’ developer tools. Bundled JS files (`bootstrap.bundle.js` and minified `bootstrap.bundle.min.js`) include [Popper](https://github.com/floating-ui/popper-docs/blob/main/docs/v1/index.md), but not [jQuery](https://jquery.com/).

## CSS files

Bootstrap includes a handful of options for including some or all of our compiled CSS.

| CSS files | Layout | Content | Components | Utilities |
| --- | --- | --- | --- | --- |
| `bootstrap.css`  `bootstrap.min.css` | Included | Included | Included | Included |
| `bootstrap-grid.css`  `bootstrap-grid.min.css` | [Only grid system](layout__grid.md) | Not included | Not included | [Only flex utilities](utilities__flex.md) |
| `bootstrap-reboot.css`  `bootstrap-reboot.min.css` | Not included | [Only Reboot](content__reboot.md) | Not included | Not included |

## JS files

Similarly, we have options for including some or all of our compiled JavaScript.

| JS files | Popper | jQuery |
| --- | --- | --- |
| `bootstrap.bundle.js`  `bootstrap.bundle.min.js` | Included | Not included |
| `bootstrap.js`  `bootstrap.min.js` | Not included | Not included |

## Bootstrap source code

The Bootstrap source code download includes the precompiled CSS and JavaScript assets, along with source Sass, JavaScript, and documentation. More specifically, it includes the following and more:

```
bootstrap/
├── dist/
│   ├── css/
│   └── js/
├── site/
│   └── content/
|       └── docs/
|           └── 4.6/
|               └── examples/
├── js/
└── scss/
```

The `scss/` and `js/` are the source code for our CSS and JavaScript. The `dist/` folder includes everything listed in the precompiled download section above. The `site/docs/` folder includes the source code for our documentation, and `examples/` of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.
