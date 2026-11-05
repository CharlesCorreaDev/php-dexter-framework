# Obtém uma string de erro do analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-error-string.php

---

# xml\_error\_string

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_error\_string — Obtém uma string de erro do analisador XML

### Descrição

function **xml\_error\_string**([int](language.types.integer.md) `$error_code`): [?](language.types.null.md)[string](language.types.string.md)

Obtém a string do erro do analisador XML associada com o código de erro fornecido em
`error_code`.

### Parâmetros

`error_code`
:   Um código de erro de [xml\_get\_error\_code()](function.xml-get-error-code.md).

### Valor Retornado

Retorna uma string com uma descrição textual do código de erro
`error_code`, ou **`null`** ou `"Unknown"` se nenhuma descrição for encontrada.

### Veja também

- [xml\_get\_error\_code()](function.xml-get-error-code.md) - Obtém um código de erro do analisador XML

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
