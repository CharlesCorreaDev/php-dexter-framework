# Calcula a impressão digital, ou resumo, de um determinado certificado X.509

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-fingerprint.php

---

# openssl\_x509\_fingerprint

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_x509\_fingerprint — Calcula a impressão digital, ou resumo, de um determinado certificado X.509

### Descrição

function **openssl\_x509\_fingerprint**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`, [string](language.types.string.md) `$digest_algo` = "sha1", [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**openssl\_x509\_fingerprint()** retorna o resumo de
`certificate` como uma string.

### Parâmetros

`certificate`
:   Consulte [Parâmetros Chave/Certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`digest_algo`
:   O método de resumo ou algoritmo de hash a ser usado, por exemplo "sha256", um dos métodos de [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md).

`binary`
:   Quando definido como **`true`**, gera dados binários brutos. **`false`** gera hexadecimais em minúsculas.

### Valor Retornado

Retorna uma string contendo a impressão digital do certificado calculada como hexadecimais em minúsculas, a menos que `binary` esteja definido como **`true`** nesse caso, a representação binária bruta do resumo da mensagem é retornada.

Retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
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
