# Define a frequência mínima do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsmincount.php

---

# SolrQuery::setTermsMinCount

(PECL solr >= 0.9.2)

SolrQuery::setTermsMinCount — Define a frequência mínima do documento

### Descrição

public function **SolrQuery::setTermsMinCount**([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

Define a frequência mínima do documento a ser retornado para ser incluído.

### Parâmetros

`frequency`
:   A frequência mínima.

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
