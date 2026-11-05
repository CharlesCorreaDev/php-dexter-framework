# Chama a função de retorno timestampNonceHandler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.calltimestampnoncehandler.php

---

# OAuthProvider::callTimestampNonceHandler

(PECL OAuth >= 1.0.0)

OAuthProvider::callTimestampNonceHandler — Chama a função de retorno timestampNonceHandler

### Descrição

public function **OAuthProvider::callTimestampNonceHandler**(): [void](language.types.void.md)

chama a função de retorno de gerenciamento de timestamp registrada, que é definida
com [OAuthProvider::timestampNonceHandler()](oauthprovider.timestampnoncehandler.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Emite um erro de nível **`E_ERROR`**
se a função callback não puder ser chamada ou não for especificada.

### Veja também

- [OAuthProvider::timestampNonceHandler()](oauthprovider.timestampnoncehandler.md) - Define a função de retorno de gerenciamento de timestamp nonce

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
