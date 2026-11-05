# Especifica o tipo de algoritmo a ser usado ao facetar um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetmethod.php

---

# SolrQuery::setFacetMethod

(PECL solr >= 0.9.2)

SolrQuery::setFacetMethod — Especifica o tipo de algoritmo a ser usado ao facetar um campo

### Descrição

public function **SolrQuery::setFacetMethod**([string](language.types.string.md) `$method`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Especifica o tipo de algoritmo a ser usado ao facetar um campo. Este método aceita substituição de campo opcional.

### Parâmetros

`method`
:   O método a ser usado.

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
