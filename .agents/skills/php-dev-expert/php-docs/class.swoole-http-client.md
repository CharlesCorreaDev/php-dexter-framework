# A classe Swoole\Http\Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-http-client.php

---

# A classe Swoole\Http\Client

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Http\Client**
{

/\* Propriedades \*/

public
[$errCode](class.swoole-http-client.md#swoole-http-client.props.errcode);

public
[$sock](class.swoole-http-client.md#swoole-http-client.props.sock);

/\* Métodos \*/

public function [addFile](swoole-http-client.addfile.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$name`,  
    [string](language.types.string.md) `$type` = ?,  
    [string](language.types.string.md) `$filename` = ?,  
    [string](language.types.string.md) `$offset` = ?  
): [void](language.types.void.md)

public function [close](swoole-http-client.close.md)(): [void](language.types.void.md)

public function [\_\_destruct](swoole-http-client.destruct.md)(): [void](language.types.void.md)

public function [download](swoole-http-client.download.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$file`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$offset` = ?  
): [void](language.types.void.md)

public function [execute](swoole-http-client.execute.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$callback`): [void](language.types.void.md)

public function [get](swoole-http-client.get.md)([string](language.types.string.md) `$path`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [isConnected](swoole-http-client.isconnected.md)(): [bool](language.types.boolean.md)

public function [on](swoole-http-client.on.md)([string](language.types.string.md) `$event_name`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [post](swoole-http-client.post.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$data`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [push](swoole-http-client.push.md)([string](language.types.string.md) `$data`, [string](language.types.string.md) `$opcode` = ?, [string](language.types.string.md) `$finish` = ?): [void](language.types.void.md)

public function [set](swoole-http-client.set.md)([array](language.types.array.md) `$settings`): [void](language.types.void.md)

public function [setCookies](swoole-http-client.setcookies.md)([array](language.types.array.md) `$cookies`): [void](language.types.void.md)

public function [setData](swoole-http-client.setdata.md)([string](language.types.string.md) `$data`): ReturnType

public function [setHeaders](swoole-http-client.setheaders.md)([array](language.types.array.md) `$headers`): [void](language.types.void.md)

public function [setMethod](swoole-http-client.setmethod.md)([string](language.types.string.md) `$method`): [void](language.types.void.md)

public function [upgrade](swoole-http-client.upgrade.md)([string](language.types.string.md) `$path`, [string](language.types.string.md) `$callback`): [void](language.types.void.md)

}

## Propriedades

errCode

sock

## Índice

- [Swoole\Http\Client::addFile](swoole-http-client.addfile.md) — Adiciona um arquivo ao formulário de postagem.
- [Swoole\Http\Client::close](swoole-http-client.close.md) — Fecha a conexão HTTP.
- [Swoole\Http\Client::\_\_construct](swoole-http-client.construct.md) — Constrói o cliente HTTP assíncrono.
- [Swoole\Http\Client::\_\_destruct](swoole-http-client.destruct.md) — Destrói o cliente HTTP.
- [Swoole\Http\Client::download](swoole-http-client.download.md) — Baixa um arquivo do servidor remoto.
- [Swoole\Http\Client::execute](swoole-http-client.execute.md) — Envia a solicitação HTTP após definir os parâmetros.
- [Swoole\Http\Client::get](swoole-http-client.get.md) — Envia solicitação HTTP GET para o servidor remoto.
- [Swoole\Http\Client::isConnected](swoole-http-client.isconnected.md) — Verifica se a conexão HTTP está conectada.
- [Swoole\Http\Client::on](swoole-http-client.on.md) — Registra função de retorno de chamada pelo nome do evento.
- [Swoole\Http\Client::post](swoole-http-client.post.md) — Enviar uma solicitação http POST para o servidor remoto.
- [Swoole\Http\Client::push](swoole-http-client.push.md) — Envia dados para o cliente WebSocket.
- [Swoole\Http\Client::set](swoole-http-client.set.md) — Atualiza os parâmetros do cliente HTTP.
- [Swoole\Http\Client::setCookies](swoole-http-client.setcookies.md) — Define os cookies da requisição HTTP.
- [Swoole\Http\Client::setData](swoole-http-client.setdata.md) — Define os dados do corpo da requisição HTTP.
- [Swoole\Http\Client::setHeaders](swoole-http-client.setheaders.md) — Define os cabeçalhos da requisição HTTP.
- [Swoole\Http\Client::setMethod](swoole-http-client.setmethod.md) — Define o método da requisição HTTP.
- [Swoole\Http\Client::upgrade](swoole-http-client.upgrade.md) — Faz um upgrade para o protocolo websocket.

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
