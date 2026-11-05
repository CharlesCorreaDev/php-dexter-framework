# Remove um campo da lista de campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefield.php

---

# SolrQuery::removeField

(PECL solr >= 0.9.2)

SolrQuery::removeField — Remove um campo da lista de campos

### Descrição

public function **SolrQuery::removeField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um campo da lista de campos.

### Parâmetros

`field`
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
