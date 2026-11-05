# Localiza o maior valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.max.php

---

# max

(PHP 4, PHP 5, PHP 7, PHP 8)

max — Localiza o maior valor

### Descrição

function **max**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `...$values`): [mixed](language.types.mixed.md)

Forma alternativa (não suportada com argumentos nomeados):

function **max**([array](language.types.array.md) `$value_array`): [mixed](language.types.mixed.md)

Se o primeiro e único parâmetro for um array, **max()**
retorna o maior valor do array. Se no mínimo dois parâmetros forem fornecidos,
**max()** retorna o maior desses valores.

> **Nota**:
>
> Valores de diferentes tipos serão comparados utilizando as [regras padrões de comparação](language.operators.comparison.md). Por exemplo, uma [string](language.types.string.md) não numérica será
> comparada a um [int](language.types.integer.md) como se fosse `0`, mas várias
> [string](language.types.string.md)s não numéricas serão comparadas alfanumericamente. O valor real retornado terá o tipo
> do original, sem nenhuma conversão aplicada.

**Cuidado**

Cuidado ao passar argumentos de tipos diferentes, pois
**max()** pode produzir resultados imprevisíveis.

### Parâmetros

`value`
:   Qualquer valor [comparável](language.operators.comparison.md).

`values`
:   Quaisquer valores [comparáveis](language.operators.comparison.md).

`value_array`
:   Um array contendo os valores.

### Valor Retornado

**max()** retorna o parâmetro considerado o "maior" de acordo com as comparações
padrões. Se vários valores de tipos diferentes forem considerados iguais (por exemplo, `0`
e `'abc'`) então o primeiro fornecido à função será retornado.

### Erros/Exceções

Se um array vazio for informado, **max()** lança um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **max()** lança um [ValueError](class.valueerror.md) em caso de erros. Anteriormente, retornava **`false`** e emitia um alerta **`E_WARNING`**. |
| 8.0.0 | Como as [comparações de strings com números](migration80.incompatible.md#migration80.incompatible.core.string-number-comparision) foram alteradas, **max()** não mais retorna um valor diferente por conta da ordem dos argumentos informados. |

### Examples

**Exemplo #1 Exemplos de **max()****

```
<?php
echo max(2, 3, 1, 6, 7), PHP_EOL;  // 7
echo max(array(2, 4, 5)), PHP_EOL; // 5

// Aqui na prática compara-se -1 < 0, então 'hello' é o maior valor
echo max('hello', -1), PHP_EOL;    // hello

// Arrays de múltiplos valores e tamanhos diferentes, retora o mais longo
$val = max(array(2, 2, 2), array(1, 1, 1, 1)); // array(1, 1, 1, 1)
var_dump($val);

// Em arrays de mesmo tamanho compara-se da esquerda para direita
// e nesse exemplo: 2 == 2, mas 5 > 4
$val = max(array(2, 4, 8), array(2, 5, 1)); // array(2, 5, 1)
var_dump($val);

// Se um array e um não array são informados, o array será retornado
// pois é considerado maior que qualquer outro valor
$val = max('string', array(2, 5, 7), 42);   // array(2, 5, 7)
var_dump($val);

// Se um argumento é NULL ou booleano, ele será comparado contra
// outros valores utilizando a regra FALSE < TRUE independente dos tipos envolvidos.
// No exemplo abaixo -10 é tratado como TRUE na comparação
$val = max(-10, FALSE); // -10
var_dump($val);

// 0 por outro lado é considerado false, de forma que é "menor que" TRUE
$val = max(0, TRUE); // TRUE
var_dump($val);
?>
```

### Veja também

- [min()](function.min.md) - Encontra o menor valor
- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable

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
