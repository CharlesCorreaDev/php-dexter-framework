# Obtém o GID do proprietário do script PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getmygid.php

---

# getmygid

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

getmygid — Obtém o GID do proprietário do script PHP

### Descrição

function **getmygid**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o ID do grupo do script atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do grupo do script atual, ou **`false`** em caso de erro.

### Veja também

- [getmyuid()](function.getmyuid.md) - Obtém o UID do proprietário do script PHP
- [getmypid()](function.getmypid.md) - Obtém o ID do processo PHP
- [get\_current\_user()](function.get-current-user.md) - Obtém o nome do proprietário do script PHP atual
- [getmyinode()](function.getmyinode.md) - Obtém o inode do script atual
- [getlastmod()](function.getlastmod.md) - Obtém o horário da última modificação na página

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
