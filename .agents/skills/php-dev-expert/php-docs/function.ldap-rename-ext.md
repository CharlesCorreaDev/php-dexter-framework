# Modifica o nome de uma entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-rename-ext.php

---

# ldap\_rename\_ext

(PHP 7 >= 7.3.0, PHP 8)

ldap\_rename\_ext — Modifica o nome de uma entrada

### Descrição

function **ldap\_rename\_ext**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [string](language.types.string.md) `$new_rdn`,  
    [string](language.types.string.md) `$new_parent`,  
    [bool](language.types.boolean.md) `$delete_old_rdn`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [LDAP\Result](class.ldap-result.md)|[false](language.types.singleton.md)

Faz o mesmo que [ldap\_rename()](function.ldap-rename.md) mas retorna
uma instância de [LDAP\Result](class.ldap-result.md) para ser analisada com [ldap\_parse\_result()](function.ldap-parse-result.md).

### Parâmetros

Consulte [ldap\_rename()](function.ldap-rename.md)

### Valor Retornado

Retorna uma instância de [LDAP\Result](class.ldap-result.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte a `controls`. |

### Veja também

- [ldap\_rename()](function.ldap-rename.md) - Modifica o nome de uma entrada
- [ldap\_parse\_result()](function.ldap-parse-result.md) - Extrai informação de resultado

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
