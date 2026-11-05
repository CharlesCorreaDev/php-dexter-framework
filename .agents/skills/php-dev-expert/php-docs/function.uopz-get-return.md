# Obtém um valor de retorno definido anteriormente para uma função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-return.php

---

# uopz\_get\_return

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_get\_return — Obtém um valor de retorno definido anteriormente para uma função

### Descrição

function **uopz\_get\_return**([string](language.types.string.md) `$function`): [mixed](language.types.mixed.md)

function **uopz\_get\_return**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [mixed](language.types.mixed.md)

Obtém o valor de retorno da função `function` definida anteriormente por [uopz\_set\_return()](function.uopz-set-return.md).

### Parâmetros

`class`
:   O nome da classe que contém a função.

`function`
:   O nome da função.

### Valor Retornado

O valor de retorno ou Closure definido anteriormente.

### Examples

**Exemplo #1 Exemplo de **uopz\_get\_return()****

```
<?php
uopz_set_return("strlen", 42);
echo uopz_get_return("strlen");
?>
```

O exemplo acima produzirá:

```
42
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
