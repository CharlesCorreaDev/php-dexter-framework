# Define o número máximo de termos a serem retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermslimit.php

---

# SolrQuery::setTermsLimit

(PECL solr >= 0.9.2)

SolrQuery::setTermsLimit — Define o número máximo de termos a serem retornados

### Descrição

public function **SolrQuery::setTermsLimit**([int](language.types.integer.md) `$limit`): [SolrQuery](class.solrquery.md)

Define o número máximo de termos a serem retornados.

### Parâmetros

`limit`
:   O número máximo de termos a serem retornados. Todos os termos serão retornados se o limite for negativo.

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
