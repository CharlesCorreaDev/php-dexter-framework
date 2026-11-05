# Atribui uma variável PHP para o script Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.assign.php

---

# Lua::assign

(PECL lua >=0.9.0)

Lua::assign — Atribui uma variável PHP para o script Lua

### Descrição

public function **Lua::assign**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`name`

`value`

### Valor Retornado

Retorna $this ou **`null`** caso a chamada falhe.

### Examples

**Exemplo #1 Exemplo da função **Lua::assign()****

```
<?php
$lua = new Lua();
$lua->assign("variavel_php", array(1=>1, 2, 3)); //os índices dos vetores em lua iniciam com 1
$lua->eval(<<<CODE
    print(variavel_php);
CODE
);
?>
```

O exemplo acima produzirá:

```
Array
 (
     [1] => 1
     [2] => 2
     [3] => 3
 )
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
