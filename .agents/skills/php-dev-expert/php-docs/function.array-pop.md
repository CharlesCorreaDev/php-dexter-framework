# Extrai um elemento do final do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-pop.php

---

# array\_pop

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_pop — Extrai um elemento do final do array

### Descrição

function **array\_pop**([array](language.types.array.md) `&$array`): [mixed](language.types.mixed.md)

**array\_pop()** extrai e retorna o valor do
último elemento de `array`, diminuindo o
`array` em um elemento.

> **Nota**:
>
> Após o uso desta função,
> assim como na função [reset()](function.reset.md), o ponteiro interno do [array](language.types.array.md) fornecido apontará para o
> primeiro elemento.

### Parâmetros

`array`
:   O array para obter os valores.

### Valor Retornado

Retorna o valor do último elemento de `array`.
Se `array` é vazio,
**`null`** será retornado.

### Examples

**Exemplo #1 Exemplo da **array\_pop()****

```
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
?>
```

Depois disso, $stack irá conter apenas 3 elementos:

```
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
)
```

e `raspberry` será passado para
$fruit.

### Veja também

- [array\_push()](function.array-push.md) - Adiciona um ou mais elementos no final de um array
- [array\_shift()](function.array-shift.md) - Retira o primeiro elemento de um array
- [array\_unshift()](function.array-unshift.md) - Adiciona um ou mais elementos no início de um array

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
