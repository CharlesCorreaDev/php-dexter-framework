# A classe Swoole\Server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-server.php

---

# A classe Swoole\Server

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Server**
{

/\* Métodos \*/

public function [addlistener](swoole-server.addlistener.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$socket_type`): [void](language.types.void.md)

public function [addProcess](swoole-server.addprocess.md)([swoole\_process](class.swoole-process.md) `$process`): [bool](language.types.boolean.md)

public function [after](swoole-server.after.md)([int](language.types.integer.md) `$after_time_ms`, [callable](language.types.callable.md) `$callback`, [string](language.types.string.md) `$param` = ?): ReturnType

public function [bind](swoole-server.bind.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$uid`): [bool](language.types.boolean.md)

public function [clearTimer](swoole-server.cleartimer.md)([int](language.types.integer.md) `$timer_id`): [void](language.types.void.md)

function **swoole\_timer\_clear**([int](language.types.integer.md) `$timer_id`): [void](language.types.void.md)

public function [close](swoole-server.close.md)([int](language.types.integer.md) `$fd`, [bool](language.types.boolean.md) `$reset` = ?): [bool](language.types.boolean.md)

public function [confirm](swoole-server.confirm.md)([int](language.types.integer.md) `$fd`): [bool](language.types.boolean.md)

public function [connection\_info](swoole-server.connection-info.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$reactor_id` = ?): [array](language.types.array.md)

public function [connection\_list](swoole-server.connection-list.md)([int](language.types.integer.md) `$start_fd`, [int](language.types.integer.md) `$pagesize` = ?): [array](language.types.array.md)

public function [defer](swoole-server.defer.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [exist](swoole-server.exist.md)([int](language.types.integer.md) `$fd`): [bool](language.types.boolean.md)

public function [finish](swoole-server.finish.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [getClientInfo](swoole-server.getclientinfo.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$reactor_id` = ?, [bool](language.types.boolean.md) `$ignore_error` = ?): [array](language.types.array.md)

public function [getClientList](swoole-server.getclientlist.md)([int](language.types.integer.md) `$start_fd`, [int](language.types.integer.md) `$pagesize` = ?): [array](language.types.array.md)

public function [getLastError](swoole-server.getlasterror.md)(): [int](language.types.integer.md)

public function [heartbeat](swoole-server.heartbeat.md)([bool](language.types.boolean.md) `$if_close_connection`): [mixed](language.types.mixed.md)

public function [listen](swoole-server.listen.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$socket_type`): [bool](language.types.boolean.md)

public function [on](swoole-server.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [pause](swoole-server.pause.md)([int](language.types.integer.md) `$fd`): [void](language.types.void.md)

public function [protect](swoole-server.protect.md)([int](language.types.integer.md) `$fd`, [bool](language.types.boolean.md) `$is_protected` = ?): [void](language.types.void.md)

public function [reload](swoole-server.reload.md)(): [bool](language.types.boolean.md)

public function [resume](swoole-server.resume.md)([int](language.types.integer.md) `$fd`): [void](language.types.void.md)

public function [send](swoole-server.send.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$reactor_id` = ?): [bool](language.types.boolean.md)

public function [sendfile](swoole-server.sendfile.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$offset` = ?): [bool](language.types.boolean.md)

public function [sendMessage](swoole-server.sendmessage.md)([int](language.types.integer.md) `$worker_id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [sendto](swoole-server.sendto.md)(  
    [string](language.types.string.md) `$ip`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$server_socket` = ?  
): [bool](language.types.boolean.md)

public function [sendwait](swoole-server.sendwait.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [set](swoole-server.set.md)([array](language.types.array.md) `$settings`): ReturnType

public function [shutdown](swoole-server.shutdown.md)(): [void](language.types.void.md)

public function [start](swoole-server.start.md)(): [void](language.types.void.md)

public function [stats](swoole-server.stats.md)(): [array](language.types.array.md)

public function [stop](swoole-server.stop.md)([int](language.types.integer.md) `$worker_id` = ?): [bool](language.types.boolean.md)

public function [task](swoole-server.task.md)([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$dst_worker_id` = ?, [callable](language.types.callable.md) `$callback` = ?): [mixed](language.types.mixed.md)

public function [taskwait](swoole-server.taskwait.md)([string](language.types.string.md) `$data`, [float](language.types.float.md) `$timeout` = ?, [int](language.types.integer.md) `$worker_id` = ?): [void](language.types.void.md)

public function [taskWaitMulti](swoole-server.taskwaitmulti.md)([array](language.types.array.md) `$tasks`, [float](language.types.float.md) `$timeout_ms` = ?): [void](language.types.void.md)

public function [tick](swoole-server.tick.md)([int](language.types.integer.md) `$interval_ms`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

}

## Índice

- [Swoole\Server::addlistener](swoole-server.addlistener.md) — Adiciona um novo ouvinte (listener) ao servidor.
- [Swoole\Server::addProcess](swoole-server.addprocess.md) — Adiciona um processo definido pelo usuário (swoole\_process) ao servidor.
- [Swoole\Server::after](swoole-server.after.md) — Aciona uma função de retorno de chamada após um período de tempo.
- [Swoole\Server::bind](swoole-server.bind.md) — Vincula a conexão a um ID de usuário definido pelo usuário
- [Swoole\Server::clearTimer](swoole-server.cleartimer.md) — Para e destrói um temporizador.
- [Swoole\Server::close](swoole-server.close.md) — Fecha uma conexão com o cliente.
- [Swoole\Server::confirm](swoole-server.confirm.md) — Verifica o status da conexão.
- [Swoole\Server::connection\_info](swoole-server.connection-info.md) — Obtém informações da conexão pelo descritor de arquivo.
- [Swoole\Server::connection\_list](swoole-server.connection-list.md) — Obtém todas as conexões estabelecidas.
- [Swoole\Server::\_\_construct](swoole-server.construct.md) — Constrói um servidor Swoole.
- [Swoole\Server::defer](swoole-server.defer.md) — Atrasa a execução da função de retorno de chamada até o final do EventLoop atual.
- [Swoole\Server::exist](swoole-server.exist.md) — Verifica se a conexão existe.
- [Swoole\Server::finish](swoole-server.finish.md) — Usado no processo de tarefa para enviar o resultado para o processo trabalhador quando a tarefa é concluída.
- [Swoole\Server::getClientInfo](swoole-server.getclientinfo.md) — Obtém as informações da conexão pelo descritor de arquivo.
- [Swoole\Server::getClientList](swoole-server.getclientlist.md) — Obtém todas as conexões estabelecidas.
- [Swoole\Server::getLastError](swoole-server.getlasterror.md) — Obtém o código de erro do erro mais recente.
- [Swoole\Server::heartbeat](swoole-server.heartbeat.md) — Verifica todas as conexões no servidor.
- [Swoole\Server::listen](swoole-server.listen.md) — Ouve no IP, porta e tipo de socket fornecidos.
- [Swoole\Server::on](swoole-server.on.md) — Registra uma função de retorno de chamada pelo nome do evento.
- [Swoole\Server::pause](swoole-server.pause.md) — Para de receber dados da conexão.
- [Swoole\Server::protect](swoole-server.protect.md) — Define a conexão para o modo protegido.
- [Swoole\Server::reload](swoole-server.reload.md) — Reinicia todos os processos do trabalhador (worker).
- [Swoole\Server::resume](swoole-server.resume.md) — Inicia a recepção de dados da conexão.
- [Swoole\Server::send](swoole-server.send.md) — Envia dados para o cliente.
- [Swoole\Server::sendfile](swoole-server.sendfile.md) — Envia arquivo para a conexão.
- [Swoole\Server::sendMessage](swoole-server.sendmessage.md) — Envia mensagem para processos de trabalhador por ID.
- [Swoole\Server::sendto](swoole-server.sendto.md) — Envia dados para o endereço UDP remoto.
- [Swoole\Server::sendwait](swoole-server.sendwait.md) — Envia dados para o socket remoto de forma bloqueada.
- [Swoole\Server::set](swoole-server.set.md) — Define as configurações em tempo de execução do servidor Swoole.
- [Swoole\Server::shutdown](swoole-server.shutdown.md) — Desliga o processo mestre do servidor, esta função pode ser chamada nos processos de trabalho.
- [Swoole\Server::start](swoole-server.start.md) — Inicia o servidor Swoole
- [Swoole\Server::stats](swoole-server.stats.md) — Obtém as estatísticas do servidor Swoole.
- [Swoole\Server::stop](swoole-server.stop.md) — Para o servidor Swoole.
- [Swoole\Server::task](swoole-server.task.md) — Envia dados para os processos de trabalho de tarefa.
- [Swoole\Server::taskwait](swoole-server.taskwait.md) — Envia dados para os processos de trabalho de tarefa de forma bloqueante.
- [Swoole\Server::taskWaitMulti](swoole-server.taskwaitmulti.md) — Executa várias tarefas concorrentemente.
- [Swoole\Server::tick](swoole-server.tick.md) — Repete uma função fornecida em cada intervalo de tempo especificado.

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
