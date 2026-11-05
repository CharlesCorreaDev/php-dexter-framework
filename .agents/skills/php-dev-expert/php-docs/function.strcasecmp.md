# Comparação binária segura de strings insensível a maiúsculas/minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strcasecmp.php

---

# strcasecmp

(PHP 4, PHP 5, PHP 7, PHP 8)

strcasecmp — Comparação binária segura de strings insensível a maiúsculas/minúsculas

### Descrição

function **strcasecmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Comparação binária segura de strings insensível a maiúsculas/minúsculas.
A comparação não leva em conta a localidade; apenas letras ASCII são comparadas de
forma insensível a maiúsculas/minúsculas.

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

**Exemplo #1 Exemplo de **strcasecmp()****

```
<?php
$var1 = "Olá";
$var2 = "olá";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 é igual a $var2 em uma comparação de strings insensível a maiúsculas/minúsculas';
}
?>
```

### Veja também

- [strcmp()](function.strcmp.md) - Comparação binária segura de strings
- [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
- [substr\_compare()](function.substr-compare.md) - Comparação binária de duas strings a partir de uma posição até n caracteres
- [strncasecmp()](function.strncasecmp.md) - Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres
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
