# Remove um dos campos de consulta moreLikeThis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removemltqueryfield.php

---

# SolrQuery::removeMltQueryField

(PECL solr >= 0.9.2)

SolrQuery::removeMltQueryField — Remove um dos campos de consulta moreLikeThis

### Descrição

public function **SolrQuery::removeMltQueryField**([string](language.types.string.md) `$queryField`): [SolrQuery](class.solrquery.md)

Remove um dos campos de consulta moreLikeThis.

### Parâmetros

`queryField`
:   O campo de consulta.

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
