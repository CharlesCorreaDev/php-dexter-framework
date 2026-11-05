# Serialização e desserialização de variáveis PHP no MongoDB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.persistence.php

---

## Serialização e desserialização de variáveis PHP no MongoDB

Este documento discute como estruturas compostas (ou seja, documentos, arrays e
objetos) são convertidas entre valores BSON e PHP.

## Serialização para BSON

## Arrays

Se um array for um *array compactado* - ou seja, um array vazio ou
as chaves começam em 0 e são sequenciais sem lacunas: *array
BSON*.

Se o array não estiver compactado - ou seja, tiver chaves associativas (string), as
chaves não começam em 0 ou quando há lacunas:: *objeto
BSON*

Um documento de nível superior (raiz), *sempre* serializa como um
documento BSON.

## Exemplos

Estes são serializados como um array BSON:

```
[ 8, 5, 2, 3 ] => [ 8, 5, 2, 3 ]
[ 0 => 4, 1 => 9 ] => [ 4, 9 ]
```

Estes são serializados como um documento BSON:

```
[ 0 => 1, 2 => 8, 3 => 12 ] => { "0" : 1, "2" : 8, "3" : 12 }
[ "foo" => 42 ] => { "foo" : 42 }
[ 1 => 9, 0 => 10 ] => { "1" : 9, "0" : 10 }
```

Observe que os cinco exemplos são *extraídos* de um documento
completo e representam apenas *um* valor dentro de um
documento.

## Objetos

Se um objeto for da classe [stdClass](class.stdclass.md), serialize
como um *documento BSON*.

Se um objeto for de uma classe suportada que implementa
[MongoDB\BSON\Type](class.mongodb-bson-type.md), use a lógica de serialização BSON
para esse tipo específico.
Instâncias [MongoDB\BSON\Type](class.mongodb-bson-type.md), excluindo
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), só podem ser
serializadas como um valor de campo de documento. Tentar serializar tal
objeto como um documento raiz lançará uma exceção
[MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md)

Se um objeto for de uma classe desconhecida que implementa a
interface [MongoDB\BSON\Type](class.mongodb-bson-type.md), lance uma exceção
[MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md)

Se um objeto for de qualquer outra classe, sem implementar nenhuma interface
especial, serialize como um *documento BSON*. Mantenha apenas
propriedades *públicas* e ignore
propriedades *protegidas* e
*privadas*.

Se um objeto for de uma classe que implementa a
interface [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), chame
[MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) e use
o array retornado ou [stdClass](class.stdclass.md) para serializar como um
documento ou array BSON. O tipo BSON será determinado pelo seguinte:

1. Os documentos raiz devem ser serializados como um
   documento BSON.
2. Os objetos [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md) devem ser
   serializados como um documento BSON.
3. Se [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md)
   retornar um array compactado, serialize como um array BSON.
4. Se [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md)
   retornar um array não compactado ou [stdClass](class.stdclass.md),
   serialize como um documento BSON.
5. Se [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md)
   não retornou um array ou [stdClass](class.stdclass.md), lance uma
   exceção
   [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md).

Se um objeto for de uma classe que implementa a
interface [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md) (o que
implica [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md)), obtenha
as propriedades de maneira semelhante à parágrafos anteriores, mas
*também* adicione uma propriedade adicional
\_\_pclass como um valor binário, com subtipo
`0x80` e dados contendo o nome completo da classe do objeto
que está sendo serializado.

A propriedade \_\_pclass é adicionada ao array ou
objeto retornado por
[MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md), o que
significa que ela substituirá qualquer chave/propriedade \_\_pclass no
valor de retorno [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md).
Se você quiser evitar esse comportamento e definir seu próprio
valor \_\_pclass, você *não* deve
implementar [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md) e,
em vez disso, deve implementar
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md) diretamente.

## Exemplos

