# Recebe uma mensagem de múltiplas partes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.recvmulti.php

---

# ZMQSocket::recvMulti

(PECL zmq >= 0.8.0)

ZMQSocket::recvMulti — Recebe uma mensagem de múltiplas partes

### Descrição

public function **ZMQSocket::recvMulti**([int](language.types.integer.md) `$mode` = 0): [array](language.types.array.md)

Recebe um array de mensagem de múltiplas partes de um soquete. Por padrão, a recepção será bloqueada até que uma mensagem esteja disponível, a menos que
a constante **`ZMQ::MODE_NOBLOCK`** seja usada.

### Parâmetros

`mode`
:   Passa indicadores de modo para receber mensagens com múltiplas partes ou operações não bloqueantes.
    Consulte as constantes **`ZMQ::MODE_*`**.

### Valor Retornado

Retorna o array com as partes da mensagem. Lança uma exceção ZMQSocketException em caso de erro.
Se a constante **`ZMQ::MODE_NOBLOCK`** for usada e a operação for
bloqueante, [bool](language.types.boolean.md) 'false' será retornado.

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
