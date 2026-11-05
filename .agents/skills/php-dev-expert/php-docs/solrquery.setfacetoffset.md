# Define a posição na lista de restrições para permitir a paginação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetoffset.php

---

# SolrQuery::setFacetOffset

(PECL solr >= 0.9.2)

SolrQuery::setFacetOffset — Define a posição na lista de restrições para permitir a paginação

### Descrição

public function **SolrQuery::setFacetOffset**([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define a posição na lista de restrições para permitir a paginação.

### Parâmetros

`offset`
:   A posição.

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
