# Constrói um AppendIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/appenditerator.construct.php

---

# AppendIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

AppendIterator::\_\_construct — Constrói um AppendIterator

### Descrição

public function **AppendIterator::\_\_construct**()

Constrói um AppendIterator.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Iterando o AppendIterator com foreach**

```
<?php
$pizzas   = new ArrayIterator(array('Margarita', 'Siciliana', 'Hawaii'));
$toppings = new ArrayIterator(array('Cheese', 'Anchovies', 'Olives', 'Pineapple', 'Ham'));

$appendIterator = new AppendIterator;
$appendIterator->append($pizzas);
$appendIterator->append($toppings);

foreach ($appendIterator as $key => $item) {
    echo $key . ' => ' . $item . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
0 => Margarita
1 => Siciliana
2 => Hawaii
0 => Cheese
1 => Anchovies
2 => Olives
3 => Pineapple
4 => Ham
```

**Exemplo #2 Iterando o AppendIterator com a API do AppendIterator**

```
<?php
$pizzas   = new ArrayIterator(array('Margarita', 'Siciliana', 'Hawaii'));
$toppings = new ArrayIterator(array('Cheese', 'Anchovies', 'Olives', 'Pineapple', 'Ham'));

$appendIterator = new AppendIterator;
$appendIterator->append($pizzas);
$appendIterator->append($toppings);

while ($appendIterator->valid()) {
    printf(
        '%s => %s => %s%s',
        $appendIterator->getIteratorIndex(),
        $appendIterator->key(),
        $appendIterator->current(),
        PHP_EOL
    );
    $appendIterator->next();
}
?>
```

O exemplo acima produzirá:

```
0 => 0 => Margarita
0 => 1 => Siciliana
0 => 2 => Hawaii
1 => 0 => Cheese
1 => 1 => Anchovies
1 => 2 => Olives
1 => 3 => Pineapple
1 => 4 => Ham
```

### Notas

**Cuidado**

Ao usar [iterator\_to\_array()](function.iterator-to-array.md) para copiar os valores do AppendIterator
para um array, você deve definir o argumento opcional `use_key` como
**`false`**. Quando `use_key` não é **`false`**, quaisquer chaves recorrentes em
iteradores internos serão sobrescritas no array retornado. Não há como preservar as chaves originais.

### Veja também

- [AppendIterator::append()](appenditerator.append.md) - Acrescenta um iterador

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
