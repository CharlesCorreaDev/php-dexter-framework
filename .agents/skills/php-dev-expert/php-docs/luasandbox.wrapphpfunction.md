# Encapsula um chamável PHP em uma LuaSandboxFunction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.wrapphpfunction.php

---

# LuaSandbox::wrapPhpFunction

(PECL luasandbox >= 1.2.0)

LuaSandbox::wrapPhpFunction — Encapsula um chamável PHP em uma [LuaSandboxFunction](class.luasandboxfunction.md)

### Descrição

public function **LuaSandbox::wrapPhpFunction**([callable](language.types.callable.md) `$function`): [LuaSandboxFunction](class.luasandboxfunction.md)

Encapsula um chamável PHP em uma [LuaSandboxFunction](class.luasandboxfunction.md), para que ele
possa ser passado para Lua como uma função anônima.

A função deve retornar um array de valores (que pode estar vazio),
ou **`null`** que é equivalente a retornar o array vazio.

Exceções serão lançadas como erros em Lua, no entanto, apenas
exceções [LuaSandboxRuntimeError](class.luasandboxruntimeerror.md) podem ser capturadas
dentro de Lua com `pcall()` ou `xpcall()`.

Para mais informações sobre como chamar funções Lua e os valores de retorno,
veja [LuaSandboxFunction::call()](luasandboxfunction.call.md).

### Parâmetros

`function`
:   O chamável a ser encapsulado.

### Valor Retornado

Retorna um [LuaSandboxFunction](class.luasandboxfunction.md).

### Veja também

- [LuaSandbox::loadString()](luasandbox.loadstring.md) - Carrega código Lua no ambiente Lua
- [LuaSandbox::registerLibrary()](luasandbox.registerlibrary.md) - Registra um conjunto de funções PHP como uma biblioteca Lua

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
