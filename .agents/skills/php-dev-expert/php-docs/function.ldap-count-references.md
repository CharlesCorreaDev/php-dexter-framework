# Conta o número de referências em um resultado de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-count-references.php

---

# ldap\_count\_references

(PHP 8)

ldap\_count\_references — Conta o número de referências em um resultado de pesquisa

### Descrição

function **ldap\_count\_references**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [LDAP\Result](class.ldap-result.md) `$result`): [int](language.types.integer.md)

Conta o número de referências em um resultado de pesquisa.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

### Valor Retornado

Retorna o número de referências em um resultado de pesquisa.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |

### Veja também

- [ldap\_connect()](function.ldap-connect.md) - Conecta a um servidor LDAP

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
