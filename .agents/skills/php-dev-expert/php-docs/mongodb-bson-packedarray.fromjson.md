# Constrói uma nova instância de array BSON a partir de uma string JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.fromjson.php

---

# MongoDB\BSON\PackedArray::fromJSON

(mongodb >=1.20.0)

MongoDB\BSON\PackedArray::fromJSON — Constrói uma nova instância de array BSON a partir de uma string JSON

### Descrição

final static public function **MongoDB\BSON\PackedArray::fromJSON**([string](language.types.string.md) `$json`): [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

Converte uma string em
[» JSON estendido](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
para sua representação BSON.

### Parâmetros

`json` ([string](language.types.string.md))
:   Valor JSON a ser convertido.

### Valor Retornado

Retorna uma nova instância de [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma
  [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se
  o valor JSON não puder ser convertido para um array BSON (ex: devido a um erro
  de sintaxe).

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\PackedArray::fromJSON()****

```
<?php

$json = '[ "foo", { "$numberInt" : "123" }, { "$numberLong" : "4294967295" }, { "$oid" : "56315a7c6118fd1b920270b1" } ]';
$packedArray = MongoDB\BSON\PackedArray::fromJSON($json);
var_dump($packedArray);

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\PackedArray)#1 (2) {
  ["data"]=>
  string(68) "MQAAAAIwAAQAAABmb28AEDEAewAAABIyAP////8AAAAABzMAVjFafGEY/RuSAnCxAA=="
  ["value"]=>
  array(4) {
    [0]=>
    string(3) "foo"
    [1]=>
    int(123)
    [2]=>
    int(4294967295)
    [3]=>
    object(MongoDB\BSON\ObjectId)#2 (1) {
      ["oid"]=>
      string(24) "56315a7c6118fd1b920270b1"
    }
  }
}
```

### Veja também

- [MongoDB\BSON\PackedArray::fromPHP()](mongodb-bson-packedarray.fromphp.md) - Constrói uma nova instância de array BSON a partir de dados PHP
- [» JSON Estendido do MongoDB](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
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
