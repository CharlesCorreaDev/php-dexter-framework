# Retorna o número máximo de termos que o Solr deve retornar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermslimit.php

---

# SolrQuery::getTermsLimit

(PECL solr >= 0.9.2)

SolrQuery::getTermsLimit — Retorna o número máximo de termos que o Solr deve retornar

### Descrição

public function **SolrQuery::getTermsLimit**(): [int](language.types.integer.md)

Retorna o número máximo de termos que o Solr deve retornar.

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
