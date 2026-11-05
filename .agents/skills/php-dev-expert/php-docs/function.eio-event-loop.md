# Consulta a libeio até que todas as requisições tenham concluído

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-event-loop.php

---

# eio\_event\_loop

(PECL eio >= 0.0.1dev)

eio\_event\_loop — Consulta a libeio até que todas as requisições tenham concluído

### Descrição

function **eio\_event\_loop**(): [bool](language.types.boolean.md)

**eio\_event\_loop()** consulta a libeio até que todas as requisições tenham concluído.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_event\_loop()** retorna **`true`** em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **eio\_event\_loop()****

```
<?php
$temp_filename = "eio-temp-file.tmp";
touch($temp_filename);

/* Função chamada quando eio_chmod() terminar */
function my_chmod_callback($data, $result) {
    global $temp_filename;

    if ($result == 0 && !is_readable($temp_filename) && is_writable($temp_filename)) {
        echo "eio_chmod_ok";
    }

    @unlink($temp_filename);
}

eio_chmod($temp_filename, 0200, EIO_PRI_DEFAULT, "my_chmod_callback");
eio_event_loop();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
eio_chmod_ok
```

### Veja também

- [eio\_poll()](function.eio-poll.md) - Pode ser chamada sempre que houver solicitações pendentes que precisem ser finalizadas

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
