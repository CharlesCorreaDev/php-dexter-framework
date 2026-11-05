# Obtém um array de localidades para as quais existem dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getavailablelocales.php

---

# IntlCalendar::getAvailableLocales

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getAvailableLocales — Obtém um array de localidades para as quais existem dados

### Descrição

Estilo orientado a objetos

public static function **IntlCalendar::getAvailableLocales**(): [array](language.types.array.md)

Estilo procedural

function **intlcal\_get\_available\_locales**(): [array](language.types.array.md)

Fornece a lista de localidades para as quais existem calendários instalados. A partir da ICU 51,
esta é a list de todas as localidades ICU instaladas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de [string](language.types.string.md)s, uma para cada localidade.

### Examples

**Exemplo #1 **IntlCalendar::getAvailableLocales()****

```
<?php
print_r(IntlCalendar::getAvailableLocales());
```

O exemplo acima produzirá:

```
Array
(
    [0] => af
    [1] => af_NA
    [2] => af_ZA
    [3] => agq
    [4] => agq_CM
    [5] => ak
    [6] => ak_GH
    [7] => am
    [8] => am_ET
    [9] => ar
    [10] => ar_001
    [11] => ar_AE
    [12] => ar_BH
    [13] => ar_DJ
    … output abbreviated …
    [595] => zh_Hant_HK
    [596] => zh_Hant_MO
    [597] => zh_Hant_TW
    [598] => zu
    [599] => zu_ZA
)
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
