# Assina um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cms-sign.php

---

# openssl\_cms\_sign

(PHP 8)

openssl\_cms\_sign — Assina um arquivo

### Descrição

function **openssl\_cms\_sign**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [?](language.types.null.md)[array](language.types.array.md) `$headers`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$encoding` = **`OPENSSL_ENCODING_SMIME`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$untrusted_certificates_filename` = **`null`**  
): [bool](language.types.boolean.md)

Esta função assina um arquivo com uma certificado X.509 e uma chave.

### Parâmetros

`input_filename`
:   O nome do arquivo a ser assinado.

`output_filename`
:   O nome do arquivo onde os resultados serão armazenados.

`certificate`
:   O certificado para assinatura.
    Consulte os [parâmetros de chave/certificado](openssl.certparams.md) para uma lista de valores válidos.

`private_key`
:   A chave associada ao certificado informado no parâmetro `certificate`.
    Consulte os [parâmetros de chave/certificado](openssl.certparams.md) para uma lista de valores válidos.

`headers`
:   Um array de cabeçalhos a serem incluídos na saída S/MIME.

`flags`
:   Opções a serem passadas a **cms\_sign()**.

`encoding`
:   A codificação do arquivo de saída. Uma das constantes **`OPENSSL_ENCODING_SMIME`**,
    **`OPENSSL_ENCODING_DER`** ou **`OPENSSL_ENCODING_PEM`**.

`untrusted_certificates_filename`
:   Certificados intermediários a serem incluídos na assinatura.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **openssl\_cms\_sign()****

```
<?php

openssl_cms_sign('entrada.txt', 'saída.txt', 'file://certificado.pem', 'file://chaveprivada.pem', null, OPENSSL_CMS_BINARY, OPENSSL_ENCODING_DER, 'cadeia_de_certificados.pem');
?>
```

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
