# Retira o primeiro elemento de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-shift.php

---

# array\_shift

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_shift — Retira o primeiro elemento de um array

### Descrição

function **array\_shift**([array](language.types.array.md) `&$array`): [mixed](language.types.mixed.md)

**array\_shift()** retira o primeiro elemento de
`array` e o retorna, diminuindo
`array` em um elemento e movendo todos os outros
elementos para trás. Todas as chaves numéricas serão alteradas para começar a contar a partir de zero,
enquanto chaves literais não serão afetadas.

> **Nota**:
>
> Após o uso desta função,
> assim como na função [reset()](function.reset.md), o ponteiro interno do [array](language.types.array.md) fornecido apontará para o
> primeiro elemento.

### Parâmetros

`array`
:   O array de entrada.

### Valor Retornado

Retorna o valor removido, ou **`null`** se `array` for
vazio ou não é um array.

### Examples

**Exemplo #1 Exemplo da **array\_shift()****

```
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => banana
    [1] => apple
    [2] => raspberry
)
```

e `orange` seria passado para
$fruit.

### Veja também

- [array\_unshift()](function.array-unshift.md) - Adiciona um ou mais elementos no início de um array
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
