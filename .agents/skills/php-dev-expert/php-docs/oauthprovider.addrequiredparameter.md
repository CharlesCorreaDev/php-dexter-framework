# Adiciona parâmetros requeridos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.addrequiredparameter.php

---

# OAuthProvider::addRequiredParameter

(PECL OAuth >= 1.0.0)

OAuthProvider::addRequiredParameter — Adiciona parâmetros requeridos

### Descrição

final public function **OAuthProvider::addRequiredParameter**([string](language.types.string.md) `$req_params`): [bool](language.types.boolean.md)

Adiciona parâmetros requeridos pelo provedor OAuth.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`req_params`
:   Os parâmetros requeridos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [OAuthProvider::removeRequiredParameter()](oauthprovider.removerequiredparameter.md) - Remove um parâmetro requerido

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
