# Retorna a preferência de leitura para o gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.getreadpreference.php

---

# MongoDB\Driver\Manager::getReadPreference

(mongodb >=1.0.0)

MongoDB\Driver\Manager::getReadPreference — Retorna a preferência de leitura para o gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::getReadPreference**(): [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md)

Retorna o [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) para o
gerenciador, que é derivado de suas opções de URI. Esta é a preferência de leitura
padrão para consultas e comandos executados no gerenciador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) para o gerenciador.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::getReadPreference()****

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
var_dump($manager->getReadPreference());

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017/?readPreference=secondaryPreferred&readPreferenceTags=dc:ny,rack:1&readPreferenceTags=dc:ny&readPreferenceTags=');
var_dump($manager->getReadPreference());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\ReadPreference)#2 (1) {
  ["mode"]=>
  string(7) "primary"
}
object(MongoDB\Driver\ReadPreference)#1 (2) {
  ["mode"]=>
  string(18) "secondaryPreferred"
  ["tags"]=>
  array(3) {
    [0]=>
    object(stdClass)#3 (2) {
      ["dc"]=>
      string(2) "ny"
      ["rack"]=>
      string(1) "1"
    }
    [1]=>
    object(stdClass)#4 (1) {
      ["dc"]=>
      string(2) "ny"
    }
    [2]=>
    object(stdClass)#5 (0) {
    }
  }
}
```

### Veja também

- [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md)
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
