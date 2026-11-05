# Obtém uma lista de destinos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.getendpoints.php

---

# ZMQSocket::getEndpoints

(PECL zmq >= 0.5.0)

ZMQSocket::getEndpoints — Obtém uma lista de destinos

### Descrição

public function **ZMQSocket::getEndpoints**(): [array](language.types.array.md)

Retorna uma lista de destinos onde aos quais o socket está connectado ou associado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um vetor (array) contendo elementos 'bind' (associados) e 'connect' (conectados).

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
