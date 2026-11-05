# Diz ao libvent para evitar um método de evento específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventconfig.avoidmethod.php

---

# EventConfig::avoidMethod

(PECL event >= 1.2.6-beta)

EventConfig::avoidMethod — Diz ao libvent para evitar um método de evento específico

### Descrição

public
function **EventConfig::avoidMethod**(
[string](language.types.string.md) `$method`
): [bool](language.types.boolean.md)

Diz ao libevent para evitar um método de evento específico (backend). Veja
[» Criando
uma base de eventos](http://www.wangafu.net/~nickm/libevent-book/Ref2_eventbase.html#_creating_an_event_base).

### Parâmetros

`method`
:   O método de backend a ser evitado. Veja
    [Constantes EventConfig](class.eventconfig.md#eventconfig.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventConfig::avoidMethod()****

```
<?php
$cfg = new EventConfig();
if ($cfg->avoidMethod("select")) {
    echo "Método 'select' evitado\n";
}
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
