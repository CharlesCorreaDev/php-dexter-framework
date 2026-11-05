# Recupera o parâmetro de autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-auth-get-parameter.php

---

# svn\_auth\_get\_parameter

(PECL svn >= 0.1.0)

svn\_auth\_get\_parameter — Recupera o parâmetro de autenticação

### Descrição

function **svn\_auth\_get\_parameter**([string](language.types.string.md) `$key`): [string](language.types.string.md)

Recupera o parâmetro de autenticação em `key`.
Para obter uma lista de chaves válidas e seus significados, consulte a
[lista de constantes de autenticação](svn.constants.md#svn.constants.auth).

### Parâmetros

`key`
:   Nome da chave da string. Use as [constantes de autenticação](svn.constants.md#svn.constants.auth)
    definidas por esta extensão para especificar uma chave.

### Valor Retornado

Retorna o valor da string do parâmetro em `key`;
retorna **`null`** se o parâmetro não existir.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_auth\_set\_parameter()](function.svn-auth-set-parameter.md) - Define um parâmetro de autenticação
- [Constantes de autenticação](svn.constants.md#svn.constants.auth)

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
