# Obtém a stack trace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.gettrace.php

---

# Exception::getTrace

(PHP 5, PHP 7, PHP 8)

Exception::getTrace — Obtém a stack trace

### Descrição

final public function **Exception::getTrace**(): [array](language.types.array.md)

Retorna a stack trace da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a stack trace da exceção como um [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo da **Exception::getTrace()****

```
<?php
function test() {
 throw new Exception;
}

try {
 test();
} catch(Exception $e) {
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
