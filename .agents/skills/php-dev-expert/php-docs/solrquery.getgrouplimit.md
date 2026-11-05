# Retorna o valor group.limit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgrouplimit.php

---

# SolrQuery::getGroupLimit

(PECL solr >= 2.2.0)

SolrQuery::getGroupLimit — Retorna o valor group.limit

### Descrição

public function **SolrQuery::getGroupLimit**(): [int](language.types.integer.md)

Retorna o valor group.limit.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupLimit()](solrquery.setgrouplimit.md) - Especifica o número de resultados a serem retornados para cada grupo

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
