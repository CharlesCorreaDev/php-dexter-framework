# A Classe LuaClosure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.luaclosure.php

---

# A Classe LuaClosure

(PECL lua >=0.9.0)

## Introdução

LuaClosure é uma classe encapsuladora para LUA\_TFUNCTION que pode ser retornada a partir
de uma chamada para uma função Lua.

## Resumo da classe

class **LuaClosure**
{

/\* Métodos \*/

public function [\_\_invoke](luaclosure.invoke.md)([mixed](language.types.mixed.md) `...$args`): [void](language.types.void.md)

}

## Índice

- [LuaClosure::\_\_invoke](luaclosure.invoke.md) — Invoca uma closure lua

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
