# Remove um dos campos de classificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removesortfield.php

---

# SolrQuery::removeSortField

(PECL solr >= 0.9.2)

SolrQuery::removeSortField — Remove um dos campos de classificação

### Descrição

public function **SolrQuery::removeSortField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um dos campos de classificação.

### Parâmetros

`field`
:   O nome do campo

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
