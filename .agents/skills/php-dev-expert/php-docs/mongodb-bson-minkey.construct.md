# Constrói um novo MinKey

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-minkey.construct.php

---

# MongoDB\BSON\MinKey::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\MinKey::\_\_construct — Constrói um novo MinKey

### Descrição

final public function **MongoDB\BSON\MinKey::\_\_construct**()

### Parâmetros

Esta função não possui parâmetros.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\MinKey::\_\_construct()****

```
<?php

var_dump(new MongoDB\BSON\MinKey());

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\MinKey)#1 (0) {
}
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
