# Retorna um multi-identificador cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-init.php

---

# curl\_multi\_init

(PHP 5, PHP 7, PHP 8)

curl\_multi\_init — Retorna um multi-identificador cURL

### Descrição

function **curl\_multi\_init**(): [CurlMultiHandle](class.curlmultihandle.md)

Permite o processamento de multi-identificadores cURL de forma assíncrona.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um multi-identificador cURL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um recurso do tipo [resource](language.types.resource.md) era retornado. |

### Veja também

- [curl\_init()](function.curl-init.md) - Inicializa uma sessão cURL
- [curl\_multi\_close()](function.curl-multi-close.md) - Remove todos os identificadores cURL de um multi-identificador

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
