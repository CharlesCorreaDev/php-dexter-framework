# Define uma função de retorno para fazer religações na busca de referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-set-rebind-proc.php

---

# ldap\_set\_rebind\_proc

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ldap\_set\_rebind\_proc — Define uma função de retorno para fazer religações na busca de referências

### Descrição

function **ldap\_set\_rebind\_proc**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | `callback` agora pode ser nulo. |

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
