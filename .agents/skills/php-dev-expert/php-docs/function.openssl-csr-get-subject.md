# Retorna o assunto de um CSR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-csr-get-subject.php

---

# openssl\_csr\_get\_subject

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

openssl\_csr\_get\_subject — Retorna o assunto de um CSR

### Descrição

function **openssl\_csr\_get\_subject**([OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)|[string](language.types.string.md) `$csr`, [bool](language.types.boolean.md) `$short_names` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**openssl\_csr\_get\_subject()** retorna informações de nome distinto
do assunto codificadas em `csr`
incluindo os campos commonName (CN), OrganizationName (O), countryName (C) etc.

### Parâmetros

`csr`
:   Consulte [Parâmetros CSR](openssl.certparams.md) para obter uma lista de valores válidos.

`short_names`
:   `short_names` controla como os dados são indexados no
    array - se `short_names` for **`true`** (o padrão),
    os campos serão indexados com o formato de nome abreviado, caso contrário, o formato de
    nome longo será usado - por exemplo: CN é o formato de nome abreviado de commonName.

### Valor Retornado

Retorna um array associativo com a descrição do assunto, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `csr` aceita uma instância [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md) agora; anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de openssl\_csr\_get\_subject()**

```
<?php
$subject = array(
    "countryName" => "CA",
    "stateOrProvinceName" => "Alberta",
    "localityName" => "Calgary",
    "organizationName" => "XYZ Widgets Inc",
    "organizationalUnitName" => "PHP Documentation Team",
    "commonName" => "Wez Furlong",
    "emailAddress" => "wez@example.com",
);
$private_key = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
$configargs = array(
    'digest_alg' => 'sha512WithRSAEncryption'
);
$csr = openssl_csr_new($subject, $privkey, $configargs);
print_r(openssl_csr_get_subject($csr));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [C] => CA
    [ST] => Alberta
    [L] => Calgary
    [O] => XYZ Widgets Inc
    [OU] => PHP Documentation Team
    [CN] => Wez Furlong
    [emailAddress] => wez@example.com
)
```

### Veja também

- [openssl\_csr\_new()](function.openssl-csr-new.md) - Gera um CSR
- [openssl\_csr\_get\_public\_key()](function.openssl-csr-get-public-key.md) - Retorna a chave pública de um CSR
- [openssl\_x509\_parse()](function.openssl-x509-parse.md) - Analisa um certificado X509 e retorna as informações como um array

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
