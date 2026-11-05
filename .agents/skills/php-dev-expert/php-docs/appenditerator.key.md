# Obtém a chave atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.key.php

---

# AppendIterator::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::key — Obtém a chave atual

### Descrição

public function **AppendIterator::key**(): scalar

Obtém a chave atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A chave atual se for válida ou **`null`** caso contrário.

### Examples

**Exemplo #1 Exemplo básico de **AppendIterator::key()****

```
<?php
$array_a = new ArrayIterator(array('a' => 'aardwolf', 'b' => 'bear', 'c' => 'capybara'));
$array_b = new ArrayIterator(array('apple', 'orange', 'lemon'));

$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);

// Iteração manual
$iterator->rewind();
while ($iterator->valid()) {
    echo $iterator->key() . ' ' . $iterator->current() . PHP_EOL;
    $iterator->next();
}

echo PHP_EOL;

// Com foreach
foreach ($iterator as $key => $current) {
    echo $key . ' ' . $current . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
a aardwolf
b bear
c capybara
0 apple
1 orange
2 lemon

a aardwolf
b bear
c capybara
0 apple
1 orange
2 lemon
```

### Veja também

- [Iterator::key()](iterator.key.md) - Retorna a chave do elemento atual
- [AppendIterator::current()](appenditerator.current.md) - Obtém o valor atual
- [AppendIterator::valid()](appenditerator.valid.md) - Verifica a validade do elemento atual
- [AppendIterator::next()](appenditerator.next.md) - Move para o próximo elemento
- [AppendIterator::rewind()](appenditerator.rewind.md) - Rebobina o Iterador

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
