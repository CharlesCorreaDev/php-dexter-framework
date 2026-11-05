# Obtém o horário da última modificação na página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getlastmod.php

---

# getlastmod

(PHP 4, PHP 5, PHP 7, PHP 8)

getlastmod — Obtém o horário da última modificação na página

### Descrição

function **getlastmod**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o horário da última modificação do script principal de execução.

Se o objetivo for obter o horário da última modificação de um
arquivo diferente, considere usar [filemtime()](function.filemtime.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo da última modificação na página atual. O valor é retornado como um
timestamp Unix, útil para usar com a função [date()](function.date.md).
Retorna **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **getlastmod()****

```
<?php
// mostra por exemplo 'Última Modificação: March 04 1998 20:43:59.'
echo "Última Modificação: " . date ("F d Y H:i:s.", getlastmod());
?>
```

### Veja também

- [date()](function.date.md) - Formata um timestamp Unix
- [getmyuid()](function.getmyuid.md) - Obtém o UID do proprietário do script PHP
- [getmygid()](function.getmygid.md) - Obtém o GID do proprietário do script PHP
- [get\_current\_user()](function.get-current-user.md) - Obtém o nome do proprietário do script PHP atual
- [getmyinode()](function.getmyinode.md) - Obtém o inode do script atual
- [getmypid()](function.getmypid.md) - Obtém o ID do processo PHP
- [filemtime()](function.filemtime.md) - Obtém o horário de modificação do arquivo

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
