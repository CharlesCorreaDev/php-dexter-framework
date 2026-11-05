# Calculate Levenshtein distance between two strings in grapheme units

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-levenshtein.php

---

# grapheme\_levenshtein

(PHP 8 >= 8.5.0)

grapheme\_levenshtein — Calculate Levenshtein distance between two strings in grapheme units

### Descrição

Estilo procedural

function **grapheme\_levenshtein**(  
    [string](language.types.string.md) `$string1`,  
    [string](language.types.string.md) `$string2`,  
    [int](language.types.integer.md) `$insertion_cost` = 1,  
    [int](language.types.integer.md) `$replacement_cost` = 1,  
    [int](language.types.integer.md) `$deletion_cost` = 1,  
    [string](language.types.string.md) `$locale` = ""  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

The Levenshtein distance is defined as the minimal number of
grapheme clusters that have to be replaced, inserted, or deleted to transform
`string1` into `string2`.
The complexity of the algorithm is `O(m*n)`,
where `n` and `m` are the
length of `string1` and
`string2` in grapheme units.

Unlike [levenshtein()](function.levenshtein.md), which operates on bytes, this
function counts Unicode grapheme clusters, so composed and decomposed
forms of the same character (e.g. `U+00E9` and
`U+0065 U+0301`, both representing `é`)
are treated as equivalent and have a distance of zero.

If `insertion_cost`, `replacement_cost`
and/or `deletion_cost` are unequal to `1`,
the algorithm adapts to choose the cheapest transforms.
For example, if `$insertion_cost + $deletion_cost < $replacement_cost`,
no replacements will be done, but rather inserts and deletions instead.

### Parâmetros

`string1`
:   One of the strings being evaluated for Levenshtein distance.
    Must be valid UTF-8.

`string2`
:   One of the strings being evaluated for Levenshtein distance.
    Must be valid UTF-8.

`insertion_cost`
:   Defines the cost of insertion. Must be greater than `0`.

`replacement_cost`
:   Defines the cost of replacement. Must be greater than `0`.

`deletion_cost`
:   Defines the cost of deletion. Must be greater than `0`.

`locale`
:   Localidade a ser usada.

### Valor Retornado

Returns the Levenshtein distance between the two strings, measured in
grapheme units, or **`false`** on failure. Use
[intl\_get\_error\_message()](function.intl-get-error-message.md) to retrieve details about
the failure.

### Erros/Exceções

Throws a [ValueError](class.valueerror.md) if
`insertion_cost`, `replacement_cost`,
or `deletion_cost` is less than or equal to
`0`.

Returns **`false`** and sets an intl error if either input string is not
valid UTF-8, if `locale` is not a valid locale
identifier, or if an internal ICU error occurs.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | This function has been added. |

### Examples

**Exemplo #1 **grapheme\_levenshtein()** example**

```
<?php

// Composed form (NFC): U+00E9 LATIN SMALL LETTER E WITH ACUTE
$e_composed = "\u{00E9}";

// Decomposed form (NFD): U+0065 + U+0301 (e + combining acute accent)
$e_decomposed = "\u{0065}\u{0301}";

// grapheme_levenshtein treats them as the same grapheme cluster
var_dump(grapheme_levenshtein($e_composed, $e_decomposed));

// levenshtein() operates on bytes and sees them as different
var_dump(levenshtein($e_composed, $e_decomposed));

?>
```

O exemplo acima produzirá:

```
int(0)
int(3)
```

### Veja também

- [levenshtein()](function.levenshtein.md) - Calcula a distância Levenshtein entre duas strings
- [grapheme\_strlen()](function.grapheme-strlen.md) - Obtém o comprimento de uma string em unidade de grafema
- [grapheme\_substr()](function.grapheme-substr.md) - Retorna parte de uma string
- [similar\_text()](function.similar-text.md) - Calcula a similaridade entre duas strings
- [» 
  Unicode Text Segmentation: Grapheme Cluster Boundaries](https://unicode.org/reports/tr29/#Grapheme_Cluster_Boundaries)

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
