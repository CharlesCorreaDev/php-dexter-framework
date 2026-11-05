# Retorna o valor percentual do cache do grupo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupcachepercent.php

---

# SolrQuery::getGroupCachePercent

(PECL solr >= 2.2.0)

SolrQuery::getGroupCachePercent — Retorna o valor percentual do cache do grupo

### Descrição

public function **SolrQuery::getGroupCachePercent**(): [int](language.types.integer.md)

Retorna o valor percentual do cache do grupo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupCachePercent()](solrquery.setgroupcachepercent.md) - Ativa o cache para agrupamento de resultados

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
