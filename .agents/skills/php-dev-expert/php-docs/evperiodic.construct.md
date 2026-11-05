# Constrói objeto observador EvPeriodic

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evperiodic.construct.php

---

# EvPeriodic::\_\_construct

(PECL ev >= 0.2.0)

EvPeriodic::\_\_construct — Constrói objeto observador EvPeriodic

### Descrição

public
function **EvPeriodic::\_\_construct**(  
    
[float](language.types.float.md) `$offset`
,  
    
[string](language.types.string.md) `$interval`
,  
    
[callable](language.types.callable.md) `$reschedule_cb`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
)

Constrói o objeto observador EvPeriodic e o inicia automaticamente.
O método [EvPeriodic::createStopped()](evperiodic.createstopped.md)
cria o observador periódico parado.

### Parâmetros

`offset`
:   Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

`interval`
:   Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

`reschedule_cb`
:   Reprograma retorno de chamada. Você pode passar **`null`**. Veja
    [Modos de operação do observador
    periódico](ev.periodic-modes.md)

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Examples

**Exemplo #1 Temporizador periódico. Usar retorno de chamada de reagendamento**

```
<?php
// Marca a cada 10,5 segundos

function reschedule_cb ($watcher, $now) {
 return $now + (10.5 - fmod($now, 10.5));
}

$w = new EvPeriodic(0., 0., "reschedule_cb", function ($w, $revents) {
 echo time(), PHP_EOL;
});
Ev::run();
?>
```

**Exemplo #2 Temporizador periódico. Marca a cada 10,5 segundos a partir de agora**

```
<?php
// Marca a cada 10,5 segundos a partir de agora
$w = new EvPeriodic(fmod(Ev::now(), 10.5), 10.5, NULL, function ($w, $revents) {
 echo time(), PHP_EOL;
});
Ev::run();
?>
```

**Exemplo #3 Observador de hora em hora**

```
<?php
$hourly = EvPeriodic(0, 3600, NULL, function () {
 echo "uma vez por hora\n";
});
?>
```

### Veja também

- [Modos de operação do observador periódico](ev.periodic-modes.md)
- [EvTimer](class.evtimer.md)
- [EvPeriodic::createStopped()](evperiodic.createstopped.md) - Cria um observador EvPeriodic parado

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
