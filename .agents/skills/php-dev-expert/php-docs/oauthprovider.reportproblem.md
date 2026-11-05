# Reporta um problema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.reportproblem.php

---

# OAuthProvider::reportProblem

(PECL OAuth >= 1.0.0)

OAuthProvider::reportProblem — Reporta um problema

### Descrição

final public static function **OAuthProvider::reportProblem**([string](language.types.string.md) `$oauthexception`, [bool](language.types.boolean.md) `$send_headers` = **`true`**): [string](language.types.string.md)

Passa um problema como uma exceção [OAuthException](class.oauthexception.md), com possíveis problemas listados
na seção de [constantes OAuth](oauth.constants.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`oauthexception`
:   A exceção [OAuthException](class.oauthexception.md).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [OAuthProvider::checkOAuthRequest()](oauthprovider.checkoauthrequest.md) - Verifica uma requisição OAuth
- [OAuthProvider::isRequestTokenEndpoint()](oauthprovider.isrequesttokenendpoint.md) - Define isRequestTokenEndpoint

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
