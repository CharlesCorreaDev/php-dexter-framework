# Constrói um RecursiveIteratorIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.construct.php

---

# RecursiveIteratorIterator::\_\_construct

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

RecursiveIteratorIterator::\_\_construct — Constrói um RecursiveIteratorIterator

### Descrição

public function **RecursiveIteratorIterator::\_\_construct**([Traversable](class.traversable.md) `$iterator`, [int](language.types.integer.md) `$mode` = **`RecursiveIteratorIterator::LEAVES_ONLY`**, [int](language.types.integer.md) `$flags` = 0)

Cria um [RecursiveIteratorIterator](class.recursiveiteratoriterator.md) a partir de um [RecursiveIterator](class.recursiveiterator.md).

### Parâmetros

`iterator`
:   O iterador a partir do qual está sendo construído. Pode ser um
    [RecursiveIterator](class.recursiveiterator.md) ou [IteratorAggregate](class.iteratoraggregate.md).

`mode`
:   Modo opcional. Valores possíveis são

    - **`RecursiveIteratorIterator::LEAVES_ONLY`**
      - O padrão. Lista apenas folhas na iteração.
    - **`RecursiveIteratorIterator::SELF_FIRST`**
      - Lista folhas e pais na iteração, com os pais vindo primeiro.
    - **`RecursiveIteratorIterator::CHILD_FIRST`**
      - Lista folhas e pais na iteração, com as folhas vindo primeiro.

`flags`
:   Opção opcional. Valores possíveis são **`RecursiveIteratorIterator::CATCH_GET_CHILD`**,
    que então ignorará exceções lançadas em chamadas para **RecursiveIteratorIterator::getChildren()**.

### Examples

**Exemplo #1 Iterando um RecursiveIteratorIterator**

```
<?php
$array = array(
    array(
        array(
            array(
                'leaf-0-0-0-0',
                'leaf-0-0-0-1'
            ),
            'leaf-0-0-0'
        ),
        array(
            array(
                'leaf-0-1-0-0',
                'leaf-0-1-0-1'
            ),
            'leaf-0-1-0'
        ),
        'leaf-0-0'
    )
);

$iterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator($array),
    $mode
);
foreach ($iterator as $key => $leaf) {
    echo "$key => $leaf", PHP_EOL;
}
?>
```

Saída com `$mode = RecursiveIteratorIterator::LEAVES_ONLY`

```
0 => leaf-0-0-0-0
1 => leaf-0-0-0-1
0 => leaf-0-0-0
0 => leaf-0-1-0-0
1 => leaf-0-1-0-1
0 => leaf-0-1-0
0 => leaf-0-0
```

Saída com `$mode = RecursiveIteratorIterator::SELF_FIRST`

```
0 => Array
0 => Array
0 => Array
0 => leaf-0-0-0-0
1 => leaf-0-0-0-1
1 => leaf-0-0-0
1 => Array
0 => Array
0 => leaf-0-1-0-0
1 => leaf-0-1-0-1
1 => leaf-0-1-0
2 => leaf-0-0
```

Saída com `$mode = RecursiveIteratorIterator::CHILD_FIRST`

```
0 => leaf-0-0-0-0
1 => leaf-0-0-0-1
0 => Array
1 => leaf-0-0-0
0 => Array
0 => leaf-0-1-0-0
1 => leaf-0-1-0-1
0 => Array
1 => leaf-0-1-0
1 => Array
2 => leaf-0-0
0 => Array
```

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
