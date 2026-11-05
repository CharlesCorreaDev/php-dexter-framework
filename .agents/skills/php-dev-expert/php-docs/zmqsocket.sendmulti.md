# Envia uma mensagem de múltiplas partes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.sendmulti.php

---

# ZMQSocket::sendmulti

(PECL zmq >= 0.8.0)

ZMQSocket::sendmulti — Envia uma mensagem de múltiplas partes

### Descrição

public function **ZMQSocket::sendmulti**([array](language.types.array.md) `$message`, [int](language.types.integer.md) `$mode` = 0): [ZMQSocket](class.zmqsocket.md)

Envia uma mensagem com múltiplas partes usando o soquete. A operação pode bloquear, exceto caso **`ZMQ::MODE_NOBLOCK`** seja usada.

### Parâmetros

`message`
:   A mensagem a ser enviada - um array de strings

`mode`
:   Passe indicadores de modo para receber mensagens com múltiplas partes ou operações não bloqueantes.
    Consulte as constantes **`ZMQ::MODE_*`**.

### Valor Retornado

Retorna o objeto atual. Lança uma exceção ZMQSocketException em caso de erro.
Se a constante **`ZMQ::MODE_NOBLOCK`** for usada e a operação for bloqueante,
[bool](language.types.boolean.md) 'false' será retornado.

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
