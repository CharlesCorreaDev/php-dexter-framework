# Verifica uma requisição OAuth

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.checkoauthrequest.php

---

# OAuthProvider::checkOAuthRequest

(PECL OAuth >= 1.0.0)

OAuthProvider::checkOAuthRequest — Verifica uma requisição OAuth

### Descrição

public function **OAuthProvider::checkOAuthRequest**([string](language.types.string.md) `$uri` = ?, [string](language.types.string.md) `$method` = ?): [void](language.types.void.md)

Verifica uma requisição OAuth.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`uri`
:   A URI opcional, ou ponto de extremidade.

`method`
:   O método HTTP. Opcional, pode ser passada uma das
    constantes **`OAUTH_HTTP_METHOD_*`**.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Emite um erro de nível **`E_ERROR`** se
o método HTTP não puder ser detectado.

### Veja também

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
