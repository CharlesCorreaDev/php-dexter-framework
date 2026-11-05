# Reduz a sequência a um único valor usando uma função de callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.reduce.php

---

# Ds\Sequence::reduce

(PECL ds >= 1.0.0)

Ds\Sequence::reduce — Reduz a sequência a um único valor usando uma função de callback

### Descrição

abstract public function **Ds\Sequence::reduce**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

Reduz a sequência a um único valor usando uma função de callback.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$carry`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    `carry`
    :   O valor de retorno da callback anterior, ou `initial` se
        for a primeira iteração.

    `value`
    :   O valor da iteração atual.

`initial`
:   O valor inicial do valor de transporte (carry). Pode ser **`null`**.

### Valor Retornado

O valor de retorno da callback final.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::reduce()** com valor inicial**

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);

$callback = function($carry, $value) {
    return $carry * $value;
};

var_dump($sequence->reduce($callback, 5));

// Iterações:
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

**Exemplo #2 Exemplo de **Ds\Sequence::reduce()** sem valor inicial**

```
<?php
$sequence = new \Ds\Vector([1, 2, 3]);

var_dump($sequence->reduce(function($carry, $value) {
    return $carry + $value + 5;
}));

// Iterações:
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
