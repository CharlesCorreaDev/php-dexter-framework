# Retorna a procupação de gravação para o gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.getwriteconcern.php

---

# MongoDB\Driver\Manager::getWriteConcern

(mongodb >=1.0.0)

MongoDB\Driver\Manager::getWriteConcern — Retorna a procupação de gravação para o gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::getWriteConcern**(): [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)

Retorna o [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) para o
gerenciador, que é derivado de suas opções de URI. Esta é a preocupação de
gravação padrão para gravações e comandos executados no gerenciador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) para o gerenciador.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::getWriteConcern()****

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
var_dump($manager->getWriteConcern());

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017/?w=majority&wtimeoutMS=2000');
var_dump($manager->getWriteConcern());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\WriteConcern)#2 (0) {
}
object(MongoDB\Driver\WriteConcern)#1 (2) {
  ["w"]=>
  string(8) "majority"
  ["wtimeout"]=>
  int(2000)
}
```

### Veja também

- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\Manager::\_\_construct()](mongodb-driver-manager.construct.md) - Cria um novo gerenciador MongoDB

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
