# Retorna se a consulta será ou não impulsionada pela relevância de termo de interesse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltboost.php

---

# SolrQuery::getMltBoost

(PECL solr >= 0.9.2)

SolrQuery::getMltBoost — Retorna se a consulta será ou não impulsionada pela relevância de termo de interesse

### Descrição

public function **SolrQuery::getMltBoost**(): [bool](language.types.boolean.md)

Retorna se a consulta será ou não impulsionada pela relevância de termo de interesse.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
