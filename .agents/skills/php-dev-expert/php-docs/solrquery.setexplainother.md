# Define o parâmetro de consulta comum explainOther

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setexplainother.php

---

# SolrQuery::setExplainOther

(PECL solr >= 0.9.2)

SolrQuery::setExplainOther — Define o parâmetro de consulta comum explainOther

### Descrição

public function **SolrQuery::setExplainOther**([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

Define o parâmetro de consulta comum explainOther.

### Parâmetros

`query`
:   A consulta Lucene para identificar um conjunto de documentos

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
