# Adiciona um identificador cURL comum a um multi-identificador cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-add-handle.php

---

# curl\_multi\_add\_handle

(PHP 5, PHP 7, PHP 8)

curl\_multi\_add\_handle — Adiciona um identificador cURL comum a um multi-identificador cURL

### Descrição

function **curl\_multi\_add\_handle**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`, [CurlHandle](class.curlhandle.md) `$handle`): [int](language.types.integer.md)

Adiciona o identificador `handle` ao multi-identificador
`multi_handle`

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Retorna 0 em caso de sucesso, ou um dos códigos de erro
**`CURLM_*`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_multi\_remove\_handle()](function.curl-multi-remove-handle.md) - Remove um identificador de um conjunto de identificadores cURL
- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL
- [curl\_init()](function.curl-init.md) - Inicializa uma sessão cURL

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
