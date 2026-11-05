# Retorna a preocupação de leitura para o gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.getreadconcern.php

---

# MongoDB\Driver\Manager::getReadConcern

(mongodb >=1.1.0)

MongoDB\Driver\Manager::getReadConcern — Retorna a preocupação de leitura para o gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::getReadConcern**(): [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md)

Retorna o [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) para o
gerenciador, que é derivado de suas opções de URI. Esta é a preocupação
de leitura padrão para consultas e comandos executados no gerenciador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) para o gerenciador.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::getReadConcern()****

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
var_dump($manager->getReadConcern());

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017/?readConcernLevel=local');
var_dump($manager->getReadConcern());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\ReadConcern)#2 (0) {
}
object(MongoDB\Driver\ReadConcern)#1 (1) {
  ["level"]=>
  string(5) "local"
}
```

### Veja também

- [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md)
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
