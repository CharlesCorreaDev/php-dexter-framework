# Associa o socket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqsocket.bind.php

---

# ZMQSocket::bind

(PECL zmq >= 0.5.0)

ZMQSocket::bind — Associa o socket

### Descrição

public function **ZMQSocket::bind**([string](language.types.string.md) `$dsn`, [bool](language.types.boolean.md) `$force` = **`false`**): [ZMQSocket](class.zmqsocket.md)

Associa o socket a um destino. O destino é definido no formato `transport://address`, onde
transport é um dos seguintes itens: inproc, ipc, tcp, pgm ou epgm.

### Parâmetros

`dsn`
:   O destino que será associado, por exemplo `transport://address`.

`force`
:   Tenta associar ao destino mesmo que o socket já tenha sido associado ao destino informado.

### Valor Retornado

Retorna o objeto atual. Lança um aexceção ZMQSocketException caso haja erro.

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
