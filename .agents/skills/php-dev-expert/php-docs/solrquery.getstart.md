# Retorna a posição no conjunto completo de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getstart.php

---

# SolrQuery::getStart

(PECL solr >= 0.9.2)

SolrQuery::getStart — Retorna a posição no conjunto completo de resultados

### Descrição

public function **SolrQuery::getStart**(): [int](language.types.integer.md)

Retorna a posição no conjunto completo de resultados para as consultas, onde o conjunto de documentos retornados deve começar.

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
