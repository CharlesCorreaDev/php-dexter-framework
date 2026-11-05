# Retorna o valor de um índice do array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.offsetget.php

---

# MongoDB\BSON\PackedArray::offsetGet

(mongodb >=1.17.0)

MongoDB\BSON\PackedArray::offsetGet —  Retorna o valor de um índice do array

### Descrição

final public function **MongoDB\BSON\PackedArray::offsetGet**([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

### Parâmetros

`key`
:   O índice a ser obtido do array. Somente [int](language.types.integer.md) é suportado.

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

- [ArrayAccess::offsetGet()](arrayaccess.offsetget.md) - Posição a ser obtida
- [MongoDB\BSON\PackedArray::get()](mongodb-bson-packedarray.get.md) - Retorna o valor de um índice do array

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
