# Adiciona outro parâmetro facet.date.other

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfacetdateother.php

---

# SolrQuery::addFacetDateOther

(PECL solr >= 0.9.2)

SolrQuery::addFacetDateOther — Adiciona outro parâmetro facet.date.other

### Descrição

public function **SolrQuery::addFacetDateOther**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define o parâmetro facet.date.other. Aceita uma substituição de campo opcional.

### Parâmetros

`value`
:   O valor a ser usado.

`field_override`
:   O nome do campo para a substituição.

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
