# Insere um recurso de método de evento obrigatório que o aplicativo exige

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventconfig.requirefeatures.php

---

# EventConfig::requireFeatures

(PECL event >= 1.2.6-beta)

EventConfig::requireFeatures — Insere um recurso de método de evento obrigatório que o aplicativo exige

### Descrição

public
function **EventConfig::requireFeatures**(
[int](language.types.integer.md) `$feature`
): [bool](language.types.boolean.md)

Insere um recurso de método de evento obrigatório que o aplicativo exige

### Parâmetros

`feature`
:   Bitmask de recursos necessários. Veja
    [constantes `EventConfig::FEATURE_*`](class.eventconfig.md#eventconfig.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1
Exemplo de **EventConfig::requireFeatures()****

```
<?php
$cfg = new EventConfig();

// Cria event_base associado à configuração
$base = new EventBase($cfg);

// Requer recurso FDS
if ($cfg->requireFeatures(EventConfig::FEATURE_FDS)) {
    echo "Recurso FDS agora foi requerido\n";

    $base = new EventBase($cfg);
    ($base->getFeatures() & EventConfig::FEATURE_FDS)
        and print "FDS - tipos arbitrários de descritores de arquivo, e não apenas soquetes\n";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Recurso FDS agora foi requerido
FDS - tipos arbitrários de descritores de arquivo, e não apenas soquetes
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
