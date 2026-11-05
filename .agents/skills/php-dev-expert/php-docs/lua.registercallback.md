# Registra uma função PHP no interpretador Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.registercallback.php

---

# Lua::registerCallback

(No version information available, might only be in Git)

Lua::registerCallback — Registra uma função PHP no interpretador Lua

### Descrição

public function **Lua::registerCallback**([string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$function`): [mixed](language.types.mixed.md)

Registra uma função PHP no interpretador Lua como uma função chamada "$name"

### Parâmetros

`name`

`function`
:   Uma função PHP válida

### Valor Retornado

Retorna $this, **`null`** para argumentos incorretos ou **`false`** para
outros tipos de falha.

### Examples

**Exemplo #1 Exemplo da função **Lua::registerCallback()****

```
<?php
$lua = new Lua();
$lua->registerCallback("echo", "var_dump");
$lua->eval(<<<CODE
    echo({1, 2, 3});
CODE
);
?>
```

O exemplo acima produzirá:

```
array(3) {
  [1]=>
  float(1)
  [2]=>
  float(2)
  [3]=>
  float(3)
}
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
