# Retorna o servidor associado a este cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorinterface.getserver.php

---

# MongoDB\Driver\CursorInterface::getServer

(mongodb >=1.6.0)

MongoDB\Driver\CursorInterface::getServer — Retorna o servidor associado a este cursor

### Descrição

abstract public function **MongoDB\Driver\CursorInterface::getServer**(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
cursor. Este é o servidor que executou a
[MongoDB\Driver\Query](class.mongodb-driver-query.md) ou o
[MongoDB\Driver\Command](class.mongodb-driver-command.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Cursor::getServer()](mongodb-driver-cursor.getserver.md) - Retorna o servidor associado a este cursor
- [MongoDB\Driver\Server](class.mongodb-driver-server.md)

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
