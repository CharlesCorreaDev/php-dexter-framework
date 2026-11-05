# Retorna o termo de parada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsupperbound.php

---

# SolrQuery::getTermsUpperBound

(PECL solr >= 0.9.2)

SolrQuery::getTermsUpperBound — Retorna o termo de parada

### Descrição

public function **SolrQuery::getTermsUpperBound**(): [string](language.types.string.md)

Retorna o termo de parada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso e **`null`** se não estiver definido.

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
