# Retorna a consulta principal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getquery.php

---

# SolrQuery::getQuery

(PECL solr >= 0.9.2)

SolrQuery::getQuery — Retorna a consulta principal

### Descrição

public function **SolrQuery::getQuery**(): [string](language.types.string.md)

Retorna a consulta de pesquisa principal

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso e **`null`** se não estiver definido.

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
