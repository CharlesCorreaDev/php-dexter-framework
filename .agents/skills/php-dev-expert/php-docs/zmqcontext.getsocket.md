# Cria um novo socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqcontext.getsocket.php

---

# ZMQContext::getSocket

(PECL zmq >= 0.5.0)

ZMQContext::getSocket — Cria um novo socket

### Descrição

public function **ZMQContext::getSocket**([int](language.types.integer.md) `$type`, [string](language.types.string.md) `$persistent_id` = **`null`**, [callable](language.types.callable.md) `$on_new_socket` = **`null`**): [ZMQSocket](class.zmqsocket.md)

Um atalho para criar sockets a partir de um contexto. Se o contexto não for persistente, o parâmetro `persistent_id`
é ignorado e o socket continua sendo não persistente. o parâmetro `on_new_socket` é chamado apenas
quando uma nova estrutura de socket for criada.

### Parâmetros

`type`
:   Uma constante **`ZMQ::SOCKET_*`** que especifica o tipo do socket.

`persistent_id`
:   Se o parâmetro `persistent_id` for especificado, o socket será persistente ao longo de várias requisições.

`on_new_socket`
:   Uma função de retorno que é executada quando uma nova estrutura de socket é criada. Essa função não é invocada
    se uma conexão persistente for reusada. A função de retorno tem um ZMQSocket e um persistent\_id como argumentos.

### Valor Retornado

Retorna um objeto [ZMQSocket](class.zmqsocket.md).

### Erros/Exceções

Lança um **ZMQSocketException** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **ZMQContext()****

Uso básico

```
<?php
/* Aloca um novo contexto */
$contexto = new ZMQContext();

/* Cria um novo socket */
$socket = $contexto->getSocket(ZMQ::SOCKET_REQ, 'meu socket');

/* Conecta o socket */
$socket->connect("tcp://exemplo.com:1234");

/* Envia uma requisição */
$socket->send("Olá");

/* Recebe a resposta */
$mensagem = $socket->recv();
echo "Mensagem recebida: {$mensagem}\n";
?>
```

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
