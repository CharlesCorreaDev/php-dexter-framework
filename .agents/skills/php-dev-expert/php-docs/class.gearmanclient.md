# A classe GearmanClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gearmanclient.php

---

# A classe GearmanClient

(PECL gearman >= 0.5.0)

## Introdução

Representa uma classe para conectar-se a um servidor de trabalho Gearman e fazer solicitações para executar
alguma função em dados fornecidos. A função executada deve ser uma registrada por um trabalhador Gearman
e os dados passados ​​são opacos para o servidor de trabalho.

## Resumo da classe

class ****GearmanClient****
{

/\* Métodos \*/

public function [\_\_construct](gearmanclient.construct.md)()

public function [addOptions](gearmanclient.addoptions.md)([int](language.types.integer.md) `$option`): [bool](language.types.boolean.md)

public function [addServer](gearmanclient.addserver.md)([string](language.types.string.md) `$host` = **`null`**, [int](language.types.integer.md) `$port` = 0, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

public function [addServers](gearmanclient.addservers.md)([string](language.types.string.md) `$servers` = **`null`**, [bool](language.types.boolean.md) `$setupExceptionHandler` = **`true`**): [bool](language.types.boolean.md)

public function [addTask](gearmanclient.addtask.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskBackground](gearmanclient.addtaskbackground.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskHigh](gearmanclient.addtaskhigh.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskHighBackground](gearmanclient.addtaskhighbackground.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskLow](gearmanclient.addtasklow.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskLowBackground](gearmanclient.addtasklowbackground.md)(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [addTaskStatus](gearmanclient.addtaskstatus.md)([string](language.types.string.md) `$job_handle`, [mixed](language.types.mixed.md) `$context` = **`null`**): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

public function [clearCallbacks](gearmanclient.clearcallbacks.md)(): [bool](language.types.boolean.md)

public function [context](gearmanclient.context.md)(): [string](language.types.string.md)

public function [doBackground](gearmanclient.dobackground.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doHigh](gearmanclient.dohigh.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doHighBackground](gearmanclient.dohighbackground.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doJobHandle](gearmanclient.dojobhandle.md)(): [string](language.types.string.md)

public function [doLow](gearmanclient.dolow.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doLowBackground](gearmanclient.dolowbackground.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doNormal](gearmanclient.donormal.md)([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

public function [doStatus](gearmanclient.dostatus.md)(): [array](language.types.array.md)

public function [error](gearmanclient.error.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getErrno](gearmanclient.geterrno.md)(): [int](language.types.integer.md)

public function [jobStatus](gearmanclient.jobstatus.md)([string](language.types.string.md) `$job_handle`): [array](language.types.array.md)

public function [ping](gearmanclient.ping.md)([string](language.types.string.md) `$workload`): [bool](language.types.boolean.md)

public function [removeOptions](gearmanclient.removeoptions.md)([int](language.types.integer.md) `$option`): [bool](language.types.boolean.md)

public function [returnCode](gearmanclient.returncode.md)(): [int](language.types.integer.md)

public function [runTasks](gearmanclient.runtasks.md)(): [bool](language.types.boolean.md)

public function [setCompleteCallback](gearmanclient.setcompletecallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setContext](gearmanclient.setcontext.md)([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [setCreatedCallback](gearmanclient.setcreatedcallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setDataCallback](gearmanclient.setdatacallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setExceptionCallback](gearmanclient.setexceptioncallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setFailCallback](gearmanclient.setfailcallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setOptions](gearmanclient.setoptions.md)([int](language.types.integer.md) `$option`): [bool](language.types.boolean.md)

public function [setStatusCallback](gearmanclient.setstatuscallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setTimeout](gearmanclient.settimeout.md)([int](language.types.integer.md) `$timeout`): [bool](language.types.boolean.md)

public function [setWarningCallback](gearmanclient.setwarningcallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [setWorkloadCallback](gearmanclient.setworkloadcallback.md)([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [timeout](gearmanclient.timeout.md)(): [int](language.types.integer.md)

public function [wait](gearmanclient.wait.md)(): [bool](language.types.boolean.md)

}

## Índice

- [GearmanClient::addOptions](gearmanclient.addoptions.md) — Adiciona opções do cliente
- [GearmanClient::addServer](gearmanclient.addserver.md) — Adiciona um servidor de tarefa ao cliente
- [GearmanClient::addServers](gearmanclient.addservers.md) — Adiciona uma lista de servidores de tarefa ao cliente
- [GearmanClient::addTask](gearmanclient.addtask.md) — Adiciona uma tarefa para ser executada em paralelo
- [GearmanClient::addTaskBackground](gearmanclient.addtaskbackground.md) — Adiciona uma tarefa em segundo plano para ser executada em paralelo
- [GearmanClient::addTaskHigh](gearmanclient.addtaskhigh.md) — Adiciona uma tarefa de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskHighBackground](gearmanclient.addtaskhighbackground.md) — Adiciona uma tarefa de segundo plano de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskLow](gearmanclient.addtasklow.md) — Adiciona uma tarefa de baixa prioridade para ser executada em paralelo
- [GearmanClient::addTaskLowBackground](gearmanclient.addtasklowbackground.md) — Adiciona uma tarefa em segundo plano de baixa prioridade para ser executada em paralelo
- [GearmanClient::addTaskStatus](gearmanclient.addtaskstatus.md) — Adiciona uma tarefa para obter status
- [GearmanClient::clearCallbacks](gearmanclient.clearcallbacks.md) — Limpa todas as funções de retorno de tarefa
- [GearmanClient::clone](gearmanclient.clone.md) — Cria uma cópia de um objeto GearmanClient
- [GearmanClient::\_\_construct](gearmanclient.construct.md) — Cria uma instância GearmanClient
- [GearmanClient::context](gearmanclient.context.md) — Obtém o contexto da aplicação
- [GearmanClient::data](gearmanclient.data.md) — Obtém os dados do aplicativo (descontinuado)
- [GearmanClient::do](gearmanclient.do.md) — Executa uma única tarefa e retorna um resultado (descontinuado)
- [GearmanClient::doBackground](gearmanclient.dobackground.md) — Executa uma tarefa em segundo plano
- [GearmanClient::doHigh](gearmanclient.dohigh.md) — Executa uma única tarefa de alta prioridade
- [GearmanClient::doHighBackground](gearmanclient.dohighbackground.md) — Executa uma tarefa de alta prioridade em segundo plano
- [GearmanClient::doJobHandle](gearmanclient.dojobhandle.md) — Obtém o identificador para a tarefa em execução
- [GearmanClient::doLow](gearmanclient.dolow.md) — Executa uma única tarefa de baixa prioridade
- [GearmanClient::doLowBackground](gearmanclient.dolowbackground.md) — Executa uma tarefa de baixa prioridade em segundo plano
- [GearmanClient::doNormal](gearmanclient.donormal.md) — Executa uma única tarefa e retorna um resultado
- [GearmanClient::doStatus](gearmanclient.dostatus.md) — Obtém o status da tarefa em execução
- [GearmanClient::echo](gearmanclient.echo.md) — Envia dados para todos os servidores de trabalho para ver se eles os ecoam de volta (descontinuado)
- [GearmanClient::error](gearmanclient.error.md) — Retorna uma string de erro para o último erro encontrado
- [GearmanClient::getErrno](gearmanclient.geterrno.md) — Obtém um número de erro
- [GearmanClient::jobStatus](gearmanclient.jobstatus.md) — Obtém o status de uma tarefa em segundo plano
- [GearmanClient::ping](gearmanclient.ping.md) — Envia dados para todos os servidores de tarefa para ver se eles os ecoam de volta
- [GearmanClient::removeOptions](gearmanclient.removeoptions.md) — Remove opções do cliente
- [GearmanClient::returnCode](gearmanclient.returncode.md) — Obtém o último código de retorno do Gearman
- [GearmanClient::runTasks](gearmanclient.runtasks.md) — Executa uma lista de tarefas em paralelo
- [GearmanClient::setClientCallback](gearmanclient.setclientcallback.md) — Define a função de retorno quando há um pacote de dados para uma tarefa (descontinuado)
- [GearmanClient::setCompleteCallback](gearmanclient.setcompletecallback.md) — Define uma função a ser chamada na conclusão da tarefa
- [GearmanClient::setContext](gearmanclient.setcontext.md) — Define o contexto da aplicação
- [GearmanClient::setCreatedCallback](gearmanclient.setcreatedcallback.md) — Define uma função de retorno para quando uma tarefa é enfileirada
- [GearmanClient::setData](gearmanclient.setdata.md) — Define dados da aplicação (descontinuado)
- [GearmanClient::setDataCallback](gearmanclient.setdatacallback.md) — Define a função de retorno quando há um pacote de dados para uma tarefa
- [GearmanClient::setExceptionCallback](gearmanclient.setexceptioncallback.md) — Define uma função de retorno para exceções de trabalhador
- [GearmanClient::setFailCallback](gearmanclient.setfailcallback.md) — Define a função de retorno para falha de tarefa
- [GearmanClient::setOptions](gearmanclient.setoptions.md) — Define opções do cliente
- [GearmanClient::setStatusCallback](gearmanclient.setstatuscallback.md) — Define uma função de retorno para coletar o status da tarefa
- [GearmanClient::setTimeout](gearmanclient.settimeout.md) — Define o tempo limite da atividade de E/S do soquete
- [GearmanClient::setWarningCallback](gearmanclient.setwarningcallback.md) — Define uma função de retorno para alertas de trabalhadores
- [GearmanClient::setWorkloadCallback](gearmanclient.setworkloadcallback.md) — Define uma função de retorno para aceitar atualizações de dados incrementais
- [GearmanClient::timeout](gearmanclient.timeout.md) — Obtém o valor de tempo limite da atividade de E/S do soquete atual
- [GearmanClient::wait](gearmanclient.wait.md) — Aguarda atividade de E/S em todas as conexões em um cliente

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
