# Retorna o ID do usuário real do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getuid.php

---

# posix\_getuid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getuid — Retorna o ID do usuário real do processo atual

### Descrição

function **posix\_getuid**(): [int](language.types.integer.md)

Retorna o ID numérico real do usuário do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do usuário, como um [int](language.types.integer.md)

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getuid()****

```
<?php
echo posix_getuid(); //10000
?>
```

### Veja também

- [posix\_getpwuid()](function.posix-getpwuid.md) - Retorna informações sobre um usuário por ID de usuário
- Página GETUID(2) do manual POSIX

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
