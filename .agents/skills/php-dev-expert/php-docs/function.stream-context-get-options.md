# Obtém opções para um fluxo/empacotador/contexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-get-options.php

---

# stream\_context\_get\_options

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_context\_get\_options — Obtém opções para um fluxo/empacotador/contexto

### Descrição

function **stream\_context\_get\_options**([resource](language.types.resource.md) `$stream_or_context`): [array](language.types.array.md)

Retorna um array de opções sobre o contexto ou fluxo especificado.

### Parâmetros

`stream_or_context`
:   O fluxo (stream) ou contexto (context) do qual as opções serão obtidas

### Valor Retornado

Retorna um array associativo com as opções.

### Examples

**Exemplo #1 Exemplo de **stream\_context\_get\_options()****

```
<?php
$params = array("method" => "POST");

stream_context_set_default(array("http" => $params));

var_dump(stream_context_get_options(stream_context_get_default()));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  ["http"]=>
  array(1) {
    ["method"]=>
    string(4) "POST"
  }
}
```

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
