# Retorna o número máximo de tokens a analisar em cada campo de documento que não é armazenado com suporte a TermVector

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getmltmaxnumtokens.php

---

# SolrQuery::getMltMaxNumTokens

(PECL solr >= 0.9.2)

SolrQuery::getMltMaxNumTokens — Retorna o número máximo de tokens a analisar em cada campo de documento que não é armazenado com suporte a TermVector

### Descrição

public function **SolrQuery::getMltMaxNumTokens**(): [int](language.types.integer.md)

Retorna o número máximo de tokens a analisar em cada campo de documento que não é armazenado com suporte a TermVector.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro em caso de sucesso e **`null`** se não estiver definido.

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
