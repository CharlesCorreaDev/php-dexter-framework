# Comparação binária de duas strings a partir de uma posição até n caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.substr-compare.php

---

# substr\_compare

(PHP 5, PHP 7, PHP 8)

substr\_compare — Comparação binária de duas strings a partir de uma posição até n caracteres

### Descrição

function **substr\_compare**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [bool](language.types.boolean.md) `$case_insensitive` = **`false`**  
): [int](language.types.integer.md)

**substr\_compare()** compara `haystack`
a partir da posição `offset` com `needle`
até `length` caracteres.

### Parâmetros

`haystack`
:   A string principal a ser comparada.

`needle`
:   A string secundária a ser comparada.

`offset`
:   A posição inicial para a comparação. Se negativa, inicia contando
    da final da string.

`length`
:   O comprimento da comparação. O valor padrão é o maior comprimento entre
    o comprimento de `needle` comparado com o comprimento
    de `haystack` menos o
    `offset`.

`case_insensitive`
:   Se `case_insensitive` for **`true`**, a comparação é
    insensível a maiúsculas/minúsculas.

### Valor Retornado

Retorna um valor menor que 0 se `string1`
for abaixo de `string2`; um valor maior
que 0 se `string1` for acima de
`string2` e `0` se elas
forem iguais.
Nenhum significado em particular pode ser inferido com confiança desse valor a não
ser o seu sinal.

Se `offset` for igual a (antes do PHP 7.2.18, 7.3.5) ou
maior que o comprimento de `haystack`, ou
`length` estiver definido e menor que 0,
**substr\_compare()** mostra um alerta e retorna
**`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Não é mais garantido que esta função retornará `strlen($string1) - strlen($string2)` quando os comprimentos das strings não forem iguais, mas ppodem agora retornar `-1` ou `1` no lugar. |
| 8.0.0 | `length` agora pode ser nulo. |
| 7.2.18, 7.3.5 | `offset` agora pode ser igual ao comprimento de `haystack`. |

### Examples

**Exemplo #1 Exemplo de **substr\_compare()****

```
<?php
echo substr_compare("abcde", "bc", 1, 2), PHP_EOL; // 0
echo substr_compare("abcde", "de", -2, 2), PHP_EOL; // 0
echo substr_compare("abcde", "bcg", 1, 2), PHP_EOL; // 0
echo substr_compare("abcde", "BC", 1, 2, true), PHP_EOL; // 0
echo substr_compare("abcde", "bc", 1, 3), PHP_EOL; // 1
echo substr_compare("abcde", "cd", 1, 2), PHP_EOL; // -1
echo substr_compare("abcde", "abc", 5, 1), PHP_EOL; // -1
?>
```

### Veja também

- [strncmp()](function.strncmp.md) - Comparação de strings segura para binários dos primeiros n caracteres

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
