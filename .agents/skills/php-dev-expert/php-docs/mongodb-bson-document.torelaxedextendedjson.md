# Retorna a representação JSON Estentida Relaxada do documento BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.torelaxedextendedjson.php

---

# MongoDB\BSON\Document::toRelaxedExtendedJSON

(mongodb >=1.16.0)

MongoDB\BSON\Document::toRelaxedExtendedJSON — Retorna a representação JSON Estentida Relaxada do documento BSON

### Descrição

final public function **MongoDB\BSON\Document::toRelaxedExtendedJSON**(): [string](language.types.string.md)

Converte o documento BSON para sua representação
[» JSON Estentida Relaxada](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#relaxed-extended-json-example)
O formato relaxado prefere o uso de primitivos do tipo JSON em
detrimento da fidelidade de tipo e é mais adequado para produzir resultados que podem ser
facilmente consumidos por APIs da web e humanos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a representação
[» JSON Estendida Relaxada](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#relaxed-extended-json-example)
do documento BSON.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Document::toRelaxedExtendedJSON()****

```
<?php

$documents = [
    [ 'null' => null ],
    [ 'boolean' => true ],
    [ 'string' => 'foo' ],
    [ 'int32' => 123 ],
    [ 'int64' => 4294967295 ],
    [ 'double' => 1.0 ],
    [ 'nan' => NAN ],
    [ 'pos_inf' => INF ],
    [ 'neg_inf' => -INF ],
    [ 'array' => [ 'foo', 'bar' ]],
    [ 'document' => [ 'foo' => 'bar' ]],
    [ 'oid' => new MongoDB\BSON\ObjectId('56315a7c6118fd1b920270b1') ],
    [ 'dec128' => new MongoDB\BSON\Decimal128('1234.5678') ],
    [ 'binary' => new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC) ],
    [ 'date' => new MongoDB\BSON\UTCDateTime(1445990400000) ],
    [ 'timestamp' => new MongoDB\BSON\Timestamp(1234, 5678) ],
    [ 'regex' => new MongoDB\BSON\Regex('pattern', 'i') ],
    [ 'code' => new MongoDB\BSON\Javascript('function() { return 1; }') ],
    [ 'code_ws' => new MongoDB\BSON\Javascript('function() { return a; }', ['a' => 1]) ],
    [ 'minkey' => new MongoDB\BSON\MinKey ],
    [ 'maxkey' => new MongoDB\BSON\MaxKey ],
];

foreach ($documents as $document) {
    $bson = MongoDB\BSON\Document::fromPHP($document);
    echo $bson->toRelaxedExtendedJSON(), "\n";
}

?>
```

O exemplo acima produzirá:

```
{ "null" : null }
{ "boolean" : true }
{ "string" : "foo" }
{ "int32" : 123 }
{ "int64" : 4294967295 }
{ "double" : 1.0 }
{ "nan" : { "$numberDouble" : "NaN" } }
{ "pos_inf" : { "$numberDouble" : "Infinity" } }
{ "neg_inf" : { "$numberDouble" : "-Infinity" } }
{ "array" : [ "foo", "bar" ] }
{ "document" : { "foo" : "bar" } }
{ "oid" : { "$oid" : "56315a7c6118fd1b920270b1" } }
{ "dec128" : { "$numberDecimal" : "1234.5678" } }
{ "binary" : { "$binary" : { "base64": "Zm9v", "subType" : "00" } } }
{ "date" : { "$date" : "2015-10-28T00:00:00Z" } }
{ "timestamp" : { "$timestamp" : { "t" : 5678, "i" : 1234 } } }
{ "regex" : { "$regularExpression" : { "pattern" : "pattern", "options" : "i" } } }
{ "code" : { "$code" : "function() { return 1; }" } }
{ "code_ws" : { "$code" : "function() { return a; }", "$scope" : { "a" : 1 } } }
{ "minkey" : { "$minKey" : 1 } }
{ "maxkey" : { "$maxKey" : 1 } }
```

### Veja também

- [MongoDB\BSON\Document::fromJSON()](mongodb-bson-document.fromjson.md) - Constrói uma nova instância de documento a partir de uma string JSON
- [MongoDB\BSON\Document::toCanonicalExtendedJSON()](mongodb-bson-document.tocanonicalextendedjson.md) - Retorna a representação JSON estendida canônica do documento BSON
- [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md) - Retorna a representação JSON Estendida Relaxada de um valor BSON
- [» Especificação JSON Estendida](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md)
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
