# Retorna o valor de um índice do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.get.php

---

# MongoDB\BSON\PackedArray::get

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::get — Retorna o valor de um índice do array

### Descrição

final public function **MongoDB\BSON\PackedArray::get**([int](language.types.integer.md) `$key`): [mixed](language.types.mixed.md)

### Parâmetros

`key` ([int](language.types.integer.md))
:   O índice a ser obtido do array.

### Valor Retornado

Retorna o valor associado com o índice informado. Se o índice não estiver
presente no array, uma exceção é lançada.

> **Nota**:
>
> Ao encontrar um valor codificado como inteiro de 64 bits no array BSON,
> o valor deste método será uma instância de
> [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se o índice não estiver presente no array.

### Veja também

- [MongoDB\BSON\PackedArray::has()](mongodb-bson-packedarray.has.md) - Informa se um índice está presente no array
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
