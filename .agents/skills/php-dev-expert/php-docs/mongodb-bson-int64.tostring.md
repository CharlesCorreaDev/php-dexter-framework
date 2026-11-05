# Retorna a representação em string deste Int64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-int64.tostring.php

---

# MongoDB\BSON\Int64::\_\_toString

(mongodb >=1.5.0)

MongoDB\BSON\Int64::\_\_toString — Retorna a representação em string deste Int64

### Descrição

final public function **MongoDB\BSON\Int64::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste Int64.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Int64::\_\_toString()****

```
<?php

$int64 = new MongoDB\BSON\Int64('9223372036854775807');

var_dump((string) $int64);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(19) "9223372036854775807"
```

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
