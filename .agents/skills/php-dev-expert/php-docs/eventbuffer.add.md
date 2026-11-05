# Acrescenta dados ao final de um buffer de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.add.php

---

# EventBuffer::add

(PECL event >= 1.2.6-beta)

EventBuffer::add — Acrescenta dados ao final de um buffer de eventos

### Descrição

public
function **EventBuffer::add**(
[string](language.types.string.md) `$data`
): [bool](language.types.boolean.md)

Acrescenta dados ao final de um buffer de eventos.

### Parâmetros

`data`
:   String a ser anexada ao final do buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

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
