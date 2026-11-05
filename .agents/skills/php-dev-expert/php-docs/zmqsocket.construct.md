# Constrói um novo ZMQSocket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.construct.php

---

# ZMQSocket::\_\_construct

(PECL zmq >= 0.5.0)

ZMQSocket::\_\_construct — Constrói um novo ZMQSocket

### Descrição

public function **ZMQSocket::\_\_construct**(  
    [ZMQContext](class.zmqcontext.md) `$context`,  
    [int](language.types.integer.md) `$type`,  
    [string](language.types.string.md) `$persistent_id` = **`null`**,  
    [callable](language.types.callable.md) `$on_new_socket` = **`null`**  
)

Constrói um objeto ZMQSocket. O parâmetro `persistent_id` pode ser usado para alocar um socket
persistente. Um socket persistente deve ser alocado a partir de um contexto persistente e permanece conectado ao longo de várias requisições.
O parâmetro `persistent_id` pode ser usado para chamar novamente o mesmo socket ao longo de várias requisições. O
parâmetro `on_new_socket` é chamado apenas quando uma nova instância de socket for criada.

### Parâmetros

`context`
:   Um objeto ZMQContext.

`type`
:   O tipo do socket. Consulte as constantes **`ZMQ::SOCKET_*`**.

`persistent_id`
:   Se o parâmetro `persistent_id` for especificado, o socket será persistente ao longo de várias requisições.
    Se o parâmetro `context` não for persistente, o socket volta para o modo não persistente.

`on_new_socket`
:   Uma função de retorno que é executada quando uma nova instância de socket é criada. Essa função não é invocada
    se a conexão em uso for persistente e estiver sendo reusada.

    function callback([ZMQSocket](class.zmqsocket.md) `$socket`, [string](language.types.string.md) `$persistent_id` = **`null`**)

### Erros/Exceções

Lança um **ZMQSocketException** em erros.

### Examples

**Exemplo #1 Exemplo de **ZMQSocket()****

Utilizando um callback para conectar associar um socket

```
<?php

/*
  O socket é persistente e por isso essa função é chamada apenas na
  primeira requisição ao script.
*/
function novo_socket_cb(ZMQSocket $socket, $id_persistente = null)
{
    if ($id_persistente === 'servidor') {
        $socket->bind("tcp://localhost:12122");
    } else {
        $socket->connect("tcp://localhost:12122");
    }
}

/* Aloca um novo contexto */
$contexto = new ZMQContext();

/* Cria um novo socket */
$socket = $contexto->getSocket(ZMQ::SOCKET_REP, 'servidor', 'novo_socket_cb');

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
