# Define isRequestTokenEndpoint

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.isrequesttokenendpoint.php

---

# OAuthProvider::isRequestTokenEndpoint

(PECL OAuth >= 1.0.0)

OAuthProvider::isRequestTokenEndpoint — Define isRequestTokenEndpoint

### Descrição

public function **OAuthProvider::isRequestTokenEndpoint**([bool](language.types.boolean.md) `$will_issue_request_token`): [void](language.types.void.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`will_issue_request_token`
:   Define se será ou não emitido um token de requisição, assim determinando se
    [OAuthProvider::tokenHandler()](oauthprovider.tokenhandler.md) precisa ser chamado.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [OAuthProvider::setRequestTokenPath()](oauthprovider.setrequesttokenpath.md) - Define o caminho para o token de requisição
- [OAuthProvider::reportProblem()](oauthprovider.reportproblem.md) - Reporta um problema

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
