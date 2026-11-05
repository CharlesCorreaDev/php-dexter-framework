# Obtém uma enumeração a partir de IDs de fuso horário do sistema com as condições de filtro informadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.createtimezoneidenumeration.php

---

# IntlTimeZone::createTimeZoneIDEnumeration

# intltz\_create\_time\_zone\_id\_enumeration

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlTimeZone::createTimeZoneIDEnumeration -- intltz\_create\_time\_zone\_id\_enumeration — Obtém uma enumeração a partir de IDs de fuso horário do sistema com as condições de filtro informadas

### Descrição

Estilo orientado a objetos (método):

public static function **IntlTimeZone::createTimeZoneIDEnumeration**([int](language.types.integer.md) `$type`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$rawOffset` = **`null`**): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_create\_time\_zone\_id\_enumeration**([int](language.types.integer.md) `$type`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$rawOffset` = **`null`**): [IntlIterator](class.intliterator.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`type`

`region`

`rawOffset`

### Valor Retornado

Retorna um objeto [IntlIterator](class.intliterator.md) ou **`false`** em caso de falha.

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
