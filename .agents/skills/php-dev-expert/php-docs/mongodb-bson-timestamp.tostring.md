# Retorna a representação em string deste Timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-timestamp.tostring.php

---

# MongoDB\BSON\Timestamp::\_\_toString

(mongodb >=1.0.0)

MongoDB\BSON\Timestamp::\_\_toString — Retorna a representação em string deste Timestamp

### Descrição

final public function **MongoDB\BSON\Timestamp::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste Timestamp.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Timestamp::\_\_toString()****

```
<?php

$timestamp = new MongoDB\BSON\Timestamp(1234, 5678);
var_dump((string) $timestamp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "[1234:5678]"
```

### Veja também

- [» Tipos BSON: Timestamps](https://www.mongodb.com/docs/manual/reference/bson-types/#timestamps)

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
