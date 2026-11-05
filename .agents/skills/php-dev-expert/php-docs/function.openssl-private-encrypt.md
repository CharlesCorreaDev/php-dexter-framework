# Criptografa dados com chave privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-private-encrypt.php

---

# openssl\_private\_encrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_private\_encrypt — Criptografa dados com chave privada

### Descrição

function **openssl\_private\_encrypt**(  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `&$encrypted_data`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [int](language.types.integer.md) `$padding` = **`OPENSSL_PKCS1_PADDING`**  
): [bool](language.types.boolean.md)

**openssl\_private\_encrypt()** criptografa os dados em `data`
com a chave privada `private_key` e armazena o resultado em
`encrypted_data`. Dados criptografados podem ser descriptografados pela função
[openssl\_public\_decrypt()](function.openssl-public-decrypt.md).

Esta função pode ser usada, por exemplo, para assinar dados (ou seu hash) para provar que não
foram escritos por outra pessoa.

### Parâmetros

`data`

`encrypted_data`

`private_key`
:   `private_key` deve ser a chave privada que corresponde
    à chave pública que foi usada para criptografar os dados.

`padding`
:   `padding` pode ser uma das constantes
    **`OPENSSL_PKCS1_PADDING`** ou
    **`OPENSSL_NO_PADDING`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
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
