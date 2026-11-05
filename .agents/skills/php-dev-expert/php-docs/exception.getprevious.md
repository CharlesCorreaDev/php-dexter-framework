# Retorna o Throwable anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exception.getprevious.php

---

# Exception::getPrevious

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Exception::getPrevious — Retorna o Throwable anterior

### Descrição

final public function **Exception::getPrevious**(): [?](language.types.null.md)[Throwable](class.throwable.md)

Retorna o [Throwable](class.throwable.md) anterior
(o terceiro valor passado no construtor [Exception::\_\_construct()](exception.construct.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a [Throwable](class.throwable.md) anterior se disponível,
ou senão **`null`**.

### Examples

**Exemplo #1 Exemplo de **Exception::getPrevious()****

Iterando e imprimindo a pilha de erro.

```
<?php
class MyCustomException extends Exception {}

function doStuff() {
    try {
        throw new InvalidArgumentException("Primeiro erro lançado.", 112);
    } catch(Exception $e) {
        throw new MyCustomException("Segundo erro lançado.", 911, $e);
    }
}

try {
    doStuff();
} catch(Exception $e) {
    do {
        printf("%s:%d %s (%d) [%s]\n", $e->getFile(), $e->getLine(), $e->getMessage(), $e->getCode(), get_class($e));
    } while($e = $e->getPrevious());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/home/bjori/ex.php:8 Segundo erro lançado. (911) [MyCustomException]
/home/bjori/ex.php:6 Primeiro erro lançado. (112) [InvalidArgumentException]
```

### Veja também

- [Throwable::getPrevious()](throwable.getprevious.md) - Retorna o Throwable anterior

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
