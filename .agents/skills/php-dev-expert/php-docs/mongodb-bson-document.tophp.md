# Retorna a representação PHP do documento BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.tophp.php

---

# MongoDB\BSON\Document::toPHP

(mongodb >=1.16.0)

MongoDB\BSON\Document::toPHP — Retorna a representação PHP do documento BSON

### Descrição

final public function **MongoDB\BSON\Document::toPHP**([?](language.types.null.md)[array](language.types.array.md) `$typeMap` = **`null`**): [array](language.types.array.md)|[object](language.types.object.md)

Desserializa o documento BSON para sua representação em PHP. O
parâmetro `typeMap` pode ser usado para controlar os tipos PHP
usados para converter arrays e documentos BSON (tanto nativos quanto integrados).

**Aviso**

Os documentos BSON tecnicamente podem conter chaves duplicadas porque os documentos são
armazenados como uma lista de pares chave-valor; no entanto, as aplicações devem evitar
a geração de documentos com chaves duplicadas, pois o comportamento do servidor e do driver
pode ser indefinido. Como os objetos e arrays do PHP não podem ter chaves duplicadas,
os dados também podem ser perdidos ao decodificar um documento BSON com chaves duplicadas.

### Parâmetros

`typeMap` ([array](language.types.array.md))
:   [Configuração de mapeamento de tipos](mongodb.persistence.md#mongodb.persistence.typemaps).

### Valor Retornado

O valor decodificado em PHP.

> **Nota**:
>
> Ao encontrar um valor codificado como inteiro de 64 bits no documento BSON,
> o valor de retorno deste método será uma instância de
> [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma exceção
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  uma classe no mapa de tipos não puder ser instanciada ou não implementar a interface
  [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md).

### Veja também

- [MongoDB\BSON\toPHP()](function.mongodb.bson-tophp.md) - Retorna a representação PHP de um valor BSON
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
