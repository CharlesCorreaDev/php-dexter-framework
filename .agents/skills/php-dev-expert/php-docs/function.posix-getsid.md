# Obtém o ID da sessão atual do processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getsid.php

---

# posix\_getsid

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getsid — Obtém o ID da sessão atual do processo

### Descrição

function **posix\_getsid**([int](language.types.integer.md) `$process_id`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o ID da sessão do processo `process_id`.
O ID da sessão de um processo é o ID do grupo de processos do líder da sessão.

### Parâmetros

`process_id`
:   O identificador do processo. Se definido como 0, o processo atual é
    assumido. Se um `process_id` inválido for
    especificado, então **`false`** é retornado e um erro é definido que
    pode ser verificado com [posix\_get\_last\_error()](function.posix-get-last-error.md).

### Valor Retornado

Retorna o identificador, como um [int](language.types.integer.md), ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getsid()****

```
<?php
$pid = posix_getpid();
echo posix_getsid($pid); //8805
?>
```

### Veja também

- [posix\_getpgid()](function.posix-getpgid.md) - Obtém o ID de grupo de processo para controle de tarefa
- [posix\_setsid()](function.posix-setsid.md) - Torna o processo atual um líder de sessão
- Página GETSID(2) do manual POSIX

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
