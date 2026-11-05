# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearman.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

Valores de retorno. Sempre verifique [GearmanClient::error()](gearmanclient.error.md) ou
**GearmanWorker()** para um erro de string, pois ele pode conter
mais detalhes:

**`GEARMAN_SUCCESS`** ([int](language.types.integer.md))
:   Qualquer ação tomada foi bem-sucedida.

**`GEARMAN_IO_WAIT`** ([int](language.types.integer.md))
:   No modo sem bloqueio, ocorre um evento que teria bloqueado.

**`GEARMAN_ERRNO`** ([int](language.types.integer.md))
:   Um erro de sistema. Verifique **GearmanClient::errno()** ou
    **GearmanWorker::errno()** para o código de erro de sistema que
    foi retornado.

**`GEARMAN_NO_ACTIVE_FDS`** ([int](language.types.integer.md))
:   [GearmanClient::wait()](gearmanclient.wait.md) ou **GearmanWorker()** foi
    chamado sem conexões.

**`GEARMAN_UNEXPECTED_PACKET`** ([int](language.types.integer.md))
:   Indica que algo está muito errado no gearmand. Aplica-se somente a
    [GearmanWorker](class.gearmanworker.md).

**`GEARMAN_GETADDRINFO`** ([int](language.types.integer.md))
:   Falha na resolução de DNS (host, porta, etc. inválidos).

**`GEARMAN_NO_SERVERS`** ([int](language.types.integer.md))
:   Não chamou [GearmanClient::addServer()](gearmanclient.addserver.md) antes de enviar trabalhos
    ou tarefas.

**`GEARMAN_LOST_CONNECTION`** ([int](language.types.integer.md))
:   Perdeu a conexão durante uma solicitação.

**`GEARMAN_MEMORY_ALLOCATION_FAILURE`** ([int](language.types.integer.md))
:   Falha na alocação de memória (falta de memória).

**`GEARMAN_SERVER_ERROR`** ([int](language.types.integer.md))
:   Algo deu errado no servidor Gearman e ele não conseguiu lidar com a solicitação
    elegantemente.

**`GEARMAN_WORK_DATA`** ([int](language.types.integer.md))
:   Observe o código de retorno obtido com [GearmanClient::returnCode()](gearmanclient.returncode.md)
    ao usar [GearmanClient::do()](gearmanclient.do.md). Enviado para atualizar o cliente
    com dados de um trabalho em execução. Um trabalhador usa isso quando precisa enviar atualizações,
    enviar resultados parciais ou liberar dados durante trabalhos de execução longa.

**`GEARMAN_WORK_WARNING`** ([int](language.types.integer.md))
:   Observe o código de retorno obtido com [GearmanClient::returnCode()](gearmanclient.returncode.md)
    ao usar [GearmanClient::do()](gearmanclient.do.md). Atualiza o cliente com
    um aviso. O comportamento é como **`GEARMAN_WORK_DATA`**, mas
    deve ser tratado como um aviso em vez de dados de resposta normais.

**`GEARMAN_WORK_STATUS`** ([int](language.types.integer.md))
:   Observe o código de retorno obtido com [GearmanClient::returnCode()](gearmanclient.returncode.md)
    ao usar [GearmanClient::do()](gearmanclient.do.md). Enviado para atualizar o status
    de um trabalho de longa execução. Use [GearmanClient::doStatus()](gearmanclient.dostatus.md) para obter
    a porcentagem concluída da tarefa.

**`GEARMAN_WORK_EXCEPTION`** ([int](language.types.integer.md))
:   Observe o código de retorno obtido com [GearmanClient::returnCode()](gearmanclient.returncode.md)
    ao usar [GearmanClient::do()](gearmanclient.do.md). Indica que um trabalho falhou
    com uma exceção fornecida.

**`GEARMAN_WORK_FAIL`** ([int](language.types.integer.md))
:   Observe o código de retorno obtido com [GearmanClient::returnCode()](gearmanclient.returncode.md)
    ao usar [GearmanClient::do()](gearmanclient.do.md). Indica que o trabalho falhou.

**`GEARMAN_COULD_NOT_CONNECT`** ([int](language.types.integer.md))
:   Falha ao conectar aos servidores.

**`GEARMAN_INVALID_FUNCTION_NAME`** ([int](language.types.integer.md))
:   Tentando registrar um nome de função NULL ou usando a interface de retorno de chamada
    sem especificar retornos de chamada.

