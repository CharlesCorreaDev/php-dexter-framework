# Envia uma solicitação de atualização bruta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.request.php

---

# SolrClient::request

(PECL solr >= 0.9.2)

SolrClient::request — Envia uma solicitação de atualização bruta

### Descrição

public function **SolrClient::request**([string](language.types.string.md) `$raw_request`): [SolrUpdateResponse](class.solrupdateresponse.md)

Envia uma solicitação de atualização XML bruta ao servidor.

### Parâmetros

`raw_request`
:   Uma string XML com a solicitação bruta ao servidor.

### Valor Retornado

Retorna um [SolrUpdateResponse](class.solrupdateresponse.md) em caso de sucesso. Lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrIllegalArgumentException](class.solrillegalargumentexception.md) se `raw_request` for uma string vazia.

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver um problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr não conseguir satisfazer a consulta.

### Examples

**Exemplo #1 Exemplo de **SolrClient::request()****

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

$update_response = $client->request("<commit/>");

$response = $update_response->getResponse();

print_r($response);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
...
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
