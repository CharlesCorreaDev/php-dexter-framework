# Define sinalizador para mostrar informações de depuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setshowdebuginfo.php

---

# SolrQuery::setShowDebugInfo

(PECL solr >= 0.9.2)

SolrQuery::setShowDebugInfo — Define sinalizador para mostrar informações de depuração

### Descrição

public function **SolrQuery::setShowDebugInfo**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Define se serão mostradas informações de depuração.

### Parâmetros

`flag`
:   Define se serão mostradas informações de depuração. **`true`** ou **`false`**

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
