# Comparação binária segura de strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strcmp.php

---

# strcmp

(PHP 4, PHP 5, PHP 7, PHP 8)

strcmp — Comparação binária segura de strings

### Descrição

function **strcmp**([string](language.types.string.md) `$string1`, [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Observe que esta comparação é sensível a maiúsculas/minúsculas. Para comparação insensível a maiúsculas/minúsculas,
consulte [strcasecmp()](function.strcasecmp.md).

Observe que esta comparação não considera a localidade. Para comparação que considera a localidade, consulte
[strcoll()](function.strcoll.md) ou [Collator::compare()](collator.compare.md).

### Parâmetros

`string1`
:   A primeira string

`string2`
:   A segunda string

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

**Exemplo #1 Exemplo de **strcmp()****

```
<?php
$var1 = "Olá";
$var2 = "olá";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 não é igual a $var2 em uma comparação sensível a maiúsculas/minúsculas';
}
?>
```

### Veja também

- Comparações de string completa

  - [strcasecmp()](function.strcasecmp.md) - Comparação binária segura de strings insensível a maiúsculas/minúsculas
  - [Collator::compare()](collator.compare.md) - Compara duas strings Unicode
  - [strcoll()](function.strcoll.md) - Comparação de strings baseada em localidade
- Comparações de string parcial

  - [substr\_compare()](function.substr-compare.md) - Comparação binária de duas strings a partir de uma posição até n caracteres
  - [strncmp()](function.strncmp.md) - Comparação de strings segura para binários dos primeiros n caracteres
  - [strstr()](function.strstr.md) - Encontra a primeira ocorrência de uma string
- Outras comparações de string / similares

  - [preg\_match()](function.preg-match.md) - Realiza uma correspondência com expressão regular
  - [levenshtein()](function.levenshtein.md) - Calcula a distância Levenshtein entre duas strings
  - [metaphone()](function.metaphone.md) - Calcula a chave de Metaphone de uma string
  - [similar\_text()](function.similar-text.md) - Calcula a similaridade entre duas strings
  - [soundex()](function.soundex.md) - Calcula a chave soundex de uma string

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
