# A classe IntlDateFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intldateformatter.php

---

# A classe IntlDateFormatter

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

O formatador de datas é uma classe concreta que habilita formatação/interpretação dependetes de localidade de
datas usando strings de padrões e/ou padrões já existentes.

Esta classe representa a funcionalidade de formatação de datas da ICU.
Permite aos usuários apresentar datas em formato dependente de localidade ou converter strings
em valores de datas do PHP usando strings de padrões e/ou padrões já existentes.

## Resumo da classe

class ****IntlDateFormatter****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[FULL](class.intldateformatter.md#intldateformatter.constants.full);

public
const
[int](language.types.integer.md)
[LONG](class.intldateformatter.md#intldateformatter.constants.long);

public
const
[int](language.types.integer.md)
[MEDIUM](class.intldateformatter.md#intldateformatter.constants.medium);

public
const
[int](language.types.integer.md)
[SHORT](class.intldateformatter.md#intldateformatter.constants.short);

public
const
[int](language.types.integer.md)
[NONE](class.intldateformatter.md#intldateformatter.constants.none);

public
const
[int](language.types.integer.md)
[RELATIVE\_FULL](class.intldateformatter.md#intldateformatter.constants.relative-full);

public
const
[int](language.types.integer.md)
[RELATIVE\_LONG](class.intldateformatter.md#intldateformatter.constants.relative-long);

public
const
[int](language.types.integer.md)
[RELATIVE\_MEDIUM](class.intldateformatter.md#intldateformatter.constants.relative-medium);

public
const
[int](language.types.integer.md)
[RELATIVE\_SHORT](class.intldateformatter.md#intldateformatter.constants.relative-short);

public
const
[int](language.types.integer.md)
[PATTERN](class.intldateformatter.md#intldateformatter.constants.pattern);

public
const
[int](language.types.integer.md)
[GREGORIAN](class.intldateformatter.md#intldateformatter.constants.gregorian);

public
const
[int](language.types.integer.md)
[TRADITIONAL](class.intldateformatter.md#intldateformatter.constants.traditional);

/\* Métodos \*/

public function [\_\_construct](intldateformatter.create.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$locale`,  
    [int](language.types.integer.md) `$dateType` = **`IntlDateFormatter::FULL`**,  
    [int](language.types.integer.md) `$timeType` = **`IntlDateFormatter::FULL`**,  
    [IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**,  
    [IntlCalendar](class.intlcalendar.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$calendar` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**  
)

public static function [create](intldateformatter.create.md)(  
    [?](language.types.null.md)[string](language.types.string.md) `$locale`,  
    [int](language.types.integer.md) `$dateType` = **`IntlDateFormatter::FULL`**,  
    [int](language.types.integer.md) `$timeType` = **`IntlDateFormatter::FULL`**,  
    [IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone` = **`null`**,  
    [IntlCalendar](class.intlcalendar.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$calendar` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$pattern` = **`null`**  
): [?](language.types.null.md)[IntlDateFormatter](class.intldateformatter.md)

public function [format](intldateformatter.format.md)([IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md)|[array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$datetime`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [formatObject](intldateformatter.formatobject.md)([IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md) `$datetime`, [array](language.types.array.md)|[int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md) `$format` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getCalendar](intldateformatter.getcalendar.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getDateType](intldateformatter.getdatetype.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getErrorCode](intldateformatter.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](intldateformatter.geterrormessage.md)(): [string](language.types.string.md)

public function [getLocale](intldateformatter.getlocale.md)([int](language.types.integer.md) `$type` = **`ULOC_ACTUAL_LOCALE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getPattern](intldateformatter.getpattern.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getTimeType](intldateformatter.gettimetype.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getTimeZoneId](intldateformatter.gettimezoneid.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getCalendarObject](intldateformatter.getcalendarobject.md)(): [IntlCalendar](class.intlcalendar.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

public function [getTimeZone](intldateformatter.gettimezone.md)(): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

public function [isLenient](intldateformatter.islenient.md)(): [bool](language.types.boolean.md)

public function [localtime](intldateformatter.localtime.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [parse](intldateformatter.parse.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

public function [parseToCalendar](intldateformatter.parsetocalendar.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `&$offset` = **`null`**): [int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

public function [setCalendar](intldateformatter.setcalendar.md)([IntlCalendar](class.intlcalendar.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$calendar`): [bool](language.types.boolean.md)

public function [setLenient](intldateformatter.setlenient.md)([bool](language.types.boolean.md) `$lenient`): [void](language.types.void.md)

public function [setPattern](intldateformatter.setpattern.md)([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

public function [setTimeZone](intldateformatter.settimezone.md)([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionada a constante **`IntlDateFormatter::PATTERN`**. |

## Veja também

- [» Formatador de Datas ICU](https://unicode-org.github.io/icu-docs/apidoc/dev/icu4c/udat_8h.html)

- [» Formatos de Datas ICU](https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax)

## Constantes predefinidas

Estas constantes são usadas para especificar diferentes formatos
nos construtores para DateType e TimeType.

**`IntlDateFormatter::NONE`** [int](language.types.integer.md)
:   Não incluir este elemento

**`IntlDateFormatter::FULL`** [int](language.types.integer.md)
:   Estilo completamente especificado (Tuesday, April 12, 1952 AD ou 3:30:42pm PST)

**`IntlDateFormatter::LONG`** [int](language.types.integer.md)
:   Estilo longo (January 12, 1952 ou 3:30:32pm)

**`IntlDateFormatter::MEDIUM`** [int](language.types.integer.md)
:   Estilo médio (Jan 12, 1952)

**`IntlDateFormatter::SHORT`** [int](language.types.integer.md)
:   O estilo mais abreviado, apenas dados essenciais (12/13/52 ou 3:30pm)

**`IntlDateFormatter::RELATIVE_FULL`** [int](language.types.integer.md)
:   O mesmo que **`IntlDateFormatter::FULL`**, porém ontem, hoje e amanhã
    são mostrados como `yesterday`, `today`, e `tomorrow`,
    respectivamente. Disponível a partir do PHP 8.0.0, somente para `dateType`.

**`IntlDateFormatter::RELATIVE_LONG`** [int](language.types.integer.md)
:   O mesmo que **`IntlDateFormatter::LONG`**, porém ontem, hoje e amanhã
    são mostrados como `yesterday`, `today`, e `tomorrow`,
    respectivamente. Disponível a partir do PHP 8.0.0, somente para `dateType`.

**`IntlDateFormatter::RELATIVE_MEDIUM`** [int](language.types.integer.md)
:   O mesmo que **`IntlDateFormatter::MEDIUM`**, porém ontem, hoje e amanhã
    são mostrados como `yesterday`, `today`, e `tomorrow`,
    respectivamente. Disponível a partir do PHP 8.0.0, somente para `dateType`.

**`IntlDateFormatter::RELATIVE_SHORT`** [int](language.types.integer.md)
:   O mesmo que **`IntlDateFormatter::SHORT`**, porém ontem, hoje e amanhã
    são mostrados como `yesterday`, `today`, e `tomorrow`,
    respectivamente. Disponível a partir do PHP 8.0.0, somente para `dateType`.

**`IntlDateFormatter::PATTERN`** [int](language.types.integer.md)
:   Usa o padrão informado em `pattern`. Disponível a partir do PHP 8.4.0.

As constantes inteiras a seguir são usadas para especificar o calendário.
Estes calendários são todos baseados diretamente no calendário gregoriano.
Calendários não gregorianos precisam ser especificados na localidade.
Exemplos podem incluir locale="hi@calendar=BUDDHIST".

**`IntlDateFormatter::TRADITIONAL`** [int](language.types.integer.md)
:   Calendário Não Gregoriano

**`IntlDateFormatter::GREGORIAN`** [int](language.types.integer.md)
:   Calendário Gregoriano

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [IntlDateFormatter::create](intldateformatter.create.md) — Cria um formatador de data
- [IntlDateFormatter::format](intldateformatter.format.md) — Formata data/horário como uma string
- [IntlDateFormatter::formatObject](intldateformatter.formatobject.md) — Formata um objeto
- [IntlDateFormatter::getCalendar](intldateformatter.getcalendar.md) — Obtém o tipo de calendário usado para o IntlDateFormatter
- [IntlDateFormatter::getDateType](intldateformatter.getdatetype.md) — Obtém o tipo de data usado para o IntlDateFormatter
- [IntlDateFormatter::getErrorCode](intldateformatter.geterrorcode.md) — Obtém o código de erro da última operação
- [IntlDateFormatter::getErrorMessage](intldateformatter.geterrormessage.md) — Obtém a mensagem de erro da última operação
- [IntlDateFormatter::getLocale](intldateformatter.getlocale.md) — Obtém a localidade usada pelo formatador
- [IntlDateFormatter::getPattern](intldateformatter.getpattern.md) — Obtém o modelo usado para o IntlDateFormatter
- [IntlDateFormatter::getTimeType](intldateformatter.gettimetype.md) — Obtém o tipo de horário usado para o IntlDateFormatter
- [IntlDateFormatter::getTimeZoneId](intldateformatter.gettimezoneid.md) — Obtém o identificador de fuso horário usado para o IntlDateFormatter
- [IntlDateFormatter::getCalendarObject](intldateformatter.getcalendarobject.md) — Obtém uma cópia do objeto de calendário do formatador
- [IntlDateFormatter::getTimeZone](intldateformatter.gettimezone.md) — Obtem o fuso horário do formatador
- [IntlDateFormatter::isLenient](intldateformatter.islenient.md) — Obtém a leniência usada para o IntlDateFormatter
- [IntlDateFormatter::localtime](intldateformatter.localtime.md) — Interpreta uma string para um valor de horário baseado em campos
- [IntlDateFormatter::parse](intldateformatter.parse.md) — Interpreta uma string para uma valor de timestamp
- [IntlDateFormatter::parseToCalendar](intldateformatter.parsetocalendar.md) — Analisa uma string e a converte em um timestamp, atualizando um calendário aberto
- [IntlDateFormatter::setCalendar](intldateformatter.setcalendar.md) — Define o tipo de calendário usado pelo formatador
- [IntlDateFormatter::setLenient](intldateformatter.setlenient.md) — Define a leniência do interpretador
- [IntlDateFormatter::setPattern](intldateformatter.setpattern.md) — Define o modelo usado para o IntlDateFormatter
- [IntlDateFormatter::setTimeZone](intldateformatter.settimezone.md) — Define o fuso horário do formatador

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
