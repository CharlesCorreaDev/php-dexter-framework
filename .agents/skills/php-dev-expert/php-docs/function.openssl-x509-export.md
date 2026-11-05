# Exporta um certificado como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-export.php

---

# openssl\_x509\_export

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_x509\_export — Exporta um certificado como uma string

### Descrição

function **openssl\_x509\_export**([OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`, [string](language.types.string.md) `&$output`, [bool](language.types.boolean.md) `$no_text` = **`true`**): [bool](language.types.boolean.md)

**openssl\_x509\_export()** armazena o certificado informado no parâmetro
`certificate` em uma string especificada por
`output` em um formato PEM.

### Parâmetros

`certificate`
:   Consulte [Parâmetros Chave/Certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`output`
:   Em caso de sucesso, esta variável conterá o PEM.

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
