# Remove um campo de classificação expandida do parâmetro expand.sort

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removeexpandsortfield.php

---

# SolrQuery::removeExpandSortField

(PECL solr >= 2.2.0)

SolrQuery::removeExpandSortField — Remove um campo de classificação expandida do parâmetro expand.sort

### Descrição

public function **SolrQuery::removeExpandSortField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um campo de classificação expandida do parâmetro expand.sort.

### Parâmetros

`field`
:   Nome do campo.

### Valor Retornado

[SolrQuery](class.solrquery.md)

### Veja também

- [SolrQuery::setExpand()](solrquery.setexpand.md) - Ativa/desativa o componente de expansão
- [SolrQuery::addExpandSortField()](solrquery.addexpandsortfield.md) - Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort)
- [SolrQuery::setExpandRows()](solrquery.setexpandrows.md) - Define o número de linhas a serem exibidas em cada grupo (expand.rows)
- [SolrQuery::setExpandQuery()](solrquery.setexpandquery.md) - Define o parâmetro expand.q
- [SolrQuery::addExpandFilterQuery()](solrquery.addexpandfilterquery.md) - Substitui a consulta do filtro principal e determina quais documentos incluir no grupo principal
- [SolrQuery::removeExpandFilterQuery()](solrquery.removeexpandfilterquery.md) - Remove uma consulta de filtro expandido

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
