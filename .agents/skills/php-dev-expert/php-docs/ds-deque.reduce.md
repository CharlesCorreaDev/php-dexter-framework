# Reduz o deque a um único valor usando uma função de retorno de chamada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-deque.reduce.php

---

# Ds\Deque::reduce

(PECL ds >= 1.0.0)

Ds\Deque::reduce — Reduz o deque a um único valor usando uma função de retorno de chamada

### Descrição

public function **Ds\Deque::reduce**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

Reduz o deque a um único valor usando uma função de retorno de chamada.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$carry`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    `carry`
    :   O valor de retorno da chamada de retorno anterior ou `initial` se
        for a primeira iteração.

    `value`
    :   O valor da iteração atual.

`initial`
:   O valor inicial do valor de retorno. Pode ser **`null`**.

### Valor Retornado

O valor de retorno da chamada de retorno final.

### Examples

**Exemplo #1 Exemplo de **Ds\Deque::reduce()** com valor inicial**

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

$callback = function($carry, $value) {
    return $carry * $value;
};

var_dump($deque->reduce($callback, 5));

// Iterations:
//
// $carry = $initial = 5
//
// $carry = $carry * 1 =  5
// $carry = $carry * 2 = 10
// $carry = $carry * 3 = 30
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(30)
```

**Exemplo #2 Exemplo de **Ds\Deque::reduce()** sem um valor inicial**

```
<?php
$deque = new \Ds\Deque([1, 2, 3]);

var_dump($deque->reduce(function($carry, $value) {
    return $carry + $value + 5;
}));

// Iterations:
//
// $carry = $initial = null
//
// $carry = $carry + 1 + 5 =  6
// $carry = $carry + 2 + 5 = 13
// $carry = $carry + 3 + 5 = 21
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(21)
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
