# Define o número máximo de termos de consulta incluídos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltmaxnumqueryterms.php

---

# SolrQuery::setMltMaxNumQueryTerms

(PECL solr >= 0.9.2)

SolrQuery::setMltMaxNumQueryTerms — Define o número máximo de termos de consulta incluídos

### Descrição

public function **SolrQuery::setMltMaxNumQueryTerms**([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

Define o número máximo de termos de consulta que serão incluídos em qualquer consulta gerada.

### Parâmetros

`value`
:   O número máximo de termos de consulta que serão incluídos em qualquer consulta gerada.

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
