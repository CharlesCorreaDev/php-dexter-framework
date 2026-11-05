# Verifica se existe uma fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-queue-exists.php

---

# msg\_queue\_exists

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

msg\_queue\_exists — Verifica se existe uma fila de mensagens

### Descrição

function **msg\_queue\_exists**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Verifica se a fila de mensagens `key` existe.

### Parâmetros

`key`
:   Chave da fila.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
- [msg\_receive()](function.msg-receive.md) - Recebe uma mensagem de uma fila de mensagens
- [msg\_stat\_queue()](function.msg-stat-queue.md) - Retorna informações da estrutura de dados da fila de mensagens

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
