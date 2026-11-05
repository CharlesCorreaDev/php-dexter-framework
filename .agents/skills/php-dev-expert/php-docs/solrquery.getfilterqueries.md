# Retorna uma série de consultas de filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfilterqueries.php

---

# SolrQuery::getFilterQueries

(PECL solr >= 0.9.2)

SolrQuery::getFilterQueries — Retorna uma série de consultas de filtro

### Descrição

public function **SolrQuery::getFilterQueries**(): [array](language.types.array.md)

Retorna uma série de consultas de filtro. São consultas que podem ser utilizadas para restringir o superconjunto de documentos que podem ser devolvidos, sem influenciar na pontuação.

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
