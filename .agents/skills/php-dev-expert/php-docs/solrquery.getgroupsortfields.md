# Retorna o valor group.sort

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupsortfields.php

---

# SolrQuery::getGroupSortFields

(PECL solr >= 2.2.0)

SolrQuery::getGroupSortFields — Retorna o valor group.sort

### Descrição

public function **SolrQuery::getGroupSortFields**(): [array](language.types.array.md)

Retorna o valor group.sort.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::addGroupSortField()](solrquery.addgroupsortfield.md) - Adiciona um campo de classificação de grupo (parâmetro group.sort)

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
