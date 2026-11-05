# Implementation Progress - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/dev-progress.html

---

# Implementation Progress

Filed under Development

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

**Warning:** This table is kept for historical purposes and
is not being actively updated.

## Key

|  |
| --- |
| Implemented |
| Partially implemented |
| Not priority to implement |
| Dangerous attribute/property |
| Present in CSS1 |
| Feature, requires extra work |

## CSS

| Name | Notes |
| --- | --- |
| Standard | |
| --- | --- |
| background-color | COMPOSITE(<color>, transparent) |
| background | SHORTHAND, currently alias for background-color |
| border | SHORTHAND, MULTIPLE |
| border-color | MULTIPLE |
| border-style | MULTIPLE |
| border-width | MULTIPLE |
| border-\* | SHORTHAND |
| border-\*-color | COMPOSITE(<color>, transparent) |
| border-\*-style | ENUM(none, hidden, dotted, dashed, solid, double, groove, ridge, inset, outset) |
| border-\*-width | COMPOSITE(<length>, thin, medium, thick) |
| clear | ENUM(none, left, right, both) |
| color | <color> |
| float | ENUM(left, right, none), May require layout precautions with clear |
| font | SHORTHAND |
| font-family | CSS validator may complain if fallback font family not specified |
| font-size | COMPOSITE(<absolute-size>, <relative-size>, <length>, <percentage>) |
| font-style | ENUM(normal, italic, oblique) |
| font-variant | ENUM(normal, small-caps) |
| font-weight | ENUM(normal, bold, bolder, lighter, 100, 200, 300, 400, 500, 600, 700, 800, 900), maybe special code for in-between integers |
| letter-spacing | COMPOSITE(<length>, normal) |
| line-height | COMPOSITE(<number>, <length>, <percentage>, normal) |
| list-style-position | ENUM(inside, outside), Strange behavior in browsers |
| list-style-type | ENUM(...), Well-supported values are: disc, circle, square, decimal, lower-roman, upper-roman, lower-alpha and upper-alpha. See also CSS 3. Mostly IE lack of support. |
| list-style | SHORTHAND |
| margin | MULTIPLE |
| margin-\* | COMPOSITE(<length>, <percentage>, auto) |
| padding | MULTIPLE |
| padding-\* | COMPOSITE(<length>(positive), <percentage>(positive)) |
| text-align | ENUM(left, right, center, justify) |
| text-decoration | No blink (argh my eyes), not enum, can be combined (composite sorta): underline, overline, line-through |
| text-indent | COMPOSITE(<length>, <percentage>) |
| text-transform | ENUM(capitalize, uppercase, lowercase, none) |
| width | COMPOSITE(<length>, <percentage>, auto), Interesting |
| word-spacing | COMPOSITE(<length>, auto), IE 5 no support |
| Table | |
| --- | --- |
| border-collapse | ENUM(collapse, seperate) |
| border-space | MULTIPLE |
| caption-side | ENUM(top, bottom) |
| empty-cells | ENUM(show, hide), No IE support makes this useless, possible fix with &nbsp;? Unknown release milestone. |
| table-layout | ENUM(auto, fixed) |
| vertical-align | COMPOSITE(ENUM(baseline, sub, super, top, text-top, middle, bottom, text-bottom), <percentage>, <length>) Also applies to others with explicit height |
| Absolute positioning, unknown release milestone | |
| --- | --- |
| bottom | Dangerous, must be non-negative to even be considered, but it's still possible to arbitrarily position by running over. |
| left |
| right |
| top |
| clip | - |
| position | ENUM(static, relative, absolute, fixed) relative not absolute? |
| z-index | Dangerous |
| Unknown | |
| --- | --- |
| background-image | Dangerous |
| background-attachment | ENUM(scroll, fixed), Depends on background-image |
| background-position | Depends on background-image |
| cursor | Dangerous but fluffy |
| display | ENUM(...), Dangerous but interesting; will not implement list-item, run-in (Opera only) or table (no IE); inline-block has incomplete IE6 support and requires -moz-inline-box for Mozilla. Unknown target milestone. |
| height | Interesting, why use it? Unknown target milestone. |
| list-style-image | Dangerous? |
| max-height | No IE 5/6 |
| min-height |
| max-width |
| min-width |
| orphans | No IE support |
| widows | No IE support |
| overflow | ENUM, IE 5/6 almost (remove visible if set). Unknown target milestone. |
| page-break-after | ENUM(auto, always, avoid, left, right), IE 5.5/6 and Opera. Unknown target milestone. |
| page-break-before | ENUM(auto, always, avoid, left, right), Mostly supported. Unknown target milestone. |
| page-break-inside | ENUM(avoid, auto), Opera only. Unknown target milestone. |
| quotes | May be dropped from CSS2, fairly useless for inline context |
| visibility | ENUM(visible, hidden, collapse), Dangerous |
| white-space | ENUM(normal, pre, nowrap, pre-wrap, pre-line), Spotty implementation: pre (no IE 5/6), *nowrap* (no IE 5, supported), pre-wrap (only Opera), pre-line (no support). Fixable? Unknown target milestone. |
| Aural | |
| --- | --- |
| azimuth | - |
| cue | - |
| cue-after | - |
| cue-before | - |
| elevation | - |
| pause-after | - |
| pause-before | - |
| pause | - |
| pitch-range | - |
| pitch | - |
| play-during | - |
| richness | - |
| speak-header | Table related |
| speak-numeral | - |
| speak-punctuation | - |
| speak | - |
| speech-rate | - |
| stress | - |
| voice-family | - |
| volume | - |
| Will not implement | |
| --- | --- |
| content | Not applicable for inline styles |
| counter-increment | Needs content, Opera only |
| counter-reset | Needs content, Opera only |
| direction | No support |
| outline-color | IE Mac and Opera on outside, Mozilla on inside and needs -moz-outline, no IE support. |
| outline-style |
| outline-width |
| outline |
| unicode-bidi | No support |

