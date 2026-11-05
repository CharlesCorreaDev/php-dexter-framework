# Envia uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.send.php

---

# ZMQSocket::send

(PECL zmq >= 0.5.0)

ZMQSocket::send — Envia uma mensagem

### Descrição

public function **ZMQSocket::send**([string](language.types.string.md) `$message`, [int](language.types.integer.md) `$mode` = 0): [ZMQSocket](class.zmqsocket.md)

Envia uma mensagem usando o soquete. A operação pode bloquear, a menos que a constante **`ZMQ::MODE_NOBLOCK`** seja usada.

### Parâmetros

`message`
:   A mensagem a ser enviada.

`mode`
:   Passa um indicador para receber mensagens com múltiplas partes ou operações não bloqueantes.
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
