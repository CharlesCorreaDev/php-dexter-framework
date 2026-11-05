# Desvincula o socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.unbind.php

---

# ZMQSocket::unbind

(PECL zmq >= 1.0.4)

ZMQSocket::unbind — Desvincula o socket

### Descrição

public function **ZMQSocket::unbind**([string](language.types.string.md) `$dsn`): [ZMQSocket](class.zmqsocket.md)

Desassocia o socket de um destino. O destino é definido no formato `transport://address` onde
"transporte" é um dos seguintes: inproc, ipc, tcp, pgm ou epgm.

### Parâmetros

`dsn`
:   O destino associado anteriormente. Por exemplo `transport://address`.

### Valor Retornado

Retorna o objeto atual. Lança uma ZMQSocketException em caso de erro.

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
