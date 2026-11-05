# Obtém o ID do processo PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getmypid.php

---

# getmypid

(PHP 4, PHP 5, PHP 7, PHP 8)

getmypid — Obtém o ID do processo PHP

### Descrição

function **getmypid**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o ID do processo atual do PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do processo atual do PHP, ou **`false`** em caso de erro.

### Notas

**Aviso**

IDs de processos não são únicos, portanto são uma fonte de entropia
fraca. Recomenda-se não confiar em PIDs
em contextos que dependam de segurança.

### Veja também

- [getmygid()](function.getmygid.md) - Obtém o GID do proprietário do script PHP
- [getmyuid()](function.getmyuid.md) - Obtém o UID do proprietário do script PHP
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
