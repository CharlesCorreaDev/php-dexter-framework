# Retorna o ID deste cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorinterface.getid.php

---

# MongoDB\Driver\CursorInterface::getId

(mongodb >=1.6.0)

MongoDB\Driver\CursorInterface::getId — Retorna o ID deste cursor

### Descrição

abstract public function **MongoDB\Driver\CursorInterface::getId**(): [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

Retorna o ID deste cursor, que identifica o cursor de forma única no
servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID deste cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.20.0 | Adicionado [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) ao tipo de retorno provisório para este método. [MongoDB\Driver\CursorId](class.mongodb-driver-cursorid.md) será removido do tipo de retorno na versão 2.0. |

### Veja também

- [MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md) - Retorna o ID para este cursor
- [MongoDB\Driver\CursorId](class.mongodb-driver-cursorid.md)
- [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

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
