# Obtém o caminho absoluto canônico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-realpath.php

---

# eio\_realpath

(PECL eio >= 0.0.1dev)

eio\_realpath — Obtém o caminho absoluto canônico

### Descrição

function **eio\_realpath**(  
    [string](language.types.string.md) `$path`,  
    [int](language.types.integer.md) `$pri`,  
    [callable](language.types.callable.md) `$callback`,  
    [string](language.types.string.md) `$data` = NULL  
): [resource](language.types.resource.md)

**eio\_realpath()** retorna o caminho absoluto canonizado
no argumento `result` da função
`callback`.

### Parâmetros

`path`
:   Caminho curto

`pri`

`callback`

`data`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **eio\_realpath()****

```
<?php
var_dump(getcwd());

function my_realpath_callback($data, $result) {
    var_dump($result);
}

eio_realpath("../", EIO_PRI_DEFAULT, "my_realpath_callback");
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(12) "/home/ruslan"
string(5) "/home"
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
