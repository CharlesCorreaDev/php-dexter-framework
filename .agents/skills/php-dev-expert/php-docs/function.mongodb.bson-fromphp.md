# Retorna a representação BSON de um valor PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.bson-fromphp.php

---

# MongoDB\BSON\fromPHP

(mongodb >=1.0.0)

MongoDB\BSON\fromPHP — Retorna a representação BSON de um valor PHP

**Aviso**

Esta função foi *DESCONTINUADA* a partir da versão
1.20.0 da extensão, e foi removida na 2.0. As aplicações devem usar
[MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md) em seu lugar.

### Descrição

function **MongoDB\BSON\fromPHP**([array](language.types.array.md)|[object](language.types.object.md) `$value`): [string](language.types.string.md)

Serializa um array ou objeto (ex.: documento) para sua
representação [» BSON](https://www.mongodb.com/docs/manual/reference/bson-types/). A
string binária retornada irá descrever um documento BSON.

### Parâmetros

`value` ([array](language.types.array.md)|[object](language.types.object.md))
:   O valor PHP a ser serializado.

### Valor Retornado

O documento BSON serializado como uma string binária.

### Erros/Exceções

- Lança uma
  [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se
  o valor PHP não puder ser convertido para BSON. Possíveis motivos incluem, por
  exemplo, encontrar uma instância
  inesperada de [MongoDB\BSON\Type](class.mongodb-bson-type.md) ou falha
  do método [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) em
  retornar um [array](language.types.array.md) ou uma [stdClass](class.stdclass.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta função foi removida. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\fromPHP()****

```
<?php

$bson = MongoDB\BSON\fromPHP(['foo' => 1]);
echo bin2hex($bson), "\n";

?>
```

O exemplo acima produzirá:

```
0e00000010666f6f000100000000
```

### Veja também

- [MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md) - Constrói uma nova instância de documento a partir de dados PHP
- [MongoDB\BSON\toPHP()](function.mongodb.bson-tophp.md) - Retorna a representação PHP de um valor BSON
- [» BSON do MongoDB](https://www.mongodb.com/docs/manual/reference/bson-types/)
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
