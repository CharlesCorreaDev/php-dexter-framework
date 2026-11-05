# Lê dados do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.read.php

---

# EventBufferEvent::read

(PECL event >= 1.2.6-beta)

EventBufferEvent::read — Lê dados do buffer

### Descrição

public
function **EventBufferEvent::read**(
[int](language.types.integer.md) `$size`
): [string](language.types.string.md)

Remove até
`size`
bytes do buffer de entrada. Retorna uma string de dados lidos do buffer
de entrada.

### Parâmetros

`size`
:   Número máximo de bytes para ler

### Valor Retornado

Retorna uma sequência de dados lidos do buffer de entrada.

### Veja também

- [EventBufferEvent::readBuffer()](eventbufferevent.readbuffer.md) - Drena todo o conteúdo do buffer de entrada e os coloca em um EventBuffer

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
