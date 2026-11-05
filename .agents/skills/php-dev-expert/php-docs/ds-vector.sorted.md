# Retorna uma cópia ordenada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.sorted.php

---

# Ds\Vector::sorted

(PECL ds >= 1.0.0)

Ds\Vector::sorted — Retorna uma cópia ordenada

### Descrição

public function **Ds\Vector::sorted**([callable](language.types.callable.md) `$comparator` = ?): [Ds\Vector](class.ds-vector.md)

Retorna uma cópia ordenada, usando uma função de comparação `comparator` opcional.

### Parâmetros

`comparator`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Retorna uma cópia ordenada do vetor.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::sorted()****

```
<?php
$vector = new \Ds\Vector([4, 5, 1, 3, 2]);

print_r($vector->sorted());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
```

**Exemplo #2 Exemplo de **Ds\Vector::sorted()** usando um comparador**

```
<?php
$vector = new \Ds\Vector([4, 5, 1, 3, 2]);

$sorted = $vector->sorted(function($a, $b) {
    return $b <=> $a;
});

print_r($sorted);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Vector Object
(
    [0] => 5
    [1] => 4
    [2] => 3
    [3] => 2
    [4] => 1
)
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
