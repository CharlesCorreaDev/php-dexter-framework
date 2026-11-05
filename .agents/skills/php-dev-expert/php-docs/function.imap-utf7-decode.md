# Decodifica uma string codificada em UTF-7 modificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-utf7-decode.php

---

# imap\_utf7\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_utf7\_decode — Decodifica uma string codificada em UTF-7 modificada

### Descrição

function **imap\_utf7\_decode**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica `string` UTF-7 modificada em string ISO-8859-1.

Esta função é necessária para decodificar nomes de caixas de correio que contêm certos
caracteres que não estão no intervalo de caracteres ASCII imprimíveis.

### Parâmetros

`string`
:   Uma string em codificação UTF-7 modificada, conforme definido na [» RFC 2060](https://datatracker.ietf.org/doc/html/rfc2060), seção 5.1.3.

### Valor Retornado

Retorna uma string que é codificada em ISO-8859-1 e consiste na mesma
sequência de caracteres do parâmetro `string`, ou **`false`**
se o parâmetro `string` contiver sequência UTF-7 modificada inválida
ou se o parâmetro `string` contiver um caractere que não faz parte do
conjunto de caracteres ISO-8859-1.

### Veja também

- [imap\_utf7\_encode()](function.imap-utf7-encode.md) - Converte string ISO-8859-1 em texto UTF-7 modificado

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
