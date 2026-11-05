# Retorna campos de grupo (valores de parâmetro group.field)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupfields.php

---

# SolrQuery::getGroupFields

(PECL solr >= 2.2.0)

SolrQuery::getGroupFields — Retorna campos de grupo (valores de parâmetro group.field)

### Descrição

public function **SolrQuery::getGroupFields**(): [array](language.types.array.md)

Retorna campos de grupo (valores do parâmetro group.field).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::addGroupField()](solrquery.addgroupfield.md) - Adiciona um campo para ser usado para agrupar resultados

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
