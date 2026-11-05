# Traduz um fuso horário do Windows para um fuso horário de sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getidforwindowsid.php

---

# IntlTimeZone::getIDForWindowsID

# intltz\_get\_id\_for\_windows\_id

(PHP 7 >= 7.1.0, PHP 8)

IntlTimeZone::getIDForWindowsID -- intltz\_get\_id\_for\_windows\_id — Traduz um fuso horário do Windows para um fuso horário de sistema

### Descrição

Estilo orientado a objetos (método):

public static function **IntlTimeZone::getIDForWindowsID**([string](language.types.string.md) `$timezoneId`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_get\_id\_for\_windows\_id**([string](language.types.string.md) `$timezoneId`, [?](language.types.null.md)[string](language.types.string.md) `$region` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Traduz um fuso horário do Windows (ex.: "Pacific Standard Time") para um fuso horário de sistema (ex.: "America/Los\_Angeles").

> **Nota**:
>
> Esta função requer a ICU versão ≥ 52.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`timezoneId`

`region`

### Valor Retornado

Retorna o fuso horário de sistema ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `region` agora pode ser nulo. |

### Veja também

- [IntlTimeZone::getWindowsID()](intltimezone.getwindowsid.md) - Traduz um fuso horário de sistema em um fuso horário do Windows

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
