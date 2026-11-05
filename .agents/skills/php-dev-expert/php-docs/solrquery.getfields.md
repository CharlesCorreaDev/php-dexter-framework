# Retorna a lista de campos que serão retornados na resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfields.php

---

# SolrQuery::getFields

(PECL solr >= 0.9.2)

SolrQuery::getFields — Retorna a lista de campos que serão retornados na resposta

### Descrição

public function **SolrQuery::getFields**(): [array](language.types.array.md)

Retorna a lista de campos que serão retornados na resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array em caso de sucesso e **`null`** se não estiver definido.

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
