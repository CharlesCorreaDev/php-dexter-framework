# Adiciona uma consulta de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfacetquery.php

---

# SolrQuery::addFacetQuery

(PECL solr >= 0.9.2)

SolrQuery::addFacetQuery — Adiciona uma consulta de faceta

### Descrição

public function **SolrQuery::addFacetQuery**([string](language.types.string.md) `$facetQuery`): [SolrQuery](class.solrquery.md)

Adiciona uma consulta de faceta.

### Parâmetros

`facetQuery`
:   A consulta de faceta

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

### Examples

**Exemplo #1 Exemplo de [SolrQuery::addFacetField()](solrquery.addfacetfield.md)**

```
<?php

$options = array
(
        'hostname' => SOLR_SERVER_HOSTNAME,
        'login'    => SOLR_SERVER_USERNAME,
        'password' => SOLR_SERVER_PASSWORD,
        'port'     => SOLR_SERVER_PORT,
);

$client = new SolrClient($options);

$query = new SolrQuery('*:*');

$query->setFacet(true);

$query->addFacetQuery('price:[* TO 500]')->addFacetQuery('price:[500 TO *]');

$query_response = $client->query($query);

$response = $query_response->getResponse();

print_r($response->facet_counts->facet_queries);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [price:[* TO 500]] => 14
    [price:[500 TO *]] => 2
)
```

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
