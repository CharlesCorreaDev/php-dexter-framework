# Retorna os caracteres brutos do termo indexado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsreturnraw.php

---

# SolrQuery::setTermsReturnRaw

(PECL solr >= 0.9.2)

SolrQuery::setTermsReturnRaw — Retorna os caracteres brutos do termo indexado

### Descrição

public function **SolrQuery::setTermsReturnRaw**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Se verdadeiro, retorna os caracteres brutos do termo indexado, independentemente de serem legíveis por humanos.

### Parâmetros

`value`
:   **`true`** ou **`false`**.

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
