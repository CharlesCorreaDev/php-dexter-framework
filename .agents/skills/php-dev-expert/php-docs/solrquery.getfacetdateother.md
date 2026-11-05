# Retorna o valor do parâmetro facet.date.other

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetdateother.php

---

# SolrQuery::getFacetDateOther

(PECL solr >= 0.9.2)

SolrQuery::getFacetDateOther — Retorna o valor do parâmetro facet.date.other

### Descrição

public function **SolrQuery::getFacetDateOther**([string](language.types.string.md) `$field_override` = ?): [array](language.types.array.md)

Retorna o valor do parâmetro facet.date.other. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um [array](language.types.array.md) em caso de sucesso e **`null`** se não estiver definido.

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
