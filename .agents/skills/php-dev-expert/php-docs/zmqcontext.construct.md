# Constrói um novo objeto ZMQContext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqcontext.construct.php

---

# ZMQContext::\_\_construct

(PECL zmq >= 0.5.0)

ZMQContext::\_\_construct — Constrói um novo objeto ZMQContext

### Descrição

public function **ZMQContext::\_\_construct**([int](language.types.integer.md) `$io_threads` = 1, [bool](language.types.boolean.md) `$is_persistent` = **`true`**)

Constrói um novo contexto ZMQ. O contexto é usado para inicializar os sockets. Um contexto persistente é necessário
para inicializar sockets persistentes.

### Parâmetros

`io_threads`
:   Número de threads de I/O no contexto.

`is_persistent`
:   Indica se o contexto é persistente. Um contexto persistente é armazenado
    ao longo de várias requisições e é um requisito para os sockets persistentes.

### Erros/Exceções

Lança um **ZMQContextException** caso a inicialização do contexto falhe.

### Examples

**Exemplo #1 Um exemplo de **ZMQContext()****

Constrói um novo contexto e aloca um socket de requisição a partir dele

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
