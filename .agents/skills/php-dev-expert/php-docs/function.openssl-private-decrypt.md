# Descriptografa dados com chave privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-private-decrypt.php

---

# openssl\_private\_decrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_private\_decrypt — Descriptografa dados com chave privada

### Descrição

function **openssl\_private\_decrypt**(  
    [string](language.types.string.md) `$data`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `&$decrypted_data`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [int](language.types.integer.md) `$padding` = **`OPENSSL_PKCS1_PADDING`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$digest_algo` = **`null`**  
): [bool](language.types.boolean.md)

**openssl\_private\_decrypt()** descriptografa
os dados em `data` que foram criptografados anteriormente via
[openssl\_public\_encrypt()](function.openssl-public-encrypt.md) e armazena o resultado em
`decrypted_data`.

Esta função pode ser usada, por exemplo, para descriptografar dados que suportamente estão disponíveis apenas ao destinatário.

### Parâmetros

`data`

`decrypted_data`

`private_key`
:   `private_key` deve ser a chave privada que corresponde
    à chave pública que foi usada para criptografar os dados.

`padding`
:   `padding` pode ser uma das constantes
    **`OPENSSL_PKCS1_PADDING`**,
    **`OPENSSL_SSLV23_PADDING`**,
    **`OPENSSL_PKCS1_OAEP_PADDING`** ou
    **`OPENSSL_NO_PADDING`**.

`digest_algo`
:   O algoritmo de resumo para preenchimento OAEP, ou **`null`** para usar o algoritmo padrão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `digest_algo` foi adicionado. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

### Veja também

- [openssl\_public\_encrypt()](function.openssl-public-encrypt.md) - Criptografa dados com chave pública
- [openssl\_public\_decrypt()](function.openssl-public-decrypt.md) - Descriptografa dados com chave pública

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
