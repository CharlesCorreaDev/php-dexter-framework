# Verifica a assinatura digital do certificado x509 em relação a uma chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-verify.php

---

# openssl\_x509\_verify

(PHP 7 >= 7.4.0, PHP 8)

openssl\_x509\_verify — Verifica a assinatura digital do certificado x509 em relação a uma chave pública

### Descrição

function **openssl\_x509\_verify**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`, [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`): [int](language.types.integer.md)

**openssl\_x509\_verify()** verifica se o
certificado `certificate` foi assinado pela chave
privada correspondente à chave pública `public_key`.

### Parâmetros

`certificate`
:   Consulte [Parâmetros Chave/Certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`public_key`
:   [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) - uma chave, retornada por [openssl\_get\_publickey()](function.openssl-get-publickey.md)

    [string](language.types.string.md) - uma chave no formato PEM (por exemplo, `-----BEGIN PUBLIC KEY-----
    MIIBCgK...`)

### Valor Retornado

Retorna 1 se a assinatura estiver correta, 0 se estiver incorreta e
-1 em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509` era aceito. |
| 8.0.0 | `public_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_x509\_verify()****

```
<?php
$hostname = "news.php.net";
$ssloptions = array(
    "capture_peer_cert" => true,
    "capture_peer_cert_chain" => true,
    "allow_self_signed"=> false,
    "CN_match" => $hostname,
    "verify_peer" => true,
    "SNI_enabled" => true,
    "SNI_server_name" => $hostname,
);

$ctx = stream_context_create( array("ssl" => $ssloptions) );
$result = stream_socket_client("ssl://$hostname:443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $ctx);
$cont = stream_context_get_params($result);
$x509 = $cont["options"]["ssl"]["peer_certificate"];
$certparsed = openssl_x509_parse($x509);

foreach($cont["options"]["ssl"]["peer_certificate_chain"] as $chaincert)
{
    $chainparsed = openssl_x509_parse($chaincert);
    $chain_public_key = openssl_get_publickey($chaincert);
    $r = openssl_x509_verify($x509, $chain_public_key);
    if ($r==1)
    {
        echo $certparsed['subject']['CN'];
        echo " foi assinado digitalmente por ";
        echo $chainparsed['subject']['CN']."\n";
    }
}
?>
```

### Veja também

- [openssl\_verify()](function.openssl-verify.md) - Verifica assinatura
- [openssl\_get\_publickey()](function.openssl-get-publickey.md) - Sinônimo de openssl\_pkey\_get\_public

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
