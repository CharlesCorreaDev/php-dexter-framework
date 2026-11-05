# Retorna o ID do grupo real do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getgid.php

---

# posix\_getgid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getgid — Retorna o ID do grupo real do processo atual

### Descrição

function **posix\_getgid**(): [int](language.types.integer.md)

Retorna o ID numérico do grupo real do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do grupo real, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **posix\_getgid()****

Este exemplo exibe o ID do grupo real, antes e depois que o ID
do grupo efetivo tenha sido alterado.

```
<?php
echo 'Meu ID de grupo real é ' . posix_getgid(); // 20
posix_setegid(40);
echo 'Meu ID de grupo real é ' . posix_getgid(); // 20
echo 'Meu ID de grupo efetivo é ' . posix_getegid(); // 40
?>
```

### Veja também

- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo
- [posix\_getegid()](function.posix-getegid.md) - Retorna o ID do grupo efetivo do processo atual
- [posix\_setgid()](function.posix-setgid.md) - Define o GID do processo atual
- Página GETGID(2) do manual POSIX

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
