# A classe Swoole\WebSocket\Server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-websocket-server.php

---

# A classe Swoole\WebSocket\Server

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\WebSocket\Server**

extends
[Swoole\Http\Server](class.swoole-http-server.md)
{

/\* Métodos \*/

public function [exist](swoole-websocket-server.exist.md)([int](language.types.integer.md) `$fd`): [bool](language.types.boolean.md)

public function [on](swoole-websocket-server.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): ReturnType

public static function [pack](swoole-websocket-server.pack.md)(  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$opcode` = ?,  
    [string](language.types.string.md) `$finish` = ?,  
    [string](language.types.string.md) `$mask` = ?  
): binary

public function [push](swoole-websocket-server.push.md)(  
    [string](language.types.string.md) `$fd`,  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$opcode` = ?,  
    [string](language.types.string.md) `$finish` = ?  
): [void](language.types.void.md)

public static function [unpack](swoole-websocket-server.unpack.md)(binary `$data`): [string](language.types.string.md)

/\* Métodos herdados \*/

public function [Swoole\Http\Server::on](swoole-http-server.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [Swoole\Http\Server::start](swoole-http-server.start.md)(): [void](language.types.void.md)

}

## Índice

- [Swoole\WebSocket\Server::exist](swoole-websocket-server.exist.md) — Verifica se o descritor de arquivo existe.
- [Swoole\WebSocket\Server::on](swoole-websocket-server.on.md) — Registra função de retorno de chamada de evento
- [Swoole\WebSocket\Server::pack](swoole-websocket-server.pack.md) — Obtém um pacote de dados binários para enviar em um único quadro.
- [Swoole\WebSocket\Server::push](swoole-websocket-server.push.md) — Envia dados para o cliente remoto.
- [Swoole\WebSocket\Server::unpack](swoole-websocket-server.unpack.md) — Desempacota os dados binários recebidos do cliente.

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
