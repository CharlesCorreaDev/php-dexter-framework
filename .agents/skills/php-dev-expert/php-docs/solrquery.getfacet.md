# Retorna o valor do parâmetro de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacet.php

---

# SolrQuery::getFacet

(PECL solr >= 0.9.2)

SolrQuery::getFacet — Retorna o valor do parâmetro de faceta

### Descrição

public function **SolrQuery::getFacet**(): [bool](language.types.boolean.md)

Retorna o valor do parâmetro de faceta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido

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
