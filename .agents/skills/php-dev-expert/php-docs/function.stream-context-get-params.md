# Obtém parâmetros de um contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-get-params.php

---

# stream\_context\_get\_params

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

stream\_context\_get\_params — Obtém parâmetros de um contexto

### Descrição

function **stream\_context\_get\_params**([resource](language.types.resource.md) `$context`): [array](language.types.array.md)

Obtém informações de parâmetro e opções de um fluxo ou contexto.

### Parâmetros

`context`
:   Um fluxo do tipo [resource](language.types.resource.md) ou um
    [context](context.md) do tipo [resource](language.types.resource.md)

### Valor Retornado

Retorna um array associativo contendo todas as opções de contexto e parâmetros.

### Examples

**Exemplo #1 Exemplo de **stream\_context\_get\_params()****

Exemplo de uso básico

```
<?php
$ctx = stream_context_create();
$params = array("notification" => "stream_notification_callback");
stream_context_set_params($ctx, $params);

var_dump(stream_context_get_params($ctx));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["notification"]=>
  string(28) "stream_notification_callback"
  ["options"]=>
  array(0) {
  }
}
```

### Veja também

- [stream\_context\_set\_option()](function.stream-context-set-option.md) - Define uma opção para um fluxo/empacotador/contexto
- [stream\_context\_set\_params()](function.stream-context-set-params.md) - Define parâmetros para um fluxo/empacotador/contexto

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
