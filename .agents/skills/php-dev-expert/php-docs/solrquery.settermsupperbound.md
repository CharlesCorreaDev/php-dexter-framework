# Define o termo de parada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsupperbound.php

---

# SolrQuery::setTermsUpperBound

(PECL solr >= 0.9.2)

SolrQuery::setTermsUpperBound — Define o termo de parada

### Descrição

public function **SolrQuery::setTermsUpperBound**([string](language.types.string.md) `$upperBound`): [SolrQuery](class.solrquery.md)

Define o termo de parada.

### Parâmetros

`upperBound`
:   O termo de parada.

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
