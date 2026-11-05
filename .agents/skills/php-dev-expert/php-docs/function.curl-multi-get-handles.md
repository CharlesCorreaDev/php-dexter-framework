# Return an array of CurlHandle objects currently attached to a CurlMultiHandle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-get-handles.php

---

# curl\_multi\_get\_handles

(No version information available, might only be in Git)

curl\_multi\_get\_handles — Return an array of CurlHandle objects currently attached to a CurlMultiHandle

### Descrição

function **curl\_multi\_get\_handles**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`): [array](language.types.array.md)

Returns all [CurlHandle](class.curlhandle.md) objects currently attached to the given
[CurlMultiHandle](class.curlmultihandle.md). This includes handles added using
[curl\_multi\_add\_handle()](function.curl-multi-add-handle.md) and handles accepted by a
**`CURLMOPT_PUSHFUNCTION`** callback.

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

### Valor Retornado

Returns an array of [CurlHandle](class.curlhandle.md) objects.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | The function was added. |

### Veja também

- [curl\_multi\_add\_handle()](function.curl-multi-add-handle.md) - Adiciona um identificador cURL comum a um multi-identificador cURL
- [curl\_multi\_remove\_handle()](function.curl-multi-remove-handle.md) - Remove um identificador de um conjunto de identificadores cURL

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
