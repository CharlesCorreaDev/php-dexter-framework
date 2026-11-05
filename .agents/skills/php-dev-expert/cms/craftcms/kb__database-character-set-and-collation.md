# Database Character Set and Collation | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/database-character-set-and-collation

---

Search Knowledge Base

# Database Character Set and Collation

If your Craft project uses the default MySQL database driver (or MariaDB), it’s worth taking a moment to consider how the selected character set (charset) and collation will affect things like sorting or searching.

## Definitions [#](#definitions "Direct link to Definitions")

- The **character set** is the set of symbols and encodings (an “alphabet”) used by the database to store text.
- The **collation** is the set of rules used to compare and order those characters when querying.

Craft 5.x defaults to the `utf8mb4` character set and `utf8mb4_0900_ai_ci` collation, when using MySQL. This is also the default combination for MySQL 8.x; it’s language-nonspecific, accent-insensitive (`ai`), case-insensitive (`ci`), and is based on [Unicode Collation Algorithm](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-sets.html#charset-unicode-sets-uca) version 9.0.0 weight keys (`0900`).

## Languages [#](#languages "Direct link to Languages")

If your project has a primary language with accents or other character sequences that require special handling in element queries (as constraints, search keywords, or when sorting), you may want to use the corresponding language-specific collation. *Keep in mind that all of your content will use a single charset and collation.*

Craft provides the `db/convert-charset` command to simplify the process of switching character sets and collations. You can either…

- …run the command with the new charset and collation…

  ```
  craft db/convert-charset [charset] [collation]
  ```

  …and then add the same values to your .env under `CRAFT_DB_CHARSET` and `CRAFT_DB_COLLATION`.
- …set the `CRAFT_DB_CHARSET` and `CRAFT_DB_COLLATION` environment variables, then run db/convert-charset without any arguments (accepting the suggested values when prompted) to apply those settings.

![](https://craftcms.com/dist/images/icon-tip.svg)

If this command sounds familiar, you may have run it during the Craft 5.x [upgrade](https://craftcms.com/docs/5.x/upgrade.html#database-character-set-and-collation)!

## Collations and Querying [#](#collations-and-querying "Direct link to Collations and Querying")

Suppose you have two entries, one with the title of `Jagerstrasse` and the other with the title of `Jägerstraße`. Let’s compare the following query for an entry by title, across two collations:

```
{% set entries = craft.entries()
  .section('locations')
  .title('Jagerstrasse')
  .all() %}

{% for entry in entries %}
    <p>{{ entry.title }}: {{ entry.id }}</p>
{% endfor %}
```

With the default charset and collation, both entries are returned, as matching is accent-insensitive. `ß` and `ss` are treated as equivalent.

However, if you change your collation to `utf8mb4_german2_ci` and run the query again, only the entry with the title of `Jagerstrasse` will be returned, as the accent (or lack thereof) is significant. (`ß` and `ss` are still equivalent in this collation, so a query for `Jagerstraße` would yield the same result.)

### Slugs and URIs [#](#slugs-and-uRIs "Direct link to Slugs and URIs")

This can also affect how Craft matches element URIs. For example, if the URI of an entry is `/jägerstraße` but a client tries to access `/jagerstrasse` (without the accented `a`), the database’s collation determines whether the entry is matched.

The same is true when Craft validates the uniqueness of a slug or URI: when looking for collisions with existing elements, comparisons are done in the database, meaning some collations might allow two similar slugs (like `jägerstraße` and `jagerstrasse`) to coexist while others won’t.

![](https://craftcms.com/dist/images/icon-warning.svg)

Collation can also affect less obvious characters, like whether a hyphen (`-`) is ordered before or after open parenthesis (`(`).

**Mixing character sets and collations across tables is strongly discouraged**, and is a frequent cause of performance issues, especially when selections or constraints involve indexes.

## Related Features [#](#related-features "Direct link to Related Features")

The `limitAutoSlugsToAscii` setting is *off* by default. Authors may always manually define a slug with characters outside this space, but some rules and normalizations are always applied:

- The following characters are not allowed: `'"‘’“”ʻ[](){}:`
- Slugs are down-cased unless the [`allowUppercaseInSlug`](https://craftcms.com/docs/5.x/reference/config/general.html#allowuppercaseinslug) setting is enabled
- Whitespace and empty strings are collapsed into a single [`slugWordSeparator`](https://craftcms.com/docs/5.x/reference/config/general.html#slugwordseparator)

Handles (typically used as human-readable identifiers for system components like sites and entry types) have an even narrower set of allowed characters, and are validated with this expression: `[a-zA-Z][a-zA-Z0-9_]`.

Queries against custom field values (stored in Craft’s JSON content column) are case-sensitive, by default (regardless of your database’s collation). You can force queries against some fields to be [case-insensitive](https://craftcms.com/docs/5.x/development/element-queries.html#case-sensitivity) by passing a hash:

```
{% set location = craft.entries()
  .section('locations')
  .streetName({
    value: 'jagerstrasse',
    caseInsensitive: true,
  })
  .all() %}
```

## Further Reading [#](#further-reading "Direct link to Further Reading")

- [Language-specific collations](https://dev.mysql.com/doc/refman/8.0/en/charset-unicode-sets.html#charset-unicode-sets-language-specific-collations) (MySQL documentation)
- [Everything you never wanted to know about MySQL Charsets & Collations](https://www.coderedcorp.com/blog/guide-to-mysql-charsets-collations/) (Vince Salvino, CodeRed)

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
