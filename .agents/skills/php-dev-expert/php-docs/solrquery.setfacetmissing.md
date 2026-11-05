# Mapeia para facet.missing

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetmissing.php

---

# SolrQuery::setFacetMissing

(PECL solr >= 0.9.2)

SolrQuery::setFacetMissing — Mapeia para facet.missing

### Descrição

public function **SolrQuery::setFacetMissing**([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Usado para indicar que, além das restrições baseadas em termos de um campo de faceta, deve ser calculada uma contagem de todos os resultados correspondentes que não tenham valor para o campo.

### Parâmetros

`flag`
:   **`true`** ativa este recurso, **`false`** desativa.

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
