# Exclui o cabeçalho dos resultados retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setomitheader.php

---

# SolrQuery::setOmitHeader

(PECL solr >= 0.9.2)

SolrQuery::setOmitHeader — Exclui o cabeçalho dos resultados retornados

### Descrição

public function **SolrQuery::setOmitHeader**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Exclui o cabeçalho dos resultados retornados.

### Parâmetros

`flag`
:   **`true`** exclui o cabeçalho do resultado.

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
