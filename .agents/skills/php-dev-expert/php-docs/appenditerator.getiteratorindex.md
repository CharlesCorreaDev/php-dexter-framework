# Obtém um índice dos iteradores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.getiteratorindex.php

---

# AppendIterator::getIteratorIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

AppendIterator::getIteratorIndex — Obtém um índice dos iteradores

### Descrição

public function **AppendIterator::getIteratorIndex**(): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o índice do iterador interno atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o índice baseado em zero, inteiro, do iterador interno atual se existir, ou **`null`** caso contrário.

### Examples

**Exemplo #1 Exemplo básico de **AppendIterator.getIteratorIndex()****

```
<?php
$array_a = new ArrayIterator(array('a' => 'aardwolf', 'b' => 'bear', 'c' => 'capybara'));
$array_b = new ArrayIterator(array('apple', 'orange', 'lemon'));

$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);

foreach ($iterator as $key => $current) {
    echo $iterator->getIteratorIndex() . '  ' . $key . ' ' . $current . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
0  a aardwolf
0  b bear
0  c capybara
1  0 apple
1  1 orange
1  2 lemon
```

### Veja também

- **AppendIterator::getInnerIterator()**
- [AppendIterator::getArrayIterator()](appenditerator.getarrayiterator.md) - Obtém o ArrayIterator

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
