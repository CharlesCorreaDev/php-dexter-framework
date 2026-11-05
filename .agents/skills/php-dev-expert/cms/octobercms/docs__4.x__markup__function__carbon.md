# carbon() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/carbon.html

---

# carbon()

Twig Function

- [format](docs__4.x__markup__function__carbon.md#format)
- [isoFormat](docs__4.x__markup__function__carbon.md#isoformat)
- [diffForHumans](docs__4.x__markup__function__carbon.md#diffforhumans)
- [Cache Busting URLs](docs__4.x__markup__function__carbon.md#cache-busting-urls)
- [Date Format Cheat Sheet](docs__4.x__markup__function__carbon.md#date-format-cheat-sheet)

The `carbon()` function can be used to handle dates and times using Twig, prepared with a [Carbon object  (opens new window)](https://carbon.nesbot.com/docs/) and all its available functions.

The supplied value will be automatically converted to the current timezone depending on the `cms.timezone` configuration setting, which can be set using a [site definition](docs__4.x__cms__multisite__multisite.md).

To output the current date time value:

```
___TWIG0___
```

To specify a custom value:

```
{{ carbon('2024-01-01 02:13:23') }}
```

## [#](#format) format

The `format` method can be used to apply various formats.

```
Meeting starts at ___TWIG0___ in Johannesburg.
```

## [#](#isoformat) isoFormat

Formats a date or time according to locale settings using ISO standards. This replaces the deprecated `formatLocalized` method.

```
___TWIG0___
```

For example, to display the month and year in French:

```
___TWIG0___  ___TWIG1___
```

## [#](#diffforhumans) diffForHumans

The `diffForHumans` method will render the difference between a date and now in human readible text.

```
___TWIG0___
```

## [#](#cache-busting-urls) Cache Busting URLs

You can use the format to produce cache busting URLs.

```
// Outputs: 10.26.22.22.53.31
carbon('now').format('m.d.y.H.i.s')
```

Then build the URL like the following.

```
<img src="___TWIG0___?___TWIG1___" alt="" />
```

## [#](#date-format-cheat-sheet) Date Format Cheat Sheet

The following values are available when formatting dates and times. You can use these codes with the `format` method.

| Day Format | Example |
| --- | --- |
| `d` | 01 through 31 |
| `D` | Mon through Sun |
| `j` | 1 through 31 |
| `l` | Sunday through Saturday |
| `N` | 1 (Monday) to 7 (Sunday) |
| `S` | st, nd, rd, th |
| `w` | 0 (Sunday) through 6 (Saturday) |
| `z` | 0 through 365 |

| Week Format | Example |
| --- | --- |
| `W` | 42 (42nd week in year) |

| Month Format | Example |
| --- | --- |
| `F` | January through December |
| `m` | 01 through 12 |
| `M` | Jan through Dec |
| `n` | 1 through 12 |
| `t` | 28 through 31 |

| Year Format | Example |
| --- | --- |
| `Y` | 1985, 1991, 2012, 2014, ... |
| `y` | 85, 91, 12, 14, ... |
| `o` | Same as `Y`, except based on week ending |
| `L` | 1 (leap year), 0 otherwise |

| Time Format | Example |
| --- | --- |
| `a` | am or pm |
| `A` | AM or PM |
| `B` | 000 through 999 |
| `g` | 1 through 12 |
| `G` | 0 through 23 |
| `h` | 01 through 12 |
| `H` | 01 through 23 |
| `i` | 00 through 59 |
| `u` | 123456 (microseconds) |

| Timezone Format | Example |
| --- | --- |
| `e` | UTC, GMT, Atlantic/Azores |
| `I` | 1 (daylight), 0 otherwise |
| `O` | +0200 |
| `P` | +02:00 |
| `T` | EST, MDT, ... |
| `Z` | -43200 through 50400 (timezone offset) |

| Date & Time Format | Example |
| --- | --- |
| `c` | 2004-02-12T15:19:21+00:00 |
| `r` | Thu, 21 Dec 2000 16:01:07 +0200 |
| `U` | Seconds since Jan 1 1970 00:00:00 GMT |

← [trans()](docs__4.x__markup__function__trans.md)[pager()](docs__4.x__markup__function__pager.md) →
