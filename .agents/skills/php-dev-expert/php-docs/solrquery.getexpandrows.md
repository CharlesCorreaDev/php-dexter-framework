# Retorna o número de linhas a serem exibidas em cada grupo (expand.rows)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getexpandrows.php

---

# SolrQuery::getExpandRows

(PECL solr >= 2.2.0)

SolrQuery::getExpandRows — Retorna o número de linhas a serem exibidas em cada grupo (expand.rows)

### Descrição

public function **SolrQuery::getExpandRows**(): [int](language.types.integer.md)

Retorna o número de linhas a serem exibidas em cada grupo (expand.rows)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de linhas.

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
