# A classe IntlGregorianCalendar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlgregoriancalendar.php

---

# A classe IntlGregorianCalendar

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

## Introdução

## Resumo da classe

class ****IntlGregorianCalendar****
extends
[IntlCalendar](class.intlcalendar.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_ERA](class.intlcalendar.md#intlcalendar.constants.field-era);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-year);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-month);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_WEEK\_OF\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-week-of-year);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_WEEK\_OF\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-week-of-month);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DATE](class.intlcalendar.md#intlcalendar.constants.field-date);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DAY\_OF\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-day-of-year);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DAY\_OF\_WEEK](class.intlcalendar.md#intlcalendar.constants.field-day-of-week);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DAY\_OF\_WEEK\_IN\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-day-of-week-in-month);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_AM\_PM](class.intlcalendar.md#intlcalendar.constants.field-am-pm);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_HOUR](class.intlcalendar.md#intlcalendar.constants.field-hour);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_HOUR\_OF\_DAY](class.intlcalendar.md#intlcalendar.constants.field-hour-of-day);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_MINUTE](class.intlcalendar.md#intlcalendar.constants.field-minute);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_SECOND](class.intlcalendar.md#intlcalendar.constants.field-second);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_MILLISECOND](class.intlcalendar.md#intlcalendar.constants.field-millisecond);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_ZONE\_OFFSET](class.intlcalendar.md#intlcalendar.constants.field-zone-offset);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DST\_OFFSET](class.intlcalendar.md#intlcalendar.constants.field-dst-offset);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_YEAR\_WOY](class.intlcalendar.md#intlcalendar.constants.field-year-woy);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DOW\_LOCAL](class.intlcalendar.md#intlcalendar.constants.field-dow-local);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_EXTENDED\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-extended-year);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_JULIAN\_DAY](class.intlcalendar.md#intlcalendar.constants.field-julian-day);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_MILLISECONDS\_IN\_DAY](class.intlcalendar.md#intlcalendar.constants.field-milliseconds-in-day);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_IS\_LEAP\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-is-leap-month);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_FIELD\_COUNT](class.intlcalendar.md#intlcalendar.constants.field-field-count);

public
const
[int](language.types.integer.md)
[IntlCalendar::FIELD\_DAY\_OF\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-day-of-month);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_SUNDAY](class.intlcalendar.md#intlcalendar.constants.dow-sunday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_MONDAY](class.intlcalendar.md#intlcalendar.constants.dow-monday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_TUESDAY](class.intlcalendar.md#intlcalendar.constants.dow-tuesday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_WEDNESDAY](class.intlcalendar.md#intlcalendar.constants.dow-wednesday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_THURSDAY](class.intlcalendar.md#intlcalendar.constants.dow-thursday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_FRIDAY](class.intlcalendar.md#intlcalendar.constants.dow-friday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_SATURDAY](class.intlcalendar.md#intlcalendar.constants.dow-saturday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_TYPE\_WEEKDAY](class.intlcalendar.md#intlcalendar.constants.dow-type-weekday);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_TYPE\_WEEKEND](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_TYPE\_WEEKEND\_OFFSET](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend-offset);

public
const
[int](language.types.integer.md)
[IntlCalendar::DOW\_TYPE\_WEEKEND\_CEASE](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend-cease);

public
const
[int](language.types.integer.md)
[IntlCalendar::WALLTIME\_FIRST](class.intlcalendar.md#intlcalendar.constants.walltime-first);

public
const
[int](language.types.integer.md)
[IntlCalendar::WALLTIME\_LAST](class.intlcalendar.md#intlcalendar.constants.walltime-last);

public
const
[int](language.types.integer.md)
[IntlCalendar::WALLTIME\_NEXT\_VALID](class.intlcalendar.md#intlcalendar.constants.walltime-next-valid);

/\* Métodos \*/

public function [\_\_construct](intlgregoriancalendar.construct.md)([IntlTimeZone](class.intltimezone.md) `$tz` = ?, [string](language.types.string.md) `$locale` = ?)

public function [\_\_construct](intlgregoriancalendar.construct.md)([int](language.types.integer.md) `$timeZoneOrYear`, [int](language.types.integer.md) `$localeOrMonth`, [int](language.types.integer.md) `$dayOfMonth`)

public function [\_\_construct](intlgregoriancalendar.construct.md)(  
    [int](language.types.integer.md) `$timeZoneOrYear`,  
    [int](language.types.integer.md) `$localeOrMonth`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = ?  
)

public static function [createFromDate](intlgregoriancalendar.createfromdate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$dayOfMonth`): static

public static function [createFromDateTime](intlgregoriancalendar.createfromdatetime.md)(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**  
): static

public function [getGregorianChange](intlgregoriancalendar.getgregorianchange.md)(): [float](language.types.float.md)

public function [isLeapYear](intlgregoriancalendar.isleapyear.md)([int](language.types.integer.md) `$year`): [bool](language.types.boolean.md)

public function [setGregorianChange](intlgregoriancalendar.setgregorianchange.md)([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IntlCalendar::add](intlcalendar.add.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [IntlCalendar::after](intlcalendar.after.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [IntlCalendar::before](intlcalendar.before.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [IntlCalendar::clear](intlcalendar.clear.md)([?](language.types.null.md)[int](language.types.integer.md) `$field` = **`null`**): [true](language.types.singleton.md)

public static function [IntlCalendar::createInstance](intlcalendar.createinstance.md)([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

public function [IntlCalendar::equals](intlcalendar.equals.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [IntlCalendar::fieldDifference](intlcalendar.fielddifference.md)([float](language.types.float.md) `$timestamp`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [IntlCalendar::fromDateTime](intlcalendar.fromdatetime.md)([DateTime](class.datetime.md)|[string](language.types.string.md) `$datetime`, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

public function [IntlCalendar::get](intlcalendar.get.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getActualMaximum](intlcalendar.getactualmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getActualMinimum](intlcalendar.getactualminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [IntlCalendar::getAvailableLocales](intlcalendar.getavailablelocales.md)(): [array](language.types.array.md)

public function [IntlCalendar::getDayOfWeekType](intlcalendar.getdayofweektype.md)([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getErrorCode](intlcalendar.geterrorcode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getErrorMessage](intlcalendar.geterrormessage.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getFirstDayOfWeek](intlcalendar.getfirstdayofweek.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getGreatestMinimum](intlcalendar.getgreatestminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [IntlCalendar::getKeywordValuesForLocale](intlcalendar.getkeywordvaluesforlocale.md)([string](language.types.string.md) `$keyword`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$onlyCommon`): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getLeastMaximum](intlcalendar.getleastmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getLocale](intlcalendar.getlocale.md)([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getMaximum](intlcalendar.getmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getMinimalDaysInFirstWeek](intlcalendar.getminimaldaysinfirstweek.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getMinimum](intlcalendar.getminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [IntlCalendar::getNow](intlcalendar.getnow.md)(): [float](language.types.float.md)

public function [IntlCalendar::getRepeatedWallTimeOption](intlcalendar.getrepeatedwalltimeoption.md)(): [int](language.types.integer.md)

public function [IntlCalendar::getSkippedWallTimeOption](intlcalendar.getskippedwalltimeoption.md)(): [int](language.types.integer.md)

public function [IntlCalendar::getTime](intlcalendar.gettime.md)(): [float](language.types.float.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getTimeZone](intlcalendar.gettimezone.md)(): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

public function [IntlCalendar::getType](intlcalendar.gettype.md)(): [string](language.types.string.md)

public function [IntlCalendar::getWeekendTransition](intlcalendar.getweekendtransition.md)([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [IntlCalendar::inDaylightTime](intlcalendar.indaylighttime.md)(): [bool](language.types.boolean.md)

public function [IntlCalendar::isEquivalentTo](intlcalendar.isequivalentto.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [IntlCalendar::isLenient](intlcalendar.islenient.md)(): [bool](language.types.boolean.md)

public function [IntlCalendar::isSet](intlcalendar.isset.md)([int](language.types.integer.md) `$field`): [bool](language.types.boolean.md)

public function [IntlCalendar::isWeekend](intlcalendar.isweekend.md)([?](language.types.null.md)[float](language.types.float.md) `$timestamp` = **`null`**): [bool](language.types.boolean.md)

public function [IntlCalendar::roll](intlcalendar.roll.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

public function [IntlCalendar::set](intlcalendar.set.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [true](language.types.singleton.md)

public function [IntlCalendar::set](intlcalendar.set.md)(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth` = NULL,  
    [int](language.types.integer.md) `$hour` = NULL,  
    [int](language.types.integer.md) `$minute` = NULL,  
    [int](language.types.integer.md) `$second` = NULL  
): [true](language.types.singleton.md)

public function [IntlCalendar::setDate](intlcalendar.setdate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$dayOfMonth`): [void](language.types.void.md)

public function [IntlCalendar::setDateTime](intlcalendar.setdatetime.md)(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**  
): [void](language.types.void.md)

public function [IntlCalendar::setFirstDayOfWeek](intlcalendar.setfirstdayofweek.md)([int](language.types.integer.md) `$dayOfWeek`): [true](language.types.singleton.md)

public function [IntlCalendar::setLenient](intlcalendar.setlenient.md)([bool](language.types.boolean.md) `$lenient`): [true](language.types.singleton.md)

public function [IntlCalendar::setMinimalDaysInFirstWeek](intlcalendar.setminimaldaysinfirstweek.md)([int](language.types.integer.md) `$days`): [true](language.types.singleton.md)

public function [IntlCalendar::setRepeatedWallTimeOption](intlcalendar.setrepeatedwalltimeoption.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [IntlCalendar::setSkippedWallTimeOption](intlcalendar.setskippedwalltimeoption.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [IntlCalendar::setTime](intlcalendar.settime.md)([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

public function [IntlCalendar::setTimeZone](intlcalendar.settimezone.md)([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

public function [IntlCalendar::toDateTime](intlcalendar.todatetime.md)(): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

}

## Índice

- [IntlGregorianCalendar::\_\_construct](intlgregoriancalendar.construct.md) — Cria um objeto de calendário gregoriano
- [IntlGregorianCalendar::createFromDate](intlgregoriancalendar.createfromdate.md) — Cria uma nova instância de IntlGregorianCalendar a partir de uma data
- [IntlGregorianCalendar::createFromDateTime](intlgregoriancalendar.createfromdatetime.md) — Cria uma instância de IntlGregorianCalendar a partir de data e horário
- [IntlGregorianCalendar::getGregorianChange](intlgregoriancalendar.getgregorianchange.md) — Obtém a data de mudança do calendário gregoriano
- [IntlGregorianCalendar::isLeapYear](intlgregoriancalendar.isleapyear.md) — Determina se o ano é bissexto
- [IntlGregorianCalendar::setGregorianChange](intlgregoriancalendar.setgregorianchange.md) — Define a data de mudança do calendário gregoriano

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
