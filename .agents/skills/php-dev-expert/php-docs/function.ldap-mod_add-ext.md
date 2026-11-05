# Adiciona valores aos atributos atuais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-mod_add-ext.php

---

# ldap\_mod\_add\_ext

(PHP 7 >= 7.3.0, PHP 8)

ldap\_mod\_add\_ext — Adiciona valores aos atributos atuais

### Descrição

function **ldap\_mod\_add\_ext**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [array](language.types.array.md) `$entry`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [LDAP\Result](class.ldap-result.md)|[false](language.types.singleton.md)

Faz o mesmo que [ldap\_mod\_add()](function.ldap-mod-add.md) mas retorna
uma instância de [LDAP\Result](class.ldap-result.md) para ser interpretada com [ldap\_parse\_result()](function.ldap-parse-result.md).

### Parâmetros

Consulte [ldap\_mod\_add()](function.ldap-mod-add.md)

### Valor Retornado

Retorna uma instância de [LDAP\Result](class.ldap-result.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | Agora retorna uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Veja também

- [ldap\_mod\_add()](function.ldap-mod-add.md) - Adiciona valores aos atributos atuais
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
