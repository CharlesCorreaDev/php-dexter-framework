# Não utilizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandboxfunction.construct.php

---

# LuaSandboxFunction::\_\_construct

(PECL luasandbox >= 1.0.0)

LuaSandboxFunction::\_\_construct — Não utilizado

### Descrição

final private function **LuaSandboxFunction::\_\_construct**()

Objetos [LuaSandboxFunction](class.luasandboxfunction.md) são obtidos como um valor de retorno de Lua,
como um parâmetro passado para um retorno de chamada de Lua, ou usando
[LuaSandbox::wrapPhpFunction()](luasandbox.wrapphpfunction.md),
[LuaSandbox::loadString()](luasandbox.loadstring.md) ou
[LuaSandbox::loadBinary()](luasandbox.loadbinary.md). Eles não podem ser construídos diretamente.

### Parâmetros

Esta função não possui parâmetros.

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
