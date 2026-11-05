# Retorna a representação em string deste Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-regex.tostring.php

---

# MongoDB\BSON\Regex::\_\_toString

(mongodb >=1.0.0)

MongoDB\BSON\Regex::\_\_toString — Retorna a representação em string deste Regex

### Descrição

final public function **MongoDB\BSON\Regex::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste Regex.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Regex::\_\_toString()****

```
<?php

$regex = new MongoDB\BSON\Regex('regex', 'i');
var_dump((string) $regex);

?>
```

O exemplo acima produzirá:

```
string(8) "/regex/i"
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
