# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.examples.php

---

# Examples

**Exemplo #1 Temporizadores simples**

```
<?php
// Cria e inicia o disparo do cronômetro após 2 segundos
$w1 = new EvTimer(2, 0, function () {
    echo "2 segundos se passaram\n";
});

// Cria e inicia o disparo do temporizador após 2 segundos, repetindo cada segundo
// até pararmos manualmente
$w2 = new EvTimer(2, 1, function ($w) {
    echo "é chamado a cada segundo, é iniciado após 2 segundos\n";
    echo "iteração = ", Ev::iteration(), PHP_EOL;

    // Para o observador após 5 iterações
    Ev::iteration() == 5 and $w->stop();
    // Para o observador se outras chamadas causarem mais de 10 iterações
    Ev::iteration() >= 10 and $w->stop();
});

// Cria um cronômetro parado. Ele ficará inativo até que nós mesmos o iniciemos
$w_stopped = EvTimer::createStopped(10, 5, function($w) {
    echo "Função de retorno de um temporizador criado como parado\n";

    // Para o observador após 2 iterações
    Ev::iteration() >= 2 and $w->stop();
});

// Faz um laço até que Ev::stop() seja chamado ou todos os observadores parem
Ev::run();

// Começa e vê se funciona
$w_stopped->start();
echo "Executa uma única iteração\n";
Ev::run(Ev::RUN_ONCE);

echo "Reinicia o segundo observador e tenta lidar com os mesmos eventos, mas não bloqueia\n";
$w2->again();
Ev::run(Ev::RUN_NOWAIT);

$w = new EvTimer(10, 0, function() {});
echo "Executando um laço de bloqueio\n";
Ev::run();
echo "FIM\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2 segundos se passaram
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 1
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 2
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 3
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 4
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 5
Executa uma única iteração
Função de retorno de um temporizador criado como parado
Reinicia o segundo observador e tente lidar com os mesmos eventos, mas não bloqueia
Executando um laço de bloqueio
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 8
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 9
é chamado a cada segundo, é iniciado após 2 segundos
iteração = 10
FIM
```

**Exemplo #2 Temporizador periódico. Marcação a cada 10,5 segundos**

```
<?php
$w = new EvPeriodic(0., 10.5, NULL, function ($w, $revents) {
    echo time(), PHP_EOL;
});

Ev::run();
?>
```

**Exemplo #3 Temporizador periódico. Usar retorno de chamada de reagendamento**

```
<?php
// Marcação a cada 10,5 segundos

function reschedule_cb ($watcher, $now) {
    return $now + (10.5. - fmod($now, 10.5));
}

$w = new EvPeriodic(0., 0., "reschedule_cb", function ($w, $revents) {
    echo time(), PHP_EOL;
});

Ev::run();
?>
```

**Exemplo #4 Temporizador periódico. Marcação a cada 10,5 segundos a partir de agora**

```
<?php
// Marcação a cada 10,5 segundos a partir de agora
$w = new EvPeriodic(fmod(Ev::now(), 10.5), 10.5, NULL, function ($w, $revents) {
    echo time(), PHP_EOL;
});

Ev::run();
?>
```

**Exemplo #5 Espera até que STDIN esteja legível**

```
<?php
// Espera até que STDIN esteja legível
$w = new EvIo(STDIN, Ev::READ, function ($watcher, $revents) {
    echo "STDIN está legível\n";
});

Ev::run(Ev::RUN_ONCE);
?>
```

**Exemplo #6 Usa alguma E/S assíncrona para acessar um soquete**

```
<?php
/* Usa alguma E/S assíncrona para acessar um soquete */

// A extensão `sockets` ainda registra alertas
// para EINPROGRESS, EAGAIN/EWOULDBLOCK etc.
error_reporting(E_ERROR);

$e_nonblocking = array (/*EAGAIN ou EWOULDBLOCK*/11, /*EINPROGRESS*/115);

// Obtém a porta do serviço WWW
$service_port = getservbyname('www', 'tcp');

// Obtém o endereço IP do host alvo
$address = gethostbyname('google.co.uk');

// Cria um soquete TCP/IP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === FALSE) {
    echo "socket_create() falhou: razão: "
        . socket_strerror(socket_last_error()) . "\n";
}

// Define a opção O_NONBLOCK
socket_set_nonblock($socket);

// Aborta no tempo limite
$timeout_watcher = new EvTimer(10.0, 0., function () use ($socket) {
    socket_close($socket);
    Ev::stop(Ev::BREAK_ALL);
});

// Faz a solicitação HEAD quando o soquete é gravável
$write_watcher = new EvIo($socket, Ev::WRITE, function ($w)
    use ($socket, $timeout_watcher, $e_nonblocking)
{
    // Interrompe o observador de tempo limite
    $timeout_watcher->stop();
    // Para de escrever o observador
    $w->stop();

    $in = "HEAD / HTTP/1.1\r\n";
    $in .= "Host: google.co.uk\r\n";
    $in .= "Connection: Close\r\n\r\n";

    if (!socket_write($socket, $in, strlen($in))) {
        trigger_error("Falha ao escrever $in no soquete", E_USER_ERROR);
    }

    $read_watcher = new EvIo($socket, Ev::READ, function ($w, $re)
        use ($socket, $e_nonblocking)
    {
        // O soquete é legível. recv() 20 bytes usando modo sem bloqueio
        $ret = socket_recv($socket, $out, 20, MSG_DONTWAIT);

        if ($ret) {
            echo $out;
        } elseif ($ret === 0) {
            // Tudo lido
            $w->stop();
            socket_close($socket);
            return;
        }

        // Captura EINPROGRESS, EAGAIN, ou EWOULDBLOCK
        if (in_array(socket_last_error(), $e_nonblocking)) {
            return;
        }

        $w->stop();
        socket_close($socket);
    });

    Ev::run();
});

$result = socket_connect($socket, $address, $service_port);

Ev::run();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
HTTP/1.1 301 Moved Permanently
Location: http://www.google.co.uk/
Content-Type: text/html; charset=UTF-8
Date: Sun, 23 Dec 2012 16:08:27 GMT
Expires: Tue, 22 Jan 2013 16:08:27 GMT
Cache-Control: public, max-age=2592000
Server: gws
Content-Length: 221
X-XSS-Protection: 1; mode=block
X-Frame-Options: SAMEORIGIN
Connection: close
```

