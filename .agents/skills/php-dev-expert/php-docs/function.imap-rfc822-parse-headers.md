# Analisa cabeçalhos de e-mail de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-rfc822-parse-headers.php

---

# imap\_rfc822\_parse\_headers

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_rfc822\_parse\_headers — Analisa cabeçalhos de e-mail de uma string

### Descrição

function **imap\_rfc822\_parse\_headers**([string](language.types.string.md) `$headers`, [string](language.types.string.md) `$default_hostname` = "UNKNOWN"): [stdClass](class.stdclass.md)

Obtém um objeto de vários elementos de cabeçalho, semelhante a
[imap\_header()](function.imap-header.md).

### Parâmetros

`headers`
:   Os dados dos cabeçalhos analisados

`default_hostname`
:   O nome do host padrão

### Valor Retornado

Retorna um objeto semelhante ao retornado por
[imap\_header()](function.imap-header.md), exceto pelos sinalizadores e outras
propriedades que vêm do servidor IMAP.

### Veja também

- [imap\_rfc822\_parse\_adrlist()](function.imap-rfc822-parse-adrlist.md) - Analisa uma string de endereços

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
