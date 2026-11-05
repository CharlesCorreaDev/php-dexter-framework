# Facilitador para operação estendida WHOAMI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-exop-whoami.php

---

# ldap\_exop\_whoami

(PHP 7 >= 7.2.0, PHP 8)

ldap\_exop\_whoami — Facilitador para operação estendida WHOAMI

### Descrição

function **ldap\_exop\_whoami**([LDAP\Connection](class.ldap-connection.md) `$ldap`): [string](language.types.string.md)|[false](language.types.singleton.md)

Realiza uma operação estendida WHOAMI e retorna os dados.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

### Valor Retornado

Os dados retornados pelo servidor ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Veja também

- [ldap\_exop()](function.ldap-exop.md) - Realiza uma operação estendida

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
