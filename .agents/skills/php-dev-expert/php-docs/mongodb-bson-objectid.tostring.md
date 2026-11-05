# Retorna a representação hexadecimal deste ObjectId

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-objectid.tostring.php

---

# MongoDB\BSON\ObjectId::\_\_toString

(mongodb >=1.0.0)

MongoDB\BSON\ObjectId::\_\_toString — Retorna a representação hexadecimal deste ObjectId

### Descrição

final public function **MongoDB\BSON\ObjectId::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação hexadecimal deste ObjectId.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\ObjectId::\_\_toString()****

```
<?php

var_dump((string) new MongoDB\BSON\ObjectId());
var_dump((string) new MongoDB\BSON\ObjectId('000000000000000000000001'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(24) "56731b49da14d8747d701211"
string(24) "000000000000000000000001"
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
