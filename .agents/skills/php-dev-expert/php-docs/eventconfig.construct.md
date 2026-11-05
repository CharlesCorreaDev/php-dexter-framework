# Constrói objeto EventConfig

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventconfig.construct.php

---

# EventConfig::\_\_construct

(PECL event >= 1.2.6-beta)

EventConfig::\_\_construct — Constrói objeto EventConfig

### Descrição

public
function **EventConfig::\_\_construct**()

Constrói o objeto EventConfig que pode ser passado para o construtor
[EventBase::\_\_construct()](eventbase.construct.md)
.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1
Exemplo de **EventConfig::\_\_construct()****

```
<?php
// Evitando o método "select"
$cfg = new EventConfig();
if ($cfg->avoidMethod("select")) {
    echo "Método 'select' evitado\n";
}

// Cria event_base associado à configuração
$base = new EventBase($cfg);

/* Agora $base está configurado para evitar o backend (método) "select" */
?>
```

### Veja também

- [EventBase::\_\_construct()](eventbase.construct.md) - Constrói objeto EventBase

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
