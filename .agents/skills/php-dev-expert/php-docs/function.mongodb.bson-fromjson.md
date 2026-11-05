# Retorna a representação BSON de um valor JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.bson-fromjson.php

---

# MongoDB\BSON\fromJSON

(mongodb >=1.0.0)

MongoDB\BSON\fromJSON — Retorna a representação BSON de um valor JSON

**Aviso**

Esta função foi *DESCONTINUADA* a partir da versão
1.20.0 da extensão, e foi removida na 2.0. As aplicações devem usar
[MongoDB\BSON\Document::fromJSON()](mongodb-bson-document.fromjson.md) em seu lugar.

### Descrição

function **MongoDB\BSON\fromJSON**([string](language.types.string.md) `$json`): [string](language.types.string.md)

Converte uma string
[» JSON estendida](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
para sua representação BSON.

### Parâmetros

`json` ([string](language.types.string.md))
:   Valor JSON a ser convertido.

### Valor Retornado

O documento BSON serializado como uma string binária.

### Erros/Exceções

- Lança uma
  [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se
  o valor JSON não puder ser convertido para BSON (ex.: devido a erro de sintaxe).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta função foi removida. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\fromJSON()****

```
<?php

$json = '{ "_id": { "$oid": "563143b280d2387c91807965" } }';
$bson = MongoDB\BSON\fromJSON($json);
$value = MongoDB\BSON\toPHP($bson);
var_dump($value);

?>
```

O exemplo acima produzirá:

```
object(stdClass)#2 (1) {
  ["_id"]=>
  object(MongoDB\BSON\ObjectId)#1 (1) {
    ["oid"]=>
    string(24) "563143b280d2387c91807965"
  }
}
```

### Veja também

- [MongoDB\BSON\Document::fromJSON()](mongodb-bson-document.fromjson.md) - Constrói uma nova instância de documento a partir de uma string JSON
- [MongoDB\BSON\toJSON()](function.mongodb.bson-tojson.md) - Retorna a representação JSON Estendida Legada de um valor BSON
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
