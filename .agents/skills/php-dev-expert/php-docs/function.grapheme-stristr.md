# Retorna parte de uma string a partir da primeira ocorrência de outra string (insensível a maiúsculas/minúsculas) até o final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-stristr.php

---

# grapheme\_stristr

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

grapheme\_stristr — Retorna parte de uma string a partir da primeira ocorrência de outra string (insensível a maiúsculas/minúsculas) até o final

### Descrição

Estilo procedural

function **grapheme\_stristr**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [bool](language.types.boolean.md) `$beforeNeedle` = **`false`**,  
    [string](language.types.string.md) `$locale` = ""  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna parte da string `haystack` iniciando da primeira ocorrência de uma outra string (insensível a maiúsculas/minúsculas) até o final de `haystack`.

### Parâmetros

`haystack`
:   A string de entrada. Deve ser em UTF-8 válido.

`needle`
:   A string a ser procurada. Deve ser em UTF-8 válido.

`beforeNeedle`
:   Caso seja **`true`**, **grapheme\_stristr()** retorna a parte da string
    `haystack` antes da primeira ocorrência da string procurada (excluindo `needle`).

`locale`
:   Localidade a ser usada.

### Valor Retornado

Retorna a parte de `haystack`, ou **`false`** se `needle` não for encontrada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `locale` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **grapheme\_stristr()****

```
<?php

$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) NFD
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) NFD
$char_O_diaeresis_nfd = "O\xCC\x88"; // 'LATIN CAPITAL LETTER O WITH DIAERESIS' (U+00D6) NFD

print urlencode(grapheme_stristr( $char_a_ring_nfd . $char_o_diaeresis_nfd . $char_a_ring_nfd, $char_O_diaeresis_nfd));

?>
```

O exemplo acima produzirá:

```
o%CC%88a%CC%8A
```

### Veja também

- [grapheme\_stripos()](function.grapheme-stripos.md) - Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string não sensível a maiúsculas/minúsculas
- [grapheme\_strpos()](function.grapheme-strpos.md) - Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string
- [grapheme\_strripos()](function.grapheme-strripos.md) - Encontra a posição (em unidades de grafema) da última ocorrência de uma string (insensível a maiúsculas/minúsculas)
- [grapheme\_strrpos()](function.grapheme-strrpos.md) - Encontra a posição (em unidades de grafema) da última ocorrência de uma string
- [grapheme\_strstr()](function.grapheme-strstr.md) - Retorna parte de uma string a partir da primeira ocorrência de outra string até o final
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
