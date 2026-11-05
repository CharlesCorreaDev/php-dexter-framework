# Converte caracteres 8859 para caracteres t61

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-8859-to-t61.php

---

# ldap\_8859\_to\_t61

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

ldap\_8859\_to\_t61 — Converte caracteres 8859 para caracteres t61

### Descrição

function **ldap\_8859\_to\_t61**([string](language.types.string.md) `$value`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converte caracteres `ISO-8859` para caracteres
`t61`.

Esta função é útil quando é necessária comunicação com um servidor
`LDAPv2` antigo.

### Parâmetros

`value`
:   O texto a ser convertido.

### Valor Retornado

Retorna a conversão para `t61` do parâmetro
`value`, ou **`false`** em caso de falha.

### Veja também

- [ldap\_t61\_to\_8859()](function.ldap-t61-to-8859.md) - Traduz caracteres t61 para caracteres 8859

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
