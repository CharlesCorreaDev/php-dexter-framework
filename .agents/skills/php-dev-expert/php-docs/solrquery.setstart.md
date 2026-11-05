# Especifica o número de linhas a serem ignoradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setstart.php

---

# SolrQuery::setStart

(PECL solr >= 0.9.2)

SolrQuery::setStart — Especifica o número de linhas a serem ignoradas

### Descrição

public function **SolrQuery::setStart**([int](language.types.integer.md) `$start`): [SolrQuery](class.solrquery.md)

Especifica o número de linhas a serem ignoradas. Útil na paginação de resultados.

### Parâmetros

`start`
:   O número de linhas a serem ignoradas.

### Valor Retornado

Retorna o objeto SolrQuery atual.

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
