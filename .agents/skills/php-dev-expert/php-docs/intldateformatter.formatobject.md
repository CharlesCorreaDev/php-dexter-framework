# Formata um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.formatobject.php

---

# IntlDateFormatter::formatObject

# datefmt\_format\_object

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0)

IntlDateFormatter::formatObject -- datefmt\_format\_object — Formata um objeto

### Descrição

Estilo orientado a objetos

public static function **IntlDateFormatter::formatObject**([IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md) `$datetime`, [array](language.types.array.md)|[int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md) `$format` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **datefmt\_format\_object**([IntlCalendar](class.intlcalendar.md)|[DateTimeInterface](class.datetimeinterface.md) `$datetime`, [array](language.types.array.md)|[int](language.types.integer.md)|[string](language.types.string.md)|[null](language.types.null.md) `$format` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função permite formatar um objeto [IntlCalendar](class.intlcalendar.md) ou
[DateTime](class.datetime.md) sem que antes seja criado um
objeto [IntlDateFormatter](class.intldateformatter.md) explicitamente.

O objeto [IntlDateFormatter](class.intldateformatter.md) temporário que será criado
irá receber o fuso horário do objeto passado. O banco de dados de fuso horário
incluído com o PHP não será utilizado - o banco da ICU será usado no lugar. O
identificador de fuso horário usado em objetos [DateTime](class.datetime.md)
precisa, portanto, existir também no banco de dados da ICU.

### Parâmetros

`datetime`
:   Um objeto da classe [IntlCalendar](class.intlcalendar.md) ou
    [DateTime](class.datetime.md). A informação de fuso horário no objeto
    será utilizada.

`format`
:   Este parâmetro indica como formatar a data/horário. Pode ser um [array](language.types.array.md)
    com dois elementos (primeiro o estilo de data, depois o de horário, com uma
    das constantes **`IntlDateFormatter::NONE`**,
    **`IntlDateFormatter::SHORT`**,
    **`IntlDateFormatter::MEDIUM`**,
    **`IntlDateFormatter::LONG`**,
    **`IntlDateFormatter::FULL`**), um [int](language.types.integer.md) com
    o valor de uma dessas constantes (que no caso será usado tanto
    para o horário como para a data) ou uma [string](language.types.string.md) com o formato
    descrito na [» documentação
    ICU](https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax). Caso seja **`null`**, o estilo padrão será usado.

`locale`
:   A localidade a ser utilizada, ou **`null`** para usar a [localidade padrão](intl.configuration.md#ini.intl.default-locale).

### Valor Retornado

Uma string com o resultado ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplos de **IntlDateFormatter::formatObject()****

```
<?php
/* fuso horário padrão é irrelevante; o fuso horário vem do objeto */
ini_set('date.timezone', 'UTC');
/* localidade padrão é lida desta configuração ini */
ini_set('intl.default_locale', 'fr_FR');

$cal = IntlCalendar::fromDateTime("2013-06-06 17:05:06 Europe/Dublin");
echo "padrão:\n\t",
        IntlDateFormatter::formatObject($cal),
        "\n";

echo "\$format longo (FULL):\n\t",
        IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL),
        "\n";

echo "\$format array (NONE, FULL):\n\t",
        IntlDateFormatter::formatObject($cal, array(
                IntlDateFormatter::NONE,
                IntlDateFormatter::FULL)),
        "\n";

echo "\$format string (d 'of' MMMM y):\n\t",
        IntlDateFormatter::formatObject($cal, "d 'of' MMMM y", 'en_US'),
        "\n";

echo "com DateTime:\n\t",
        IntlDateFormatter::formatObject(
                new DateTime("2013-09-09 09:09:09 Europe/Madrid"),
                IntlDateFormatter::FULL,
                'es_ES'),
        "\n";
```

O exemplo acima produzirá:

```
default:
    6 juin 2013 17:05:06
$format longo (FULL):
    jeudi 6 juin 2013 17:05:06 heure d’été irlandaise
$format array (NONE, FULL):
    17:05:06 heure d’été irlandaise
$format string (d 'of' MMMM y):
    6 of June 2013
com DateTime:
    lunes, 9 de septiembre de 2013 09:09:09 Hora de verano de Europa central
```

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
