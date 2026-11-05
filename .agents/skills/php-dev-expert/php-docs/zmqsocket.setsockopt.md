# Define uma opção de soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.setsockopt.php

---

# ZMQSocket::setSockOpt

(PECL zmq >= 0.5.0)

ZMQSocket::setSockOpt — Define uma opção de soquete

### Descrição

public function **ZMQSocket::setSockOpt**([int](language.types.integer.md) `$key`, [mixed](language.types.mixed.md) `$value`): [ZMQSocket](class.zmqsocket.md)

Define uma opção para o soquete ZMQ. O tipo do parâmetro `value` depende do parâmetro `key`.
Consulte [Tipos de Constantes ZMQ](class.zmq.md#zmq.constants) para mais informações.

### Parâmetros

`key`
:   Uma das constantes **`ZMQ::SOCKOPT_*`**.

`value`
:   O valor do parâmetro.

### Valor Retornado

Retorna o objeto atual. Lança uma exceção ZMQSocketException em caso de erro.

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
