# Remove uma parte array e a substitui por outra coisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-splice.php

---

# array\_splice

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_splice — Remove uma parte array e a substitui por outra coisa

### Descrição

function **array\_splice**(  
    [array](language.types.array.md) `&$array`,  
    [int](language.types.integer.md) `$offset`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [mixed](language.types.mixed.md) `$replacement` = []  
): [array](language.types.array.md)

Remove os elementos especificados por `offset` e
`length` do array `array`,
e os substitui com os elementos do
array `replacement`, se for especificado.

> **Nota**:
>
> Chaves numéricas em `array` não são preservadas.

> **Nota**:
>
> Se `replacement` não for um array, ele será
> [convertido](language.types.array.md#language.types.array.casting)
> para um array (i.e. `(array) $replacement`). Isso pode resultar em um
> comportamento inesperado ao usar um objeto ou `replacement` **`null`**.

### Parâmetros

`array`
:   O array de entrada.

`offset`
:   Se `offset` for positivo então o começo da
    região removida será nesse deslocamento a partir do início do
    array `array`.

    Se `offset` for negativo então o começo da
    região removida será nesse deslocamento a partir do final do
    array `array`.

`length`
:   Se `length` for omitido, remove tudo
    a partir de `offset` até o final do array.

    Se `length` for especificado e for positivo,
    então essa quantidade de elementos será removida.

    Se `length` for especificado e for negativo,
    então o final da região removida será essa quantidade de elementos
    a partir do final do array.

    Se `length` for especificado e for zero,
    nenhum elemento será removido.

    **Dica**

    Para remover tudo a partir de `offset` até o final do
    array quando `replacement` também é especificado,
    use `count($input)` para `length`.

`replacement`
:   Se o array `replacement` for especificado, então os
    elementos removidos serão substituídos pelo elementos desse array.

    Se `offset` e `length`
    são tais que nada é removido, então os elementos do
    array `replacement` serão inseridos no lugar
    especificado pelo `offset`.

    > **Nota**:
    >
    > Chaves em `replacement` não são preservadas.

    Se `replacement` for de apenas um elemento
    então não é necessário colocar `array()` ou colchetes
    ao redor dele, a não ser que elementos seja um array em si, um objeto ou **`null`**.

### Valor Retornado

Retorna um array que consiste nos elementos extraídos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora é anulável. |

### Examples

**Exemplo #1 Exemplos da **array\_splice()****

```
<?php
$input = array("vermelho", "verde", "azul", "amarelo");
array_splice($input, 2);
var_dump($input);

$input = array("vermelho", "verde", "azul", "amarelo");
array_splice($input, 1, -1);
var_dump($input);

$input = array("vermelho", "verde", "azul", "amarelo");
array_splice($input, 1, count($input), "laranja");
var_dump($input);

$input = array("vermelho", "verde", "azul", "amarelo");
array_splice($input, -1, 1, array("preto", "marrom"));
var_dump($input);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  string(3) "vermelho"
  [1]=>
  string(5) "verde"
}
array(2) {
  [0]=>
  string(3) "vermelho"
  [1]=>
  string(6) "amarelo"
}
array(2) {
  [0]=>
  string(3) "vermelho"
  [1]=>
  string(6) "laranja"
}
array(5) {
  [0]=>
  string(3) "vermelho"
  [1]=>
  string(5) "verde"
  [2]=>
  string(4) "azul"
  [3]=>
  string(5) "preto"
  [4]=>
  string(6) "marrom"
}
```

**Exemplo #2 Declarações equivalentes a vários exemplos da **array\_splice()****

As seguintes declarações são equivalentes:

```
<?php

// adiciona dois elementos a $input
array_push($input, $x, $y);
array_splice($input, count($input), 0, array($x, $y));

// remove o último elemento de $input
array_pop($input);
array_splice($input, -1);

// remove o primeiro elemento de $input
array_shift($input);
array_splice($input, 0, 1);

// insere um elemento no início de $input
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));

// substitui o valor em $input no índice $x
$input[$x] = $y; // para arrays onde a chave é igual ao deslocamento
array_splice($input, $x, 1, $y);

?>
```

### Veja também

- [array\_merge()](function.array-merge.md) - Combina um ou mais arrays
- [array\_slice()](function.array-slice.md) - Extrai uma parcela de um array
- [unset()](function.unset.md) - unset remove a definição de uma variável informada

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
