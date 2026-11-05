# Obtém o próximo atributo no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-next-attribute.php

---

# ldap\_next\_attribute

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_next\_attribute — Obtém o próximo atributo no resultado

### Descrição

function **ldap\_next\_attribute**([LDAP\Connection](class.ldap-connection.md) `$ldap`, LDAP\ResultEntry `$entry`): [string](language.types.string.md)|[false](language.types.singleton.md)

Recupera os atributos em uma entrada. A primeira chamada a
**ldap\_next\_attribute()** é feita com a entrada contida no parâmetro
`entry` retornada de
[ldap\_first\_attribute()](function.ldap-first-attribute.md).

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`entry`
:   Uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md).

### Valor Retornado

Retorna o próximo atributo em uma entrada em caso de sucesso ou **`false`** em
caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `entry` agora espera uma instância de [LDAP\ResultEntry](class.ldap-result-entry.md); anteriormente, um [resource](language.types.resource.md) `ldap result entry` válido era esperado. |
| 8.0.0 | O parâmetro não utilizado `ber_identifier` não é mais aceito. |

### Veja também

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
