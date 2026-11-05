# Retorna a consulta de destaque (hl.q)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightquery.php

---

# SolrQuery::getHighlightQuery

(PECL solr >= 2.7.0)

SolrQuery::getHighlightQuery — Retorna a consulta de destaque (hl.q)

### Descrição

public function **SolrQuery::getHighlightQuery**(): [string](language.types.string.md)

Retorna a consulta de destaque definida anteriormente.
Este parâmetro permite destacar termos ou campos diferentes daqueles usados ​​para recuperar documentos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a string SolrHighlightQuery atual ou nulo se não estiver definida.

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
