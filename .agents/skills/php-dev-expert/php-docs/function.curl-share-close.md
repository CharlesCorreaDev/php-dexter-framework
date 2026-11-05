# Fecha um identificador de compartilhamento de cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-close.php

---

# curl\_share\_close

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_share\_close — Fecha um identificador de compartilhamento de cURL

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **curl\_share\_close**([CurlShareHandle](class.curlsharehandle.md) `$share_handle`): [void](language.types.void.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

Fecha um identificador de compartilhamento cURL e libera todos os recursos.

### Parâmetros

`share_handle`
:   Um manipulador cURL de compartilhamento retornado por
    [curl\_share\_init()](function.curl-share-init.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Esta função foi descontinuada. |
| 8.0.0 | Esta função agora é um NOP. |
| 8.0.0 | O parâmetro `share_handle` agora espera uma instância de [CurlShareHandle](class.curlsharehandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de [curl\_share\_setopt()](function.curl-share-setopt.md)**

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

// Fecha o identificador de compartilhamento de cURL
curl_share_close($sh);
?>
```

### Veja também

- [curl\_share\_init()](function.curl-share-init.md) - Inicializa um identificador de compartilhamento de cURL

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
