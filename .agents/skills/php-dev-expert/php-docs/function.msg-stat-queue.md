# Retorna informações da estrutura de dados da fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-stat-queue.php

---

# msg\_stat\_queue

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_stat\_queue — Retorna informações da estrutura de dados da fila de mensagens

### Descrição

function **msg\_stat\_queue**([SysvMessageQueue](class.sysvmessagequeue.md) `$queue`): [array](language.types.array.md)|[false](language.types.singleton.md)

**msg\_stat\_queue()** retorna os metadados da fila de mensagens
para a fila de mensagens especificada por `queue`.
Isso é útil, por exemplo, para determinar qual processo enviou a mensagem
que acabou de receber.

### Parâmetros

`queue`
:   A fila de mensagens.

### Valor Retornado

Em caso de sucesso, o valor de retorno é um array cujas chaves e valores têm os seguintes
significados:

**Array structure for msg\_stat\_queue**

|  |  |
| --- | --- |
| `msg_perm.uid` | O uid do proprietário da fila. |
| `msg_perm.gid` | O gid do proprietário da fila. |
| `msg_perm.mode` | O modo de acesso ao arquivo da fila. |
| `msg_stime` | O horário em que a última mensagem foi enviada para a fila. |
| `msg_rtime` | O horário em que a última mensagem foi recebida da fila. |
| `msg_ctime` | O horário em que a fila foi alterada pela última vez. |
| `msg_qnum` | O número de mensagens aguardando para serem lidas na fila. |
| `msg_qbytes` | O número máximo de bytes permitidos em uma fila de mensagens. No Linux, este valor pode ser lido e modificado via /proc/sys/kernel/msgmnb. |
| `msg_lspid` | O pid do processo que enviou a última mensagem para a fila. |
| `msg_lrpid` | O pid do processo que recebeu a última mensagem da fila. |

Retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `queue` espera uma instância de [SysvMessageQueue](class.sysvmessagequeue.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
- [msg\_receive()](function.msg-receive.md) - Recebe uma mensagem de uma fila de mensagens
- [msg\_get\_queue()](function.msg-get-queue.md) - Cria ou anexa a uma fila de mensagens
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
