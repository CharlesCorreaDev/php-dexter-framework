# Computa a interseção de arrays com uma adicional verificação de índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-intersect-assoc.php

---

# array\_intersect\_assoc

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

array\_intersect\_assoc — Computa a interseção de arrays com uma adicional verificação de índice

### Descrição

function **array\_intersect\_assoc**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

**array\_intersect\_assoc()** retorna um array
contendo todos os valores de `array`
que estão presentes em todos os argumentos. Note que estas chaves também são usadas na
comparação diferindo de [array\_intersect()](function.array-intersect.md).

### Parâmetros

`array`
:   O array com os valores a serem verificados.

`arrays`
:   Arrays para comparar os valores.

### Valor Retornado

Retorna um array associativo contendo todos os valores em
`array` que estão presentes em todos os argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo da **array\_intersect\_assoc()****

```
<?php
$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
$array2 = array("a" => "verde", "b" => "amarelo", "azul", "vermelho");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => verde
)
```

Em nosso exemplo, é possível ver que somente o par `"a" =>
"verde"` está presente em ambos array, então logo é retornado.
O valor `"vermelho"` não é retornado porque no
$array1 a chave é `0` quando
a chave de "vermelho" no $array2 é
`1`, e a chave `"b"` não será retornada
por que seu valor é diferente em cada array.

Os dois valores dos pares `key => value` são
considerados iguais somente se
`(string) $elem1 === (string) $elem2` . Em outras palavras,
uma verificação do tipo é executada, então a representação string precisa
ser a mesma.

### Veja também

- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
- [array\_intersect\_uassoc()](function.array-intersect-uassoc.md) - Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
- [array\_uintersect\_uassoc()](function.array-uintersect-uassoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas
- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice

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
