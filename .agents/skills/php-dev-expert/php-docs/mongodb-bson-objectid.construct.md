# Constrói um novo ObjectId

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-objectid.construct.php

---

# MongoDB\BSON\ObjectId::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\ObjectId::\_\_construct — Constrói um novo ObjectId

### Descrição

final public function **MongoDB\BSON\ObjectId::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$id` = **`null`**)

### Parâmetros

`id` ([string](language.types.string.md))
:   Uma string hexadecimal de 24 caracteres Se não informada, a extensão irá
    gerar um ObjectId.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `id` não for uma string hexadecimal de 24 caracteres.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\ObjectId::\_\_construct()****

```
<?php

var_dump(new MongoDB\BSON\ObjectId());

var_dump(new MongoDB\BSON\ObjectId('000000000000000000000001'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\ObjectId)#1 (1) {
  ["oid"]=>
  string(24) "56732d3dda14d81214634921"
}
object(MongoDB\BSON\ObjectId)#1 (1) {
  ["oid"]=>
  string(24) "000000000000000000000001"
}
```

### Veja também

- [» Referência sobre ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)
- [» Tipos BSON: ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)

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
