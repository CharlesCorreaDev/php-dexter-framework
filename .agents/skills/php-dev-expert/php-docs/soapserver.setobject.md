# Define o objeto que será usado para tratar solicitações SOAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.setobject.php

---

# SoapServer::setObject

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

SoapServer::setObject — Define o objeto que será usado para tratar solicitações SOAP

### Descrição

public function **SoapServer::setObject**([object](language.types.object.md) `$object`): [void](language.types.void.md)

Isso define um objeto específico como manipulador para solicitações SOAP, em vez de apenas uma classe como em
[SoapServer::setClass()](soapserver.setclass.md).

### Parâmetros

`object`
:   O objeto para lidar com as solicitações.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

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
