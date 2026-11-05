# Interrompe o perfilador xhprof

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xhprof-disable.php

---

# xhprof\_disable

(PECL xhprof >= 0.9.0)

xhprof\_disable — Interrompe o perfilador xhprof

### Descrição

function **xhprof\_disable**(): [?](language.types.null.md)[array](language.types.array.md)

Interrompe o perfilador e retorna dados xhprof da execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de dados xhprof da execução.
Retorna **`null`** se a perfilagem não estiver habilitada.

### Examples

**Exemplo #1 Exemplo de **xhprof\_disable()****

```
<?php
xhprof_enable();

$foo = strlen("foo bar");

$xhprof_data = xhprof_disable();

print_r($xhprof_data);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [main()==>strlen] => Array
        (
            [ct] => 1
            [wt] => 279
        )

    [main()==>xhprof_disable] => Array
        (
            [ct] => 1
            [wt] => 9
        )

    [main()] => Array
        (
            [ct] => 1
            [wt] => 610
        )

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
