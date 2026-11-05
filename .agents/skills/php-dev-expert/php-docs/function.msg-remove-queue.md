# Destrói uma fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-remove-queue.php

---

# msg\_remove\_queue

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_remove\_queue — Destrói uma fila de mensagens

### Descrição

function **msg\_remove\_queue**([SysvMessageQueue](class.sysvmessagequeue.md) `$queue`): [bool](language.types.boolean.md)

**msg\_remove\_queue()** destrói a fila de mensagens especificada
pelo `queue`. Use esta função somente quando todos
os processos tiverem terminado de trabalhar com a fila de mensagens e você precisar
liberar os recursos do sistema mantidos por ela.

### Parâmetros

`queue`
:   A fila de mensagens.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `queue` espera uma instância de [SysvMessageQueue](class.sysvmessagequeue.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [msg\_get\_queue()](function.msg-get-queue.md) - Cria ou anexa a uma fila de mensagens
- [msg\_receive()](function.msg-receive.md) - Recebe uma mensagem de uma fila de mensagens
- [msg\_stat\_queue()](function.msg-stat-queue.md) - Retorna informações da estrutura de dados da fila de mensagens
- [msg\_set\_queue()](function.msg-set-queue.md) - Define informações na estrutura de dados da fila de mensagens

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
