# Retorna o estado atual do parâmetro facet.missing

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetmissing.php

---

# SolrQuery::getFacetMissing

(PECL solr >= 0.9.2)

SolrQuery::getFacetMissing — Retorna o estado atual do parâmetro facet.missing

### Descrição

public function **SolrQuery::getFacetMissing**([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

Retorna o estado atual do parâmetro facet.missing. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
