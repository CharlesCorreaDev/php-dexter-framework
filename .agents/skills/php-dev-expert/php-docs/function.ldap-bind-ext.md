# Faz ligação ao diretório LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-bind-ext.php

---

# ldap\_bind\_ext

(PHP 7 >= 7.3.0, PHP 8)

ldap\_bind\_ext — Faz ligação ao diretório LDAP

### Descrição

function **ldap\_bind\_ext**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [?](language.types.null.md)[string](language.types.string.md) `$dn` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [LDAP\Result](class.ldap-result.md)|[false](language.types.singleton.md)

Faz o mesmo que [ldap\_bind()](function.ldap-bind.md) mas retorna
uma instância [LDAP\Result](class.ldap-result.md) a ser analisada com [ldap\_parse\_result()](function.ldap-parse-result.md).

### Parâmetros

Consulte [ldap\_bind()](function.ldap-bind.md)

### Valor Retornado

Retorna uma instância de [LDAP\Result](class.ldap-result.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |

### Veja também

- [ldap\_bind()](function.ldap-bind.md) - Faz ligação ao diretório LDAP
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
