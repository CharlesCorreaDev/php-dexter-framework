# Recupera a mensagem de erro do sistema associada ao número de erro fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-strerror.php

---

# posix\_strerror

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

posix\_strerror — Recupera a mensagem de erro do sistema associada ao número de erro fornecido

### Descrição

function **posix\_strerror**([int](language.types.integer.md) `$error_code`): [string](language.types.string.md)

Retorna a mensagem de erro do sistema POSIX associada ao
`error_code` fornecido. Pode-se obter o
parâmetro `error_code` chamando
[posix\_get\_last\_error()](function.posix-get-last-error.md).

### Parâmetros

`error_code`
:   Um número de erro POSIX, retornado por
    [posix\_get\_last\_error()](function.posix-get-last-error.md). Se definido como 0,
    a string "Success" será retornada.

### Valor Retornado

Retorna a mensagem de erro, como uma string.

### Examples

**Exemplo #1 Exemplo de **posix\_strerror()****

Este exemplo tentará encerrar um processo que não
existe e, em seguida, exibirá a mensagem de erro correspondente.

```
<?php
posix_kill(50,SIGKILL);
echo posix_strerror(posix_get_last_error()) . "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
No such process
```

### Veja também

- [posix\_get\_last\_error()](function.posix-get-last-error.md) - Recupera o número do erro definido pela última função posix que falhou

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
