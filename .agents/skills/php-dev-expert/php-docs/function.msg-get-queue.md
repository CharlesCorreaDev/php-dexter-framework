# Cria ou anexa a uma fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-get-queue.php

---

# msg\_get\_queue

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_get\_queue — Cria ou anexa a uma fila de mensagens

### Descrição

function **msg\_get\_queue**([int](language.types.integer.md) `$key`, [int](language.types.integer.md) `$permissions` = 0666): [SysvMessageQueue](class.sysvmessagequeue.md)|[false](language.types.singleton.md)

**msg\_get\_queue()** retorna um ID que pode ser usado para
acessar a fila de mensagens do System V com a
chave `key` fornecida. A primeira chamada cria a fila de mensagens com
as permissões opcionais em `permissions`.
Uma segunda chamada para **msg\_get\_queue()** para a mesma
`key` retornará um identificador de fila de mensagens
diferente, mas ambos os identificadores acessam a mesma fila de mensagens
subjacente.

### Parâmetros

`key`
:   ID numérico da fila de mensagens

`permissions`
:   Permissões da fila. O padrão é 0666. Se a fila de mensagens já
    existir, o parâmetro `permissions` será ignorado.

### Valor Retornado

Retorna a instância de [SysvMessageQueue](class.sysvmessagequeue.md) que pode ser usada para acessar a fila de mensagens do System V,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância de [SysvMessageQueue](class.sysvmessagequeue.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
- [msg\_receive()](function.msg-receive.md) - Recebe uma mensagem de uma fila de mensagens
- [msg\_send()](function.msg-send.md) - Envia uma mensagem para uma fila de mensagens
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
