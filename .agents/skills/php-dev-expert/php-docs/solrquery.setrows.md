# Especifica o número máximo de linhas a serem retornadas no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setrows.php

---

# SolrQuery::setRows

(PECL solr >= 0.9.2)

SolrQuery::setRows — Especifica o número máximo de linhas a serem retornadas no resultado

### Descrição

public function **SolrQuery::setRows**([int](language.types.integer.md) `$rows`): [SolrQuery](class.solrquery.md)

Especifica o número máximo de linhas a serem retornadas no resultado.

### Parâmetros

`rows`
:   O número máximo de linhas a serem retornadas.

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
