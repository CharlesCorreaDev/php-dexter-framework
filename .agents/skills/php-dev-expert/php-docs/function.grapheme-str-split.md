# Separa uma string em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.grapheme-str-split.php

---

# grapheme\_str\_split

(PHP 8 >= 8.4.0)

grapheme\_str\_split — Separa uma string em um array

### Descrição

function **grapheme\_str\_split**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length` = 1): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna um array de strings.
É uma versão de [str\_split()](function.str-split.md)
com suporte para caracteres de byte de grupos de grafema.
Se o parâmetro `length` for especificado,
a string é quebrada em pedaços desse comprimento
em unidades de grupos de grafema (não em bytes).

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser separada em grupos de grafemas ou pedaços.
    `string` precisa ser em UTF-8 válido.

`length`
:   Cada elemento do array retornado será composto pelo número de grupos de grafema especificado no parâmetro `length`.

### Valor Retornado

**grapheme\_str\_split()** retorna um array de strings, ou **`false`** em caso de falha.

### Erros/Exceções

Se `length` for menor que `1`,
um [ValueError](class.valueerror.md) será lançado.

### Veja também

- [str\_split()](function.str-split.md) - Converte uma string em um array
- [mb\_str\_split()](function.mb-str-split.md) - Dada uma string multibyte, retorna um array de seus caracteres
- [» 
  Segmentação de texto Unicode: limites do grupo de grafema](https://unicode.org/reports/tr29/#Grapheme_Cluster_Boundaries)

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
