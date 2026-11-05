# Define a função de retorno de gerenciamento de token

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.tokenhandler.php

---

# OAuthProvider::tokenHandler

(PECL OAuth >= 1.0.0)

OAuthProvider::tokenHandler — Define a função de retorno de gerenciamento de token

### Descrição

public function **OAuthProvider::tokenHandler**([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

Define a função de retorno de gerenciamento de token, que posteriormente será chamada com
[OAuthProvider::callTokenHandler()](oauthprovider.calltokenhandler.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`callback_function`
:   O nome da função [callable](language.types.callable.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de função **OAuthProvider::tokenHandler()****

```
<?php
function gerenciadorDeToken($provider) {

    if ($provider->token === 'rejected') {
        return OAUTH_TOKEN_REJECTED;
    } elseif ($provider->token === 'revoked') {
        return OAUTH_TOKEN_REVOKED;
    }

    $provider->token_secret = "the_tokens_secret";
    return OAUTH_OK;
}
?>
```

### Veja também

- [OAuthProvider::callTokenHandler()](oauthprovider.calltokenhandler.md) - Chama a função de retorno tokenHandler

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
