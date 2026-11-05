# Mapeia para facet.mincount

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetmincount.php

---

# SolrQuery::setFacetMinCount

(PECL solr >= 0.9.2)

SolrQuery::setFacetMinCount — Mapeia para facet.mincount

### Descrição

public function **SolrQuery::setFacetMinCount**([int](language.types.integer.md) `$mincount`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define as contagens mínimas para campos de atributos que devem ser incluídos na resposta.

### Parâmetros

`mincount`
:   A contagem mínima.

`field_override`
:   O nome do campo.

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
