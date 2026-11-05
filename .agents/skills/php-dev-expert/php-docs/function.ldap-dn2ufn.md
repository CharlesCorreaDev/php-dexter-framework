# Converte DN para um formato mais legível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-dn2ufn.php

---

# ldap\_dn2ufn

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_dn2ufn — Converte DN para um formato mais legível

### Descrição

function **ldap\_dn2ufn**([string](language.types.string.md) `$dn`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converte o `dn` especificado em um formato mais
amigável, removendo os nomes de tipos.

### Parâmetros

`dn`
:   O nome distinto de uma entidade LDAP.

### Valor Retornado

Retorna o nome legível, ou **`false`** em caso de falha.

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
