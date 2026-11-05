# Envia uma consulta ao servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.query.php

---

# SolrClient::query

(PECL solr >= 0.9.2)

SolrClient::query — Envia uma consulta ao servidor

### Descrição

public function **SolrClient::query**([SolrParams](class.solrparams.md) `$query`): [SolrQueryResponse](class.solrqueryresponse.md)

Envia uma consulta ao servidor.

### Parâmetros

`query`
:   Um objeto [SolrParams](class.solrparams.md). Recomenda-se usar [SolrQuery](class.solrquery.md) para consultas avançadas.

### Valor Retornado

Retorna um objeto [SolrQueryResponse](class.solrqueryresponse.md) em caso de sucesso e lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver um problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr não conseguir satisfazer a consulta.

### Examples

**Exemplo #1 Exemplo de **SolrClient::query()****

```
<?php

$options = array
(
    'hostname' => 'localhost',
    'login'    => 'username',
    'password' => 'password',
    'port'     => '8983',
);

$client = new SolrClient($options);

$query = new SolrQuery();

$query->setQuery('lucene');

$query->setStart(0);

$query->setRows(50);

$query->addField('cat')->addField('features')->addField('id')->addField('timestamp');

$query_response = $client->query($query);

$response = $query_response->getResponse();

print_r($response);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
SolrObject Object
(
    [responseHeader] => SolrObject Object
        (
            [status] => 0
            [QTime] => 3
            [params] => SolrObject Object
                (
                    [fl] => cat,features,id,timestamp
                    [indent] => on
                    [start] => 0
                    [q] => lucene
                    [wt] => xml
                    [version] => 2.2
                    [rows] => 50
                )

        )

    [response] => SolrObject Object
        (
            [numFound] => 1
            [start] => 0
            [docs] => Array
                (
                    [0] => SolrObject Object
                        (
                            [id] => SOLR1000
                            [cat] => Array
                                (
                                    [0] => software
                                    [1] => search
                                )

                            [features] => Array
                                (
                                    [0] => Advanced Full-Text Search Capabilities using Lucene
                                    [1] => Optimized for High Volume Web Traffic
                                    [2] => Standards Based Open Interfaces - XML and HTTP
                                    [3] => Comprehensive HTML Administration Interfaces
                                    [4] => Scalability - Efficient Replication to other Solr Search Servers
                                    [5] => Flexible and Adaptable with XML configuration and Schema
                                    [6] => Good unicode support: héllo (hello with an accent over the e)
                                )

                        )

                )

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
