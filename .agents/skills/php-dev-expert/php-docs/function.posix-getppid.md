# Retorna o identificador do processo pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getppid.php

---

# posix\_getppid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getppid — Retorna o identificador do processo pai

### Descrição

function **posix\_getppid**(): [int](language.types.integer.md)

Retorna o identificador do processo pai
do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o identificador, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getppid()****

```
<?php
echo posix_getppid(); // 8259
?>
```

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
