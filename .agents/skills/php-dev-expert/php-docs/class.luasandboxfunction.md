# A classe LuaSandboxFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.luasandboxfunction.php

---

# A classe LuaSandboxFunction

(PECL luasandbox >= 1.0.0)

## Introdução

Representa uma função Lua, permitindo que ela seja chamada do PHP.

Uma LuaSandboxFunction pode ser obtida como um valor de retorno de Lua, como um parâmetro
passado para uma função de retorno Lua, ou usando
[LuaSandbox::wrapPhpFunction()](luasandbox.wrapphpfunction.md),
[LuaSandbox::loadString()](luasandbox.loadstring.md) ou
[LuaSandbox::loadBinary()](luasandbox.loadbinary.md).

## Resumo da classe

class **LuaSandboxFunction**
{

/\* Métodos \*/

public function [call](luasandboxfunction.call.md)([string](language.types.string.md) `...$args`): [array](language.types.array.md)|[bool](language.types.boolean.md)

public function [dump](luasandboxfunction.dump.md)(): [string](language.types.string.md)

}

## Índice

- [LuaSandboxFunction::call](luasandboxfunction.call.md) — Chama uma função Lua
- [LuaSandboxFunction::\_\_construct](luasandboxfunction.construct.md) — Não utilizado
- [LuaSandboxFunction::dump](luasandboxfunction.dump.md) — Despeja a função como um blob binário

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
