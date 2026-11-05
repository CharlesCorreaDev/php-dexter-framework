# Retorna um array de campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getexpandsortfields.php

---

# SolrQuery::getExpandSortFields

(PECL solr >= 2.2.0)

SolrQuery::getExpandSortFields — Retorna um array de campos

### Descrição

public function **SolrQuery::getExpandSortFields**(): [array](language.types.array.md)

Retorna um array de campos

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de campos.

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
