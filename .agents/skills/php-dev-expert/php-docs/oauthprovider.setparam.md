# Define um parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauthprovider.setparam.php

---

# OAuthProvider::setParam

(PECL OAuth >= 1.0.0)

OAuthProvider::setParam — Define um parâmetro

### Descrição

final public function **OAuthProvider::setParam**([string](language.types.string.md) `$param_key`, [mixed](language.types.mixed.md) `$param_val` = ?): [bool](language.types.boolean.md)

Define um parâmetro.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`param_key`
:   A chave do parâmetro.

`param_val`
:   O valor do parâmetro, opcional.

    Para excluir um parâmetro da verificação de assinatura, defina
    seu valor para **`null`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

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
