# Contrói objeto observador EvTimer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evtimer.construct.php

---

# EvTimer::\_\_construct

(PECL ev >= 0.2.0)

EvTimer::\_\_construct — Contrói objeto observador EvTimer

### Descrição

public
function **EvTimer::\_\_construct**(  
    
[float](language.types.float.md) `$after`
,  
    
[float](language.types.float.md) `$repeat`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
)

Contrói objeto observador EvTimer.

### Parâmetros

`after`
:   Configura o temporizador para disparar após
    `after`
    segundos.

`repeat`
:   Se este parâmetro for
    `0.0`,
    o temporizador será automaticamente parado quando o tempo limite for atingido.
    Se for positivo, será o intervalo em segundos no qual o temporizador será
    automaticamente configurado para disparar novamente, até ser parado manualmente.

`callback`
:   Consulte
    [funções de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Examples

**Exemplo #1 Temporizadores simples**

```
<?php
// Cria e inicia o disparo do temporizador após 2 segundos
$w1 = new EvTimer(2, 0, function () {
    echo "2 segundos se passaram\n";
});

// Cria e inicia o disparo do temporizador após 2 segundos, repetindo a cada segundo
// até que seja parado manualmente
$w2 = new EvTimer(2, 1, function ($w) {
    echo "é chamado a cada segundo e disparado após 2 segundos\n";
    echo "iteração = ", Ev::iteration(), PHP_EOL;

    // Interrompe o observador após 5 iterações
    Ev::iteration() == 5 and $w->stop();
    // Interrompe o observador se outras chamadas causarem mais de 10 iterações
    Ev::iteration() >= 10 and $w->stop();
});

// Cria um temporizador parado. Ele ficará inativo até que seja iniciado manualmente
$w_stopped = EvTimer::createStopped(10, 5, function($w) {
    echo "Função de retorno de um temporizador criado no estado parado\n";

    // Interrompe o observador após 2 iterações
    Ev::iteration() >= 2 and $w->stop();
});

// Repete até que Ev::stop() seja chamado ou todos os observadores parem
Ev::run();

// Inicia e verifica se funciona
$w_stopped->start();
echo "Executa iteração única\n";
Ev::run(Ev::RUN_ONCE);

echo "Reinicia o segundo observador e tenta lidar com os mesmos eventos, mas sem bloquear\n";
$w2->again();
Ev::run(Ev::RUN_NOWAIT);

$w = new EvTimer(10, 0, function() {});
echo "Executando uma repetição bloqueante\n";
Ev::run();
echo "FIM\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2 segundos se passaram
é chamado a cada segundo e disparado após 2 segundos
iteração = 1
é chamado a cada segundo e disparado após 2 segundos
iteração = 2
é chamado a cada segundo e disparado após 2 segundos
iteração = 3
é chamado a cada segundo e disparado após 2 segundos
iteração = 4
é chamado a cada segundo e disparado após 2 segundos
iteração = 5
Executa iteração única
Função de retorno de um temporizador criado no estado parado
Reinicia o segundo observador e tenta lidar com os mesmos eventos, mas sem bloquear
Executando uma repetição bloqueante
é chamado a cada segundo e disparado após 2 segundos
iteração = 8
é chamado a cada segundo e disparado após 2 segundos
iteração = 9
é chamado a cada segundo e disparado após 2 segundos
iteração = 10
FIM
```

### Veja também

- [EvTimer::createStopped()](evtimer.createstopped.md) - Cria objeto observador EvTimer parado
- [EvPeriodic](class.evperiodic.md)
- [» ev\_timer - tempos limite relativos e opcionalmente repetitivos](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_timer_code_relative_and_opti)
- [» Usando os limites de tempo com inteligência](https://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Be_smart_about_timeouts)

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
