# A classe EventUtil

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventutil.php

---

# A classe EventUtil

(PECL event >= 1.5.0)

## Introdução

**EventUtil**
é um singleton com métodos e constantes complementares.

## Resumo da classe

final
class **EventUtil**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[AF\_INET](class.eventutil.md#eventutil.constants.af-inet) = 2;

const
[int](language.types.integer.md)
[AF\_INET6](class.eventutil.md#eventutil.constants.af-inet6) = 10;

const
[int](language.types.integer.md)
[AF\_UNSPEC](class.eventutil.md#eventutil.constants.af-unspec) = 0;

const
[int](language.types.integer.md)
[LIBEVENT\_VERSION\_NUMBER](class.eventutil.md#eventutil.constants.libevent-version-number) = 33559808;

const
[int](language.types.integer.md)
[SO\_DEBUG](class.eventutil.md#eventutil.constants.so-debug) = 1;

const
[int](language.types.integer.md)
[SO\_REUSEADDR](class.eventutil.md#eventutil.constants.so-reuseaddr) = 2;

const
[int](language.types.integer.md)
[SO\_KEEPALIVE](class.eventutil.md#eventutil.constants.so-keepalive) = 9;

const
[int](language.types.integer.md)
[SO\_DONTROUTE](class.eventutil.md#eventutil.constants.so-dontroute) = 5;

const
[int](language.types.integer.md)
[SO\_LINGER](class.eventutil.md#eventutil.constants.so-linger) = 13;

const
[int](language.types.integer.md)
[SO\_BROADCAST](class.eventutil.md#eventutil.constants.so-broadcast) = 6;

const
[int](language.types.integer.md)
[SO\_OOBINLINE](class.eventutil.md#eventutil.constants.so-oobinline) = 10;

const
[int](language.types.integer.md)
[SO\_SNDBUF](class.eventutil.md#eventutil.constants.so-sndbuf) = 7;

const
[int](language.types.integer.md)
[SO\_RCVBUF](class.eventutil.md#eventutil.constants.so-rcvbuf) = 8;

const
[int](language.types.integer.md)
[SO\_SNDLOWAT](class.eventutil.md#eventutil.constants.so-sndlowat) = 19;

const
[int](language.types.integer.md)
[SO\_RCVLOWAT](class.eventutil.md#eventutil.constants.so-rcvlowat) = 18;

const
[int](language.types.integer.md)
[SO\_SNDTIMEO](class.eventutil.md#eventutil.constants.so-sndtimeo) = 21;

const
[int](language.types.integer.md)
[SO\_RCVTIMEO](class.eventutil.md#eventutil.constants.so-rcvtimeo) = 20;

const
[int](language.types.integer.md)
[SO\_TYPE](class.eventutil.md#eventutil.constants.so-type) = 3;

const
[int](language.types.integer.md)
[SO\_ERROR](class.eventutil.md#eventutil.constants.so-error) = 4;

const
[int](language.types.integer.md)
[SOL\_SOCKET](class.eventutil.md#eventutil.constants.sol-socket) = 1;

const
[int](language.types.integer.md)
[SOL\_TCP](class.eventutil.md#eventutil.constants.sol-tcp) = 6;

const
[int](language.types.integer.md)
[SOL\_UDP](class.eventutil.md#eventutil.constants.sol-udp) = 17;

const
[int](language.types.integer.md)
[IPPROTO\_IP](class.eventutil.md#eventutil.constants.ipproto-ip) = 0;

const
[int](language.types.integer.md)
[IPPROTO\_IPV6](class.eventutil.md#eventutil.constants.ipproto-ipv6) = 41;

/\* Métodos \*/

abstract
public
function [\_\_construct](eventutil.construct.md)()

public
static
function [getLastSocketErrno](eventutil.getlastsocketerrno.md)(
[mixed](language.types.mixed.md) `$socket`
 = **`null`**
): [int](language.types.integer.md)

public
static
function [getLastSocketError](eventutil.getlastsocketerror.md)(
[mixed](language.types.mixed.md) `$socket`
 = ?): [string](language.types.string.md)

public
static
function [getSocketFd](eventutil.getsocketfd.md)(
[mixed](language.types.mixed.md) `$socket`
): [int](language.types.integer.md)

public
static
function [getSocketName](eventutil.getsocketname.md)(
[mixed](language.types.mixed.md) `$socket`
, 
[string](language.types.string.md) `&$address`
, 
[mixed](language.types.mixed.md) `&$port`
 = ?): [bool](language.types.boolean.md)

public
static
function [setSocketOption](eventutil.setsocketoption.md)(  
    
[mixed](language.types.mixed.md) `$socket`
,  
    
[int](language.types.integer.md) `$level`
,  
    
[int](language.types.integer.md) `$optname`
,  
    
[mixed](language.types.mixed.md) `$optval`
  
): [bool](language.types.boolean.md)

public
static
function [sslRandPoll](eventutil.sslrandpoll.md)(): [void](language.types.void.md)

}

## Constantes predefinidas

**`EventUtil::AF_INET`**
:   Família de endereços IPv4

**`EventUtil::AF_INET6`**
:   Família de endereços IPv6

**`EventUtil::AF_UNSPEC`**
:   Família de endereços IP não especificada

**`EventUtil::SO_DEBUG`**
:   Opção de soquete. Habilite a depuração de soquete. Permitido apenas para processos com
    o
    recurso `CAP_NET_ADMIN`
    ou um ID de usuário efetivo
    `0`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_REUSEADDR`**
:   Opção de soquete. Indica que as regras usadas na validação de endereços
    fornecidos em uma
    chamada `bind(2)`
    devem permitir a reutilização de endereços locais. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_KEEPALIVE`**
:   Opção de soquete. Habilita o envio de mensagens "keep-alive" em
    soquetes orientados a conexão. Espera um sinalizador booleano inteiro. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_DONTROUTE`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_LINGER`**
:   Opção de soquete. Quando ativado, um
    `close(2)`
    ou
    `shutdown(2)`
    não retornará até que todas as mensagens enfileiradas para o soquete tenham sido
    enviadas com sucesso ou o tempo limite de permanência tenha sido atingido. Caso contrário,
    a chamada retorna imediatamente e o fechamento é feito em segundo plano.
    Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_BROADCAST`**
:   Opção de soquete. Informa se a transmissão de mensagens de difusão é
    suportada. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_OOBINLINE`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_SNDBUF`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_RCVBUF`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_SNDLOWAT`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_RCVLOWAT`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_SNDTIMEO`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_RCVTIMEO`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_TYPE`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SO_ERROR`**
:   Opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SOL_SOCKET`**
:   Nível de opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SOL_TCP`**
:   Nível de opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::SOL_UDP`**
:   Nível de opção de soquete. Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::IPPROTO_IP`**
:   Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::IPPROTO_IPV6`**
:   Veja a
    página de manual do `socket(7)`.
    (Adicionado no event-1.6.0.)

**`EventUtil::LIBEVENT_VERSION_NUMBER`**
:   Número da versão do Libevent no momento em que a extensão Event foi
    compilada com a biblioteca.

## Índice

- [EventUtil::\_\_construct](eventutil.construct.md) — O construtor abstrato
- [EventUtil::getLastSocketErrno](eventutil.getlastsocketerrno.md) — Retorna o número de erro de soquete mais recente
- [EventUtil::getLastSocketError](eventutil.getlastsocketerror.md) — Retorna o erro de soquete mais recente
- [EventUtil::getSocketFd](eventutil.getsocketfd.md) — Retorna o descritor numérico de arquivo de um soquete ou fluxo
- [EventUtil::getSocketName](eventutil.getsocketname.md) — Recupera o endereço atual ao qual o
  soquete está vinculado
- [EventUtil::setSocketOption](eventutil.setsocketoption.md) — Define opções de soquete
- [EventUtil::sslRandPoll](eventutil.sslrandpoll.md) — Gera entropia por meio de RAND\_poll() do OpenSSL

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
