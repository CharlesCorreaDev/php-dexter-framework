# Calcula a interseção entre arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-intersect.php

---

# array\_intersect

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

array\_intersect — Calcula a interseção entre arrays

### Descrição

function **array\_intersect**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

**array\_intersect()** retorna um array
contendo todos os valores de `array`
que estão presentes nos outros argumentos.
Note que as chaves são preservadas.

### Parâmetros

`array`
:   O array com os valores que serão verificados.

`arrays`
:   Arrays para comparar os valores.

### Valor Retornado

Retorna um array contendo todos os valores em
`array` cujo existem em todos os parâmetros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo da **array\_intersect()****

```
<?php
$array1 = array("a" => "verde", "vermelho", "azul");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = array_intersect($array1, $array2);
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => verde
    [0] => vermelho
)
```

### Notas

> **Nota**:
>
> Dois elementos são considerados iguais se, e somente se,
> `(string) $elem1 === (string) $elem2`. Em palavras:
> quando a representação em string é a mesma.

### Veja também

- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
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
