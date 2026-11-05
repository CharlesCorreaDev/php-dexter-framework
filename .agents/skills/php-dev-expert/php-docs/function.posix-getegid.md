# Retorna o ID do grupo efetivo do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getegid.php

---

# posix\_getegid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getegid — Retorna o ID do grupo efetivo do processo atual

### Descrição

function **posix\_getegid**(): [int](language.types.integer.md)

Retorna o ID numérico do grupo efetivo do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [int](language.types.integer.md) do ID do grupo efetivo.

### Examples

**Exemplo #1 Exemplo de **posix\_getegid()****

Este exemplo exibr o ID efetivo do grupo, após ser
alterado com [posix\_setegid()](function.posix-setegid.md).

```
<?php
echo 'Meu ID de grupo real é '.posix_getgid(); // 20
posix_setegid(40);
echo 'Meu ID de grupo real é '.posix_getgid(); // 20
echo 'Meu ID de grupo efetivo é '.posix_getegid(); // 40
?>
```

### Notas

**posix\_getegid()** é diferente de
[posix\_getgid()](function.posix-getgid.md) porque o ID de grupo efetivo pode ser alterado por
um processo usando [posix\_setegid()](function.posix-setegid.md).

### Veja também

- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo
- [posix\_getgid()](function.posix-getgid.md) - Retorna o ID do grupo real do processo atual
- [posix\_setgid()](function.posix-setgid.md) - Define o GID do processo atual

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
