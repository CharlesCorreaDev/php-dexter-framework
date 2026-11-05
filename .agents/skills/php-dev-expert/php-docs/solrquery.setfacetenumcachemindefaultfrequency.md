# Define a frequência mínima do documento usada para determinar a contagem de prazos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetenumcachemindefaultfrequency.php

---

# SolrQuery::setFacetEnumCacheMinDefaultFrequency

(PECL solr >= 0.9.2)

SolrQuery::setFacetEnumCacheMinDefaultFrequency — Define a frequência mínima do documento usada para determinar a contagem de prazos

### Descrição

public function **SolrQuery::setFacetEnumCacheMinDefaultFrequency**([int](language.types.integer.md) `$frequency`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define a frequência mínima do documento usada para determinar a contagem de prazos.

### Parâmetros

`value`
:   A frequência mínima.

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
