# Remove uma entrada de um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-delete.php

---

# ldap\_delete

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_delete — Remove uma entrada de um diretório

### Descrição

function **ldap\_delete**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [string](language.types.string.md) `$dn`, [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**): [bool](language.types.boolean.md)

Remove uma entrada específica em um diretório LDAP.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto da entidade LDAP.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) a ser enviado com a requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Suporte para `controls` adicionado. |

### Veja também

- [ldap\_delete\_ext()](function.ldap-delete-ext.md) - Remove uma entrada de um diretório
- [ldap\_add()](function.ldap-add.md) - Adiciona entradas ao diretório LDAP

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
