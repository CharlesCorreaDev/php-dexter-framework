# Adiciona outro campo à faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfacetfield.php

---

# SolrQuery::addFacetField

(PECL solr >= 0.9.2)

SolrQuery::addFacetField — Adiciona outro campo à faceta

### Descrição

public function **SolrQuery::addFacetField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Adiciona outro campo à faceta.

### Parâmetros

`field`
:   O nome do campo

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

### Examples

**Exemplo #1 Exemplo de **SolrQuery::addFacetField()****

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

$query = new SolrQuery();

$query->setQuery($query);

$query->addField('price')->addField('color');

$query->setFacet(true);

$query->addFacetField('price')->addFacetField('color');

$query_response = $client->query($query);

$response = $query_response->getResponse();

print_r($response['facet_counts']['facet_fields']);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [color] => SolrObject Object
        (
            [blue] => 20
            [green] => 100
        )

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
