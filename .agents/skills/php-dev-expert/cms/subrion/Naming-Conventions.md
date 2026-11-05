# Naming Conventions · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Naming-Conventions

---

## Classes

Classes should be given descriptive names. Avoid using abbreviations where possible. Use upper case letters as word separators (CamelCase), lower case for the rest of a word. Don't use underbars.

```
class Name
{
}

class SomeCompoundName
{
}
```

## Functions and Methods

Functions and methods should be named using the "studly caps" style (also referred to as "bumpy case" or "camel caps"). The initial letter of the name (after the prefix) is lowercase, and each letter that starts a new "word" is capitalized.

## Constants

Constants should always be all-uppercase, with underscores to separate words. We highly recommend to use a prefix for the constants. It's a common practice to use *IA\_* for Subrion CMS project constants.

*Note:* The true, false and null constants are excepted from the all-uppercase rule, and must always be lowercase.

## Global Variables

All the global variables are stored in the `$GLOBALS` array. All the words in the name are uppercased with underbars as separators. E.g. `$GLOBALS['MY_GLOBAL_VAR']`.

## Hook Names

The name of hooks should be intuitively obvious and should show where hook is placed.

Recommendation name of hook:

```
typePartFileWhereWhat
```

- **type** - the type of hook (php | smarty). It could be PHP or SMARTY hook.
- **part** - the part of script (front | admin). In what part of script the hook.
- **file** - the name of file in where hook is placed.
- **where** - the place of any part of file. (after | before).
- **what** - the part of file.

Examples:
*phpFrontHeaderBeforeListingFieldsDisplay* - It is the common PHP hook in the front end and it is placed before listings fields display action.

## Block Names

The name of a block should be intuitively obvious. When you create a new block with content that's kept in an external file it's MANDATORY to use *block.* prefix in a filename. Here are some examples:

```
<block name="featured_listings" title="Featured Listings" position="right" type="smarty" showheader="1" sticky="0" pages="directory_home,index" filename="directory:block.featured-listings.tpl"><![CDATA[]]></block>

<block name="top_categories" order="1" title="Top Categories" position="left" type="smarty" showheader="1" sticky="1" collapsible="1" pages="publishing_home" filename="publishing:block.top-categories.tpl"><![CDATA[]]></block>
```
