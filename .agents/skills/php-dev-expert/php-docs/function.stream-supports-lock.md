# Informa se o fluxo suporta travamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-supports-lock.php

---

# stream\_supports\_lock

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

stream\_supports\_lock — Informa se o fluxo suporta travamento

### Descrição

function **stream\_supports\_lock**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Informa se o fluxo suporta travamento através da função
[flock()](function.flock.md).

### Parâmetros

`stream`
:   O fluxo a ser verificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [flock()](function.flock.md) - Travamento consultivo portável de arquivo

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
