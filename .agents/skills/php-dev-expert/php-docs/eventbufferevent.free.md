# Libera um evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.free.php

---

# EventBufferEvent::free

(PECL event >= 1.2.6-beta)

EventBufferEvent::free — Libera um evento de buffer

### Descrição

public
function **EventBufferEvent::free**(): [void](language.types.void.md)

Libera recursos alocados pelo evento de buffer.

Geralmente não há necessidade de chamar esse método, já que normalmente ele é chamado
dentro de destruidores de objetos internos. No entanto, às vezes existe um script
de longa duração alocando muitas instâncias, ou um script com uso pesado de memória,
onde é necessário liberar recursos o mais rápido possível. Nesses casos,
**EventBufferEvent::free()**
pode ser usado para proteger o script contra execução até o
`memory_limit`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
