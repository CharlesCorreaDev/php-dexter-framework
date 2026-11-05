# Adiciona dados ao buffer de saída de um evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.write.php

---

# EventBufferEvent::write

(PECL event >= 1.2.6-beta)

EventBufferEvent::write — Adiciona dados ao buffer de saída de um evento de buffer

### Descrição

public
function **EventBufferEvent::write**(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

Adiciona o conteúdo do parâmetro
`data`
ao buffer de saída de um evento de buffer.

### Parâmetros

`data`
:   Dados a serem adicionados ao buffer subjacente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBufferEvent::writeBuffer()](eventbufferevent.writebuffer.md) - Adiciona o conteúdo de todo o buffer à saída de um evento de buffer
  buffer

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
