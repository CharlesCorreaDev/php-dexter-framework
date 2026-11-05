# Retorna string representando os dados de Binary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-binary.tostring.php

---

# MongoDB\BSON\Binary::\_\_toString

(mongodb >=1.2.0)

MongoDB\BSON\Binary::\_\_toString — Retorna string representando os dados de Binary

### Descrição

final public function **MongoDB\BSON\Binary::\_\_toString**(): [string](language.types.string.md)

Este método é um apelido para: [MongoDB\BSON\Binary::getData()](mongodb-bson-binary.getdata.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna string representando os dados de Binary.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Binary::\_\_toString()****

```
<?php

var_dump((string) new MongoDB\BSON\Binary('foo', MongoDB\BSON\Binary::TYPE_GENERIC));

?>
```

O exemplo acima produzirá:

```
string(3) "foo"
```

### Veja também

- [MongoDB\BSON\Binary::getData()](mongodb-bson-binary.getdata.md) - Retorna os dados de Binary
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
