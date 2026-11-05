# Ativa ou desativa a facetação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacet.php

---

# SolrQuery::setFacet

(PECL solr >= 0.9.2)

SolrQuery::setFacet — Ativa ou desativa a facetação

### Descrição

public function **SolrQuery::setFacet**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Mapeia para o parâmetro de faceta. Ativa ou desativa a facetação.

### Parâmetros

`value`
:   **`true`** habilita facetação e **`false`** desabilita.

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
