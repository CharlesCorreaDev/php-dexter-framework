# Obtém o ID de grupo de processo para controle de tarefa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getpgid.php

---

# posix\_getpgid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getpgid — Obtém o ID de grupo de processo para controle de tarefa

### Descrição

function **posix\_getpgid**([int](language.types.integer.md) `$process_id`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o identificador de grupo do processo
`process_id` ou **`false`** em caso de falha.

### Parâmetros

`process_id`
:   O ID do processo.

### Valor Retornado

Retorna o identificador, como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getpgid()****

```
<?php
$pid = posix_getppid();
echo posix_getpgid($pid); // 35
?>
```

### Notas

> **Nota**:
>
> Esta não é uma função POSIX mas é comum em sistemas BSD e
> System V. Se o sistema não suportar esta função, ela não
> será incluída no momento da compilação. Isto pode ser verificado com
> [function\_exists()](function.function-exists.md).

### Veja também

- [posix\_getppid()](function.posix-getppid.md) - Retorna o identificador do processo pai
- Página SETPGID(2) do manual

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
