# Inicializa um identificador de compartilhamento de cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-init.php

---

# curl\_share\_init

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_share\_init — Inicializa um identificador de compartilhamento de cURL

### Descrição

function **curl\_share\_init**(): [CurlShareHandle](class.curlsharehandle.md)

Permite compartilhar dados entre identificadores cURL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um identificador de compartilhamento cURL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Este função agora retorna uma instância de [CurlShareHandle](class.curlsharehandle.md); anteriormente, um recurso do tipo [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **curl\_share\_init()****

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

### Veja também

- [curl\_share\_setopt()](function.curl-share-setopt.md) - Configura uma opção para um identificador de compartilhamento cURL
- [curl\_share\_init\_persistent()](function.curl-share-init-persistent.md) - Inicializa um identificador compartilhado cURL persistente

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
