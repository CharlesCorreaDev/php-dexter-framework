# Habilita ou desabilita o TermsComponent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setterms.php

---

# SolrQuery::setTerms

(PECL solr >= 0.9.2)

SolrQuery::setTerms — Habilita ou desabilita o TermsComponent

### Descrição

public function **SolrQuery::setTerms**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Habilita ou desabilita o TermsComponent.

### Parâmetros

`flag`
:   **`true`** habilita, **`false`** desabilita.

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
