# Ativa ou desativa o destaque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlight.php

---

# SolrQuery::setHighlight

(PECL solr >= 0.9.2)

SolrQuery::setHighlight — Ativa ou desativa o destaque

### Descrição

public function **SolrQuery::setHighlight**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Configurando-o como **`true`** permite que trechos destacados sejam gerados na resposta da consulta.

Definir como **`false`** desativa o destaque

### Parâmetros

`flag`
:   Ativa ou desativa o destaque.

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
