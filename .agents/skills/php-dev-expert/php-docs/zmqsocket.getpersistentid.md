# Obtém o id persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.getpersistentid.php

---

# ZMQSocket::getPersistentId

(PECL zmq >= 0.5.0)

ZMQSocket::getPersistentId — Obtém o id persistente

### Descrição

public function **ZMQSocket::getPersistentId**(): [string](language.types.string.md)

Retorna o id do socket persistente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a string com o id persistente atribuído ao objeto e **`null`** caso o socket não seja persistente.

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
