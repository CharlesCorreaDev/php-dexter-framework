# A classe Swoole\Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-client.php

---

# A classe Swoole\Client

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Client**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[MSG\_OOB](class.swoole-client.md#swoole-client.constants.msg-oob) = 1;

const
[int](language.types.integer.md)
[MSG\_PEEK](class.swoole-client.md#swoole-client.constants.msg-peek) = 2;

const
[int](language.types.integer.md)
[MSG\_DONTWAIT](class.swoole-client.md#swoole-client.constants.msg-dontwait) = 128;

const
[int](language.types.integer.md)
[MSG\_WAITALL](class.swoole-client.md#swoole-client.constants.msg-waitall) = 64;

/\* Propriedades \*/

public
[$errCode](class.swoole-client.md#swoole-client.props.errcode);

public
[$sock](class.swoole-client.md#swoole-client.props.sock);

public
[$reuse](class.swoole-client.md#swoole-client.props.reuse);

public
[$reuseCount](class.swoole-client.md#swoole-client.props.reusecount);

/\* Métodos \*/

public function [close](swoole-client.close.md)([bool](language.types.boolean.md) `$force` = ?): [bool](language.types.boolean.md)

public function [connect](swoole-client.connect.md)(  
    [string](language.types.string.md) `$host`,  
    [int](language.types.integer.md) `$port` = ?,  
    [int](language.types.integer.md) `$timeout` = ?,  
    [int](language.types.integer.md) `$flag` = ?  
): [bool](language.types.boolean.md)

public function [\_\_destruct](swoole-client.destruct.md)(): [void](language.types.void.md)

public function [getpeername](swoole-client.getpeername.md)(): [array](language.types.array.md)

public function [getsockname](swoole-client.getsockname.md)(): [array](language.types.array.md)

public function [isConnected](swoole-client.isconnected.md)(): [bool](language.types.boolean.md)

public function [on](swoole-client.on.md)([string](language.types.string.md) `$event`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public function [pause](swoole-client.pause.md)(): [void](language.types.void.md)

public function [pipe](swoole-client.pipe.md)([string](language.types.string.md) `$socket`): [void](language.types.void.md)

public function [recv](swoole-client.recv.md)([string](language.types.string.md) `$size` = ?, [string](language.types.string.md) `$flag` = ?): [void](language.types.void.md)

public function [resume](swoole-client.resume.md)(): [void](language.types.void.md)

public function [send](swoole-client.send.md)([string](language.types.string.md) `$data`, [string](language.types.string.md) `$flag` = ?): [int](language.types.integer.md)

public function [sendfile](swoole-client.sendfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$offset` = ?): [bool](language.types.boolean.md)

public function [sendto](swoole-client.sendto.md)([string](language.types.string.md) `$ip`, [int](language.types.integer.md) `$port`, [string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

public function [set](swoole-client.set.md)([array](language.types.array.md) `$settings`): [void](language.types.void.md)

public function [sleep](swoole-client.sleep.md)(): [void](language.types.void.md)

public function [wakeup](swoole-client.wakeup.md)(): [void](language.types.void.md)

}

## Propriedades

errCode

sock

reuse

reuseCount

## Constantes predefinidas

**`Swoole\Client::MSG_OOB`**

**`Swoole\Client::MSG_PEEK`**

**`Swoole\Client::MSG_DONTWAIT`**

**`Swoole\Client::MSG_WAITALL`**

## Índice

- [Swoole\Client::close](swoole-client.close.md) — Fecha a conexão estabelecida.
- [Swoole\Client::connect](swoole-client.connect.md) — Conecta à porta TCP ou UDP remota
- [Swoole\Client::\_\_construct](swoole-client.construct.md) — Criar um cliente TCP/UDP síncrono ou assíncrono do Swoole, com ou sem SSL.
- [Swoole\Client::\_\_destruct](swoole-client.destruct.md) — Destrói o cliente Swoole.
- [Swoole\Client::getpeername](swoole-client.getpeername.md) — Obtém o nome do socket remoto da conexão.
- [Swoole\Client::getsockname](swoole-client.getsockname.md) — Obtém o nome do socket local da conexão.
- [Swoole\Client::isConnected](swoole-client.isconnected.md) — Verifica se a conexão está estabelecida.
- [Swoole\Client::on](swoole-client.on.md) — Adiciona funções de retorno de chamada acionadas por eventos.
- [Swoole\Client::pause](swoole-client.pause.md) — Pausa a recepção de dados.
- [Swoole\Client::pipe](swoole-client.pipe.md) — Redireciona os dados para outro descritor de arquivo.
- [Swoole\Client::recv](swoole-client.recv.md) — Recebe dados do socket remoto.
- [Swoole\Client::resume](swoole-client.resume.md) — Retoma a recepção de dados.
- [Swoole\Client::send](swoole-client.send.md) — Envia dados para o socket TCP remoto.
- [Swoole\Client::sendfile](swoole-client.sendfile.md) — Envia arquivo para o socket TCP remoto.
- [Swoole\Client::sendto](swoole-client.sendto.md) — Envia dados para o endereço remoto UDP.
- [Swoole\Client::set](swoole-client.set.md) — Define os parâmetros do cliente Swoole antes que a conexão seja estabelecida.
- [Swoole\Client::sleep](swoole-client.sleep.md) — Remove o cliente TCP do loop de eventos do sistema.
- [Swoole\Client::wakeup](swoole-client.wakeup.md) — Adiciona o cliente TCP de volta ao loop de eventos do sistema.

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
