# Espera o evento ser ativado/configurado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncevent.wait.php

---

# SyncEvent::wait

(PECL sync >= 1.0.0)

SyncEvent::wait — Espera o evento ser ativado/configurado

### Descrição

public function **SyncEvent::wait**([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

Espera pelo objeto [SyncEvent](class.syncevent.md) ser ativado.

### Parâmetros

`wait`
:   O número de milissegundos para esperar o evento ser ativado/configurado.
    Um valor de -1 é infinito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncEvent::wait()****

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

- [SyncEvent::fire()](syncevent.fire.md) - Ativa/configura o evento

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
