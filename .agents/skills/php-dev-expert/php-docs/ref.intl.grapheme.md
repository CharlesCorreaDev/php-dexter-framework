# Funções de Grapheme

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.intl.grapheme.php

---

# Funções de Grapheme

## Índice

- [grapheme\_extract](function.grapheme-extract.md) — Extrai uma sequência de grupos padrão de grafemas de um buffer de texto em UTF-8
- [grapheme\_levenshtein](function.grapheme-levenshtein.md) — Calculate Levenshtein distance between two strings in grapheme units
- [grapheme\_str\_split](function.grapheme-str-split.md) — Separa uma string em um array
- [grapheme\_stripos](function.grapheme-stripos.md) — Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string não sensível a maiúsculas/minúsculas
- [grapheme\_stristr](function.grapheme-stristr.md) — Retorna parte de uma string a partir da primeira ocorrência de outra string (insensível a maiúsculas/minúsculas) até o final
- [grapheme\_strlen](function.grapheme-strlen.md) — Obtém o comprimento de uma string em unidade de grafema
- [grapheme\_strpos](function.grapheme-strpos.md) — Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string
- [grapheme\_strripos](function.grapheme-strripos.md) — Encontra a posição (em unidades de grafema) da última ocorrência de uma string (insensível a maiúsculas/minúsculas)
- [grapheme\_strrpos](function.grapheme-strrpos.md) — Encontra a posição (em unidades de grafema) da última ocorrência de uma string
- [grapheme\_strstr](function.grapheme-strstr.md) — Retorna parte de uma string a partir da primeira ocorrência de outra string até o final
- [grapheme\_substr](function.grapheme-substr.md) — Retorna parte de uma string

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
