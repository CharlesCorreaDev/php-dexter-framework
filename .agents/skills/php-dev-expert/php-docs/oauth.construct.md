# Cria um objeto OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.construct.php

---

# OAuth::\_\_construct

(PECL OAuth >= 0.99.1)

OAuth::\_\_construct — Cria um objeto OAuth

### Descrição

public function **OAuth::\_\_construct**(  
    [string](language.types.string.md) `$consumer_key`,  
    [string](language.types.string.md) `$consumer_secret`,  
    [string](language.types.string.md) `$signature_method` = **`OAUTH_SIG_METHOD_HMACSHA1`**,  
    [int](language.types.integer.md) `$auth_type` = 0  
)

Cria um novo objeto OAuth.

### Parâmetros

`consumer_key`
:   A chave do consumidor fornecida pelo provedor do serviço.

`consumer_secret`
:   A senha do consumidor fornecida pelo provedor do serviço.

`signature_method`
:   Este parâmetro opcional define o método de assinatura a ser usado, por padrão é **`OAUTH_SIG_METHOD_HMACSHA1`** (HMAC-SHA1).

`auth_type`
:   Este parâmetro opcional define como passar os parâmetros OAuth
    para um consumidor, por padrão é
    **`OAUTH_AUTH_TYPE_AUTHORIZATION`** (no
    cabeçalho `Authorization`).

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
