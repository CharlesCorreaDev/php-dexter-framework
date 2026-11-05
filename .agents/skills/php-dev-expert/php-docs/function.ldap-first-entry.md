# Retorna o ID do primeiro resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-first-entry.php

---

# ldap\_first\_entry

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_first\_entry — Retorna o ID do primeiro resultado

### Descrição

function **ldap\_first\_entry**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [LDAP\Result](class.ldap-result.md) `$result`): LDAP\ResultEntry|[false](language.types.singleton.md)

Retorna o identificador da primeira entrada no resultado. Este identificador
de entrada é então fornecido à rotina [ldap\_next\_entry()](function.ldap-next-entry.md)
para obter entradas sucessivas do resultado.

Entradas no resultado LDAP são lidas sequencialmente usando as funções
**ldap\_first\_entry()** e
[ldap\_next\_entry()](function.ldap-next-entry.md).

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

### Valor Retornado

Retorna uma instância [LDAP\ResultEntry](class.ldap-result-entry.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Veja também

- [ldap\_get\_entries()](function.ldap-get-entries.md) - Obtém todas as entradas do resultado

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
