# Page ownership — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/page-owner.html

---

# Page ownership[](#page-ownership "Permalink to this heading")

One recurring task of any plugin will be to determine the page ownership in order to decide which actions are allowed or not.
Elgg has a number of functions related to page ownership and also offers plugin developers flexibility by letting the plugin handle
page ownership requests as well. Determining the owner of a page can be determined with `elgg_get_page_owner_guid()`, which will
return the GUID of the owner. Alternatively, `elgg_get_page_owner_entity()` will retrieve the whole page owner entity. If the page
already knows who the page owner is, but the system doesn’t, the page can set the page owner by passing the GUID to `elgg_set_page_owner_guid($guid)`.

Note

The page owner entity can be any `ElggEntity`. If you wish to only apply some setting in case of a user or a group make sure you
check that you have the correct entity.

## Page owner detection[](#page-owner-detection "Permalink to this heading")

Based on the route definition:

- If the name starts with `view` or `edit` the parameters `username` and `guid` are checked
- If the name starts with `add` or `collection` the parameters `username`, `guid` and `container_guid` are checked
- If in the route definition the value `detect_page_owner` is set to `true` the parameters `username`, `guid` and `container_guid` are checked
