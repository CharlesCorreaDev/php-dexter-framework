# Comparações de strings usando um algoritmo de "ordem natural"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strnatcmp.php

---

# strnatcmp

(PHP 4, PHP 5, PHP 7, PHP 8)

strnatcmp — Comparações de strings usando um algoritmo de "ordem natural"

### Descrição

function **strnatcmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Esta função implementa um algoritmo de comparação que ordena
strings alfanuméricas da mesma forma que um ser humano faria, o que é
descrito como "ordenação natural".
Observe que esta comparação é sensível a maiúsculas/minúsculas.

### Parâmetros

`string1`
:   A primeira string.

`string2`
:   A segunda string.

### Valor Retornado

Retorna um valor menor que 0 se `string1`
for abaixo de `string2`; um valor maior
que 0 se `string1` for acima de
`string2` e `0` se elas
forem iguais.
Nenhum significado em particular pode ser inferido com confiança desse valor a não
ser o seu sinal.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Não é mais garantido que esta função retornará `strlen($string1) - strlen($string2)` quando os comprimentos das strings não forem iguais, mas ppodem agora retornar `-1` ou `1` no lugar. |

### Examples

Um exemplo da diferença entre este algoritmo e os algoritmos
de ordenação de strings comuns (usados em [strcmp()](function.strcmp.md))
pode ser visto abaixo:

**Exemplo #1 [strcmp()](function.strcmp.md)**

```
<?php
$arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");
echo "Comparação padrão de strings\n";
usort($arr1, "strcmp");
print_r($arr1);
echo "\nComparação de strings em ordem natural\n";
usort($arr2, "strnatcmp");
print_r($arr2);
?>
```

O exemplo acima produzirá:

```
Comparação padrão de strings
Array
(
    [0] => img1.png
    [1] => img10.png
    [2] => img12.png
    [3] => img2.png
)

Comparação de strings em ordem natural
Array
(
    [0] => img1.png
    [1] => img2.png
    [2] => img10.png
    [3] => img12.png
)
```

Para mais informações, consulte a página [» Comparação de String em Ordem Natural](https://github.com/sourcefrog/natsort),
de Martin Pool.

### Veja também

- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [strcasecmp()](function.strcasecmp.md) - Comparação binária segura de strings insensível a maiúsculas/minúsculas
- [substr()](function.substr.md) - Retorna parte de uma string
- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [strcmp()](function.strcmp.md) - Comparação binária segura de strings
- [strncmp()](function.strncmp.md) - Comparação de strings segura para binários dos primeiros n caracteres
- [strncasecmp()](function.strncasecmp.md) - Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres
- [strnatcasecmp()](function.strnatcasecmp.md) - Comparação de strings insensível a maiúsculas/minúsculas usando o algoritmo de "ordem natural"
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [natsort()](function.natsort.md) - Ordena um array utilizando o algoritmo de "ordem natural"
- [natcasesort()](function.natcasesort.md) - Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas

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
