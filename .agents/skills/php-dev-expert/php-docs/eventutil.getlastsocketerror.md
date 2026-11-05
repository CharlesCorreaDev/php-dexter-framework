# Retorna o erro de soquete mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.getlastsocketerror.php

---

# EventUtil::getLastSocketError

(PECL event >= 1.2.6-beta)

EventUtil::getLastSocketError — Retorna o erro de soquete mais recente

### Descrição

public
static
function **EventUtil::getLastSocketError**(
[mixed](language.types.mixed.md) `$socket`
 = ?): [string](language.types.string.md)

Retorna o erro de soquete mais recente.

### Parâmetros

`socket`
:   Recurso de soquete, fluxo ou um descritor de arquivo de um soquete.

### Valor Retornado

Retorna o erro de soquete mais recente.

### Veja também

- [EventUtil::getLastSocketErrno()](eventutil.getlastsocketerrno.md) - Retorna o número de erro de soquete mais recente

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
