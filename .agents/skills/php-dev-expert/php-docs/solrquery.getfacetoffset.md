# Retorna um deslocamento na lista de restrições a serem usadas para paginação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetoffset.php

---

# SolrQuery::getFacetOffset

(PECL solr >= 0.9.2)

SolrQuery::getFacetOffset — Retorna um deslocamento na lista de restrições a serem usadas para paginação

### Descrição

public function **SolrQuery::getFacetOffset**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna um deslocamento na lista de restrições a serem usadas para paginação. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo para substituição.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
