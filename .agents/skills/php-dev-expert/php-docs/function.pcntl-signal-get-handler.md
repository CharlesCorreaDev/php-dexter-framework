# Obtém o manipulador atual para o sinal especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-signal-get-handler.php

---

# pcntl\_signal\_get\_handler

(PHP 7 >= 7.1.0, PHP 8)

pcntl\_signal\_get\_handler — Obtém o manipulador atual para o sinal especificado

### Descrição

function **pcntl\_signal\_get\_handler**([int](language.types.integer.md) `$signal`): [callable](language.types.callable.md)|[int](language.types.integer.md)

A função **pcntl\_signal\_get\_handler()** obterá o manipulador atual para o `signal` especificado.

### Parâmetros

`signal`
:   The signal number.

### Valor Retornado

Esta função pode retornar um valor inteiro que se refere a **`SIG_DFL`** ou **`SIG_IGN`**.
Se um manipulador personalizado tiver sido definido, esse [callable](language.types.callable.md) será retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | **pcntl\_signal\_get\_handler()** foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **pcntl\_signal\_get\_handler()****

```
<?php
var_dump(pcntl_signal_get_handler(SIGUSR1)); // Exibe: int(0)

function pcntl_test($signo) {}
pcntl_signal(SIGUSR1, 'pcntl_test');
var_dump(pcntl_signal_get_handler(SIGUSR1)); // Exibe: string(10) "pcntl_test"

pcntl_signal(SIGUSR1, SIG_DFL);
var_dump(pcntl_signal_get_handler(SIGUSR1)); // Exibe: int(0)

pcntl_signal(SIGUSR1, SIG_IGN);
var_dump(pcntl_signal_get_handler(SIGUSR1)); // Exibe: int(1)
?>
```

### Veja também

- [pcntl\_signal()](function.pcntl-signal.md) - Instala um manipulador de sinal

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
