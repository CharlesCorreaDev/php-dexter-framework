# Codifica uma string UTF-8 para UTF-7 modificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-utf8-to-mutf7.php

---

# imap\_utf8\_to\_mutf7

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

imap\_utf8\_to\_mutf7 — Codifica uma string UTF-8 para UTF-7 modificado

### Descrição

function **imap\_utf8\_to\_mutf7**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Codifica uma string UTF-8 para UTF-7 modificado (conforme especificado na RFC 2060, seção 5.1.3).

> **Nota**:
>
> Esta função só estará disponível se libcclient exportar utf8\_to\_mutf7().

### Parâmetros

`string`
:   Uma sequência de caracteres codificada em UTF-8.

### Valor Retornado

Retorna a `string` convertida para UTF-7 modificado,
ou **`false`** em caso de falha.

### Veja também

- [imap\_mutf7\_to\_utf8()](function.imap-mutf7-to-utf8.md) - Decodifica uma string UTF-7 modificada para UTF-8

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
