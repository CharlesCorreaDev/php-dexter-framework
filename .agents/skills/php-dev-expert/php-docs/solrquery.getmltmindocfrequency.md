# Retorna a frequência limite na qual as palavras serão ignoradas e que não ocorrem em pelo menos esta quantidade de documentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltmindocfrequency.php

---

# SolrQuery::getMltMinDocFrequency

(PECL solr >= 0.9.2)

SolrQuery::getMltMinDocFrequency — Retorna a frequência limite na qual as palavras serão ignoradas e que não ocorrem em pelo menos esta quantidade de documentos

### Descrição

public function **SolrQuery::getMltMinDocFrequency**(): [int](language.types.integer.md)

Retorna a frequência limite na qual as palavras serão ignoradas e que não ocorrem em pelo menos esta quantidade de documentos.

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
