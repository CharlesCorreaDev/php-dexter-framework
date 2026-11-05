# Desfaz um valor de retorno previamente definido para uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-unset-return.php

---

# uopz\_unset\_return

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_unset\_return — Desfaz um valor de retorno previamente definido para uma função

### Descrição

function **uopz\_unset\_return**([string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

function **uopz\_unset\_return**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

Desfaz o valor de retorno da função `function` definida anteriormente por [uopz\_set\_return()](function.uopz-set-return.md).

### Parâmetros

`class`
:   O nome da classe que contém a função.

`function`
:   O nome da função

### Valor Retornado

True em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **uopz\_unset\_return()****

```
<?php
uopz_set_return("strlen", 42);
$len = strlen("Banana");
uopz_unset_return("strlen");
echo $len + strlen("Banana");
?>
```

O exemplo acima produzirá:

```
48
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
