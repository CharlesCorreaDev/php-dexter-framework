# Informa se um índice está presente no array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.has.php

---

# MongoDB\BSON\PackedArray::has

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::has — Informa se um índice está presente no array

### Descrição

final public function **MongoDB\BSON\PackedArray::has**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

### Parâmetros

`index` ([int](language.types.integer.md))
:   O índice a ser procurado no array.

### Valor Retornado

Retorna **`true`** se o índice estiver presente no array ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\PackedArray::get()](mongodb-bson-packedarray.get.md) - Retorna o valor de um índice do array
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
