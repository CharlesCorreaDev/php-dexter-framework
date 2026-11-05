# Invoca uma closure lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luaclosure.invoke.php

---

# LuaClosure::\_\_invoke

(PECL lua >=0.9.0)

LuaClosure::\_\_invoke — Invoca uma closure lua

### Descrição

public function **LuaClosure::\_\_invoke**([mixed](language.types.mixed.md) `...$args`): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`args`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de função **LuaClosure::\_\_invoke()****

```
<?php
$lua = new Lua();
$closure = $lua->eval(<<<CODE
    return (function ()
        print("ola mundo")
    end)
CODE
);

$lua->call($closure);
$closure();
?>
```

O exemplo acima produzirá:

```
ola mundoola mundo
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
