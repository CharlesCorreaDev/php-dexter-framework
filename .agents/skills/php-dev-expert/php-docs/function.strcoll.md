# Comparação de strings baseada em localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strcoll.php

---

# strcoll

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

strcoll — Comparação de strings baseada em localidade

### Descrição

function **strcoll**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Observe que esta comparação é sensível a maiúsculas/minúsculas, e diferentemente de
[strcmp()](function.strcmp.md), esta função não é segura para binários.

**strcoll()** usa a localidade atual para fazer as
comparações. Se a localidade atual é C ou POSIX, esta função é
equivalente a [strcmp()](function.strcmp.md).

### Parâmetros

`string1`
:   A primeira string.

`string2`
:   A segunda string.

### Valor Retornado

Retorna < 0 se `string1` for abaixo de
`string2`; > 0 se
`string1` for acima de
`string2`, e 0 se forem iguais.

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
