# Analisa um certificado X.509 e retorna um objeto para
  ele

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-read.php

---

# openssl\_x509\_read

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_x509\_read — Analisa um certificado X.509 e retorna um objeto para
ele

### Descrição

function **openssl\_x509\_read**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`): [OpenSSLCertificate](class.opensslcertificate.md)|[false](language.types.singleton.md)

**openssl\_x509\_read()** analisa o certificado fornecido por
`certificate` e retorna um objeto [OpenSSLCertificate](class.opensslcertificate.md) para
ele.

### Parâmetros

`certificate`
:   Certificado X509. Consulte os [parâmetros de chave/certificado](openssl.certparams.md) para uma lista de valores válidos.

### Valor Retornado

Retorna um [OpenSSLCertificate](class.opensslcertificate.md) em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Um **`E_WARNING`** é emitido que o certificado X.509 não puder ser recuperado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL X.509`. |
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
