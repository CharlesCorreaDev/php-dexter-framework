# Retorna o último Throwable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/error.getprevious.php

---

# Error::getPrevious

(PHP 7, PHP 8)

Error::getPrevious — Retorna o último Throwable

### Descrição

final public function **Error::getPrevious**(): [?](language.types.null.md)[Throwable](class.throwable.md)

Retorna Throwable anterior (o terceiro parâmetro do [Error::\_\_construct()](error.construct.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna [Throwable](class.throwable.md) anterior, se disponível,
ou **`null`**.

### Examples

**Exemplo #1 Exemplo do método **Error::getPrevious()****

Iterando e imprimindo a pilha de erro.

```
<?php
class MeuErroCustomizado extends Error {}

function fazAlgumaCoisa() {
    try {
        throw new TypeError("Você está fazendo errado!", 112);
    } catch(Error $e) {
        throw new MeuErroCustomizado("Algo aconteceu.", 911, $e);
    }
}

try {
    fazAlgumaCoisa();
} catch(Error $e) {
    do {
        printf("%s:%d %s (%d) [%s]\n", $e->getFile(), $e->getLine(), $e->getMessage(), $e->getCode(), get_class($e));
    } while($e = $e->getPrevious());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
/home/bjori/ex.php:8 Algo aconteceu. (911) [MeuErroCustomizado]
/home/bjori/ex.php:6 Você está fazendo errado! (112) [TypeError]
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
