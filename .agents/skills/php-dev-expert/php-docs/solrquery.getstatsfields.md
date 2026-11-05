# Retorna todos os campos de estatísticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getstatsfields.php

---

# SolrQuery::getStatsFields

(PECL solr >= 0.9.2)

SolrQuery::getStatsFields — Retorna todos os campos de estatísticas

### Descrição

public function **SolrQuery::getStatsFields**(): [array](language.types.array.md)

Retorna todos os campos de estatísticas.

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
