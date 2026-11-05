# Obtém fluxo representando uma variável usada em comunicações internas com libeio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-get-event-stream.php

---

# eio\_get\_event\_stream

(PECL eio >= 0.3.1b)

eio\_get\_event\_stream — Obtém fluxo representando uma variável usada em comunicações internas com libeio

### Descrição

function **eio\_get\_event\_stream**(): [mixed](language.types.mixed.md)

**eio\_get\_event\_stream()** adquire um fluxo representando uma
variável utilizada nas comunicações internas com o libeio. Pode ser usado para vincular-se
a algum loop de eventos fornecido por outra extensão PECL, por exemplo,
libevent.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_get\_event\_stream()** retorna um fluxo em caso de sucesso;
caso contrário, **`null`**

### Examples

**Exemplo #1 Usando eio com libevent**

```
<?php
function my_eio_poll($fd, $events, $arg) {
    /* Algum regulamento do libevent pode vir aqui .. */
    if (eio_nreqs()) {
        eio_poll();
    }
    /* .. e aqui */
}

function my_res_cb($d, $r) {
    var_dump($r); var_dump($d);
}

$base = event_base_new();
$event = event_new();

$fd = eio_get_event_stream();
var_dump($fd);

eio_nop(EIO_PRI_DEFAULT, "my_res_cb", "nop data");
eio_mkdir("/tmp/abc-eio-temp", 0750, EIO_PRI_DEFAULT, "my_res_cb", "mkdir data");
/* algumas outras chamadas eio_* aqui ... */

// define opções de evento
event_set($event, $fd, EV_READ /*| EV_PERSIST*/, "my_eio_poll", array($event, $base));

// define base de evento
event_base_set($event, $base);

// habilita o evento
event_add($event);

// inicia loop de evento
event_base_loop($base);

/* O mesmo estará disponível através da interface libevent em buffer */
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
int(0)
string(8) "nop data"
int(0)
string(10) "mkdir data"
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
