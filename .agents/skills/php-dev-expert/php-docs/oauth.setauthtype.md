# Define o tipo de autorização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setauthtype.php

---

# OAuth::setAuthType

(PECL OAuth >= 0.99.1)

OAuth::setAuthType — Define o tipo de autorização

### Descrição

public function **OAuth::setAuthType**([int](language.types.integer.md) `$auth_type`): [bool](language.types.boolean.md)

Define onde os parâmetros OAuth devem ser passados.

### Parâmetros

`auth_type`
:   `auth_type` pode ser uma das seguintes opções (em ordem de preferência decrescente de acordo com o OAuth 1.0 seção 5.2):

    **`OAUTH_AUTH_TYPE_AUTHORIZATION`**
    :   Passar os parâmetros OAuth no cabeçalho `Authorization` do HTTP.

    **`OAUTH_AUTH_TYPE_FORM`**
    :   Anexar os parâmetros OAuth ao corpo de requisição do POST HTTP.

    **`OAUTH_AUTH_TYPE_URI`**
    :   Anexar os parâmetros OAuth à URI da requisição.

    **`OAUTH_AUTH_TYPE_NONE`**
    :   Nenhum.

### Valor Retornado

Retorna **`true`** se um parâemtro for corretamente definido, caso contrário **`false`**
(ex.:, se um `auth_type` inválido for passado).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |

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
