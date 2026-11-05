# Obtém todos os valores binários de uma entrada de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-get-values-len.php

---

# ldap\_get\_values\_len

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_get\_values\_len — Obtém todos os valores binários de uma entrada de resultado

### Descrição

function **ldap\_get\_values\_len**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`, [string](language.types.string.md) `$attribute`): [array](language.types.array.md)|[false](language.types.singleton.md)

Lê todos os valores do atributo na entrada do resultado.

Esta função é usada exatamente como [ldap\_get\_values()](function.ldap-get-values.md)
exceto que ela lida com dados binários e não com dados em string.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

`attribute`

### Valor Retornado

Retorna um array de valores para o atributo em caso de sucesso ou **`false`** em
caso de erro. Valores individuais são acessados por índice inteiro no array. O
primeiro índice é 0. O número de valores pode ser encontrado indexando-se "count"
no array de resultados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |

### Veja também

- [ldap\_get\_values()](function.ldap-get-values.md) - Obtém todos os valores de uma entrada de resultado

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
