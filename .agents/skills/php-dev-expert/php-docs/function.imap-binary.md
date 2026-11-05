# Converte uma string de 8 bits em uma string base64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-binary.php

---

# imap\_binary

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_binary — Converte uma string de 8 bits em uma string base64

### Descrição

function **imap\_binary**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converta uma string de 8 bits em uma string base64 de acordo com [» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045), Seção 6.8.

### Parâmetros

`string`
:   A string de 8 bits

### Valor Retornado

Retorna uma string codificada em base64, ou **`false`** em caso de falha.

### Veja também

- [imap\_base64()](function.imap-base64.md) - Decodifica texto codificado em BASE64

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
