# Desconecta um socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.disconnect.php

---

# ZMQSocket::disconnect

(PECL zmq >= 1.0.4)

ZMQSocket::disconnect — Desconecta um socket

### Descrição

public function **ZMQSocket::disconnect**([string](language.types.string.md) `$dsn`): [ZMQSocket](class.zmqsocket.md)

Desconecta o socket de um destino remoto previamente conectado. O destino é definido no formato
`transport://address` onde transporte é um dos itens a seguir: inproc, ipc, tcp, pgm ou epgm.

### Parâmetros

`dsn`
:   O destino conectado, por exemplo `transport://address`.

### Valor Retornado

Retorna o objeto atual. Lança uma exceção ZMQSocketException caso haja erro.

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
