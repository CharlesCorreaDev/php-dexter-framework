# Ordena a sequência no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-sequence.sort.php

---

# Ds\Sequence::sort

(PECL ds >= 1.0.0)

Ds\Sequence::sort — 
Ordena a sequência no local

### Descrição

abstract public function **Ds\Sequence::sort**([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

Ordena a sequência no local, usando uma função de comparação `comparator` opcional.

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

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Sequence::sort()****

```
<?php
$sequence = new \Ds\Vector([4, 5, 1, 3, 2]);
$sequence->sort();

print_r($sequence);
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

**Exemplo #2 Exemplo de **Ds\Sequence::sort()** usando um comparador**

```
<?php
$sequence = new \Ds\Vector([4, 5, 1, 3, 2]);

$sequence->sort(function($a, $b) {
    return $b <=> $a;
});

print_r($sequence);
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
