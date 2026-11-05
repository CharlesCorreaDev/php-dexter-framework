# Retorna o número de caracteres dos fragmentos a serem considerados para destaque

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightfragsize.php

---

# SolrQuery::getHighlightFragsize

(PECL solr >= 0.9.2)

SolrQuery::getHighlightFragsize — Retorna o número de caracteres dos fragmentos a serem considerados para destaque

### Descrição

public function **SolrQuery::getHighlightFragsize**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna o número de caracteres dos fragmentos a serem considerados para destaque. Zero implica nenhuma fragmentação. Todo o campo deve ser usado.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um número inteiro em caso de sucesso ou **`null`** se não estiver definido.

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
