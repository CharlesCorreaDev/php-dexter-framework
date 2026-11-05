# Obtém a próxima entrada do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-next-entry.php

---

# ldap\_next\_entry

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_next\_entry — Obtém a próxima entrada do resultado

### Descrição

function **ldap\_next\_entry**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`): LDAP\ResultEntry|[false](language.types.singleton.md)

Recupera as entradas armazenadas no resultado. Chamadas sucessivas à função
**ldap\_next\_entry()** retornam entradas uma a uma até que
não haja mais entradas. A primeira chamada a **ldap\_next\_entry()**
é feita após a chamada a [ldap\_first\_entry()](function.ldap-first-entry.md) com a entrada no parâmetro
`entry` como retornada da função
[ldap\_first\_entry()](function.ldap-first-entry.md).

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

### Valor Retornado

Retorna uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md) para a próxima entrada no resultado cujas entradas
estão sendo lidas começando com [ldap\_first\_entry()](function.ldap-first-entry.md). Se
não houver mais entradas no resultado, retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

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
