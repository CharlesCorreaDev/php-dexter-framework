# Retorna o método de evento em uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.getmethod.php

---

# EventBase::getMethod

(PECL event >= 1.2.6-beta)

EventBase::getMethod — Retorna o método de evento em uso

### Descrição

public
function **EventBase::getMethod**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

String que representa o método de evento usado (backend).

### Examples

**Exemplo #1
Exemplo de **EventBase::getMethod()****

```
<?php
$cfg = new EventConfig();
if ($cfg->avoidMethod("select")) {
    echo "Método 'select' evitado\n";
}

// Cria event_base associado à configuração
$base = new EventBase($cfg);
echo "Método de evento usado: ", $base->getMethod(), PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Método 'select' evitado
Método de evento usado: epoll
```

### Veja também

- [EventBase::getFeatures()](eventbase.getfeatures.md) - Retorna a máscara de bits dos recursos suportados

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
