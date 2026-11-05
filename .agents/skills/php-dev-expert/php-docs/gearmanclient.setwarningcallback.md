# Define uma função de retorno para alertas de trabalhadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.setwarningcallback.php

---

# GearmanClient::setWarningCallback

(PECL gearman >= 0.5.0)

GearmanClient::setWarningCallback — Define uma função de retorno para alertas de trabalhadores

### Descrição

public function **GearmanClient::setWarningCallback**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Define uma função de retorno a ser chamada quando um trabalhador envia um alerta.

> **Nota**:
>
> A função de retorno só será chamada para tarefas que forem adicionadas (por exemplo, chamando [GearmanClient::addTask()](gearmanclient.addtask.md))
> após a chamada a este método.

### Parâmetros

`callback`
:   Uma função ou um método a ser chamado.
    Deve retornar um [valor de retorno Gearman](gearman.constants.md) válido.

    Se nenhuma declaração de retorno estiver presente, o padrão será **`GEARMAN_SUCCESS`**.

    function callback([GearmanTask](class.gearmantask.md) `$task`, [mixed](language.types.mixed.md) `$context`): [int](language.types.integer.md)

    `task`
    :   A tarefa para a qual esta função é chamada.

    `context`
    :   Qualquer coisa que foi passada para [GearmanClient::addTask()](gearmanclient.addtask.md) (ou método equivalente) como `context`o.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanClient::setDataCallback()](gearmanclient.setdatacallback.md) - Define a função de retorno quando há um pacote de dados para uma tarefa
- [GearmanClient::setCompleteCallback()](gearmanclient.setcompletecallback.md) - Define uma função a ser chamada na conclusão da tarefa
- [GearmanClient::setCreatedCallback()](gearmanclient.setcreatedcallback.md) - Define uma função de retorno para quando uma tarefa é enfileirada
- [GearmanClient::setExceptionCallback()](gearmanclient.setexceptioncallback.md) - Define uma função de retorno para exceções de trabalhador
- [GearmanClient::setFailCallback()](gearmanclient.setfailcallback.md) - Define a função de retorno para falha de tarefa
- [GearmanClient::setStatusCallback()](gearmanclient.setstatuscallback.md) - Define uma função de retorno para coletar o status da tarefa
- [GearmanClient::setWorkloadCallback()](gearmanclient.setworkloadcallback.md) - Define uma função de retorno para aceitar atualizações de dados incrementais

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
