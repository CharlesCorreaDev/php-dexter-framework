# Comparação de strings insensível a maiúsculas/minúsculas usando o algoritmo de "ordem natural"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strnatcasecmp.php

---

# strnatcasecmp

(PHP 4, PHP 5, PHP 7, PHP 8)

strnatcasecmp — Comparação de strings insensível a maiúsculas/minúsculas usando o algoritmo de "ordem natural"

### Descrição

function **strnatcasecmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Esta função implementa um algoritmo de comparação que ordena strings
alfanuméricos da maneira que um ser humano faria. O comportamento desta função é
similar a [strnatcmp()](function.strnatcmp.md), exceto que a comparação não
é sensível a maiúsculas/minúsculas. Para maiores informações consulte: [» Comparação de Strings em Ordem Natural](https://github.com/sourcefrog/natsort), de Martin Pool.

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

**Exemplo #1 Exemplo de **strnatcasecmp()****

```
<?php

var_dump(strnatcasecmp('Apple', 'Banana'));
var_dump(strnatcasecmp('Banana', 'Apple'));
var_dump(strnatcasecmp('apple', 'Apple'));
?>
```

O exemplo acima produzirá:

```
int(-1)
int(1)
int(0)
```

### Veja também

- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [strcmp()](function.strcmp.md) - Comparação binária segura de strings
- [strcasecmp()](function.strcasecmp.md) - Comparação binária segura de strings insensível a maiúsculas/minúsculas
- [substr()](function.substr.md) - Retorna parte de uma string
- [stristr()](function.stristr.md) - strstr insensível a maiúsculas/minúsculas
- [strncasecmp()](function.strncasecmp.md) - Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres
- [strncmp()](function.strncmp.md) - Comparação de strings segura para binários dos primeiros n caracteres
- [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- [setlocale()](function.setlocale.md) - Define informação de localidade

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
