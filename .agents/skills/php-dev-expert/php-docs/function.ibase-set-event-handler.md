# Registra uma função de retorno a ser chamada quando eventos são postados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-set-event-handler.php

---

# ibase\_set\_event\_handler

(PHP 5, PHP 7 < 7.4.0)

ibase\_set\_event\_handler — Registra uma função de retorno a ser chamada quando eventos são postados

### Descrição

function **ibase\_set\_event\_handler**([callable](language.types.callable.md) `$event_handler`, [string](language.types.string.md) `$event_name`, [string](language.types.string.md) `...$even_names`): [resource](language.types.resource.md)

function **ibase\_set\_event\_handler**(  
    [resource](language.types.resource.md) `$connection`,  
    [callable](language.types.callable.md) `$event_handler`,  
    [string](language.types.string.md) `$event_name`,  
    [string](language.types.string.md) `...$event_names`  
): [resource](language.types.resource.md)

Esta função registra uma função de usuário PHP como manipulador de eventos para os
eventos especificados.

### Parâmetros

`event_handler`
:   A função de retorno é chamada com o nome do evento e o recurso de conexão como
    argumentos sempre que um dos eventos especificados é publicado pelo
    banco de dados.

    A função de retorno deve retornar **`false`** se o manipulador de eventos deve ser
    cancelado. Qualquer outro valor de retorno é ignorado. Esta função aceita até
    15 argumentos de eventos.

`event_name`
:   Um nome de evento.

`event_names`
:   No máximo 15 eventos permitidos.

### Valor Retornado

O valor de retorno é um recurso de evento. Este recurso pode ser usado para liberar
o manipulador de eventos usando [ibase\_free\_event\_handler()](function.ibase-free-event-handler.md).

### Examples

**Exemplo #1 Exemplo de **ibase\_set\_event\_handler()****

```
<?php

function event_handler($event_name, $link)
{
    if ($event_name == "NEW ORDER") {
        // processa novo pedido
        ibase_query($link, "UPDATE orders SET status='handled'");
    } else if ($event_name == "DB_SHUTDOWN") {
        // libera manipulador de eventos
        return false;
    }
}

ibase_set_event_handler($link, "event_handler", "NEW_ORDER", "DB_SHUTDOWN");
?>
```

### Veja também

- [ibase\_free\_event\_handler()](function.ibase-free-event-handler.md) - Cancela um manipulador de eventos registrado
- [ibase\_wait\_event()](function.ibase-wait-event.md) - Espera por um evento ser postado pelo banco de dados

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
