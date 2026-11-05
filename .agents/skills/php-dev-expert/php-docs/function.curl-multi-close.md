# Remove todos os identificadores cURL de um multi-identificador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-close.php

---

# curl\_multi\_close

(PHP 5, PHP 7, PHP 8)

curl\_multi\_close — Remove todos os identificadores cURL de um multi-identificador

### Descrição

function **curl\_multi\_close**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`): [void](language.types.void.md)

Remove todos os objetos [CurlHandle](class.curlhandle.md) anexados ao [CurlMultiHandle](class.curlmultihandle.md),
como se [curl\_multi\_remove\_handle()](function.curl-multi-remove-handle.md) tivesse sido chamada para cada um deles.

Antes do PHP 8.0.0, esta função também fechava o recurso do multi-identificador cURL, tornando-o inutilizável.

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL

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
