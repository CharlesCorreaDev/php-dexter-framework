# Remove um dos parâmetros stats.field

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removestatsfield.php

---

# SolrQuery::removeStatsField

(PECL solr >= 0.9.2)

SolrQuery::removeStatsField — Remove um dos parâmetros stats.field

### Descrição

public function **SolrQuery::removeStatsField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um dos parâmetros stats.field.

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
