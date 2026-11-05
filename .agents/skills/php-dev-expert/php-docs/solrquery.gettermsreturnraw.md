# Informa se os caracteres devem ser retornados de forma bruta ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsreturnraw.php

---

# SolrQuery::getTermsReturnRaw

(PECL solr >= 0.9.2)

SolrQuery::getTermsReturnRaw — Informa se os caracteres devem ser retornados de forma bruta ou não

### Descrição

public function **SolrQuery::getTermsReturnRaw**(): [bool](language.types.boolean.md)

Retorna um booleano indicando os caracteres brutos do termo indexado devem ou não ser retornados, independentemente de serem legíveis por humanos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
