# Converte string ISO-8859-1 em texto UTF-7 modificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-utf7-encode.php

---

# imap\_utf7\_encode

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_utf7\_encode — Converte string ISO-8859-1 em texto UTF-7 modificado

### Descrição

function **imap\_utf7\_encode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Converte `string` em texto UTF-7 modificado.

Isso é necessário para codificar nomes de caixas de correio que contêm certos caracteres
que não estão no intervalo de caracteres ASCII imprimíveis.

### Parâmetros

`string`
:   Uma sequência de caracteres ISO-8859-1.

### Valor Retornado

Retorna a `string` com a codificação UTF-7
modificada conforme definido na [» RFC 2060](https://datatracker.ietf.org/doc/html/rfc2060),
seção 5.1.3.

### Veja também

- [imap\_utf7\_decode()](function.imap-utf7-decode.md) - Decodifica uma string codificada em UTF-7 modificada

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