```
<?php

class stdClass
{
    public $foo = 42;
} // => {"foo": 42}

class MyClass
{
    public $foo = 42;
    protected $prot = 'wine';
    private $fpr = 'cheese';
} // => {"foo": 42}

class AnotherClass1 implements MongoDB\BSON\Serializable
{
    public $foo = 42;
    protected $prot = 'wine';
    private $fpr = 'cheese';

    public function bsonSerialize(): array
    {
        return ['foo' => $this->foo, 'prot' => $this->prot];
    }
} // => {"foo": 42, "prot": "wine"}

class AnotherClass2 implements MongoDB\BSON\Serializable
{
    public $foo = 42;

    public function bsonSerialize(): self
    {
        return $this;
    }
} // => MongoDB\Driver\Exception\UnexpectedValueException("bsonSerialize() did not return an array or stdClass")

class AnotherClass3 implements MongoDB\BSON\Serializable
{
    private $elements = ['foo', 'bar'];

    public function bsonSerialize(): array
    {
        return $this->elements;
    }
} // => {"0": "foo", "1": "bar"}

/**
 * Aninhando Classes Serializáveis
 */

class AnotherClass4 implements MongoDB\BSON\Serializable
{
    private $elements = [0 => 'foo', 2 => 'bar'];

    public function bsonSerialize(): array
    {
        return $this->elements;
    }
} // => {"0": "foo", "2": "bar"}

class ContainerClass1 implements MongoDB\BSON\Serializable
{
    public $things;

    public function __construct()
    {
        $this->things = new AnotherClass4();
    }

    function bsonSerialize(): array
    {
        return ['things' => $this->things];
    }
} // => {"things": {"0": "foo", "2": "bar"}}

class AnotherClass5 implements MongoDB\BSON\Serializable
{
    private $elements = [0 => 'foo', 2 => 'bar'];

    public function bsonSerialize(): array
    {
        return array_values($this->elements);
    }
} // => {"0": "foo", "1": "bar"} como uma classe raiz
  //    ["foo", "bar"] como um valor aninhado

class ContainerClass2 implements MongoDB\BSON\Serializable
{
    public $things;

    public function __construct()
    {
        $this->things = new AnotherClass5();
    }

    public function bsonSerialize(): array
    {
        return ['things' => $this->things];
    }
} // => {"things": ["foo", "bar"]}

class AnotherClass6 implements MongoDB\BSON\Serializable
{
    private $elements = ['foo', 'bar'];

    function bsonSerialize(): object
    {
        return (object) $this->elements;
    }
} // => {"0": "foo", "1": "bar"}

class ContainerClass3 implements MongoDB\BSON\Serializable
{
    public $things;

    public function __construct()
    {
        $this->things = new AnotherClass6();
    }

    public function bsonSerialize(): array
    {
        return ['things' => $this->things];
    }
} // => {"things": {"0": "foo", "1": "bar"}}

class UpperClass implements MongoDB\BSON\Persistable
{
    public $foo = 42;
    protected $prot = 'wine';
    private $fpr = 'cheese';

    private $data;

    public function bsonUnserialize(array $data): void
    {
        $this->data = $data;
    }

    public function bsonSerialize(): array
    {
        return ['foo' => $this->foo, 'prot' => $this->prot];
    }
} // => {"foo": 42, "prot": "wine", "__pclass": {"$type": "80", "$binary": "VXBwZXJDbGFzcw=="}}

?>
```

## Desserialização do BSON

**Aviso**

Os documentos BSON tecnicamente podem conter chaves duplicadas porque os documentos são
armazenados como uma lista de pares chave-valor; no entanto, as aplicações devem evitar
a geração de documentos com chaves duplicadas, pois o comportamento do servidor e do driver
pode ser indefinido. Como os objetos e arrays do PHP não podem ter chaves duplicadas,
os dados também podem ser perdidos ao decodificar um documento BSON com chaves duplicadas.

A extensão `mongo` herdada desserializou
documentos BSON e arrays como arrays PHP. Embora arrays PHP sejam c
onvenientes para trabalhar, esse comportamento era problemático porque diferentes
tipos de BSON poderiam desserializar para o mesmo valor PHP (por exemplo,
`{"0": "foo"}` e `["foo"]`) e torna
impossível inferir o tipo BSON original. Por padrão, a
extensão `mongodb` aborda essa preocupação garantindo que arrays e
documentos BSON sejam convertidos em arrays e objetos PHP, respectivamente.

Para tipos compostos, existem três tipos de dados:

root
:   refere-se ao documento BSON de nível superior *apenas*

document
:   refere-se a documentos BSON incorporados *apenas*

array
:   refere-se a um array BSON

Além dos três tipos de coletivos, também é possível configurar
campos específicos em seu documento para mapear os tipos de dados mencionados abaixo.
Como exemplo, o seguinte mapa de tipos permite a você
mapear cada documento incorporado dentro de um array `"addresses"` para
uma classe **Address** *e* cada
`"city"` dentro desses documentos de endereço incorporados para
uma classe **City**:

```
[
    'fieldPaths' => [
        'addresses.$' => 'MyProject\Address',
        'addresses.$.city' => 'MyProject\City',
    ],
]
```

Cada um desses três tipos de dados, bem como os mapeamentos específicos de campo,
podem ser mapeados em diferentes tipos de PHP. Os possíveis valores de mapeamento
são:

