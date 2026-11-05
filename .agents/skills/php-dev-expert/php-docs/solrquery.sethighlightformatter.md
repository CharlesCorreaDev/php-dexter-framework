# Especifica um formatador para a saída de destaque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightformatter.php

---

# SolrQuery::setHighlightFormatter

(PECL solr >= 0.9.2)

SolrQuery::setHighlightFormatter — Especifica um formatador para a saída de destaque

### Descrição

public function **SolrQuery::setHighlightFormatter**([string](language.types.string.md) `$formatter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Especifica um formatador para a saída de destaque.

### Parâmetros

`formatter`
:   Atualmente o único valor válido é "simple".

`field_override`
:   O nome do campo.

### Valor Retornado

Retorna uma instância de [SolrQuery](class.solrquery.md).

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
