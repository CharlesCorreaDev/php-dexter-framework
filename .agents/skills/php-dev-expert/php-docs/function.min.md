# Encontra o menor valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.min.php

---

# min

(PHP 4, PHP 5, PHP 7, PHP 8)

min — Encontra o menor valor

### Descrição

function **min**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `...$values`): [mixed](language.types.mixed.md)

Forma alternativa (não suportada com argumentos nomeados):

function **min**([array](language.types.array.md) `$value_array`): [mixed](language.types.mixed.md)

Se o primeiro e único argumento é um array, **min()**
retorna o menor valor no array. Se no mínimo dois parâmetros são fornecidos,
**min()** retorna o menor deles.

> **Nota**:
>
> Valores de tipos diferentes serão comparados utilizando [as regras padrões de comparação](language.operators.comparison.md). Por exemplo, uma [string](language.types.string.md) não numérica será
> comparada com um inteiro [int](language.types.integer.md) como se fosse `0`, mas várias
> [string](language.types.string.md)s não numéricos serão comparadas alfanumericamente. O valor real retornado terá o tipo
> do original, sem nenhuma conversão aplicada.

**Cuidado**

Cuidado ao passar argumentos de tipos diferentes, pois
**min()** pode produzir resultados imprevisíveis.

### Parâmetros

`value`
:   Qualquer valor [comparável](language.operators.comparison.md).

`values`
:   Quaisquer valores [comparáveis](language.operators.comparison.md).

`value_array`
:   Um array contendo os valores.

### Valor Retornado

**min()** retorna o valor considerado o "menor" de acordo com as comparações
padrão. Se valores de diferentes tipos forem avaliados como iguais (por exemplo `0`
e `'abc'`) então o primeiro valor fornecido à função será retornado.

### Erros/Exceções

Se um array vazio for informado, **min()** lança um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **min()** lança um [ValueError](class.valueerror.md) em caso de falhas; anteriormente retornava **`false`** e emitia um alerta **`E_WARNING`**. |
| 8.0.0 | Como as [comparações de número e string](migration80.incompatible.md#migration80.incompatible.core.string-number-comparision) foram alteradas, **min()** não mais retorna um valor diferente por conta da ordem dos argumentos informados. |

### Examples

**Exemplo #1 Exemplos de **min()****

```
<?php
echo min(2, 3, 1, 6, 7), PHP_EOL;  // 1
echo min(array(2, 4, 5)), PHP_EOL; // 2

// Aqui a comparação que ocorre é -1 < 0, e -1 é o menor valor
echo min('hello', -1), PHP_EOL;    // -1

// Quando comparando arrays de vários comprimentos, min retorna o mais curto
$val = min(array(2, 2, 2), array(1, 1, 1, 1)); // array(2, 2, 2)
var_dump($val);

// Vários arrays de mesmo tamanho, a comparação ocorre nos elementos, da esquerda para direita
// so in our example: 2 == 2, but 4 < 5
$val = min(array(2, 4, 8), array(2, 5, 1)); // array(2, 4, 8)
var_dump($val);

// Se for fornecido um array e um primitivo, o array nunca é retornado
// pois as comparações tratam os arrays como maiores que outros valores
$val = min('string', array(2, 5, 7), 42);   // string
var_dump($val);

// Se um argumento é null ou booleano, ele será comparado com outros valores
// usando a regra que FALSE < TRUE e NULL == FALSE,
// independente dos tipos envolvidos
// Nos exemplos abaixo -10 e 10 são tratados como TRUE nas comparações
$val = min(-10, FALSE, 10); // FALSE
var_dump($val);

$val = min(-10, NULL, 10);  // NULL
var_dump($val);

// 0, por outro lado, é tratado como FALSE, então é "menor que" TRUE
$val = min(0, TRUE); // 0
var_dump($val);
?>
```

### Veja também

- [max()](function.max.md) - Localiza o maior valor
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
