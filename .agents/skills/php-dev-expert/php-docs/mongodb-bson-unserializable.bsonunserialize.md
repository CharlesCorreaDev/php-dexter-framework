# Constrói o objeto a partir de um array ou documento BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-unserializable.bsonunserialize.php

---

# MongoDB\BSON\Unserializable::bsonUnserialize

(mongodb >=1.0.0)

MongoDB\BSON\Unserializable::bsonUnserialize — Constrói o objeto a partir de um array ou documento BSON

### Descrição

abstract public function **MongoDB\BSON\Unserializable::bsonUnserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

Chamado durante a desserialização do objeto a partir do BSON. As propriedades do
array ou documento BSON serão passadas ao método como um [array](language.types.array.md).

Lembre-se de considerar uma propriedade \_id ao manipular dados
a partir de um documento BSON.

> **Nota**:
>
> Este método atua como o
> [construtor](language.oop5.decon.md#language.oop5.decon.constructor) do
> objeto. O método [\_\_construct()](language.oop5.decon.md#object.construct)
> *não* será chamado após este método.

### Parâmetros

`data` ([array](language.types.array.md))
:   Propriedades dentro do array ou documento BSON.

### Valor Retornado

O valor de retorno deste método é ignorado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Unserializable::bsonUnserialize()****

```
<?php

class MyDocument implements MongoDB\BSON\Unserializable
{
    private $data = [];

    function bsonUnserialize(array $data): void
    {
        $this->data = $data;
    }
}

$bson = MongoDB\BSON\Document::fromJSON('{ "foo": "bar" }');

var_dump($bson->toPHP(['root' => 'MyDocument']));

?>
```

O exemplo acima produzirá:

```
object(MyDocument)#1 (1) {
  ["data":"MyDocument":private]=>
  array(1) {
    ["foo"]=>
    string(3) "bar"
  }
}
```

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON
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
