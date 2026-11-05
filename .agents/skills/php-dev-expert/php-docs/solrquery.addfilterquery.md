# Especifica uma consulta de filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfilterquery.php

---

# SolrQuery::addFilterQuery

(PECL solr >= 0.9.2)

SolrQuery::addFilterQuery — Especifica uma consulta de filtro

### Descrição

public function **SolrQuery::addFilterQuery**([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

Especifica uma consulta de filtro.

### Parâmetros

`fq`
:   A consulta de filtro

### Valor Retornado

Retorna o objeto SolrQuery atual.

### Examples

**Exemplo #1 Exemplo de **SolrQuery::addFilterQuery()****

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

$query->setQuery('*:*');

$query->addFilterQuery('color:blue,green');

$query_response = $client->query($query);

$response = $query_response->getResponse();

print_r($response['facet_counts']['facet_fields']);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
&fq=color:blue,green
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
