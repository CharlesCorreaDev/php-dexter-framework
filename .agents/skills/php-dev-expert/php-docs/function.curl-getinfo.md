# Obtém informação sobre uma transferência específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-getinfo.php

---

# curl\_getinfo

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

curl\_getinfo — Obtém informação sobre uma transferência específica

### Descrição

function **curl\_getinfo**([CurlHandle](class.curlhandle.md) `$handle`, [?](language.types.null.md)[int](language.types.integer.md) `$option` = **`null`**): [mixed](language.types.mixed.md)

Obtém informação sobre a última transferência.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`option`
:   Uma das constantes **`CURLINFO_*`**.

### Valor Retornado

Se o parâmetro `option` for fornecido, retorna seu valor.
Caso contrário, retorna um array associativo com os elementos a seguir
(que correspondem a `option`), ou **`false`** em caso de falha:

- "url"
- "content\_type"
- "http\_code"
- "header\_size"
- "request\_size"
- "filetime"
- "ssl\_verify\_result"
- "redirect\_count"
- "total\_time"
- "namelookup\_time"
- "connect\_time"
- "pretransfer\_time"
- "size\_upload"
- "size\_download"
- "speed\_download"
- "speed\_upload"
- "download\_content\_length"
- "upload\_content\_length"
- "starttransfer\_time"
- "redirect\_time"
- "certinfo"
- "primary\_ip"
- "primary\_port"
- "local\_ip"
- "local\_port"
- "redirect\_url"
- "request\_header" (Este somente será definido se a opção **`CURLINFO_HEADER_OUT`**
  for configurada por uma chamada prévia a [curl\_setopt()](function.curl-setopt.md))
- "posttransfer\_time\_us" (Disponível a partir do PHP 8.4.0 e cURL 8.10.0)

Observe que dados privados não são incluídos no array associativo e devem ser obtidos individualmente com a opção **`CURLINFO_PRIVATE`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Introduzida a constante **`CURLINFO_POSTTRANSFER_TIME_T`** e a chave `posttransfer_time_us` (Curl 8.10.0 ou posterior). |
| 8.3.0 | Introduzidas as constantes **`CURLINFO_CAINFO`** e **`CURLINFO_CAPATH`**. |
| 8.2.0 | Introduzidas as constantes **`CURLINFO_PROXY_ERROR`**, **`CURLINFO_REFERER`** e **`CURLINFO_RETRY_AFTER`**. |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | `option` agora pode ser nulo; anteriormente, o padrão era `0`. |
| 7.3.0 | Introduzidas as opções **`CURLINFO_CONTENT_LENGTH_DOWNLOAD_T`**, **`CURLINFO_CONTENT_LENGTH_UPLOAD_T`**, **`CURLINFO_HTTP_VERSION`**, **`CURLINFO_PROTOCOL`**, **`CURLINFO_PROXY_SSL_VERIFYRESULT`**, **`CURLINFO_SCHEME`**, **`CURLINFO_SIZE_DOWNLOAD_T`**, **`CURLINFO_SIZE_UPLOAD_T`**, **`CURLINFO_SPEED_DOWNLOAD_T`**, **`CURLINFO_SPEED_UPLOAD_T`**, **`CURLINFO_APPCONNECT_TIME_T`**, **`CURLINFO_CONNECT_TIME_T`**, **`CURLINFO_FILETIME_T`**, **`CURLINFO_NAMELOOKUP_TIME_T`**, **`CURLINFO_PRETRANSFER_TIME_T`**, **`CURLINFO_REDIRECT_TIME_T`**, **`CURLINFO_STARTTRANSFER_TIME_T`** e **`CURLINFO_TOTAL_TIME_T`**. |

### Examples

**Exemplo #1 Exemplo de **curl\_getinfo()****

```
<?php
// Cria um manipulador cURL
$ch = curl_init('http://www.example.com/');

// Executa
curl_exec($ch);

// Verifica se algum erro ocorreu
if (!curl_errno($ch)) {
  $info = curl_getinfo($ch);
  echo 'Demorou ', $info['total_time'], ' segundos para enviar uma requisição a ', $info['url'], "\n";
}
?>
```

**Exemplo #2 Exemplo de **curl\_getinfo()** com parâmetro `option`**

```
<?php
// Cria um identificador cURL
$ch = curl_init('http://www.example.com/');

// Executa
curl_exec($ch);

// Verifica o código de estado do HTTP
if (!curl_errno($ch)) {
  switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
    case 200:  # OK
      break;
    default:
      echo 'Código HTTP inesperado: ', $http_code, "\n";
  }
}
?>
```

### Notas

> **Nota**:
>
> Informações obtidas por esta função são mantidas se o identificador for reutilizado. Isto significa
> que a menos que uma estatística seja substituída internamente por esta função, a informação anterior
> é retornada.

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
