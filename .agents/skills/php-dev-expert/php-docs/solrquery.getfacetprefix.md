# Retorna o prefixo da faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetprefix.php

---

# SolrQuery::getFacetPrefix

(PECL solr >= 0.9.2)

SolrQuery::getFacetPrefix — Retorna o prefixo da faceta

### Descrição

public function **SolrQuery::getFacetPrefix**([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

Retorna o prefixo da faceta.

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
