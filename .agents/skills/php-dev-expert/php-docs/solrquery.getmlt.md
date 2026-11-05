# Retorna se os resultados MoreLikeThis devem ou não ser habilitados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmlt.php

---

# SolrQuery::getMlt

(PECL solr >= 0.9.2)

SolrQuery::getMlt — Retorna se os resultados MoreLikeThis devem ou não ser habilitados

### Descrição

public function **SolrQuery::getMlt**(): [bool](language.types.boolean.md)

Retorna se os resultados MoreLikeThis devem ou não ser habilitados.

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
