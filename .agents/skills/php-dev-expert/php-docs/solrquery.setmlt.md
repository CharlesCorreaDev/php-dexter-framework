# Ativa ou desativa moreLikeThis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmlt.php

---

# SolrQuery::setMlt

(PECL solr >= 0.9.2)

SolrQuery::setMlt — Ativa ou desativa moreLikeThis

### Descrição

public function **SolrQuery::setMlt**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Ativa ou desativa moreLikeThis.

### Parâmetros

`flag`
:   **`true`** ativa e **`false`** desliga.

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
