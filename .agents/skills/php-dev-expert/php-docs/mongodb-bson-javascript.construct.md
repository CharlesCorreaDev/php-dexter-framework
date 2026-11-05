# Constrói um novo Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascript.construct.php

---

# MongoDB\BSON\Javascript::\_\_construct

(mongodb >=1.0.0)

MongoDB\BSON\Javascript::\_\_construct — Constrói um novo Javascript

### Descrição

final public function **MongoDB\BSON\Javascript::\_\_construct**([string](language.types.string.md) `$code`, [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md) `$scope` = **`null`**)

### Parâmetros

`code` ([string](language.types.string.md))
:   Código Javascript.

`scope` ([array](language.types.array.md)|[object](language.types.object.md))
:   Código Javascript.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `code` contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.2.0 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) é lançada se `code` contiver bytes nulos. Anteriormente, valores seriam truncados no primeiro byte nulo. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\Javascript::\_\_construct()****

```
<?php

$code = new MongoDB\BSON\Javascript('function() { return 1; }');
var_dump($code);

$codews = new MongoDB\BSON\Javascript('function() { return foo; }', ['foo' => 'bar']);
var_dump($codews);

?>
```

O exemplo acima produzirá:

```
object(MongoDB\BSON\Javascript)#1 (2) {
  ["javascript"]=>
  string(24) "function() { return 1; }"
  ["scope"]=>
  object(stdClass)#2 (0) {
  }
}
object(MongoDB\BSON\Javascript)#2 (2) {
  ["javascript"]=>
  string(26) "function() { return foo; }"
  ["scope"]=>
  object(stdClass)#1 (1) {
    ["foo"]=>
    string(3) "bar"
  }
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
