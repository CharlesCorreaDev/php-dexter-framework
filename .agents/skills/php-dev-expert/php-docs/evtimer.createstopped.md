# Cria objeto observador EvTimer parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evtimer.createstopped.php

---

# EvTimer::createStopped

(PECL ev >= 0.2.0)

EvTimer::createStopped — Cria objeto observador EvTimer parado

### Descrição

final
public
static
function **EvTimer::createStopped**(  
    
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
  
): [EvTimer](class.evtimer.md)

Cria objeto observador EvTimer parado. Diferentemente de
[EvTimer::\_\_construct()](evtimer.construct.md),
esse método não inicia o observador automaticamente.

### Parâmetros

`after`
:   Configura o temporizador para disparo após
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

### Valor Retornado

Retorna um objeto EvTimer watcher em caso de sucesso.

### Examples

**Exemplo #1 Monitora alterações em /var/log/messages. Evita perder atualizações por meio de um atraso de um segundo**

```
<?php
$timer = EvTimer::createStopped(0., 1.02, function ($w) {
    $w->stop();

    $stat = $w->data;

    // 1 segundo após a alteração mais recente do arquivo
    printf("Tamanho atual: %ld\n", $stat->attr()['size']);
});

$stat = new EvStat("/var/log/messages", 0., function () use ($timer) {
    // Reinicia o observador do temporizador
    $timer->again();
});

$timer->data = $stat;

Ev::run();
?>
```

### Veja também

- [EvTimer::\_\_construct()](evtimer.construct.md) - Contrói objeto observador EvTimer
- [EvPeriodic](class.evperiodic.md)

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
