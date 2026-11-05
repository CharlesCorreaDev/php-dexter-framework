# Retorna o número de erro de soquete mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.getlastsocketerrno.php

---

# EventUtil::getLastSocketErrno

(PECL event >= 1.2.6-beta)

EventUtil::getLastSocketErrno — Retorna o número de erro de soquete mais recente

### Descrição

public
static
function **EventUtil::getLastSocketErrno**(
[mixed](language.types.mixed.md) `$socket`
 = **`null`**
): [int](language.types.integer.md)

Retorna o número de erro de soquete mais recente(
`errno`
).

### Parâmetros

`socket`
:   Recurso de soquete, fluxo ou um descritor de arquivo de um soquete.

### Valor Retornado

Retorna o número de erro de soquete mais recente(
`errno`
).

### Veja também

- [EventUtil::getLastSocketError()](eventutil.getlastsocketerror.md) - Retorna o erro de soquete mais recente

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
