# Retorna o número de documentos semelhantes a serem retornados para cada resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltcount.php

---

# SolrQuery::getMltCount

(PECL solr >= 0.9.2)

SolrQuery::getMltCount — Retorna o número de documentos semelhantes a serem retornados para cada resultado

### Descrição

public function **SolrQuery::getMltCount**(): [int](language.types.integer.md)

Retorna o número de documentos semelhantes a serem retornados para cada resultado.

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
