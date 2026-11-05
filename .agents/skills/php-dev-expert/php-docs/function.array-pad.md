# Expande um array para um certo comprimento utilizando um determinado valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-pad.php

---

# array\_pad

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_pad — Expande um array para um certo comprimento utilizando um determinado valor

### Descrição

function **array\_pad**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$length`, [mixed](language.types.mixed.md) `$value`): [array](language.types.array.md)

**array\_pad()** retorna uma cópia de
`array` expandido para o comprimento especificado por
`length` com o valor
`value`. Se
`length` for positivo então o array é
expandido pela direita, se for negativo, pela esquerda. Se o
valor absoluto de `length` for menor ou igual
ao comprimento de `array`, então ele permanece
inalterado.

### Parâmetros

`array`
:   Array inicial de valores para ser preenchido.

`length`
:   Nova tamanho do array.

`value`
:   Valor para preencher se `array` é menor que
    `length`.

### Valor Retornado

Retorna uma cópia de `array` preenchido pela quantidade especificada
por `length` com o valor
`value`. Se `length` é
positivo, então o array é preenchido na direita, se ele é negativo, então
da esquerda. Se o valor absoluto de `length` é menor
que ou igual ao comprimento de `array` então nenhum
preenchimento ocorre.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Antes do PHP 8.3.0, somente 1.048.576 elementos podiam ser adicionados de uma vez. Agora é limitado apenas pelo tamanho máximo de um array. |

### Examples

**Exemplo #1 Exemplo de **array\_pad()****

```
<?php
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// $result é array(12, 10, 9, 0, 0)
echo join(', ', $result), PHP_EOL;

$result = array_pad($input, -7, -1);
// $result é array(-1, -1, -1, -1, 12, 10, 9)
echo join(', ', $result), PHP_EOL;

$result = array_pad($input, 2, "noop");
// Não será expandido
echo join(', ', $result), PHP_EOL;
?>
```

### Veja também

- [array\_fill()](function.array-fill.md) - Preenche um array com valores
- [range()](function.range.md) - Cria um array contendo uma faixa de elementos

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
