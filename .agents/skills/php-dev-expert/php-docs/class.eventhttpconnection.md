# A classe EventHttpConnection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventhttpconnection.php

---

# A classe EventHttpConnection

(PECL event >= 1.4.0-beta)

## Introdução

Representa uma conexão HTTP.

## Resumo da classe

class **EventHttpConnection**
{

/\* Métodos \*/

public
function [\_\_construct](eventhttpconnection.construct.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[EventDnsBase](class.eventdnsbase.md) `$dns_base`
,  
    
[string](language.types.string.md) `$address`
,  
    
[int](language.types.integer.md) `$port`
,  
    
[EventSslContext](class.eventsslcontext.md) `$ctx`
 = **`null`**
  
)

public
function [getBase](eventhttpconnection.getbase.md)(): [EventBase](class.eventbase.md)

public
function [getPeer](eventhttpconnection.getpeer.md)(
[string](language.types.string.md) `&$address`
, 
[int](language.types.integer.md) `&$port`
): [void](language.types.void.md)

public
function [makeRequest](eventhttpconnection.makerequest.md)(
[EventHttpRequest](class.eventhttprequest.md) `$req`
, 
[int](language.types.integer.md) `$type`
, 
[string](language.types.string.md) `$uri`
): [bool](language.types.boolean.md)

public
function [setCloseCallback](eventhttpconnection.setclosecallback.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?): [void](language.types.void.md)

public
function [setLocalAddress](eventhttpconnection.setlocaladdress.md)(
[string](language.types.string.md) `$address`
): [void](language.types.void.md)

public
function [setLocalPort](eventhttpconnection.setlocalport.md)(
[int](language.types.integer.md) `$port`
): [void](language.types.void.md)

public
function [setMaxBodySize](eventhttpconnection.setmaxbodysize.md)(
[string](language.types.string.md) `$max_size`
): [void](language.types.void.md)

public
function [setMaxHeadersSize](eventhttpconnection.setmaxheaderssize.md)(
[string](language.types.string.md) `$max_size`
): [void](language.types.void.md)

public
function [setRetries](eventhttpconnection.setretries.md)(
[int](language.types.integer.md) `$retries`
): [void](language.types.void.md)

public
function [setTimeout](eventhttpconnection.settimeout.md)(
[int](language.types.integer.md) `$timeout`
): [void](language.types.void.md)

}

## Índice

- [EventHttpConnection::\_\_construct](eventhttpconnection.construct.md) — Constrói objeto EventHttpConnection
- [EventHttpConnection::getBase](eventhttpconnection.getbase.md) — Retorna a base de eventos associada à conexão
- [EventHttpConnection::getPeer](eventhttpconnection.getpeer.md) — Obtém o endereço remoto e a porta associados à conexão
- [EventHttpConnection::makeRequest](eventhttpconnection.makerequest.md) — Faz uma requisição HTTP pela conexão especificada
- [EventHttpConnection::setCloseCallback](eventhttpconnection.setclosecallback.md) — Define função de retorno para o fechamento da conexão
- [EventHttpConnection::setLocalAddress](eventhttpconnection.setlocaladdress.md) — Define o endereço IP a partir do qual as conexões HTTP são feitas
- [EventHttpConnection::setLocalPort](eventhttpconnection.setlocalport.md) — Define a porta local a partir da qual as conexões são feitas
- [EventHttpConnection::setMaxBodySize](eventhttpconnection.setmaxbodysize.md) — Define o tamanho máximo do corpo para a conexão
- [EventHttpConnection::setMaxHeadersSize](eventhttpconnection.setmaxheaderssize.md) — Define o tamanho máximo do cabeçalho
- [EventHttpConnection::setRetries](eventhttpconnection.setretries.md) — Define o limite de novas tentativas para a conexão
- [EventHttpConnection::setTimeout](eventhttpconnection.settimeout.md) — Define o tempo limite para a conexão

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