*não definido* ou [NULL](language.types.null.md) (padrão)
:   - Um array BSON será desserializado como um [array](language.types.array.md) PHP.
    - Um documento BSON (raiz ou incorporado) sem uma
      propriedade \_\_pclass
      [[1]](#fnidmongodb.pclass)

      Uma propriedade \_\_pclass só é considerada existente se
      existir uma propriedade com esse nome, e for um valor Binário,
      e o subtipo do valor Binário for 0x80. Se alguma dessas três
      condições não for atendida, a propriedade \_\_pclass não existe e
      deverá ser tratada como qualquer outra propriedade normal.

      torna-se um objeto PHP [stdClass](class.stdclass.md), com cada
      chave de documento BSON definida como uma propriedade pública
      [stdClass](class.stdclass.md).
    - Um documento BSON (raiz ou incorporado) com uma
      propriedade \_\_pclass [[1]](#fnidmongodb.pclass) torna-se um objeto PHP com
      o nome da classe conforme definido pela propriedade
      \_\_pclass.

      Se a classe nomeada implementar a
      interface [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md),
      então as propriedades do documento BSON, incluindo a
      propriedade \_\_pclass, serão enviadas como um array
      associativo para a função
      [MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md)
      para inicializar as propriedades do objeto.

      Se a classe nomeada não existir ou não implementar a
      interface [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md),
      [stdClass](class.stdclass.md) será usada e cada chave de documento BSON
      (incluindo \_\_pclass) será definido como uma
      propriedade pública [stdClass](class.stdclass.md).

      A funcionalidade \_\_pclass depende da
      propriedade fazer parte de um documento MongoDB recuperado. Se você usar uma
      [projeção](mongodb-driver-query.construct.md#mongodb-driver-query.construct-queryOptions)
      ao consultar documentos, será necessário incluir o campo
      \_\_pclass na projeção para esta
      funcionalidade trabalhar.

`"array"`
:   Transforma um array BSON ou documento BSON em um array PHP. Não haverá tratamento
    especial para uma propriedade \_\_pclass [[1]](#fnidmongodb.pclass),
    mas ela poderá ser definida como um elemento no array retornado se estiver
    presente no documento BSON.

`"object"` ou `"stdClass"`
:   Transforma um array BSON ou documento BSON em um
    objeto [stdClass](class.stdclass.md). Não haverá tratamento especial
    para uma propriedade \_\_pclass [[1]](#fnidmongodb.pclass), mas ela poderá
    ser definida como uma propriedade pública no objeto retornado se estiver presente
    no documento BSON.

`"bson"`
:   Transforma um array BSON em um [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)
    e um documento BSON em um [MongoDB\BSON\Document](class.mongodb-bson-document.md),
    independentemente de o documento BSON ter uma propriedade \_\_pclass
    [[1]](#fnidmongodb.pclass).

    > **Nota**:
    >
    > O valor `bson` está disponível apenas para os três tipos de
    > raiz, não nos mapeamentos específicos do campo.

qualquer outra string
:   Define o nome da classe como um array BSON ou o objeto BSON deve ser
    desserializado. Para objetos BSON que incluem
    propriedades \_\_pclass, essa classe terá
    prioridade.

    Se a classe nomeada não existir, não for concreta (ou seja, for
    abstrata ou uma interface) ou não implementar
    [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md) então uma
    exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md)
    é lançada.

    Se o objeto BSON tiver uma propriedade \_\_pclass e
    essa classe existir e implementar
    [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md) ela
    substituirá a classe fornecida no mapa de tipos.

    As propriedades do documento BSON, *incluindo*
    a propriedade \_\_pclass se existir, serão enviadas
    como um array associativo para a função
    [MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md)
    para inicializar as propriedades do objeto.

## TypeMaps

TypeMaps podem ser definidos através do
método [MongoDB\Driver\Cursor::setTypeMap()](mongodb-driver-cursor.settypemap.md) em um
objeto [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) ou do
argumento `$typeMap` de
[MongoDB\BSON\toPHP()](function.mongodb.bson-tophp.md),
[MongoDB\BSON\Document::toPHP()](mongodb-bson-document.tophp.md) e
[MongoDB\BSON\PackedArray::toPHP()](mongodb-bson-packedarray.tophp.md). Cada uma das três
classes (*root*, *document* e
*array*) pode ser definida individualmente, além dos tipos
específicos de campo.

Se o valor no mapa for [NULL](language.types.null.md), significa o mesmo que o valor
*padrão* para esse item.

## Exemplos

Esses exemplos usam as seguintes classes:

MyClass
:   que *não* implementa nenhuma interface

YourClass
:   que implementa
    [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md)

OurClass
:   que implementa
    [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md)

TheirClass
:   que estende OurClass

O método [MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md)
de YourClass, OurClass, TheirClass itera sobre o array e define
as propriedades sem modificações. Ele *também* define
a propriedade `$unserialized` como **`true`**:

```
<?php

function bsonUnserialize( array $map )
{
    foreach ( $map as $k => $value )
    {
        $this->$k = $value;
    }
    $this->unserialized = true;
}
```

```
/* typemap: [] (all defaults) */
{ "foo": "yes", "bar" : false }
  -> stdClass { $foo => 'yes', $bar => false }

{ "foo": "no", "array" : [ 5, 6 ] }
  -> stdClass { $foo => 'no', $array => [ 5, 6 ] }

{ "foo": "no", "obj" : { "embedded" : 3.14 } }
  -> stdClass { $foo => 'no', $obj => stdClass { $embedded => 3.14 } }

{ "foo": "yes", "__pclass": "MyClass" }
  -> stdClass { $foo => 'yes', $__pclass => 'MyClass' }

{ "foo": "yes", "__pclass": { "$type" : "80", "$binary" : "MyClass" } }
  -> stdClass { $foo => 'yes', $__pclass => Binary(0x80, 'MyClass') }

{ "foo": "yes", "__pclass": { "$type" : "80", "$binary" : "YourClass") }
  -> stdClass { $foo => 'yes', $__pclass => Binary(0x80, 'YourClass') }

{ "foo": "yes", "__pclass": { "$type" : "80", "$binary" : "OurClass") }
  -> OurClass { $foo => 'yes', $__pclass => Binary(0x80, 'OurClass'), $unserialized => true }

{ "foo": "yes", "__pclass": { "$type" : "44", "$binary" : "YourClass") }
  -> stdClass { $foo => 'yes', $__pclass => Binary(0x44, 'YourClass') }
```

```
/* typemap: [ "root" => "MissingClass" ] */
{ "foo": "yes" }
  -> MongoDB\Driver\Exception\InvalidArgumentException("MissingClass does not exist")

/* typemap: [ "root" => "MyClass" ] */
{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "MyClass" } }
  -> MongoDB\Driver\Exception\InvalidArgumentException("MyClass does not implement Unserializable interface")

/* typemap: [ "root" => "MongoDB\BSON\Unserializable" ] */
{ "foo": "yes" }
  -> MongoDB\Driver\Exception\InvalidArgumentException("Unserializable is not a concrete class")

/* typemap: [ "root" => "YourClass" ] */
{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "MongoDB\BSON\Unserializable" } }
  -> YourClass { $foo => "yes", $__pclass => Binary(0x80, "MongoDB\BSON\Unserializable"), $unserialized => true }

/* typemap: [ "root" => "YourClass" ] */
{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "MyClass" } }
  -> YourClass { $foo => "yes", $__pclass => Binary(0x80, "MyClass"), $unserialized => true }

/* typemap: [ "root" => "YourClass" ] */
{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "OurClass" } }
  -> OurClass { $foo => "yes", $__pclass => Binary(0x80, "OurClass"), $unserialized => true }

/* typemap: [ "root" => "YourClass" ] */
{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "TheirClass" } }
  -> TheirClass { $foo => "yes", $__pclass => Binary(0x80, "TheirClass"), $unserialized => true }

/* typemap: [ "root" => "OurClass" ] */
{ foo: "yes", "__pclass" : { "$type": "80", "$binary": "TheirClass" } }
  -> TheirClass { $foo => "yes", $__pclass => Binary(0x80, "TheirClass"), $unserialized => true }
```

```
/* typemap: [ 'root' => 'YourClass' ] */
{ foo: "yes", "__pclass" : { "$type": "80", "$binary": "YourClass" } }
  -> YourClass { $foo => 'yes', $__pclass => Binary(0x80, 'YourClass'), $unserialized => true }
```

```
/* typemap: [ 'root' => 'array', 'document' => 'array' ] */
{ "foo": "yes", "bar" : false }
  -> [ "foo" => "yes", "bar" => false ]

{ "foo": "no", "array" : [ 5, 6 ] }
  -> [ "foo" => "no", "array" => [ 5, 6 ] ]

{ "foo": "no", "obj" : { "embedded" : 3.14 } }
  -> [ "foo" => "no", "obj" => [ "embedded => 3.14 ] ]

{ "foo": "yes", "__pclass": "MyClass" }
  -> [ "foo" => "yes", "__pclass" => "MyClass" ]

{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "MyClass" } }
  -> [ "foo" => "yes", "__pclass" => Binary(0x80, "MyClass") ]

{ "foo": "yes", "__pclass" : { "$type": "80", "$binary": "OurClass" } }
  -> [ "foo" => "yes", "__pclass" => Binary(0x80, "OurClass") ]
```

```
/* typemap: [ 'root' => 'object', 'document' => 'object' ] */
{ "foo": "yes", "__pclass": { "$type": "80", "$binary": "MyClass" } }
  -> stdClass { $foo => "yes", "__pclass" => Binary(0x80, "MyClass") }
```

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
