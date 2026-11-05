# Traduz um fuso horário de sistema em um fuso horário do Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getwindowsid.php

---

# IntlTimeZone::getWindowsID

# intltz\_get\_windows\_id

(PHP 7 >= 7.1.0, PHP 8)

IntlTimeZone::getWindowsID -- intltz\_get\_windows\_id — Traduz um fuso horário de sistema em um fuso horário do Windows

### Descrição

Estilo orientado a objetos (método):

public static function **IntlTimeZone::getWindowsID**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_get\_windows\_id**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

Traduz um fuso horário de sistema (ex;: "America/Los\_Angeles") em um fuso horário do Windows (e.: "Pacific Standard Time").

> **Nota**:
>
> Esta função requer a ICU versão ≥ 52.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`timezoneId`

### Valor Retornado

Retorna o fuso horário do Windows ou **`false`** em caso de falha.

### Veja também

- [IntlTimeZone::getIDForWindowsID()](intltimezone.getidforwindowsid.md) - Traduz um fuso horário do Windows para um fuso horário de sistema

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
