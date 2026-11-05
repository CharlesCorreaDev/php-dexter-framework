# Retorna o tipo de dados de um binário com o subtipo do vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.getvectortype.php

---

# MongoDB\BSON\Binary::getVectorType

(mongodb >=2.2.0)

MongoDB\BSON\Binary::getVectorType — Retorna o tipo de dados de um binário com o subtipo do vetor

### Descrição

final public function **MongoDB\BSON\Binary::getVectorType**(): [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tipo de dados do vetor binário.

### Erros/Exceções

- Lança um [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se o subtipo não for **`MongoDB\BSON\Binary::SUBTYPE_VECTOR`**.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)
- [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md)

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
