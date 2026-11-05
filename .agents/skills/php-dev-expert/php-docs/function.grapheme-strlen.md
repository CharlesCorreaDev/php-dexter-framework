# Obtém o comprimento de uma string em unidade de grafema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-strlen.php

---

# grapheme\_strlen

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

grapheme\_strlen — Obtém o comprimento de uma string em unidade de grafema

### Descrição

Estilo procedural

function **grapheme\_strlen**([string](language.types.string.md) `$string`): [int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Obtém o comprimento de uma string em unidade de grafema (não em bytes ou caracteres).

### Parâmetros

`string`
:   A string sendo medida. Deve ser em UTF-8 válido.

### Valor Retornado

O comprimento da string em caso de sucesso, **`null`** ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **grapheme\_strlen()****

```
<?php

$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) NFD
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) NFD

print grapheme_strlen( 'abc' . $char_a_ring_nfd . $char_o_diaeresis_nfd . $char_a_ring_nfd);

?>
```

O exemplo acima produzirá:

```
6
```

### Veja também

- [» 
  Unicode Text Segmentation: Grapheme Cluster Boundaries](https://unicode.org/reports/tr29/#Grapheme_Cluster_Boundaries)
- [iconv\_strlen()](function.iconv-strlen.md) - Retorna a contagem de caracteres da string
- [mb\_strlen()](function.mb-strlen.md) - Obtém o comprimento da string
- [strlen()](function.strlen.md) - Retorna o tamanho de uma string

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
