# Obtém o código da região associada com o ID de fuso horário de sistema informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getregion.php

---

# IntlTimeZone::getRegion

# intltz\_get\_region

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlTimeZone::getRegion -- intltz\_get\_region — Obtém o código da região associada com o ID de fuso horário de sistema informado

### Descrição

Estilo orientado a objetos (método):

public static function **IntlTimeZone::getRegion**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_get\_region**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`timezoneId`

### Valor Retornado

Retorna a região ou **`false`** em caso de falha.

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
