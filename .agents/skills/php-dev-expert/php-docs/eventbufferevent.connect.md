# Conecta o descritor de arquivo do evento de buffer ao endereço fornecido ou
   soquete UNIX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.connect.php

---

# EventBufferEvent::connect

(PECL event >= 1.2.6-beta)

EventBufferEvent::connect — Conecta o descritor de arquivo do evento de buffer ao endereço fornecido ou
soquete UNIX

### Descrição

public
function **EventBufferEvent::connect**(
[string](language.types.string.md) `$addr`
): [bool](language.types.boolean.md)

Conecta o descritor de arquivo do evento de buffer ao endereço fornecido (opcionalmente
com porta) ou a um soquete de domínio UNIX.

Se o soquete não for atribuído ao evento de buffer, esta função aloca um
novo soquete e o torna não bloqueante internamente.

Para resolver nomes DNS (de forma assíncrona),
use o método
[EventBufferEvent::connectHost()](eventbufferevent.connecthost.md).

### Parâmetros

`addr`
:   Deve conter um endereço IP com número de porta opcional, ou um caminho para
    soquete de domínio UNIX. Os formatos reconhecidos são:

    ```
    [IPv6Address]:port
    [IPv6Address]
    IPv6Address
    IPv4Address:port
    IPv4Address
    unix:path
    ```

    Observe que o prefixo
    `'unix:'`
    atualmente não diferencia maiúsculas de minúsculas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventBufferEvent::connect()****

```
<?php
/*
 * 1. Conecta a 127.0.0.1 na porta 80
 * por meio de EventBufferEvent::connect().
 *
 * 2. Requisita /index.cphp através de HTTP/1.0
 * usando o buffer de saída.
 *
 * 3. Lê a resposta de forma assíncrona e a imprime na saída padrão.
 */

/* Função de retorno de leitura */
function readcb($bev, $base) {
    $input = $bev->getInput();

    while (($n = $input->remove($buf, 1024)) > 0) {
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

echo "passo 1\n";
$bev = new EventBufferEvent($base, /* usa soquete interno */ NULL,
    EventBufferEvent::OPT_CLOSE_ON_FREE | EventBufferEvent::OPT_DEFER_CALLBACKS);
if (!$bev) {
    exit("Falha ao criar soquete de evento de buffer\n");
}

echo "passo 2\n";
$bev->setCallbacks("readcb", /* writecb */ NULL, "eventcb", $base);
$bev->enable(Event::READ | Event::WRITE);

echo "passo 3\n";
/* Envia a requisição */
$output = $bev->getOutput();
if (!$output->add(
    "GET /index.cphp HTTP/1.0\r\n".
    "Connection: Close\r\n\r\n"
)) {
    exit("Falha ao adicionar a requisição ao buffer de saída\n");
}

/* Conecta ao host de forma assíncrona.
 * O IP é conhecido, não é necessário resolver o DNS. */
if (!$bev->connect("127.0.0.1:80")) {
    exit("Não foi possível conectar ao host\n");
}

/* Despacha eventos pendentes */
$base->dispatch();
```

O exemplo acima produzirá
algo semelhante a:

```
passo 1
passo 2
passo 3
Conectado.
HTTP/1.1 200 OK
Server: nginx/1.2.6
Date: Sat, 09 Mar 2013 10:06:58 GMT
Content-Type: text/html; charset=utf-8
Connection: close
X-Powered-By: PHP/5.4.11--pl2-gentoo

sdfsdfsf
Fechando
Pronto
```

**Exemplo #2 Conecta-se ao soquete de domínio UNIX que presumivelmente é servido por um servidor, lê a resposta do
servidor e a envia para o console**

```
<?php
class MyUnixSocketClient {
    private $base, $bev;

    function __construct($base, $sock_path) {
        $this->base = $base;
        $this->bev = new EventBufferEvent($base, NULL, EventBufferEvent::OPT_CLOSE_ON_FREE,
            array ($this, "read_cb"), NULL, array ($this, "event_cb"));

        if (!$this->bev->connect("unix:$sock_path")) {
            trigger_error("Falha ao conectar ao soquete `$sock_path'", E_USER_ERROR);
        }

        $this->bev->enable(Event::READ);
    }

    function __destruct() {
        if ($this->bev) {
            $this->bev->free();
            $this->bev = NULL;
        }
    }

    function dispatch() {
        $this->base->dispatch();
    }

    function read_cb($bev, $unused) {
        $in = $bev->input;

        printf("Recebidos %ld bytes\n", $in->length);
        printf("---- dados ----\n");
        printf("%ld:\t%s\n", (int) $in->length, $in->pullup(-1));

        $this->bev->free();
        $this->bev = NULL;
        $this->base->exit(NULL);
    }

    function event_cb($bev, $events, $unused) {
        if ($events & EventBufferEvent::ERROR) {
            echo "Erro do evento de buffer\n";
        }

        if ($events & (EventBufferEvent::EOF | EventBufferEvent::ERROR)) {
            $bev->free();
            $bev = NULL;
        } elseif ($events & EventBufferEvent::CONNECTED) {
            $bev->output->add("teste\n");
        }
    }
}

if ($argc <= 1) {
    exit("Caminho do soquete não foi informado\n");
}
$sock_path = $argv[1];

$base = new EventBase();
$cl = new MyUnixSocketClient($base, $sock_path);
$cl->dispatch();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Recebidos 6 bytes
---- data ----
6:  teste
```

### Veja também

- [EventBufferEvent::connectHost()](eventbufferevent.connecthost.md) - Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona

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
