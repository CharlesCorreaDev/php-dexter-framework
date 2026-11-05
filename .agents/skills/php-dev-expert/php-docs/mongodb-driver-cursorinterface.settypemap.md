# Define um mapa de tipos a ser usado para desserialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorinterface.settypemap.php

---

# MongoDB\Driver\CursorInterface::setTypeMap

(mongodb >=1.6.0)

MongoDB\Driver\CursorInterface::setTypeMap — Define um mapa de tipos a ser usado para desserialização BSON

### Descrição

abstract public function **MongoDB\Driver\CursorInterface::setTypeMap**([array](language.types.array.md) `$typemap`): [void](language.types.void.md)

Define a [configuração do mapa
de tipos](mongodb.persistence.md#mongodb.persistence.typemaps) a ser usada ao desserializar os resultados do
BSON em valores PHP.

### Parâmetros

`typeMap` ([array](language.types.array.md))
:   [Configuração de mapeamento de tipos](mongodb.persistence.md#mongodb.persistence.typemaps).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Cursor::setTypeMap()](mongodb-driver-cursor.settypemap.md) - Define um mapa de tipos a ser usado para desserialização BSON
- [Dados Persistentes](mongodb.persistence.md)

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
