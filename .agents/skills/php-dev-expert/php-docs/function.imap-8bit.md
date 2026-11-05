# Converte uma string de 8 bits em uma string imprimível escapada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-8bit.php

---

# imap\_8bit

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_8bit — Converte uma string de 8 bits em uma string imprimível escapada

### Descrição

function **imap\_8bit**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converta uma string de 8 bits em uma string imprimível escapada (de acordo com
[» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045), seção 6.7).

### Parâmetros

`string`
:   A string de 8 bits a ser convertida

### Valor Retornado

Retorna uma string imprimível escapada, ou **`false`** em caso de falha.

### Veja também

- [imap\_qprint()](function.imap-qprint.md) - Converte uma string imprimível escapada em uma string de 8 bits

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
