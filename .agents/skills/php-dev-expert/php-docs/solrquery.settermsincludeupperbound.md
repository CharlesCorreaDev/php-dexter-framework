# Inclui o termo do limite superior no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsincludeupperbound.php

---

# SolrQuery::setTermsIncludeUpperBound

(PECL solr >= 0.9.2)

SolrQuery::setTermsIncludeUpperBound — Inclui o termo do limite superior no conjunto de resultados

### Descrição

public function **SolrQuery::setTermsIncludeUpperBound**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Inclui o termo do limite superior no conjunto de resultados.

### Parâmetros

`flag`
:   **`true`** ou **`false`**.

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
