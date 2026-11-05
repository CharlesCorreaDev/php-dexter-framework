# Retorna uma string descrevendo o código de erro fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-strerror.php

---

# curl\_share\_strerror

(PHP 7 >= 7.1.0, PHP 8)

curl\_share\_strerror — Retorna uma string descrevendo o código de erro fornecido

### Descrição

function **curl\_share\_strerror**([int](language.types.integer.md) `$error_code`): [?](language.types.null.md)[string](language.types.string.md)

Retorna uma mensagem de erro de texto descrevendo o código de erro fornecido.

### Parâmetros

`error_code`
:   Uma das constantes dos [» códigos de erro cURL](https://curl.haxx.se/libcurl/c/libcurl-errors.html).

### Valor Retornado

Retorna a descrição do erro ou **`null`** para código de erro inválido.

### Veja também

- [curl\_share\_errno()](function.curl-share-errno.md) - Retorna o último número de erro do curl compartilhado
- [curl\_strerror()](function.curl-strerror.md) - Retorna uma string que descreve o código de erro informado

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
