# Retorna todos os campos para os quais o Solr deve gerar trechos destacados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightfields.php

---

# SolrQuery::getHighlightFields

(PECL solr >= 0.9.2)

SolrQuery::getHighlightFields — Retorna todos os campos para os quais o Solr deve gerar trechos destacados

### Descrição

public function **SolrQuery::getHighlightFields**(): [array](language.types.array.md)

Retorna todos os campos para os quais o Solr deve gerar trechos destacados.

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
