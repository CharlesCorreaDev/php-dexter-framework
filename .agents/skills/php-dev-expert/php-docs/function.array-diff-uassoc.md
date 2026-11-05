# Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-diff-uassoc.php

---

# array\_diff\_uassoc

(PHP 5, PHP 7, PHP 8)

array\_diff\_uassoc — Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário

### Descrição

function **array\_diff\_uassoc**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$key_compare_func`): [array](language.types.array.md)

Compara `array` com `arrays` e
retorna a diferença. Ao contrário de [array\_diff()](function.array-diff.md), as
chaves dos arrays são usadas na comparação.

Ao contrário de [array\_diff\_assoc()](function.array-diff-assoc.md), uma função de
callback fornecida pelo usuário é usada na comparação dos índices, não uma função interna.

### Parâmetros

`array`
:   O array a ser comparado

`arrays`
:   Arrays para comparar

`key_compare_func`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todas as entradas de
`array` que não estão presentes em qualquer um dos outros arrays.

### Examples

**Exemplo #1 Exemplo de **array\_diff\_uassoc()****

Neste exemplo o `"a" => "verde"`
está presente em ambos os arrays e assim não está na saída da função. Ao
contrário disso, o par `0 => "vermelho"`
está na saída porque a chave de `"vermelho"` é
atribuído automaticamente como `0` no primeiro array,
enquanto é atribuído em `1` no segundo array, já que a
chave `0` já foi atribuída a `amarelo`.

```
<?php
function key_compare_func($a, $b)
{
    return $a <=> $b;
}

$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
$array2 = array("a" => "verde", "amarelo", "vermelho");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [b] => marrom
    [c] => azul
    [0] => vermelho
)
```

A igualdade de 2 índices é checada pela função de callback fornecida pelo usuário.

### Notas

> **Nota**:
>
> Esta função checa somente uma dimensão de um array n-dimensional. É possível verificar
> dimensões mais profundas usando, por exemplo,
> `array_diff_uassoc($array1[0], $array2[0], "key_compare_func");`.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_uintersect()](function.array-uintersect.md) - Computa a interseção de array, comparando dados com uma função callback
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
- [array\_uintersect\_uassoc()](function.array-uintersect-uassoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas

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
