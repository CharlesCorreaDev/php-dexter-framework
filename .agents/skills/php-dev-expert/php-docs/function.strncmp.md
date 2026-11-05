# Comparação de strings segura para binários dos primeiros n caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strncmp.php

---

# strncmp

(PHP 4, PHP 5, PHP 7, PHP 8)

strncmp — Comparação de strings segura para binários dos primeiros n caracteres

### Descrição

function **strncmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`, [int](language.types.integer.md) `$length`): [int](language.types.integer.md)

Esta função é parecida com [strcmp()](function.strcmp.md), com a
diferença que pode-se especificar o (limite máximo do) número de
caracteres de cada string que serão usados na comparação.

Observe que esta comparação é sensível a maiúsculas/minúsculas.

### Parâmetros

`string1`
:   A primeira string.

`string2`
:   A segunda string.

`length`
:   Número de caracteres a usar na comparação.

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

**Exemplo #1 Exemplo de **strncmp()****

```
<?php

$var1 = 'Olá, João';
$var2 = 'Olá, Pedro';
if (strncmp($var1, $var2, 3) === 0) {
    echo 'Primeiros 3 caracteres de $var1 e $var2 são iguais em uma comparação de strings sensível a maiúsculas/minúsculas.';
}
?>
```

### Veja também

- [strncasecmp()](function.strncasecmp.md) - Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [substr\_compare()](function.substr-compare.md) - Comparação binária de duas strings a partir de uma posição até n caracteres
- [strcmp()](function.strcmp.md) - Comparação binária segura de strings
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [substr()](function.substr.md) - Retorna parte de uma string

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
