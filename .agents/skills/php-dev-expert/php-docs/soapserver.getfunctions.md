# Retorna uma lista de funções definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.getfunctions.php

---

# SoapServer::getFunctions

(PHP 5, PHP 7, PHP 8)

SoapServer::getFunctions — Retorna uma lista de funções definidas

### Descrição

public function **SoapServer::getFunctions**(): [array](language.types.array.md)

Retorna uma lista das funções definidas no objeto SoapServer.
Este método retorna a lista de todas as funções adicionadas por
[SoapServer::addFunction()](soapserver.addfunction.md) ou
[SoapServer::setClass()](soapserver.setclass.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um `array` das funções definidas.

### Examples

**Exemplo #1 Exemplo de **SoapServer::getFunctions()****

```
<?php
$server = new SoapServer(NULL, array("uri" => "http://test-uri"));
$server->addFunction(SOAP_FUNCTIONS_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $server->handle();
} else {
  echo "Este servidor SOAP pode lidar com as seguintes funções: ";
  $functions = $server->getFunctions();
  foreach($functions as $func) {
    echo $func . "\n";
  }
}
?>
```

### Veja também

- [SoapServer::\_\_construct()](soapserver.construct.md) - Construtor SoapServer
- [SoapServer::addFunction()](soapserver.addfunction.md) - Adiciona uma ou mais funções para lidar com solicitações SOAP
- [SoapServer::setClass()](soapserver.setclass.md) - Define a classe que trata as solicitações SOAP

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
