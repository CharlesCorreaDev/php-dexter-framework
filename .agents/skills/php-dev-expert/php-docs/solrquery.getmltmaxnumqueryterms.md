# Retorna o número máximo de termos de consulta que serão incluídos em qualquer consulta gerada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltmaxnumqueryterms.php

---

# SolrQuery::getMltMaxNumQueryTerms

(PECL solr >= 0.9.2)

SolrQuery::getMltMaxNumQueryTerms — Retorna o número máximo de termos de consulta que serão incluídos em qualquer consulta gerada

### Descrição

public function **SolrQuery::getMltMaxNumQueryTerms**(): [int](language.types.integer.md)

Retorna o número máximo de termos de consulta que serão incluídos em qualquer consulta gerada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
