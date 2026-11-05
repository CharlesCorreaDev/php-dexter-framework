# Retorna a representação PHP do array BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.tophp.php

---

# MongoDB\BSON\PackedArray::toPHP

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::toPHP — Retorna a representação PHP do array BSON

### Descrição

final public function **MongoDB\BSON\PackedArray::toPHP**([?](language.types.null.md)[array](language.types.array.md) `$typeMap` = **`null`**): [array](language.types.array.md)|[object](language.types.object.md)

### Parâmetros

`typeMap` ([array](language.types.array.md))
:   [Configuração de mapeamento de tipos](mongodb.persistence.md#mongodb.persistence.typemaps).

### Valor Retornado

O valor PHP decodificado.

> **Nota**:
>
> Ao encontrar um valor codificado como inteiro de 64 bits no array BSON,
> o valor deste método será uma instância de
> [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  uma classe no mapa de tipos não puder ser instanciada ou não implementar
  [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md).

### Veja também

- [MongoDB\BSON\toPHP()](function.mongodb.bson-tophp.md) - Retorna a representação PHP de um valor BSON
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
