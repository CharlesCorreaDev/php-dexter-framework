# Retorna o valor group.ngroups

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupngroups.php

---

# SolrQuery::getGroupNGroups

(PECL solr >= 2.2.0)

SolrQuery::getGroupNGroups — Retorna o valor group.ngroups

### Descrição

public function **SolrQuery::getGroupNGroups**(): [bool](language.types.boolean.md)

Retorna o valor group.ngroups.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupNGroups()](solrquery.setgroupngroups.md) - Define a inclusão do número de grupos que corresponderam à consulta nos resultados

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
