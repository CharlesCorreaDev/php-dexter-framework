# Gera assinatura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-sign.php

---

# openssl\_sign

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

openssl\_sign — Gera assinatura

### Descrição

function **openssl\_sign**(  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `&$signature`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [string](language.types.string.md)|[int](language.types.integer.md) `$algorithm` = **`OPENSSL_ALGO_SHA1`**,  
    [int](language.types.integer.md) `$padding` = 0  
): [bool](language.types.boolean.md)

**openssl\_sign()** calcula uma assinatura para os dados
informados em `data` gerando uma assinatura digital
criptográfica usando a chave privada associada a
`private_key`. Observe que os dados em si
não são criptografados.

### Parâmetros

`data`
:   A string de dados a ser assinada.

`signature`
:   Se a chamada for bem-sucedida, a assinatura será retornada em
    `signature`.

`private_key`
:   [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) - uma chave, retornada por [openssl\_get\_privatekey()](function.openssl-get-privatekey.md)

    [string](language.types.string.md) - uma chave no formato PEM

`algorithm`
:   [int](language.types.integer.md) - um destes [Algoritmos de Assinatura](openssl.signature-algos.md).

    [string](language.types.string.md) - uma string válida retornada por [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md), por exemplo, "sha256WithRSAEncryption" ou "sha384".

`padding`
:   Preenchimento PSS RSA a ser usado. Pode ser
    **`OPENSSL_PKCS1_PADDING`**,
    **`OPENSSL_PKCS1_PSS_PADDING`** ou `0`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `padding` foi adicionado. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_sign()****

```
<?php
// Presume-se que $data contenha os dados a serem assinados

// busca a chave privada do arquivo e a prepara
$pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");

// calcula assinatura
openssl_sign($data, $signature, $pkeyid);

// libera a chave da memória
openssl_free_key($pkeyid);
?>
```

**Exemplo #2 Exemplo de **openssl\_sign()****

```
<?php
// dados a serem assinados
$data = 'my data';

// cria nova chave pública e privada
$new_key_pair = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
openssl_pkey_export($new_key_pair, $private_key_pem);

$details = openssl_pkey_get_details($new_key_pair);
$public_key_pem = $details['key'];

// cria assinatura
openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA256);

// grava para mais tarde
file_put_contents('private_key.pem', $private_key_pem);
file_put_contents('public_key.pem', $public_key_pem);
file_put_contents('signature.dat', $signature);

// verifica assinatura
$r = openssl_verify($data, $signature, $public_key_pem, "sha256WithRSAEncryption");
var_dump($r);
?>
```

### Veja também

- [openssl\_verify()](function.openssl-verify.md) - Verifica assinatura

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
