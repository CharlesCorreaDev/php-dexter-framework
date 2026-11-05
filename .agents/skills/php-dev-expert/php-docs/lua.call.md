# Executa funções Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.call.php

---

# Lua::call

# Lua::\_\_call

(PECL lua >=0.9.0)

Lua::call -- Lua::\_\_call — Executa funções Lua

### Descrição

public function **Lua::call**([callable](language.types.callable.md) `$lua_func`, [array](language.types.array.md) `$args` = ?, [int](language.types.integer.md) `$use_self` = 0): [mixed](language.types.mixed.md)

public function **Lua::\_\_call**([callable](language.types.callable.md) `$lua_func`, [array](language.types.array.md) `$args` = ?, [int](language.types.integer.md) `$use_self` = 0): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`lua_func`
:   Nome da função lua

`args`
:   Argumentos passados para a função Lua

`use_self`
:   Indica o uso de `self`

### Valor Retornado

Retorna o resultado da função chamada, **`null`** para argumentos incorretos ou
**`false`** para outros tipos de falha.

### Examples

**Exemplo #1 Exemplo da função **Lua::call()****

```
<?php
$lua = new Lua();
$lua->eval(<<<CODE
    function dummy(foo, bar)
        print(foo, ",", bar)
    end
CODE
);
$lua->call("funcaolua", array("Lua ", "adorável\n"));
$lua->funcaolua("Lua ", "adorável"); // __call()
var_dump($lua->call(array("table", "concat"), array(array(1=>1, 2=>2, 3=>3), "-")));
?>
```

O exemplo acima produzirá:

```
Lua adorável
Lua adorável
string(5) "1-2-3"
```

### Veja também

- [\_\_call()](language.oop5.overloading.md#object.call)

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
