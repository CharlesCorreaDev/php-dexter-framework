# Retorna a última resposta SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.getlastresponse.php

---

# SoapServer::\_\_getLastResponse

(PHP 8 >= 8.4)

SoapServer::\_\_getLastResponse — Retorna a última resposta SOAP

### Descrição

public function **SoapServer::\_\_getLastResponse**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o XML enviado na última resposta SOAP.

> **Nota**:
>
> Este método funciona apenas se o objeto [SoapServer](class.soapserver.md)
> foi criado com a opção `trace` definida como **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A última resposta SOAP, como uma string XML.

### Examples

**Exemplo #1 Exemplo de SoapServer::\_\_getLastResponse()**

```
<?php
$server = new SoapServer("some.wsdl", ["trace" => 1]);
$server->handle();
echo "Resposta:\n" . $server->__getLastResponse() . "\n";
?>
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
