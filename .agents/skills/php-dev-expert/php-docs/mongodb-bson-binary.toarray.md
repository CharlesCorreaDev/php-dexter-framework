# Retorna o vetor como um array para um binário com subtipo MongoDB\BSON\Binary::SUBTYPE_VECTOR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.toarray.php

---

# MongoDB\BSON\Binary::toArray

(mongodb >=2.2.0)

MongoDB\BSON\Binary::toArray — Retorna o vetor como um array para um binário com subtipo **`MongoDB\BSON\Binary::SUBTYPE_VECTOR`**

### Descrição

final public function **MongoDB\BSON\Binary::toArray**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo os dados do vetor.

### Erros/Exceções

- Lança um [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se o subtipo não for **`MongoDB\BSON\Binary::SUBTYPE_VECTOR`**.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\Binary::fromVector()](mongodb-bson-binary.fromvector.md) - Cria um novo binário com subtipo MongoDB\BSON\Binary::SUBTYPE\_VECTOR a partir de um array e do tipo de vetor
- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
