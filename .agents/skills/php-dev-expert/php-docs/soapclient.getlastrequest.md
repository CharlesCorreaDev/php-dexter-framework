# Retorna a última solicitação SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.getlastrequest.php

---

# SoapClient::\_\_getLastRequest

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_getLastRequest — Retorna a última solicitação SOAP

### Descrição

public function **SoapClient::\_\_getLastRequest**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o XML enviado na última solicitação SOAP.

> **Nota**:
>
> Este método funciona apenas se o objeto [SoapClient](class.soapclient.md)
> foi criado com a opção `trace` definida como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A última solicitação SOAP, como uma string XML.

### Examples

**Exemplo #1 Exemplo de SoapClient::\_\_getLastRequest()**

```
<?php
$client = new SoapClient("some.wsdl", array('trace' => 1));
$result = $client->SomeFunction();
echo "REQUEST:\n" . $client->__getLastRequest() . "\n";
?>
```

### Veja também

- [SoapClient::\_\_getLastRequestHeaders()](soapclient.getlastrequestheaders.md) - Retorna os cabeçalhos SOAP da última solicitação
- [SoapClient::\_\_getLastResponse()](soapclient.getlastresponse.md) - Retorna a última resposta SOAP
- [SoapClient::\_\_getLastResponseHeaders()](soapclient.getlastresponseheaders.md) - Retorna os cabeçalhos SOAP da última resposta

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
