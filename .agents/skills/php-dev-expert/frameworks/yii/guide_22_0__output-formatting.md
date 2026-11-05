# Displaying Data: Data Formatting | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-formatting

---

0

# Data Formatting [¶](#data-formatting)

To display data in a more readable format for users, you may format them using the `formatter` [application component](guide_22_0__structure-application-components.md).
By default the formatter is implemented by [yii\i18n\Formatter](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter) which provides a set of methods to format data as
date/time, numbers, currencies, and other commonly used formats. You can use the formatter like the following,

```
$formatter = \Yii::$app->formatter;

// output: January 1, 2014
echo $formatter->asDate('2014-01-01', 'long');
 
// output: 12.50%
echo $formatter->asPercent(0.125, 2);
 
// output: <a href="mailto:cebe@example.com">cebe@example.com</a>
echo $formatter->asEmail('cebe@example.com'); 

// output: Yes
echo $formatter->asBoolean(true); 
// it also handles display of null values:

// output: (not set)
echo $formatter->asDate(null);
```

As you can see, all these methods are named as `asXyz()`, where `Xyz` stands for a supported format. Alternatively,
you may format data using the generic method [format()](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#format()-detail), which allows you to control
the desired format programmatically and is commonly used by widgets like [yii\grid\GridView](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview) and [yii\widgets\DetailView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-detailview).
For example,

```
// output: January 1, 2014
echo Yii::$app->formatter->format('2014-01-01', 'date'); 

// you can also use an array to specify parameters for the format method:
// `2` is the value for the $decimals parameter of the asPercent()-method.
// output: 12.50%
echo Yii::$app->formatter->format(0.125, ['percent', 2]);
```

> **Note:** The formatter component is designed to format values to be displayed for the end user. If you want
> to convert user input into machine readable format, or just format a date in a machine readable format,
> the formatter is not the right tool for that.
> To convert user input for date and number values you may use [yii\validators\DateValidator](https://www.yiiframework.com/doc/api/22.0/yii-validators-datevalidator) and [yii\validators\NumberValidator](https://www.yiiframework.com/doc/api/22.0/yii-validators-numbervalidator)
> respectively. For simple conversion between machine readable date and time formats,
> the PHP [date()](https://www.php.net/manual/en/function.date.php)-function is enough.

## Configuring Formatter [¶](#configuring-formatter)

You may customize the formatting rules by configuring the `formatter` component in the [application configuration](guide_22_0__concept-configurations.md#application-configurations).
For example,

```
return [
    'components' => [
        'formatter' => [
            'dateFormat' => 'dd.MM.yyyy',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
       ],
    ],
];
```

Please refer to [yii\i18n\Formatter](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter) for the properties that may be configured.

## Formatting Date and Time Values [¶](#date-and-time)

The formatter supports the following output formats that are related with date and time:

- [date](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDate()-detail): the value is formatted as a date, e.g. `January 01, 2014`.
- [time](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asTime()-detail): the value is formatted as a time, e.g. `14:23`.
- [datetime](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDatetime()-detail): the value is formatted as date and time, e.g. `January 01, 2014 14:23`.
- [timestamp](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asTimestamp()-detail): the value is formatted as a [unix timestamp](https://en.wikipedia.org/wiki/Unix_time), e.g. `1412609982`.
- [relativeTime](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asRelativeTime()-detail): the value is formatted as the time interval between a date
  and now in human readable form e.g. `1 hour ago`.
- [duration](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDuration()-detail): the value is formatted as a duration in human readable format. e.g. `1 day, 2 minutes`.

The default date and time formats used for the [date](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDate()-detail), [time](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asTime()-detail),
and [datetime](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDatetime()-detail) methods can be customized globally by configuring  
[dateFormat](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$dateFormat-detail), [timeFormat](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$timeFormat-detail), and
[datetimeFormat](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$datetimeFormat-detail).

You can specify date and time formats using the [ICU syntax](https://unicode-org.github.io/icu/userguide/format_parse/datetime/).
You can also use the [PHP date() syntax](https://www.php.net/manual/en/function.date.php) with a prefix `php:` to differentiate
it from ICU syntax. For example,

```
// ICU format
echo Yii::$app->formatter->asDate('now', 'yyyy-MM-dd'); // 2014-10-06

// PHP date()-format
echo Yii::$app->formatter->asDate('now', 'php:Y-m-d'); // 2014-10-06
```

> **Info:** Some letters of the PHP format syntax are not supported by ICU and thus the PHP intl extension and can not be used
> in Yii formatter. Most of these (`w`, `t`, `L`, `B`, `u`, `I`, `Z`) are not really useful for formatting dates but rather
> used when doing date math. `S` and `U` however may be useful. Their behavior can be achieved by doing the following:
>
> - for `S`, which is the English ordinal suffix for the day of the month (e.g. st, nd, rd or th.), the following replacement can be used:
>
>   ```
>   $f = Yii::$app->formatter;
>   $d = $f->asOrdinal($f->asDate('2017-05-15', 'php:j'));
>   echo "On the $d day of the month.";  // prints "On the 15th day of the month."
>   ```
> - for `U`, the Unix Epoch, you can use the [timestamp](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asTimestamp()-detail) format.

When working with applications that need to support multiple languages, you often need to specify different date
and time formats for different locales. To simplify this task, you may use format shortcuts (e.g. `long`, `short`), instead.
The formatter will turn a format shortcut into an appropriate format according to the currently active [locale](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$locale-detail).
The following format shortcuts are supported (the examples assume `en_GB` is the active locale):

- `short`: will output `06/10/2014` for date and `15:58` for time;
- `medium`: will output `6 Oct 2014` and `15:58:42`;
- `long`: will output `6 October 2014` and `15:58:42 GMT`;
- `full`: will output `Monday, 6 October 2014` and `15:58:42 GMT`.

Since version 2.0.7 it is also possible to format dates in different calendar systems.
Please refer to the API documentation of the formatters [$calendar](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$calendar-detail)-property on how to set a different calendar.

### Time Zones [¶](#time-zones)

When formatting date and time values, Yii will convert them to the target [time zone](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$timeZone-detail).
The value being formatted is assumed to be in UTC, unless a time zone is explicitly given or you have configured
[yii\i18n\Formatter::$defaultTimeZone](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$defaultTimeZone-detail).

In the following examples, we assume the target [time zone](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$timeZone-detail) is set as `Europe/Berlin`.

```
// formatting a UNIX timestamp as a time
echo Yii::$app->formatter->asTime(1412599260); // 14:41:00

// formatting a datetime string (in UTC) as a time 
echo Yii::$app->formatter->asTime('2014-10-06 12:41:00'); // 14:41:00

// formatting a datetime string (in CEST) as a time
echo Yii::$app->formatter->asTime('2014-10-06 14:41:00 CEST'); // 14:41:00
```

If the [time zone](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$timeZone-detail) is not set explicitly on the formatter component, the
[time zone configured in the application](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$timeZone-detail) is used, which is the same time zone
as set in the PHP configuration.

> **Note:** As time zones are subject to rules made by the governments around the world and may change frequently, it is
> likely that you do not have the latest information in the time zone database installed on your system.
> You may refer to the [ICU manual](https://unicode-org.github.io/icu/userguide/datetime/timezone/#updating-the-time-zone-data)
> for details on updating the time zone database. Please also read
> [Setting up your PHP environment for internationalization](guide_22_0__tutorial-i18n.md#setup-environment).

## Formatting Numbers [¶](#numbers)

The formatter supports the following output formats that are related with numbers:

- [integer](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asInteger()-detail): the value is formatted as an integer e.g. `42`.
- [decimal](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDecimal()-detail): the value is formatted as a decimal number considering decimal and thousand
  separators e.g. `2,542.123` or `2.542,123`.
- [percent](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asPercent()-detail): the value is formatted as a percent number e.g. `42%`.
- [scientific](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asScientific()-detail): the value is formatted as a number in scientific format e.g. `4.2E4`.
- [currency](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asCurrency()-detail): the value is formatted as a currency value e.g. `£420.00`.
  Note that for this function to work properly, the locale needs to include a country part e.g. `en_GB` or `en_US` because language only
  would be ambiguous in this case.
- [size](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asSize()-detail): the value that is a number of bytes is formatted as a human readable size e.g. `410 kibibytes`.
- [shortSize](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asShortSize()-detail): is the short version of [size](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asSize()-detail), e.g. `410 KiB`.

The format for number formatting can be adjusted using the [decimalSeparator](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$decimalSeparator-detail) and
[thousandSeparator](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$thousandSeparator-detail), both of which take default values according to the
active [locale](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$locale-detail).

For more advanced configuration, [yii\i18n\Formatter::$numberFormatterOptions](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$numberFormatterOptions-detail) and [yii\i18n\Formatter::$numberFormatterTextOptions](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$numberFormatterTextOptions-detail)
can be used to configure the [NumberFormatter class](https://www.php.net/manual/en/class.numberformatter.php) used internally
to implement the formatter. For example, to adjust the maximum and minimum value of fraction digits, you can configure
the [yii\i18n\Formatter::$numberFormatterOptions](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$numberFormatterOptions-detail) property like the following:

```
'numberFormatterOptions' => [
    NumberFormatter::MIN_FRACTION_DIGITS => 0,
    NumberFormatter::MAX_FRACTION_DIGITS => 2,
]
```

## Other Formats [¶](#other)

Besides date/time and number formats, Yii also supports other commonly used formats, including

- [raw](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asRaw()-detail): the value is outputted as is, this is a pseudo-formatter that has no effect except that
  `null` values will be formatted using nullDisplay.
- [text](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asText()-detail): the value is HTML-encoded.
  This is the default format used by the [GridView DataColumn](guide_22_0__output-data-widgets.md#data-column).
- [ntext](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asNtext()-detail): the value is formatted as an HTML-encoded plain text with newlines converted
  into line breaks.
- [paragraphs](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asParagraphs()-detail): the value is formatted as HTML-encoded text paragraphs wrapped
  into `<p>` tags.
- [html](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asHtml()-detail): the value is purified using HtmlPurifier to avoid XSS attacks. You can
  pass additional options such as `['html', ['Attr.AllowedFrameTargets' => ['_blank']]]`.
- [email](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asEmail()-detail): the value is formatted as a `mailto`-link.
- [image](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asImage()-detail): the value is formatted as an image tag.
- [url](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asUrl()-detail): the value is formatted as a hyperlink.
- [boolean](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asBoolean()-detail): the value is formatted as a boolean. By default `true` is rendered
  as `Yes` and `false` as `No`, translated to the current application language. You can adjust this by configuring
  the [yii\i18n\Formatter::$booleanFormat](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$booleanFormat-detail) property.

## Null Values [¶](#null-values)

Null values are specially formatted. Instead of displaying an empty string, the formatter will convert it into a
preset string which defaults to `(not set)` translated into the current application language. You can configure the
[nullDisplay](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$nullDisplay-detail) property to customize this string.

## Localizing Data Format [¶](#localizing-data-format)

As aforementioned, the formatter may use the currently active [locale](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$locale-detail) to determine how
to format a value that is suitable in the target country/region. For example, the same date value may be formatted
differently for different locales:

```
Yii::$app->formatter->locale = 'en-US';
echo Yii::$app->formatter->asDate('2014-01-01'); // output: January 1, 2014

Yii::$app->formatter->locale = 'de-DE';
echo Yii::$app->formatter->asDate('2014-01-01'); // output: 1. Januar 2014

Yii::$app->formatter->locale = 'ru-RU';
echo Yii::$app->formatter->asDate('2014-01-01'); // output: 1 января 2014 г.
```

By default, the currently active [locale](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$locale-detail) is determined by the value of
[yii\base\Application::$language](https://www.yiiframework.com/doc/api/22.0/yii-base-application#$language-detail). You may override it by setting the [yii\i18n\Formatter::$locale](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#$locale-detail) property explicitly.

> **Note:** The Yii formatter relies on the [PHP intl extension](https://www.php.net/manual/en/book.intl.php) to support
> localized data formatting. Because different versions of the ICU library compiled with PHP may cause different
> formatting results, it is recommended that you use the same ICU version for all your environments. For more details,
> please refer to [Setting up your PHP environment for internationalization](guide_22_0__tutorial-i18n.md#setup-environment).
>
> If the intl extension is not installed, the data will not be localized.
>
> Note that for date values that are before year 1901 or after 2038, they will not be localized on 32-bit systems, even
> if the intl extension is installed. This is because in this case ICU is using 32-bit UNIX timestamps to date values.

[Getting Data from Users: Extending ActiveForm on the Client Side](guide_22_0__input-form-javascript.md)

[Go to Top](#top)

[Pagination](guide_22_0__output-pagination.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-formatting.md) !
