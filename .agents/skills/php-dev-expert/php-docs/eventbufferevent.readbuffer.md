# Drena todo o conteúdo do buffer de entrada e os coloca em um EventBuffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.readbuffer.php

---

# EventBufferEvent::readBuffer

(PECL event >= 1.2.6-beta)

EventBufferEvent::readBuffer — Drena todo o conteúdo do buffer de entrada e os coloca em um EventBuffer

### Descrição

public
function **EventBufferEvent::readBuffer**(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

Drena todo o conteúdo do buffer de entrada e os coloca em
`buf`.

### Parâmetros

`buf`
:   Buffer de destino

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBufferEvent::read()](eventbufferevent.read.md) - Lê dados do buffer

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
