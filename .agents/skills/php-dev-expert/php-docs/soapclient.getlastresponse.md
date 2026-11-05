# Retorna a última resposta SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.getlastresponse.php

---

# SoapClient::\_\_getLastResponse

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getLastResponse — Retorna a última resposta SOAP

### Descrição

public function **SoapClient::\_\_getLastResponse**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o XML recebido na última resposta SOAP.

> **Nota**:
>
> Este método funciona apenas se o objeto [SoapClient](class.soapclient.md)
> foi criado com a opção `trace` definida como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A última resposta SOAP, como uma string XML.

### Examples

**Exemplo #1 Exemplo de SoapClient::\_\_getLastResponse()**

```
<?php
$client = new SoapClient("some.wsdl", array('trace' => 1));
$result = $client->SomeFunction();
echo "Response:\n" . $client->__getLastResponse() . "\n";
?>
```

### Veja também

- [SoapClient::\_\_getLastResponseHeaders()](soapclient.getlastresponseheaders.md) - Retorna os cabeçalhos SOAP da última resposta
- [SoapClient::\_\_getLastRequest()](soapclient.getlastrequest.md) - Retorna a última solicitação SOAP
- [SoapClient::\_\_getLastRequestHeaders()](soapclient.getlastrequestheaders.md) - Retorna os cabeçalhos SOAP da última solicitação

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
