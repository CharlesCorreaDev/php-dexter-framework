# Computa a diferença entre arrays com checagem adicional de índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-diff-assoc.php

---

# array\_diff\_assoc

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

array\_diff\_assoc — Computa a diferença entre arrays com checagem adicional de índice

### Descrição

function **array\_diff\_assoc**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

Compara `array` com `arrays` e
retorna a diferença. Ao contrário de [array\_diff()](function.array-diff.md), as
chaves dos arrays também são usadas na comparação.

### Parâmetros

`array`
:   O array a ser comparado

`arrays`
:   Arrays para comparar

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todos os valores do
`array` que não estão presentes em qualquer um dos outros arrays.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo de **array\_diff\_assoc()****

Neste exemplo o par `"a" => "verde"`
está presente em ambos os arrays e por isso não está na saída da
função. Por outro lado, o par `0 => "vermelho"`
está na saída porque a chave de `"vermelho"` é
automaticamente atribuído para `0` no primeiro array,
enquanto é atribuído para `1` no segundo array já que a
chave `0` já foi tomada por `amarelo`.

```
<?php
$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
$array2 = array("a" => "verde", "amarelo", "vermelho");
$result = array_diff_assoc($array1, $array2);
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

**Exemplo #2 Exemplo da função **array\_diff\_assoc()****

Dois valores dos pares *chave => valor* são
considerados iguais somente se `(string) $elem1 === (string)
$elem2` . Em outras palavras, uma checagem estrita de string é
feita para que representações de string sejam as mesmas.

```
<?php
$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 0
    [1] => 1
)
```

### Notas

> **Nota**:
>
> Esta função checa somente uma dimensão de um array n-dimensional. É possível verificar
> dimensões mais profundas usando, por exemplo,
> `array_diff_assoc($array1[0], $array2[0]);`.

> **Nota**:
>
> Certifique-se de que os argumentos sejam passados na ordem correta ao comparar arrays
> semelhantes com mais chaves. O novo array deve ser o primeiro array da lista.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice

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
