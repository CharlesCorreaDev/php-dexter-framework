# Retorna a representação JSON Estendida Canônica do array BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.tocanonicalextendedjson.php

---

# MongoDB\BSON\PackedArray::toCanonicalExtendedJSON

(mongodb >=1.20.0)

MongoDB\BSON\PackedArray::toCanonicalExtendedJSON — Retorna a representação JSON Estendida Canônica do array BSON

### Descrição

final public function **MongoDB\BSON\PackedArray::toCanonicalExtendedJSON**(): [string](language.types.string.md)

Converte o array BSON em sua representação
[» JSON Estendida Canônica](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#canonical-extended-json-example).
O formato canônico prefere a fidelidade de tipo em detrimento da
saída concisa e é mais adequado para produzir saída que pode ser convertida
de volta para BSON sem qualquer perda de informação de tipo (por exemplo, os tipos numéricos
permanecerão diferenciados).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a representação
[» JSON Estendida Canônica](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#canonical-extended-json-example)
do array BSON.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\PackedArray::toCanonicalExtendedJSON()****

```
<?php

$array = [
    'foo',
    123,
    4294967295,
    new MongoDB\BSON\ObjectId('56315a7c6118fd1b920270b1'),
];

$packedArray = MongoDB\BSON\PackedArray::fromPHP($array);
echo $packedArray->toCanonicalExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá:

```
[ "foo", { "$numberInt" : "123" }, { "$numberLong" : "4294967295" }, { "$oid" : "56315a7c6118fd1b920270b1" } ]
```

### Veja também

- [MongoDB\BSON\PackedArray::fromJSON()](mongodb-bson-packedarray.fromjson.md) - Constrói uma nova instância de array BSON a partir de uma string JSON
- [MongoDB\BSON\PackedArray::toRelaxedExtendedJSON()](mongodb-bson-packedarray.torelaxedextendedjson.md) - Retorna a representação JSON estendida relaxada do array BSON
- [MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md) - Retorna a representação JSON Estendida Canônica de um valor BSON
- [» Especificação JSON Estendido](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md)
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
