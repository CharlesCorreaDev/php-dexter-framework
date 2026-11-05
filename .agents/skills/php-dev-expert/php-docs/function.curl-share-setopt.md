# Configura uma opção para um identificador de compartilhamento cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-setopt.php

---

# curl\_share\_setopt

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_share\_setopt — Configura uma opção para um identificador de compartilhamento cURL

### Descrição

function **curl\_share\_setopt**([CurlShareHandle](class.curlsharehandle.md) `$share_handle`, [int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Configura uma opção no identificador de compartilhamento cURL informado.

### Parâmetros

`share_handle`
:   Um manipulador cURL de compartilhamento retornado por
    [curl\_share\_init()](function.curl-share-init.md).

`option`
:   Uma das constantes **`CURLSHOPT_*`**.

`value`
:   Uma das constantes **`CURL_LOCK_DATA_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `share_handle` agora espera uma instância de [CurlShareHandle](class.curlsharehandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_share\_setopt()****

Este exemplo irá criar um identificador de compartilhamento de cURL, adicionar dois identificadores cURL nele,
e então executá-los com o compartilhamento de cookies.

```
<?php
// Cria o identificador de compartilhamento de cURL e configura-o para compartilhar os cookies
$sh = curl_share_init();
curl_share_setopt($sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_COOKIE);

// Inicializa o primeiro identificador cURL e atribui o identificador de compartilhamento à ele
$ch1 = curl_init("http://example.com/");
curl_setopt($ch1, CURLOPT_SHARE, $sh);

// Executa o primeiro identificador cURL
curl_exec($ch1);

// Inicializa o segundo identificador cURL e atribui o identificador de compartilhamento à ele
$ch2 = curl_init("http://php.net/");
curl_setopt($ch2, CURLOPT_SHARE, $sh);

// Executa o segundo identificador cURL
// Todos os cookies do identificador $ch1 são compartilhados com o identificador $ch2
curl_exec($ch2);
?>
```

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
