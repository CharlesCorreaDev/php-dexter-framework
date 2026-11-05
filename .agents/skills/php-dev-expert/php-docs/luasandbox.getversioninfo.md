# Retorna as versões de LuaSandbox e Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.getversioninfo.php

---

# LuaSandbox::getVersionInfo

(PECL luasandbox >= 1.6.0)

LuaSandbox::getVersionInfo — Retorna as versões de LuaSandbox e Lua

### Descrição

public static function **LuaSandbox::getVersionInfo**(): [array](language.types.array.md)

Retorna as versões de LuaSandbox e Lua.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com duas chaves:

| elemento | tipo | descrição |
| --- | --- | --- |
| LuaSandbox | [string](language.types.string.md) | A versão da extensão LuaSandbox. |
| Lua | [string](language.types.string.md) | O nome e a versão da biblioteca conforme definidos pela macro LUA\_RELEASE, por exemplo, "Lua 5.1.5". |

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
