# Retorna o primeiro atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-first-attribute.php

---

# ldap\_first\_attribute

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_first\_attribute — Retorna o primeiro atributo

### Descrição

function **ldap\_first\_attribute**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o primeiro atributo na entrada fornecida. Atributos remanescentes são
obtidos chamando-se [ldap\_next\_attribute()](function.ldap-next-attribute.md) suceessivamente.

De forma similar à leitura de entradas, atributos também são lidos um a um de uma
entrada em particular.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

### Valor Retornado

Retorna o primeiro atributo na entrada em caso de sucesso ou **`false`** em
caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |
| 8.0.0 | O terceito parâmetro não utilizado, `ber_identifier`, não é mais aceito. |

### Veja também

- [ldap\_next\_attribute()](function.ldap-next-attribute.md) - Obtém o próximo atributo no resultado
- [ldap\_get\_attributes()](function.ldap-get-attributes.md) - Obtém atributos de uma entrada de resultado de pesquisa

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
