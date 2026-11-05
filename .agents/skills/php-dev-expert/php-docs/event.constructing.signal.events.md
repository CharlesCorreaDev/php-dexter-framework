# Construindo eventos de sinalização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.constructing.signal.events.php

---

# Construindo eventos de sinalização

O evento também pode observar sinais do estilo POSIX. Para construir um manipulador para um
sinal, use
o construtor [Event::\_\_construct()](event.construct.md)
com a opção
**`Event::SIGNAL`**
ou
o método de fábrica
[Event::signal()](event.signal.md).

**Exemplo #1 Tratamento do sinal `SIGTERM`**

```
<?php
/*
Inicie-o em uma janela de terminal:

$ php examples/signal.php

Em outra janela do terminal, descubra o pid e envie o SIGTERM, por exemplo:

$ ps aux | grep examp
ruslan    3976  0.2  0.0 139896 11256 pts/1    S+   10:25   0:00 php examples/signal.php
ruslan    3978  0.0  0.0   9572   864 pts/2    S+   10:26   0:00 grep --color=auto examp
$ kill -TERM 3976

Na primeira janela do terminal será obtido o seguinte:

Caught signal 15
*/
class MyEventSignal {
    private $base, $ev;

    public function __construct($base) {
        $this->base = $base;
        $this->ev = Event::signal($base, SIGTERM, array($this, 'eventSighandler'));
        $this->ev->add();
    }

    public function eventSighandler($no, $c) {
        echo "Caught signal $no\n";
        $this->base->exit();
    }
}

$base = new EventBase();
$c    = new MyEventSignal($base);

$base->loop();
?>
```

Observe que as funções de retorno de sinal são executadas no laço de eventos após a ocorrência do sinal,
portanto, é seguro para elas chamarem funções que não devem ser
chamadas a partir de um manipulador de sinal POSIX comum.

Consulte também
[» Programação
de rede rápida e portátil sem bloqueio com Libevent,
Construindo Eventos de Sinal](http://www.wangafu.net/~nickm/libevent-book/Ref4_event.html#_constructing_signal_events).

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
