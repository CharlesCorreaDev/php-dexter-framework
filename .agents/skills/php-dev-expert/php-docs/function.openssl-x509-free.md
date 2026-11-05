# Libera recurso de certificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-x509-free.php

---

# openssl\_x509\_free

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_x509\_free — Libera recurso de certificado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **openssl\_x509\_free**([OpenSSLCertificate](class.opensslcertificate.md) `$certificate`): [void](language.types.void.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

**openssl\_x509\_free()** libera da memória o certificado associado
com o recurso especificado no parâmetro `certificate`.

### Parâmetros

`certificate`

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora está descontinuada e não tem mais efeito. |
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
