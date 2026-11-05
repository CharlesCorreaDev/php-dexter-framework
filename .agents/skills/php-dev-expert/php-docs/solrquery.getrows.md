# Retorna o número máximo de documentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getrows.php

---

# SolrQuery::getRows

(PECL solr >= 0.9.2)

SolrQuery::getRows — Retorna o número máximo de documentos

### Descrição

public function **SolrQuery::getRows**(): [int](language.types.integer.md)

Retorna o número máximo de documentos do conjunto completo de resultados para retornar ao cliente para cada solicitação.

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
