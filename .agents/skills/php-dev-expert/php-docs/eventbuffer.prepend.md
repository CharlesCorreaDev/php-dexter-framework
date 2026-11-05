# Adiciona dados à frente do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.prepend.php

---

# EventBuffer::prepend

(PECL event >= 1.2.6-beta)

EventBuffer::prepend — Adiciona dados à frente do buffer

### Descrição

public
function **EventBuffer::prepend**(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

Adiciona dados à frente do buffer.

### Parâmetros

`data`
:   String a ser adicionada antes do buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::prependBuffer()](eventbuffer.prependbuffer.md) - Move todos os dados do buffer de origem para a frente do buffer atual
- [EventBuffer::add()](eventbuffer.add.md) - Acrescenta dados ao final de um buffer de eventos
- [EventBuffer::addBuffer()](eventbuffer.addbuffer.md) - Move todos os dados de um buffer fornecido para a instância atual do EventBuffer

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
