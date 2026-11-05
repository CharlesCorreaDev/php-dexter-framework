# Define o tempo limite de leitura e gravação para um evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.settimeouts.php

---

# EventBufferEvent::setTimeouts

(PECL event >= 1.2.6-beta)

EventBufferEvent::setTimeouts — Define o tempo limite de leitura e gravação para um evento de buffer

### Descrição

public
function **EventBufferEvent::setTimeouts**(
[float](language.types.float.md) `$timeout_read`
, 
[float](language.types.float.md) `$timeout_write`
): [bool](language.types.boolean.md)

Define o tempo limite de leitura e gravação para um evento de buffer.

### Parâmetros

`timeout_read`
:   Tempo limite de leitura

`timeout_write`
:   Tempo limite de escrita

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
