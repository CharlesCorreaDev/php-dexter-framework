# Desliga-se do diretório LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-unbind.php

---

# ldap\_unbind

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_unbind — Desliga-se do diretório LDAP

### Descrição

function **ldap\_unbind**([LDAP\Connection](class.ldap-connection.md) `$ldap`): [bool](language.types.boolean.md)

Desliga-se do diretório LDAP.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Veja também

- [ldap\_bind()](function.ldap-bind.md) - Faz ligação ao diretório LDAP

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
