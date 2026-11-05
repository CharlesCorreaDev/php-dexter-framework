# Conecta a um servidor LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-connect-wallet.php

---

# ldap\_connect\_wallet

(PHP 8 >= 8.3.0)

ldap\_connect\_wallet — Conecta a um servidor LDAP

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.5.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **ldap\_connect\_wallet**(  
    [?](language.types.null.md)[string](language.types.string.md) `$uri` = [null](reserved.constants.md#constant.null),  
    [string](language.types.string.md) `$wallet`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$password`,  
    [int](language.types.integer.md) `$auth_mode` = [GSLC\_SSL\_NO\_AUTH](ldap.constants.md#constant.gslc-ssl-no-auth)  
): [LDAP\Connection](class.ldap-connection.md)|[false](language.types.singleton.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`uri`

`wallet`

`password`

`auth_mode`

### Valor Retornado

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
