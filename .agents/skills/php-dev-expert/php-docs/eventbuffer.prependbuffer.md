# Move todos os dados do buffer de origem para a frente do buffer atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.prependbuffer.php

---

# EventBuffer::prependBuffer

(PECL event >= 1.2.6-beta)

EventBuffer::prependBuffer — Move todos os dados do buffer de origem para a frente do buffer atual

### Descrição

public
function **EventBuffer::prependBuffer**(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

Comporta-se como
[EventBuffer::addBuffer()](eventbuffer.addbuffer.md)
, exceto que move os dados para a frente do buffer.

### Parâmetros

`buf`
:   Buffer de origem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::add()](eventbuffer.add.md) - Acrescenta dados ao final de um buffer de eventos
- [EventBuffer::addBuffer()](eventbuffer.addbuffer.md) - Move todos os dados de um buffer fornecido para a instância atual do EventBuffer
- [EventBuffer::prepend()](eventbuffer.prepend.md) - Adiciona dados à frente do buffer

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
