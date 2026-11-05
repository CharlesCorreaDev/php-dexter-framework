# Define um parâmetro de autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-auth-set-parameter.php

---

# svn\_auth\_set\_parameter

(PECL svn >= 0.1.0)

svn\_auth\_set\_parameter — Define um parâmetro de autenticação

### Descrição

function **svn\_auth\_set\_parameter**([string](language.types.string.md) `$key`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

Define o parâmetro de autenticação em `key` como `value`.
Para obter uma lista de chaves válidas e seus significados, consulte a
[lista de constantes de autenticação](svn.constants.md#svn.constants.auth).

### Parâmetros

`key`
:   Nome da chave da string. Use as [constantes de autenticação](svn.constants.md#svn.constants.auth)
    definidas por esta extensão para especificar uma chave.

`value`
:   Valor da string a ser definido como parâmetro na chave. O formato do valor varia
    com o parâmetro.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de autenticação padrão**

Este exemplo configura o SVN para que o nome de usuário padrão a ser usado
seja 'Bob' e a senha padrão seja 'abc123':

```
<?php
svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_USERNAME, 'Bob');
svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_PASSWORD, 'abc123');
?>
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_auth\_get\_parameter()](function.svn-auth-get-parameter.md) - Recupera o parâmetro de autenticação
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
