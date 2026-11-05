# Define se a consulta será impulsionada pela relevância de termos de interesse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltboost.php

---

# SolrQuery::setMltBoost

(PECL solr >= 0.9.2)

SolrQuery::setMltBoost — Define se a consulta será impulsionada pela relevância de termos de interesse

### Descrição

public function **SolrQuery::setMltBoost**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Define se a consulta será impulsionada pela relevância de termos de interesse.

### Parâmetros

`value`
:   Define para **`true`** ou **`false`**

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
