# Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.lua.php

---

# Lua

# Introdução

"Lua é uma linguagem de script poderosa, rápida, leve e incorporável."
Esta extensão incorpora o interpretador lua e oferece uma API-OO para as
variáveis e funções lua.

- [Instalação/Configuração](lua.setup.md)
  - [Dependências](lua.requirements.md)
  - [Instalação](lua.installation.md)
- [Lua](class.lua.md) — A Classe Lua
  - [Lua::assign](lua.assign.md) — Atribui uma variável PHP para o script Lua
  - [Lua::call](lua.call.md) — Executa funções Lua
  - [Lua::\_\_construct](lua.construct.md) — Construtor Lua
  - [Lua::eval](lua.eval.md) — Avalia uma string como código Lua
  - [Lua::getVersion](lua.getversion.md) — Obtém a versão do interpretador Lua
  - [Lua::include](lua.include.md) — Inclui e interpreta um arquivo de script Lua
  - [Lua::registerCallback](lua.registercallback.md) — Registra uma função PHP no interpretador Lua
- [LuaClosure](class.luaclosure.md) — A Classe LuaClosure
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
