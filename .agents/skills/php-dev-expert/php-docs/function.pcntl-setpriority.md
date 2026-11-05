# Altera a prioridade de qualquer processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-setpriority.php

---

# pcntl\_setpriority

(PHP 5, PHP 7, PHP 8)

pcntl\_setpriority — Altera a prioridade de qualquer processo

### Descrição

function **pcntl\_setpriority**([int](language.types.integer.md) `$priority`, [?](language.types.null.md)[int](language.types.integer.md) `$process_id` = **`null`**, [int](language.types.integer.md) `$mode` = **`PRIO_PROCESS`**): [bool](language.types.boolean.md)

**pcntl\_setpriority()** define a prioridade de
`process_id`.

### Parâmetros

`priority`
:   `priority` geralmente é um valor no intervalo
    `-20` a `20`. A prioridade padrão
    é `0`, enquanto um valor numérico menor resulta em um agendamento
    mais favorável. Como os níveis de prioridade podem diferir entre
    tipos de sistema e versões de kernel, consulte a página de manual setpriority(2)
    do seu sistema para obter detalhes específicos.

`process_id`
:   Se **`null`**, o ID do processo atual é usado.

`mode`
:   Uma das constantes **`PRIO_PGRP`**, **`PRIO_USER`**,
    **`PRIO_PROCESS`**,
    **`PRIO_DARWIN_BG`** ou **`PRIO_DARWIN_THREAD`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `process_id` agora é anulável. |

### Veja também

- [pcntl\_getpriority()](function.pcntl-getpriority.md) - Obtém a prioridade de um processo
- **pcntl\_setpriority()**

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