**Exemplo #7 Incorporando um laço em outro**

```
<?php
/*
* Tenta obter um laço de eventos incorporável e incorporá-lo ao laço de eventos padrão.
* Se for impossível, usa o laço padrão
* O laço padrão é armazenado em $loop_hi, enquanto o laço incorporável é
* armazenado em $loop_lo(que é $loop_hi no caso de nenhum laço incorporável poder ser
* usado).
*
* Amostra traduzida para PHP
* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9
*/
$loop_hi = EvLoop::defaultLoop();
$loop_lo = NULL;
$embed   = NULL;

/*
* Veja se há chance de conseguir um que funcione
* (o valor 0 da opção significa autodetecção)
*/
$loop_lo = Ev::embeddableBackends() & Ev::recommendedBackends()
    ? new EvLoop(Ev::embeddableBackends() & Ev::recommendedBackends())
    : 0;

if ($loop_lo) {
    $embed = new EvEmbed($loop_lo, function () {});
} else {
    $loop_lo = $loop_hi;
}
?>
```

**Exemplo #8 Incorporando laço criado com back-end kqueue no laço padrão**

```
<?php
/*
* Verifica se o kqueue está disponível, mas não é recomendado, e cria um backend kqueue
* para uso com soquetes (que geralmente funcionam com qualquer implementação do kqueue).
* Armazena o laço de eventos kqueue/somente_soquete em loop_socket. (Pode-se opcionalmente
* usar EVFLAG_NOENV também)
*
* Exemplo emprestado de
* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9
*/
$loop        = EvLoop::defaultLoop();
$socket_loop = NULL;
$embed       = NULL;

if (Ev::supportedBackends() & ~Ev::recommendedBackends() & Ev::BACKEND_KQUEUE) {
    if (($socket_loop = new EvLoop(Ev::BACKEND_KQUEUE))) {
        $embed = new EvEmbed($loop);
    }
}

if (!$socket_loop) {
    $socket_loop = $loop;
}

// Agora use $socket_loop para todos os soquetes e $loop para qualquer outro
?>
```

**Exemplo #9 Lidar com sinal SIGTERM**

```
<?php
$w = new EvSignal(SIGTERM, function ($watcher) {
    echo "SIGTERM recebido\n";
    $watcher->stop();
});

Ev::run();
?>
```

**Exemplo #10 Monitora alterações em /var/log/messages**

```
<?php
// Usa intervalo de atualização de 10 segundos.
$w = new EvStat("/var/log/messages", 8, function ($w) {
    echo "/var/log/messages alterado\n";

    $attr = $w->attr();

    if ($attr['nlink']) {
        printf("Tamanho atual: %ld\n", $attr['size']);
        printf("Horário de acesso atual: %ld\n", $attr['atime']);
        printf("Horário de moficiação atual: %ld\n", $attr['mtime']);
    } else {
        fprintf(STDERR, "O arquivo `messages` não existe!");
        $w->stop();
    }
});

Ev::run();
?>
```

**Exemplo #11 Monitora as alterações de /var/log/messages. Evita perder atualizações com um atraso de um segundo**

```
<?php
$timer = EvTimer::createStopped(0., 1.02, function ($w) {
    $w->stop();

    $stat = $w->data;

    // 1 segundo após a alteração mais recente do arquivo
    printf("Tamanho atual: %ld\n", $stat->attr()['size']);
});

$stat = new EvStat("/var/log/messages", 0., function () use ($timer) {
    // Redefine o observador do cronômetro
    $timer->again();
});

$timer->data = $stat;

Ev::run();
?>
```

**Exemplo #12 Mudanças de status de processo**

```
<?php
$pid = pcntl_fork();

if ($pid == -1) {
    fprintf(STDERR, "pcntl_fork falhou\n");
} elseif ($pid) {
    $w = new EvChild($pid, FALSE, function ($w, $revents) {
        $w->stop();

        printf("Processo %d encerrado com status %d\n", $w->rpid, $w->rstatus);
    });

    Ev::run();

    // Proteção contra zumbis
    pcntl_wait($status);
} else {
    // Filho bifurcado
    exit(2);
}
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
