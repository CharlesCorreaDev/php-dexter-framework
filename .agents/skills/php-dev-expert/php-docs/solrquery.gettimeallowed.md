# Retorna o tempo em milissegundos permitido para a consulta terminar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettimeallowed.php

---

# SolrQuery::getTimeAllowed

(PECL solr >= 0.9.2)

SolrQuery::getTimeAllowed — Retorna o tempo em milissegundos permitido para a consulta terminar

### Descrição

public function **SolrQuery::getTimeAllowed**(): [int](language.types.integer.md)

Retorna o tempo em milissegundos permitido para a consulta terminar.

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
