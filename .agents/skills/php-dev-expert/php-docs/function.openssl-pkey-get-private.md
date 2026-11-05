# Obtém uma chave privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-get-private.php

---

# openssl\_pkey\_get\_private

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_pkey\_get\_private — Obtém uma chave privada

### Descrição

function **openssl\_pkey\_get\_private**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$passphrase` = **`null`**): [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[false](language.types.singleton.md)

**openssl\_pkey\_get\_private()** analisa a chave privada
`private_key` e prepara-a para uso por outras funções.

### Parâmetros

`private_key`
:   `private_key` pode ser uma das seguintes opções:

    1. uma string no formato
       file://caminho/para/arquivo.pem. O arquivo precisa
       conter uma chave privada ou certificado (pode conter ambos) codificados em PEM.
    2. Uma chave privada no formato PEM.

`passphrase`
:   O parâmetro opcional `passphrase` contém uma senha que precisa ser usada
    se a chave especificada for criptografada (protegida por uma senha).

### Valor Retornado

Retorna uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) agora; anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL key`. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |
| 8.0.0 | `passphrase` agora pode ser nulo. |

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
