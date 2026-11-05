# Interpreta o objeto de resultado de uma operação estendida LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-parse-exop.php

---

# ldap\_parse\_exop

(PHP 7 >= 7.2.0, PHP 8)

ldap\_parse\_exop — Interpreta o objeto de resultado de uma operação estendida LDAP

### Descrição

function **ldap\_parse\_exop**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [LDAP\Result](class.ldap-result.md) `$result`,  
    [string](language.types.string.md) `&$response_data` = **`null`**,  
    [string](language.types.string.md) `&$response_oid` = **`null`**  
): [bool](language.types.boolean.md)

Interpreta dados de operação estendida LDAP a partir do objeto de resultados em `result`.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

`response_data`
:   Será preenchido com os dados da resposta.

`response_oid`
:   Será preenchido com o OID da resposta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |

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
