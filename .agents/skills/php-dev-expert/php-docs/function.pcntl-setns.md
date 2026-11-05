# Reassocia o processo de chamada ao espaço de nomes de outro processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-setns.php

---

# pcntl\_setns

(PHP 8 >= 8.4.0)

pcntl\_setns — Reassocia o processo de chamada ao espaço de nomes de outro processo

### Descrição

function **pcntl\_setns**([?](language.types.null.md)[int](language.types.integer.md) `$process_id` = **`null`**, [int](language.types.integer.md) `$nstype` = **`CLONE_NEWNET`**): [bool](language.types.boolean.md)

Reassocia o processo de chamada a um namespace Linux do processo
especificado por `process_id`, usando um pidfd obtido
via `pidfd_open(2)` e `setns(2)`.

### Parâmetros

`process_id`
:   O ID do processo de destino ao qual se deseja ingressar.
    Se for **`null`**, o PID do próprio processo de chamada será usado.

`nstype`
:   O tipo de namespace ao qual reassociar. O padrão é:
    **`CLONE_NEWNET`** (namespace de rede).
    Os valores possíveis incluem **`CLONE_NEWNET`**,
    **`CLONE_NEWIPC`**,
    **`CLONE_NEWUTS`** e outros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [pcntl\_unshare()](function.pcntl-unshare.md) - Dissociar partes do contexto de execução do processo

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
