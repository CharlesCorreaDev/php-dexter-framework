# Define informações na estrutura de dados da fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-set-queue.php

---

# msg\_set\_queue

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_set\_queue — Define informações na estrutura de dados da fila de mensagens

### Descrição

function **msg\_set\_queue**([SysvMessageQueue](class.sysvmessagequeue.md) `$queue`, [array](language.types.array.md) `$data`): [bool](language.types.boolean.md)

**msg\_set\_queue()** permite que sejam alterados os valores dos campos
msg\_perm.uid, msg\_perm.gid, msg\_perm.mode e msg\_qbytes da
estrutura de dados da fila de mensagens subjacente.

Alterar a estrutura de dados exigirá que o PHP esteja sendo executado como o mesmo
usuário que criou a fila, que seja o proprietário da fila (conforme determinado pelos
campos msg\_perm.xxx existentes) ou que esteja sendo executado com privilégios de root.
Privilégios de root são necessários para elevar os valores de msg\_qbytes acima do
limite definido pelo sistema.

### Parâmetros

`queue`
:   A fila de mensagens.

`data`
:   Os valores necessários são especificados definindo o valor das chaves
    necessárias no array `data`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `queue` espera uma instância de [SysvMessageQueue](class.sysvmessagequeue.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
- [msg\_receive()](function.msg-receive.md) - Recebe uma mensagem de uma fila de mensagens
- [msg\_stat\_queue()](function.msg-stat-queue.md) - Retorna informações da estrutura de dados da fila de mensagens
- [msg\_get\_queue()](function.msg-get-queue.md) - Cria ou anexa a uma fila de mensagens

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
