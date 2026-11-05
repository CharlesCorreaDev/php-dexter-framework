# Retorna a representação JSON estendida relaxada do array BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.torelaxedextendedjson.php

---

# MongoDB\BSON\PackedArray::toRelaxedExtendedJSON

(mongodb >=1.20.0)

MongoDB\BSON\PackedArray::toRelaxedExtendedJSON — Retorna a representação JSON estendida relaxada do array BSON

### Descrição

final public function **MongoDB\BSON\PackedArray::toRelaxedExtendedJSON**(): [string](language.types.string.md)

Converte o array BSON em sua representação
[» JSON estendida relaxada](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#relaxed-extended-json-example).
O formato relaxado prefere o uso de primitivos do tipo JSON em
detrimento da fidelidade do tipo e é mais adequado para produzir resultados que podem ser
facilmente consumidos por APIs da web e humanos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a representação
[» JSON estendida relaxada](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#relaxed-extended-json-example)
do array BSON.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\PackedArray::toRelaxedExtendedJSON()****

```
<?php

$array = [
    'foo',
    123,
    4294967295,
    new MongoDB\BSON\ObjectId('56315a7c6118fd1b920270b1'),
];

$packedArray = MongoDB\BSON\PackedArray::fromPHP($array);
echo $packedArray->toRelaxedExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá:

```
[ "foo", 123, 4294967295, { "$oid" : "56315a7c6118fd1b920270b1" } ]
```

### Veja também

- [MongoDB\BSON\PackedArray::fromJSON()](mongodb-bson-packedarray.fromjson.md) - Constrói uma nova instância de array BSON a partir de uma string JSON
- [MongoDB\BSON\PackedArray::toCanonicalExtendedJSON()](mongodb-bson-packedarray.tocanonicalextendedjson.md) - Retorna a representação JSON Estendida Canônica do array BSON
- [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md) - Retorna a representação JSON Estendida Relaxada de um valor BSON
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
