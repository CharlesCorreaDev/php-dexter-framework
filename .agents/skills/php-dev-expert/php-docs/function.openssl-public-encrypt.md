# Criptografa dados com chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-public-encrypt.php

---

# openssl\_public\_encrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_public\_encrypt — Criptografa dados com chave pública

### Descrição

function **openssl\_public\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `&$encrypted_data`,  
    [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$public_key`,  
    [int](language.types.integer.md) `$padding` = **`OPENSSL_PKCS1_PADDING`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$digest_algo` = **`null`**  
): [bool](language.types.boolean.md)

**openssl\_public\_encrypt()** criptografa os dados em `data`
a chave pública `public_key` e armazena o resultado em
`encrypted_data`. Os dados criptografados podem ser descriptografados pela função
[openssl\_private\_decrypt()](function.openssl-private-decrypt.md).

Esta função pode ser usada, por exemplo, para criptografar mensagem que possa depois ser lida
somente pelo proprietário da chave privada. Também pode ser usada para armazenar dados de forma
segura em um banco de dados.

### Parâmetros

`data`

`encrypted_data`
:   Esta variável conterá o resultado da criptografia.

`public_key`
:   `public_key` deve ser a chave pública que corresponde
    à chave privada que foi usada para criptografar os dados.

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
