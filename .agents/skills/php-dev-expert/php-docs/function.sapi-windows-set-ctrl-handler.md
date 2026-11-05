# Define ou remove um manipulador de evento CTRL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-set-ctrl-handler.php

---

# sapi\_windows\_set\_ctrl\_handler

(PHP 7 >= 7.4.0, PHP 8)

sapi\_windows\_set\_ctrl\_handler — Define ou remove um manipulador de evento CTRL

### Descrição

function **sapi\_windows\_set\_ctrl\_handler**([?](language.types.null.md)[callable](language.types.callable.md) `$handler`, [bool](language.types.boolean.md) `$add` = **`true`**): [bool](language.types.boolean.md)

Define ou remove um manipulador de evento `CTRL`, que permite que os processos
CLI do Windows interceptem ou ignorem eventos `CTRL+C` e
`CTRL+BREAK`. Observe que em ambientes multi-thread,
isto só é possível quando a função é chamada da thread principal.

### Parâmetros

`handler`
:   Uma função de chamada de retorno a ser definida ou removida. Se definida, esta função será chamada
    sempre que um evento
    `CTRL
    +C`
    ou
    `CTRL
    +BREAK`
    ocorrer.
    A função deve ter a seguinte assinatura:

    function **handler**([int](language.types.integer.md) `$event`): [void](language.types.void.md)

    `event`
    :   O evento `CTRL` que foi recebido;
        pode ser **`PHP_WINDOWS_EVENT_CTRL_C`**
        ou **`PHP_WINDOWS_EVENT_CTRL_BREAK`**.

    Definir um `handler` como **`null`** faz com que o processo ignore eventos
    `CTRL
    +C`,
    mas não os eventos
    `CTRL
    +BREAK`
    .

`add`
:   Se for igual a **`true`**, o manipulador é definido. Se for **`false`**, o manipulador é removido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso Básico de **sapi\_windows\_set\_ctrl\_handler()****

Este exemplo mostra como interceptar eventos `CTRL`.

```
<?php
function ctrl_handler(int $event)
{
    switch ($event) {
        case PHP_WINDOWS_EVENT_CTRL_C:
            echo "CTRL+C foi pressionado\n";
            break;
        case PHP_WINDOWS_EVENT_CTRL_BREAK:
            echo "CTRL+BREAK foi pressionado\n";
            break;
    }
}

sapi_windows_set_ctrl_handler('ctrl_handler');
while (true); // repetição infinita, para que o manipulador seja disparado
?>
```

### Veja também

- [sapi\_windows\_generate\_ctrl\_event()](function.sapi-windows-generate-ctrl-event.md) - Envia um evento CTRL a outro processo

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
