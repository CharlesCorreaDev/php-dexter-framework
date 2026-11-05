# Ativa/desativa o componente de expansão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setexpand.php

---

# SolrQuery::setExpand

(PECL solr >= 2.2.0)

SolrQuery::setExpand — Ativa/desativa o componente de expansão

### Descrição

public function **SolrQuery::setExpand**([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

Ativa/desativa o componente de expansão.

### Parâmetros

`value`
:   Valor booleano.

### Valor Retornado

[SolrQuery](class.solrquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrQuery::setExpand()****

```
<?php

$query = new SolrQuery('lucene');

$query
    ->setExpand(true)
    ->setExpandRows(50)
    ->setExpandQuery('text:product')
    ->addExpandFilterQuery('manu:apple')
    ->addExpandFilterQuery('inStock:true')
    ->addExpandSortField('score', SolrQuery::ORDER_DESC)
    ->addExpandSortField('title', SolrQuery::ORDER_ASC);

echo $query.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&expand=true&expand.rows=50&expand.q=text:product&expand.fq=manu:apple&expand.fq=inStock:true&expand.sort=score desc,title asc
```

### Veja também

- [SolrQuery::addExpandSortField()](solrquery.addexpandsortfield.md) - Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort)
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
