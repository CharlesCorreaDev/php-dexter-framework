# Descriptografa dados com chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-public-decrypt.php

---

# openssl\_public\_decrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_public\_decrypt — Descriptografa dados com chave pública

### Descrição

function **openssl\_public\_decrypt**(  
    [string](language.types.string.md) `$data`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `&$decrypted_data`,  
    [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`,  
    [int](language.types.integer.md) `$padding` = **`OPENSSL_PKCS1_PADDING`**  
): [bool](language.types.boolean.md)

**openssl\_public\_decrypt()** descriptografa os dados de
`data` que foram criptografados anteriormente via
[openssl\_private\_encrypt()](function.openssl-private-encrypt.md) e armazena o resultado em
`decrypted_data`.

Esta função pode ser usada, por exemplo, para verificar se a mensagem foi escrita pelo
proprietário da chave privada.

### Parâmetros

`data`

`decrypted_data`

`public_key`
:   `public_key` deve ser a chave pública que corresponde
    à chave privada que foi usada para criptografar os dados.

`padding`
:   `padding` pode ser uma das constantes
    **`OPENSSL_PKCS1_PADDING`** ou
    **`OPENSSL_NO_PADDING`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `public_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

### Veja também

- [openssl\_private\_encrypt()](function.openssl-private-encrypt.md) - Criptografa dados com chave privada
- [openssl\_private\_decrypt()](function.openssl-private-decrypt.md) - Descriptografa dados com chave privada

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
