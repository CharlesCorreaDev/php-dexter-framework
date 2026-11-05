# Informa se fragmentos contíguos devem ou não ser colapsados em um único fragmento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightmergecontiguous.php

---

# SolrQuery::setHighlightMergeContiguous

(PECL solr >= 0.9.2)

SolrQuery::setHighlightMergeContiguous — Informa se fragmentos contíguos devem ou não ser colapsados em um único fragmento

### Descrição

public function **SolrQuery::setHighlightMergeContiguous**([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Informa se fragmentos contíguos devem ou não ser colapsados em um único fragmento.

### Parâmetros

`value`
:   Informa se fragmentos contíguos devem ou não ser colapsados em um único fragmento.

`field_override`
:   O nome do campo.

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
