# Conecta o socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.connect.php

---

# ZMQSocket::connect

(PECL zmq >= 0.5.0)

ZMQSocket::connect — Conecta o socket

### Descrição

public function **ZMQSocket::connect**([string](language.types.string.md) `$dsn`, [bool](language.types.boolean.md) `$force` = **`false`**): [ZMQSocket](class.zmqsocket.md)

Conecta o socket ao destino remoto. O destino é definido no formato `transport://address`, onde
transporte é um dos seguintes itens: inproc, ipc, tcp, pgm ou epgm.

### Parâmetros

`dsn`
:   O destino da conexão, por exemplo `transport://address`.

`force`
:   Tenta conectar mesmo se o socket já foi conectado a um dado destino.

### Valor Retornado

Retorna o objeto atual.

### Erros/Exceções

Lança um erro **ZMQSocketException**.

### Examples

**Exemplo #1 Um exemplo de **ZMQContext()****

Constrói um novo contexto e aloca a requisição do socket a partir dele

```
<?php
/* Nome do servidor */
$destino = "tcp://127.0.0.1:5555";

/* Cria um socket */
$socket = new ZMQSocket(new ZMQContext(), ZMQ::SOCKET_REQ, 'meu socket');

/* Obtém uma lista dos destinos conectados */
$destinos = $socket->getEndpoints();

/* Verifica se o socket está conectado */
if (!in_array($destino, $destinos['connect'])) {
    echo "<p>Conectando em $destino</p>";
    $socket->connect($destino);
} else {
    echo "<p>Já está conectado em $destino</p>";
}

/* Envia e Recebe */
$socket->send("Olá!");
$mensagem = $socket->recv();

echo "<p>O servidor disse: {$mensagem}</p>";
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
