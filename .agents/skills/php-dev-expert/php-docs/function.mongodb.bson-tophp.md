# Retorna a representação PHP de um valor BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.bson-tophp.php

---

# MongoDB\BSON\toPHP

(mongodb >=1.0.0)

MongoDB\BSON\toPHP — Retorna a representação PHP de um valor BSON

**Aviso**

Esta função foi *DESCONTINUADA* a partir da versão
1.20.0 da extensão, e foi removida na 2.0. As aplicações devem usar
[MongoDB\BSON\Document::toPHP()](mongodb-bson-document.tophp.md) em seu lugar.

### Descrição

function **MongoDB\BSON\toPHP**([string](language.types.string.md) `$bson`, [array](language.types.array.md) `$typeMap` = array()): [array](language.types.array.md)|[object](language.types.object.md)

Desserializa um documento BSON (ou seja, string binária) para sua representação PHP.
O parâmetro `typeMap` pode ser usado para controlar os tipos
PHP usados ​​para converter arrays e documentos BSON (raiz e incorporados).

**Aviso**

Os documentos BSON tecnicamente podem conter chaves duplicadas porque os documentos são
armazenados como uma lista de pares chave-valor; no entanto, as aplicações devem evitar
a geração de documentos com chaves duplicadas, pois o comportamento do servidor e do driver
pode ser indefinido. Como os objetos e arrays do PHP não podem ter chaves duplicadas,
os dados também podem ser perdidos ao decodificar um documento BSON com chaves duplicadas.

### Parâmetros

`bson` ([string](language.types.string.md))
:   Valor BSON a ser desserializado.

`typeMap` ([array](language.types.array.md))
:   [Configuração de mapeamento de tipos](mongodb.persistence.md#mongodb.persistence.typemaps).

### Valor Retornado

O valor PHP desserializado.

### Erros/Exceções

- Lança uma
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  uma classe no mapa de tipos não puder ser instanciada ou não implementar
  [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md).
- Lança uma exceção [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se a entrada não contiver exatamente um documento BSON. Os possíveis motivos incluem, mas não estão limitados a, BSON inválido, dados extras (depois de ler um documento BSON) ou um erro inesperado da [» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta função foi removida. |
| PECL mongodb 1.4.0 | Se a entrada contiver um tipo BSON obsoleto e sem suporte, a extensão não registrará mais um aviso no registro de depuração, mas criará um objeto que representa esse tipo. |
| PECL mongodb 1.3.2 | [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) não será mais lançada se a entrada contiver um tipo BSON obsoleto e sem suporte. Esses tipos serão ignorados (como eram nas versões anteriores a 1.3.0), embora a extensão agora grave um alerta no registro de depuração (consulte: [mongodb.debug](mongodb.configuration.md#ini.mongodb.debug)). |
| PECL mongodb 1.3.0 | [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) será lançada se a entrada contiver um tipo BSON obsoleto e não suportado. Anteriormente, esses tipos eram ignorados. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\toPHP()****

```
<?php

$bson = hex2bin('0e00000010666f6f000100000000');
$value = MongoDB\BSON\toPHP($bson);
var_dump($value);

?>
```

O exemplo acima produzirá:

```
object(stdClass)#1 (1) {
  ["foo"]=>
  int(1)
}
```

### Veja também

- [MongoDB\BSON\Document::toPHP()](mongodb-bson-document.tophp.md) - Retorna a representação PHP do documento BSON
- [MongoDB\BSON\fromPHP()](function.mongodb.bson-fromphp.md) - Retorna a representação BSON de um valor PHP
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
