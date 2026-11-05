# Chama uma função em uma variável global Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.callfunction.php

---

# LuaSandbox::callFunction

(PECL luasandbox >= 1.0.0)

LuaSandbox::callFunction — Chama uma função em uma variável global Lua

### Descrição

public function **LuaSandbox::callFunction**([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `...$args`): [array](language.types.array.md)|[bool](language.types.boolean.md)

Chama uma função em uma variável global Lua.

Se o nome contiver caracteres ".", a função será localizada por meio de
acessos recursivos à tabela, como se o nome fosse uma expressão Lua.

Se a variável não existir ou não for uma função, false será
retornado e um aviso será emitido.

Para mais informações sobre como chamar funções Lua e os valores de retorno,
veja [LuaSandboxFunction::call()](luasandboxfunction.call.md).

### Parâmetros

`name`
:   Nome da variável Lua.

`args`
:   Argumentos para a função.

### Valor Retornado

Retorna um [array](language.types.array.md) de valores retornados pela função Lua, que pode estar vazio, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Chamando uma função Lua**

```
<?php

// Cria um novo LuaSandbox
$sandbox = new LuaSandbox();

// Chama string.match de Lua
$captures = $sandbox->callFunction( 'string.match', $string, $pattern );

?>
```

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
