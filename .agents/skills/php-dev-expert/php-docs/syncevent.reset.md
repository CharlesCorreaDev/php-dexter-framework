# Redefine um evento manual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncevent.reset.php

---

# SyncEvent::reset

(PECL sync >= 1.0.0)

SyncEvent::reset — Redefine um evento manual

### Descrição

public function **SyncEvent::reset**(): [bool](language.types.boolean.md)

Redefine um objeto [SyncEvent](class.syncevent.md) que foi ativado/configurado. Válido apenas para objetos de evento manual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncEvent::reset()****

```
<?php
// Em uma aplicação web:
$event = new SyncEvent("DemoApplication", true);
$event->wait();

// Em um cron job
$event = new SyncEvent("DemoApplication", true);
$event->reset();
/* ... Faça alguma(s) tarefa(s) de manutenção ... */
$event->fire();
?>
```

### Veja também

- [SyncEvent::fire()](syncevent.fire.md) - Ativa/configura o evento
- **SyncEvent::reset()**
- [SyncEvent::wait()](syncevent.wait.md) - Espera o evento ser ativado/configurado

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
