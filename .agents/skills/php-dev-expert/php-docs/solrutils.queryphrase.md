# Prepara uma frase a partir de uma string Lucene sem escape

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrutils.queryphrase.php

---

# SolrUtils::queryPhrase

(PECL solr >= 0.9.2)

SolrUtils::queryPhrase — Prepara uma frase a partir de uma string Lucene sem escape

### Descrição

public static function **SolrUtils::queryPhrase**([string](language.types.string.md) `$str`): [string](language.types.string.md)

Prepara uma frase a partir de uma string Lucene sem escape.

### Parâmetros

`str`
:   A string Lucene.

### Valor Retornado

Retorna a frase contida entre aspas duplas.

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
