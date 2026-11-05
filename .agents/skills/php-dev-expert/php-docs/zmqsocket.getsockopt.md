# Obtém a opção do socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.getsockopt.php

---

# ZMQSocket::getSockOpt

(PECL zmq >= 0.5.0)

ZMQSocket::getSockOpt — Obtém a opção do socket

### Descrição

public function **ZMQSocket::getSockOpt**([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

Retorna o valor de uma opção de socket.

### Parâmetros

`key`
:   Um inteiro representando a opção.
    Consulte as constantes **`ZMQ::SOCKOPT_*`**.

### Valor Retornado

Retorna tanto uma [string](language.types.string.md) ou um [int](language.types.integer.md) dependendo do parâmetro `key`. Lança
uma exceção ZMQSocketException caso haja erro.

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
