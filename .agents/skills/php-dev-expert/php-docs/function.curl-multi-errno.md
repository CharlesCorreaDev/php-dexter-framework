# Retorna o último número de erro de curl_multi

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-errno.php

---

# curl\_multi\_errno

(PHP 7 >= 7.1.0, PHP 8)

curl\_multi\_errno — Retorna o último número de erro de curl\_multi

### Descrição

function **curl\_multi\_errno**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`): [int](language.types.integer.md)

Retorna um número inteiro contendo o último número de erro de multi curl.

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

### Valor Retornado

Retorna um número inteiro contendo o último número de erro de multi curl.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A função não retorna mais **`false`** em caso de falha. |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_errno()](function.curl-errno.md) - Retorna o número do último erro

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
