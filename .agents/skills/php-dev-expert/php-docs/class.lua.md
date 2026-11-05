# A Classe Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.lua.php

---

# A Classe Lua

(PECL lua >=0.9.0)

## Introdução

## Resumo da classe

class **Lua**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[LUA\_VERSION](class.lua.md#lua.constants.lua-version) = Lua 5.1.4;

/\* Métodos \*/

public function [assign](lua.assign.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [mixed](language.types.mixed.md)

public function [call](lua.call.md)([callable](language.types.callable.md) `$lua_func`, [array](language.types.array.md) `$args` = ?, [int](language.types.integer.md) `$use_self` = 0): [mixed](language.types.mixed.md)

public function [\_\_call](lua.call.md)([callable](language.types.callable.md) `$lua_func`, [array](language.types.array.md) `$args` = ?, [int](language.types.integer.md) `$use_self` = 0): [mixed](language.types.mixed.md)

public function [\_\_construct](lua.construct.md)([string](language.types.string.md) `$lua_script_file` = NULL)

public function [eval](lua.eval.md)([string](language.types.string.md) `$statements`): [mixed](language.types.mixed.md)

public function [getVersion](lua.getversion.md)(): [string](language.types.string.md)

public function [include](lua.include.md)([string](language.types.string.md) `$file`): [mixed](language.types.mixed.md)

public function [registerCallback](lua.registercallback.md)([string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$function`): [mixed](language.types.mixed.md)

}

## Constantes predefinidas

**`Lua::LUA_VERSION`**

## Índice

- [Lua::assign](lua.assign.md) — Atribui uma variável PHP para o script Lua
- [Lua::call](lua.call.md) — Executa funções Lua
- [Lua::\_\_construct](lua.construct.md) — Construtor Lua
- [Lua::eval](lua.eval.md) — Avalia uma string como código Lua
- [Lua::getVersion](lua.getversion.md) — Obtém a versão do interpretador Lua
- [Lua::include](lua.include.md) — Inclui e interpreta um arquivo de script Lua
- [Lua::registerCallback](lua.registercallback.md) — Registra uma função PHP no interpretador Lua

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
