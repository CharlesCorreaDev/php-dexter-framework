# Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.connecthost.php

---

# EventBufferEvent::connectHost

(PECL event >= 1.2.6-beta)

EventBufferEvent::connectHost — Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona

### Descrição

public
function **EventBufferEvent::connectHost**(  
    
[EventDnsBase](class.eventdnsbase.md) `$dns_base`
,  
    
[string](language.types.string.md) `$hostname`
,  
    
[int](language.types.integer.md) `$port`
,  
    
[int](language.types.integer.md) `$family`
 = EventUtil::AF\_UNSPEC
  
): [bool](language.types.boolean.md)

Resolve o nome do host do nome DNS, procurando por endereços do tipo
`family`
(
`EventUtil::AF_*`
constantes). Se a resolução do nome falhar, ele invoca a função de retorno do evento
com um evento de erro. Se for bem-sucedido, ele inicia uma tentativa de conexão
assim como
[EventBufferEvent::connect()](eventbufferevent.connect.md)
faria.

`dns_base`
é opcional. Pode ser **`null`**, ou um objeto criado com
[EventDnsBase::\_\_construct()](eventdnsbase.construct.md)
. Para resolução de nome de host assíncrona, passe um recurso base de DNS de evento válido.
Caso contrário, a resolução de nome de host será bloqueada.

> **Nota**:
>
> [EventDnsBase](class.eventdnsbase.md)
> está disponível somente se
> `Event`
> configurado com
> **--with-event-extra**
> (
> biblioteca
> `event_extra`, que dá
> *suporte à funcionalidade específica do protocolo libevent, incluindo HTTP, DNS e RPC*
> ).

> **Nota**:
>
> **EventBufferEvent::connectHost()**
> requer
> `libevent-2.0.3-alpha`
> ou superior.

### Parâmetros

`dns_base`
:   Instância de
    [EventDnsBase](class.eventdnsbase.md)
    caso o DNS tenha que ser resolvido de forma assíncrona. Caso contrário, **`null`**.

`hostname`
:   Nome do host para conectar. Os formatos reconhecidos são:

    ```
    www.example.com (hostname)
     1.2.3.4 (ipv4address)
     ::1 (ipv6address)
    [::1] ([ipv6address])
    ```

`port`
:   Número da porta

`family`
:   Família de endereços.
    **`EventUtil::AF_UNSPEC`**,
    **`EventUtil::AF_INET`**
    ou
    **`EventUtil::AF_INET6`**. Consulte as
    [constantes EventUtil](class.eventutil.md#eventutil.constants)
    .

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventBufferEvent::connectHost()****

```
<?php
/* Função de retorno de leitura */
function readcb($bev, $base) {
    //$input = $bev->input; //$bev->getInput();

    //$pos = $input->search("TTP");
    $pos = $bev->input->search("TTP");

    while (($n = $bev->input->remove($buf, 1024)) > 0) {
        echo $buf;
    }
}

/* Função de retorno de evento */
function eventcb($bev, $events, $base) {
    if ($events & EventBufferEvent::CONNECTED) {
        echo "Conectado.\n";
    } elseif ($events & (EventBufferEvent::ERROR | EventBufferEvent::EOF)) {
        if ($events & EventBufferEvent::ERROR) {
            echo "Erro de DNS: ", $bev->getDnsErrorString(), PHP_EOL;
        }

        echo "Fechando\n";
        $base->exit();
        exit("Pronto\n");
    }
}

$base = new EventBase();

$dns_base = new EventDnsBase($base, TRUE); // Será usada resolução assíncrona de DNS
if (!$dns_base) {
    exit("Falha ao iniciar base DNS\n");
}

$bev = new EventBufferEvent($base, /* usa soquete interno */ NULL,
    EventBufferEvent::OPT_CLOSE_ON_FREE | EventBufferEvent::OPT_DEFER_CALLBACKS,
    "readcb", /* writecb */ NULL, "eventcb", $base
);
if (!$bev) {
    exit("Falha ao criar soquete de evento de buffer\n");
}

//$bev->setCallbacks("readcb", /* writecb */ NULL, "eventcb", $base);
$bev->enable(Event::READ | Event::WRITE);

$output = $bev->output; //$bev->getOutput();
if (!$output->add(
    "GET {$argv[2]} HTTP/1.0\r\n".
    "Host: {$argv[1]}\r\n".
    "Connection: Close\r\n\r\n"
)) {
    exit("Falha ao adicionar a requisição ao buffer de saída\n");
}

if (!$bev->connectHost($dns_base, $argv[1], 80, EventUtil::AF_UNSPEC)) {
    exit("Não foi possível conectar ao host {$argv[1]}\n");
}

$base->dispatch();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Conectado.
HTTP/1.0 301 Moved Permanently
Location: http://www.google.co.uk/
Content-Type: text/html; charset=UTF-8
Date: Sat, 09 Mar 2013 12:21:19 GMT
Expires: Mon, 08 Apr 2013 12:21:19 GMT
Cache-Control: public, max-age=2592000
Server: gws
Content-Length: 221
X-XSS-Protection: 1; mode=block
X-Frame-Options: SAMEORIGIN

<HTML><HEAD><meta http-equiv="content-type" content="text/html;charset=utf-8">
<TITLE>301 Moved</TITLE></HEAD><BODY>
<H1>301 Moved</H1>
The document has moved
<A HREF="http://www.google.co.uk/">here</A>.
</BODY></HTML>
Fechando
Pronto
```

### Veja também

- [EventBufferEvent::connect()](eventbufferevent.connect.md) - Conecta o descritor de arquivo do evento de buffer ao endereço fornecido ou
  soquete UNIX

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
