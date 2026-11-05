# Libera recurso de chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-free-key.php

---

# openssl\_free\_key

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

openssl\_free\_key — Libera recurso de chave

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **openssl\_free\_key**([OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) `$key`): [void](language.types.void.md)

**openssl\_free\_key()** libera da memória a chave associada ao
parâmetro `key`.

### Parâmetros

`key`

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada e não tem mais nenhum efeito. |
| 8.0.0 | `key` agora aceita um [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` era aceito. |

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
