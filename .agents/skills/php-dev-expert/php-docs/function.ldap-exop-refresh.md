# Facilitador para operação estendida REFRESH

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-exop-refresh.php

---

# ldap\_exop\_refresh

(PHP 7 >= 7.3.0, PHP 8)

ldap\_exop\_refresh — Facilitador para operação estendida REFRESH

### Descrição

function **ldap\_exop\_refresh**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [string](language.types.string.md) `$dn`, [int](language.types.integer.md) `$ttl`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Realiza uma operação estendida REFRESH e retorna os dados.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   DN da entrada a ser atualizada.

`ttl`
:   Tempo em segundos (entre 1 e 31557600) que o
    cliente requer que a entrada exista no diretório antes de ser
    removida automaticamente.

### Valor Retornado

Da RFC:
O campo "responseTtl" é o tempo em segundos que o servidor decide
ter como o campo de tempo-de-vida para a entrada. Não pode ser
menor que o tempo que o cliente requisitou, mas pode ser maior.
Entretanto, para permitir que servidores mantenham um diretório relativamente
preciso, e para evitar que clientes abusem das extensões
dinâmicas, é permitido aos servidores encurtar um tempo-de-vida
requisitado pelo cliente até um mínimo de 86400 segundos (um dia).
**`false`** será retornado em caso de erro.

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
