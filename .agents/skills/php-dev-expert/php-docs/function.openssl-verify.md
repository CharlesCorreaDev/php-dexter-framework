# Verifica assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-verify.php

---

# openssl\_verify

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

openssl\_verify — Verifica assinatura

### Descrição

function **openssl\_verify**(  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$signature`,  
    [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`,  
    [string](language.types.string.md)|[int](language.types.integer.md) `$algorithm` = **`OPENSSL_ALGO_SHA1`**,  
    [int](language.types.integer.md) `$padding` = 0  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

**openssl\_verify()** verifica que a assinatura em
`signature` está correta para os dados especificados em
`data` usans a chave pública
`public_key`. Esta precisa ser a chave pública
correspondente à chave privada utilizada para assinatura.

### Parâmetros

`data`
:   A sequência de dados usada para gerar a assinatura anteriormente

`signature`
:   Uma string binária bruta, gerada por [openssl\_sign()](function.openssl-sign.md) ou meios similares

`public_key`
:   [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) - uma chave, retornada por [openssl\_get\_publickey()](function.openssl-get-publickey.md)

    [string](language.types.string.md) - uma chave no formato PEM (por exemplo `-----BEGIN PUBLIC KEY-----
    MIIBCgK...`)

`algorithm`
:   [int](language.types.integer.md) - um destes [Algoritmos de Assinatura](openssl.signature-algos.md).

    [string](language.types.string.md) - uma string válida retornada por [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md), por exemplo, "sha1WithRSAEncryption" ou "sha512".

`padding`
:   Preenchimento PSS RSA a ser usado. Pode ser
    **`OPENSSL_PKCS1_PADDING`**,
    **`OPENSSL_PKCS1_PSS_PADDING`** ou `0`.

### Valor Retornado

Retorna 1 se a assinatura estiver correta, 0 se estiver incorreta e
-1 ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `padding` foi adicionado. |
| 8.0.0 | `public_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_verify()****

```
<?php
// Presume-se que $data e $signature contenham os dados e a assinatura

// busca a chave pública do certificado e a prepara
$pubkeyid = openssl_pkey_get_public("file://src/openssl-0.9.6/demos/sign/cert.pem");

// afirma se a assinatura está correta ou não
$ok = openssl_verify($data, $signature, $pubkeyid);
if ($ok == 1) {
    echo "boa";
} elseif ($ok == 0) {
    echo "ruim";
} else {
    echo "erro ao verificar assinatura";
}
// libera a chave da memória
openssl_free_key($pubkeyid);
?>
```

**Exemplo #2 Exemplo de **openssl\_verify()****

```
<?php
// dados a serem assinados
$data = 'my data';

// cria uma nova chave privada e pública
$private_key_res = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
$details = openssl_pkey_get_details($private_key_res);
$public_key_res = openssl_pkey_get_public($details['key']);

// cira assinatura
openssl_sign($data, $signature, $private_key_res, "sha256WithRSAEncryption");

// verifica assinatura
$ok = openssl_verify($data, $signature, $public_key_res, OPENSSL_ALGO_SHA256);
if ($ok == 1) {
    echo "válida";
} elseif ($ok == 0) {
    echo "inválida";
} else {
    echo "erro: ".openssl_error_string();
}
?>
```

### Veja também

- [openssl\_sign()](function.openssl-sign.md) - Gera assinatura

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