## Interesting Attributes

| Attribute | Tags | Notes |
| --- | --- | --- |
| CSS | | |
| --- | --- | --- |
| style | All | Parser is reasonably functional. Status here doesn't count individual properties. |
| Questionable | | |
| --- | --- | --- |
| accesskey | A | May interfere with main interface |
| tabindex | A | May interfere with main interface |
| target | A | Config enabled, only useful for frame layouts, disallowed in strict |
| Miscellaneous | | |
| --- | --- | --- |
| datetime | DEL, INS | No visible effect, ISO format |
| rel | A | Largely user-defined: nofollow, tag (see microformats) |
| rev | A | Largely user-defined: vote-\* |
| axis | TD, TH | W3C only: No browser implementation |
| char | COL, COLGROUP, TBODY, TD, TFOOT, TH, THEAD, TR | W3C only: No browser implementation |
| headers | TD, TH | W3C only: No browser implementation |
| scope | TD, TH | W3C only: No browser implementation |
| URI | | |
| --- | --- | --- |
| cite | BLOCKQUOTE, Q | For attribution |
| DEL, INS | Link to explanation why it changed |
| href | A | - |
| longdesc | IMG | - |
| src | IMG | Required |
| Transform | | |
| --- | --- | --- |
| align | CAPTION | 'caption-side' for top/bottom, 'text-align' for left/right |
| IMG | See specimens/html-align-to-css.html |
| TABLE |
| HR |
| H1, H2, H3, H4, H5, H6, P | Equivalent style 'text-align' |
| alt | IMG | Required, insert image filename if src is present or default invalid image text |
| bgcolor | TABLE | Superset style 'background-color' |
| TR | Superset style 'background-color' |
| TD, TH | Superset style 'background-color' |
| border | IMG | Equivalent style `border:[number]px solid` |
| clear | BR | Near-equiv style 'clear', transform 'all' into 'both' |
| compact | DL, OL, UL | Boolean, needs custom CSS class; rarely used anyway |
| dir | BDO | Required, insert ltr (or configuration value) if none |
| height | TD, TH | Near-equiv style 'height', needs px suffix if original was in pixels |
| hspace | IMG | Near-equiv styles 'margin-top' and 'margin-bottom', needs px suffix |
| lang | \* | Copy value to xml:lang |
| name | IMG | Turn into ID |
| A | Turn into ID |
| noshade | HR | Boolean, style 'border-style:solid;' |
| nowrap | TD, TH | Boolean, style 'white-space:nowrap;' (not compat with IE5) |
| size | HR | Near-equiv 'height', needs px suffix if original was pixels |
| src | IMG | Required, insert blank or default img if not set |
| start | OL | Poorly supported 'counter-reset', allowed in loose, dropped in strict |
| type | LI | Equivalent style 'list-style-type', different allowed values though. (needs testing) |
| OL |
| UL |
| value | LI | Poorly supported 'counter-reset', allowed in loose, dropped in strict |
| vspace | IMG | Near-equiv styles 'margin-left' and 'margin-right', needs px suffix, see hspace |
| width | HR | Near-equiv style 'width', needs px suffix if original was pixels |
| TD, TH |
