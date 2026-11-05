# Retorna a chave pública de um CSR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-csr-get-public-key.php

---

# openssl\_csr\_get\_public\_key

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

openssl\_csr\_get\_public\_key — Retorna a chave pública de um CSR

### Descrição

function **openssl\_csr\_get\_public\_key**([OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)|[string](language.types.string.md) `$csr`, [bool](language.types.boolean.md) `$short_names` = **`true`**): [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[false](language.types.singleton.md)

**openssl\_csr\_get\_public\_key()** extrai a chave pública de
`csr` e a prepara para uso por outras funções.

### Parâmetros

`csr`
:   Consulte [Parâmetros CSR](openssl.certparams.md) para obter uma lista de valores válidos.

`short_names`
:   **Aviso**

    Este parâmetro é ignorado

### Valor Retornado

Retorna um [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) agora; anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL key`. |
| 8.0.0 | `csr` aceita uma instância [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md) agora; anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de openssl\_csr\_get\_public\_key()**

```
<?php
$subject = array(
    "commonName" => "example.com",
);
$private_key = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
$csr = openssl_csr_new($subject, $private_key, array('digest_alg' => 'sha256') );
$public_key = openssl_csr_get_public_key($csr);
$info = openssl_pkey_get_details($public_key);
echo $info['key'];
?>
```

### Veja também

- [openssl\_csr\_get\_subject()](function.openssl-csr-get-subject.md) - Retorna o assunto de um CSR
- [openssl\_csr\_new()](function.openssl-csr-new.md) - Gera um CSR
- [openssl\_pkey\_get\_details()](function.openssl-pkey-get-details.md) - Retorna um array com os detalhes da chave
- [openssl\_pkey\_export\_to\_file()](function.openssl-pkey-export-to-file.md) - Obtém uma representação exportável de uma chave em um arquivo
- [openssl\_pkey\_export()](function.openssl-pkey-export.md) - Obtém uma representação exportável de uma chave em uma string

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
