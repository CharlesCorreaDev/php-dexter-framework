# Carrega um bloco binário pré-compilado no ambiente Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.loadbinary.php

---

# LuaSandbox::loadBinary

(PECL luasandbox >= 1.0.0)

LuaSandbox::loadBinary — Carrega um bloco binário pré-compilado no ambiente Lua

### Descrição

public function **LuaSandbox::loadBinary**([string](language.types.string.md) `$code`, [string](language.types.string.md) `$chunkName` = ''): [LuaSandboxFunction](class.luasandboxfunction.md)

Carrega dados gerados por [LuaSandboxFunction::dump()](luasandboxfunction.dump.md).

### Parâmetros

`code`
:   Dados de [LuaSandboxFunction::dump()](luasandboxfunction.dump.md).

`chunkName`
:   Nome para a função carregada.

### Valor Retornado

Retorna um [LuaSandboxFunction](class.luasandboxfunction.md).

### Veja também

- [LuaSandbox::loadString()](luasandbox.loadstring.md) - Carrega código Lua no ambiente Lua

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
