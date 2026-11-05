# Retorna o identificador do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getpid.php

---

# posix\_getpid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getpid — Retorna o identificador do processo atual

### Descrição

function **posix\_getpid**(): [int](language.types.integer.md)

Retorna o identificador do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o identificador, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getpid()****

```
<?php
echo posix_getpid(); // 8805
?>
```

### Veja também

- [posix\_kill()](function.posix-kill.md) - Envia um sinal para um processo
- Página GETPID(2) do manual POSIX

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
