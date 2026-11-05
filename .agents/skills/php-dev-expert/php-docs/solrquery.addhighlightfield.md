# Mapeia para hl.fl

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addhighlightfield.php

---

# SolrQuery::addHighlightField

(PECL solr >= 0.9.2)

SolrQuery::addHighlightField — Mapeia para hl.fl

### Descrição

public function **SolrQuery::addHighlightField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Mapeia para hl.fl. Isso é usado para especificar que trechos destacados devem ser gerados para um campo específico.

### Parâmetros

`field`
:   Nome do campo

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
