# Constrói um InfiniteIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/infiniteiterator.construct.php

---

# InfiniteIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

InfiniteIterator::\_\_construct — Constrói um InfiniteIterator

### Descrição

public function **InfiniteIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`)

Constrói um [InfiniteIterator](class.infiniteiterator.md)
a partir de um [Iterator](class.iterator.md).

### Parâmetros

`iterator`
:   O iterador para iterar infinitamente.

### Examples

**Exemplo #1 Exemplo de **InfiniteIterator::\_\_construct()****

```
<?php
$arrayit  = new ArrayIterator(array('gato','cachorro'));
$infinite = new InfiniteIterator($arrayit);
$limit    = new LimitIterator($infinite, 0, 7);
foreach($limit as $value)
{
    echo "$value\n";
}
?>
```

O exemplo acima produzirá:

```
gato
cachorro
gato
cachorro
gato
cachorro
gato
```

### Veja também

- [InfiniteIterator::next()](infiniteiterator.next.md) - Movimenta o Iterador Interno para frente ou rebobina

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
