# Torna o evento pendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.add.php

---

# Event::add

(PECL event >= 1.2.6-beta)

Event::add — Torna o evento pendente

### Descrição

public
function **Event::add**(
[float](language.types.float.md) `$timeout`
 = ?): [bool](language.types.boolean.md)

Marca o evento como pendente. Eventos não pendentes nunca ocorrerão, e a função de retorno
do evento nunca será chamada. Em conjunto com
[Event::del()](event.del.md),
um evento pode ser reprogramado pelo usuário a qualquer momento.

Se
**Event::add()**
for chamado em um evento já pendente, a libevent o deixará pendente e
o reagendará com o tempo limite fornecido (se especificado). Se, nesse caso,
o tempo limite não for especificado,
**Event::add()**
não terá efeito.

### Parâmetros

`timeout`
:   Tempo limite em segundos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionando um sinal personalizado**

```
<?php
/*
Inicie-o em uma janela de terminal:

$ php examples/signal.php

Em outra janela de terminal, descubra o PID e envie SIGTERM, por exemplo:

$ ps aux | grep examp
ruslan    3976  0.2  0.0 139896 11256 pts/1    S+   10:25   0:00 php examples/signal.php
ruslan    3978  0.0  0.0   9572   864 pts/2    S+   10:26   0:00 grep --color=auto examp
$ kill -TERM 3976

Na primeira janela do terminal o resultado será:

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

O exemplo acima produzirá
algo semelhante a:

```
Caught signal 15
```

**Exemplo #2 Adicionando um temporizador**

```
<?php
$base = new EventBase();
$n = 2;
$e = Event::timer($base, function($n) use (&$e) {
    echo "$n segundos decorridos\n";
    $e->delTimer();
}, $n);
$e->add($n);
$base->loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2 segundos decorridos
```

### Veja também

- **Event::add()**
- [Event::del()](event.del.md) - Torna o evento não pendente
- [Event::signal()](event.signal.md) - Constrói objeto de evento de sinal
- [Event::timer()](event.timer.md) - Constrói objeto de evento de temporizador

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
