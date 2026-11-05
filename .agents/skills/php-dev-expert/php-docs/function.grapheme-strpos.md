# Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-strpos.php

---

# grapheme\_strpos

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

grapheme\_strpos — Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string

### Descrição

Estilo procedural

function **grapheme\_strpos**(  
    [string](language.types.string.md) `$haystack`,  
    [string](language.types.string.md) `$needle`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [string](language.types.string.md) `$locale` = ""  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string.

### Parâmetros

`haystack`
:   A string onde ocorrerá a pesquisa. Deve ser em UTF-8 válido.

`needle`
:   A string a ser procurada. Deve ser em UTF-8 válido.

`offset`
:   O parâmetro opcional `offset` permite especificar onde no `haystack` deve-se
    iniciar a pesquisa, como uma posição em unidades de grafema (não em bytes ou caracteres).
    Se a posição for negativa, será tratada como relativa ao final da string.
    A posição retornada ainda será relativa ao início do `haystack`
    independentemente do valor de `offset`.

`locale`
:   Localidade a ser usada.

### Valor Retornado

Retora a posição como um inteiro. Se `needle` não for encontrado, **grapheme\_strpos()** retornará **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `locale` foi adicionado. |
| 7.1.0 | Suporte para `offset` negativo foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **grapheme\_strpos()****

```
<?php

$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) NFD
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) NFD

print grapheme_strpos( $char_a_ring_nfd . $char_a_ring_nfd . $char_o_diaeresis_nfd, $char_o_diaeresis_nfd);

?>
```

O exemplo acima produzirá:

```
2
```

### Veja também

- [grapheme\_stripos()](function.grapheme-stripos.md) - Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string não sensível a maiúsculas/minúsculas
- [grapheme\_stristr()](function.grapheme-stristr.md) - Retorna parte de uma string a partir da primeira ocorrência de outra string (insensível a maiúsculas/minúsculas) até o final
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
