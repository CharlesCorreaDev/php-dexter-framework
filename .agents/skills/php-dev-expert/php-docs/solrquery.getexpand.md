# Informa se a expansão do grupo está habilitada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getexpand.php

---

# SolrQuery::getExpand

(PECL solr >= 2.2.0)

SolrQuery::getExpand — Informa se a expansão do grupo está habilitada

### Descrição

public function **SolrQuery::getExpand**(): [bool](language.types.boolean.md)

Retorna **`true`** se a expansão do grupo estiver habilitada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna se a expansão do grupo está habilitada.

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
