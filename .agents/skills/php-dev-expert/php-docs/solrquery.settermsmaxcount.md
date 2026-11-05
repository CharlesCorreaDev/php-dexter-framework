# Define a frequência máxima do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsmaxcount.php

---

# SolrQuery::setTermsMaxCount

(PECL solr >= 0.9.2)

SolrQuery::setTermsMaxCount — Define a frequência máxima do documento

### Descrição

public function **SolrQuery::setTermsMaxCount**([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

Define a frequência máxima do documento.

### Parâmetros

`frequency`
:   A frequência máxima do documento.

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
