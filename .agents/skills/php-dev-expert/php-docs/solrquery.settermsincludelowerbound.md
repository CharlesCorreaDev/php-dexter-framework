# Inclui o termo do limite inferior no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsincludelowerbound.php

---

# SolrQuery::setTermsIncludeLowerBound

(PECL solr >= 0.9.2)

SolrQuery::setTermsIncludeLowerBound — Inclui o termo do limite inferior no conjunto de resultados

### Descrição

public function **SolrQuery::setTermsIncludeLowerBound**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Inclui o termo do limite inferior no conjunto de resultados.

### Parâmetros

`flag`
:   Inclui o termo do limite inferior no conjunto de resultados.

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
