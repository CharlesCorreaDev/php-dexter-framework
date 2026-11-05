# A classe ZMQSocket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.zmqsocket.php

---

# A classe ZMQSocket

(PECL zmq >= 0.5.0)

## Introdução

## Resumo da classe

class **ZMQSocket**
{

/\* Métodos \*/

public function [bind](zmqsocket.bind.md)([string](language.types.string.md) `$dsn`, [bool](language.types.boolean.md) `$force` = **`false`**): [ZMQSocket](class.zmqsocket.md)

public function [connect](zmqsocket.connect.md)([string](language.types.string.md) `$dsn`, [bool](language.types.boolean.md) `$force` = **`false`**): [ZMQSocket](class.zmqsocket.md)

public function [\_\_construct](zmqsocket.construct.md)(  
    [ZMQContext](class.zmqcontext.md) `$context`,  
    [int](language.types.integer.md) `$type`,  
    [string](language.types.string.md) `$persistent_id` = **`null`**,  
    [callable](language.types.callable.md) `$on_new_socket` = **`null`**  
)

public function [disconnect](zmqsocket.disconnect.md)([string](language.types.string.md) `$dsn`): [ZMQSocket](class.zmqsocket.md)

public function [getEndpoints](zmqsocket.getendpoints.md)(): [array](language.types.array.md)

public function [getPersistentId](zmqsocket.getpersistentid.md)(): [string](language.types.string.md)

public function [getSocketType](zmqsocket.getsockettype.md)(): [int](language.types.integer.md)

public function [getSockOpt](zmqsocket.getsockopt.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [isPersistent](zmqsocket.ispersistent.md)(): [bool](language.types.boolean.md)

public function [recv](zmqsocket.recv.md)([int](language.types.integer.md) `$mode` = 0): [string](language.types.string.md)

public function [recvMulti](zmqsocket.recvmulti.md)([int](language.types.integer.md) `$mode` = 0): [array](language.types.array.md)

public function [send](zmqsocket.send.md)([string](language.types.string.md) `$message`, [int](language.types.integer.md) `$mode` = 0): [ZMQSocket](class.zmqsocket.md)

public function [sendmulti](zmqsocket.sendmulti.md)([array](language.types.array.md) `$message`, [int](language.types.integer.md) `$mode` = 0): [ZMQSocket](class.zmqsocket.md)

public function [setSockOpt](zmqsocket.setsockopt.md)([int](language.types.integer.md) `$key`, [mixed](language.types.mixed.md) `$value`): [ZMQSocket](class.zmqsocket.md)

public function [unbind](zmqsocket.unbind.md)([string](language.types.string.md) `$dsn`): [ZMQSocket](class.zmqsocket.md)

}

## Índice

- [ZMQSocket::bind](zmqsocket.bind.md) — Associa o socket
- [ZMQSocket::connect](zmqsocket.connect.md) — Conecta o socket
- [ZMQSocket::\_\_construct](zmqsocket.construct.md) — Constrói um novo ZMQSocket
- [ZMQSocket::disconnect](zmqsocket.disconnect.md) — Desconecta um socket
- [ZMQSocket::getEndpoints](zmqsocket.getendpoints.md) — Obtém uma lista de destinos
- [ZMQSocket::getPersistentId](zmqsocket.getpersistentid.md) — Obtém o id persistente
- [ZMQSocket::getSocketType](zmqsocket.getsockettype.md) — Retorna o tipo de socket
- [ZMQSocket::getSockOpt](zmqsocket.getsockopt.md) — Obtém a opção do socket
- [ZMQSocket::isPersistent](zmqsocket.ispersistent.md) — Informa se o soquete é persistente
- [ZMQSocket::recv](zmqsocket.recv.md) — Recebe uma mensagem
- [ZMQSocket::recvMulti](zmqsocket.recvmulti.md) — Recebe uma mensagem de múltiplas partes
- [ZMQSocket::send](zmqsocket.send.md) — Envia uma mensagem
- [ZMQSocket::sendmulti](zmqsocket.sendmulti.md) — Envia uma mensagem de múltiplas partes
- [ZMQSocket::setSockOpt](zmqsocket.setsockopt.md) — Define uma opção de soquete
- [ZMQSocket::unbind](zmqsocket.unbind.md) — Desvincula o socket

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
