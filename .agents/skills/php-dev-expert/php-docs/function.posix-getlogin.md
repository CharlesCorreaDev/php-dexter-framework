# Retorna o login

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getlogin.php

---

# posix\_getlogin

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getlogin — Retorna o login

### Descrição

function **posix\_getlogin**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o login do usuário proprietário do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o login do usuário, como uma [string](language.types.string.md), ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getlogin()****

```
<?php
echo posix_getlogin(); // apache
?>
```

### Veja também

- [posix\_getpwnam()](function.posix-getpwnam.md) - Retorna informações sobre um usuário por nome de usuário
- Página GETLOGIN(3) do manual POSIX

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
