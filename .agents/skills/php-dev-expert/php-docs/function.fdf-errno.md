# Retorna o código de erro para a última operação fdf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-errno.php

---

# fdf\_errno

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_errno — Retorna o código de erro para a última operação fdf

### Descrição

function **fdf\_errno**(): [int](language.types.integer.md)

Obtém o código de erro definido pela última chamada de função FDF.

Uma descrição textual do erro pode ser obtida usando
[fdf\_error()](function.fdf-error.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código de erro como um inteiro ou zero se não houver erros.

### Veja também

- [fdf\_error()](function.fdf-error.md) - Retorna a descrição do erro para o código de erro FDF

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
