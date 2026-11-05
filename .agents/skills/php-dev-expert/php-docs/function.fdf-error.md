# Retorna a descrição do erro para o código de erro FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-error.php

---

# fdf\_error

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_error — Retorna a descrição do erro para o código de erro FDF

### Descrição

function **fdf\_error**([int](language.types.integer.md) `$error_code` = -1): [string](language.types.string.md)

Obtém uma descrição textual para o código de erro FDF fornecido em
`error_code`.

### Parâmetros

`error_code`
:   Um código de erro obtido com [fdf\_errno()](function.fdf-errno.md).
    Se não fornecido, esta função usa o código de erro interno definido pela
    última operação.

### Valor Retornado

Retorna a mensagem de erro como uma string, ou a string
`no error` se nada deu errado.

### Veja também

- [fdf\_errno()](function.fdf-errno.md) - Retorna o código de erro para a última operação fdf

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
