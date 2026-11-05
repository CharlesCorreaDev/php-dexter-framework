# Retorna a máscara de bits dos recursos suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.getfeatures.php

---

# EventBase::getFeatures

(PECL event >= 1.2.6-beta)

EventBase::getFeatures — Retorna a máscara de bits dos recursos suportados

### Descrição

public
function **EventBase::getFeatures**(): [int](language.types.integer.md)

Retorna a máscara de bits dos recursos suportados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro representando uma máscara de bits de recursos suportados.
Consulte as [constantes EventConfig::FEATURE\_\*](class.eventconfig.md#eventconfig.constants).

### Examples

**Exemplo #1
Exemplo de **EventBase::getFeatures()****

```
<?php
// Evitando o método "select"
$cfg = new EventConfig();
if ($cfg->avoidMethod("select")) {
    echo "Método 'select' evitado\n";
}

$base = new EventBase($cfg);

echo "Recursos:\n";
$features = $base->getFeatures();
($features & EventConfig::FEATURE_ET) and print "ET - E/S acionado por alteração de estado\n";
($features & EventConfig::FEATURE_O1) and print "O1 - Operação O(1) para adicionar/excluir eventos\n";
($features & EventConfig::FEATURE_FDS) and print "FDS - tipos arbitrários de descritores de arquivos, não somente soquetes\n";
?>
```

### Veja também

- [EventBase::getMethod()](eventbase.getmethod.md) - Retorna o método de evento em uso
- [EventConfig](class.eventconfig.md)

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
