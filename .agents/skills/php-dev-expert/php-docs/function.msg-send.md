# Envia uma mensagem para uma fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-send.php

---

# msg\_send

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_send — Envia uma mensagem para uma fila de mensagens

### Descrição

function **msg\_send**(  
    [SysvMessageQueue](class.sysvmessagequeue.md) `$queue`,  
    [int](language.types.integer.md) `$message_type`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md) `$message`,  
    [bool](language.types.boolean.md) `$serialize` = **`true`**,  
    [bool](language.types.boolean.md) `$blocking` = **`true`**,  
    [int](language.types.integer.md) `&$error_code` = **`null`**  
): [bool](language.types.boolean.md)

**msg\_send()** envia a mensagem `message` do tipo
`message_type` (que PRECISA ser maior que 0) para
a fila de mensagens especificada por `queue`.

### Parâmetros

`queue`
:   A fila de mensagens.

`message_type`
:   O tipo da mensagem (PRECISA ser maior que 0).

`message`
:   O corpo da mensagem.

    > **Nota**:
    >
    > Se `serialize` definido como **`false`** for fornecido,
    > PRECISA ser do tipo: [string](language.types.string.md), [int](language.types.integer.md), [float](language.types.float.md)
    > ou [bool](language.types.boolean.md). Caso contrário, um aviso será emitido.

`serialize`
:   O parâmetro opcional `serialize` controla como a
    mensagem do parâmetro `message` é enviada. `serialize`
    tem como padrão **`true`**, o que significa que a mensagem em `message` é
    serializada usando o mesmo mecanismo do módulo de sessão antes de ser
    enviada para a fila. Isso permite que arrays e objetos complexos sejam enviados para
    outros scripts PHP ou, se estiver sendo usado o serializador WDDX, para qualquer cliente
    compatível com WDDX.

`blocking`
:   Se a mensagem for muito grande para caber na fila, o script aguardará
    até que outro processo leia as mensagens da fila e libere espaço
    suficiente para que a mensagem seja enviada.
    Isso é chamado de bloqueio; pode-se evitar o bloqueio definindo o
    parâmetro opcional `blocking` como **`false`**, nesse
    caso, **msg\_send()** retornará imediatamente **`false`** se a
    mensagem for muito grande para a fila, e definirá o
    `error_code` opcional como **`MSG_EAGAIN`**,
    indicando que deve-se tentar enviar a mensagem novamente um pouco
    mais tarde.

`error_code`
:   Se a função falhar, o código de erro opcional será definido como o valor da variável errno do sistema.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Após a conclusão bem-sucedida, a estrutura de dados da fila de mensagens é atualizada da
seguinte forma: `msg_lspid` é definido como o ID do
processo do processo chamador, `msg_qnum` é incrementado em 1 e
`msg_stime` é definido como a hora atual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `queue` espera uma instância de [SysvMessageQueue](class.sysvmessagequeue.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
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
