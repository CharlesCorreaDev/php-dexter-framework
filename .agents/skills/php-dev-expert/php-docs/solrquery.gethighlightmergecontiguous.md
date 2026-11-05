# Retorna se os fragmentos contíguos serão ou não colapsados em um único fragmento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightmergecontiguous.php

---

# SolrQuery::getHighlightMergeContiguous

(PECL solr >= 0.9.2)

SolrQuery::getHighlightMergeContiguous — Retorna se os fragmentos contíguos serão ou não colapsados em um único fragmento

### Descrição

public function **SolrQuery::getHighlightMergeContiguous**([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

Retorna se os fragmentos contíguos serão ou não colapsados em um único fragmento. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
