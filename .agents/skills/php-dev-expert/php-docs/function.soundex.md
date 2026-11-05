# Calcula a chave soundex de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.soundex.php

---

# soundex

(PHP 4, PHP 5, PHP 7, PHP 8)

soundex — Calcula a chave soundex de uma string

### Descrição

function **soundex**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Calcula a chave soundex de `string`.

Chaves soundex têm a propriedade de que palavras pronunciadas de forma semelhante
produzem a mesma chave soundex e podem, portanto, ser usadas para simplificar
pesquisas em bancos de dados onde a pronúncia é conhecida mas não
a soletração.

Esta função soundex em particular é a descrita por Donald Knuth
em "The Art Of Computer Programming, vol. 3: Sorting And
Searching", Addison-Wesley (1973), pp. 391-392.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a chave soundex como uma [string](language.types.string.md) com quatro caracteres.
Se pelo menos uma letra estiver contida na `string`, a string
retornada começa com uma letra. Caso contrário, `"0000"` é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes desta versão, chamar a função com uma string vazia retornava **`false`** por nenhuma razão em particular. |

### Examples

**Exemplo #1 Exemplos de Soundex**

```
<?php
echo soundex("Euler"), PHP_EOL, soundex("Ellery"), PHP_EOL;

soundex("Euler")       == soundex("Ellery");    // E460
soundex("Gauss")       == soundex("Ghosh");     // G200
soundex("Hilbert")     == soundex("Heilbronn"); // H416
soundex("Knuth")       == soundex("Kant");      // K530
soundex("Lloyd")       == soundex("Ladd");      // L300
soundex("Lukasiewicz") == soundex("Lissajous"); // L222
?>
```

### Veja também

- [levenshtein()](function.levenshtein.md) - Calcula a distância Levenshtein entre duas strings
- [metaphone()](function.metaphone.md) - Calcula a chave de Metaphone de uma string
- [similar\_text()](function.similar-text.md) - Calcula a similaridade entre duas strings

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
