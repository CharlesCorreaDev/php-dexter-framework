# Define múltiplas opções para cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-setopt.php

---

# curl\_multi\_setopt

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_multi\_setopt — Define múltiplas opções para cURL

### Descrição

function **curl\_multi\_setopt**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`, [int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Define uma opção no multi-identificador cURL informado.

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

`option`
:   Uma das constantes **`CURLMOPT_*`**.

`value`
:   O valor a ser configurado em `option`.
    Consulte a descrição das constantes
    **`CURLMOPT_*`**
    para detalhes sobre o tipo de valor que cada constante espera.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Introduzida a constante **`CURLMOPT_MAX_CONCURRENT_STREAMS`**. |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.1.0 | Introduzida a constante **`CURLMOPT_PUSHFUNCTION`**. |
| 7.0.7 | Introduzidas as constantes **`CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE`**, **`CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE`**, **`CURLMOPT_MAX_HOST_CONNECTIONS`**, **`CURLMOPT_MAX_PIPELINE_LENGTH`** e **`CURLMOPT_MAX_TOTAL_CONNECTIONS`**. |

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
