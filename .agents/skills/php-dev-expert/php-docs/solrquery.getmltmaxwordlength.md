# Retorna o comprimento máximo de palavra acima do qual as palavras serão ignoradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltmaxwordlength.php

---

# SolrQuery::getMltMaxWordLength

(PECL solr >= 0.9.2)

SolrQuery::getMltMaxWordLength — Retorna o comprimento máximo de palavra acima do qual as palavras serão ignoradas

### Descrição

public function **SolrQuery::getMltMaxWordLength**(): [int](language.types.integer.md)

Retorna o comprimento máximo de palavra acima do qual as palavras serão ignoradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
