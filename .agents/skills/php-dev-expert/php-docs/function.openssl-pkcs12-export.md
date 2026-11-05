# Exporta um arquivo de armazenamento de certificados compatível com PKCS#12 para uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs12-export.php

---

# openssl\_pkcs12\_export

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

openssl\_pkcs12\_export — Exporta um arquivo de armazenamento de certificados compatível com PKCS#12 para uma variável

### Descrição

function **openssl\_pkcs12\_export**(  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    [string](language.types.string.md) `&$output`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$passphrase`,  
    [array](language.types.array.md) `$options` = []  
): [bool](language.types.boolean.md)

**openssl\_pkcs12\_export()** armazena o certificado informado no parâmetro
`certificate` na string especificada em
`output` em um formato PKCS#12.

### Parâmetros

`certificate`
:   Consulte [Parâmetros Chave/Certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`output`
:   Em caso de sucesso, conterá o certificado PKCS#12.

`private_key`
:   Componente da chave privada do certificado PKCS#12.
    Consulte os [parâmetros de chave pública/privada](openssl.certparams.md) para uma lista de valores válidos.

`passphrase`
:   Senha de criptografia para desbloquear o certificado PKCS#12.

`options`
:   Array opcional, outras chaves serão ignoradas.

    | Chave | Descrição |
    | --- | --- |
    | `"extracerts"` | array de certificados extras ou um único certificado a ser incluído na string PKCS#12. |
    | `"friendly_name"` | string a ser usada para o certificado e chave fornecidos |

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509` era aceito. |

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
