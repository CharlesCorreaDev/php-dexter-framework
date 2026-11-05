# Libera uma chave privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-free.php

---

# openssl\_pkey\_free

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_pkey\_free — Libera uma chave privada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **openssl\_pkey\_free**([OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) `$key`): [void](language.types.void.md)

> **Nota**:
>
> Esta função não tem efeito. Antes do PHP 8.0.0, esta função era usada para fechar o recurso.

Esta função libera uma chave privada criada por
[openssl\_pkey\_new()](function.openssl-pkey-new.md).

### Parâmetros

`key`
:   Recurso que contém a chave.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora está descontinuada e não tem mais efeito. |
| 8.0.0 | `key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` era aceito. |

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
