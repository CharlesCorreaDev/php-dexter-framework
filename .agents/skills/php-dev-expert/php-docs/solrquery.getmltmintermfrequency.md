# Retorna a frequência abaixo da qual os termos serão ignorados no documento de origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltmintermfrequency.php

---

# SolrQuery::getMltMinTermFrequency

(PECL solr >= 0.9.2)

SolrQuery::getMltMinTermFrequency — Retorna a frequência abaixo da qual os termos serão ignorados no documento de origem

### Descrição

public function **SolrQuery::getMltMinTermFrequency**(): [int](language.types.integer.md)

Retorna a frequência abaixo da qual os termos serão ignorados no documento de origem.

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
