# Retorna a posição atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/limititerator.getposition.php

---

# LimitIterator::getPosition

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

LimitIterator::getPosition — Retorna a posição atual

### Descrição

public function **LimitIterator::getPosition**(): [int](language.types.integer.md)

Obtém a posição atual baseada em zero do [Iterator](class.iterator.md) interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A posição atual.

### Examples

**Exemplo #1 Exemplos de **LimitIterator::getPosition()****

```
<?php
$fruits = array(
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry',
    'd' => 'damson',
    'e' => 'elderberry'
);
$array_it = new ArrayIterator($fruits);
$limit_it = new LimitIterator($array_it, 2, 3);
foreach ($limit_it as $item) {
    echo $limit_it->getPosition() . ' ' . $item . "\n";
}
?>
```

O exemplo acima produzirá:

```
2 cherry
3 damson
4 elderberry
```

### Veja também

- [FilterIterator::key()](filteriterator.key.md) - Retorna a chave do elemento atual

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
