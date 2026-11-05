# Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strncasecmp.php

---

# strncasecmp

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

strncasecmp — Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres

### Descrição

function **strncasecmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`, [int](language.types.integer.md) `$length`): [int](language.types.integer.md)

Esta função é similar a [strcasecmp()](function.strcasecmp.md), com a
diferença que pode ser especificado o número (limite superior) de
caracteres de cada string usada na comparação.

### Parâmetros

`string1`
:   A primeira string.

`string2`
:   A segunda string.

`length`
:   O tamanho das strings, que será usado na comparação.

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

**Exemplo #1 Exemplo de **strncasecmp()****

```
<?php

$var1 = 'Hello John';
$var2 = 'hello Doe';
if (strncasecmp($var1, $var2, 5) === 0) {
    echo 'Primeiros 5 caracteres de $var1 e $var2 são iguais em uma comparação insensível a maiúsculas/minúsculas';
}
?>
```

### Veja também

- [strncmp()](function.strncmp.md) - Comparação de strings segura para binários dos primeiros n caracteres
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [substr\_compare()](function.substr-compare.md) - Comparação binária de duas strings a partir de uma posição até n caracteres
- [strcasecmp()](function.strcasecmp.md) - Comparação binária segura de strings insensível a maiúsculas/minúsculas
- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
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
