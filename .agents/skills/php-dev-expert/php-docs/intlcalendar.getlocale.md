# Obtém a localidade associada com o objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getlocale.php

---

# IntlCalendar::getLocale

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getLocale — Obtém a localidade associada com o objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getLocale**([int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_locale**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a localidade usada por este objeto calendário.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`type`
:   Determina se deve-se obter a localidade real (a localidade da qual os dados do
    calendário se originam, com **`Locale::ACTUAL_LOCALE`**) ou a
    localidade válida, isto é, a localidade mais específica suportada pela ICU em relação
    à localidade solicitada – veja **`Locale::VALID_LOCALE`**.
    Da mais geral à mais específica, as localidades são ordenadas desta
    forma – localidade real, localidade válida, localidade solicitada.

### Valor Retornado

Uma string de localidade ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getLocale()****

```
<?php
$cal = IntlCalendar::createInstance(IntlTimeZone::getGMT(), 'en_US_CALIFORNIA');
var_dump(
    $cal->getLocale(Locale::ACTUAL_LOCALE),
    $cal->getLocale(Locale::VALID_LOCALE)
);
```

O exemplo acima produzirá:

```
string(2) "en"
string(5) "en_US"
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
