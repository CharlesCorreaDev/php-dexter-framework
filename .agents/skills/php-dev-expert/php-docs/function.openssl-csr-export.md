# Exporta um CSR como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-csr-export.php

---

# openssl\_csr\_export

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_csr\_export — Exporta um CSR como uma string

### Descrição

function **openssl\_csr\_export**([OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)|[string](language.types.string.md) `$csr`, [string](language.types.string.md) `&$output`, [bool](language.types.boolean.md) `$no_text` = **`true`**): [bool](language.types.boolean.md)

**openssl\_csr\_export()** exporta a Requisição de
Assinatura de Certificado, representada pelo parâmetro `csr`,
em formato PEM, na variável informada em
`output`, que é passada por referência.

### Parâmetros

`csr`
:   Consulte [Parâmetros CSR](openssl.certparams.md) para obter uma lista de valores válidos.

`output`
:   Em caso de sucesso, esta string conterá o CSR codificado
    no formato PEM

`no_text`
:   O parâmetro opcional `notext` afeta
    a verbosidade da saída; se for **`false`**, então informações adicionais legíveis
    para humanos serão incluídas na saída. O valor padrão de
    `notext` é **`true`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `csr` aceita agora uma instância de [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de openssl\_csr\_export()**

```
<?php
$subject = array(
    "commonName" => "example.com",
);
$private_key = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
$configargs = array(
    'digest_alg' => 'sha256WithRSAEncryption'
);
$csr = openssl_csr_new($subject, $private_key, $configargs);
openssl_csr_export($csr, $csr_string);
echo $csr_string;
?>
```

### Veja também

- [openssl\_csr\_export\_to\_file()](function.openssl-csr-export-to-file.md) - Exporta um CSR para um arquivo
- [openssl\_csr\_new()](function.openssl-csr-new.md) - Gera um CSR
- [openssl\_csr\_sign()](function.openssl-csr-sign.md) - Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

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
