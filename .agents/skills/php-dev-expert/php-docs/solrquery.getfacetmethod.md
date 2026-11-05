# Retorna o valor do parâmetro facet.method

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetmethod.php

---

# SolrQuery::getFacetMethod

(PECL solr >= 0.9.2)

SolrQuery::getFacetMethod — Retorna o valor do parâmetro facet.method

### Descrição

public function **SolrQuery::getFacetMethod**([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

Retorna o valor do parâmetro facet.method. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

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
