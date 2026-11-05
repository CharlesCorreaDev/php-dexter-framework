# Retorna um array contendo todos os resultados deste cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorinterface.toarray.php

---

# MongoDB\Driver\CursorInterface::toArray

(mongodb >=1.6.0)

MongoDB\Driver\CursorInterface::toArray — Retorna um array contendo todos os resultados deste cursor

### Descrição

abstract public function **MongoDB\Driver\CursorInterface::toArray**(): [array](language.types.array.md)

Itera o cursor e retorna seus resultados em um array.
A função [MongoDB\Driver\CursorInterface::setTypeMap()](mongodb-driver-cursorinterface.settypemap.md) pode ser usada
para controlar como os documentos serão desserializados em valores PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todos os resultados deste cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Cursor::toArray()](mongodb-driver-cursor.toarray.md) - Retorna um array contendo todos os resultados deste cursor
- [MongoDB\Driver\CursorInterface::setTypeMap()](mongodb-driver-cursorinterface.settypemap.md) - Define um mapa de tipos a ser usado para desserialização BSON

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
