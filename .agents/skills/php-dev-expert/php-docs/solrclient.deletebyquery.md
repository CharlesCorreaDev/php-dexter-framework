# Exclui todos os documentos que correspondem à consulta fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.deletebyquery.php

---

# SolrClient::deleteByQuery

(PECL solr >= 0.9.2)

SolrClient::deleteByQuery — Exclui todos os documentos que correspondem à consulta fornecida

### Descrição

public function **SolrClient::deleteByQuery**([string](language.types.string.md) `$query`): [SolrUpdateResponse](class.solrupdateresponse.md)

Exclui todos os documentos que correspondem à consulta fornecida.

### Parâmetros

`query`
:   A consulta

### Valor Retornado

Retorna um [SolrUpdateResponse](class.solrupdateresponse.md) em caso de sucesso e lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Examples

**Exemplo #1 Exemplo de **SolrQuery::deleteByQuery()****

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

// Isso apagará todo o índice
$client->deleteByQuery("*:*");
$client->commit();

?>
```

### Veja também

- [SolrClient::deleteById()](solrclient.deletebyid.md) - Exclui por ID
- [SolrClient::deleteByIds()](solrclient.deletebyids.md) - Exclui por IDs
- [SolrClient::deleteByQueries()](solrclient.deletebyqueries.md) - Remove todos os documentos que correspondem a qualquer uma das consultas

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
