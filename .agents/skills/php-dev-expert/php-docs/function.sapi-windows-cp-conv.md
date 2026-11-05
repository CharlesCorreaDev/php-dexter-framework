# Converte string de um código de página para outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-cp-conv.php

---

# sapi\_windows\_cp\_conv

(PHP 7 >= 7.1.0, PHP 8)

sapi\_windows\_cp\_conv — Converte string de um código de página para outro

### Descrição

function **sapi\_windows\_cp\_conv**([int](language.types.integer.md)|[string](language.types.string.md) `$in_codepage`, [int](language.types.integer.md)|[string](language.types.string.md) `$out_codepage`, [string](language.types.string.md) `$subject`): [?](language.types.null.md)[string](language.types.string.md)

Converte string de um código de página para outro.

### Parâmetros

`in_codepage`
:   O código de página da string definida pelo parâmetro `subject`.
    Pode ser um nome ou um identificador de código de página.

`out_codepage`
:   O código de página para o qual a string definida por `subject` será convertida.
    Pode ser um nome ou um identificador de código de página.

`subject`
:   A string a ser convertida.

### Valor Retornado

A string em `subject` convertida para
`out_codepage`, ou **`null`** em caso de falha.

### Erros/Exceções

Esta função emite erros de nível E\_WARNING, se códigos de página inválidos forem informados,
ou se a string não for válida para o código de página informado em `in_codepage`.

### Veja também

- [sapi\_windows\_cp\_get()](function.sapi-windows-cp-get.md) - Obtém o código de página atual
- [iconv()](function.iconv.md) - Converte uma string de uma codificação de caracteres para outra

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
