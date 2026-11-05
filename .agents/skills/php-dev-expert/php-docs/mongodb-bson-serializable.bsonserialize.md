# Fornece um array ou documento para serializar como BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-serializable.bsonserialize.php

---

# MongoDB\BSON\Serializable::bsonSerialize

(mongodb >=1.0.0)

MongoDB\BSON\Serializable::bsonSerialize — Fornece um array ou documento para serializar como BSON

### Descrição

abstract public function **MongoDB\BSON\Serializable::bsonSerialize**(): [array](language.types.array.md)|[stdClass](class.stdclass.md)|[MongoDB\BSON\Document](class.mongodb-bson-document.md)|[MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

Chamado durante a serialização do objeto para BSON. O método precisa retornar um
[array](language.types.array.md), uma [stdClass](class.stdclass.md), um [MongoDB\BSON\Document](class.mongodb-bson-document.md)
ou um [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md).

Documentos raiz (ex.: um
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md) passado para
[MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md)) sempre serão
serializados como um documento BSON. Para valores de campos, arrays associativos e
instâncias de [stdClass](class.stdclass.md) serão serializados como um documento
BSON e arrays sequenciais (isto é, índices numéricos sequenciais iniciando em
`0`) serão serializados como um array BSON.

Usuários são encorajados a incluir uma propriedade \_id (ex.: um
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) inicializado no construtor)
ao retornar dados para um documento nativo BSON. Na ausência de uma
propriedade \_id, a extensão ou servidor irá gerar um
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para operações de inserção ou
atualização, respectivamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md), uma [stdClass](class.stdclass.md), um [MongoDB\BSON\Document](class.mongodb-bson-document.md),
ou um [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) para ser serializado como um array
ou documento BSON.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| PECL mongodb 1.17.0 | O tipo de retorno foi alterado de [array](language.types.array.md)|[object](language.types.object.md). Em vez de [object](language.types.object.md), o tipo de retorno agora especifica [stdClass](class.stdclass.md). As classes que implementam esta interface devem ser alteradas para não declararem mais um tipo de retorno [object](language.types.object.md). Como o tipo de retorno é provisório, um aviso de descontinuação é emitido no PHP 8.1 e mais recentes.  Além das alterações acima, a extensão agora também suporta o retorno de instâncias de [MongoDB\BSON\Document](class.mongodb-bson-document.md) e [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md). Observe que quaisquer instâncias de [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) retornadas são convertidas silenciosamente em objetos quando armazenadas como documentos raiz. Eles são armazenados como arrays quando usados ​​como um valor de campo incorporado. |

### Examples

**Exemplo #1 **MongoDB\BSON\Serializable::bsonSerialize()** retornando um array associativo para documento raiz**

```
<?php

class MyDocument implements MongoDB\BSON\Serializable
{
    private $id;

    function __construct()
    {
        $this->id = new MongoDB\BSON\ObjectId;
    }

    function bsonSerialize(): array
    {
        return ['_id' => $this->id, 'foo' => 'bar'];
    }
}

echo MongoDB\BSON\Document::fromPHP(new MyDocument)->toRelaxedExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
{ "_id" : { "$oid" : "56cccdcada14d8755a58c591" }, "foo" : "bar" }
```

**Exemplo #2 **MongoDB\BSON\Serializable::bsonSerialize()** retornando um array sequencial para documento raiz**

```
<?php

class MyArray implements MongoDB\BSON\Serializable
{
    function bsonSerialize(): array
    {
        return [1, 2, 3];
    }
}

echo MongoDB\BSON\Document::fromPHP(new MyArray)->toRelaxedExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá:

```
{ "0" : 1, "1" : 2, "2" : 3 }
```

**Exemplo #3 **MongoDB\BSON\Serializable::bsonSerialize()** retornando um array associativo para campo de documento**

```
<?php

class MyDocument implements MongoDB\BSON\Serializable
{
    function bsonSerialize(): array
    {
        return ['foo' => 'bar'];
    }
}

$value = ['document' => new MyDocument];

echo MongoDB\BSON\Document::fromPHP($value)->toRelaxedExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá:

```
{ "document" : { "foo" : "bar" } }
```

**Exemplo #4 **MongoDB\BSON\Serializable::bsonSerialize()** retornando um array sequencial para campo de documento**

```
<?php

class MyArray implements MongoDB\BSON\Serializable
{
    function bsonSerialize(): array
    {
        return [1, 2, 3];
    }
}

$value = ['array' => new MyArray];

echo MongoDB\BSON\Document::fromPHP($value)->toRelaxedExtendedJSON(), "\n";

?>
```

O exemplo acima produzirá:

```
{ "array" : [ 1, 2, 3 ] }
```

### Veja também

- [MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md) - Constrói o objeto a partir de um array ou documento BSON
- [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md)
- [Dados Persistentes](mongodb.persistence.md)

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
