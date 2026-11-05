# Retorna uma representação que pode ser convertida para JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-maxkey.jsonserialize.php

---

# MongoDB\BSON\MaxKey::jsonSerialize

(mongodb >=1.2.0)

MongoDB\BSON\MaxKey::jsonSerialize — Retorna uma representação que pode ser convertida para JSON

### Descrição

final public function **MongoDB\BSON\MaxKey::jsonSerialize**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna dados que podem ser serializados por [json\_encode()](function.json-encode.md) para
produzir uma representação JSON estendida de
[MongoDB\BSON\MaxKey](class.mongodb-bson-maxkey.md).

> **Nota**:
>
> A saída é consistente com a função [MongoDB\BSON\toJSON()](function.mongodb.bson-tojson.md),
> que usa o formato JSON estendido legado específico do driver. Isso
> não corresponde necessariamente às representações JSON estendidas
> [» relaxadas](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#relaxed-extended-json-example)
> ou [» canônicas](https://github.com/mongodb/specifications/blob/master/source/extended-json/extended-json.md#canonical-extended-json-example)
> usadas por
> [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md) e
> [MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md), respectivamente.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [JsonSerializable::jsonSerialize()](jsonserializable.jsonserialize.md) - Especifica os dados que devem ser serializados para JSON
- [json\_encode()](function.json-encode.md) - Retorna a representação JSON de um valor
- [MongoDB\BSON\toCanonicalExtendedJSON()](function.mongodb.bson-tocanonicalextendedjson.md) - Retorna a representação JSON Estendida Canônica de um valor BSON
- [MongoDB\BSON\toRelaxedExtendedJSON()](function.mongodb.bson-torelaxedextendedjson.md) - Retorna a representação JSON Estendida Relaxada de um valor BSON
- [» JSON Estendido do MongoDB](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)

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
