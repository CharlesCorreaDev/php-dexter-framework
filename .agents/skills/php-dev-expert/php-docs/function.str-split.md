# Converte uma string em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-split.php

---

# str\_split

(PHP 5, PHP 7, PHP 8)

str\_split — Converte uma string em um array

### Descrição

function **str\_split**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length` = 1): [array](language.types.array.md)

Converte uma string em um array.

### Parâmetros

`string`
:   A string de entrada.

`length`
:   Comprimento máximo do pedaço.

### Valor Retornado

Se o parâmetro opcional `length` for
especificado, o array retornado será dividido em pedaços, sendo cada um
deles com `length` de comprimento, exceto o pedaço final
que pode ser mais curto se a string não for dividisível uniformemente. O
`length` padrão é `1`, o que significa que cada pedaço terá um byte de tamanho.

### Erros/Exceções

Se `length` for menor que `1`,
uma exceção [ValueError](class.valueerror.md) será lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Se `string` estiver vazio, um [array](language.types.array.md) agora é retornado. Anteriormente, um [array](language.types.array.md) contendo uma única string vazia foi retornada. |
| 8.0.0 | Se `length` for menor que `1`, uma exceção [ValueError](class.valueerror.md) será lançada agora; anteriormente, um erro de nível **`E_WARNING`** era gerado e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplos de uso de **str\_split()****

```
<?php

$str = "Tchau Amigos";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => T
    [1] => c
    [2] => h
    [3] => a
    [4] => u
    [5] =>
    [6] => A
    [7] => m
    [8] => i
    [9] => g
    [10] => o
    [11] => s
)

Array
(
    [0] => Tch
    [1] => au
    [2] => Ami
    [3] => gos
)
```

### Notas

> **Nota**:
>
> **str\_split()** dividirá em bytes, em vez de caracteres, ao lidar com uma string codificada em múltiplos bytes.
> [mb\_str\_split()](function.mb-str-split.md) pode ser usada para dividir a string em pontos de código.
> [grapheme\_str\_split()](function.grapheme-str-split.md) pode ser usada para dividir a string em grupos de grafema.

### Veja também

- [mb\_str\_split()](function.mb-str-split.md) - Dada uma string multibyte, retorna um array de seus caracteres
- [grapheme\_str\_split()](function.grapheme-str-split.md) - Separa uma string em um array
- [chunk\_split()](function.chunk-split.md) - Divide uma string em pedaços menores
- [preg\_split()](function.preg-split.md) - Divide uma string com base em expressão regular
- [explode()](function.explode.md) - Divide uma string com base em outra string
- [count\_chars()](function.count-chars.md) - Retorna informação sobre caracteres usados em uma string
- [str\_word\_count()](function.str-word-count.md) - Retorna informação sobre palavras usadas em uma string
- [for](control-structures.for.md)

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
