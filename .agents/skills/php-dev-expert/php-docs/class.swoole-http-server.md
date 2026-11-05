# A classe Swoole\Http\Server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-http-server.php

---

# A classe Swoole\Http\Server

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Http\Server**

extends
[Swoole\Server](class.swoole-server.md)
{

/\* Métodos \*/

public function [on](swoole-http-server.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [start](swoole-http-server.start.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [Swoole\Server::addlistener](swoole-server.addlistener.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$socket_type`): [void](language.types.void.md)

public function [Swoole\Server::addProcess](swoole-server.addprocess.md)([swoole\_process](class.swoole-process.md) `$process`): [bool](language.types.boolean.md)

public function [Swoole\Server::after](swoole-server.after.md)([int](language.types.integer.md) `$after_time_ms`, [callable](language.types.callable.md) `$callback`, [string](language.types.string.md) `$param` = ?): ReturnType

public function [Swoole\Server::bind](swoole-server.bind.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$uid`): [bool](language.types.boolean.md)

public function [Swoole\Server::clearTimer](swoole-server.cleartimer.md)([int](language.types.integer.md) `$timer_id`): [void](language.types.void.md)

function **swoole\_timer\_clear**([int](language.types.integer.md) `$timer_id`): [void](language.types.void.md)

public function [Swoole\Server::close](swoole-server.close.md)([int](language.types.integer.md) `$fd`, [bool](language.types.boolean.md) `$reset` = ?): [bool](language.types.boolean.md)

public function [Swoole\Server::confirm](swoole-server.confirm.md)([int](language.types.integer.md) `$fd`): [bool](language.types.boolean.md)

public function [Swoole\Server::connection\_info](swoole-server.connection-info.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$reactor_id` = ?): [array](language.types.array.md)

public function [Swoole\Server::connection\_list](swoole-server.connection-list.md)([int](language.types.integer.md) `$start_fd`, [int](language.types.integer.md) `$pagesize` = ?): [array](language.types.array.md)

public function [Swoole\Server::defer](swoole-server.defer.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [Swoole\Server::exist](swoole-server.exist.md)([int](language.types.integer.md) `$fd`): [bool](language.types.boolean.md)

public function [Swoole\Server::finish](swoole-server.finish.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [Swoole\Server::getClientInfo](swoole-server.getclientinfo.md)([int](language.types.integer.md) `$fd`, [int](language.types.integer.md) `$reactor_id` = ?, [bool](language.types.boolean.md) `$ignore_error` = ?): [array](language.types.array.md)

public function [Swoole\Server::getClientList](swoole-server.getclientlist.md)([int](language.types.integer.md) `$start_fd`, [int](language.types.integer.md) `$pagesize` = ?): [array](language.types.array.md)

public function [Swoole\Server::getLastError](swoole-server.getlasterror.md)(): [int](language.types.integer.md)

public function [Swoole\Server::heartbeat](swoole-server.heartbeat.md)([bool](language.types.boolean.md) `$if_close_connection`): [mixed](language.types.mixed.md)

public function [Swoole\Server::listen](swoole-server.listen.md)([string](language.types.string.md) `$host`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$socket_type`): [bool](language.types.boolean.md)

public function [Swoole\Server::on](swoole-server.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [Swoole\Server::pause](swoole-server.pause.md)([int](language.types.integer.md) `$fd`): [void](language.types.void.md)

public function [Swoole\Server::protect](swoole-server.protect.md)([int](language.types.integer.md) `$fd`, [bool](language.types.boolean.md) `$is_protected` = ?): [void](language.types.void.md)

public function [Swoole\Server::reload](swoole-server.reload.md)(): [bool](language.types.boolean.md)

public function [Swoole\Server::resume](swoole-server.resume.md)([int](language.types.integer.md) `$fd`): [void](language.types.void.md)

public function [Swoole\Server::send](swoole-server.send.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$reactor_id` = ?): [bool](language.types.boolean.md)

public function [Swoole\Server::sendfile](swoole-server.sendfile.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$offset` = ?): [bool](language.types.boolean.md)

public function [Swoole\Server::sendMessage](swoole-server.sendmessage.md)([int](language.types.integer.md) `$worker_id`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [Swoole\Server::sendto](swoole-server.sendto.md)(  
    [string](language.types.string.md) `$ip`,  
    [int](language.types.integer.md) `$port`,  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$server_socket` = ?  
): [bool](language.types.boolean.md)

public function [Swoole\Server::sendwait](swoole-server.sendwait.md)([int](language.types.integer.md) `$fd`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [Swoole\Server::set](swoole-server.set.md)([array](language.types.array.md) `$settings`): ReturnType

public function [Swoole\Server::shutdown](swoole-server.shutdown.md)(): [void](language.types.void.md)

public function [Swoole\Server::start](swoole-server.start.md)(): [void](language.types.void.md)

public function [Swoole\Server::stats](swoole-server.stats.md)(): [array](language.types.array.md)

public function [Swoole\Server::stop](swoole-server.stop.md)([int](language.types.integer.md) `$worker_id` = ?): [bool](language.types.boolean.md)

public function [Swoole\Server::task](swoole-server.task.md)([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$dst_worker_id` = ?, [callable](language.types.callable.md) `$callback` = ?): [mixed](language.types.mixed.md)

public function [Swoole\Server::taskwait](swoole-server.taskwait.md)([string](language.types.string.md) `$data`, [float](language.types.float.md) `$timeout` = ?, [int](language.types.integer.md) `$worker_id` = ?): [void](language.types.void.md)

public function [Swoole\Server::taskWaitMulti](swoole-server.taskwaitmulti.md)([array](language.types.array.md) `$tasks`, [float](language.types.float.md) `$timeout_ms` = ?): [void](language.types.void.md)

public function [Swoole\Server::tick](swoole-server.tick.md)([int](language.types.integer.md) `$interval_ms`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

}

## Índice

- [Swoole\Http\Server::on](swoole-http-server.on.md) — Vincula a função de retorno ao servidor HTTP pelo nome do evento
- [Swoole\Http\Server::start](swoole-http-server.start.md) — Inicia o servidor HTTP Swoole

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
