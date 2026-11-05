# Remove um parâmetro requerido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.removerequiredparameter.php

---

# OAuthProvider::removeRequiredParameter

(PECL OAuth >= 1.0.0)

OAuthProvider::removeRequiredParameter — Remove um parâmetro requerido

### Descrição

final public function **OAuthProvider::removeRequiredParameter**([string](language.types.string.md) `$req_params`): [bool](language.types.boolean.md)

Remove um parâmetro requerido.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`req_params`
:   O parâmetro requerido a ser removido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [OAuthProvider::setParam()](oauthprovider.setparam.md) - Define um parâmetro
- [OAuthProvider::addRequiredParameter()](oauthprovider.addrequiredparameter.md) - Adiciona parâmetros requeridos

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
