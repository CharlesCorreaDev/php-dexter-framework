# Tidy - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-tidy.html

---

# Tidy

Filed under Development

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

You've probably heard of HTML Tidy, Dave Raggett's little piece
of software that cleans up poorly written HTML. Let me say it straight
out:

This ain't HTML Tidy!

Rather, Tidy stands for a cool set of Tidy-inspired features in HTML Purifier
that allows users to submit deprecated elements and attributes and get
valid strict markup back. For example:

```
<center>Centered</center>
```

...becomes:

```
<div style="text-align:center;">Centered</div>
```

...when this particular fix is run on the HTML. This tutorial will give
you the lowdown of what exactly HTML Purifier will do when Tidy
is on, and how to fine-tune this behavior. Once again, **you do
not need Tidy installed on your PHP to use these features!**

## What does it do?

Tidy will do several things to your HTML:

- Convert deprecated elements and attributes to standards-compliant
  alternatives
- Enforce XHTML compatibility guidelines and other best practices
- Preserve data that would normally be removed as per W3C

## What are levels?

Levels describe how aggressive the Tidy module should be when
cleaning up HTML. There are four levels to pick: none, light, medium
and heavy. Each of these levels has a well-defined set of behavior
associated with it, although it may change depending on your doctype.

light
:   This is the **lenient** level. If a tag or attribute
    is about to be removed because it isn't supported by the
    doctype, Tidy will step in and change into an alternative that
    is supported.

medium
:   This is the **correctional** level. At this level,
    all the functions of light are performed, as well as some extra,
    non-essential best practices enforcement. Changes made on this
    level are very benign and are unlikely to cause problems.

heavy
:   This is the **aggressive** level. If a tag or
    attribute is deprecated, it will be converted into a non-deprecated
    version, no ifs ands or buts.

By default, Tidy operates on the **medium** level. You can
change the level of cleaning by setting the %HTML.TidyLevel configuration
directive:

```
$config->set('HTML.TidyLevel', 'heavy'); // burn baby burn!
```

## Is the light level really light?

It depends on what doctype you're using. If your documents are HTML
4.01 *Transitional*, HTML Purifier will be lazy
and won't clean up your `center`
or `font` tags. But if you're using HTML 4.01 *Strict*,
HTML Purifier has no choice: it has to convert them, or they will
be nuked out of existence. So while light on Transitional will result
in little to no changes, light on Strict will still result in quite
a lot of fixes.

This is different behavior from 1.6 or before, where deprecated
tags in transitional documents would
always be cleaned up regardless. This is also better behavior.

## My pages look different!

HTML Purifier is tasked with converting deprecated tags and
attributes to standards-compliant alternatives, which usually
need copious amounts of CSS. It's also not foolproof: sometimes
things do get lost in the translation. This is why when HTML Purifier
can get away with not doing cleaning, it won't; this is why
the default value is **medium** and not heavy.

Fortunately, only a few attributes have problems with the switch
over. They are described below:

| Element@Attr | Changes |
| --- | --- |
| caption@align | Firefox supports stuffing the caption on the left and right side of the table, a feature that Internet Explorer, understandably, does not have. When align equals right or left, the text will simply be aligned on the left or right side. |
| img@align | The implementation for align bottom is good, but not perfect. There are a few pixel differences. |
| br@clear | Clear both gets a little wonky in Internet Explorer. Haven't really been able to figure out why. |
| hr@noshade | All browsers implement this slightly differently: we've chosen to make noshade horizontal rules gray. |

There are a few more minor, although irritating, bugs.
Some older browsers support deprecated attributes,
but not CSS. Transformed elements and attributes will look unstyled
to said browsers. Also, CSS precedence is slightly different for
inline styles versus presentational markup. In increasing precedence:

1. Presentational attributes
2. External style sheets
3. Inline styling

This means that styling that may have been masked by external CSS
declarations will start showing up (a good thing, perhaps). Finally,
if you've turned off the style attribute, almost all of
these transformations will not work. Sorry mates.

You can review the rendering before and after of these transformations
by consulting the [attrTransform.php
smoketest](http://htmlpurifier.org/live/smoketests/attrTransform.php).

## I like the general idea, but the specifics bug me!

So you want HTML Purifier to clean up your HTML, but you're not
so happy about the br@clear implementation. That's perfectly fine!
HTML Purifier will make accomodations:

```
$config->set('HTML.Doctype', 'XHTML 1.0 Transitional');
$config->set('HTML.TidyLevel', 'heavy'); // all changes, minus...
$config->set('HTML.TidyRemove', 'br@clear');
```

That third line does the magic, removing the br@clear fix
from the module, ensuring that `<br clear="both" />`
will pass through unharmed. The reverse is possible too:

```
$config->set('HTML.Doctype', 'XHTML 1.0 Transitional');
$config->set('HTML.TidyLevel', 'none'); // no changes, plus...
$config->set('HTML.TidyAdd', 'p@align');
```

In this case, all transformations are shut off, except for the p@align
one, which you found handy.

To find out what the names of fixes you want to turn on or off are,
you'll have to consult the source code, specifically the files in
`HTMLPurifier/HTMLModule/Tidy/`. There is, however, a
general syntax:

| Name | Example | Interpretation |
| --- | --- | --- |
| element | font | Tag transform for *element* |
| element@attr | br@clear | Attribute transform for *attr* on *element* |
| @attr | @lang | Global attribute transform for *attr* |
| e#content\_model\_type | blockquote#content\_model\_type | Change of child processing implementation for *e* |

## So... what's the lowdown?

The lowdown is, quite frankly, HTML Purifier's default settings are
probably good enough. The next step is to bump the level up to heavy,
and if that still doesn't satisfy your appetite, do some fine-tuning.
Other than that, don't worry about it: this all works silently and
effectively in the background.
