# Retorna o ID do usuário efetivo do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-geteuid.php

---

# posix\_geteuid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_geteuid — Retorna o ID do usuário efetivo do processo atual

### Descrição

function **posix\_geteuid**(): [int](language.types.integer.md)

Retorna o ID numérico do usuário efetivo do processo atual. Consulte
também [posix\_getpwuid()](function.posix-getpwuid.md) para informação sobre como
converter este número em um nome de usuário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do usuário, como um [int](language.types.integer.md)

### Examples

**Exemplo #1 Exemplo de **posix\_geteuid()****

Este exemplo exibe o ID do usuário atual e depois define o
ID do usuário efetivo para um valor diferente usando
[posix\_seteuid()](function.posix-seteuid.md), e em seguida exibe a diferença entre
o ID real e o ID efetivo.

```
<?php
echo posix_getuid() . "\n"; // 10001
echo posix_geteuid() . "\n"; // 10001
posix_seteuid(10000);
echo posix_getuid() . "\n"; // 10001
echo posix_geteuid() . "\n"; // 10000
?>
```

### Veja também

- [posix\_getpwuid()](function.posix-getpwuid.md) - Retorna informações sobre um usuário por ID de usuário
- [posix\_getuid()](function.posix-getuid.md) - Retorna o ID do usuário real do processo atual
- [posix\_setuid()](function.posix-setuid.md) - Define o UID do processo atual
- Página GETEUID(2) do manual POSIX

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
