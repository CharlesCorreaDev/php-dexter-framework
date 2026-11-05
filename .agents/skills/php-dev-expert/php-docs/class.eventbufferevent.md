# A classe EventBufferEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventbufferevent.php

---

# A classe EventBufferEvent

(PECL event >= 1.2.6-beta)

## Introdução

Representa o evento buffer do Libevent.

Normalmente, uma aplicação deseja realizar uma certa quantidade de buffer de dados
além de apenas responder aos eventos. Quando queremos escrever dados, por
por exemplo, o padrão usual se parece com:

1. Decidimos que queremos gravar alguns dados em uma conexão; coloque esses dados
   em um buffer.
2. Aguarde até que a conexão se torne gravável
3. Escreva o máximo de dados que pudermos
4. Lembre-se de quanto escrevemos e se ainda tivermos mais dados para escrever,
   espere que a conexão se torne gravável novamente.

Este padrão de E/S em buffer é comum o suficiente para que o Libevent forneça um
mecanismo genérico para isso. Um "evento de buffer" consiste num transporte
subjacente (como um soquete), um buffer de leitura e um buffer de escrita. Em vez de
eventos regulares, que fornecem funções de retorno quando o transporte subjacente está
pronto para ser lido ou escrito, um evento de buffer invoca suas funções de retorno
fornecidas pelo usuário quando tiver lido ou gravado dados suficientes.

## Resumo da classe

