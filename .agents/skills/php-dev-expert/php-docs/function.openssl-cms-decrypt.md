# Descriptografa uma mensagem CMS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cms-decrypt.php

---

# openssl\_cms\_decrypt

(PHP 8)

openssl\_cms\_decrypt — Descriptografa uma mensagem CMS

### Descrição

function **openssl\_cms\_decrypt**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$private_key` = **`null`**,  
    [int](language.types.integer.md) `$encoding` = **`OPENSSL_ENCODING_SMIME`**  
): [bool](language.types.boolean.md)

Descriptografa uma mensagem CMS.

### Parâmetros

`input_filename`
:   O nome de um arquivo que contém conteúdo criptografado.

`output_filename`
:   O nome do arquivo para depositar o conteúdo descriptografado.

`certificate`
:   O nome do arquivo que contém um certificado do destinatário.

`private_key`
:   O nome do arquivo que contém uma chave PKCS#8.

`encoding`
:   A codificação do arquivo de entrada. Uma das constantes **`OPENSSL_ENCODING_SMIME`**,
    **`OPENSSL_ENCODING_DER`** ou **`OPENSSL_ENCODING_PEM`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
