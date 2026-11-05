# Retorna o número máximo de contagens de restrições que devem ser retornadas para os campos de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetlimit.php

---

# SolrQuery::getFacetLimit

(PECL solr >= 0.9.2)

SolrQuery::getFacetLimit — Retorna o número máximo de contagens de restrições que devem ser retornadas para os campos de faceta

### Descrição

public function **SolrQuery::getFacetLimit**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna o número máximo de contagens de restrições que devem ser retornadas para os campos de faceta. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo para substituir.

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
