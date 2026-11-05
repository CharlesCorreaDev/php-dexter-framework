# Retorna a representação JSON Estendida Legada de um valor BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.bson-tojson.php

---

# MongoDB\BSON\toJSON

(mongodb >=1.0.0)

MongoDB\BSON\toJSON — Retorna a representação JSON Estendida Legada de um valor BSON

**Aviso**

Esta função foi *DESCONTINUADA* a partir da versão
1.20.0 da extensão, e foi removida na 2.0. As aplicações devem usar
[MongoDB\BSON\Document::toCanonicalExtendedJSON()](mongodb-bson-document.tocanonicalextendedjson.md) ou
[MongoDB\BSON\Document::toRelaxedExtendedJSON()](mongodb-bson-document.torelaxedextendedjson.md)
em seu lugar.

### Descrição

function **MongoDB\BSON\toJSON**([string](language.types.string.md) `$bson`): [string](language.types.string.md)

Converte uma string BSON na sua
representação
[» JSON Estendida Legada](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)

> **Nota**:
>
> Existem vários formatos JSON para representar BSON. Esta função
> implementa o "modo estrito" definido em
> [» JSON Estendido MongoDB](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/),
> que foi substituído pelos formatos canônicos e relaxados definidos
> na
> [» Especificação JSON estendida](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md)
> e implementada por [MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md)
> e [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md), respectivamente.

**Aviso**

[» JSON](https://www.json.org/) não suporta
[**`NAN`**](language.types.float.md#language.types.float.nan) e
[**`INF`**](function.is-infinite.md) e
o formato JSON Estendido Legado do MongoDB não define uma representação
alternativa para estes valores
([» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson) irá produzir
literais `nan` e `inf`, que podem não ser
interpretados como JSON válido). Ao trabalhar com BSON que possa conter
números não finitos, devem ser usados os métodos
[MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md) ou
[MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md).

### Parâmetros

`bson` ([string](language.types.string.md))
:   Valor BSON a ser convertido.

### Valor Retornado

O valor JSON convertido.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se a entrada não contiver exatamente um documento BSON. Os possíveis motivos incluem, mas não estão limitados a, BSON inválido, dados extras (depois de ler um documento BSON) ou um erro inesperado da [» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta função foi removida. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\toJSON()****

```
<?php

$documents = [
    [ 'null' => null ],
    [ 'boolean' => true ],
    [ 'string' => 'foo' ],
    [ 'int32' => 123 ],
    [ 'int64' => 4294967295 ],
    [ 'double' => 1.0, ],
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
    $bson = MongoDB\BSON\fromPHP($document);
    echo MongoDB\BSON\toJSON($bson), "\n";
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
{ "nan" : nan }
{ "pos_inf" : inf }
{ "neg_inf" : -inf }
{ "array" : [ "foo", "bar" ] }
{ "document" : { "foo" : "bar" } }
{ "oid" : { "$oid" : "56315a7c6118fd1b920270b1" } }
{ "dec128" : { "$numberDecimal" : "1234.5678" } }
{ "binary" : { "$binary" : "Zm9v", "$type" : "00" } }
{ "date" : { "$date" : 1445990400000 } }
{ "timestamp" : { "$timestamp" : { "t" : 5678, "i" : 1234 } } }
{ "regex" : { "$regex" : "pattern", "$options" : "i" } }
{ "code" : { "$code" : "function() { return 1; }" } }
{ "code_ws" : { "$code" : "function() { return a; }", "$scope" : { "a" : 1 } } }
{ "minkey" : { "$minKey" : 1 } }
{ "maxkey" : { "$maxKey" : 1 } }
```

### Veja também

- [MongoDB\BSON\fromJSON()](function.mongodb.bson-fromjson.md) - Retorna a representação BSON de um valor JSON
- [MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md) - Retorna a representação JSON Estendida Canônica de um valor BSON
- [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md) - Retorna a representação JSON Estendida Relaxada de um valor BSON
- [» JSON Estendido do MongoDB](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
- [» BSON do MongoDB](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
