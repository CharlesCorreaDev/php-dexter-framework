# A clase SoapServer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapserver.php

---

# A clase SoapServer

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe SoapServer fornece um servidor para o [» SOAP 1.1](https://www.w3.org/TR/soap11/)
e protocolos [» SOAP 1.2](https://www.w3.org/TR/soap12/). Pode ser
usado com ou sem uma descrição de serviço WSDL.

## Resumo da classe

class ****SoapServer****
{

/\* Propriedades \*/

private
?[SoapFault](class.soapfault.md)
[$\_\_soap\_fault](class.soapserver.md#soapserver.props.soap-fault) = null;

/\* Métodos \*/

public function [\_\_construct](soapserver.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$wsdl`, [array](language.types.array.md) `$options` = [])

public function [addFunction](soapserver.addfunction.md)([array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md) `$functions`): [void](language.types.void.md)

public function [addSoapHeader](soapserver.addsoapheader.md)([SoapHeader](class.soapheader.md) `$header`): [void](language.types.void.md)

public function [fault](soapserver.fault.md)(  
    [string](language.types.string.md) `$code`,  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `$actor` = "",  
    [mixed](language.types.mixed.md) `$details` = **`null`**,  
    [string](language.types.string.md) `$name` = "",  
    [string](language.types.string.md) `$lang` = ""  
): [void](language.types.void.md)

public function [getFunctions](soapserver.getfunctions.md)(): [array](language.types.array.md)

public function [\_\_getLastResponse](soapserver.getlastresponse.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [handle](soapserver.handle.md)([?](language.types.null.md)[string](language.types.string.md) `$request` = **`null`**): [void](language.types.void.md)

public function [setClass](soapserver.setclass.md)([string](language.types.string.md) `$class`, [mixed](language.types.mixed.md) `...$args`): [void](language.types.void.md)

public function [setObject](soapserver.setobject.md)([object](language.types.object.md) `$object`): [void](language.types.void.md)

public function [setPersistence](soapserver.setpersistence.md)([int](language.types.integer.md) `$mode`): [void](language.types.void.md)

}

## Propriedades

service

\_\_soap\_fault

## Índice

- [SoapServer::addFunction](soapserver.addfunction.md) — Adiciona uma ou mais funções para lidar com solicitações SOAP
- [SoapServer::addSoapHeader](soapserver.addsoapheader.md) — Adiciona um cabeçalho SOAP à resposta
- [SoapServer::\_\_construct](soapserver.construct.md) — Construtor SoapServer
- [SoapServer::fault](soapserver.fault.md) — Emite falha no SoapServer indicando um erro
- [SoapServer::getFunctions](soapserver.getfunctions.md) — Retorna uma lista de funções definidas
- [SoapServer::\_\_getLastResponse](soapserver.getlastresponse.md) — Retorna a última resposta SOAP
- [SoapServer::handle](soapserver.handle.md) — Lida com uma solicitação SOAP
- [SoapServer::setClass](soapserver.setclass.md) — Define a classe que trata as solicitações SOAP
- [SoapServer::setObject](soapserver.setobject.md) — Define o objeto que será usado para tratar solicitações SOAP
- [SoapServer::setPersistence](soapserver.setpersistence.md) — Define o modo de persistência do SoapServer

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
