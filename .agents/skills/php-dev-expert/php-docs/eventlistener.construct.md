# Cria um novo ouvinte de conexão associado a uma base de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.construct.php

---

# EventListener::\_\_construct

(PECL event >= 1.2.6-beta)

EventListener::\_\_construct — Cria um novo ouvinte de conexão associado a uma base de eventos

### Descrição

public
function **EventListener::\_\_construct**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$data`
,  
    
[int](language.types.integer.md) `$flags`
,  
    
[int](language.types.integer.md) `$backlog`
,  
    
[mixed](language.types.mixed.md) `$target`
  
)

Cria um novo ouvinte de conexão associado a uma base de eventos.

### Parâmetros

`base`
:   Base de evento associada.

`cb`
:   Uma função do tipo
    [callable](language.types.callable.md)
    que será chamada quando um nova conexão for recebida.

`data`
:   Dados personalizados do usuário
    anexados a `cb`.

`flags`
:   Máscara de bits das
    constantes
    `EventListener::OPT_*`.
    Consulte as [constantes EventListener](class.eventlistener.md#eventlistener.constants).

`backlog`
:   Controla o número máximo de conexões pendentes que a pilha de rede
    deve permitir esperar em um estado ainda-não-aceito a qualquer momento; veja
    a documentação da função
    `listen`
    do seu sistema para mais detalhes. Se
    `backlog`
    for negativo, o Libevent tenta escolher um bom valor para o
    `backlog`;
    se for zero, o Event assume que
    `listen`
    já foi chamado no soquete (`target`).

`target`
:   Pode ser uma string, um recurso de soquete ou um fluxo associado a um soquete.
    Caso
    `target`
    seja uma string, ela será analisada como endereço de rede. Será
    interpretada como um caminho de soquete de domínio UNIX, se prefixada com
    `'unix:'`,
    por exemplo
    `'unix:/tmp/my.sock'`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.5.0 | Adicionado suporte a soquetes de domínio UNIX. |

### Examples

**Exemplo #1
Exemplo de **EventListener::\_\_construct()****

```
<?php
/*
 * Servidor de eco simples baseado no ouvinte de conexão do libevent.
 *
 * Usage:
 * 1) Em uma janela de terminal, execute:
 *
 * $ php listener.php 9881
 *
 * 2) Em outra janela de terminal abra a conexão, por exemplo:
 *
 * $ nc 127.0.0.1 9881
 *
 * 3) Comece a digitar. O servidor deve repetir a entrada.
 */

class MyListenerConnection {
    private $bev, $base;

    public function __destruct() {
        $this->bev->free();
    }

    public function __construct($base, $fd) {
        $this->base = $base;

        $this->bev = new EventBufferEvent($base, $fd, EventBufferEvent::OPT_CLOSE_ON_FREE);

        $this->bev->setCallbacks(array($this, "echoReadCallback"), NULL,
            array($this, "echoEventCallback"), NULL);

        if (!$this->bev->enable(Event::READ)) {
            echo "Falha ao habilitar READ\n";
            return;
        }
    }

    public function echoReadCallback($bev, $ctx) {
        // Copia todos os dados do buffer de entrada para o buffer de saída

        // Variante #1
        $bev->output->addBuffer($bev->input);

        /* Variante #2 */
        /*
        $input    = $bev->getInput();
        $output = $bev->getOutput();
        $output->addBuffer($input);
        */
    }

    public function echoEventCallback($bev, $events, $ctx) {
        if ($events & EventBufferEvent::ERROR) {
            echo "Erro de bufferevent\n";
        }

        if ($events & (EventBufferEvent::EOF | EventBufferEvent::ERROR)) {
            //$bev->free();
            $this->__destruct();
        }
    }
}

class MyListener {
    public $base,
        $listener,
        $socket;
    private $conn = array();

    public function __destruct() {
        foreach ($this->conn as &$c) $c = NULL;
    }

    public function __construct($port) {
        $this->base = new EventBase();
        if (!$this->base) {
            echo "Não foi possível abrir a base de eventos";
            exit(1);
        }

        // Variante #1
        /*
        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if (!socket_bind($this->socket, '0.0.0.0', $port)) {
            echo "Não é possível vincular o soquete\n";
            exit(1);
        }
        $this->listener = new EventListener($this->base,
            array($this, "acceptConnCallback"), $this->base,
            EventListener::OPT_CLOSE_ON_FREE | EventListener::OPT_REUSEABLE,
            -1, $this->socket);
         */

        // Variante #2
         $this->listener = new EventListener($this->base,
             array($this, "acceptConnCallback"), $this->base,
             EventListener::OPT_CLOSE_ON_FREE | EventListener::OPT_REUSEABLE, -1,
             "0.0.0.0:$port");

        if (!$this->listener) {
            echo "Não foi possível criar o ouvinte";
            exit(1);
        }

        $this->listener->setErrorCallback(array($this, "accept_error_cb"));
    }

    public function dispatch() {
        $this->base->dispatch();
    }

    // Esta função de retorno é invocada quando há dados para ler em $bev
    public function acceptConnCallback($listener, $fd, $address, $ctx) {
        // Temos uma nova conexão! Configurando um bufferevent para ela. */
        $base = $this->base;
        $this->conn[] = new MyListenerConnection($base, $fd);
    }

    public function accept_error_cb($listener, $ctx) {
        $base = $this->base;

        fprintf(STDERR, "Ocorreu um erro %d (%s) no ouvinte. "
            ."Desligando.\n",
            EventUtil::getLastSocketErrno(),
            EventUtil::getLastSocketError());

        $base->exit(NULL);
    }
}

$port = 9808;

if ($argc > 1) {
    $port = (int) $argv[1];
}
if ($port <= 0 || $port > 65535) {
    exit("Porta inválida");
}

$l = new MyListener($port);
$l->dispatch();
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
