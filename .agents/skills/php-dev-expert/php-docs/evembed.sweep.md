# Faz uma varredura única e sem bloqueio sobre o laço incorporado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evembed.sweep.php

---

# EvEmbed::sweep

(PECL ev >= 0.2.0)

EvEmbed::sweep — Faz uma varredura única e sem bloqueio sobre o laço incorporado

### Descrição

public
function **EvEmbed::sweep**(): [void](language.types.void.md)

Faz uma varredura única e sem bloqueio sobre o laço incorporado. Funciona de forma
semelhante ao seguinte, mas da maneira mais apropriada para laços incorporados:

```
<?php
$other->start(Ev::RUN_NOWAIT);
?>
```

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvWatcher::start()](evwatcher.start.md) - Inicia o observador

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
