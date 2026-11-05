# Define o número de documentos semelhantes a serem retornados para cada resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltcount.php

---

# SolrQuery::setMltCount

(PECL solr >= 0.9.2)

SolrQuery::setMltCount — Define o número de documentos semelhantes a serem retornados para cada resultado

### Descrição

public function **SolrQuery::setMltCount**([int](language.types.integer.md) `$count`): [SolrQuery](class.solrquery.md)

Define o número de documentos semelhantes a serem retornados para cada resultado.

### Parâmetros

`count`
:   O número de documentos semelhantes a serem retornados para cada resultado.

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
