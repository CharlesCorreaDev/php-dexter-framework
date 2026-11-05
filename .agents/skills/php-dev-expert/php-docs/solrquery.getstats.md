# Retorna se as estatísticas estão habilitadas ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getstats.php

---

# SolrQuery::getStats

(PECL solr >= 0.9.2)

SolrQuery::getStats — Retorna se as estatísticas estão habilitadas ou não

### Descrição

public function **SolrQuery::getStats**(): [bool](language.types.boolean.md)

Retorna se as estatísticas estão habilitadas ou não.

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
