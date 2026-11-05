# Substitui elementos de arrays passado no primeiro array recursivamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-replace-recursive.php

---

# array\_replace\_recursive

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

array\_replace\_recursive — Substitui elementos de arrays passado no primeiro array recursivamente

### Descrição

function **array\_replace\_recursive**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$replacements`): [array](language.types.array.md)

**array\_replace\_recursive()** substitui os valores de
`array` pelos mesmos valores de todos os arrays
seguintes. Se uma chave do primeiro array existir no segundo array, seu valor
será substituído pelo valor do segundo array. Se a chave existir no segundo array,
e não no primeiro, ela será criada no primeiro array.
Se uma chave existir apenas no primeiro array, ela será deixada como está.
Se vários arrays forem passados para substituição, eles serão processados em ordem,
o array posterior sobrescrevendo os valores anteriores.

**array\_replace\_recursive()** é recursivo: ele será recursivo
em arrays e aplicará o mesmo processo ao valor interno.

Quando o valor do primeiro array for escalar, ele será substituído
pelo valor do segundo array, seja ele escalar ou array.
Quando o valor no primeiro array e no segundo array são
ambos arrays, **array\_replace\_recursive()** substituirá
seus respectivos valores recursivamente.

### Parâmetros

`array`
:   O array no qual os elementos são substituídos.

`replacements`
:   Arrays dos quais os elementos serão extraídos.

### Valor Retornado

Returns an [array](language.types.array.md).

### Examples

**Exemplo #1 Exemplo de **array\_replace\_recursive()****

```
<?php
$base = array('frutas_citricas' => array("laranja") , 'frutas_vermelhas' => array("amora", "framboesa"));
$substituicoes = array('frutas_citricas' => array('abacaxi'), 'frutas_vermelhas' => array('mirtilo'));

$cesta = array_replace_recursive($base, $substituicoes);
print_r($cesta);

$cesta = array_replace($base, $substituicoes);
print_r($cesta);
?>
```

O exemplo acima produzirá:

```
Array
(
    [frutas_citricas] => Array
        (
            [0] => abacaxi
        )

    [frutas_vermelhas] => Array
        (
            [0] => mirtilo
            [1] => framboesa
        )

)
Array
(
    [frutas_citricas] => Array
        (
            [0] => abacaxi
        )

    [frutas_vermelhas] => Array
        (
            [0] => mirtilo
        )

)
```

**Exemplo #2 **array\_replace\_recursive()** e recursive behavior**

```
<?php
$base = array('frutas_citricas' => array("laranja") , 'frutas_vermelhas' => array("amora", "framboesa"), 'outras' => 'banana' );
$substituicoes = array('frutas_citricas' => 'abacaxi', 'frutas_vermelhas' => array('mirtilo'), 'outras' => array('lichia'));
$substituicoes2 = array('frutas_citricas' => array('abacaxi'), 'frutas_vermelhas' => array('mirtilo'), 'outras' => 'lichia');

$cesta = array_replace_recursive($base, $substituicoes, $substituicoes2);
print_r($cesta);

?>
```

O exemplo acima produzirá:

```
Array
(
    [frutas_citricas] => Array
        (
            [0] => abacaxi
        )

    [frutas_vermelhas] => Array
        (
            [0] => mirtilo
            [1] => framboesa
        )

    [outras] => lichia
)
```

### Veja também

- [array\_replace()](function.array-replace.md) - Substitui elementos de arrays passados no primeiro array
- [array\_merge\_recursive()](function.array-merge-recursive.md) - Mescla um ou mais arrays recursivamente

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
