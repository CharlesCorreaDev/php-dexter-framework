# Retorna todas as facetas de estatísticas que foram definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getstatsfacets.php

---

# SolrQuery::getStatsFacets

(PECL solr >= 0.9.2)

SolrQuery::getStatsFacets — Retorna todas as facetas de estatísticas que foram definidas

### Descrição

public function **SolrQuery::getStatsFacets**(): [array](language.types.array.md)

Retorna todas as facetas de estatísticas que foram definidas.

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
