# Obtém o nome do proprietário do script PHP atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-current-user.php

---

# get\_current\_user

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_current\_user — Obtém o nome do proprietário do script PHP atual

### Descrição

function **get\_current\_user**(): [string](language.types.string.md)

Obtém o nome do proprietário do script PHP atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome de usuário como uma string.

### Examples

**Exemplo #1 Exemplo de **get\_current\_user()****

```
<?php
echo 'Proprietário do script atual: ' . get_current_user();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Proprietário do script atual: SYSTEM
```

### Veja também

- [getmyuid()](function.getmyuid.md) - Obtém o UID do proprietário do script PHP
- [getmygid()](function.getmygid.md) - Obtém o GID do proprietário do script PHP
- [getmypid()](function.getmypid.md) - Obtém o ID do processo PHP
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
