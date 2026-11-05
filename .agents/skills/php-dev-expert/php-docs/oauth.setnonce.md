# Define o nonce para requisições subsequentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.setnonce.php

---

# OAuth::setNonce

(PECL OAuth >= 0.99.1)

OAuth::setNonce — Define o nonce para requisições subsequentes

### Descrição

public function **OAuth::setNonce**([string](language.types.string.md) `$nonce`): [mixed](language.types.mixed.md)

Define o nonce para todas as requisições subsequentes.

### Parâmetros

`nonce`
:   O valor para oauth\_nonce.

### Valor Retornado

Retorna **`true`** em caso de sucesso, ou **`false`** se o
`nonce` for considerado inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 1.0.0 | Anteriormente, retornava **`null`** em caso de falha, em vez de **`false`**. |

### Veja também

- [OAuth::setToken()](oauth.settoken.md) - Define o token e o segredo
- [OAuth::setAuthType()](oauth.setauthtype.md) - Define o tipo de autorização
- [OAuth::setVersion()](oauth.setversion.md) - Define a versão OAuth

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
