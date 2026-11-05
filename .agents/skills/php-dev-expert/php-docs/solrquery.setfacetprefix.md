# Especifica uma string de prefixo com a qual serão limitados os termos facetados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetprefix.php

---

# SolrQuery::setFacetPrefix

(PECL solr >= 0.9.2)

SolrQuery::setFacetPrefix — Especifica uma string de prefixo com a qual serão limitados os termos facetados

### Descrição

public function **SolrQuery::setFacetPrefix**([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Especifica uma string de prefixo com a qual serão limitados os termos facetados.

### Parâmetros

`prefix`
:   A string de prefixo.

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
