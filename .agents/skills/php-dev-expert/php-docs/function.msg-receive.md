# Recebe uma mensagem de uma fila de mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.msg-receive.php

---

# msg\_receive

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

msg\_receive — Recebe uma mensagem de uma fila de mensagens

### Descrição

function **msg\_receive**(  
    [SysvMessageQueue](class.sysvmessagequeue.md) `$queue`,  
    [int](language.types.integer.md) `$desired_message_type`,  
    [int](language.types.integer.md) `&$received_message_type`,  
    [int](language.types.integer.md) `$max_message_size`,  
    [mixed](language.types.mixed.md) `&$message`,  
    [bool](language.types.boolean.md) `$unserialize` = **`true`**,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `&$error_code` = **`null`**  
): [bool](language.types.boolean.md)

**msg\_receive()** receberá a primeira mensagem da
fila `queue` especificada, do tipo especificado por
`desired_message_type`.

### Parâmetros

`queue`
:   A fila de mensagens.

`desired_message_type`
:   Se `desired_message_type` for 0, a mensagem do início
    da fila será retornada. Se `desired_message_type` for
    maior que 0, a primeira mensagem desse tipo será retornada.
    Se `desired_message_type` for menor que 0, a primeira
    mensagem na fila com um tipo menor ou igual ao
    valor absoluto de `desired_message_type` será lida.
    Se nenhuma mensagem corresponder aos critérios, seu script aguardará até que uma
    mensagem adequada chegue à fila. Pode-se impedir que o script bloqueie
    especificando **`MSG_IPC_NOWAIT`** no
    parâmetro `flags`.

`received_message_type`
:   O tipo de mensagem recebida será armazenado neste
    parâmetro.

`max_message_size`
:   O tamanho máximo da mensagem a ser aceita é especificado pelo
    `max_message_size`; se a mensagem na fila for maior
    que esse tamanho, a função falhará (a menos que se defina
    `flags` conforme descrito abaixo).

`message`
:   A mensagem recebida será armazenada em `message`,
    a menos que tenham ocorridos erros no recebimento da mensagem.

`unserialize`
:   Se definido como
    **`true`**, a mensagem será tratada como se tivesse sido serializada usando o
    mesmo mecanismo do módulo de sessão. A mensagem será desserializada
    e então retornada ao script. Isso permite que se receba facilmente
    arrays ou estruturas de objetos complexas de outros scripts PHP, ou se
    estiver sendo usado o serializador WDDX, de qualquer fonte compatível com WDDX.

    Se `unserialize` for **`false`**, a mensagem será
    retornada como uma string binária segura.

`flags`
:   O parâmetro opcional `flags` permite que sejam passados sinalizadores para a
    chamada de sistema msgrcv de baixo nível. O padrão é 0, mas pode-se especificar um
    ou mais dos seguintes valores (adicionando-os ou usando OR).

    **Valores de sinalizadores para msg\_receive**

    |  |  |
    | --- | --- |
    | **`MSG_IPC_NOWAIT`** | Se não houver mensagens de `desired_message_type`, retorna imediatamente e não espera. A função falhará e retornará um valor inteiro correspondente a **`MSG_ENOMSG`**. |
    | **`MSG_EXCEPT`** | Usar este sinalizador em combinação com um `desired_message_type` maior que 0 fará com que a função receba a primeira mensagem que não seja igual a `desired_message_type`. |
    | **`MSG_NOERROR`** | Se a mensagem for maior que `max_message_size`, definir este sinalizador truncará a mensagem para `max_message_size` e não sinalizará um erro. |

`error_code`
:   Se a função falhar, o parâmetro opcional `error_code`
    será definido como o valor da variável "errno" do sistema.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

Após a conclusão bem-sucedida, a estrutura de dados da fila de mensagens é atualizada
da seguinte forma: `msg_lrpid` é definido como o ID do
processo do processo chamador, `msg_qnum` é decrementado em 1 e
`msg_rtime` é definido como a hora atual.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `queue` espera uma instância de [SysvMessageQueue](class.sysvmessagequeue.md) agora; anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [msg\_remove\_queue()](function.msg-remove-queue.md) - Destrói uma fila de mensagens
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
