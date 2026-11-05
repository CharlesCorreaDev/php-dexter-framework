# Analisa um certificado X509 e retorna as informações como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-parse.php

---

# openssl\_x509\_parse

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_x509\_parse — Analisa um certificado X509 e retorna as informações como um array

### Descrição

function **openssl\_x509\_parse**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`, [bool](language.types.boolean.md) `$short_names` = **`true`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**openssl\_x509\_parse()** retorna informações sobre o
certificado fornecido em `certificate`, incluindo campos como nome
do assunto, nome do emissor, finalidades, intervalo de datas válidas etc.

### Parâmetros

`certificate`
:   Certificado X509. Consulte os [parâmetros de chave/certificado](openssl.certparams.md) para uma lista de valores válidos.

`short_names`
:   `short_names` controla como os dados são indexados no
    array - se `short_names` for **`true`** (o padrão),
    os campos serão indexados com o formato de nome abreviado, caso contrário, o formato de nome
    longo será usado - por exemplo: CN é o formato de nome abreviado de commonName.

### Valor Retornado

*A estrutura dos dados retornados ainda não está documentada
(deliberadamente), pois ainda está sujeita a alterações.*

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A análise de certificado sem os segundos no horário UTC não é mais permitida para nenhuma versão do OpenSSL. Já não era permitida para as versões 3.3+ do OpenSSL. |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509` era aceito. |

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
