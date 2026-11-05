# Retorna o último número de erro do curl compartilhado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-errno.php

---

# curl\_share\_errno

(PHP 7 >= 7.1.0, PHP 8)

curl\_share\_errno — Retorna o último número de erro do curl compartilhado

### Descrição

function **curl\_share\_errno**([CurlShareHandle](class.curlsharehandle.md) `$share_handle`): [int](language.types.integer.md)

Retorna um número inteiro contendo o último número de erro de curl compartilhado.

### Parâmetros

`share_handle`
:   Um manipulador cURL de compartilhamento retornado por
    [curl\_share\_init()](function.curl-share-init.md).

### Valor Retornado

Retorna um inteiro contendo o último número de erro de curl compartilhado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | A função não retorna mais **`false`** em caso de falha. |
| 8.0.0 | O parâmetro `share_handle` agora espera uma instância de [CurlShareHandle](class.curlsharehandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

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
