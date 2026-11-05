# Retorna o limite inferior do primeiro intervalo de datas para todas as facetas de data neste campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetdatestart.php

---

# SolrQuery::getFacetDateStart

(PECL solr >= 0.9.2)

SolrQuery::getFacetDateStart — Retorna o limite inferior do primeiro intervalo de datas para todas as facetas de data neste campo

### Descrição

public function **SolrQuery::getFacetDateStart**([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

Retorna o limite inferior do primeiro intervalo de datas para todas as facetas de data neste campo. Aceita uma substituição de campo opcional.

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
