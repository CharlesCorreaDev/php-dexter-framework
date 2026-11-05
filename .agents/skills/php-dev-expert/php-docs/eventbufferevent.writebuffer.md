# Adiciona o conteúdo de todo o buffer à saída de um evento de buffer
   buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.writebuffer.php

---

# EventBufferEvent::writeBuffer

(PECL event >= 1.2.6-beta)

EventBufferEvent::writeBuffer — Adiciona o conteúdo de todo o buffer à saída de um evento de buffer
buffer

### Descrição

public
function **EventBufferEvent::writeBuffer**(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

Adiciona o conteúdo de todo o buffer ao buffer de saída de um evento de buffer.

### Parâmetros

`buf`
:   Objeto
    [EventBuffer](class.eventbuffer.md)
    de origem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBufferEvent::write()](eventbufferevent.write.md) - Adiciona dados ao buffer de saída de um evento de buffer

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
