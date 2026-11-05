# Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addexpandsortfield.php

---

# SolrQuery::addExpandSortField

(PECL solr >= 2.2.0)

SolrQuery::addExpandSortField — Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort)

### Descrição

public function **SolrQuery::addExpandSortField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$order` = ?): [SolrQuery](class.solrquery.md)

Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort).

### Parâmetros

`field`
:   Nome do campo

`order`
:   Ordem ASC/DESC, utiliza constantes SolrQuery::ORDER\_\*.

    Padrão: SolrQuery::ORDER\_DESC

### Valor Retornado

[SolrQuery](class.solrquery.md)

### Veja também

- [SolrQuery::setExpand()](solrquery.setexpand.md) - Ativa/desativa o componente de expansão
- [SolrQuery::removeExpandSortField()](solrquery.removeexpandsortfield.md) - Remove um campo de classificação expandida do parâmetro expand.sort
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
