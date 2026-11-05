# Retorna os campos de consulta e seus impulsos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltqueryfields.php

---

# SolrQuery::getMltQueryFields

(PECL solr >= 0.9.2)

SolrQuery::getMltQueryFields — Retorna os campos de consulta e seus impulsos

### Descrição

public function **SolrQuery::getMltQueryFields**(): [array](language.types.array.md)

Retorna os campos de consulta e seus impulsos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array em caso de sucesso e **`null`** se não estiver definido.

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
