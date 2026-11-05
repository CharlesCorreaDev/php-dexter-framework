# Services — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/services.html

---

# Services[](#services "Permalink to this heading")

Elgg uses the `Elgg\Application` class to load and bootstrap Elgg. In future releases this
class will offer a set of service objects for plugins to use.

Note

If you have a useful idea, you can [add a new service](contribute__services.md)!

## Menus[](#menus "Permalink to this heading")

`elgg()->menus` provides low-level methods for constructing menus. In general, menus should be
passed to `elgg_view_menu` for rendering instead of manual rendering.
