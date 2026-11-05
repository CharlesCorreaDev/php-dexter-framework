# Define o nome do campo do qual os termos serão obtidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsfield.php

---

# SolrQuery::setTermsField

(PECL solr >= 0.9.2)

SolrQuery::setTermsField — Define o nome do campo do qual os termos serão obtidos

### Descrição

public function **SolrQuery::setTermsField**([string](language.types.string.md) `$fieldname`): [SolrQuery](class.solrquery.md)

Define o nome do campo do qual os termos serão obtidos.

### Parâmetros

`fieldname`
:   O nome do campo.

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
