# Retorna o texto que aparece após um termo destacado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightsimplepost.php

---

# SolrQuery::getHighlightSimplePost

(PECL solr >= 0.9.2)

SolrQuery::getHighlightSimplePost — Retorna o texto que aparece após um termo destacado

### Descrição

public function **SolrQuery::getHighlightSimplePost**([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

Retorna o texto que aparece após um termo destacado. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna uma string em caso de sucesso e **`null`** se não estiver definido.

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
