# Move todos os dados de um buffer fornecido para a instância atual do EventBuffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.addbuffer.php

---

# EventBuffer::addBuffer

(PECL event >= 1.2.6-beta)

EventBuffer::addBuffer — Move todos os dados de um buffer fornecido para a instância atual do EventBuffer

### Descrição

public
function **EventBuffer::addBuffer**(
[EventBuffer](class.eventbuffer.md) `$buf`
): [bool](language.types.boolean.md)

Move todos os dados do buffer fornecido no
parâmetro `buf`
para o fim do
[EventBuffer](class.eventbuffer.md) atual.
Esta é uma adição destrutiva. Os dados de um buffer são movidos para o outro
buffer. No entanto, nenhuma cópia de memória desnecessária ocorre.

### Parâmetros

`buf`
:   O objeto EventBuffer de origem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::add()](eventbuffer.add.md) - Acrescenta dados ao final de um buffer de eventos

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
