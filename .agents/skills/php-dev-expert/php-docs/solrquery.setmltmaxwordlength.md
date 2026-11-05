# Define o comprimento máximo da palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltmaxwordlength.php

---

# SolrQuery::setMltMaxWordLength

(PECL solr >= 0.9.2)

SolrQuery::setMltMaxWordLength — Define o comprimento máximo da palavra

### Descrição

public function **SolrQuery::setMltMaxWordLength**([int](language.types.integer.md) `$maxWordLength`): [SolrQuery](class.solrquery.md)

Define o comprimento máximo da palavra acima do qual as palavras serão ignoradas.

### Parâmetros

`maxWordLength`
:   O comprimento máximo da palavra acima do qual as palavras serão ignoradas.

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
