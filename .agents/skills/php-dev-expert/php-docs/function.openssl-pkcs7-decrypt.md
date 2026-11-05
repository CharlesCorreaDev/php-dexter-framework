# Descriptografa uma mensagem criptografada S/MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs7-decrypt.php

---

# openssl\_pkcs7\_decrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_pkcs7\_decrypt — Descriptografa uma mensagem criptografada S/MIME

### Descrição

function **openssl\_pkcs7\_decrypt**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$private_key` = **`null`**  
): [bool](language.types.boolean.md)

Descriptografa a mensagem criptografada S/MIME contida no arquivo especificado por
`input_filename` usando o certificado informado em
`certificate` e sua chave privada associada especificada por
`private_key`.

### Parâmetros

`input_filename`

`output_filename`
:   A mensagem descriptografada é gravada no arquivo especificado por
    `output_filename`.

`certificate`

`private_key`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_pkcs7\_decrypt()****

```
<?php
// Presume-se que $cert e $key contenham o seu certificado pessoal e par de
// chaves privadas e que você seja o destinatário de uma mensagem S/MIME
$infilename = "encrypted.msg";  // este arquivo contém sua mensagem criptografada
$outfilename = "decrypted.msg"; // certifique-se de que você pode gravar neste arquivo

if (openssl_pkcs7_decrypt($infilename, $outfilename, $cert, $key)) {
    echo "descriptografado!";
} else {
    echo "falha ao descriptografar!";
}
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
