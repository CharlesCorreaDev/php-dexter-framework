# Verifica se o servidor Solr ainda está ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.ping.php

---

# SolrClient::ping

(PECL solr >= 0.9.2)

SolrClient::ping — Verifica se o servidor Solr ainda está ativo

### Descrição

public function **SolrClient::ping**(): [SolrPingResponse](class.solrpingresponse.md)

Verifica se o servidor Solr ainda está ativo. Envia uma solicitação HEAD ao servidor Apache Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [SolrPingResponse](class.solrpingresponse.md) em caso de sucesso e lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver um problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao atender à solicitação.

### Examples

**Exemplo #1 Exemplo de **SolrClient::ping()****

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

$pingresponse = $client->ping();

?>
```

O exemplo acima produzirá
algo semelhante a:

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
