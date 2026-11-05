# Define uma opção para uma transferência cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-setopt.php

---

# curl\_setopt

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

curl\_setopt — Define uma opção para uma transferência cURL

### Descrição

function **curl\_setopt**([CurlHandle](class.curlhandle.md) `$handle`, [int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Define uma opção no identificador de sessão cURL fornecido.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`option`
:   A opção **`CURLOPT_*`** a ser definida.

`value`
:   O valor a ser definido em `option`.
    Consulte a descrição das constantes
    **`CURLOPT_*`**
    para detalhes sobre o tipo de valor que cada constante espera.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **`CURLOPT_DNS_USE_GLOBAL_CACHE`** não tem mais qualquer efeito, e habilitála em compilações PHP seguras para threads não dispara mais um alerta. |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.3.15, 7.4.3 | Introduzido **`CURLOPT_HTTP09_ALLOWED`**. |
| 7.3.0 | Introduzido **`CURLOPT_ABSTRACT_UNIX_SOCKET`**, **`CURLOPT_KEEP_SENDING_ON_ERROR`**, **`CURLOPT_PRE_PROXY`**, **`CURLOPT_PROXY_CAINFO`**, **`CURLOPT_PROXY_CAPATH`**, **`CURLOPT_PROXY_CRLFILE`**, **`CURLOPT_PROXY_KEYPASSWD`**, **`CURLOPT_PROXY_PINNEDPUBLICKEY`**, **`CURLOPT_PROXY_SSLCERT`**, **`CURLOPT_PROXY_SSLCERTTYPE`**, **`CURLOPT_PROXY_SSL_CIPHER_LIST`**, **`CURLOPT_PROXY_SSLKEY`**, **`CURLOPT_PROXY_SSLKEYTYPE`**, **`CURLOPT_PROXY_SSL_OPTIONS`**, **`CURLOPT_PROXY_SSL_VERIFYHOST`**, **`CURLOPT_PROXY_SSL_VERIFYPEER`**, **`CURLOPT_PROXY_SSLVERSION`**, **`CURLOPT_PROXY_TLSAUTH_PASSWORD`**, **`CURLOPT_PROXY_TLSAUTH_TYPE`**, **`CURLOPT_PROXY_TLSAUTH_USERNAME`**, **`CURLOPT_SOCKS5_AUTH`**, **`CURLOPT_SUPPRESS_CONNECT_HEADERS`**, **`CURLOPT_DISALLOW_USERNAME_IN_URL`**, **`CURLOPT_DNS_SHUFFLE_ADDRESSES`**, **`CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS`**, **`CURLOPT_HAPROXYPROTOCOL`**, **`CURLOPT_PROXY_TLS13_CIPHERS`**, **`CURLOPT_SSH_COMPRESSION`**, **`CURLOPT_TIMEVALUE_LARGE`** e **`CURLOPT_TLS13_CIPHERS`**. |
| 7.0.7 | Introduzido **`CURL_HTTP_VERSION_2`**, **`CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE`**, **`CURL_HTTP_VERSION_2TLS`**, **`CURL_REDIR_POST_301`**, **`CURL_REDIR_POST_302`**, **`CURL_REDIR_POST_303`**, **`CURL_REDIR_POST_ALL`**, **`CURL_VERSION_KERBEROS5`**, **`CURL_VERSION_PSL`**, **`CURL_VERSION_UNIX_SOCKETS`**, **`CURLAUTH_NEGOTIATE`**, **`CURLAUTH_NTLM_WB`**, **`CURLFTP_CREATE_DIR`**, **`CURLFTP_CREATE_DIR_NONE`**, **`CURLFTP_CREATE_DIR_RETRY`**, **`CURLHEADER_SEPARATE`**, **`CURLHEADER_UNIFIED`**, **`CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE`**, **`CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE`**, **`CURLMOPT_MAX_HOST_CONNECTIONS`**, **`CURLMOPT_MAX_PIPELINE_LENGTH`**, **`CURLMOPT_MAX_TOTAL_CONNECTIONS`**, **`CURLOPT_CONNECT_TO`**, **`CURLOPT_DEFAULT_PROTOCOL`**, **`CURLOPT_DNS_INTERFACE`**, **`CURLOPT_DNS_LOCAL_IP4`**, **`CURLOPT_DNS_LOCAL_IP6`**, **`CURLOPT_EXPECT_100_TIMEOUT_MS`**, **`CURLOPT_HEADEROPT`**, **`CURLOPT_LOGIN_OPTIONS`**, **`CURLOPT_PATH_AS_IS`**, **`CURLOPT_PINNEDPUBLICKEY`**, **`CURLOPT_PIPEWAIT`**, **`CURLOPT_PROXY_SERVICE_NAME`**, **`CURLOPT_PROXYHEADER`**, **`CURLOPT_SASL_IR`**, **`CURLOPT_SERVICE_NAME`**, **`CURLOPT_SSL_ENABLE_ALPN`**, **`CURLOPT_SSL_ENABLE_NPN`**, **`CURLOPT_SSL_FALSESTART`**, **`CURLOPT_SSL_VERIFYSTATUS`**, **`CURLOPT_STREAM_WEIGHT`**, **`CURLOPT_TCP_FASTOPEN`**, **`CURLOPT_TFTP_NO_OPTIONS`**, **`CURLOPT_UNIX_SOCKET_PATH`**, **`CURLOPT_XOAUTH2_BEARER`**, **`CURLPROTO_SMB`**, **`CURLPROTO_SMBS`**, **`CURLPROXY_HTTP_1_0`**, **`CURLSSH_AUTH_AGENT`** e **`CURLSSLOPT_NO_REVOKE`**. |

### Examples

**Exemplo #1 Inicializando uma nova sessão cURL e buscando uma página da web**

```
<?php
// cria um novo identificador cURL
$ch = curl_init();

// define URL e outras opções apropriadas
curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, false);

// pega URL e passá-lo para o navegador
curl_exec($ch);
?>
```

### Notas

> **Nota**:
>
> Passar um array para **`CURLOPT_POSTFIELDS`**
> codificará os dados como *multipart/form-data*,
> enquanto passar uma string codificada em URL codificará os dados como
> *application/x-www-form-urlencoded*.

### Veja também

- [curl\_setopt\_array()](function.curl-setopt-array.md) - Define múltiplas opções para uma transferência cURL
- [CURLFile](class.curlfile.md)
- [CURLStringFile](class.curlstringfile.md)

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
