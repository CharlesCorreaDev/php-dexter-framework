# Modifica o nome de uma entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-rename.php

---

# ldap\_rename

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

ldap\_rename — Modifica o nome de uma entrada

### Descrição

function **ldap\_rename**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [string](language.types.string.md) `$new_rdn`,  
    [string](language.types.string.md) `$new_parent`,  
    [bool](language.types.boolean.md) `$delete_old_rdn`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [bool](language.types.boolean.md)

A entrada especificada por `dn` é renomeada/movida.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto de uma entidade LDAP.

`new_rdn`
:   O novo RDN.

`new_parent`
:   A nova entrada superior na hierarquia.

`delete_old_rdn`
:   Se for igual a **`true`**, os valores antigos da RDN são removidos, caso contrário os valores antigos da RDN
    são retidos como valores não distintos da entrada.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) a enviar com a requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Notas

> **Nota**:
>
> Esta função atualmente só funciona com LDAPv3. Pode ser necessário usar
> [ldap\_set\_option()](function.ldap-set-option.md) antes de realizar a ligação para usar LDAPv3. Esta
> função só está disponível ao usar OpenLDAP 2.x.x OU Netscape
> Directory SDK x.x.

### Veja também

- [ldap\_rename\_ext()](function.ldap-rename-ext.md) - Modifica o nome de uma entrada
- [ldap\_modify()](function.ldap-modify.md) - Sinônimo de ldap\_mod\_replace

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
