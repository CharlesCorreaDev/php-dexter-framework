# Text transform · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/text-transform

---

# Text transform

Transform text in components with text capitalization utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/text-transform)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .text-lowercase | text-transform: lowercase; |
| .text-uppercase | text-transform: uppercase; |
| .text-capitalize | text-transform: capitalize; |

Transform text in components with text capitalization classes.

Lowercased text.

Uppercased text.

CapiTaliZed text.

HTML

```
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">CapiTaliZed text.</p>
```

Note how `.text-capitalize` only changes the first letter of each word, leaving the case of any other letters unaffected.

## CSS

### Sass utilities API

Text transform utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"text-transform": (
  property: text-transform,
  class: text,
  values: lowercase uppercase capitalize
),
```
