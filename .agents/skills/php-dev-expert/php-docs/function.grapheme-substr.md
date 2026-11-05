# Retorna parte de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-substr.php

---

# grapheme\_substr

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

grapheme\_substr — Retorna parte de uma string

### Descrição

Estilo procedural

function **grapheme\_substr**(  
    [string](language.types.string.md) `$string`,  
    [int](language.types.integer.md) `$offset`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [string](language.types.string.md) `$locale` = ""  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna parte de uma string.

### Parâmetros

`string`
:   A string de entrada. Deve ser em UTF-8 válido.

`offset`
:   Posição de início em unidades padrão de grafema.
    Se `offset` for não negativo, a string retornada iniciará na posição
    `offset` da `string`, contando a partir de zero. Se `offset` for negativo,
    a string retornada iniciará no posição `offset` em unidades de grafema contada a partir
    do final da string.

`length`
:   Comprimento em unidades de grafema.
    Se `length` for informado e positivo, a string retornada conterá,
    no máximo, a quantidade de grafemas informada em `length`, iniciando de `offset` (dependendo do
    comprimento da string). Se `length` for informado e negativo,
    representará as unidades de grafema que serão omitidas no final da string (depois da
    posição de início calculada quando `offset` é negativo). Se `offset`
    denotar uma posição além deste truncamento, uma string vazia será retornada.

`locale`
:   Localidade a ser usada.

### Valor Retornado

Retorna a parte extraída da `string`, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `locale` foi adicionado. |
| 8.0.0 | A função agora fixa consistentemente deslocamentos fora dos limites ao limite da string. Anteriormente, **`false`** era retornado em vez da string vazia em alguns casos. |

### Examples

**Exemplo #1 Exemplo de **grapheme\_substr()****

```
<?php

$char_a_ring_nfd = "a\xCC\x8A";  // 'LATIN SMALL LETTER A WITH RING ABOVE' (U+00E5) NFD
$char_o_diaeresis_nfd = "o\xCC\x88"; // 'LATIN SMALL LETTER O WITH DIAERESIS' (U+00F6) NFD

print urlencode(grapheme_substr( "ao" . $char_a_ring_nfd . "bc" . $char_o_diaeresis_nfd . "O", 2, -1 ));
?>
```

O exemplo acima produzirá:

```
a%CC%8Abco%CC%88
```

### Veja também

- [grapheme\_extract()](function.grapheme-extract.md) - Extrai uma sequência de grupos padrão de grafemas de um buffer de texto em UTF-8
- [» 
  Segmentação de texto Unicode: limites do cluster de grafema (em inglês)](https://unicode.org/reports/tr29/#Grapheme_Cluster_Boundaries)

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
