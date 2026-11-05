# Recupera a pilha de rastreio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.gettrace.php

---

# Error::getTrace

(PHP 7, PHP 8)

Error::getTrace — Recupera a pilha de rastreio

### Descrição

final public function **Error::getTrace**(): [array](language.types.array.md)

Recupera a pilha de rastreio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recupera a pilha de rastreio como um [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo do método **Error::getTrace()****

```
<?php
function test() {
 throw new Error;
}

try {
 test();
} catch(Error $e) {
 var_dump($e->getTrace());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  array(4) {
    ["file"]=>
    string(22) "/home/bjori/tmp/ex.php"
    ["line"]=>
    int(7)
    ["function"]=>
    string(4) "test"
    ["args"]=>
    array(0) {
    }
  }
}
```

### Veja também

- [Throwable::getTrace()](throwable.gettrace.md) - Obtém o rastreamento de pilha

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
