# Define o comprimento mínimo da palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltminwordlength.php

---

# SolrQuery::setMltMinWordLength

(PECL solr >= 0.9.2)

SolrQuery::setMltMinWordLength — Define o comprimento mínimo da palavra

### Descrição

public function **SolrQuery::setMltMinWordLength**([int](language.types.integer.md) `$minWordLength`): [SolrQuery](class.solrquery.md)

Define o comprimento mínimo da palavra abaixo do qual as palavras serão ignoradas.

### Parâmetros

`minWordLength`
:   O comprimento mínimo da palavra abaixo do qual as palavras serão ignoradas.

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
