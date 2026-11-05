# Criptografa uma mensagem CMS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cms-encrypt.php

---

# openssl\_cms\_encrypt

(PHP 8)

openssl\_cms\_encrypt — Criptografa uma mensagem CMS

### Descrição

function **openssl\_cms\_encrypt**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    [OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$certificate`,  
    [?](language.types.null.md)[array](language.types.array.md) `$headers`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$encoding` = **`OPENSSL_ENCODING_SMIME`**,  
    [string](language.types.string.md)|[int](language.types.integer.md) `$cipher_algo` = **`OPENSSL_CIPHER_AES_128_CBC`**  
): [bool](language.types.boolean.md)

Esta função criptografa o conteúdo para um ou mais destinatários,
com base nos certificados que são passados ​​para ela.

### Parâmetros

`input_filename`
:   O arquivo a ser criptografado.

`output_filename`
:   O arquivo de saída.

`certificate`
:   Destinatários para criptografar.

`headers`
:   Cabeçalhos a serem incluídos quando S/MIME for usado.

`flags`
:   Opções a serem passadas ​​para CMS\_sign.

`encoding`
:   Uma codificação para saída. Uma das constantes **`OPENSSL_ENCODING_SMIME`**,
    **`OPENSSL_ENCODING_DER`** ou **`OPENSSL_ENCODING_PEM`**.

`cipher_algo`
:   Uma cifra para ser usada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `cipher_algo` agora é do tipo [int](language.types.integer.md) ou [string](language.types.string.md). Anteriormente, era do tipo [int](language.types.integer.md). |
| 8.1.0 | O algoritmo de criptografia padrão (`cipher_algo`) agora é AES-128-CBC (**`OPENSSL_CIPHER_AES_128_CBC`**). Anteriormente, PKCS7/CMS era usado (**`OPENSSL_CIPHER_RC2_40`**). |

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
