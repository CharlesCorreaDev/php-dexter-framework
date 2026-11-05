# Especifica a expressão regular para fragmentação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightregexpattern.php

---

# SolrQuery::setHighlightRegexPattern

(PECL solr >= 0.9.2)

SolrQuery::setHighlightRegexPattern — Especifica a expressão regular para fragmentação

### Descrição

public function **SolrQuery::setHighlightRegexPattern**([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

Especifica a expressão regular para fragmentação. Pode ser usado para extrair frases.

### Parâmetros

`value`
:   A expressão regular para fragmentação. Pode ser usada para extrair frases.

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
