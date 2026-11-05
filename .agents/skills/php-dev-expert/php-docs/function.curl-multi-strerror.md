# Retorna uma string que descreve o código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-strerror.php

---

# curl\_multi\_strerror

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_multi\_strerror — Retorna uma string que descreve o código de erro

### Descrição

function **curl\_multi\_strerror**([int](language.types.integer.md) `$error_code`): [?](language.types.null.md)[string](language.types.string.md)

Retorna um texto descrevendo o código de erro
**`CURLM_*`** informado.

### Parâmetros

`error_code`
:   Uma das constantes **`CURLM_*`**.

### Valor Retornado

Retorna a descrição do erro para um código de erro válido, caso contrário **`null`**.

### Veja também

- [curl\_strerror()](function.curl-strerror.md) - Retorna uma string que descreve o código de erro informado
- [» Códigos de erros do cURL](https://curl.haxx.se/libcurl/c/libcurl-errors.html)

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
