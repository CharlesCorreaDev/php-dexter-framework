# Retorna todos os valores dos parâmetros group.query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupqueries.php

---

# SolrQuery::getGroupQueries

(PECL solr >= 2.2.0)

SolrQuery::getGroupQueries — Retorna todos os valores dos parâmetros group.query

### Descrição

public function **SolrQuery::getGroupQueries**(): [array](language.types.array.md)

Retorna todos os valores dos parâmetros group.query.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[array](language.types.array.md)

### Veja também

- [SolrQuery::addGroupQuery()](solrquery.addgroupquery.md) - Permite agrupar documentos que correspondem à consulta fornecida

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
