# Retorna o campo do qual os termos são recuperados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsfield.php

---

# SolrQuery::getTermsField

(PECL solr >= 0.9.2)

SolrQuery::getTermsField — Retorna o campo do qual os termos são recuperados

### Descrição

public function **SolrQuery::getTermsField**(): [string](language.types.string.md)

Retorna o campo do qual os termos são recuperados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso e **`null`** se não estiver definido.

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
