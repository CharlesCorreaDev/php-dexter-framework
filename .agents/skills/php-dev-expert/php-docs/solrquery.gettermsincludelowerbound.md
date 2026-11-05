# Retorna se o limite inferior no conjunto de resultados deve ou não ser incluído

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsincludelowerbound.php

---

# SolrQuery::getTermsIncludeLowerBound

(PECL solr >= 0.9.2)

SolrQuery::getTermsIncludeLowerBound — Retorna se o limite inferior no conjunto de resultados deve ou não ser incluído

### Descrição

public function **SolrQuery::getTermsIncludeLowerBound**(): [bool](language.types.boolean.md)

Retorna se o limite inferior no conjunto de resultados deve ou não ser incluído.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
