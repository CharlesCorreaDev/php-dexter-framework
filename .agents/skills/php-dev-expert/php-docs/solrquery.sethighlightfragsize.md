# O tamanho dos fragmentos a serem considerados para destaque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightfragsize.php

---

# SolrQuery::setHighlightFragsize

(PECL solr >= 0.9.2)

SolrQuery::setHighlightFragsize — O tamanho dos fragmentos a serem considerados para destaque

### Descrição

public function **SolrQuery::setHighlightFragsize**([int](language.types.integer.md) `$size`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define o tamanho, em caracteres, dos fragmentos a serem considerados para destaque. "0" indica que todo o valor do campo deve ser usado (sem fragmentação).

### Parâmetros

`size`
:   O tamanho, em caracteres, dos fragmentos a considerar para destaque.

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
