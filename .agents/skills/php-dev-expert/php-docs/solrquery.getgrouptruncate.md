# Retorna o valor group.truncate

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgrouptruncate.php

---

# SolrQuery::getGroupTruncate

(PECL solr >= 2.2.0)

SolrQuery::getGroupTruncate — Retorna o valor group.truncate

### Descrição

public function **SolrQuery::getGroupTruncate**(): [bool](language.types.boolean.md)

Retorna o valor group.truncate.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupTruncate()](solrquery.setgrouptruncate.md) - Define se as contagens de facetas são baseadas no documento mais relevante de cada grupo que corresponde à consulta

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
