# Realiza uma operação estendida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-exop-sync.php

---

# ldap\_exop\_sync

(PHP 8 >= 8.3.0)

ldap\_exop\_sync — Realiza uma operação estendida

### Descrição

function **ldap\_exop\_sync**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$request_oid`,  
    [?](language.types.null.md)[string](language.types.string.md) `$request_data` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**,  
    [string](language.types.string.md) `&$response_data` = **`null`**,  
    [string](language.types.string.md) `&$response_oid` = **`null`**  
): [LDAP\Result](class.ldap-result.md)|[bool](language.types.boolean.md)

Executa uma operação estendida no `ldap` especificado com
`request_oid` o OID da operação e
`request_data` os dados.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`request_oid`
:   A solicitação de operação estendida OID.
    Pode ser uma das
    constantes
    **`LDAP_EXOP_*`**
    ou uma string com o OID da operação.

`request_data`
:   Os dados estendidos da solicitação de operação.
    Podem ser **`null`** para algumas operações como **`LDAP_EXOP_WHO_AM_I`**,
    e também podem precisar ser codificados em BER.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) para enviar com a solicitação.

`response_data`
:   Será preenchido com os dados de resposta da operação estendida, se fornecidos.
    Caso não sejam fornecidos, a função [ldap\_parse\_exop()](function.ldap-parse-exop.md) poderá ser
    usada posteriormente no objeto de resultado para obter esses dados.

`response_oid`
:   Será preenchido com o OID da resposta, se fornecido,
    geralmente igual ao OID da solicitação.

### Valor Retornado

Quando usado com `response_data`,
retorna **`true`** em caso de sucesso ou **`false`** em caso de erro.
Quando usado sem `response_data`,
retorna um identificador de resultado ou **`false`** em caso de erro.

### Veja também

- [ldap\_exop()](function.ldap-exop.md) - Realiza uma operação estendida
- [ldap\_exop\_whoami()](function.ldap-exop-whoami.md) - Facilitador para operação estendida WHOAMI
- [ldap\_exop\_refresh()](function.ldap-exop-refresh.md) - Facilitador para operação estendida REFRESH
- [ldap\_exop\_passwd()](function.ldap-exop-passwd.md) - Facilitador para operação estendida PASSWD
- [ldap\_parse\_result()](function.ldap-parse-result.md) - Extrai informação de resultado
- [ldap\_parse\_exop()](function.ldap-parse-exop.md) - Interpreta o objeto de resultado de uma operação estendida LDAP

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
