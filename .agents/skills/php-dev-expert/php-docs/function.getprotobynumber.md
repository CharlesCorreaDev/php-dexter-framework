# Obtém o nome do protocolo associado ao número do protocolo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getprotobynumber.php

---

# getprotobynumber

(PHP 4, PHP 5, PHP 7, PHP 8)

getprotobynumber — Obtém o nome do protocolo associado ao número do protocolo

### Descrição

function **getprotobynumber**([int](language.types.integer.md) `$protocol`): [string](language.types.string.md)|[false](language.types.singleton.md)

**getprotobynumber()** retorna o nome do protocolo
associado ao protocolo `protocol`
conforme /etc/protocols.

### Parâmetros

`protocol`
:   O número do protocolo.

### Valor Retornado

Retorna o nome do protocolo como uma string, ou **`false`** em caso de falha.

### Veja também

- [getprotobyname()](function.getprotobyname.md) - Obtém o número do protocolo associado ao nome do protocolo

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
