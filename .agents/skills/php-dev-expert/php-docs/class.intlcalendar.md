# A classe IntlCalendar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intlcalendar.php

---

# A classe IntlCalendar

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

## Introdução

## Resumo da classe

class ****IntlCalendar****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[FIELD\_ERA](class.intlcalendar.md#intlcalendar.constants.field-era);

public
const
[int](language.types.integer.md)
[FIELD\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-year);

public
const
[int](language.types.integer.md)
[FIELD\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-month);

public
const
[int](language.types.integer.md)
[FIELD\_WEEK\_OF\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-week-of-year);

public
const
[int](language.types.integer.md)
[FIELD\_WEEK\_OF\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-week-of-month);

public
const
[int](language.types.integer.md)
[FIELD\_DATE](class.intlcalendar.md#intlcalendar.constants.field-date);

public
const
[int](language.types.integer.md)
[FIELD\_DAY\_OF\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-day-of-year);

public
const
[int](language.types.integer.md)
[FIELD\_DAY\_OF\_WEEK](class.intlcalendar.md#intlcalendar.constants.field-day-of-week);

public
const
[int](language.types.integer.md)
[FIELD\_DAY\_OF\_WEEK\_IN\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-day-of-week-in-month);

public
const
[int](language.types.integer.md)
[FIELD\_AM\_PM](class.intlcalendar.md#intlcalendar.constants.field-am-pm);

public
const
[int](language.types.integer.md)
[FIELD\_HOUR](class.intlcalendar.md#intlcalendar.constants.field-hour);

public
const
[int](language.types.integer.md)
[FIELD\_HOUR\_OF\_DAY](class.intlcalendar.md#intlcalendar.constants.field-hour-of-day);

public
const
[int](language.types.integer.md)
[FIELD\_MINUTE](class.intlcalendar.md#intlcalendar.constants.field-minute);

public
const
[int](language.types.integer.md)
[FIELD\_SECOND](class.intlcalendar.md#intlcalendar.constants.field-second);

public
const
[int](language.types.integer.md)
[FIELD\_MILLISECOND](class.intlcalendar.md#intlcalendar.constants.field-millisecond);

public
const
[int](language.types.integer.md)
[FIELD\_ZONE\_OFFSET](class.intlcalendar.md#intlcalendar.constants.field-zone-offset);

public
const
[int](language.types.integer.md)
[FIELD\_DST\_OFFSET](class.intlcalendar.md#intlcalendar.constants.field-dst-offset);

public
const
[int](language.types.integer.md)
[FIELD\_YEAR\_WOY](class.intlcalendar.md#intlcalendar.constants.field-year-woy);

public
const
[int](language.types.integer.md)
[FIELD\_DOW\_LOCAL](class.intlcalendar.md#intlcalendar.constants.field-dow-local);

public
const
[int](language.types.integer.md)
[FIELD\_EXTENDED\_YEAR](class.intlcalendar.md#intlcalendar.constants.field-extended-year);

public
const
[int](language.types.integer.md)
[FIELD\_JULIAN\_DAY](class.intlcalendar.md#intlcalendar.constants.field-julian-day);

public
const
[int](language.types.integer.md)
[FIELD\_MILLISECONDS\_IN\_DAY](class.intlcalendar.md#intlcalendar.constants.field-milliseconds-in-day);

public
const
[int](language.types.integer.md)
[FIELD\_IS\_LEAP\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-is-leap-month);

public
const
[int](language.types.integer.md)
[FIELD\_FIELD\_COUNT](class.intlcalendar.md#intlcalendar.constants.field-field-count);

public
const
[int](language.types.integer.md)
[FIELD\_DAY\_OF\_MONTH](class.intlcalendar.md#intlcalendar.constants.field-day-of-month);

public
const
[int](language.types.integer.md)
[DOW\_SUNDAY](class.intlcalendar.md#intlcalendar.constants.dow-sunday);

public
const
[int](language.types.integer.md)
[DOW\_MONDAY](class.intlcalendar.md#intlcalendar.constants.dow-monday);

public
const
[int](language.types.integer.md)
[DOW\_TUESDAY](class.intlcalendar.md#intlcalendar.constants.dow-tuesday);

public
const
[int](language.types.integer.md)
[DOW\_WEDNESDAY](class.intlcalendar.md#intlcalendar.constants.dow-wednesday);

public
const
[int](language.types.integer.md)
[DOW\_THURSDAY](class.intlcalendar.md#intlcalendar.constants.dow-thursday);

public
const
[int](language.types.integer.md)
[DOW\_FRIDAY](class.intlcalendar.md#intlcalendar.constants.dow-friday);

public
const
[int](language.types.integer.md)
[DOW\_SATURDAY](class.intlcalendar.md#intlcalendar.constants.dow-saturday);

public
const
[int](language.types.integer.md)
[DOW\_TYPE\_WEEKDAY](class.intlcalendar.md#intlcalendar.constants.dow-type-weekday);

public
const
[int](language.types.integer.md)
[DOW\_TYPE\_WEEKEND](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend);

public
const
[int](language.types.integer.md)
[DOW\_TYPE\_WEEKEND\_OFFSET](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend-offset);

public
const
[int](language.types.integer.md)
[DOW\_TYPE\_WEEKEND\_CEASE](class.intlcalendar.md#intlcalendar.constants.dow-type-weekend-cease);

public
const
[int](language.types.integer.md)
[WALLTIME\_FIRST](class.intlcalendar.md#intlcalendar.constants.walltime-first);

public
const
[int](language.types.integer.md)
[WALLTIME\_LAST](class.intlcalendar.md#intlcalendar.constants.walltime-last);

public
const
[int](language.types.integer.md)
[WALLTIME\_NEXT\_VALID](class.intlcalendar.md#intlcalendar.constants.walltime-next-valid);

/\* Métodos \*/

private function [\_\_construct](intlcalendar.construct.md)()

public function [add](intlcalendar.add.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

public function [after](intlcalendar.after.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [before](intlcalendar.before.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [clear](intlcalendar.clear.md)([?](language.types.null.md)[int](language.types.integer.md) `$field` = **`null`**): [true](language.types.singleton.md)

public static function [createInstance](intlcalendar.createinstance.md)([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

public function [equals](intlcalendar.equals.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [fieldDifference](intlcalendar.fielddifference.md)([float](language.types.float.md) `$timestamp`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [fromDateTime](intlcalendar.fromdatetime.md)([DateTime](class.datetime.md)|[string](language.types.string.md) `$datetime`, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

public function [get](intlcalendar.get.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getActualMaximum](intlcalendar.getactualmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getActualMinimum](intlcalendar.getactualminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [getAvailableLocales](intlcalendar.getavailablelocales.md)(): [array](language.types.array.md)

public function [getDayOfWeekType](intlcalendar.getdayofweektype.md)([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorCode](intlcalendar.geterrorcode.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorMessage](intlcalendar.geterrormessage.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getFirstDayOfWeek](intlcalendar.getfirstdayofweek.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getGreatestMinimum](intlcalendar.getgreatestminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [getKeywordValuesForLocale](intlcalendar.getkeywordvaluesforlocale.md)([string](language.types.string.md) `$keyword`, [string](language.types.string.md) `$locale`, [bool](language.types.boolean.md) `$onlyCommon`): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

public function [getLeastMaximum](intlcalendar.getleastmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getLocale](intlcalendar.getlocale.md)([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getMaximum](intlcalendar.getmaximum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getMinimalDaysInFirstWeek](intlcalendar.getminimaldaysinfirstweek.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getMinimum](intlcalendar.getminimum.md)([int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public static function [getNow](intlcalendar.getnow.md)(): [float](language.types.float.md)

public function [getRepeatedWallTimeOption](intlcalendar.getrepeatedwalltimeoption.md)(): [int](language.types.integer.md)

public function [getSkippedWallTimeOption](intlcalendar.getskippedwalltimeoption.md)(): [int](language.types.integer.md)

public function [getTime](intlcalendar.gettime.md)(): [float](language.types.float.md)|[false](language.types.singleton.md)

public function [getTimeZone](intlcalendar.gettimezone.md)(): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

public function [getType](intlcalendar.gettype.md)(): [string](language.types.string.md)

public function [getWeekendTransition](intlcalendar.getweekendtransition.md)([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [inDaylightTime](intlcalendar.indaylighttime.md)(): [bool](language.types.boolean.md)

public function [isEquivalentTo](intlcalendar.isequivalentto.md)([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

public function [isLenient](intlcalendar.islenient.md)(): [bool](language.types.boolean.md)

public function [isSet](intlcalendar.isset.md)([int](language.types.integer.md) `$field`): [bool](language.types.boolean.md)

public function [isWeekend](intlcalendar.isweekend.md)([?](language.types.null.md)[float](language.types.float.md) `$timestamp` = **`null`**): [bool](language.types.boolean.md)

public function [roll](intlcalendar.roll.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md)|[bool](language.types.boolean.md) `$value`): [bool](language.types.boolean.md)

public function [set](intlcalendar.set.md)([int](language.types.integer.md) `$field`, [int](language.types.integer.md) `$value`): [true](language.types.singleton.md)

public function [set](intlcalendar.set.md)(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth` = NULL,  
    [int](language.types.integer.md) `$hour` = NULL,  
    [int](language.types.integer.md) `$minute` = NULL,  
    [int](language.types.integer.md) `$second` = NULL  
): [true](language.types.singleton.md)

public function [setDate](intlcalendar.setdate.md)([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$dayOfMonth`): [void](language.types.void.md)

public function [setDateTime](intlcalendar.setdatetime.md)(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**  
): [void](language.types.void.md)

public function [setFirstDayOfWeek](intlcalendar.setfirstdayofweek.md)([int](language.types.integer.md) `$dayOfWeek`): [true](language.types.singleton.md)

public function [setLenient](intlcalendar.setlenient.md)([bool](language.types.boolean.md) `$lenient`): [true](language.types.singleton.md)

public function [setMinimalDaysInFirstWeek](intlcalendar.setminimaldaysinfirstweek.md)([int](language.types.integer.md) `$days`): [true](language.types.singleton.md)

public function [setRepeatedWallTimeOption](intlcalendar.setrepeatedwalltimeoption.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [setSkippedWallTimeOption](intlcalendar.setskippedwalltimeoption.md)([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

public function [setTime](intlcalendar.settime.md)([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

public function [setTimeZone](intlcalendar.settimezone.md)([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

public function [toDateTime](intlcalendar.todatetime.md)(): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

}

## Constantes predefinidas

**`IntlCalendar::FIELD_ERA`** [int](language.types.integer.md)
:   Campo de calendário que representa uma era numericamente, por exemplo
    `1` para DC e `0` para AC nos calendários
    gregorianos/julianos e `235` para a era Heisei
    (平成) no calendário japonês. Nem todos os calendários têm mais
    de uma era.

**`IntlCalendar::FIELD_YEAR`** [int](language.types.integer.md)
:   Campo de calendário para o ano. Isto não é único através das eras. Se o
    tipo do calendário tem mais que uma era, geralmente o valor mínimo para
    este campo será `1`.

**`IntlCalendar::FIELD_MONTH`** [int](language.types.integer.md)
:   Campo de calendário para o mês. A sequência de meses é baseada em zero, portanto
    janeiro (aqui usado com o significado do primeiro mês do calendário; mas
    pode ser chamado outro nome, como Moarrão no calendário islâmico)
    é representado por `0`, fevereiro por
    `1`, …, dezembro por `11` e, para
    calendários que o têm, o 13º ou mês adicional por
    `12`.

**`IntlCalendar::FIELD_WEEK_OF_YEAR`** [int](language.types.integer.md)
:   Campo de calendário para o número da semana no ano. Isto depende de
    que dia da semana é [definido para começar
    a semana](intlcalendar.getfirstdayofweek.md) e o [número mínimo de dias
    em uma semana](intlcalendar.getminimaldaysinfirstweek.md).

**`IntlCalendar::FIELD_WEEK_OF_MONTH`** [int](language.types.integer.md)
:   Campo de calendário para o número da semana no mês. Isto depende de
    que dia da semana é [definido para começar
    a semana](intlcalendar.getfirstdayofweek.md) e o [número mínimo de dias
    em uma semana](intlcalendar.getminimaldaysinfirstweek.md).

**`IntlCalendar::FIELD_DATE`** [int](language.types.integer.md)
:   Campo de calendário para o dia do mês. O mesmo que
    **`IntlCalendar::FIELD_DAY_OF_MONTH`**, que tem um nome
    mais claro.

**`IntlCalendar::FIELD_DAY_OF_YEAR`** [int](language.types.integer.md)
:   Campo de calendário para o dia no ano. Para o calendário gregoriano,
    começa com `1` e termina com
    `365` ou `366`.

**`IntlCalendar::FIELD_DAY_OF_WEEK`** [int](language.types.integer.md)
:   Campo de calendário para o dia da semana. Seus valores começam com
    `1` (domingo, consulte [**`IntlCalendar::DOW_SUNDAY`**](class.intlcalendar.md#intlcalendar.constants.dow-sunday)
    e constantes subsequentes) e o último valor válido é 7 (sábado).

**`IntlCalendar::FIELD_DAY_OF_WEEK_IN_MONTH`** [int](language.types.integer.md)
:   Dado um dia da semana (domingo, segunda-feira, …), este campo de calendário
    atribui um ordinal ao dia da semana em um mês específico.
    Portanto, se o valor deste campo for `1` e o valor do dia da
    semana for `2` (segunda-feira), o dia do mês será a 1ª segunda-feira do
    mês; o valor máximo é `5`.

    Adicionalmente, o valor `0` e números negativos também
    são permitidos. O valor `0` abrange os sete dias
    que ocorrem imediatamente antes dos primeiros sete dias de um mês (que
    por sua vez têm o ‘dia da semana no mês’ com valor
    `1`). Valores negativos começam a contagem do final do
    mês – `-1` aponta para a última ocorrência de um
    dia da semana em um mês, `-2` para a penúltima,
    e assim por diante.

    Diferentemente de [**`IntlCalendar::FIELD_WEEK_OF_MONTH`**](class.intlcalendar.md#intlcalendar.constants.field-week-of-month)
    e [**`IntlCalendar::FIELD_WEEK_OF_YEAR`**](class.intlcalendar.md#intlcalendar.constants.field-week-of-year),
    este valor não depende de
    [IntlCalendar::getFirstDayOfWeek()](intlcalendar.getfirstdayofweek.md) ou de
    [IntlCalendar::getMinimalDaysInFirstWeek()](intlcalendar.getminimaldaysinfirstweek.md). A primeira
    segunda-feira é a primeira segunda-feira, mesmo se ela ocorrer em uma semana que pertença
    ao mês anterior.

**`IntlCalendar::FIELD_AM_PM`** [int](language.types.integer.md)
:   Campo de calendário que indica se um horário é antes de meio-dia (valor
    `0`, a.m.) ou depois (`1`). Meia-noite é
    a.m., meio-dia é p.m..

**`IntlCalendar::FIELD_HOUR`** [int](language.types.integer.md)
:   Campo de calendário para a hora, sem especificar se é antes ou
    depois do meio-dia. Valores válidos são `0` a
    `11`.

**`IntlCalendar::FIELD_HOUR_OF_DAY`** [int](language.types.integer.md)
:   Campo de calendário para as horas integrais do dia (24h). Valores válidos são
    `0` a `23`.

**`IntlCalendar::FIELD_MINUTE`** [int](language.types.integer.md)
:   Campo de calendário para o componente de minutos do horário.

**`IntlCalendar::FIELD_SECOND`** [int](language.types.integer.md)
:   Campo de calendário para o componente de segundos do horário.

**`IntlCalendar::FIELD_MILLISECOND`** [int](language.types.integer.md)
:   Campo de calendário para o componente de milissegundos do horário.

**`IntlCalendar::FIELD_ZONE_OFFSET`** [int](language.types.integer.md)
:   Campo de calendário que indica o deslocamento puro do fuso horário, em
    milissegundos. O deslocamento puro é o deslocamento do fuso horário, excluindo qualquer
    deslocamento devido a horário de verão.

**`IntlCalendar::FIELD_DST_OFFSET`** [int](language.types.integer.md)
:   Campo de calendário para o deslocamento de horário de verão do fuso horário do
    calendário, em milissegundos, se ativo para o horário do calendário.

**`IntlCalendar::FIELD_YEAR_WOY`** [int](language.types.integer.md)
:   Campo de calendário que represente o ano para propósito de
    [semana do ano](class.intlcalendar.md#intlcalendar.constants.field-week-of-year)

**`IntlCalendar::FIELD_DOW_LOCAL`** [int](language.types.integer.md)
:   Campo de calendário para o dia da semana da localidade. Este é um valor
    entre `1` e `7`,
    `1` é usado para o dia da semana que corresponde ao
    valor retornado por
    [IntlCalendar::getFirstDayOfWeek()](intlcalendar.getfirstdayofweek.md).

**`IntlCalendar::FIELD_EXTENDED_YEAR`** [int](language.types.integer.md)
:   Campo de calendário para uma representação numérica do ano que é contínua
    através das eras. Para o calendário gregoriano, o valor deste campo
    corresponde ao de **`IntlCalendar::FIELD_YEAR`** para anos
    DC; um ano AC `y` é representando por
    `-y + 1`.

**`IntlCalendar::FIELD_JULIAN_DAY`** [int](language.types.integer.md)
:   Campo de calendário para um número de dia juliano modificado. É diferente de um
    número de dia juliano convencional pois sua transição ocorre à meia-noite
    do fuso horário local ao invés da meia-noite UTC. Identifica unicamente uma data.

**`IntlCalendar::FIELD_MILLISECONDS_IN_DAY`** [int](language.types.integer.md)
:   Campo de calendário que abrange a informação em
    **`IntlCalendar::FIELD_HOUR_OF_DAY`**,
    **`IntlCalendar::FIELD_MINUTE`**,
    **`IntlCalendar::FIELD_SECOND`** e
    **`IntlCalendar::FIELD_MILLISECOND`**. O intervalo é de
    `0` a `24 * 3600 * 1000 - 1`. Não é
    a quantidade de milissegundos decorridos no dia pois em transições
    de horário de verão haverá descontinuidades análogas àquelas do
    horário do relógio de parede.

**`IntlCalendar::FIELD_IS_LEAP_MONTH`** [int](language.types.integer.md)
:   Campo de calendário cujo valor é `1` para indicar um
    mês adicional e `0` caso contrário.

**`IntlCalendar::FIELD_FIELD_COUNT`** [int](language.types.integer.md)
:   O número total de campos.

**`IntlCalendar::FIELD_DAY_OF_MONTH`** [int](language.types.integer.md)
:   Apelido para [**`IntlCalendar::FIELD_DATE`**](class.intlcalendar.md#intlcalendar.constants.field-date).

**`IntlCalendar::DOW_SUNDAY`** [int](language.types.integer.md)
:   Domingo.

**`IntlCalendar::DOW_MONDAY`** [int](language.types.integer.md)
:   Segunda-feira.

**`IntlCalendar::DOW_TUESDAY`** [int](language.types.integer.md)
:   Terça-feira.

**`IntlCalendar::DOW_WEDNESDAY`** [int](language.types.integer.md)
:   Quarta-feira.

**`IntlCalendar::DOW_THURSDAY`** [int](language.types.integer.md)
:   Quinta-feira.

**`IntlCalendar::DOW_FRIDAY`** [int](language.types.integer.md)
:   Sexta-feira.

**`IntlCalendar::DOW_SATURDAY`** [int](language.types.integer.md)
:   Sábado.

**`IntlCalendar::DOW_TYPE_WEEKDAY`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md)
    que indica se o dia é um dia da semana (e não do final de semana).

**`IntlCalendar::DOW_TYPE_WEEKEND`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md)
    que indica se o dia pertence ao final de semana.

**`IntlCalendar::DOW_TYPE_WEEKEND_OFFSET`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md)
    que indica que o final de semana começa no dia da semana informado.

**`IntlCalendar::DOW_TYPE_WEEKEND_CEASE`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md)
    que indica que o final de semana termina no dia da semana informado.

**`IntlCalendar::WALLTIME_FIRST`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md)
    que indica que o horário de relógio na faixa pulada deve se referir ao
    mesmo instante que o relógio com uma hora a menos; e a saída de
    [IntlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md)
    que indica que o horário do relógio na faixa repetida deve se referir ao
    instante da primeira ocorrência do horário em questão.

**`IntlCalendar::WALLTIME_LAST`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md)
    que indica que o horário de relógio na faixa pulada deve se referir ao
    mesmo instante que o relógio com uma hora a mais; e a saída de
    [IntlCalendar::getRepeatedWallTimeOption()](intlcalendar.getrepeatedwalltimeoption.md)
    que indica que o horário do relógio na faixa repetida deve se referir ao
    instante da segunda ocorrência do horário em questão.

**`IntlCalendar::WALLTIME_NEXT_VALID`** [int](language.types.integer.md)
:   Saída de [IntlCalendar::getSkippedWallTimeOption()](intlcalendar.getskippedwalltimeoption.md)
    que indica que o horário de relógio na faixa pulada deve se referir ao
    intante em que a transição de horário de verão ocorre (inicia).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [IntlCalendar::add](intlcalendar.add.md) — Adiciona uma quantidade de tempo (com sinal) a um campo
- [IntlCalendar::after](intlcalendar.after.md) — Informa se o instante de tempo deste objeto é posterior ao instante do objeto passado
- [IntlCalendar::before](intlcalendar.before.md) — Informa se o instante de tempo deste objeto é anterior ao instante do objeto passado
- [IntlCalendar::clear](intlcalendar.clear.md) — Limpa um campo ou todos os campos
- [IntlCalendar::\_\_construct](intlcalendar.construct.md) — Construtor privado para não permitir instanciação
- [IntlCalendar::createInstance](intlcalendar.createinstance.md) — Cria um novo IntlCalendar
- [IntlCalendar::equals](intlcalendar.equals.md) — Compara horários de dois objetos IntlCalendar para igualidade
- [IntlCalendar::fieldDifference](intlcalendar.fielddifference.md) — Calcula a diferença entre o horário fornecido e o horário deste objeto
- [IntlCalendar::fromDateTime](intlcalendar.fromdatetime.md) — Cria um IntlCalendar a partir de um objeto DateTime ou uma string
- [IntlCalendar::get](intlcalendar.get.md) — Obtém o valor de um campo
- [IntlCalendar::getActualMaximum](intlcalendar.getactualmaximum.md) — O valor máximo para um campo, considerando o horário atual do objeto
- [IntlCalendar::getActualMinimum](intlcalendar.getactualminimum.md) — O valor mínimo para um campo, considerando o horário atual do objeto
- [IntlCalendar::getAvailableLocales](intlcalendar.getavailablelocales.md) — Obtém um array de localidades para as quais existem dados
- [IntlCalendar::getDayOfWeekType](intlcalendar.getdayofweektype.md) — Informa se o dia é dia de semana, de final de semana ou de transição entre os dois
- [IntlCalendar::getErrorCode](intlcalendar.geterrorcode.md) — Obtém o último código de erro no objeto
- [IntlCalendar::getErrorMessage](intlcalendar.geterrormessage.md) — Obtém a última mensagem de erro no objeto
- [IntlCalendar::getFirstDayOfWeek](intlcalendar.getfirstdayofweek.md) — Obtém o primeiro dia da semana para a localidade do calendário
- [IntlCalendar::getGreatestMinimum](intlcalendar.getgreatestminimum.md) — Obtém o maior valor mínimo local para um campo
- [IntlCalendar::getKeywordValuesForLocale](intlcalendar.getkeywordvaluesforlocale.md) — Obtém um conjunto de valores de palavras-chaves de localidade
- [IntlCalendar::getLeastMaximum](intlcalendar.getleastmaximum.md) — Obtém o menor máximo local para um campo
- [IntlCalendar::getLocale](intlcalendar.getlocale.md) — Obtém a localidade associada com o objeto
- [IntlCalendar::getMaximum](intlcalendar.getmaximum.md) — Obtém o valor máximo global para um campo
- [IntlCalendar::getMinimalDaysInFirstWeek](intlcalendar.getminimaldaysinfirstweek.md) — Obtém o número mínimo de dias que a primeira semana do ano ou do mês pode ter
- [IntlCalendar::getMinimum](intlcalendar.getminimum.md) — Obtém o mínimo global para um campo
- [IntlCalendar::getNow](intlcalendar.getnow.md) — Obtém um número representando o horário atual
- [IntlCalendar::getRepeatedWallTimeOption](intlcalendar.getrepeatedwalltimeoption.md) — Obtém o comportamento ao lidar com o horário de relógio repetido
- [IntlCalendar::getSkippedWallTimeOption](intlcalendar.getskippedwalltimeoption.md) — Obtém o comportamento para o horário de relógio saltado
- [IntlCalendar::getTime](intlcalendar.gettime.md) — Obtém o horário atualmente representado pelo objeto
- [IntlCalendar::getTimeZone](intlcalendar.gettimezone.md) — Obtém o fuso horário do objeto
- [IntlCalendar::getType](intlcalendar.gettype.md) — Obtém o tipo de calendário
- [IntlCalendar::getWeekendTransition](intlcalendar.getweekendtransition.md) — Obtém o horário do dia no qual o final de semana inicia ou termina
- [IntlCalendar::inDaylightTime](intlcalendar.indaylighttime.md) — Informa se o horário do objeto está no horário de verão
- [IntlCalendar::isEquivalentTo](intlcalendar.isequivalentto.md) — Verifica se outro calendário é igual exceto pelo horário
- [IntlCalendar::isLenient](intlcalendar.islenient.md) — Verifica se a interpretação de data/horário está no modo leniente
- [IntlCalendar::isSet](intlcalendar.isset.md) — Verifica se um campo está definido
- [IntlCalendar::isWeekend](intlcalendar.isweekend.md) — Verifica se uma data e um horário estão no final de semana
- [IntlCalendar::roll](intlcalendar.roll.md) — Adiciona valor ao campo sem transferir para campos mais significativos
- [IntlCalendar::set](intlcalendar.set.md) — Define um campo de horário ou vários campos comuns de uma vez
- [IntlCalendar::setDate](intlcalendar.setdate.md) — Define campos de data
- [IntlCalendar::setDateTime](intlcalendar.setdatetime.md) — Define campos de data e horário
- [IntlCalendar::setFirstDayOfWeek](intlcalendar.setfirstdayofweek.md) — Define o dia da semana no qual a semana inicia
- [IntlCalendar::setLenient](intlcalendar.setlenient.md) — Define se a interpretação de data/horário deve ser leniente
- [IntlCalendar::setMinimalDaysInFirstWeek](intlcalendar.setminimaldaysinfirstweek.md) — Define o número mínimo de dias que a primeira semana do ano ou do mês pode ter
- [IntlCalendar::setRepeatedWallTimeOption](intlcalendar.setrepeatedwalltimeoption.md) — Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão
- [IntlCalendar::setSkippedWallTimeOption](intlcalendar.setskippedwalltimeoption.md) — Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão
- [IntlCalendar::setTime](intlcalendar.settime.md) — Define o horário do calendário em milissegundos desde a época de referência
- [IntlCalendar::setTimeZone](intlcalendar.settimezone.md) — Define o fuso horário usado por este calendário
- [IntlCalendar::toDateTime](intlcalendar.todatetime.md) — Converte um objeto IntlCalendar para um DateTime

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
