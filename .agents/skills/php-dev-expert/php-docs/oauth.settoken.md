# Define o token e o segredo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.settoken.php

---

# OAuth::setToken

(PECL OAuth >= 0.99.1)

OAuth::setToken — Define o token e o segredo

### Descrição

public function **OAuth::setToken**([string](language.types.string.md) `$token`, [string](language.types.string.md) `$token_secret`): [bool](language.types.boolean.md)

Define o token e o segredo para requisições subsequentes.

### Parâmetros

`token`
:   O token OAuth.

`token_secret`
:   O segredo de token OAuth.

### Valor Retornado

**`true`**

### Examples

**Exemplo #1 Exemplo de **OAuth::setToken()****

```
<?php
$oauth = new OAuth(OAUTH_CONSUMER_KEY,OAUTH_CONSUMER_SECRET);
$oauth->setToken("token","segredo-token");
?>
```

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
