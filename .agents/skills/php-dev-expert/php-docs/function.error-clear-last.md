# Limpa o erro mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.error-clear-last.php

---

# error\_clear\_last

(PHP 7, PHP 8)

error\_clear\_last — Limpa o erro mais recente

### Descrição

function **error\_clear\_last**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Limpa o erro mais recente, fazendo com que não seja possível recuperá-los com
[error\_get\_last()](function.error-get-last.md).

### Examples

**Exemplo #1 Um exemplo de **error\_clear\_last()****

```
<?php
var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());

@$a = $b;

var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
NULL
NULL
array(4) {
  ["type"]=>
  int(8)
  ["message"]=>
  string(21) "Undefined variable: b"
  ["file"]=>
  string(9) "%s"
  ["line"]=>
  int(6)
}
NULL
```

### Veja também

- [Constantes de erro](errorfunc.constants.md)

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
