# Ativa/configura o evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncevent.fire.php

---

# SyncEvent::fire

(PECL sync >= 1.0.0)

SyncEvent::fire — Ativa/configura o evento

### Descrição

public function **SyncEvent::fire**(): [bool](language.types.boolean.md)

Ativa/configura um objeto [SyncEvent](class.syncevent.md). Permite que múltiplos threads que estão esperando passem
se o objeto de evento foi criado com um valor manual de **`true`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncEvent::fire()****

```
<?php
// Em uma aplicação web:
$event = new SyncEvent("GetAppReport");
$event->fire();

// Em um cron job:
$event = new SyncEvent("GetAppReport");
$event->wait();
?>
```

### Veja também

- [SyncEvent::reset()](syncevent.reset.md) - Redefine um evento manual
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
