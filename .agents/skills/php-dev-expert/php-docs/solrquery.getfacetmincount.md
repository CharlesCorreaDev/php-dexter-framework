# Retorna as contagens mínimas para campos de facetas que devem ser incluídas na resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetmincount.php

---

# SolrQuery::getFacetMinCount

(PECL solr >= 0.9.2)

SolrQuery::getFacetMinCount — Retorna as contagens mínimas para campos de facetas que devem ser incluídas na resposta

### Descrição

public function **SolrQuery::getFacetMinCount**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna as contagens mínimas para campos de facetas que devem ser incluídas na resposta. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

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
