# Gearman

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.gearman.php

---

# Gearman

# Introdução

[» Gearman](https://gearman.org) é uma estrutura genérica de aplicação para terceirizar
trabalho para várias máquinas ou processos. Ela permite que as aplicações concluam tarefas em paralelo,
balanceiem a carga do processamento e chamem funções entre linguagens. A estrutura pode ser
usada em uma variedade de aplicações, de sites de alta disponibilidade ao transporte de
eventos de replicação de banco de dados.

Esta extensão fornece classes para escrever clientes e trabalhadores Gearman.

- [Instalação/Configuração](gearman.setup.md)
  - [Dependências](gearman.requirements.md)
  - [Instalação](gearman.installation.md)
- [Constantes predefinidas](gearman.constants.md)
- [Examples](gearman.examples.md)
  - [Uso básico](gearman.examples-reverse.md)
  - [Cliente e trabalhador básicos do Gearman, histórico](gearman.examples-reverse-bg.md)
  - [Cliente e trabalhador básicos do Gearman, enviando tarefas](gearman.examples-reverse-task.md)
- [GearmanClient](class.gearmanclient.md) — A classe GearmanClient
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
- [GearmanJob](class.gearmanjob.md) — A classe GearmanJob
  - [GearmanJob::complete](gearmanjob.complete.md) — Envia o resultado e o status completo (descontinuado)
  - [GearmanJob::\_\_construct](gearmanjob.construct.md) — Cria uma instância de GearmanJob
  - [GearmanJob::data](gearmanjob.data.md) — Envia dados para um trabalho em execução (descontinuado)
  - [GearmanJob::exception](gearmanjob.exception.md) — Envia exceção para trabalho em execução (descontinuado)
  - [GearmanJob::fail](gearmanjob.fail.md) — Envia status de falha (descontinuado)
  - [GearmanJob::functionName](gearmanjob.functionname.md) — Obtém o nome da função
  - [GearmanJob::handle](gearmanjob.handle.md) — Obtém o identificador do trabalho
  - [GearmanJob::returnCode](gearmanjob.returncode.md) — Obtém o último código de retorno
  - [GearmanJob::sendComplete](gearmanjob.sendcomplete.md) — Envia o resultado e status completo
  - [GearmanJob::sendData](gearmanjob.senddata.md) — Envia dados para um trabalho em execução
  - [GearmanJob::sendException](gearmanjob.sendexception.md) — Envia exceção para trabalho em execução (exceção)
  - [GearmanJob::sendFail](gearmanjob.sendfail.md) — Envia status de falha
  - [GearmanJob::sendStatus](gearmanjob.sendstatus.md) — Envia status
  - [GearmanJob::sendWarning](gearmanjob.sendwarning.md) — Envia um alerta
  - [GearmanJob::setReturn](gearmanjob.setreturn.md) — Define um valor de retorno
  - [GearmanJob::status](gearmanjob.status.md) — Envia status (descontinuado)
  - [GearmanJob::unique](gearmanjob.unique.md) — Obtém o identificador exclusivo
  - [GearmanJob::warning](gearmanjob.warning.md) — Envia um alerta (descontinuado)
  - [GearmanJob::workload](gearmanjob.workload.md) — Obtém a carga de trabalho
  - [GearmanJob::workloadSize](gearmanjob.workloadsize.md) — Obtém o tamanho da carga de trabalho
- [GearmanTask](class.gearmantask.md) — A classe GearmanTask
  - [GearmanTask::\_\_construct](gearmantask.construct.md) — Cria uma instância de GearmanTask
  - [GearmanTask::create](gearmantask.create.md) — Cria uma tarefa (descontinuado)
  - [GearmanTask::data](gearmantask.data.md) — Obtém dados retornados para uma tarefa
  - [GearmanTask::dataSize](gearmantask.datasize.md) — Obtém o tamanho dos dados retornados
  - [GearmanTask::function](gearmantask.function.md) — Obtém o nome da função associada (descontinuado)
  - [GearmanTask::functionName](gearmantask.functionname.md) — Obtém o nome da função associada
  - [GearmanTask::isKnown](gearmantask.isknown.md) — Determina se a tarefa é conhecida
  - [GearmanTask::isRunning](gearmantask.isrunning.md) — Testa se a tarefa está em execução no momento
  - [GearmanTask::jobHandle](gearmantask.jobhandle.md) — Obtém o identificador do trabalho
  - [GearmanTask::recvData](gearmantask.recvdata.md) — Lê dados de trabalho ou resultado em um buffer para uma tarefa
  - [GearmanTask::returnCode](gearmantask.returncode.md) — Obtém o último código de retorno
  - [GearmanTask::sendData](gearmantask.senddata.md) — Envia dados para uma tarefa (descontinuado)
  - [GearmanTask::sendWorkload](gearmantask.sendworkload.md) — Envia dados para uma tarefa
  - [GearmanTask::taskDenominator](gearmantask.taskdenominator.md) — Obtém o denominador percentual de conclusão
  - [GearmanTask::taskNumerator](gearmantask.tasknumerator.md) — Obtém o numerador da porcentagem de conclusão
  - [GearmanTask::unique](gearmantask.unique.md) — Obtém o identificador exclusivo para uma tarefa
  - [GearmanTask::uuid](gearmantask.uuid.md) — Obtém o identificador exclusivo para uma tarefa (descontinuado)
- [GearmanWorker](class.gearmanworker.md) — A classe GearmanWorker
  - [GearmanWorker::addFunction](gearmanworker.addfunction.md) — Registra e adiciona função de retorno
  - [GearmanWorker::addOptions](gearmanworker.addoptions.md) — Adiciona opções do trabalhador
  - [GearmanWorker::addServer](gearmanworker.addserver.md) — Adiciona um servidor de trabalho
  - [GearmanWorker::addServers](gearmanworker.addservers.md) — Adiciona servidores de trabalho
  - [GearmanWorker::clone](gearmanworker.clone.md) — Cria uma cópia do trabalhador
  - [GearmanWorker::\_\_construct](gearmanworker.construct.md) — Cria uma instância de GearmanWorker
  - [GearmanWorker::echo](gearmanworker.echo.md) — Testa a resposta do servidor de trabalho
  - [GearmanWorker::error](gearmanworker.error.md) — Obtém o último erro encontrado
  - [GearmanWorker::getErrno](gearmanworker.geterrno.md) — Obtém o número do erro
  - [GearmanWorker::options](gearmanworker.options.md) — Obtém opções do trabalhador
  - [GearmanWorker::register](gearmanworker.register.md) — Registra uma função com o servidor de trabalho
  - [GearmanWorker::removeOptions](gearmanworker.removeoptions.md) — Remove opções do trabalhador
  - [GearmanWorker::returnCode](gearmanworker.returncode.md) — Obtém o último código de retorno do Gearman
  - [GearmanWorker::setId](gearmanworker.setid.md) — Fornece ao trabalhador um identificador para que ele possa ser rastreado ao solicitar ao gearmand a lista de trabalhadores disponíveis
  - [GearmanWorker::setOptions](gearmanworker.setoptions.md) — Define opções do trabalhador
  - [GearmanWorker::setTimeout](gearmanworker.settimeout.md) — Define o tempo limite da atividade de E/S do soquete
  - [GearmanWorker::timeout](gearmanworker.timeout.md) — Obtém tempo limite de atividade de E/S do soquete
  - [GearmanWorker::unregister](gearmanworker.unregister.md) — Cancela o registro de um nome de função com os servidores de trabalho
  - [GearmanWorker::unregisterAll](gearmanworker.unregisterall.md) — Cancela o registro de todos os nomes de funções com os servidores de trabalho
  - [GearmanWorker::wait](gearmanworker.wait.md) — Aguarda atividade de um dos servidores de trabalho
  - [GearmanWorker::work](gearmanworker.work.md) — Espera e executa trabalhos
- [GearmanException](class.gearmanexception.md) — A classe GearmanException

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
