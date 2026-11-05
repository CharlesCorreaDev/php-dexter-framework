# Define a função de retorno de gerenciamento de consumidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.consumerhandler.php

---

# OAuthProvider::consumerHandler

(PECL OAuth >= 1.0.0)

OAuthProvider::consumerHandler — Define a função de retorno de gerenciamento de consumidor

### Descrição

public function **OAuthProvider::consumerHandler**([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

Define a função de retorno de gerenciamento de consumidor, que posteriormente será chamada com
[OAuthProvider::callConsumerHandler()](oauthprovider.callconsumerhandler.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`callback_function`
:   O nome da função do tipo [callable](language.types.callable.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de função **OAuthProvider::consumerHandler()****

```
<?php
function procuraConsumidor($provider) {

    if ($provider->consumer_key === 'unknown') {
        return OAUTH_CONSUMER_KEY_UNKNOWN;
    } else if($provider->consumer_key == 'blacklisted' || $provider->consumer_key === 'throttled') {
        return OAUTH_CONSUMER_KEY_REFUSED;
    }

    $provider->consumer_secret = "the_consumers_secret";

    return OAUTH_OK;
}
?>
```

### Veja também

- [OAuthProvider::callConsumerHandler()](oauthprovider.callconsumerhandler.md) - Chama a função de retorno consumerHandler

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
