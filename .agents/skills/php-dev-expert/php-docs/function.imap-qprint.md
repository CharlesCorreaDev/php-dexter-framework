# Converte uma string imprimível escapada em uma string de 8 bits

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-qprint.php

---

# imap\_qprint

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_qprint — Converte uma string imprimível escapada em uma string de 8 bits

### Descrição

function **imap\_qprint**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converta uma string imprimível escapada em uma string de 8 bits de acordo com a [» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045), seção 6.7.

### Parâmetros

`string`
:   Uma string imprimível escapada

### Valor Retornado

Retorna uma string de 8 bits, ou **`false`** em caso de falha.

### Veja também

- [imap\_8bit()](function.imap-8bit.md) - Converte uma string de 8 bits em uma string imprimível escapada

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
