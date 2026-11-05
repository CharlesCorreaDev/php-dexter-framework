# Remove um dos campos moreLikeThis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removemltfield.php

---

# SolrQuery::removeMltField

(PECL solr >= 0.9.2)

SolrQuery::removeMltField — Remove um dos campos moreLikeThis

### Descrição

public function **SolrQuery::removeMltField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um dos campos moreLikeThis.

### Parâmetros

`field`
:   Nome do campo

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