**`GEARMAN_INVALID_WORKER_FUNCTION`** ([int](language.types.integer.md))
:   Tentando registrar uma função com uma função de retorno de chamada NULL.

**`GEARMAN_NO_REGISTERED_FUNCTIONS`** ([int](language.types.integer.md))
:   Quando um trabalhador consegue uma tarefa para uma função, ele não é registrado.

**`GEARMAN_NO_JOBS`** ([int](language.types.integer.md))
:   Para um trabalhador não bloqueador, quando [GearmanWorker::work()](gearmanworker.work.md) não tem
    nenhum trabalho ativo.

**`GEARMAN_ECHO_DATA_CORRUPTION`** ([int](language.types.integer.md))
:   Após [GearmanClient::echo()](gearmanclient.echo.md) ou [GearmanWorker::echo()](gearmanworker.echo.md)
    os dados retornados não correspondem aos dados enviados.

**`GEARMAN_NEED_WORKLOAD_FN`** ([int](language.types.integer.md))
:   Quando o cliente optou por transmitir a carga de trabalho de uma tarefa, mas não
    especificou uma função de retorno de chamada de carga de trabalho.

**`GEARMAN_PAUSE`** ([int](language.types.integer.md))
:   Para a interface de tarefa do cliente não bloqueante, pode ser retornado do callback da tarefa
    para "pausar" a chamada e retornar de [GearmanClient::runTasks()](gearmanclient.runtasks.md).
    Chame [GearmanClient::runTasks()](gearmanclient.runtasks.md) novamente para continuar.

**`GEARMAN_UNKNOWN_STATE`** ([int](language.types.integer.md))
:   Erro interno de estado do cliente/trabalhador.

**`GEARMAN_SEND_BUFFER_TOO_SMALL`** ([int](language.types.integer.md))
:   Erro interno: tentando liberar mais dados em um bloco atômico do que é possível
    devido a tamanhos de buffer codificados.

**`GEARMAN_TIMEOUT`** ([int](language.types.integer.md))
:   Atingiu o limite de tempo definido pelo cliente/trabalhador.

Opções de [GearmanClient](class.gearmanclient.md):

**`GEARMAN_CLIENT_GENERATE_UNIQUE`** ([int](language.types.integer.md))
:   Gera um ID exclusivo (UUID) para cada tarefa.

**`GEARMAN_CLIENT_NON_BLOCKING`** ([int](language.types.integer.md))
:   Executa o ciente em um modo não bloqueante.

**`GEARMAN_CLIENT_UNBUFFERED_RESULT`** ([int](language.types.integer.md))
:   Permite que o cliente leia dados em blocos em vez de ter a biblioteca
    armazenando em buffer todo o resultado dos dados e passando-o de volta.

**`GEARMAN_CLIENT_FREE_TASKS`** ([int](language.types.integer.md))
:   Libera automaticamente objetos de tarefa quando eles são concluídos. Esta é a configuração padrão
    nesta extensão para evitar vazamentos de memória.

Opções de [GearmanWorker](class.gearmanworker.md):

**`GEARMAN_WORKER_NON_BLOCKING`** ([int](language.types.integer.md))
:   Executa o trabalhador em modo não bloqueante.

**`GEARMAN_WORKER_GRAB_UNIQ`** ([int](language.types.integer.md))
:   Retorna o ID exclusivo atribuído ao cliente, além do identificador do trabalho.

Configuração básica do Gearman:

**`GEARMAN_DEFAULT_TCP_HOST`** ([string](language.types.string.md))

**`GEARMAN_DEFAULT_TCP_PORT`** ([int](language.types.integer.md))

**`GEARMAN_DEFAULT_SOCKET_TIMEOUT`** ([int](language.types.integer.md))

**`GEARMAN_DEFAULT_SOCKET_SEND_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_DEFAULT_SOCKET_RECV_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_MAX_ERROR_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_PACKET_HEADER_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_JOB_HANDLE_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_OPTION_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_UNIQUE_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_MAX_COMMAND_ARGS`** ([int](language.types.integer.md))

**`GEARMAN_ARGS_BUFFER_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_SEND_BUFFER_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_RECV_BUFFER_SIZE`** ([int](language.types.integer.md))

**`GEARMAN_WORKER_WAIT_TIMEOUT`** ([int](language.types.integer.md))

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
