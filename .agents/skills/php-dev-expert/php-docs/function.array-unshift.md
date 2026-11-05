# Adiciona um ou mais elementos no início de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-unshift.php

---

# array\_unshift

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_unshift — Adiciona um ou mais elementos no início de um array

### Descrição

function **array\_unshift**([array](language.types.array.md) `&$array`, [mixed](language.types.mixed.md) `...$values`): [int](language.types.integer.md)

**array\_unshift()** adiciona os elementos passados como
argumentos no início de `array`. Note que a lista
de elementos é adicionada como um todo, de forma que eles ficam na
mesma ordem. Todas as chaves numéricas serão modificadas para começar a
contar de zero enquanto chaves literais permanecerão inalteradas.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Parâmetros

`array`
:   O array de entrada.

`values`
:   Os valores a serem adicionados.

### Valor Retornado

Retorna o novo número de elementos em `array`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Essa função agora pode ser chamada com apenas um parâmetro. Anteriomente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo de **array\_unshift()****

```
<?php

$cesta = [
    "laranja",
    "banana"
];

array_unshift($cesta, "melancia", "morango");

var_dump($cesta);

?>
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  string(8) "melancia"
  [1]=>
  string(7) "morango"
  [2]=>
  string(7) "laranja"
  [3]=>
  string(6) "banana"
}
```

**Exemplo #2 Uso de arrays associativos**

Se um array associativo é pre anexado a outro array associativo,
o array anexado é numeralmente indexado no array anterior.

```
<?php

$frutas = [
    'maca' => [
        'McIntosh' => 'vermelho',
        'Granny Smith' => 'verde',
    ],
    'laranja' => [
        'Navel' => 'laranja',
        'Valencia' => 'laranja',
    ],
];

$vegetais = [
    'alface' => [
        'Iceberg' => 'verde',
        'Butterhead' => 'verde',
    ],
    'cenoura' => [
        'Deep Purple Hybrid' => 'roxo',
        'Imperator' => 'laranja',
    ],
    'pepino' => [
        'Kirby' => 'verde',
        'Gherkin' => 'verde',
    ],
];

array_unshift($frutas, $vegetais);

var_dump($frutas);

?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  array(3) {
    ["alface"]=>
    array(2) {
      ["Iceberg"]=>
      string(5) "verde"
      ["Butterhead"]=>
      string(5) "verde"
    }
    ["cenoura"]=>
    array(2) {
      ["Deep Purple Hybrid"]=>
      string(4) "roxo"
      ["Imperator"]=>
      string(7) "laranja"
    }
    ["pepino"]=>
    array(2) {
      ["Kirby"]=>
      string(5) "verde"
      ["Gherkin"]=>
      string(5) "verde"
    }
  }
  ["maca"]=>
  array(2) {
    ["McIntosh"]=>
    string(8) "vermelho"
    ["Granny Smith"]=>
    string(5) "verde"
  }
  ["laranja"]=>
  array(2) {
    ["Navel"]=>
    string(7) "laranja"
    ["Valencia"]=>
    string(7) "laranja"
  }
}
```

### Veja também

- [array\_merge()](function.array-merge.md) - Combina um ou mais arrays
- [array\_shift()](function.array-shift.md) - Retira o primeiro elemento de um array
- [array\_push()](function.array-push.md) - Adiciona um ou mais elementos no final de um array
- [array\_pop()](function.array-pop.md) - Extrai um elemento do final do array

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
