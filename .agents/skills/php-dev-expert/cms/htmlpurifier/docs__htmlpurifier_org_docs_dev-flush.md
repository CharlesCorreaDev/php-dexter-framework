# Flushing the Purifier - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/dev-flush.html

---

# Flushing the Purifier

Filed under Development

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

If you've been poking around the various folders in HTML Purifier,
you may have noticed the `maintenance` directory. Almost
all of these scripts are devoted to flushing out the various caches
HTML Purifier uses. Normal users don't have to worry about this:
regular library usage is transparent. However, when doing development
work on HTML Purifier, you may find you have to flush one of the
caches.

As a general rule of thumb, run `flush.php` whenever you make
any *major* changes, or when tests start mysteriously failing.
In more detail, run this script if:

- You added new source files to HTML Purifier's main library.
  (see `generate-includes.php`)
- You modified the configuration schema (see
  `generate-schema-cache.php`). This usually means
  adding or modifying files in `HTMLPurifier/ConfigSchema/schema/`,
  although in rare cases modifying `HTMLPurifier/ConfigSchema.php`
  will also require this.
- You modified a Definition, or its subsystems. The most usual candidate
  is `HTMLPurifier/HTMLDefinition.php`, which also encompasses
  the files in `HTMLPurifier/HTMLModule/` as well as if you've
  [customizing definitions](enduser-customize.html) without
  the cache disabled. (see `flush-generation-cache.php`)
- You modified source files, and have been using the standalone
  version from the full installation. (see `generate-standalone.php`)

You can check out the corresponding scripts for more information on what they
do.
