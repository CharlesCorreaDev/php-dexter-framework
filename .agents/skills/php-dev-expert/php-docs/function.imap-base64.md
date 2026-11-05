# Decodifica texto codificado em BASE64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-base64.php

---

# imap\_base64

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_base64 — Decodifica texto codificado em BASE64

### Descrição

function **imap\_base64**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica a `string` codificada em BASE-64 fornecida.

### Parâmetros

`string`
:   O texto codificado

### Valor Retornado

Retorna a mensagem decodificada como uma string, ou **`false`** em caso de falha.

### Veja também

- [imap\_binary()](function.imap-binary.md) - Converte uma string de 8 bits em uma string base64
- [base64\_encode()](function.base64-encode.md) - Codifica dados com MIME base64
- [base64\_decode()](function.base64-decode.md) - Decodifica dados no formato MIME base64
- [» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045), Section 6.8

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
