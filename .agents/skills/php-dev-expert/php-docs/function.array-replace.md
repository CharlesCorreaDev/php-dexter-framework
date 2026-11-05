# Substitui elementos de arrays passados no primeiro array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-replace.php

---

# array\_replace

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

array\_replace — Substitui elementos de arrays passados no primeiro array

### Descrição

function **array\_replace**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$replacements`): [array](language.types.array.md)

**array\_replace()** cria um novo array e atribui itens a
ele para cada chave em cada um dos arrays fornecidos. Se uma chave aparecer em múltiplos
arrays de entrada, o valor do array de entrada mais à direita será usado.

**array\_replace()** não processa os itens dos elementos recursivamente,
ela substitui o valor inteiro para cada chave quando faz uma substituição.

### Parâmetros

`array`
:   O array no qual os elementos são substituídos.

`replacements`
:   Arrays dos quais os elementos serão extraídos.
    Os valores dos arrays posteriores substituem os valores anteriores.

### Valor Retornado

Retorna um [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo de **array\_replace()****

```
<?php
$base = array("laranja", "banana", "maçã", "framboesa");
$substituicoes = array(0 => "abacaxi", 4 => "cereja");
$substituicoes2 = array(0 => "uva");

$cesta = array_replace($base, $substituicoes, $substituicoes2);
var_dump($cesta);
?>
```

O exemplo acima produzirá:

```
array(5) {
  [0]=>
  string(3) "uva"
  [1]=>
  string(6) "banana"
  [2]=>
  string(4) "maçã"
  [3]=>
  string(9) "framboesa"
  [4]=>
  string(6) "cereja"
}
```

**Exemplo #2 Exemplo de como arrays aninhados são manipulados**

```
<?php
$base = [ 'cítricas' => [ 'laranja', 'limão' ], 'pomóideas' => [ 'maçã' ] ];
$substituicoes = [ 'cítricas' => [ 'toranja' ] ];
$substituicoes2 = [ 'cítricas' => [ 'kumquat', 'cidra' ], 'pomóideas' => [ 'nêspera' ] ];

$cesta = array_replace($base, $substituicoes, $substituicoes2);
var_dump($cesta);
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["cítricas"]=>
  array(2) {
    [0]=>
    string(7) "kumquat"
    [1]=>
    string(5) "cidra"
  }
  ["pomóideas"]=>
  array(1) {
    [0]=>
    string(7) "nêspera"
  }
}
```

### Veja também

- [array\_replace\_recursive()](function.array-replace-recursive.md) - Substitui elementos de arrays passado no primeiro array recursivamente
- [array\_merge()](function.array-merge.md) - Combina um ou mais arrays

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
