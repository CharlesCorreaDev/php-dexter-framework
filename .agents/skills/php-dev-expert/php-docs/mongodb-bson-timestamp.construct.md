# Constrói um novo Timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-timestamp.construct.php

---

# MongoDB\BSON\Timestamp::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\Timestamp::\_\_construct — Constrói um novo Timestamp

### Descrição

final public function **MongoDB\BSON\Timestamp::\_\_construct**([int](language.types.integer.md) `$increment`, [int](language.types.integer.md) `$timestamp`)

### Parâmetros

`increment` ([int](language.types.integer.md))
:   Inteiro de 32 bits denotando o ordinal de incremento para operações dentro de
    um determninado segundo.

`timestamp` ([int](language.types.integer.md))
:   Inteiro de 32 bits denotando os segundos desde a época Unix.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Timestamp::\_\_construct()****

```
<?php

$timestamp = new MongoDB\BSON\Timestamp(1234, 5678);

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\Timestamp)#1 (2) {
  ["increment"]=>
  int(1234)
  ["timestamp"]=>
  int(5678)
}
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
