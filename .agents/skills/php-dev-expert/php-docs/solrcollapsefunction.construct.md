# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.construct.php

---

# SolrCollapseFunction::\_\_construct

(PECL solr >= 2.2.0)

SolrCollapseFunction::\_\_construct — Construtor

### Descrição

public function **SolrCollapseFunction::\_\_construct**([string](language.types.string.md) `$field` = ?)

Construtor de SolrCollapseFunction.

### Parâmetros

`field`
:   O nome do campo a ser colapsado.

    Para colapsar um resultado, o tipo de campo deve ser String, Int ou Float de valor único.

### Examples

**Exemplo #1 Exemplo de **SolrCollapseFunction::\_\_construct()****

```
<?php

include "bootstrap.php";

$options = array
(
    'hostname' => SOLR_SERVER_HOSTNAME,
    'login'    => SOLR_SERVER_USERNAME,
    'password' => SOLR_SERVER_PASSWORD,
    'port'     => SOLR_SERVER_PORT,
    'path'     => SOLR_SERVER_PATH
);

$client = new SolrClient($options);

$query = new SolrQuery('*:*');

$func = new SolrCollapseFunction('field_name');

$func->setMax('sum(cscore(),field(some_other_field))');
$func->setSize(100);
$func->setNullPolicy(SolrCollapseFunction::NULLPOLICY_EXPAND);

$query->collapse($func);

$queryResponse = $client->query($query);

$response = $queryResponse->getResponse();

print_r($response);

?>
```

### Veja também

- [SolrQuery::collapse()](solrquery.collapse.md) - Colapsa o conjunto de resultados para um único documento por grupo

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
