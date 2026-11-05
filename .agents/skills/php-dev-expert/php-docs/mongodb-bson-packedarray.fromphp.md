# Constrói uma nova instância de array BSON a partir de dados PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-packedarray.fromphp.php

---

# MongoDB\BSON\PackedArray::fromPHP

(mongodb >=1.16.0)

MongoDB\BSON\PackedArray::fromPHP — Constrói uma nova instância de array BSON a partir de dados PHP

### Descrição

final static public function **MongoDB\BSON\PackedArray::fromPHP**([array](language.types.array.md) `$value`): [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

### Parâmetros

`value` ([array](language.types.array.md))
:   O array PHP a ser convertido para um array BSON. O array precisa ser uma lista (isto é,
    ter chaves sequenciais numéricas iniciando com `0`).

### Valor Retornado

Retonar uma nova instância de [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se o array informado não for uma lista (isto é, se não tiver chaves sequenciais numéricas iniciando com `0`).

### Veja também

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
