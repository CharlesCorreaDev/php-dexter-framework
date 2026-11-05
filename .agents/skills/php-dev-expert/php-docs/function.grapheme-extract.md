# Extrai uma sequência de grupos padrão de grafemas de um buffer de texto em UTF-8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-extract.php

---

# grapheme\_extract

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

grapheme\_extract — Extrai uma sequência de grupos padrão de grafemas de um buffer de texto em UTF-8

### Descrição

Estilo procedural

function **grapheme\_extract**(  
    [string](language.types.string.md) `$haystack`,  
    [int](language.types.integer.md) `$size`,  
    [int](language.types.integer.md) `$type` = **`GRAPHEME_EXTR_COUNT`**,  
    [int](language.types.integer.md) `$offset` = 0,  
    [int](language.types.integer.md) `&$next` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função extrai uma sequência de grupos padrão de grafemas a partir de um buffer de texto codificado em UTF-8.

### Parâmetros

`haystack`
:   A string onde a pesquisa será feita.

`size`
:   Número máximo de itens - baseado no tipo `type` - a retornar.

`type`
:   Define o tipo de unidades referidas pelo parâmetro `size`:

    - GRAPHEME\_EXTR\_COUNT (padrão) - `size` é o número de grupos padrão
      de grafemas a extrair.
    - GRAPHEME\_EXTR\_MAXBYTES - `size` é o número máximo de bytes
      retornados.
    - GRAPHEME\_EXTR\_MAXCHARS - `size` é o número máximo de caracteres
      UTF-8 retornados.

`offset`
:   Posição inicial no `haystack` em bytes - se informado, precisa ser zero
    ou um inteiro positivo que seja menor ou igual ao comprimento de `haystack` em
    bytes, ou um valor negativo que conta a partir do final de `haystack`.
    Se `offset` não apontar para o primeiro byte de um caractere
    UTF-8, a posição de início é movida para o primeiro byte do caractere seguinte.

`next`
:   Referência a um valor que será definido para a próxima posição de início.
    Quando a chamada retornar, esta variável poderá apontar para a primeira posição em bytes após o final da string.

### Valor Retornado

Um string com deslocamento em `offset` e terminando em um limite de grupo padrão
de grafema que esteja em conformidade com os parâmetros `size` e `type` especificados,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Suporte para `offset` negativo foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **grapheme\_extract()****

```
<?php

$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) NFD
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) NFD

print urlencode(grapheme_extract( $char_a_ring_nfd . $char_o_diaeresis_nfd, 1, GRAPHEME_EXTR_COUNT, 2));

?>
```

O exemplo acima produzirá:

```
o%CC%88
```

### Veja também

- [grapheme\_substr()](function.grapheme-substr.md) - Retorna parte de uma string
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
