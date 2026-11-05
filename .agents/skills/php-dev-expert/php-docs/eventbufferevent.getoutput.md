# Retorna o buffer de saída subjacente associado ao evento de buffer
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.getoutput.php

---

# EventBufferEvent::getOutput

(PECL event >= 1.2.6-beta)

EventBufferEvent::getOutput — Retorna o buffer de saída subjacente associado ao evento de buffer
atual

### Descrição

public
function **EventBufferEvent::getOutput**(): [EventBuffer](class.eventbuffer.md)

Retorna o buffer de saída subjacente associado ao evento de buffer atual. Um
buffer de saída é um armazenamento para dados a serem gravados.

Observe que também existe
a propriedade
`output`
da classe
[EventBufferEvent](class.eventbufferevent.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma instância do buffer de saída
[EventBuffer](class.eventbuffer.md)
associado ao evento de buffer atual.

### Examples

**Exemplo #1
Exemplo de **EventBufferEvent::getOutput()****

```
<?php
$base = new EventBase();

$dns_base = new EventDnsBase($base, TRUE); // Usa resolução DNS assíncrona
if (!$dns_base) {
    exit("Falha ao iniciar a base DNS\n");
}

$bev = new EventBufferEvent($base, /* usa soquete interno */ NULL,
    EventBufferEvent::OPT_CLOSE_ON_FREE | EventBufferEvent::OPT_DEFER_CALLBACKS,
    "readcb", /* writecb */ NULL, "eventcb", $base
);
if (!$bev) {
    exit("Falha ao criar soquete bufferevent\n");
}

$bev->enable(Event::READ | Event::WRITE);

$output = $bev->getOutput();
if (!$output->add(
    "GET {$argv[2]} HTTP/1.0\r\n".
    "Host: {$argv[1]}\r\n".
    "Connection: Close\r\n\r\n"
)) {
    exit("Falha ao adicionar requisição ao buffer de saída\n");
}

/* ... */
?>
```

### Veja também

- [EventBufferEvent::getInput()](eventbufferevent.getinput.md) - Retorna o buffer de entrada subjacente associado ao evento de buffer
  atual

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
