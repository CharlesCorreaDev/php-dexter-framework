# Customize date and time format – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/customize-date-and-time-format/

---

# Customize date and time format

## In this article

Table of Contents

- [Customizing the Time and Date Format](#customizing-the-time-and-date-format)
- [Format String Examples](#format-string-examples)
- [Overriding General Settings Formatting](#overriding-general-settings-formatting)
- [Localization](#localization)
- [Escaping](#escaping)

[Back to top](#wp--skip-link--target)

## [Customizing the Time and Date Format](#customizing-the-time-and-date-format)

Certain WordPress tag functions are used to display or return date and time information; [the\_date()](https://developer.wordpress.org/reference/functions/the_date/) and [the\_time()](https://developer.wordpress.org/reference/functions/the_time/) are examples of this.

By default, these functions will display or return date and time in format as it is set in [Administration](https://wordpress.org/support/article/administration-screens/) > [Settings](https://wordpress.org/support/article/administration-screens/#general) > [General](https://wordpress.org/support/article/settings-general-screen/). This is the place where customizing format for Date and Time will take effect throughout the whole WordPress installation.

![Dashoboad > Settings > General](https://wordpress.org/documentation/files/2018/11/time-and-date-settings.png)

Formatting Date and Time

Notice the string of characters next to each Date and Time formatting in screenshot. This string is called a **format string**. Each letter represents specific part of Date or Time.

For example, the format string:

```
l, F j, Y
```

creates a date that look like this (note that commas are read literally):

```
Friday, September 24, 2004
```

Here is what each format character in the string above represents:

- `l` = Full name for day of the week (lower-case L).
- `F` = Full name for the month.
- `j` = The day of the month.
- `Y` = The year in 4 digits. (lower-case y gives the year’s last 2 digits)

Format characters are standardized and globally used in [PHP](https://codex.wordpress.org/Glossary#PHP) programming language. As WordPress is written in PHP programming language you can use the table of Date and Time format characters [directly from the PHP website](http://php.net/date).

Here is a table of some of the more useful items found there:

| Day of Month | | |
| --- | --- | --- |
| `d` | Numeric, with leading zeros | 01–31 |
| `j` | Numeric, without leading zeros | 1–31 |
| `S` | The English suffix for the day of the month | st, nd or th in the 1st, 2nd or 15th. |
| Weekday | | |
| `l` | Full name  (lowercase ‘L’) | Sunday – Saturday |
| `D` | Three letter name | Mon – Sun |
| Month | | |
| `m` | Numeric, with leading zeros | 01–12 |
| `n` | Numeric, without leading zeros | 1–12 |
| `F` | Textual full | January – December |
| `M` | Textual three letters | Jan – Dec |
| Year | | |
| `Y` | Numeric, 4 digits | Eg., 1999, 2003 |
| `y` | Numeric, 2 digits | Eg., 99, 03 |
| Time | | |
| `a` | Lowercase | am, pm |
| `A` | Uppercase | AM, PM |
| `g` | Hour, 12-hour, without leading zeros | 1–12 |
| `h` | Hour, 12-hour, with leading zeros | 01–12 |
| `G` | Hour, 24-hour, without leading zeros | 0-23 |
| `H` | Hour, 24-hour, with leading zeros | 00-23 |
| `i` | Minutes, with leading zeros | 00-59 |
| `s` | Seconds, with leading zeros | 00-59 |
| `T` | Timezone abbreviation | Eg., EST, MDT … |
| Full Date/Time | | |
| `c` | ISO 8601 | 2004-02-12T15:19:21+00:00 |
| `r` | [RFC 2822](http://tools.ietf.org/html/rfc2822 "RFC 2822") | Thu, 21 Dec 2000 16:01:07 +0200 |
| `U` | Unix timestamp (seconds since Unix Epoch) | 1455880176 |

## [Format String Examples](#format-string-examples)

Here are some examples of date format with the result output.

- `F j, Y g:i a` – November 6, 2010 12:50 am
- `F j, Y` – November 6, 2010
- `F, Y` – November, 2010
- `g:i a` – 12:50 am
- `g:i:s a` – 12:50:48 am
- `l, F jS, Y` – Saturday, November 6th, 2010
- `M j, Y @ G:i` – Nov 6, 2010 @ 0:50
- `Y/m/d \a\t g:i A` – 2010/11/06 at 12:50 AM
- `Y/m/d \a\t g:ia` – 2010/11/06 at 12:50am
- `Y/m/d g:i:s A` – 2010/11/06 12:50:48 AM
- `Y/m/d` – 2010/11/06

## [Overriding General Settings Formatting](#overriding-general-settings-formatting)

Functions for Time and Date accept **format string** as a parameter in order to override default Date and Time formatting for certain places in theme or plugin files. Just the same as in [General Settings](https://wordpress.org/support/article/settings-general-screen/), this format string is a template of characters where each character represents specific part of Date or Time.

Inside the template file, setting the Date and Time format string as a parameter for [`the_time()`](https://developer.wordpress.org/reference/functions/the_time/) template tag, would look something like this:

```
Posted on <?php the_time( 'l, F jS, Y' ); ?>.
```

Which will render on the frontend of your site as following:

```
Posted on Friday, September 24th, 2004.
```

## [Localization](#localization)

To localize Date and Time, use the [wp\_date()](https://developer.wordpress.org/reference/functions/wp_date/) function. The `wp_date()` function basically behaves like the PHP [date()](http://php.net/manual/en/function.date.php) function, except that it also translates things like month names and weekdays and similar into the current locale for the site. You can replace a call to `date()` with a call to `wp_date()`, using the same arguments.

```
$date = wp_date( 'F j, Y' );
$time = wp_date( 'g:i a' );
```

Alternatively, you can wrap your predefined format in [\_\_()](https://developer.wordpress.org/reference/functions/__/) or [\_e()](https://developer.wordpress.org/reference/functions/_e/) in order to allow translators to adjust the Date and Time to the proper local format. If you do so, then you should also include a translator comment, to let the translators know what the date format is referring to and where it is used, so they can convert it accurately.

```
__( 'Y/m/d g:i:s a', 'textdomain' );
```

## [Escaping](#escaping)

Some letters do not have an associated format in the PHP date function. For example `x` passed in the format string will currently return a literal `x`. However, this can change at some point in the future and `x` may have a format associated with it.

This is why you should always escape literal character in a date formatted string with `\`. Note that, in following example, every letter of word `of` is escaped.

```
wp_date( __( 'l jS \o\f F Y', 'textdomain' ) );
```

This example will render as following on the frontend of your site:

```
Saturday 25th of February 2017
```

## Was this article helpful? How could it be improved? [Cancel reply](article__customize-date-and-time-format.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fcustomize-date-and-time-format%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

November 6, 2018

Last updated

July 20, 2025
