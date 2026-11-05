# Especifica o termo de início

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermslowerbound.php

---

# SolrQuery::setTermsLowerBound

(PECL solr >= 0.9.2)

SolrQuery::setTermsLowerBound — Especifica o termo de início

### Descrição

public function **SolrQuery::setTermsLowerBound**([string](language.types.string.md) `$lowerBound`): [SolrQuery](class.solrquery.md)

Especifica o termo de início.

### Parâmetros

`lowerBound`
:   O termo de início.

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
