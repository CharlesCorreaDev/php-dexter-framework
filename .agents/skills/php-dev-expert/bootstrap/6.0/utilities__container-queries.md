# Container queries · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/container-queries

---

# Container queries

Turn an element into a query container with container-type utilities so descendants can respond to its size.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/container-queries)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .contains-inline | container-type: inline-size; |
| .contains-size | container-type: size; |

Use the `.contains-*` utilities to set the `container-type` property, establishing an element as a [query container](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_containment/Container_queries). Once an element is a query container, its descendants can adapt their styles based on the container’s size rather than the viewport.

Apply `.contains-inline` to query on inline size (width in horizontal writing modes), or `.contains-size` to query on both inline and block size.

HTML

```
          <div class="contains-inline">
  <div class="card">...</div>
</div>
```

SCSS

```
          // Classes
.contains-inline {
  container-type: inline-size;
}
.contains-size {
  container-type: size;
}
```

`.contains-size` queries the container’s block size as well, so the element must have an explicit height for `size` containment to resolve. When in doubt, reach for `.contains-inline`.

Several components rely on a query container to enable their responsive layouts. For example, wrap a `.card-group` or a horizontal `.list-group` in an element with `.contains-inline` so their container-query-based layouts take effect.

## CSS

### Sass utilities API

Container utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"container": (
  property: container-type,
  class: contains,
  values: (
    "inline": inline-size,
    "size": size,
  )
),
```
