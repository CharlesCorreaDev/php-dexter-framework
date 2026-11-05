# Retorna a representação em string deste UTCDateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-utcdatetime.tostring.php

---

# MongoDB\BSON\UTCDateTime::\_\_toString

(mongodb >=1.0.0)

MongoDB\BSON\UTCDateTime::\_\_toString — Retorna a representação em string deste UTCDateTime

### Descrição

final public function **MongoDB\BSON\UTCDateTime::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste UTCDateTime.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\UTCDateTime::\_\_toString()****

```
<?php

$utcdatetime = new MongoDB\BSON\UTCDateTime(1416445411987);
var_dump((string) $utcdatetime);

?>
```

O exemplo acima produzirá:

```
string(13) "1416445411987"
```

### Veja também

- [» Tipos BSON: Data](https://www.mongodb.com/docs/manual/reference/bson-types/#date)

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
