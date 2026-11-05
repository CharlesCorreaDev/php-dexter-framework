# Retorna os cabeçalhos SOAP da última solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.getlastrequestheaders.php

---

# SoapClient::\_\_getLastRequestHeaders

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getLastRequestHeaders — Retorna os cabeçalhos SOAP da última solicitação

### Descrição

public function **SoapClient::\_\_getLastRequestHeaders**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna os cabeçalhos SOAP da última solicitação.

> **Nota**:
>
> Esta função só funciona se o
> o objeto [SoapClient](class.soapclient.md) foi criado com o `trace`
> opção definida como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os últimos cabeçalhos de solicitação SOAP.

### Examples

**Exemplo #1 Exemplo de SoapClient::\_\_getLastRequestHeaders()**

```
<?php
$client = new SoapClient("some.wsdl", array('trace' => 1));
$result = $client->SomeFunction();
echo "REQUEST HEADERS:\n" . $client->__getLastRequestHeaders() . "\n";
?>
```

### Veja também

- [SoapClient::\_\_getLastResponseHeaders()](soapclient.getlastresponseheaders.md) - Retorna os cabeçalhos SOAP da última resposta
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
