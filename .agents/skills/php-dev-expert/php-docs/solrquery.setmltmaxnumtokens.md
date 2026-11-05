# Especifica o número máximo de tokens a serem analisados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltmaxnumtokens.php

---

# SolrQuery::setMltMaxNumTokens

(PECL solr >= 0.9.2)

SolrQuery::setMltMaxNumTokens — Especifica o número máximo de tokens a serem analisados

### Descrição

public function **SolrQuery::setMltMaxNumTokens**([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

Especifica o número máximo de tokens a serem analisados ​​em cada campo de documento de exemplo que não é armazenado com suporte a TermVector.

### Parâmetros

`value`
:   O número máximo de tokens a serem analisados

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
