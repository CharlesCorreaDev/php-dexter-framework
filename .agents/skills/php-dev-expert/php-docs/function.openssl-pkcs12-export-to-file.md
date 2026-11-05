# Exporta um arquivo de armazenamento de certificados compatível com PKCS#12

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs12-export-to-file.php

---

# openssl\_pkcs12\_export\_to\_file

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

openssl\_pkcs12\_export\_to\_file — Exporta um arquivo de armazenamento de certificados compatível com PKCS#12

### Descrição

function **openssl\_pkcs12\_export\_to\_file**(  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    [string](language.types.string.md) `$output_filename`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$passphrase`,  
    [array](language.types.array.md) `$options` = []  
): [bool](language.types.boolean.md)

**openssl\_pkcs12\_export\_to\_file()** armazena
o certificado informado no parâmetro `certificate` em um arquivo nomeado por
`output_filename` em um formato de arquivo PKCS#12.

### Parâmetros

`certificate`
:   Consulte [Parâmetros Chave/Certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`output_filename`
:   Caminho para o arquivo de saída.

`private_key`
:   Componente de chave privada do arquivo PKCS#12.
    Consulte [Parâmetros de chave pública/privada](openssl.certparams.md) para obter uma lista de valores válidos.

`passphrase`
:   Senha de criptografia para desbloquear o arquivo PKCS#12.

`options`
:   Array opcional, outras chaves serão ignoradas.

    | Chave | Descrição |
    | --- | --- |
    | `"extracerts"` | array de certificados extras ou um único certificado a ser incluído no arquivo PKCS#12. |
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
