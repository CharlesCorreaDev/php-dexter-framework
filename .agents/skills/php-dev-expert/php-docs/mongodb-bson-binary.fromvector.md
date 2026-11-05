# Cria um novo binário com subtipo MongoDB\BSON\Binary::SUBTYPE_VECTOR a partir de um array e do tipo de vetor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.fromvector.php

---

# MongoDB\BSON\Binary::fromVector

(mongodb >=2.2.0)

MongoDB\BSON\Binary::fromVector — Cria um novo binário com subtipo **`MongoDB\BSON\Binary::SUBTYPE_VECTOR`** a partir de um array e do tipo de vetor

### Descrição

final public static function **MongoDB\BSON\Binary::fromVector**([array](language.types.array.md) `$vector`, [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md) `$vectorType`): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

### Parâmetros

`vector` ([array](language.types.array.md))
:   Um array de valores representando os dados do vetor. O tipo de cada valor precisa corresponder ao tipo indicado pelo parâmetro `vectorType`:

    - para **`MongoDB\BSON\VectorType::Float32`**, cada valor precisa ser um [float](language.types.float.md)
    - para **`MongoDB\BSON\VectorType::Int8`**, cada valor precisa ser um [int](language.types.integer.md) de 8 bits, ou seja, de `-127` a `128`
    - para **`MongoDB\BSON\VectorType::PackedBit`**, cada valor precisa ser um [bool](language.types.boolean.md) ou um [int](language.types.integer.md) de 1 bit, ou seja `0` ou `1`

`vectorType` ([MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md))
:   O tipo de dados do vetor.

### Valor Retornado

Retorna um novo binário com subtipo **`MongoDB\BSON\Binary::SUBTYPE_VECTOR`**.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\Binary::toArray()](mongodb-bson-binary.toarray.md) - Retorna o vetor como um array para um binário com subtipo MongoDB\BSON\Binary::SUBTYPE\_VECTOR
- [MongoDB\BSON\Binary::getVectorType()](mongodb-bson-binary.getvectortype.md) - Retorna o tipo de dados de um binário com o subtipo do vetor
- [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md)
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
