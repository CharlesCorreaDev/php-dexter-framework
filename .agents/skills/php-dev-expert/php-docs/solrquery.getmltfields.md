# Retorna todos os campos a serem usados ​​para similaridade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltfields.php

---

# SolrQuery::getMltFields

(PECL solr >= 0.9.2)

SolrQuery::getMltFields — Retorna todos os campos a serem usados ​​para similaridade

### Descrição

public function **SolrQuery::getMltFields**(): [array](language.types.array.md)

Retorna todos os campos a serem usados ​​para similaridade.

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
