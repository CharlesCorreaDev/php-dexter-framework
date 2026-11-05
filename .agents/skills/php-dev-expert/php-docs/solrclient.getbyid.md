# Obtém documento por ID usando Realtime Get (RTG) do Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.getbyid.php

---

# SolrClient::getById

(PECL solr >= 2.2.0)

SolrClient::getById — Obtém documento por ID usando Realtime Get (RTG) do Solr

### Descrição

public function **SolrClient::getById**([string](language.types.string.md) `$id`): [SolrQueryResponse](class.solrqueryresponse.md)

Obtém documento por ID usando Realtime Get (RTG) do Solr.

### Parâmetros

`id`
:   ID do documento.

### Valor Retornado

[SolrQueryResponse](class.solrqueryresponse.md)

### Examples

**Exemplo #1 Exemplo de **SolrClient::getById()****

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
$response = $client->getById('GB18030TEST');
print_r($response->getResponse());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [doc] => SolrObject Object
        (
            [id] => GB18030TEST
            [name] => Array
                (
                    [0] => Test with some GB18030 encoded characters
                )

            [features] => Array
                (
                    [0] => No accents here
                    [1] => 这是一个功能
                    [2] => This is a feature (translated)
                    [3] => 这份文件是很有光泽
                    [4] => This document is very shiny (translated)
                )

            [price] => Array
                (
                    [0] => 0
                )

            [inStock] => Array
                (
                    [0] => 1
                )

            [_version_] => 1510294336239042560
        )

)
```

### Veja também

- [SolrClient::getByIds()](solrclient.getbyids.md) - Obtém documentos por seus IDs usando Realtime Get (RTG) do Solr

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