final
class **EventBufferEvent**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[READING](class.eventbufferevent.md#eventbufferevent.constants.reading) = 1;

const
[int](language.types.integer.md)
[WRITING](class.eventbufferevent.md#eventbufferevent.constants.writing) = 2;

const
[int](language.types.integer.md)
[EOF](class.eventbufferevent.md#eventbufferevent.constants.eof) = 16;

const
[int](language.types.integer.md)
[ERROR](class.eventbufferevent.md#eventbufferevent.constants.error) = 32;

const
[int](language.types.integer.md)
[TIMEOUT](class.eventbufferevent.md#eventbufferevent.constants.timeout) = 64;

const
[int](language.types.integer.md)
[CONNECTED](class.eventbufferevent.md#eventbufferevent.constants.connected) = 128;

const
[int](language.types.integer.md)
[OPT\_CLOSE\_ON\_FREE](class.eventbufferevent.md#eventbufferevent.constants.opt-close-on-free) = 1;

const
[int](language.types.integer.md)
[OPT\_THREADSAFE](class.eventbufferevent.md#eventbufferevent.constants.opt-threadsafe) = 2;

const
[int](language.types.integer.md)
[OPT\_DEFER\_CALLBACKS](class.eventbufferevent.md#eventbufferevent.constants.opt-defer-callbacks) = 4;

const
[int](language.types.integer.md)
[OPT\_UNLOCK\_CALLBACKS](class.eventbufferevent.md#eventbufferevent.constants.opt-unlock-callbacks) = 8;

const
[int](language.types.integer.md)
[SSL\_OPEN](class.eventbufferevent.md#eventbufferevent.constants.ssl-open) = 0;

const
[int](language.types.integer.md)
[SSL\_CONNECTING](class.eventbufferevent.md#eventbufferevent.constants.ssl-connecting) = 1;

const
[int](language.types.integer.md)
[SSL\_ACCEPTING](class.eventbufferevent.md#eventbufferevent.constants.ssl-accepting) = 2;

/\* Propriedades \*/

public
[int](language.types.integer.md)
[$fd](class.eventbufferevent.md#eventbufferevent.props.fd);

public
[int](language.types.integer.md)
[$priority](class.eventbufferevent.md#eventbufferevent.props.priority);

public
readonly
[EventBuffer](class.eventbuffer.md)
[$input](class.eventbufferevent.md#eventbufferevent.props.input);

public
readonly
[EventBuffer](class.eventbuffer.md)
[$output](class.eventbufferevent.md#eventbufferevent.props.output);

/\* Métodos \*/

public
function [close](eventbufferevent.close.md)(): [void](language.types.void.md)

public
function [connect](eventbufferevent.connect.md)(
[string](language.types.string.md) `$addr`
): [bool](language.types.boolean.md)

public
function [connectHost](eventbufferevent.connecthost.md)(  
    
[EventDnsBase](class.eventdnsbase.md) `$dns_base`
,  
    
[string](language.types.string.md) `$hostname`
,  
    
[int](language.types.integer.md) `$port`
,  
    
[int](language.types.integer.md) `$family`
 = EventUtil::AF\_UNSPEC
  
): [bool](language.types.boolean.md)

public
function [\_\_construct](eventbufferevent.construct.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$socket`
 = **`null`**
,  
    
[int](language.types.integer.md) `$options`
 = 0
,  
    
[callable](language.types.callable.md) `$readcb`
 = **`null`**
,  
    
[callable](language.types.callable.md) `$writecb`
 = **`null`**
,  
    
[callable](language.types.callable.md) `$eventcb`
 = **`null`**
,  
    
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
  
)

public
static
function [createPair](eventbufferevent.createpair.md)(
[EventBase](class.eventbase.md) `$base`
, 
[int](language.types.integer.md) `$options`
 = 0
): [array](language.types.array.md)

public
function [disable](eventbufferevent.disable.md)(
[int](language.types.integer.md) `$events`
): [bool](language.types.boolean.md)

public
function [enable](eventbufferevent.enable.md)(
[int](language.types.integer.md) `$events`
): [bool](language.types.boolean.md)

public
function [free](eventbufferevent.free.md)(): [void](language.types.void.md)

public
function [getDnsErrorString](eventbufferevent.getdnserrorstring.md)(): [string](language.types.string.md)

public
function [getEnabled](eventbufferevent.getenabled.md)(): [int](language.types.integer.md)

public
function [getInput](eventbufferevent.getinput.md)(): [EventBuffer](class.eventbuffer.md)

public
function [getOutput](eventbufferevent.getoutput.md)(): [EventBuffer](class.eventbuffer.md)

public
function [read](eventbufferevent.read.md)(
[int](language.types.integer.md) `$size`
): [string](language.types.string.md)

public
function [readBuffer](eventbufferevent.readbuffer.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

public
function [setCallbacks](eventbufferevent.setcallbacks.md)(  
    
[callable](language.types.callable.md) `$readcb`
,  
    
[callable](language.types.callable.md) `$writecb`
,  
    
[callable](language.types.callable.md) `$eventcb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [void](language.types.void.md)

public
function [setPriority](eventbufferevent.setpriority.md)(
[int](language.types.integer.md) `$priority`
): [bool](language.types.boolean.md)

public
function [setTimeouts](eventbufferevent.settimeouts.md)(
[float](language.types.float.md) `$timeout_read`
, 
[float](language.types.float.md) `$timeout_write`
): [bool](language.types.boolean.md)

public
function [setWatermark](eventbufferevent.setwatermark.md)(
[int](language.types.integer.md) `$events`
, 
[int](language.types.integer.md) `$lowmark`
, 
[int](language.types.integer.md) `$highmark`
): [void](language.types.void.md)

public
function [sslError](eventbufferevent.sslerror.md)(): [string](language.types.string.md)

public
static
function [sslFilter](eventbufferevent.sslfilter.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[EventBufferEvent](class.eventbufferevent.md) `$underlying`
,  
    
[EventSslContext](class.eventsslcontext.md) `$ctx`
,  
    
[int](language.types.integer.md) `$state`
,  
    
[int](language.types.integer.md) `$options`
 = 0
  
): [EventBufferEvent](class.eventbufferevent.md)

public
function [sslGetCipherInfo](eventbufferevent.sslgetcipherinfo.md)(): [string](language.types.string.md)

public
function [sslGetCipherName](eventbufferevent.sslgetciphername.md)(): [string](language.types.string.md)

public
function [sslGetCipherVersion](eventbufferevent.sslgetcipherversion.md)(): [string](language.types.string.md)

public
function [sslGetProtocol](eventbufferevent.sslgetprotocol.md)(): [string](language.types.string.md)

public
function [sslRenegotiate](eventbufferevent.sslrenegotiate.md)(): [void](language.types.void.md)

public
static
function [sslSocket](eventbufferevent.sslsocket.md)(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$socket`
,  
    
[EventSslContext](class.eventsslcontext.md) `$ctx`
,  
    
[int](language.types.integer.md) `$state`
,  
    
[int](language.types.integer.md) `$options`
 = ?  
): [EventBufferEvent](class.eventbufferevent.md)

public
function [write](eventbufferevent.write.md)(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

public
function [writeBuffer](eventbufferevent.writebuffer.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

}

## Propriedades

fd
:   Descritor de arquivo numérico associado ao evento de buffer. Normalmente
    representa um soquete vinculado. É igual a **`null`**, se não houver arquivo
    descritor (soquete) associado ao evento de buffer.

priority
:   A prioridade dos eventos usados ​​para implementar o evento de buffer.

input
:   Objeto de buffer de entrada
    subjacente ([EventBuffer](class.eventbuffer.md)).

output
:   Objeto de buffer de saída
    subjacente ([EventBuffer](class.eventbuffer.md)).

## Constantes predefinidas

**`EventBufferEvent::READING`**
:   Ocorreu um evento durante uma operação de leitura no evento de buffer. Veja
    outras opções para descobrir que evento foi esse.

**`EventBufferEvent::WRITING`**
:   Ocorreu um evento durante uma operação de gravação no evento de buffer. Veja
    outras opções para descobrir que evento foi esse.

**`EventBufferEvent::EOF`**
:   Foi obtida uma indicação de fim de arquivo no evento de buffer.

**`EventBufferEvent::ERROR`**
:   Ocorreu um erro durante uma operação evento de buffer. Para informações sobre
    qual foi o maior erro, chame
    [EventUtil::getLastSocketErrno()](eventutil.getlastsocketerrno.md)
    e/ou
    [EventUtil::getLastSocketError()](eventutil.getlastsocketerror.md).

**`EventBufferEvent::TIMEOUT`**

**`EventBufferEvent::CONNECTED`**
:   Concluiu uma conexão solicitada no evento de buffer.

**`EventBufferEvent::OPT_CLOSE_ON_FREE`**
:   Quando o evento de buffer for liberado, fecha o transporte subjacente. Esse
    fechará um soquete subjacente, liberará um evento de buffer subjacente, etc.

**`EventBufferEvent::OPT_THREADSAFE`**
:   Alocar bloqueios automaticamente para o evento de buffer, para que seja seguro
    usar em vários threads.

**`EventBufferEvent::OPT_DEFER_CALLBACKS`**
:   Quando essa opção estiver definida, o evento de buffer adia todas as suas funções de retorno. Veja
    [» Rápida
    programação de rede portátil sem bloqueio com Libevent, funções de retorno diferidas](http://www.wangafu.net/~nickm/libevent-book/Ref6_bufferevent.html#_deferred_callbacks).

**`EventBufferEvent::OPT_UNLOCK_CALLBACKS`**
:   Por padrão, quando o evento de buffer está configurado para ser seguro para threads, o buffer
    dos bloqueios do evento são cancelados sempre que qualquer função de retorno fornecida pelo usuário for
    invocada. Definir esta opção faz com que o Libevent libere o buffer
    de bloqueio do evento quando ele estiver invocando as funções de retorno.

**`EventBufferEvent::SSL_OPEN`**
:   O handshake SSL está concluído

**`EventBufferEvent::SSL_CONNECTING`**
:   SSL está atualmente realizando negociações como um cliente

**`EventBufferEvent::SSL_ACCEPTING`**
:   SSL está atualmente realizando negociações como um servidor

## Índice

- [EventBufferEvent::close](eventbufferevent.close.md) — Fecha o descritor de arquivo associado ao evento de buffer atual
- [EventBufferEvent::connect](eventbufferevent.connect.md) — Conecta o descritor de arquivo do evento de buffer ao endereço fornecido ou
  soquete UNIX
- [EventBufferEvent::connectHost](eventbufferevent.connecthost.md) — Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona
- [EventBufferEvent::\_\_construct](eventbufferevent.construct.md) — Constrói objeto EventBufferEvent
- [EventBufferEvent::createPair](eventbufferevent.createpair.md) — Cria dois eventos de buffer conectados um ao outro
- [EventBufferEvent::disable](eventbufferevent.disable.md) — Desabilita eventos de leitura, escrita ou ambos em um evento de buffer
- [EventBufferEvent::enable](eventbufferevent.enable.md) — Habilita eventos de leitura, escrita ou ambos em um evento de buffer
- [EventBufferEvent::free](eventbufferevent.free.md) — Libera um evento de buffer
- [EventBufferEvent::getDnsErrorString](eventbufferevent.getdnserrorstring.md) — Retorna uma string descrevendo a última tentativa de pesquisa de DNS com falha
- [EventBufferEvent::getEnabled](eventbufferevent.getenabled.md) — Retorna a máscara de bits dos eventos atualmente habilitados no evento do buffer
- [EventBufferEvent::getInput](eventbufferevent.getinput.md) — Retorna o buffer de entrada subjacente associado ao evento de buffer
  atual
- [EventBufferEvent::getOutput](eventbufferevent.getoutput.md) — Retorna o buffer de saída subjacente associado ao evento de buffer
  atual
- [EventBufferEvent::read](eventbufferevent.read.md) — Lê dados do buffer
- [EventBufferEvent::readBuffer](eventbufferevent.readbuffer.md) — Drena todo o conteúdo do buffer de entrada e os coloca em um EventBuffer
- [EventBufferEvent::setCallbacks](eventbufferevent.setcallbacks.md) — Atribui funções de retorno de leitura, escrita e evento (status)
- [EventBufferEvent::setPriority](eventbufferevent.setpriority.md) — Atribui uma prioridade a um evento de buffer
- [EventBufferEvent::setTimeouts](eventbufferevent.settimeouts.md) — Define o tempo limite de leitura e gravação para um evento de buffer
- [EventBufferEvent::setWatermark](eventbufferevent.setwatermark.md) — Ajusta marcas d'água de leitura e/ou gravação
- [EventBufferEvent::sslError](eventbufferevent.sslerror.md) — Retorna o erro OpenSSL mais recente relatado no evento de buffer
- [EventBufferEvent::sslFilter](eventbufferevent.sslfilter.md) — Cria um novo evento de buffer SSL para enviar seus dados por outro evento de buffer
- [EventBufferEvent::sslGetCipherInfo](eventbufferevent.sslgetcipherinfo.md) — Retorna uma descrição textual da cifra
- [EventBufferEvent::sslGetCipherName](eventbufferevent.sslgetciphername.md) — Retorna o nome da cifra atual da conexão SSL
- [EventBufferEvent::sslGetCipherVersion](eventbufferevent.sslgetcipherversion.md) — Retorna a versão da cifra usada pela conexão SSL atual
- [EventBufferEvent::sslGetProtocol](eventbufferevent.sslgetprotocol.md) — Retorna o nome do protocolo usado para a conexão SSL atual
- [EventBufferEvent::sslRenegotiate](eventbufferevent.sslrenegotiate.md) — Solicita a um evento de buffer que inicie a renegociação SSL
- [EventBufferEvent::sslSocket](eventbufferevent.sslsocket.md) — Cria um novo evento de buffer SSL para enviar seus dados por meio de um SSL em um soquete
- [EventBufferEvent::write](eventbufferevent.write.md) — Adiciona dados ao buffer de saída de um evento de buffer
- [EventBufferEvent::writeBuffer](eventbufferevent.writebuffer.md) — Adiciona o conteúdo de todo o buffer à saída de um evento de buffer
  buffer

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
