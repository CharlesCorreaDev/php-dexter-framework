# Recupera o número do erro definido pela última função posix que falhou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-get-last-error.php

---

# posix\_get\_last\_error

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

posix\_get\_last\_error — Recupera o número do erro definido pela última função posix que falhou

### Descrição

function **posix\_get\_last\_error**(): [int](language.types.integer.md)

Recupera o número do erro definido pela última função posix que falhou.
A mensagem de erro do sistema associada a este número pode ser verificada com
[posix\_strerror()](function.posix-strerror.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número do erro definido pela última função posix que
falhou. Se não tiver ocorrido erro, retorna 0.

### Examples

**Exemplo #1 Exemplo de **posix\_get\_last\_error()****

Este exemplo tenta eliminar um ID de processo com problema, que definirá o
último erro. Em seguida, o último número de erro é exibido.

```
<?php
posix_kill(999459,SIGKILL);
echo 'O erro retornado foi ' . posix_get_last_error(); // O erro retornado foi ___
?>
```

### Veja também

- [posix\_strerror()](function.posix-strerror.md) - Recupera a mensagem de erro do sistema associada ao número de erro fornecido

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
