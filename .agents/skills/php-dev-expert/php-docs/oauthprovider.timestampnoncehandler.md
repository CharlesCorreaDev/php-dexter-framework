# Define a função de retorno de gerenciamento de timestamp nonce

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.timestampnoncehandler.php

---

# OAuthProvider::timestampNonceHandler

(PECL OAuth >= 1.0.0)

OAuthProvider::timestampNonceHandler — Define a função de retorno de gerenciamento de timestamp nonce

### Descrição

public function **OAuthProvider::timestampNonceHandler**([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

Define a função de retorno de gerenciamento de timestamp nonce, que posteriormente será chamada com
[OAuthProvider::callTimestampNonceHandler()](oauthprovider.calltimestampnoncehandler.md). Erros relacionados a
timestamp/nonce são lançados a esta função.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`callback_function`
:   O nome da função [callable](language.types.callable.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de função **OAuthProvider::timestampNonceHandler()****

```
<?php
function verificadorTimestampNonce($provider) {

    if ($provider->nonce === 'bad') {
        return OAUTH_BAD_NONCE;
    } elseif ($provider->timestamp == '0') {
        return OAUTH_BAD_TIMESTAMP;
    }

    return OAUTH_OK;
}
?>
```

### Veja também

- [OAuthProvider::callTimestampNonceHandler()](oauthprovider.calltimestampnoncehandler.md) - Chama a função de retorno timestampNonceHandler

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
