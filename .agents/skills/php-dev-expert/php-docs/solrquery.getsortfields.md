# Retorna todos os campos de classificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getsortfields.php

---

# SolrQuery::getSortFields

(PECL solr >= 0.9.2)

SolrQuery::getSortFields — Retorna todos os campos de classificação

### Descrição

public function **SolrQuery::getSortFields**(): [array](language.types.array.md)

Retorna todos os campos de classificação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array em caso de sucesso e **`null`** se nenhum dos parâmetros foi definido.

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
