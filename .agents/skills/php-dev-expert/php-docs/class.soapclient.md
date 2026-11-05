# A classe SoapClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.soapclient.php

---

# A classe [SoapClient](class.soapclient.md)

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe SoapClient fornece um cliente para [» SOAP 1.1](https://www.w3.org/TR/soap11/),
servidores [» SOAP 1.2](https://www.w3.org/TR/soap12/).
Ele pode ser usado no modo WSDL ou não WSDL.

## Resumo da classe

class ****SoapClient****
{

/\* Propriedades \*/

private
?[string](language.types.string.md)
[$uri](class.soapclient.md#soapclient.props.uri) = null;

private
?[int](language.types.integer.md)
[$style](class.soapclient.md#soapclient.props.style) = null;

private
?[int](language.types.integer.md)
[$use](class.soapclient.md#soapclient.props.use) = null;

private
?[string](language.types.string.md)
[$location](class.soapclient.md#soapclient.props.location) = null;

private
[bool](language.types.boolean.md)
[$trace](class.soapclient.md#soapclient.props.trace) = false;

private
?[int](language.types.integer.md)
[$compression](class.soapclient.md#soapclient.props.compression) = null;

private
?[Soap\Sdl](class.soap-sdl.md)
[$sdl](class.soapclient.md#soapclient.props.sdl) = null;

private
?[array](language.types.array.md)
[$typemap](class.soapclient.md#soapclient.props.typemap) = null;

private
?[resource](language.types.resource.md)
[$httpsocket](class.soapclient.md#soapclient.props.httpsocket) = null;

private
?[Soap\Url](class.soap-url.md)
[$httpurl](class.soapclient.md#soapclient.props.httpurl) = null;

private
?[string](language.types.string.md)
[$\_login](class.soapclient.md#soapclient.props.login) = null;

private
?[string](language.types.string.md)
[$\_password](class.soapclient.md#soapclient.props.password) = null;

private
[bool](language.types.boolean.md)
[$\_use\_digest](class.soapclient.md#soapclient.props.use-digest) = false;

private
?[string](language.types.string.md)
[$\_digest](class.soapclient.md#soapclient.props.digest) = null;

private
?[string](language.types.string.md)
[$\_proxy\_host](class.soapclient.md#soapclient.props.proxy-host) = null;

private
?[int](language.types.integer.md)
[$\_proxy\_port](class.soapclient.md#soapclient.props.proxy-port) = null;

private
?[string](language.types.string.md)
[$\_proxy\_login](class.soapclient.md#soapclient.props.proxy-login) = null;

private
?[string](language.types.string.md)
[$\_proxy\_password](class.soapclient.md#soapclient.props.proxy-password) = null;

private
[bool](language.types.boolean.md)
[$\_exceptions](class.soapclient.md#soapclient.props.exceptions) = true;

private
?[string](language.types.string.md)
[$\_encoding](class.soapclient.md#soapclient.props.encoding) = null;

private
?[array](language.types.array.md)
[$\_classmap](class.soapclient.md#soapclient.props.classmap) = null;

private
?[int](language.types.integer.md)
[$\_features](class.soapclient.md#soapclient.props.features) = null;

private
[int](language.types.integer.md)
[$\_connection\_timeout](class.soapclient.md#soapclient.props.connection-timeout);

private
?[resource](language.types.resource.md)
[$\_stream\_context](class.soapclient.md#soapclient.props.stream-context) = null;

private
?[string](language.types.string.md)
[$\_user\_agent](class.soapclient.md#soapclient.props.user-agent) = null;

private
[bool](language.types.boolean.md)
[$\_keep\_alive](class.soapclient.md#soapclient.props.keep-alive) = true;

private
?[int](language.types.integer.md)
[$\_ssl\_method](class.soapclient.md#soapclient.props.ssl-method) = null;

private
[int](language.types.integer.md)
[$\_soap\_version](class.soapclient.md#soapclient.props.soap-version);

private
?[int](language.types.integer.md)
[$\_use\_proxy](class.soapclient.md#soapclient.props.use-proxy) = null;

private
[array](language.types.array.md)
[$\_cookies](class.soapclient.md#soapclient.props.cookies) = [];

private
?[array](language.types.array.md)
[$\_\_default\_headers](class.soapclient.md#soapclient.props.default-headers) = null;

private
?[SoapFault](class.soapfault.md)
[$\_\_soap\_fault](class.soapclient.md#soapclient.props.soap-fault) = null;

private
?[string](language.types.string.md)
[$\_\_last\_request](class.soapclient.md#soapclient.props.last-request) = null;

private
?[string](language.types.string.md)
[$\_\_last\_response](class.soapclient.md#soapclient.props.last-response) = null;

private
?[string](language.types.string.md)
[$\_\_last\_request\_headers](class.soapclient.md#soapclient.props.last-request-headers) = null;

private
?[string](language.types.string.md)
[$\_\_last\_response\_headers](class.soapclient.md#soapclient.props.last-response-headers) = null;

/\* Métodos \*/

public function [\_\_construct](soapclient.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$wsdl`, [array](language.types.array.md) `$options` = [])

public function [\_\_call](soapclient.call.md)([string](language.types.string.md) `$name`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

public function [\_\_doRequest](soapclient.dorequest.md)(  
    [string](language.types.string.md) `$request`,  
    [string](language.types.string.md) `$location`,  
    [string](language.types.string.md) `$action`,  
    [int](language.types.integer.md) `$version`,  
    [bool](language.types.boolean.md) `$oneWay` = **`false`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$uriParserClass` = **`null`**  
): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_getCookies](soapclient.getcookies.md)(): [array](language.types.array.md)

public function [\_\_getFunctions](soapclient.getfunctions.md)(): [?](language.types.null.md)[array](language.types.array.md)

public function [\_\_getLastRequest](soapclient.getlastrequest.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_getLastRequestHeaders](soapclient.getlastrequestheaders.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_getLastResponse](soapclient.getlastresponse.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_getLastResponseHeaders](soapclient.getlastresponseheaders.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_getTypes](soapclient.gettypes.md)(): [?](language.types.null.md)[array](language.types.array.md)

public function [\_\_setCookie](soapclient.setcookie.md)([string](language.types.string.md) `$name`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**): [void](language.types.void.md)

public function [\_\_setLocation](soapclient.setlocation.md)([?](language.types.null.md)[string](language.types.string.md) `$location` = **`null`**): [?](language.types.null.md)[string](language.types.string.md)

public function [\_\_setSoapHeaders](soapclient.setsoapheaders.md)([SoapHeader](class.soapheader.md)|[array](language.types.array.md)|[null](language.types.null.md) `$headers` = **`null`**): [bool](language.types.boolean.md)

public function [\_\_soapCall](soapclient.soapcall.md)(  
    [string](language.types.string.md) `$name`,  
    [array](language.types.array.md) `$args`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**,  
    [SoapHeader](class.soapheader.md)|[array](language.types.array.md)|[null](language.types.null.md) `$inputHeaders` = **`null`**,  
    [array](language.types.array.md) `&$outputHeaders` = **`null`**  
): [mixed](language.types.mixed.md)

}

## Propriedades

\_\_default\_headers

\_\_last\_request

\_\_last\_request\_headers

\_\_last\_response

\_\_last\_response\_headers

\_\_soap\_fault

\_classmap

\_connection\_timeout

\_cookies

\_digest

\_encoding

\_exceptions

\_features

\_keep\_alive

\_login

\_password

\_proxy\_host

\_proxy\_login

\_proxy\_password

\_proxy\_port

\_soap\_version

\_ssl\_method

\_stream\_context

\_use\_digest

\_use\_proxy

\_user\_agent

compression

httpsocket

httpurl

location

sdl

style

trace

typemap
:   Um array de mapeamentos de tipos usado para conversões customizadas de XML para PHP
    ou **`null`** se nenhum mapeamento de tipo for configurado.
    A partir do PHP 8.4.0, esta propriedade é do tipo [array](language.types.array.md);
    anteriormente era do tipo [resource](language.types.resource.md).
    Código que utiliza [is\_resource()](function.is-resource.md) para verificar esta propriedade
    precisa ser atualizado adequadamente.

uri

use

## Índice

- [SoapClient::\_\_call](soapclient.call.md) — Chama uma função SOAP (descontinuada)
- [SoapClient::\_\_construct](soapclient.construct.md) — Construtor de SoapClient
- [SoapClient::\_\_doRequest](soapclient.dorequest.md) — Executa uma solicitação SOAP
- [SoapClient::\_\_getCookies](soapclient.getcookies.md) — Obtém uma lista de cookies
- [SoapClient::\_\_getFunctions](soapclient.getfunctions.md) — Retorna uma lista de funções SOAP disponíveis
- [SoapClient::\_\_getLastRequest](soapclient.getlastrequest.md) — Retorna a última solicitação SOAP
- [SoapClient::\_\_getLastRequestHeaders](soapclient.getlastrequestheaders.md) — Retorna os cabeçalhos SOAP da última solicitação
- [SoapClient::\_\_getLastResponse](soapclient.getlastresponse.md) — Retorna a última resposta SOAP
- [SoapClient::\_\_getLastResponseHeaders](soapclient.getlastresponseheaders.md) — Retorna os cabeçalhos SOAP da última resposta
- [SoapClient::\_\_getTypes](soapclient.gettypes.md) — Retorna uma lista de tipos SOAP
- [SoapClient::\_\_setCookie](soapclient.setcookie.md) — Define um cookie para solicitações SOAP
- [SoapClient::\_\_setLocation](soapclient.setlocation.md) — Define a localização do serviço Web a ser usado
- [SoapClient::\_\_setSoapHeaders](soapclient.setsoapheaders.md) — Define cabeçalhos SOAP para chamadas subsequentes
- [SoapClient::\_\_soapCall](soapclient.soapcall.md) — Chama uma função SOAP

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
