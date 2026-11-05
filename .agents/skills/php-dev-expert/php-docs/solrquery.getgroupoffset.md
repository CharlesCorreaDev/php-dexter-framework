# Retorna o valor group.offset

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupoffset.php

---

# SolrQuery::getGroupOffset

(PECL solr >= 2.2.0)

SolrQuery::getGroupOffset — Retorna o valor group.offset

### Descrição

public function **SolrQuery::getGroupOffset**(): [int](language.types.integer.md)

Retorna o valor group.offset.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupOffset()](solrquery.setgroupoffset.md) - Define o parâmetro group.offset

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
