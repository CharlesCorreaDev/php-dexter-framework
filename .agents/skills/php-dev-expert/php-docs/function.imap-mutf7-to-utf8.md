# Decodifica uma string UTF-7 modificada para UTF-8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mutf7-to-utf8.php

---

# imap\_mutf7\_to\_utf8

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

imap\_mutf7\_to\_utf8 — Decodifica uma string UTF-7 modificada para UTF-8

### Descrição

function **imap\_mutf7\_to\_utf8**([string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica uma string UTF-7 modificada (conforme especificado no RFC 2060, seção 5.1.3) para UTF-8.

> **Nota**:
>
> Esta função só estará disponível se libcclient exportar utf8\_to\_mutf7().

### Parâmetros

`string`
:   Uma string codificada em UTF-7 modificado.

### Valor Retornado

Retorna `string` convertida para UTF-8,
ou **`false`** em caso de falha.

### Veja também

- [imap\_utf8\_to\_mutf7()](function.imap-utf8-to-mutf7.md) - Codifica uma string UTF-8 para UTF-7 modificado

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
