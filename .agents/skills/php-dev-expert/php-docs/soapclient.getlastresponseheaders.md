# Retorna os cabeçalhos SOAP da última resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.getlastresponseheaders.php

---

# SoapClient::\_\_getLastResponseHeaders

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getLastResponseHeaders — Retorna os cabeçalhos SOAP da última resposta

### Descrição

public function **SoapClient::\_\_getLastResponseHeaders**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna os cabeçalhos SOAP da última resposta.

> **Nota**:
>
> Esta função só funciona se o
> o objeto [SoapClient](class.soapclient.md) foi criado com a opção `trace`
> definida como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os últimos cabeçalhos de resposta SOAP.

### Examples

**Exemplo #1 Exemplo de SoapClient::\_\_getLastResponse()**

```
<?php
$client = new SoapClient("some.wsdl", array('trace' => 1));
$result = $client->SomeFunction();
echo "RESPONSE HEADERS:\n" . $client->__getLastResponseHeaders() . "\n";
?>
```

### Veja também

- [SoapClient::\_\_getLastRequestHeaders()](soapclient.getlastrequestheaders.md) - Retorna os cabeçalhos SOAP da última solicitação
- [SoapClient::\_\_getLastRequest()](soapclient.getlastrequest.md) - Retorna a última solicitação SOAP
- [SoapClient::\_\_getLastResponse()](soapclient.getlastresponse.md) - Retorna a última resposta SOAP

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
