# Retorna o buffer de entrada subjacente associado ao evento de buffer
  atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.getinput.php

---

# EventBufferEvent::getInput

(PECL event >= 1.2.6-beta)

EventBufferEvent::getInput — Retorna o buffer de entrada subjacente associado ao evento de buffer
atual

### Descrição

public
function **EventBufferEvent::getInput**(): [EventBuffer](class.eventbuffer.md)

Retorna o buffer de entrada subjacente associado ao evento de buffer atual. Um
buffer de entrada é um armazenamento para dados para leitura.

Observe que também existe
a propriedade
`input`
da classe
[EventBufferEvent](class.eventbufferevent.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma instância do
[EventBuffer](class.eventbuffer.md)
buffer de entrada associado ao evento de buffer atual.

### Examples

**Exemplo #1 Função de retorno de leitura do evento de buffer**

```
<?php
function readcb($bev, $base) {
    $input = $bev->input; // $bev->getInput();

    while (($n = $input->remove($buf, 1024)) > 0) {
        echo $buf;
    }
}
?>
```

### Veja também

- [EventBufferEvent::getOutput()](eventbufferevent.getoutput.md) - Retorna o buffer de saída subjacente associado ao evento de buffer
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
