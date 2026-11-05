# Retorna o parâmetro expand.q da consulta de expansão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getexpandquery.php

---

# SolrQuery::getExpandQuery

(PECL solr >= 2.2.0)

SolrQuery::getExpandQuery — Retorna o parâmetro expand.q da consulta de expansão

### Descrição

public function **SolrQuery::getExpandQuery**(): [array](language.types.array.md)

Retorna o parâmetro expand.q da consulta de expansão

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a consulta de expansão.

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
